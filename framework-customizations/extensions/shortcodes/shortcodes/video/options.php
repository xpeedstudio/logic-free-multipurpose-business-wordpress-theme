<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'video' => array(
        'label' => __('Video', 'logic'),
        'desc' => __('Enter Youtube or Vimeo video URL', 'logic'),
        'type' => 'text',
        'value' => 'https://www.youtube.com/embed/_l6CQRHIGyg'
    ),
    'title' => array(
        'label' => __('Title', 'logic'),
        'desc' => __('Enter video title', 'logic'),
        'type' => 'text',
        'value' => 'Watch Our Intro'
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
