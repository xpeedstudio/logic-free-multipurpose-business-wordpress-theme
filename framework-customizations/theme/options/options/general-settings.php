<?php

if (!defined('FW')) {
    die('Forbidden');
}
$options = array(
    'general' => array(
        'title' => __('General', 'logic'),
        'type' => 'tab',
        'options' => array(
            'general-box' => array(
                'title' => __('General Settings', 'logic'),
                'type' => 'box',
                'options' => array(
                    'menu_logo' => array(
                        'label' => __('Menu Logo', 'logic'),
                        'desc' => __('Add your website menu logo', 'logic'),
                        'type' => 'upload',
                    ),
                   
                ),
            ),
        )
    )
);
