<?php
/**
 * @package     php-light
 * @author      alessio tortolini
 * @copyright   Copyright (c) 2024-2025, alessio tortolini
 * @license     MIT License
 * @version     1.0.0
 * @link        https://github.com/alestormoody/php-light
 *
 * List of components to show in the index.view.php
 */

return [
   'navbar.one-row' =>
      [
         'active' => true,
         'pages' => ['index'],
         'data' => [
            'name' => 'My Logo',
            'logo' => '',
            'menuLinks' => [
               [
                  'label' => 'Home',
                  'url' => '#home',
                  'css' => '',
               ],
               [
                  'label' => 'About',
                  'url' => '#about',
                  'css' => 'text-red-500',
               ],
               [
                  'label' => 'Services',
                  'url' => '#services',
                  'css' => '',
               ],
               [
                  'label' => 'Contact',
                  'url' => '#contact',
                  'css' => '',
               ],
            ]
         ]
      ],
   'navbar.two-rows' => [
      'active' => true,
      'pages' => ['index'],
      'data' => [
         'name' => 'My Custom Logo',
         'logo' => '',
         'menuLinks' => [
            [
               'label' => 'Home',
               'url' => '#home',
               'css' => '',
            ],
            [
               'label' => 'About',
               'url' => '#about',
               'css' => 'text-red-500',
            ],
            [
               'label' => 'Services',
               'url' => '#services',
               'css' => '',
            ],
            [
               'label' => 'Contact',
               'url' => '#contact',
               'css' => '',
            ],
         ],
         'buttonLabel' => 'Get Started',
         'communityLabel' => 'Community',
         'communityUrl' => '/community',
      ]
   ],
   'hero.center-overlay' => [
      'active' => true,
      'pages' => ['index'],
      'data' => [
         'desktopImage' => '/image/placeholder.avif',
         'mobileImage' => '/image/placeholder.avif',
         'title' => 'HERO SECTION TITLE',
         'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus volutpat scelerisque a pharetra sapien eget platea vitae.',
         'buttonLabel' => 'Button',
         'buttonUrl' => '#'
     ]
   ],
   'hero.left-overlay' => [
        'active' => true,
        'pages' => ['index'],
        'data' => [
            'desktopImage' => '/image/placeholder.avif',
            'mobileImage' => '/image/placeholder.avif',
            'title' => 'HERO SECTION TITLE',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus volutpat scelerisque a pharetra sapien eget platea vitae.',
            'buttonLabel' => 'Button',
            'buttonUrl' => '#',
        ],
    ],
    'hero.right-overlay' => [
        'active' => true,
        'pages' => ['index'],
        'data' => [
            'desktopImage' => '/image/placeholder.avif',
            'mobileImage' => '/image/placeholder.avif',
            'title' => 'HERO SECTION TITLE',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus volutpat scelerisque a pharetra sapien eget platea vitae.',
            'buttonLabel' => 'Button',
            'buttonUrl' => '#',
        ],
    ],
    'hero.right-boxed' => [
        'active' => true,
        'pages' => ['index'],
        'data' => [
            'desktopImage' => '/image/placeholder.avif',
            'mobileImage' => '/image/placeholder.avif',
            'title' => 'HERO SECTION TITLE',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus volutpat scelerisque a pharetra sapien eget platea vitae.',
            'buttonLabel' => 'Button',
            'buttonUrl' => '#',
        ],
    ],
    'hero.right-slider' => [
        'active' => true,
        'pages' => ['index'],
        'data' => [
            'slides' => [
                [
                    'desktopImage' => '/image/placeholder.avif',
                    'mobileImage' => '/image/placeholder.avif',
                    'title' => 'Slider Title 1',
                    'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus volutpat scelerisque a pharetra sapien eget platea vitae.',
                ],
                [
                    'desktopImage' => '/image/placeholder.avif',
                    'mobileImage' => '/image/placeholder.avif',
                    'title' => 'Slider Title 2',
                    'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus volutpat scelerisque a pharetra sapien eget platea vitae.',
                ],
                [
                    'desktopImage' => '/image/placeholder.avif',
                    'mobileImage' => '/image/placeholder.avif',
                    'title' => 'Slider Title 3',
                    'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus volutpat scelerisque a pharetra sapien eget platea vitae.',
                ],
            ],
        ],
    ],
];