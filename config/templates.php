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
        'name' => 'About',
      ],
      [
        'type' => 'dropdown',
        'link' => '#',
        'name' => 'Projects',
        'children' => [
          [
            'type' => 'item',
            'link' => '#react',
            'name' => 'React Projects',
          ],
          [
            'type' => 'item',
            'link' => '#vue',
            'name' => 'Vue Project',
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
        'name' => 'Contact',
      ]
    ]
];