<?php

namespace Drupal\oho_nav;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Link;
use Drupal\Core\Menu\MenuActiveTrailInterface;
use Drupal\Core\Menu\MenuLinkTreeInterface;
use Drupal\Core\Menu\MenuTreeParameters;
use Drupal\menu_link_content\Entity\MenuLinkContent;

/**
 * The Nav Builder service.
 */
class OHONavBuilder {

  /**
   * The menu link tree service.
   *
   * @var \Drupal\Core\Menu\MenuLinkTreeInterface
   */
  protected $menuTree;

  /**
   * The active menu trail service.
   *
   * @var \Drupal\Core\Menu\MenuActiveTrailInterface
   */
  protected $menuActiveTrail;

  /**
   * The menu link content storage.
   *
   * @var \Drupal\Core\Entity\EntityStorageInterface
   */
  protected $menuLinkContentStorage;

  /**
   * Constructs a new OHONavBuilder.
   *
   * @param \Drupal\Core\Menu\MenuLinkTreeInterface $menu_tree
   *   The menu tree service.
   * @param \Drupal\Core\Menu\MenuActiveTrailInterface $menu_active_trail
   *   The active menu trail service.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_manager
   *   The entity manager.
   */
  public function __construct(MenuLinkTreeInterface $menu_tree, MenuActiveTrailInterface $menu_active_trail, EntityTypeManagerInterface $entity_manager) {
    $this->menuTree = $menu_tree;
    $this->menuActiveTrail = $menu_active_trail;
    $this->menuLinkContentStorage = $entity_manager->getStorage('menu_link_content');
  }

  /**
   * Build a fixed level nav.
   *
   * @param int $start_level
   *   Starting level for the nav.
   * @param int $depth
   *   Ending depth for the nav.
   * @param array $options
   *   (optional) An associative array of additional options. See the
   *   buildNav function for a detailed description.
   * @param array $title_options
   *   (optional) An associative array of display options for the nav title.
   *   See the buildNav function for details.
   *
   * @return array
   *   A menu render array.
   */
  public function buildFixedLevelNav($start_level, $depth, array $options = [], array $title_options = []) {
    $menu_name = $this->getCurrentMenuName();
    $options['fixed'] = TRUE;
    $build = $this->buildNav($menu_name, $start_level, $depth, $options, $title_options);
    return $build;
  }

  /**
   * Build a relative level nav.
   *
   * @param int $relative_level
   *   Starting level for the nav, relative to the current menu item.
   * @param int $depth
   *   Ending depth for the nav.
   * @param array $options
   *   (optional) An associative array of additional options. See the
   *   buildNav function for a detailed description.
   * @param array $title_options
   *   (optional) An associative array of display options for the nav title.
   *   See the buildNav function for details.
   *
   * @return array
   *   A menu render array.
   */
  public function buildRelativeLevelNav($relative_level, $depth, array $options = [], array $title_options = []) {
    $menu_name = $this->getCurrentMenuName();
    $options['fixed'] = FALSE;
    $options['relative_level'] = $relative_level;
    $build = $this->buildNav($menu_name, 1, $depth, $options, $title_options);
    return $build;
  }

  /**
   * Build a fixed menu nav.
   *
   * @param string $menu_name
   *   Name of the menu to display.
   * @param int $start_level
   *   Starting level for the nav.
   * @param int $depth
   *   Ending depth for the nav.
   * @param array $options
   *   (optional) An associative array of additional options. See the
   *   buildNav function for a detailed description.
   * @param array $title_options
   *   (optional) An associative array of display options for the nav title.
   *   See the buildNav function for details.
   *
   * @return array
   *   A menu render array.
   */
  public function buildFixedMenuNav($menu_name, $start_level, $depth, array $options = [], array $title_options = []) {
    $options['fixed'] = TRUE;
    $build = $this->buildNav($menu_name, $start_level, $depth, $options, $title_options);
    return $build;
  }

  /**
   * Build a fixed parent nav.
   *
   * @param string $menu_name
   *   Name of the menu to display.
   * @param string $menu_link_id
   *   The menu link ID to use as the nav root.
   * @param int $depth
   *   Ending depth for the nav.
   * @param array $options
   *   (optional) An associative array of additional options. See the
   *   buildNav function for a detailed description.
   * @param array $title_options
   *   (optional) An associative array of display options for the nav title.
   *   See the buildNav function for details.
   *
   * @return array
   *   A menu render array.
   */
  public function buildFixedParentNav($menu_name, $menu_link_id, $depth, array $options = [], array $title_options = []) {
    $options['fixed'] = TRUE;
    $options['menu_link_id'] = $menu_link_id;
    $build = $this->buildNav($menu_name, 1, $depth, $options, $title_options);
    return $build;
  }

