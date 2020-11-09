<?php
/**
  * Plugin Name:    00_URL rewrite rule
*/
  function plugin_rewrite_rule(){

    add_rewrite_rule(
      'products/([^/]*)/?',
      'index.php?pagename=products&qurl=$matches[1]','top');

  }
  add_action('init', 'plugin_rewrite_rule',10,0);

  function rewrite_rule_activate() {
    custom_plugin_rewrite_rule();
    flush_rewrite_rules();
  }

?>
