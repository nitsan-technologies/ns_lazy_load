<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Lazy Load',
    'description' => 'Improve your TYPO3 website speed and performance by lazy loading images and reducing unnecessary HTTP requests. A plug-and-play extension for better page load times.',
    'category' => 'services',
    'author' => 'Team T3Planet',
    'author_email' => 'info@t3planet.de',
    'author_company' => 'T3Planet',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '2.0.5',
    'constraints' => [
        'depends' => [
            'typo3' => '8.0.0-11.5.99',
            'ns_license' => '14.5.4-14.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
