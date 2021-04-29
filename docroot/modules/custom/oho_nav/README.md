OHO Nav
---------

* Introduction
* Installation
* Usage
* Theming


INTRODUCTION
------------

The OHO Nav module provides the OHONavBuilder service, which
contains functions to build menu subsets of varying configurations.


INSTALLATION
------------

 * Install as you would normally install a contributed Drupal module.
   See: https://www.drupal.org/node/895232 for further information.


USAGE
-------------

There are multiple types of navs which can be built:

** Fixed Level Nav **

A Fixed Level Nav displays the menu associated with the page
and always starts at the same menu level.

  \Drupal::service('oho_nav.oho_nav_builder')
    ->buildFixedLevelNav(2, 2, [], ['type' => 'root']);

** Relative Level Nav **

A Relative Level Nav displays the menu associated with the page
and starts at a level relative to the current page.

  \Drupal::service('oho_nav.oho_nav_builder')
    ->buildRelativeLevelNav(1, 3, [], ['type' => 'root']);

** Fixed Menu Nav **

A Fixed Menu Nav always displays the specified menu and
always starts at the specified menu level.

  \Drupal::service('oho_nav.oho_nav_builder')
    ->buildFixedMenuNav('main', 1, 2);

** Fixed Parent Nav **

A Fixed Parent Nav always displays the specified menu and
always starts at the specified menu link.

  \Drupal::service('oho_nav.oho_nav_builder')
    ->buildFixedParentNav('main',
      'menu_link_content:7d30f4c0-95c4-4560-8772-884579448b31',
      2, [], ['type' => 'root']);


THEMING
-------------

Additional template versions can be created by specifying
a "type" in the $options array parameter given to the build
function and naming the template "oho-nav--{type}.html.twig".