  /**
   * Get the active trail menu name.
   *
   * @return string
   *   Name of the current menu.
   */
  public function getCurrentMenuName() {
    $link = $this->menuActiveTrail->getActiveLink();
    $menu_name = !empty($link) ? $link->getMenuName() : '';
    return $menu_name;
  }

  /**
   * Build the nav render array.
   *
   * @param string $menu_name
   *   The name of the menu.
   * @param int $level
   *   Starting level for the nav.
   * @param int $depth
   *   Ending depth for the nav.
   * @param array $options
   *   (optional) An associative array of additional options, with the
   *   following elements:
   *   - 'type': A string specifying the type of nav. Used for template
   *     differentiation.
   *     The default value is an empty string.
   *   - 'expand': A boolean specifying whether to expand all menu links.
   *     The default value is TRUE.
   *   - 'sibling_depth': Depth difference for menu items not in the active
   *      trail. Some menus require that fewer menu levels appear below
   *      siblings of the current page than appear below the current page.
   *      For example, a menu may show 2 levels below the current page,
   *      but only 1 level below a sibling of the current page. In this
   *      scenario, a $sibling_depth of -1 should be passed.
   *     The default value is 0.
   *   - 'fixed': TRUE for a fixed nav and FALSE for a relative nav.
   *     The default value is TRUE.
   *   - 'relative_level': An integer specifying the relative level for
   *     the nav:
   *     - 0 for the current item
   *     - 1 for the parent item
   *     - 2 for the grandparent item.
   *     The default value is 0.
   *   - 'menu_link_id': The menu link ID to use as the nav root.
   *     The default value is NULL.
   * @param array $title_options
   *   (optional) An associative array of display options for the nav title
   *   with the following elements:
   *   - 'type': The type of nav title to show, if any.
   *     The default value is an empty string.
   *   - 'level': The level of item in the active trail.
   *     The default value is 1.
   *   - 'show_link': The title will be displayed as a link if TRUE.
   *     The default value is TRUE.
   *
   * @return array
   *   A render array.
   */
  protected function buildNav($menu_name, $level, $depth, array $options = [], array $title_options = []) {
    $build = [];

    // Merge the default and given options.
    $default_options = [
      'type' => '',
      'expand' => TRUE,
      'sibling_depth' => 0,
      'fixed' => TRUE,
      'relative_level' => 0,
      'menu_link_id' => NULL,
    ];
    $options = array_merge($default_options, $options);

    // Merge the default and given title options.
    $default_title_options = [
      'type' => '',
      'level' => 1,
      'show_link' => TRUE,
    ];
    $title_options = array_merge($default_title_options, $title_options);

    // Get the menu tree parameters.
    $parameters = $this->getNavMenuTreeParameters($menu_name, $level, $depth, $options, $title_options);
    if (!empty($parameters)) {
      // Don't show anything if the menu tree is empty.
      $menu_tree = $this->buildMenuTree($menu_name, $parameters);
      if (isset($menu_tree['#items']) && !empty($menu_tree['#items'])) {
        // Adjust the menu tree siblings for depth.
        $this->pruneMenuTreeSiblingDepth($menu_tree, $depth, $options['sibling_depth']);

        // Build the nav render array.
        $build = [
          '#theme' => 'oho_nav',
          '#type' => $options['type'],
          '#nav' => $menu_tree,
        ];

        // Add the nav title, if there is one.
        $nav_title = $this->buildNavTitle($parameters, $title_options);
        if (!empty($nav_title)) {
          $build['#nav_title'] = $nav_title;
        }

        // Add cache contexts.
        $build['#nav']['#cache']['contexts'][] = 'url';
        $build['#nav']['#cache']['contexts'][] = "route.menu_active_trails:$menu_name";

        // Add cache tags.
        $build['#nav']['#cache']['tags'][] = "config:system.menu.$menu_name";
      }
      else {
        // If the menu tree is empty, we still need to add meta data.
        $build = $menu_tree;

        // Add cache context.
        $build['#cache']['contexts'][] = 'url';

        // If there is a menu, add menu based cache contexts and tags.
        if (!empty($menu_name)) {
          $build['#cache']['contexts'][] = "route.menu_active_trails:$menu_name";
          $build['#cache']['tags'][] = "config:system.menu.$menu_name";
        }
      }
    }
    return $build;
  }

