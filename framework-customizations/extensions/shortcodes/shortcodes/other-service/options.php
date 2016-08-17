<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'title' => array(
        'label' => __('Service Title', 'logic'),
        'type' => 'text',
        'value' => 'Creative Design',
        'desc' => __('Input Service Title', 'logic'),
    ),
    'content' => array(
        'label' => __('Service Description', 'logic'),
        'type' => 'textarea',
        'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.',
        'desc' => __('Type Service description text', 'logic'),
    ),
    'icon' => array(
        'label' => __('Service Icon', 'logic'),
        'type' => 'icon',
        'desc' => __('Choose your favorite icon', 'logic'),
    ),

);
