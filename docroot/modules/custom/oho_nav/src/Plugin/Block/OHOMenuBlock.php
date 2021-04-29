<?php

namespace Drupal\oho_nav\Plugin\Block;

use Drupal\oho_nav\OHONavBuilder;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Cache\Cache;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides an OHO Menu block.
 *
 * @Block(
 *   id = "oho_menu_block",
 *   admin_label = @Translation("OHO Menu Block"),
 *   provider = "oho_nav",
 *   category = @Translation("Blocks")
 * )
 */
class OHOMenuBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * The OHONavBuilder service.
   *
   * @var \Drupal\oho_nav\OHONavBuilder
   */
  protected $ohoNavBuilder;

  /**
   * Constructs a new OHOMenuBlock plugin.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\oho_nav\OHONavBuilder $oho_nav_builder
   *   The OHONavBuilder service.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, OHONavBuilder $oho_nav_builder) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->ohoNavBuilder = $oho_nav_builder;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('oho_nav.oho_nav_builder')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'nav_type' => 'fixed_level',
      'level' => 1,
      'depth' => 0,
      'expand' => 0,
      'sibling_depth' => 0,
      'title_type' => '',
      'title_level' => 1,
      'title_show_link' => FALSE,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $config = $this->configuration;
    $defaults = $this->defaultConfiguration();

    // Build the nav type options.
    $nav_type_options = [
      'fixed_level' => 'Fixed Level',
      'relative_level' => 'Relative Level',
    ];

    $form['nav_type'] = [
      '#type' => 'select',
      '#title' => $this->t('Nav type'),
      '#default_value' => $config['nav_type'],
      '#options' => $nav_type_options,
      '#description' => $this->t('Select the type of nav to display.'),
      '#required' => TRUE,
    ];

    $form['menu_levels'] = [
      '#type' => 'details',
      '#title' => $this->t('Menu levels'),
      '#process' => [[get_class(), 'processPageMenuBlockFieldSets']],
    ];

    // Build the level options.
    $level_options = range(0, 10);

    $form['menu_levels']['level'] = [
      '#type' => 'select',
      '#title' => $this->t('Initial or relative menu level'),
      '#default_value' => $config['level'],
      '#options' => $level_options,
      '#description' => $this->t('If this is a Fixed Level nav, the minimum allowed level is 1. The menu will only be visible if the menu item for the current page is at or below the selected starting level. Select level 1 to always keep this menu visible. If this is a Relative Level nav, this is the starting level for the nav, relative to the current menu item (where 0 is the current item, 1 is the parent item, etc).'),
      '#required' => TRUE,
    ];

    // Build the depth options.
    $depth_options = range(0, 10);
    $depth_options[0] = $this->t('Unlimited');

    $form['menu_levels']['depth'] = [
      '#type' => 'select',
      '#title' => $this->t('Maximum number of menu levels to display'),
      '#default_value' => $config['depth'],
      '#options' => $depth_options,
      '#description' => $this->t('The maximum number of menu levels to show, starting from the initial menu level. For example: with an initial level 2 and a maximum number of 3, menu levels 2, 3 and 4 can be displayed.'),
      '#required' => TRUE,
    ];

    $form['advanced'] = [
      '#type' => 'details',
      '#title' => $this->t('Advanced options'),
      '#process' => [[get_class(), 'processPageMenuBlockFieldSets']],
    ];

    $form['advanced']['expand'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('<strong>Expand all menu links</strong>'),
      '#default_value' => $config['expand'],
      '#description' => $this->t('All menu links that have children will "Show as expanded".'),
    ];

    // Build the sibling depth options.
    $sibling_depth_options = range(0, -5);
    $sibling_depth_options[0] = $this->t('None');

    $form['advanced']['sibling_depth'] = [
      '#type' => 'select',
      '#title' => $this->t('Sibling depth difference'),
      '#default_value' => $config['sibling_depth'],
      '#options' => $sibling_depth_options,
      '#description' => $this->t('Depth difference between active trail and siblings.'),
    ];

    $form['nav_title'] = [
      '#type' => 'details',
      '#title' => $this->t('Nav title'),
      '#process' => [[get_class(), 'processPageMenuBlockFieldSets']],
    ];

    // Build the title type options.
    $title_type_options = [
      '' => $this->t('No title'),
      'root' => $this->t('Nav root'),
      'level' => $this->t('Level'),
      'active_trail' => $this->t('Active trail'),
    ];

    $form['nav_title']['title_type'] = [
      '#type' => 'select',
      '#title' => $this->t('Nav title'),
      '#options' => $title_type_options,
      '#default_value' => $config['title_type'],
      '#description' => $this->t('Choose a title type.'),
    ];

    // Build the title level options.
    $title_level_options = range(0, 5);

    $form['nav_title']['title_level'] = [
      '#type' => 'select',
      '#title' => $this->t('Title level'),
      '#default_value' => $config['title_level'],
      '#options' => $title_level_options,
      '#description' => $this->t('The level of the menu item in the active trail to display as the title. Must choose the "Level" title type.'),
    ];

    $form['nav_title']['title_show_link'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Show nav title as link'),
      '#default_value' => $config['title_show_link'],
      '#description' => $this->t('Show the title as a link.'),
    ];

    // Open the details field sets if their config is not set to defaults.
    foreach (['menu_levels', 'advanced'] as $fieldSet) {
      foreach (array_keys($form[$fieldSet]) as $field) {
        if (isset($defaults[$field]) && $defaults[$field] !== $config[$field]) {
          $form[$fieldSet]['#open'] = TRUE;
        }
      }
    }

    return $form;
  }

  /**
   * Form API callback: Processes the elements in field sets.
   *
   * Adjusts the #parents of field sets to save its children at the top level.
   */
  public static function processPageMenuBlockFieldSets(&$element, FormStateInterface $form_state, &$complete_form) {
    array_pop($element['#parents']);
    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $nav_type = $form_state->getValue('nav_type');
    $this->configuration['nav_type'] = $nav_type;

    $level = $form_state->getValue('level');
    if ($nav_type == 'fixed_level' && $level < 1) {
      // For a fixed nav, level cannot be less than 1.
      $level = 1;
    }
    $this->configuration['level'] = $level;

    $this->configuration['depth'] = $form_state->getValue('depth');
    $this->configuration['expand'] = $form_state->getValue('expand');
    $this->configuration['expand'] = $form_state->getValue('sibling_depth');

    $this->configuration['title_type'] = $form_state->getValue('title_type');
    $this->configuration['title_level'] = $form_state->getValue('title_level');
    $this->configuration['title_show_link'] = $form_state->getValue('title_show_link');
  }

  /**
   * Implements \Drupal\block\BlockBase::build().
   */
  public function build() {
    $nav_type = $this->configuration['nav_type'];
    $level = $this->configuration['level'];
    $depth = $this->configuration['depth'];
    $expand = $this->configuration['expand'];
    $sibling_depth = $this->configuration['sibling_depth'];
    $title_type = $this->configuration['title_type'];
    $title_level = $this->configuration['title_level'];
    $show_link = $this->configuration['title_show_link'];

    $options = [
      'expand' => $expand,
      'sibling_depth' => $sibling_depth,
    ];

    $title_options = [
      'type' => $title_type,
      'level' => $title_level,
      'show_link' => $show_link,
    ];

    $build = [];
    if ($nav_type == 'fixed_level') {
      $build = $this->ohoNavBuilder->buildFixedLevelNav($level, $depth, $options, $title_options);
    }
    elseif ($nav_type == 'relative_level') {
      $build = $this->ohoNavBuilder->buildRelativeLevelNav($level, $depth, $options, $title_options);
    }

    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheTags() {
    // Even when the menu block renders to the empty string for a user, we want
    // the cache tag for this menu to be set: whenever the menu is changed, this
    // menu block must also be re-rendered for that user, because maybe a menu
    // link that is accessible for that user has been added.
    $cache_tags = parent::getCacheTags();
    $menu_name = $this->ohoNavBuilder->getCurrentMenuName();
    if (!empty($menu_name)) {
      $cache_tags[] = 'config:system.menu.' . $menu_name;
    }
    return $cache_tags;
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheContexts() {
    // ::build() uses MenuLinkTreeInterface::getCurrentRouteMenuTreeParameters()
    // to generate menu tree parameters, and those take the active menu trail
    // into account. Therefore, we must vary the rendered menu by the active
    // trail of the rendered menu.
    // Additional cache contexts, e.g. those that determine link text or
    // accessibility of a menu, will be bubbled automatically.
    $menu_name = $this->ohoNavBuilder->getCurrentMenuName();
    if (!empty($menu_name)) {
      return Cache::mergeContexts(parent::getCacheContexts(), ['route.menu_active_trails:' . $menu_name]);
    }
    return parent::getCacheContexts();
  }

}
