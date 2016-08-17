<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$template_directory = get_template_directory_uri();
$options = array(

    'tabs_position_picker' => array(
        'type'  => 'multi-picker',
        'label' => false,
        'desc'  => false,
        'picker' => array(
            'tabs_type' => array(
                'label' => __('Type', 'logic'),
                'type'  => 'image-picker',
                'value' => '',
                'desc'  => __('Choose the tabs type', 'logic'),
                'choices' => array(
                    'one' => array(
                        'small' => array(
                            'height' => 75,
                            'src' => logic_IMAGES .'/image-picker/framed-top.jpg',
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => logic_IMAGES .'/image-picker/framed-top.jpg'
                        ),
                    ),
                    'two' => array(
                        'small' => array(
                            'height' => 75,
                            'src' => logic_IMAGES .'/image-picker/framed-side.jpg',
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => logic_IMAGES .'/image-picker/framed-side.jpg'
                        ),
                    ),
                    'three' => array(
                        'small' => array(
                            'height' => 75,
                            'src' => logic_IMAGES .'/image-picker/minimal-top.jpg',
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => logic_IMAGES .'/image-picker/minimal-top.jpg'
                        ),
                    ),
                    'four' => array(
                        'small' => array(
                            'height' => 75,
                            'src' => logic_IMAGES .'/image-picker/minimal-side.jpg',
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => logic_IMAGES .'/image-picker/minimal-side.jpg'
                        ),
                    ),
                ),
            ),
        ),
        'choices' => array(
            'one' => array(
                'tabs_justified' => array(
                    'type'  => 'switch',
                    'value' => '',
                    'label' => __('', 'logic'),
                    'desc'  => __('Make tabs justified', 'logic'),
                    'left-choice' => array(
                        'value' => '',
                        'label' => __('No', 'logic'),
                    ),
                    'right-choice' => array(
                        'value' => 'nav-justified',
                        'label' => __('Yes', 'logic'),
                    )
                ),
            ),
            'three' => array(
                'tabs_justified' => array(
                    'type'  => 'switch',
                    'value' => '',
                    'label' => __('', 'logic'),
                    'desc'  => __('Make tabs justified', 'logic'),
                    'left-choice' => array(
                        'value' => '',
                        'label' => __('No', 'logic'),
                    ),
                    'right-choice' => array(
                        'value' => 'nav-justified',
                        'label' => __('Yes', 'logic'),
                    )
                ),
            )
        )
    ),
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Tabs', 'logic' ),
		'popup-title'   => __( 'Add/Edit Tab', 'logic' ),
		'desc'          => __( 'Add tabs', 'logic' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
            'tab_title' => array(
                'type' => 'group',
                'options' => array(
                    'tab_title'   => array(
                        'type'  => 'text',
                        'label' => __('Title', 'logic'),
                        'desc' => __('Enter tab title', 'logic')
                    ),
                    'tab_icon' => array(
                        'type' => 'icon',
                        'label' => __( 'Icon', 'logic' ),
                        'desc' => __( 'Choose tab icon', 'logic' )
                    ),
                )
            ),
            'content' => array(
                'type' => 'group',
                'options' => array(
                    'tab_content_title'   => array(
                        'type'  => 'text',
                        'label' => __('Content Title', 'logic'),
                        'desc' => __('Enter content title', 'logic')
                    ),
                    'tab_content' => array(
                        'type'   => 'wp-editor',
                        'teeny'  => true,
                        'reinit' => true,
                        'label' => __('Tab Content', 'logic'),
                        'desc' => __('Enter tab content', 'logic')
                    )
                )
            )

		)
	),
    'class'  => array(
        'attr'  => array( 'class' => 'border-bottom-none'),
        'label'   => __( 'Custom Class', 'logic' ),
        'desc'    => __( 'Enter custom CSS class', 'logic' ),
        'type'    => 'text',
        'help' => __('You can use this class to further style this shortcode by adding your custom CSS in the <strong>style.css</strong> file. This file is located on your server in the <strong>child-theme</strong> folder.','logic'),
        'value' => '',
    ),
);