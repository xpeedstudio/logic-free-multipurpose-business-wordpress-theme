<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'footer_settings' => array(
        'title' => __('Footer Settings', 'logic'),
        'type' => 'tab',
        'options' => array(
            'footer_box' => array(
                'title' => __('Footer Settings', 'logic'),
                'type' => 'box',
                'options' => array(
                    'footer_heading' => array(
                        'label' => __('Footer text', 'logic'),
                        'type' => 'wp-editor',
                        'value' => 'Made with  by Bootstrap Themes 2016. All Rights Reserved',
                        'desc' => __('Footer text.', 'logic'),
                    ),
                    'footer_socials' => array(
                        'type' => 'addable-popup',
                        'label' => __('Social Network', 'logic'),
                        'desc' => __('Add social network icons', 'logic'),
                        'template' => '{{-title}}',
                        'size' => 'medium',
                        'limit' => 6,
                        'add-button-text' => __('Add', 'logic'),
                        'sortable' => true,
                        'popup-options' => array(
                            'title' => array(
                                'label' => __('Title', 'logic'),
                                'type' => 'text',
                                'value' => 'Facebook',
                                 'desc' => __('Type Social Network title but not appear in front-end', 'logic')
                            ),
                            'icon' => array(
                                'label' => __('Icon', 'logic'),
                                'type' => 'icon',
                                'value' => 'fa fa-facebook'
                            ),
                            'link' => array(
                                'label' => __('Link', 'logic'),
                                'type' => 'text',
                                'value' => '#'
                            ),
                        ),
                    ),
                )
            ),
        ),
    ),
);
