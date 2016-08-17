<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'iconbox' => array(
        'type' => 'image-picker',
        'label' => __('Box Style', 'logic'),
        'choices' => array(
            'fw-iconbox-1' => array(
                'small' => array(
                    'height' => 75,
                    'src' => LOGIC_IMAGES . '/image-picker/icon-box-type1.jpg',
                ),
                'large' => array(
                    'height' => 208,
                    'src' => LOGIC_IMAGES . '/image-picker/icon-box-type1.jpg'
                ),
            ),
            'fw-iconbox-2' => array(
                'small' => array(
                    'height' => 75,
                    'src' => LOGIC_IMAGES . '/image-picker/icon-box-type2.jpg',
                ),
                'large' => array(
                    'height' => 208,
                    'src' => LOGIC_IMAGES . '/image-picker/icon-box-type2.jpg'
                ),
            ),
            'fw-iconbox-3' => array(
                'small' => array(
                    'height' => 75,
                    'src' => LOGIC_IMAGES . '/image-picker/icon-box-type3.jpg',
                ),
                'large' => array(
                    'height' => 208,
                    'src' => LOGIC_IMAGES . '/image-picker/icon-box-type3.jpg'
                ),
            ),
        ),
    ),
    'icon' => array(
        'type' => 'icon',
        'label' => __('Choose an Icon', 'logic'),
    ),
    'title' => array(
        'type' => 'text',
        'label' => __('Title of the Box', 'logic'),
    ),
    'content' => array(
        'label' => __('Description', 'logic'),
        'desc' => __('Enter the icon box description', 'logic'),
        'type' => 'wp-editor',
    ),
);
