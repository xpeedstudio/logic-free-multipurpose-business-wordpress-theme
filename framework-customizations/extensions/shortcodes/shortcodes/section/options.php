<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'section_title' => array(
        'type' => 'text',
        'label' => __('Sorting title', 'logic'),
        'value' => '',
        'desc' => __('Enter a name (it is for internal use and will not appear on the front end) ', 'logic')
    ),
    'is_fullwidth' => array(
        'label' => __('Full Width', 'logic'),
        'type' => 'switch',
    ),
    'default_spacing' => array(
        'type' => 'radio',
        'label' => __('Section Spacing', 'logic'),
        'desc' => __('Top and bottom spacing of this section', 'logic'),
        'value' => 'sections',
        'choices' => array(
            'sections' => __('Default Spacing', 'logic'),
            'min-spacing' => __('Min Spacing', 'logic'),
            'no-spacing' => __('No Spacing', 'logic'),
        ),
    ),
    'height' => array(
        'label' => __('Height', 'logic'),
        'desc' => __("Select the section's height in px (Ex: 400) (dont include with <b>px</b>)", 'logic'),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => __('auto', 'logic'),
            'fw-section-height-sm' => __('small', 'logic'),
            'fw-section-height-md' => __('medium', 'logic'),
            'fw-section-height-lg' => __('large', 'logic'),
        ),
        'custom' => 'custom_width',
        'help' => __('This option to set extra height in your section. we have used three classs for extra height which fw-section-height-sm = 350px, fw-section-height-md= 450px , fw-section-height-lg = 650px. you can use your custom height to like just add 400 (dont include with px)', 'logic'),
    ),
    'background_options' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'background' => array(
                'label' => __('Background', 'logic'),
                'desc' => __('Select the background for your section', 'logic'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'logic'),
                    'color' => __('Color', 'logic'),
                    'image' => __('Image', 'logic'),
                    'video' => __('Video', 'logic'),
                ),
                'value' => 'none'
            ),
        ),
        'choices' => array(
            'none' => array(),
            'color' => array(
                'background_color' => array(
                    'label' => __('', 'logic'),
                    'desc' => __('Select the background color', 'logic'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            ),
            'image' => array(
                'background_image' => array(
                    'label' => __('', 'logic'),
                    'type' => 'background-image',
                    'choices' => array(//	in future may will set predefined images
                    )
                ),
                'overlay_options' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'overlay' => array(
                            'type' => 'switch',
                            'label' => __('Overlay Color', 'logic'),
                            'desc' => __('Enable image overlay color?', 'logic'),
                            'value' => 'no',
                            'right-choice' => array(
                                'value' => 'yes',
                                'label' => __('Yes', 'logic'),
                            ),
                            'left-choice' => array(
                                'value' => 'no',
                                'label' => __('No', 'logic'),
                            ),
                        ),
                    ),
                    'choices' => array(
                        'no' => array(),
                        'yes' => array(
                            'background' => array(
                                'label' => __('', 'logic'),
                                'desc' => __('Select the overlay color', 'logic'),
                                'value' => 'rgba(0,0,0,0.35)',
                                'type' => 'rgba-color-picker'
                            ),
                        ),
                    ),
                ),
            ),
            'video' => array(
                'video' => array(
                    'label' => __('', 'logic'),
                    'desc' => __('Insert a YouTube or Vimeo video URL', 'logic'),
                    'type' => 'text',
                ),
                'overlay_options' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'overlay' => array(
                            'type' => 'switch',
                            'label' => __('Overlay Color', 'logic'),
                            'desc' => __('Enable video overlay color?', 'logic'),
                            'value' => 'no',
                            'right-choice' => array(
                                'value' => 'yes',
                                'label' => __('Yes', 'logic'),
                            ),
                            'left-choice' => array(
                                'value' => 'no',
                                'label' => __('No', 'logic'),
                            ),
                        ),
                    ),
                    'choices' => array(
                        'no' => array(),
                        'yes' => array(
                            'background' => array(
                                'label' => __('', 'logic'),
                                'desc' => __('Select the overlay color', 'logic'),
                                'value' => 'rgba(0,0,0,0.55)',
                                'type' => 'rgba-color-picker'
                            ),
                        ),
                    ),
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
    ),
);
