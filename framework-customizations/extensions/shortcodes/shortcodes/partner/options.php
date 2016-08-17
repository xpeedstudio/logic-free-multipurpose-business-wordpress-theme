<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'partner_gallery' => array(
        'type' => 'addable-popup',
        'label' => __('Partner Image', 'logic'),
        'desc' => __('Add your partner image.', 'logic'),
        'template' => '{{-title}}',
        'limit' => 6,
        'sortable' => true,
        'popup-options' => array(
             'title' => array(
                'label' => __('Title', 'logic'),
                'desc' => __('Enter Partner Title but its does not appear in front-end', 'logic'),
                'type' => 'text',
            ),
            'partner_image' => array(
                'label' => __('Partner Image', 'logic'),
                'desc' => __('Upload Your Partner Image', 'logic'),
                'type' => 'upload',
            ),
             'link' => array(
                'label' => __('Link', 'logic'),
                'desc' => __('Enter Partner image link', 'logic'),
                'type' => 'text',
                'value' => '#',
            )
           
        ),
    )
);
