<?php return array(
    'root' => array(
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => '__root__',
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
        'heroku/heroku-buildpack-php' => array(
            'pretty_version' => 'v221',
            'version' => '221.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../heroku/heroku-buildpack-php',
            'aliases' => array(),
            'reference' => '4484eaefa00f3b58092da05dfc4fe38ce71bd9cd',
            'dev_requirement' => true,
        ),
        'monolog/monolog' => array(
            'pretty_version' => '1.27.1',
            'version' => '1.27.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../monolog/monolog',
            'aliases' => array(),
            'reference' => '904713c5929655dc9b97288b69cfeedad610c9a1',
            'dev_requirement' => false,
        ),
        'pimple/pimple' => array(
            'pretty_version' => 'v3.5.0',
            'version' => '3.5.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../pimple/pimple',
            'aliases' => array(),
            'reference' => 'a94b3a4db7fb774b3d78dad2315ddc07629e1bed',
            'dev_requirement' => false,
        ),
        'psr/container' => array(
            'pretty_version' => '2.0.2',
            'version' => '2.0.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/container',
            'aliases' => array(),
            'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
            'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0',
            ),
        ),
        'psr/log' => array(
            'pretty_version' => '1.1.4',
            'version' => '1.1.4.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(),
            'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
            'dev_requirement' => false,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.0.0',
                1 => '1.0|2.0',
            ),
        ),
        'silex/api' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v2.3.0',
            ),
        ),
        'silex/providers' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v2.3.0',
            ),
        ),
        'silex/silex' => array(
            'pretty_version' => 'v2.3.0',
            'version' => '2.3.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../silex/silex',
            'aliases' => array(),
            'reference' => '6bc31c1b8c4ef614a7115320fd2d3b958032f131',
            'dev_requirement' => false,
        ),
        'symfony/debug' => array(
            'pretty_version' => 'v4.4.41',
            'version' => '4.4.41.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/debug',
            'aliases' => array(),
            'reference' => '6637e62480b60817b9a6984154a533e8e64c6bd5',
            'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => array(
            'pretty_version' => 'v3.0.2',
            'version' => '3.0.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/deprecation-contracts',
            'aliases' => array(),
            'reference' => '26954b3d62a6c5fd0ea8a2a00c0353a14978d05c',
            'dev_requirement' => false,
        ),
        'symfony/error-handler' => array(
            'pretty_version' => 'v4.4.41',
            'version' => '4.4.41.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/error-handler',
            'aliases' => array(),
            'reference' => '529feb0e03133dbd5fd3707200147cc4903206da',
            'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => array(
            'pretty_version' => 'v4.4.42',
            'version' => '4.4.42.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/event-dispatcher',
            'aliases' => array(),
            'reference' => '708e761740c16b02c86e3f0c932018a06b895d40',
            'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => array(
            'pretty_version' => 'v1.1.13',
            'version' => '1.1.13.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/event-dispatcher-contracts',
            'aliases' => array(),
            'reference' => '1d5cd762abaa6b2a4169d3e77610193a7157129e',
            'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => array(
            'dev_requirement' => false,
            'provided' => array(
                0 => '1.1',
            ),
        ),
        'symfony/http-client-contracts' => array(
            'pretty_version' => 'v2.5.2',
            'version' => '2.5.2.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/http-client-contracts',
            'aliases' => array(),
            'reference' => 'ba6a9f0e8f3edd190520ee3b9a958596b6ca2e70',
            'dev_requirement' => false,
        ),
        'symfony/http-foundation' => array(
            'pretty_version' => 'v4.4.43',
            'version' => '4.4.43.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/http-foundation',
            'aliases' => array(),
            'reference' => '4441dada27f9208e03f449d73cb9253c639e53c5',
            'dev_requirement' => false,
        ),
        'symfony/http-kernel' => array(
            'pretty_version' => 'v4.4.43',
            'version' => '4.4.43.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/http-kernel',
            'aliases' => array(),
            'reference' => 'c4c33fb9203e6f166ac0f318ce34e00686702522',
            'dev_requirement' => false,
        ),
        'symfony/mime' => array(
            'pretty_version' => 'v5.4.10',
            'version' => '5.4.10.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/mime',
            'aliases' => array(),
            'reference' => '02265e1e5111c3cd7480387af25e82378b7ab9cc',
            'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-ctype',
            'aliases' => array(),
            'reference' => '6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4',
            'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-idn',
            'aliases' => array(),
            'reference' => '59a8d271f00dd0e4c2e518104cc7963f655a1aa8',
            'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-normalizer',
            'aliases' => array(),
            'reference' => '219aa369ceff116e673852dce47c3a41794c14bd',
            'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-mbstring',
            'aliases' => array(),
            'reference' => '9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e',
            'dev_requirement' => false,
        ),
        'symfony/polyfill-php72' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php72',
            'aliases' => array(),
            'reference' => 'bf44a9fd41feaac72b074de600314a93e2ae78e2',
            'dev_requirement' => false,
        ),
        'symfony/polyfill-php73' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php73',
            'aliases' => array(),
            'reference' => 'e440d35fa0286f77fb45b79a03fedbeda9307e85',
            'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => array(
            'pretty_version' => 'v1.26.0',
            'version' => '1.26.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php80',
            'aliases' => array(),
            'reference' => 'cfa0ae98841b9e461207c13ab093d76b0fa7bace',
            'dev_requirement' => false,
        ),
        'symfony/routing' => array(
            'pretty_version' => 'v4.4.41',
            'version' => '4.4.41.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/routing',
            'aliases' => array(),
            'reference' => 'c25e38d403c00d5ddcfc514f016f1b534abdf052',
            'dev_requirement' => false,
        ),
        'symfony/twig-bridge' => array(
            'pretty_version' => 'v3.4.47',
            'version' => '3.4.47.0',
            'type' => 'symfony-bridge',
            'install_path' => __DIR__ . '/../symfony/twig-bridge',
            'aliases' => array(),
            'reference' => '090d19d6f1ea5b9e1d79f372785aa5e5c9cd4042',
            'dev_requirement' => false,
        ),
        'symfony/var-dumper' => array(
            'pretty_version' => 'v5.4.9',
            'version' => '5.4.9.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/var-dumper',
            'aliases' => array(),
            'reference' => 'af52239a330fafd192c773795520dc2dd62b5657',
            'dev_requirement' => false,
        ),
        'twig/twig' => array(
            'pretty_version' => 'v2.15.1',
            'version' => '2.15.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twig/twig',
            'aliases' => array(),
            'reference' => '3b7cedb2f736899a7dbd0ba3d6da335a015f5cc4',
            'dev_requirement' => false,
        ),
    ),
);