<?php

if (!defined('FW')) {
    die('Forbidden');
}

$manifest = array();

$manifest['name'] = __('Logic', 'logic');
$manifest['uri'] = 'http://themeforest.com/user/XpeedStudio';
$manifest['description'] = __('logic wordpress theme', 'logic');
$manifest['version'] = '1.0';
$manifest['author'] = 'XpeedStuio';
$manifest['author_uri'] = 'http://themeforest.com/user/XpeedStudio';
$manifest['requirements'] = array(
    'wordpress' => array(
        'min_version' => '4.1',
    /* 'max_version' => '4.99.9' */
    ),
);

$manifest['id'] = 'scratch';

$manifest['supported_extensions'] = array(
    'page-builder' => array(),
    'seo' => array(),
    'backups' => array(),
    'forms' => array(),
    'portfolio' => array(),
    'mailer' => array(),
    'analytics' => array(),
);
