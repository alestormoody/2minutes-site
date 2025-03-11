<?php

/**
 * @package     2minutes-site
 * @author      alessio tortolini
 * @copyright   Copyright (c) 2024-2025, alessio tortolini
 * @license     MIT License
 * @version     1.0.0
 * @link        https://github.com/alestormoody/2minutes-site
 *
 * List of components to show in the index.view.php
 */

return [
   'navbar' =>
      [
         'active' => false,
         'pages' => ['index'],
         'data' => [
            'name' => 'alestort',
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
                  'css' => '',
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
   'navbar-dark' =>
      [
         'active' => true,
         'pages' => ['index'],
         'data' => [
            'name' => 'alestort',
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
                  'css' => '',
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
   'hero' => [
      'active' => true,
      'pages' => ['index'],
      'data' => [
         'name' => '2minutes-site',
         'title' => '2Minutes-Site MVC',
         'subtitle' => 'Un framework leggero e minimalista per sviluppatori che vogliono costruire siti web rapidamente, senza configurazioni complesse. Perfetto per progetti veloci e scalabili.',
         'buttonLabel' => 'Scopri il progetto',
         'buttonUrl' => '/2minutes-site',
         'moreLabel' => 'Vedi su GitHub',
         'moreUrl' => 'https://github.com/alestormoody/2minutes-site',
         'announcement' => '2minutes-site è ora disponibile su GitHub! 🚀',
         'announcementUrl' => 'https://github.com/alestormoody/2minutes-site/wiki',
      ],
   ],
   'header' => [
      'active' => true,
      'pages' => ['index'],
      'data' => [
         'title' => '2minutes-site',
         'subtitle' => 'Un framework minimalista per sviluppatori, startup e creator. Configura e lancia un sito in pochi minuti, senza complicazioni.',
         'buttonLabel' => 'Scopri il progetto',
         'buttonUrl' => '/2minutes-site',
         'background' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply',
         'links' => [
            ['label' => '📜 Documentazione', 'url' => '/docs'],
            ['label' => '🔗 Demo Live', 'url' => '/demo'],
            ['label' => '⚡ Scarica il Boilerplate', 'url' => 'https://github.com/alestormoody/2minutes-site'],
            ['label' => '💬 Community', 'url' => '/community']
         ],
         'stats' => [
            ['label' => '⏱️ Tempo medio di setup', 'value' => '2 minuti'],
            ['label' => '💻 Righe di codice minime', 'value' => '< 500'],
            ['label' => '🚀 Versione attuale', 'value' => '1.x'],
            ['label' => '⭐ Star su GitHub', 'value' => 'XYZ'],
            ['label' => '🛠️ Tecnologie', 'value' => 'PHP, MVC, MySQL'],
         ]
      ],
   ],
   'feature' =>
      [
         'active' => true,
         'pages' => ['index'],
         'data' => [
         ],
      ],
   'content' =>
      [
         'active' => false,
         'pages' => ['index'],
         'data' => [
         ],
      ],
   'bento' =>
      [
         'active' => false,
         'pages' => ['index'],
         'data' => [
         ],
      ],
   'promo' =>
      [
         'active' => false,
         'pages' => ['index'],
         'data' => [
         ],
      ],
   'product-features' =>
      [
         'active' => false,
         'pages' => ['index'],
         'data' => [
         ],
      ],
   'cta' =>
      [
         'active' => false,
         'pages' => ['index'],
         'data' => [
         ],
      ],

   'price' =>
      [
         'active' => false,
         'pages' => ['index'],
         'data' => [
         ],
      ],
   'stats' =>
      [
         'active' => false,
         'pages' => ['index'],
         'data' => [
         ],
      ],
   'team' =>
      [
         'active' => false,
         'pages' => ['index'],
         'data' => [
         ],
      ],
   'testimonial' =>
      [
         'active' => false,
         'pages' => ['index'],
         'data' => [
         ],
      ],
   'logos' =>
      [
         'active' => false,
         'pages' => ['index'],
         'data' => [
         ],
      ],
   'blog' =>
      [
         'active' => false,
         'pages' => ['index'],
         'data' => [
         ],
      ],
   'newsletter' =>
      [
         'active' => false,
         'pages' => ['index'],
         'data' => [
         ],
      ],
   'footer' =>
      [
         'active' => false,
         'pages' => ['index'],
         'data' => [
         ],
      ],
];
