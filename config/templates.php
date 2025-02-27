<?php

return [
    /**
     * Permite la selección de una plantilla diferente al default
     * 
     * GP (default)
     * Moderna
     * Startup
     * Multishop
     * 
     */

    'theme' => [
        'default' => "gp",
        'moderna' => "moderna",
        'startup' => "startup",
        'multishop' => "multishop"
    ],
    'menu' => [
      [
        'type' => 'item',
        'link' => '#home',
        'name' => 'Home',
      ],
      [
        'type' => 'item',
        'link' => '#about-me',
        'name' => 'Sobre Mí',
      ],
      [
        'type' => 'dropdown',
        'link' => '#',
        'name' => 'Proyectos',
        'children' => [
          [
            'type' => 'item',
            'link' => '#react',
            'name' => 'React/Next.Js',
          ],
          [
            'type' => 'item',
            'link' => '#vue',
            'name' => 'Vue/Nuxt.js',
          ],
          [
            'type' => 'item',
            'link' => '#livewire',
            'name' => 'Livewire/Volt',
          ]
        ],
      ],
      [
        'type' => 'item',
        'link' => '#blog',
        'name' => 'Blog',
      ],
      [
        'type' => 'item',
        'link' => '#contact-me',
        'name' => 'Contáctame',
      ]
    ]
];