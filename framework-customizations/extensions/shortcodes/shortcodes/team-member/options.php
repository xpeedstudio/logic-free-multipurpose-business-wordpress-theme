<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'image' => array(
        'label' => __('Image', 'logic'),
        'desc' => __('Upload your team image', 'logic'),
        'type' => 'upload',
    ),
    'name' => array(
        'label' => __('Name', 'logic'),
        'desc' => __('Enter your team name', 'logic'),
        'type' => 'text',
        'value' => 'Semf Ucuk'
    ),
    'title' => array(
        'label' => __('Job Title', 'logic'),
        'desc' => __('Enter your team job title', 'logic'),
        'type' => 'text',
        'value' => 'Founder'
    ),
    'socials' => array(
        'type' => 'addable-popup',
        'label' => __('Social', 'logic'),
        'size' => 'medium',
        'limit' => '4',
        'desc' => __('Add Socials Item', 'logic'),
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => __('Social Title', 'logic'),
                'type' => 'text',
                'value' => 'Facebook',
                'desc' => __('Input Social Title but its not show in front-end', 'logic'),
            ),
            'icon' => array(
                'label' => __('Social Icon', 'logic'),
                'type' => 'icon',
                'desc' => __('Select your favorite icon', 'logic'),
            ),
            'link' => array(
                'label' => __('Social Link', 'logic'),
                'type' => 'text',
                'value' => '#',
                'desc' => __('Input your social link', 'logic'),
            ),

        ),
    ),
);
