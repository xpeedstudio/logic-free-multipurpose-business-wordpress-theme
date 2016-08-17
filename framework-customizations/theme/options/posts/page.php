<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'main' => array(
        'title' => false,
        'type' => 'box',
        'options' => array(
            'Page' => array(
                'title' => __('Page Options', 'logic'),
                'type' => 'tab',
                'options' => array(
                    'page_sections' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'picker' => array(
                            'xs_page_section' => array(
                                'label' => __('This page is a section:', 'logic'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'on',
                                    'label' => __('Yes', 'logic')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'logic')
                                ),
                                'value' => 'no',
                                'desc' => __('If this a <b>One page Section</b>,  set this field to <b>yes</b>. And if this page is not section, set it to <b>no</b>', 'logic'),
                                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", __('If this page for one page section. set yes ', 'logic'), __('For One page always will be <b>yes</b>', 'logic')
                                ),
                            )
                        ),
                        'choices' => array(
                            'on' => array(
                                'hide_title_from_menu' => array(
                                    'type' => 'switch',
                                    'label' => __('Hide title from menu ?', 'logic'),
                                    'right-choice' => array(
                                        'value' => 'yes',
                                        'label' => __('Yes', 'logic')
                                    ),
                                    'left-choice' => array(
                                        'value' => 'no',
                                        'label' => __('No', 'logic')
                                    ),
                                    'value' => 'no',
                                    'desc' => __('If you dont want to add title(or this page) on menu. you can set yes. if you set yes. this menu will be hide in menu.', 'logic'),
                                ),
                            ),
                            'no' => array(
                                'header_title' => array(
                                    'type' => 'text',
                                    'label' => 'Page Title',
                                    'desc' => 'Add your Page hero title',
                                ),
                                'header_image' => array(
                                    'label' => __('Page Header Image', 'logic'),
                                    'desc' => __('Upload a Page header image', 'logic'),
                                    'help' => __("This default header image will be used for all your Page.", 'logic'),
                                    'type' => 'upload'
                                ),
                                'header_overlay_color' => array(
                                    'label' => __('', 'logic'),
                                    'desc' => __('Select the image overlay color', 'logic'),
                                    'help' => __('', 'logic'),
                                    'value' => 'rgba(255,255,255,0.55)',
                                    'type' => 'rgba-color-picker'
                                ),
                            ),
                        ),
                        'show_borders' => false,
                    ),
                ),
            ),
        ),
    ),
);


