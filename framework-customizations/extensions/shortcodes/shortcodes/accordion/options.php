<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'tabs' => array(
        'type' => 'addable-popup',
        'label' => esc_html__('Tabs', 'accommodation'),
        'popup-title' => esc_html__('Add/Edit Tabs', 'accommodation'),
        'desc' => esc_html__('Add tabs', 'accommodation'),
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => esc_html__('Title', 'accommodation'),
                'desc' => esc_html__('Enter the tab title', 'accommodation'),
                'type' => 'text',
                'value' => esc_html__('', 'accommodation'),
            ),
            'content' => array(
                'label' => esc_html__('Content', 'accommodation'),
                'desc' => esc_html__('Enter the accordion content', 'accommodation'),
                'type' => 'wp-editor',
                'tinymce' => true,
                'reinit' => true,
            ),
            'opened' => array(
                'type' => 'switch',
                'label' => esc_html__('Default State', 'accommodation'),
                'desc' => esc_html__('Set the default state for the tab', 'accommodation'),
                'help' => esc_html__('Only one tab can be opened. If you choose two opened tabs the first one will be set as opened based on the position in the tab list.', 'accommodation'),
                'value' => '',
                'right-choice' => array(
                    'value' => 'opened',
                    'label' => esc_html__('Opened', 'accommodation'),
                ),
                'left-choice' => array(
                    'value' => '',
                    'label' => esc_html__('Closed', 'accommodation'),
                ),
            ),
            'icon' => array(
                'label' => esc_html__('Icon', 'accommodation'),
                'type' => 'icon',
            ),
        )
    ),
    'class' => array(
        'label' => esc_html__('Custom Class', 'accommodation'),
        'desc' => esc_html__('Enter custom CSS class', 'accommodation'),
        'type' => 'text',
        'value' => '',
        'help' => esc_html__('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'accommodation'),
    ),
);
