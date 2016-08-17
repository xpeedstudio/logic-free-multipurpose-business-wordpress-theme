<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'blog_settings' => array(
        'title' => __('Blog Settings', 'logic'),
        'type' => 'tab',
        'options' => array(
            'header-posts-box' => array(
                'title' => __('Posts Header', 'logic'),
                'type' => 'box',
                'options' => array(
                    'general_posts_header' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'fw-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'posts_header_group' => array(
                                'type' => 'group',
                                'options' => array(
                                    'header_title' => array(
                                        'type' => 'text',
                                        'label' => 'Blog Title',
                                        'desc' => 'Add your blog hero title',
                                    ),
                                    'header_image' => array(
                                        'label' => __('Header Image', 'logic'),
                                        'desc' => __('Upload a header image', 'logic'),
                                        'help' => __("This default header image will be used for all your posts.", 'logic'),
                                        'type' => 'upload'
                                    ),
                                    'header_overlay_color' => array(
                                        'label' => __('', 'logic'),
                                        'desc' => __('Select the image overlay color', 'logic'),
                                        'help' => __('', 'logic'),
                                        'value' => 'rgba(255,255,255,0.55)',
                                        'type' => 'rgba-color-picker'
                                    ),
                                )
                            ),
                        )
                    )
                )
            ),
            'blog' => array(
                'title' => __('Blog Settings', 'logic'),
                'type' => 'box',
                'options' => array(
                    'blog_display_settings' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'fw-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'post_date' => array(
                                'label' => __('Post Date', 'logic'),
                                'desc' => __('Show post date?', 'logic'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => __('Yes', 'logic')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'logic')
                                ),
                                'value' => 'yes',
                            ),
                            'post_author' => array(
                                'label' => __('Post Author', 'logic'),
                                'desc' => __('Show post author?', 'logic'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => __('Yes', 'logic')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'logic')
                                ),
                                'value' => 'yes',
                            ),
                            'post_categories' => array(
                                'label' => __('Post Categories', 'logic'),
                                'desc' => __('Show post categories?', 'logic'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => __('Yes', 'logic')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'logic')
                                ),
                                'value' => 'yes',
                            ),
                            'post_comment' => array(
                                'label' => __('Post Comment', 'logic'),
                                'desc' => __('Show post Comment?', 'logic'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => __('Yes', 'logic')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => __('No', 'logic')
                                ),
                                'value' => 'yes',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
