<?php
/**
 * Plugin Name: drkgrntt
 * Plugin URI: http://www.derekgarnett.com/drkgrntt
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Derek Garnett
 * Author URI: http://www.derekgarnett.com
 */


class drkgrntt {

  public function __construct() {

    add_action('init', [$this, 'do_something']);
    add_shortcode('dg_login_form', [$this, 'login_form_shortcode']);
  }


  public function do_something() {
    echo '<h1>doing something</h1>';
  }


  public function login_form_shortcode($args) {

  }
}

new drkgrntt();