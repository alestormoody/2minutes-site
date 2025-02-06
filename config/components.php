<?php

/**
 * @package     2minutes-site
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
            'buttonLabel' => 'Login',
            'buttonUrl' => '/login',
         ],
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
         'buttonLabel' => 'Login',
         'buttonUrl' => '/login',
         'communityLabel' => 'subscribe',
         'communityUrl' => '/subscribe',
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
   'slider.full-width' => [
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
   'block.four-boxes' => [
      'active' => true,
      'pages' => ['index'],
      'data'=> [
         'left' => [
            'desktopImage' => '/image/placeholder.avif',
            'mobileImage' => '/image/placeholder.avif',
            'title' => 'Title 1',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus volutpat scelerisque a pharetra sapien eget platea vitae.',
         ],
         'right' => [
            'desktopImage' => '/image/placeholder.avif',
            'mobileImage' => '/image/placeholder.avif',
            'title' => 'Title 2',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus volutpat scelerisque a pharetra sapien eget platea vitae.',
         ]
      ]
   ],
   'block.two-boxes' => [
      'active' => true,
      'pages' => ['index'],
      'data'=> [
         'desktopImage' => '/image/placeholder.avif',
         'mobileImage' => '/image/placeholder.avif',
         'title' => 'Title',
         'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus volutpat scelerisque a pharetra sapien eget platea vitae.',
      ]
   ],
   'block.two-text-boxes' => [
      'active' => true,
      'pages' => ['index'],
      'data'=> [
         'left' => [
            'title' => 'Title 1',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus volutpat scelerisque a pharetra sapien eget platea vitae.',
         ],
         'right' => [
            'title' => 'Title 2',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus volutpat scelerisque a pharetra sapien eget platea vitae.',
         ]
      ]
   ],
   'block.one-box' => [
      'active' => true,
      'pages' => ['index'],
      'data'=> [
         'title' => 'Title',
         'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus volutpat scelerisque a pharetra sapien eget platea vitae.',
      ]
   ],
   'map.two-boxes' => [
      'active' => true,
      'pages' => ['index'],
      'data'=> [
         'title' => 'Office',
         'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus volutpat scelerisque a pharetra sapien eget platea vitae.',
         'address' => 'Roma street, 1 - 00100 Rome IT',
         'phone' => '+987 654 321 01 ',
         'email' => 'foo@bar.ext',
      ]
   ],
   'animated.three-count' => [
      'active' => true,
      'pages' => ['index'],
      'data'=> [
         'title' => 'Numbers',
         'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ridiculus volutpat scelerisque a pharetra sapien eget platea vitae.',
         'n1_title' => 'lorem ipsum dolor sit amet',
         'n1' => '100',
         'n2_title' => 'lorem ipsum dolor sit amet',
         'n2' => '50',
         'n3_title' => 'lorem ipsum dolor sit amet',
         'n3' => '10',
      ]
   ],

];
