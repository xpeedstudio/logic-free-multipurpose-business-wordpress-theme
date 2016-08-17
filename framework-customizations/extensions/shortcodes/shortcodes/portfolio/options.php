<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'class' => array(
        'attr' => array('class' => 'border-bottom-none'),
        'label' => __('Custom Class', 'harmony'),
        'desc' => __('Enter custom CSS class', 'harmony'),
        'type' => 'text',
        'help' => __('You can use this class to further style this shortcode by adding your custom CSS in the <strong>style.css</strong> file. This file is located on your server in the <strong>child-theme</strong> folder.', 'harmony'),
        'value' => '',
    ),
);
