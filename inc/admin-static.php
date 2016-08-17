<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');
/**
 * Include static files: javascript and css for backend
 */
wp_enqueue_style('startuploading-theme.css', LOGIC_CSS . '/xs_admin.css', null, LOGIC_VERSION);
//wp_enqueue_style('xs-iconfonts.css', LOGIC_CSS . '/iconfont.css', null, LOGIC_VERSION);
