<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
   'skills' => array(
        'type' => 'addable-popup',
        'label' => __('Skill', 'logic'),
        'size' => 'medium',
        'desc' => __('Add Skills Item', 'logic'),
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => __('Skill Title', 'logic'),
                'type' => 'text',
                'value' => 'Photoshop',
                'desc' => __('Input Skill Title', 'logic'),
            ),
            'percentage' => array(
                'label' => __('Skill Percentage', 'logic'),
                'type' => 'text',
                'value' => '79%',
                'desc' => __('Add Skill Percentace', 'logic'),
            ),


        ),
    ),

);
