<?php

if (!defined('FW')) {
    die('Forbidden');
}

$template_directory = get_template_directory_uri();
$options = array(
    'list_group' => array(
        'type' => 'group',
        'options' => array(
            'list_items' => array(
                'type' => 'addable-popup',
                'label' => __('List Items', 'logic'),
                'desc' => __('Add list items', 'logic'),
                'template' => '{{=item}}',
                'popup-options' => array(
                    'sublist_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'item' => array(
                                'label' => __('Item', 'logic'),
                                'desc' => __('Enter an item in list', 'logic'),
                                'type' => 'text',
                            ),
                          
                        )
                    ),
                    'btn_link_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'link' => array(
                                'label' => __('Link', 'logic'),
                                'desc' => __('you can add link if you want', 'logic'),
                                'type' => 'text',
                            ),
                            'target' => array(
                                'type' => 'switch',
                                'label' => __('', 'logic'),
                                'desc' => __('Open link in new window?', 'logic'),
                                'value' => '_self',
                                'right-choice' => array(
                                    'value' => '_blank',
                                    'label' => __('Yes', 'logic'),
                                ),
                                'left-choice' => array(
                                    'value' => '_self',
                                    'label' => __('No', 'logic'),
                                ),
                            ),
                        )
                    ),
                ),
            ),
            'separator' => array(
                'type' => 'switch',
                'label' => __('', 'logic'),
                'desc' => __('Separate each list item by a line?', 'logic'),
                'value' => '_self',
                'right-choice' => array(
                    'value' => 'list-bordered',
                    'label' => __('Yes', 'logic'),
                ),
                'left-choice' => array(
                    'value' => '',
                    'label' => __('No', 'logic'),
                ),
            ),
        )
    ),
    'list_type' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => __('Add Element', 'logic'),
                'desc' => __('Make a numbered list or add an icon to list items', 'logic'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'value' => 'list-default',
                'type' => 'radio',
                'choices' => array(
                    'list-default' => __('None', 'logic'),
                    'list-numbers' => __('Number', 'logic'),
                    'list-icon' => __('Icon', 'logic'),
                ),
            )
        ),
        'choices' => array(
            'list-default' => array(),
            'list-numbers' => array(),
            'list-icon' => array(
                'icon' => array(
                    'type' => 'icon',
                    'label' => __('', 'logic')
                ),
            ),
        ),
        'show_borders' => false,
    ),
    'class' => array(
        'label' => __('Custom Class', 'logic'),
        'desc' => __('Enter custom CSS class', 'logic'),
        'type' => 'text',
        'value' => '',
        'help' => __('You can use this class to further style this shortcode', 'logic'),
    ),
);
