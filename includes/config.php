<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Personal Portfolio', 
        'site_url' => '',
        'pretty_uri' => true,
        'nav_menu' => [
            'home' => 'Home',
            'about-me' => 'About Me',
            'project' => 'Project',
            'work-experience' => 'Work Experience',
            'contact' => 'Contact',
        ],
        // Combine headline_title and headline_img into one 'headlines' array
        'headlines' => [
            'pt-ramayana' => [
                'title' => 'Pt ramayana',
                'img'   => 'pt-ramayana-img.jpg',
                'url'   => '/article/headline-1',
            ],
            'toko-aksesoris' => [
                'title' => 'Toko aksesoris',
                'img'   => 'toko-aksesoris-img.png',
                'url'   => '/article/headline-2',
            ],
            'mm-acing-jaya' => [
                'title' => 'Mm acing jaya',
                'img'   => 'mm-acing-jaya-img.jpg',
                'url'   => '/article/headline-3',
            ],
        ],

        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.1',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
