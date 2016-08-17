<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'features' => array(
        'type' => 'addable-popup',
        'label' => __('Features', 'logic'),
        'size' => 'medium',
        'desc' => __('Add Features Item', 'logic'),
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => __('Title', 'logic'),
                'type' => 'text',
                'value' => 'Features 1',
                'desc' => __('Type your features title but not appear in front-end', 'logic'),
            ),
            'image' => array(
                'label' => 'Image',
                'type' => 'upload',
                'desc' => 'Upload your main features image',
            )
        ),
    ),
);