  /**
   * Get the menu tree parameters.
   *
   * @param string $menu_name
   *   The name of the menu.
   * @param int $level
   *   Starting level for the nav.
   * @param int $depth
   *   Ending depth for the nav.
   * @param array $options
   *   (optional) An associative array of additional options. See the
   *   buildNav function for a detailed description.
   * @param array $title_options
   *   (optional) An associative array of display options for the nav title.
   *   See the buildNav function for details.
   *
   * @return \Drupal\Core\Menu\MenuTreeParameters
   *   A MenuTreeParameters object.
   */
  protected function getNavMenuTreeParameters($menu_name, $level, $depth, array $options, array $title_options = []) {
    $parameters = $this->menuTree->getCurrentRouteMenuTreeParameters($menu_name);

    // If expandedParents is empty, the whole menu tree is built.
    if ($options['expand']) {
      $parameters->expandedParents = [];
    }

    // Fixed root.
    if ($options['fixed']) {
      // Set the min depth.
      $parameters->setMinDepth($level);

      // When the depth is configured to zero, there is no depth limit. When
      // depth is non-zero, it indicates the number of levels that must be
      // displayed. Hence this is a relative depth that we must convert to
      // an actual (absolute) depth, that may never exceed the maximum depth.
      if ($depth > 0) {
        $parameters->setMaxDepth(min($level + $depth - 1, $this->menuTree->maxDepth()));
      }

      // Fixed menu link root.
      if (!empty($options['menu_link_id'])) {
        // When a fixed parent item is set, root the menu tree at the given ID.
        $parameters->setRoot($options['menu_link_id']);
      }
      else {
        // For menu blocks with start level greater than 1, only show
        // menu items from the current active trail. Adjust the root
        // according to the current position in the menu in order to
        // determine if we can show the subtree.
        if ($level > 1) {
          $at_count = count($parameters->activeTrail) - 1;

          // If the title type is level, check the title level against
          // the current depth to determine if the menu should show,
          // even if the current level is greater than the current depth.
          $show_because_of_title = FALSE;
          if (!empty($title_options['type']) && 'level' === $title_options['type']) {
            $show_because_of_title = $at_count >= $title_options['level'];
          }

          if ($at_count >= $level || $show_because_of_title) {
            // Active trail array is child-first. Reverse it, and pull the new
            // menu root based on the parent of the configured start level.
            $menu_trail_ids = array_reverse(array_values($parameters->activeTrail));
            $menu_root = $menu_trail_ids[$level - 1];
            $parameters->setRoot($menu_root)->setMinDepth(1);
            if ($depth > 0) {
              $max_depth = min($level - 1 + $depth - 1, $this->menuTree->maxDepth());
              $parameters->setMaxDepth($max_depth);
            }
          }
          else {
            return FALSE;
          }
        }
      }
    }
    // Relative root.
    else {
      // Check whether it is even possible to show the nav as configured
      // (whether the current menu item has the required relative level)
      $at_count = count($parameters->activeTrail) - 1;
      if ($at_count > 0 && $options['relative_level'] < $at_count) {
        // Set the relative root.
        $menu_trail_ids = array_values($parameters->activeTrail);
        $menu_root = $menu_trail_ids[$options['relative_level']];
        $parameters->setRoot($menu_root)->setMinDepth(1);

        if ($depth > 0) {
          $max_depth = min($depth, $this->menuTree->maxDepth());
          $parameters->setMaxDepth($max_depth);
        }
      }
      else {
        return FALSE;
      }
    }

    return $parameters;
  }

  /**
   * Build the menu tree for the specified menu.
   *
   * @param string $menu_name
   *   The menu name.
   * @param \Drupal\Core\Menu\MenuTreeParameters $parameters
   *   The menu tree parameters.
   *
   * @return array
   *   A menu render array.
   */
  protected function buildMenuTree($menu_name, MenuTreeParameters $parameters) {
    $tree = $this->menuTree->load($menu_name, $parameters);
    $manipulators = [
      ['callable' => 'menu.default_tree_manipulators:checkAccess'],
      ['callable' => 'menu.default_tree_manipulators:generateIndexAndSort'],
    ];
    $tree = $this->menuTree->transform($tree, $manipulators);
    $menu_tree = $this->menuTree->build($tree);
    return $menu_tree;
  }

  /**
   * Prune a menu tree of non-active trail items past a certain depth.
   *
   * @param array $menu_tree
   *   The menu tree to prune.
   * @param int $depth
   *   Ending depth for the nav.
   * @param int $sibling_depth
   *   Depth difference for menu items not in the active trail.
   */
  protected function pruneMenuTreeSiblingDepth(array &$menu_tree, $depth, $sibling_depth) {
    // Prune sibling menu trees per $sibling_depth parameter.
    if ($sibling_depth < 0) {
      $adjusted_sibling_max_depth = $depth + $sibling_depth;
      if ($adjusted_sibling_max_depth < 0) {
        $adjusted_sibling_max_depth = 0;
      }

      // An adjusted_sibling_max_depth of 0 means that only items in the
      // active trail should be shown, i.e. siblings of the current page
      // should not display. We treat this as a special case because the
      // structure of top-level items in the #nav array is different
      // than the structure of any child levels.
      if ($adjusted_sibling_max_depth == 0) {
        foreach ($menu_tree['#items'] as $index => &$item) {
          if (!$item['in_active_trail']) {
            unset($menu_tree['#items'][$index]);
          }
        }
      }
      else {
        $this->pruneNonActiveTrailDepth($menu_tree['#items'], 1, $adjusted_sibling_max_depth);
      }
    }
  }

