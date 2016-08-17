<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'funfact_number' => array(
        'label' => __('Funfact Number', 'logic'),
        'desc' => __('Add FunFact number which will Counting', 'logic'),
        'type' => 'text',
        'value' => '561',
    ),
    'funfact_title' => array(
        'label' => __('Funfact Title', 'logic'),
        'desc' => __('Add FunFact Title', 'logic'),
        'type' => 'text',
        'value' => 'Creative Design',
    ),
    'funfact_icon' => array(
        'label' => __('Funfact Icon', 'logic'),
        'desc' => __('Add FunFact Icon', 'logic'),
        'type' => 'icon'
    ),
);
