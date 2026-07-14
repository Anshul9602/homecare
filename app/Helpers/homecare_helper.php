<?php

use Config\Homecare;

function hc_config(): Homecare
{
    return config('Homecare');
}

function hc_phone_link(): string
{
    return 'tel:+91' . hc_config()->phone;
}

function hc_whatsapp_link(string $message = ''): string
{
    $msg = $message !== '' ? '?text=' . rawurlencode($message) : '';

    return 'https://wa.me/' . hc_config()->whatsapp . $msg;
}

function hc_photo(string $key): string
{
    $photos = [
        'hero'           => 'https://images.unsplash.com/photo-1631217868264-e5b67bbdb1e5?w=800&q=80',
        'about'          => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=800&q=80',
        'about-team'     => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=800&q=80',
        'staff-hero'     => 'https://images.unsplash.com/photo-1582750433449-648ed127b54e?w=1200&q=80',
        'service-nursing'=> 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=600&q=80',
        'service-gda'    => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=600&q=80',
        'service-elder'  => 'https://images.unsplash.com/photo-1576765608530-5aabcf25294a?w=600&q=80',
        'service-physio' => 'https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?w=600&q=80',
        'service-baby'   => 'https://images.unsplash.com/photo-1584515933487-779824d29309?w=600&q=80',
        'service-doctor' => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=600&q=80',
        'service-icu'    => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?w=600&q=80',
        'service-equipment' => 'https://images.unsplash.com/photo-1581595220892-b0739db3a262?w=600&q=80',
        'equip-oxygen'   => 'https://images.unsplash.com/photo-1581595220892-b0739db3a262?w=400&q=80',
        'equip-bed'      => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=400&q=80',
        'equip-wheelchair'=> 'https://images.unsplash.com/photo-1598454306273-c5ec4d70398f?w=400&q=80',
        'equip-cylinder' => 'https://images.unsplash.com/photo-1584515933487-779824d29309?w=400&q=80',
        'equip-bipap'    => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?w=400&q=80',
        'equip-suction'  => 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=400&q=80',
        'staff-1'        => 'https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=300&q=80',
        'staff-2'        => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=300&q=80',
        'staff-3'        => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=300&q=80',
        'staff-4'        => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=300&q=80',
        'staff-5'        => 'https://images.unsplash.com/photo-1582750433449-648ed127b54e?w=300&q=80',
        'staff-6'        => 'https://images.unsplash.com/photo-1631217868264-e5b67bbdb1e5?w=300&q=80',
        'blog-1'         => 'https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=600&q=80',
        'blog-2'         => 'https://images.unsplash.com/photo-1576765608530-5aabcf25294a?w=600&q=80',
        'blog-3'         => 'https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=600&q=80',
        'faq'            => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=500&q=80',
        '404'            => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=500&q=80',
        'location'       => 'https://images.unsplash.com/photo-1587474260586-136574528ed5?w=400&q=80',
    ];

    return $photos[$key] ?? $photos['hero'];
}

function hc_icon(string $name): string
{
    $icons = [
        'nurse' => ['c' => 'cj-icon', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>'],
        'attendant' => ['c' => 'cj-icon', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>'],
        'elder' => ['c' => 'cj-icon', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>'],
        'baby' => ['c' => 'cj-icon', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>'],
        'physio' => ['c' => 'cj-icon', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>'],
        'equipment' => ['c' => 'cj-icon', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>'],
        'doctor' => ['c' => 'cj-icon', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>'],
        'shield' => ['c' => 'cj-icon', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>'],
        'rupee' => ['c' => 'cj-icon', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-2.5 0-4 1.2-4 3s1.5 3 4 3 4 1.2 4 3-1.5 3-4 3M6 8h12M6 12h12M6 16h6"/>'],
        'heart' => ['c' => 'cj-icon', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>'],
        'clock' => ['c' => 'cj-icon-sm', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>'],
        'phone' => ['c' => 'cj-icon-sm', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>'],
        'email' => ['c' => 'cj-icon-sm', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>'],
        'location' => ['c' => 'cj-icon-sm', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>'],
        'home' => ['c' => 'cj-icon', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>'],
        'clipboard' => ['c' => 'cj-icon', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>'],
        'consult' => ['c' => 'cj-icon', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>'],
        'users' => ['c' => 'cj-icon', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>'],
        'check' => ['c' => 'cj-icon-sm', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>'],
        'star' => ['c' => 'cj-icon-sm', 'p' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>'],
    ];

    if (! isset($icons[$name])) {
        return '';
    }

    $i = $icons[$name];

    return '<svg class="' . $i['c'] . '" width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">' . $i['p'] . '</svg>';
}

function hc_service_by_slug(string $slug): ?array
{
    foreach (hc_config()->mainServices as $service) {
        if ($service['slug'] === $slug) {
            return $service;
        }
    }

    return null;
}

function hc_blog_by_slug(string $slug): ?array
{
    foreach (hc_config()->blogPosts as $post) {
        if ($post['slug'] === $slug) {
            return $post;
        }
    }

    return null;
}

function hc_stars(int $rating): string
{
    $html = '<span class="cj-stars">';
    for ($i = 1; $i <= 5; $i++) {
        $html .= '<svg width="16" height="16" fill="' . ($i <= $rating ? '#F59E0B' : '#E5E7EB') . '" viewBox="0 0 24 24"><path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>';
    }
    $html .= '</span>';

    return $html;
}

function hc_render(string $view, array $data = []): string
{
    return view('layout/header', $data)
        . view($view, $data)
        . view('layout/footer', $data);
}