  /**
   * Traverse a menu tree and remove items not in the AT and below a max depth.
   *
   * In some instances a menu tree will show more items below the current page,
   * i.e. in the active trail, than below the current page's siblings.
   *
   * Examples:
   * - a menu might show children of the current page, but no children of its
   *   siblings.
   * - a menu might show children and grandchildren of current page, but not
   *   show children or grandchildren of the current page's siblings.
   *
   * @param array $items
   *   The menu items to parse.
   * @param int $current_depth
   *   The current depth in the menu tree.
   * @param int $max_allowed_depth
   *   The max depth allowed for non items not in the active trail.
   */
  protected function pruneNonActiveTrailDepth(array &$items, $current_depth, $max_allowed_depth) {
    foreach ($items as &$item) {
      // Items in the active trail never need their sub-menus pruned.
      if ($item['in_active_trail']) {
        continue;
      }

      // Remove any children deeper than the max allowed.
      if ($current_depth >= $max_allowed_depth) {
        $item['below'] = [];
        $item['is_expanded'] = FALSE;
        $item['is_collapsed'] = TRUE;
      }
      else {
        // We're not at the max depth yet, so continue traversing through
        // the menu item's children.
        $this->pruneNonActiveTrailDepth($item['below'], $current_depth + 1, $max_allowed_depth);
      }
    }
  }

  /**
   * Build the nav title render array.
   *
   * @param \Drupal\Core\Menu\MenuTreeParameters $parameters
   *   The menu tree parameters.
   * @param array $title_options
   *   Display options for the nav title. See the buildNav function
   *   for details.
   *
   * @return array
   *   A render array.
   */
  protected function buildNavTitle(MenuTreeParameters $parameters, array $title_options) {
    // Do not display a title.
    if (empty($title_options) || empty($title_options['type'])) {
      return [];
    }

    $build = NULL;
    switch ($title_options['type']) {
      // Get the root menu link.
      case 'root':
        $menu_link = $this->getMenuLinkByPluginId($parameters->root);
        $build = $this->generateNavTitle($menu_link, $title_options['show_link']);
        break;

      // Get the active trail menu link at the specified level.
      case 'level':
        $nav_title_level = $title_options['level'];
        $menu_trail_ids = $parameters->activeTrail;
        $menu_trail_ids = array_reverse(array_values($menu_trail_ids));
        if (count($menu_trail_ids) > $nav_title_level) {
          $menu_link_id = $menu_trail_ids[$nav_title_level];
          $menu_link = $this->getMenuLinkByPluginId($menu_link_id);
          $build = $this->generateNavTitle($menu_link, $title_options['show_link']);
        }
        break;

      // Get the active trail menu links.
      case 'active_trail':
        $menu_trail_ids = $parameters->activeTrail;
        $menu_trail_ids = array_reverse(array_values($menu_trail_ids));
        $items = [];
        foreach ($menu_trail_ids as $menu_link_id) {
          if (!empty($menu_link_id)) {
            $menu_link = $this->getMenuLinkByPluginId($menu_link_id);
            $items[] = $this->generateNavTitle($menu_link, $title_options['show_link']);
          }
        }
        $build = [
          '#theme' => 'item_list',
          '#items' => $items,
        ];
        break;
    }

    return $build;
  }

  /**
   * Generate the nav title.
   *
   * @param Drupal\menu_link_content\Entity\MenuLinkContent $menu_link
   *   The menu link.
   * @param bool $show_link
   *   Show as a link if TRUE.
   *
   * @return array
   *   A render array.
   */
  protected function generateNavTitle(MenuLinkContent $menu_link, $show_link = TRUE) {
    $build = [];
    if ($show_link) {
      $build = Link::fromTextAndUrl($menu_link->getTitle(), $menu_link->getUrlObject());
    }
    else {
      $build = $menu_link->getTitle();
    }
    return $build;
  }

  /**
   * Get a menu link from the plugin id.
   */
  protected function getMenuLinkByPluginId($pluginId) {
    list($entityType, $entityUuid) = explode(':', $pluginId);
    $menu_link_content = current($this->menuLinkContentStorage->loadByProperties(['uuid' => $entityUuid]));
    return $menu_link_content;
  }

}
