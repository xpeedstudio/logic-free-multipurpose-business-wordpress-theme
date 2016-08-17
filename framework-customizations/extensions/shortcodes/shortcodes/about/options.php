<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
   'abouts' => array(
        'type' => 'addable-popup',
        'label' => __('About', 'logic'),
        'size' => 'medium',
        'desc' => __('Add About Item', 'logic'),
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => __('Title', 'logic'),
                'type' => 'text',
                'value' => 'Responsive Design',
                'desc' => __('Input about title', 'logic'),
            ),
            'content' => array(
                'label' => __('Description', 'logic'),
                'type' => 'textarea',
                'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text',
                'desc' => __('About description text', 'logic'),
            ),
            'icon' => array(
                'label' => __('Icon', 'logic'),
                'type' => 'icon',
                'desc' => __('Select your about icon', 'logic'),
            ),
        ),
    ),

);
