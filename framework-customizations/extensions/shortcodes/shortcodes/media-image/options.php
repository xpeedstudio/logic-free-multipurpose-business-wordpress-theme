<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'image' => array(
        'type' => 'upload',
        'label' => __('Choose Image', 'logic'),
        'desc' => __('Either upload a new, or choose an existing image from your media library', 'logic')
    ),
//    'frame' => array(
//        'type' => 'switch',
//        'value' => '',
//        'label' => '',
//        'desc' => __('Add a border to your image?', 'logic'),
//        'left-choice' => array(
//            'value' => '',
//            'label' => __('No', 'logic'),
//        ),
//        'right-choice' => array(
//            'value' => 'fw-image-frame',
//            'label' => __('Yes', 'logic'),
//        )
//    ),
    'image_size' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'select_size' => array(
                'label' => __('Size', 'logic'),
                'desc' => __('Select the image size', 'logic'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'value' => 'auto',
                'choices' => array(
                    'auto' => __('auto', 'logic'),
                    'custom' => __('Custom', 'logic')
                ),
            ),
        ),
        'choices' => array(
            'custom' => array(
                'width' => array(
                    'label' => '',
                    'desc' => __('Image width in pixels', 'logic'),
                    'type' => 'short-text',
                    'value' => '',
                ),
                'position' => array(
                    'label' => '',
                    'desc' => __('Select image position', 'logic'),
                    'type' => 'image-picker',
                    'value' => 'fw-single-image-center',
                    'choices' => array(
                        'fw-single-image-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'logic')
                            ),
                        ),
                        'fw-single-image-center' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'logic')
                            ),
                        ),
                        'fw-single-image-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => logic_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'logic')
                            ),
                        ),
                    ),
                ),
            ),
        )
    ),
    'height' => array(
        'label' => __('Height', 'logic'),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => __('auto', 'logic'),
        ),
        'custom' => 'custom_height',
        'help' => __('This option to use your custom height to like just add 500 (dont include with px)', 'logic'),
    ),
    'image-link-group' => array(
        'type' => 'group',
        'options' => array(
            'link' => array(
                'type' => 'text',
                'label' => __('Image Link', 'logic'),
                'desc' => __('Where should your image link to?', 'logic')
            ),
            'target' => array(
                'type' => 'switch',
                'label' => __('Open Link in New Window', 'logic'),
                'desc' => __('Select here if you want to open the linked page in a new window', 'logic'),
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
    )
);

