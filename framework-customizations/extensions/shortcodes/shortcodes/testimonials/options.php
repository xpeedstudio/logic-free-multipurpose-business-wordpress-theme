<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'testimonials' => array(
        'label' => __('Testimonials', 'logic'),
        'popup-title' => __('Add/Edit Testimonial', 'logic'),
        'desc' => __('Here you can add, remove and edit your Testimonials.', 'logic'),
        'type' => 'addable-popup',
        'add-button-text' => 'Add Testimonal',
        'template' => '{{=name}}',
        'popup-options' => array(
            'name' => array(
                'label' => __('Name', 'logic'),
                'desc' => __('Enter the Name of the Person', 'logic'),
                'type' => 'text',
                'value' => 'Jane Galadriel'
            ),
            'title' => array(
                'label' => __('Title', 'logic'),
                'desc' => __('Enter the job title of the Person', 'logic'),
                'type' => 'text',
                'value' => 'CEO Tengkurep'
            ),
            'content' => array(
                'label' => __('Quote', 'logic'),
                'desc' => __('Enter the testimonial here', 'logic'),
                'value' => __('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem', 'logic'),
                'type' => 'textarea',
                'teeny' => true,
            )
        )
    ),
);
