<?php

if (!defined('FW')) {
    die('Forbidden');
}

$template_directory = get_template_directory_uri();
$options = array(
    'height' => array(
        'label' => __('Height', 'logic'),
        'desc' => __('Select the space height in px (Small = 30px, Medium = 60px, Large = 100px) also you can use custom height according to your need.', 'logic'),
        'type' => 'radio-text',
        'choices' => array(
            'space-sm' => __('Small', 'logic'),
            'space-md' => __('Medium', 'logic'),
            'space-lg' => __('Large', 'logic'),
        ),
        'value' => 'space-md',
        'custom' => 'custom_height',
    ),
);
