<?php
/*
Plugin Name: WP Bangla 
Plugin URI: https://www.subrata.me/
Description: Simply install and activate the plugin it will try to embed bangla web font automatically. 
             An easy way to add Bangla fonts to any theme without coding using WordPress Customizer.
Author: Subrata Dev Nath
Version: 1.0
Author URI: https://www.subrata.me/
*/

//For custom font in wp_head and front page body

add_action('wp_head', 'wpbangla_wp_head_font');

function wpbangla_wp_head_font() {
  echo '<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">
  <style>
    html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video, textarea, input, select {
      font-family: "Hind Siliguri", sans-serif;
    } 
#wpadminbar #wp-admin-bar-my-sites a.ab-item, #wpadminbar #wp-admin-bar-site-name a.ab-item #wpadminbar .quicklinks .ab-empty-item, #wpadminbar .quicklinks a, #wpadminbar .shortlink-input{
      
      font-family: "Hind Siliguri", sans-serif;
    } 
  </style>';
}

//For custom font in wp_admin

add_action('admin_head', 'wpbangla_admin_font');

function wpbangla_admin_font() {
  echo '<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">
  <style>
    body, td, textarea, input, select {
     font-family: "Hind Siliguri", sans-serif;
    } 
#wpadminbar #wp-admin-bar-my-sites a.ab-item, #wpadminbar #wp-admin-bar-site-name a.ab-item #wpadminbar .quicklinks .ab-empty-item, #wpadminbar .quicklinks a, #wpadminbar .shortlink-input{
     font-family: "Hind Siliguri", sans-serif;
    } 
  </style>';
}

//For custom font in login page

add_action('login_head', 'wpbangla_login_font');

function wpbangla_login_font() {
  echo '<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri" rel="stylesheet">
  <style>
p {font-family: "Hind Siliguri", sans-serif;} 
  </style>';
}


