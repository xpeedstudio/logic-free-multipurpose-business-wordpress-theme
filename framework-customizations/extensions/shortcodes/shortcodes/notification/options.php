<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'type' => array(
        'label' => __('Type', 'logic'),
        'desc' => __('Select the notification type', 'logic'),
        'value' => 'fw-alert-info',
        'type' => 'image-picker',
        'choices' => array(
            'success' => array(
                'small' => array(
                    'height' => 50,
                    'src' => logic_IMAGES . '/image-picker/notification-congratulation.jpg',
                    'title' => __('Congratulations', 'logic')
                ),
            ),
            'info' => array(
                'small' => array(
                    'height' => 50,
                    'src' => logic_IMAGES . '/image-picker/notification-information.jpg',
                    'title' => __('Information', 'logic')
                ),
            ),
            'warning' => array(
                'small' => array(
                    'height' => 50,
                    'src' => logic_IMAGES . '/image-picker/notification-warning.jpg',
                    'title' => __('Alert', 'logic')
                ),
            ),
            'danger' => array(
                'small' => array(
                    'height' => 50,
                    'src' => logic_IMAGES . '/image-picker/notification-error.jpg',
                    'title' => __('Error', 'logic')
                ),
            ),
        ),
    ),
    'message' => array(
        'label' => __('Message', 'logic'),
        'desc' => __('Notification message', 'logic'),
        'type' => 'text',
        'value' => __('Message!', 'logic'),
    ),
);
