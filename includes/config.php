<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'My First PHP Web',
        'site_url' => '',
        'pretty_uri' => true,
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
            'products' => 'Products',
            'contact' => 'Contact',
            'layout' => 'Layout',
        ],
        // Combine headline_title and headline_img into one 'headlines' array
        'headlines' => [
            'headline-1' => [
                'title' => 'Headline 1',
                'img'   => 'headline-1-img.jpg',
            ],
            'headline-2' => [
                'title' => 'Headline 2',
                'img'   => 'headline-1-img.jpg',
            ],
            'headline-3' => [
                'title' => 'Headline 3',
                'img'   => 'headline-1-img.jpg',
            ],
        ],

        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.1',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
