<?php
/**
  * Plugin Name:    00_URL rewrite rule
*/
  function plugin_rewrite_rule(){
    // add_rewrite_rule('^(categories)/([^/]*)/?', 'index.php?pagename=$matches[1]&m0=$matches[2]','top');
    // print_r($_SERVER['REQUEST_URI']);
    // $getUrl = $_SERVER['REQUEST_URI'];
    // print_r($getUrl);

    // $urlarr = array_values(array_filter(explode("/",$_SERVER['REQUEST_URI'])));
    // // $urlarr = unset($urlarr);
    // $catIndex = array_search('categories',$urlarr); //categories in url.
    // // print_r($catIndex);
    // array_splice($urlarr, 0, $catIndex + 1);
    // print_r(sizeof($urlarr));
    //
    // if($catIndex) {
    //   switch(sizeof($urlarr)){
    //     case 1:
    //       add_rewrite_rule(
    //         'products/categories/([^/]*)/?',
    //         'index.php?pagename=products/categories&m0=$matches[1]','top');
    //       echo "case1 triggered";
    //     break;
    //     case 2:
    //       add_rewrite_rule(
    //         'products/categories/([^/]*)/([^/]*)/?',
    //         'index.php?pagename=products/categories&m0=$matches[1]&s1=$matches[2]','top');
    //       echo "case2 triggered";
    //     break;
    //     case 3:
    //       add_rewrite_rule(
    //         'products/categories/([^/]*)/([^/]*)/([^/]*)/?',
    //         'index.php?pagename=products/categories&m0=$matches[1]&s1=$matches[2]&s2=$matches[3]','top');
    //       echo "case3 triggered";
    //     break;
    //     case 4:
    //       add_rewrite_rule(
    //         'products/categories/([^/]*)/([^/]*)/([^/]*)/([^/]*)/?',
    //         'index.php?pagename=products/categories&m0=$matches[1]&s1=$matches[2]&s2=$matches[3]&s3=$matches[4]','top');
    //       echo "case4 triggered";
    //     break;
    //     // case 5:
    //     //   add_rewrite_rule(
    //     //     'products/categories/([^/]*)/([^/]*)/([^/]*)/([^/]*)/([^/]*)/?',
    //     //     'index.php?pagename=products/categories&m0=$matches[1]&s1=$matches[2]&s2=$matches[3]&s3=$matches[4]&jc=$matches[5]','top');
    //     // break;
    //     default:
    //     break;
    //   }
    // }

    // add_rewrite_rule(
    //   'products/categories/([^/]*)/([^/]*)/([^/]*)/([^/]*)/([^/]*)/?',
    //   'index.php?pagename=products/categories&m0=$matches[1]&s1=$matches[2]&s2=$matches[3]&s3=$matches[4]&jc=$matches[5]','top');

    add_rewrite_rule(
      'products/categories/([^/]*)/?',
      'index.php?pagename=products2/categories&qurl=$matches[1]','top');

    add_rewrite_rule(
      'products/([^/]*)/?',
      'index.php?pagename=products&qurl=$matches[1]','top');

    // add_rewrite_rule(
    //   'products/categories/([^/]*)/([^/]*)/?',
    //   'index.php?pagename=products/categories&m0=$matches[1]&s1=$matches[2]','top');
    //
    // add_rewrite_rule(
    //   'products/categories/([^/]*)/([^/]*)/([^/]*)/?',
    //   'index.php?pagename=products/categories&m0=$matches[1]&s1=$matches[2]&s2=$matches[3]','top');
    //
    // add_rewrite_rule(
    //   'products/categories/([^/]*)/([^/]*)/([^/]*)/([^/]*)/?',
    //   'index.php?pagename=products/categories&m0=$matches[1]&s1=$matches[2]&s2=$matches[3]&s3=$matches[4]','top');
    //
    // add_rewrite_rule(
    //   'products/categories/([^/]*)/([^/]*)/([^/]*)/([^/]*)/([^/]*)/?',
    //   'index.php?pagename=products/categories&m0=$matches[1]&s1=$matches[2]&s2=$matches[3]&s3=$matches[4]&jc=$matches[5]','top');

    add_filter('query_vars','test_query_vars');
    function test_query_vars($vars){
      $vars[]='m0';
      return $vars;
    }
  }
  add_action('init', 'plugin_rewrite_rule',10,0);

  // echo '<p>HELLO</p>';

  function rewrite_rule_activate() {
    custom_plugin_rewrite_rule();
    flush_rewrite_rules();
  }
  // register_activation_hook(__FILE__,'rewrite_rule_activate');
?>
