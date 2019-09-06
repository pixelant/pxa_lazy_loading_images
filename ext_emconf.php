<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Lazy loading images',
    'description' => 'Images lazy loading. Render all images on FE with data-src attribute and load image on demand.',
    'category' => 'fe',
    'author' => 'Pixelant',
    'author_email' => 'info@pixelant.net',
    'author_company' => 'Pixelant',
    'state' => 'alpha',
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ]
];
