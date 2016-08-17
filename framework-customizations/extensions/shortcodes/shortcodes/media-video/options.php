<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'video' => array(
        'label' => __('Video', 'logic'),
        'desc' => __('Enter Youtube or Vimeo video URL', 'logic'),
        'type' => 'text',
    ),
    'width' => array(
        'label' => __('Width', 'logic'),
        'desc' => __('Video width in pixels', 'logic'),
        'type' => 'short-text',
        'value' => '',
    ),
    'height' => array(
        'label' => __('Height', 'logic'),
        'desc' => __('Video height in pixels', 'logic'),
        'type' => 'short-text',
        'value' => '',
    ),
    'frame' => array(
        'type' => 'switch',
        'value' => '',
        'label' => __('Video Border', 'logic'),
        'desc' => __('Add a border to your video?', 'logic'),
        'left-choice' => array(
            'value' => '',
            'label' => __('No', 'logic'),
        ),
        'right-choice' => array(
            'value' => 'fw-video-frame',
            'label' => __('Yes', 'logic'),
        )
    ),
    'class' => array(
        'attr' => array('class' => 'border-bottom-none'),
        'label' => __('Custom Class', 'logic'),
        'desc' => __('Enter custom CSS class', 'logic'),
        'type' => 'text',
        'help' => __('You can use this class to further style this shortcode.', 'logic'),
        'value' => '',
    ),
);
