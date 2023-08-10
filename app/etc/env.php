<?php
return [
    'backend' => [
        'frontName' => 'admin_17a6ex'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'fPoOYhroqty5fxtDUGWVe6BGsgX79QWK'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '020_'
            ],
            'page_cache' => [
                'id_prefix' => '020_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'f9f1bc294a89aac40b77712e25b9bbfc'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'db-mysql-nyc1-71251-do-user-2224784-0.b.db.ondigitalocean.com:25060',
                'dbname' => 'defaultdb',
                'username' => 'doadmin',
                'password' => 'AVNS_0Z31DfqXYzy-Sa89msf',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'install' => [
        'date' => 'Fri, 04 Aug 2023 11:36:26 +0000'
    ]
];
