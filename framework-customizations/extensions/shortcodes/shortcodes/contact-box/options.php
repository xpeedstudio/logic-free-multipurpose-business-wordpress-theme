<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'informations' => array(
        'label' => __('Informations', 'logic'),
        'popup-title' => __('Add/Edit Information', 'logic'),
        'desc' => __('Here you can add, remove and edit your Information.', 'logic'),
        'type' => 'addable-popup',
        'add-button-text' => 'Add Information',
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => __('Title', 'logic'),
                'desc' => __('Enter the title of the info', 'logic'),
                'type' => 'text',
                'value' => 'Visit Us',
            ),
            'info' => array(
                'label' => __('Information', 'logic'),
                'desc' => __('Enter the title of the info', 'logic'),
                'type' => 'text',
                'value' => '20, 2 Elizabeth ST, Melbourne, Victoria 3000',
            ),
            'icon' => array(
                'label' => __('Icon', 'logic'),
                'desc' => __('Select your favorite icon', 'logic'),
                'type' => 'icon',
            ),
        )
    ),

);
