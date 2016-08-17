<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'title' => array(
        'type' => 'text',
        'label' => __('Heading Title', 'logic'),
        'desc' => __('Write the heading title content', 'logic'),
    ),
    'heading' => array(
        'type' => 'select',
        'label' => __('Heading Size', 'logic'),
        'choices' => array(
            'h1' => 'H1',
            'h2' => 'H2',
            'h3' => 'H3',
            'h4' => 'H4',
            'h5' => 'H5',
            'h6' => 'H6',
        )
    ),
    'subtitle' => array(
        'type' => 'text',
        'label' => __('Heading Subtitle', 'logic'),
        'desc' => __('Write the heading subtitle content', 'logic'),
    ),
    'subheading' => array(
        'type' => 'select',
        'label' => __('Sub Heading Size', 'logic'),
        'choices' => array(
            'h1' => 'H1',
            'h2' => 'H2',
            'h3' => 'H3',
            'h4' => 'H4',
            'h5' => 'H5',
            'h6' => 'H6',
        )
    ),
    'centered' => array(
        'type' => 'switch',
        'label' => __('Centered', 'logic'),
//		'left-choice' => array(
//			'value' => 'no',
//			'label' => __('No', 'logic'),
//		),
//		'right-choice' => array(
//			'value' => 'yes',
//			'label' => __('Yes', 'logic'),
//		),
    ),
    'color' => array(
        'type' => 'color-picker',
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
        'label' => __('Heading Color', 'logic'),
        'desc' => __('If you want use diffrent color for parallax or video section', 'logic'),
        'help' => __('If you want use diffrent heading color for parallax or video section. you can easily change from here', 'logic'),
    ),
    'separator' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'show_separator' => array(
                'type' => 'switch',
                'value' => '',
                'label' => __('Separator', 'logic'),
                'desc' => __('Show separator?', 'logic'),
                'left-choice' => array(
                    'value' => 'no',
                    'label' => __('No', 'logic'),
                ),
                'right-choice' => array(
                    'value' => 'yes',
                    'label' => __('Yes', 'logic'),
                )
            ),
        ),
    ),
    'class' => array(
        'type' => 'text',
        'label' => __('Custom Class', 'logic'),
        'desc' => __('Enter a custom CSS class', 'logic'),
        'help' => __('You can use this class to further style this shortcode by adding your custom CSS.', 'logic'),
    ),
);
