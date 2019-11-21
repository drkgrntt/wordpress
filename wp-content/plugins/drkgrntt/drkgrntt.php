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

    add_shortcode('dg_login_form', [$this, 'login_form_shortcode']);
    add_action('wp_enqueue_scripts', [$this, 'enqueue_styles']);
  }


  public function enqueue_styles() {

    wp_enqueue_style('drkgrntt', __DIR__ .'/drkgrntt.css');
    wp_enqueue_style('dg_login_form', __DIR__ .'/login_form/login_form.css');
    wp_enqueue_style('dg_register_form', __DIR__ .'/register_form/register_form.css');
  }


  public function login_form_shortcode($args) {

    ?>

    <div class="dg-login-page">
      <?php include __DIR__ .'/login_form/login_form.php'; ?>
      <?php include __DIR__ .'/register_form/register_form.php'; ?>
    </div>

    <?php
  }
}


new drkgrntt();
