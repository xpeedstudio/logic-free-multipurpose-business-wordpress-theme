<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'stories' => array(
        'type' => 'addable-popup',
        'label' => __('Story', 'logic'),
        'size' => 'medium',
        'desc' => __('Add Storys Item', 'logic'),
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => __('Story Title', 'logic'),
                'type' => 'text',
                'value' => 'Our Mission',
                'desc' => __('Input Story Title', 'logic'),
            ),
            'content' => array(
                'label' => __('Story Description', 'logic'),
                'type' => 'textarea',
                'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley type a scrambled it to make a type specimen book. It has survived not only five centuries',
                'desc' => __('Story description text', 'logic'),
            ),
            'left' => array(
                'type' => 'addable-option',
                'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                'label' => __('Left Item List', 'logic'),
                'desc' => __('Add Left Item List', 'logic'),
                'option' => array('type' => 'text', 'value' => 'We just want to love our client'),
                'add-button-text' => __('Add Item', 'logic'),
                'sortable' => true
            ),
            'right' => array(
                'type' => 'addable-option',
                'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                'label' => __('Right Item List', 'logic'),
                'desc' => __('Add Right Item List', 'logic'),
                'option' => array('type' => 'text', 'value' => 'We just want to love our client'),
                'add-button-text' => __('Add Item', 'logic'),
                'sortable' => true
            )
        )
    ),
);
