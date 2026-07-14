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

function hc_logo(): string
{
    return base_url('image/logo.png');
}

function hc_banner(bool $mobile = false): string
{
    return base_url('image/' . ($mobile ? 'homebannermob.png' : 'homebannerbg.png'));
}

function hc_why_image(): string
{
    return base_url('image/whyf.png');
}

function hc_about_hero_image(): string
{
    return base_url('image/service/home-nursing-care.png');
}

function hc_service_image(string $filename): string
{
    return base_url('image/service/' . ltrim($filename, '/'));
}

function hc_photo(string $key): string
{
    $photos = [
        'hero'           => 'https://images.unsplash.com/photo-1631217868264-e5b67bbdb1e5?w=800&q=80',
        'about'          => hc_service_image('24x7-nursing-support.png'),
        'faq'            => hc_service_image('gda-patient-attendant.png'),
        'about-team'     => hc_service_image('companion-care.png'),
        'staff-hero'     => hc_service_image('dressing-wound-care.png'),
        'service-home-nursing' => hc_service_image('home-nursing-care.png'),
        'service-gda'    => hc_service_image('gda-patient-attendant.png'),
        'service-elder'  => hc_service_image('elderly-care.png'),
        'service-baby'   => hc_service_image('mother-baby-care.png'),
        'service-post-surgical' => hc_service_image('post-surgical-care.png'),
        'service-icu'    => hc_service_image('icu-care-at-home.png'),
        'service-physio' => hc_service_image('physiotherapy-at-home.png'),
        'service-doctor' => hc_service_image('doctor-visit-at-home.png'),
        'service-palliative' => hc_service_image('palliative-care.png'),
        'service-dressing' => hc_service_image('dressing-wound-care.png'),
        'service-injection' => hc_service_image('injection-iv-drip.png'),
        'service-bedridden' => hc_service_image('bedridden-patient-care.png'),
        'service-equipment' => hc_service_image('medical-equipment-rental.png'),
        'service-companion' => hc_service_image('companion-care.png'),
        'service-support' => hc_service_image('24x7-nursing-support.png'),
        // Legacy keys kept for backward compatibility
        'service-nursing'=> hc_service_image('home-nursing-care.png'),
        'equip-oxygen'   => hc_service_image('medical-equipment-rental.png'),
        'equip-bed'      => hc_service_image('medical-equipment-rental.png'),
        'equip-wheelchair'=> hc_service_image('medical-equipment-rental.png'),
        'equip-cylinder' => hc_service_image('icu-care-at-home.png'),
        'equip-bipap'    => hc_service_image('icu-care-at-home.png'),
        'equip-suction'  => hc_service_image('medical-equipment-rental.png'),
        'staff-1'        => 'https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=300&q=80',
        'staff-2'        => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=300&q=80',
        'staff-3'        => 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=300&q=80',
        'staff-4'        => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=300&q=80',
        'staff-5'        => 'https://images.unsplash.com/photo-1582750433449-648ed127b54e?w=300&q=80',
        'staff-6'        => 'https://images.unsplash.com/photo-1631217868264-e5b67bbdb1e5?w=300&q=80',
        'blog-1'         => hc_service_image('injection-iv-drip.png'),
        'blog-2'         => hc_service_image('companion-care.png'),
        'blog-3'         => hc_service_image('post-surgical-care.png'),
        '404'            => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=500&q=80',
        'location'       => 'https://images.unsplash.com/photo-1587474260586-136574528ed5?w=400&q=80',
    ];

    return $photos[$key] ?? $photos['hero'];
}

function hc_icon(string $name, string $size = 'md'): string
{
    $sizes = ['sm' => 18, 'md' => 24, 'lg' => 32];
    $px = $sizes[$size] ?? 24;
    $cls = $size === 'sm' ? 'cj-lucide cj-lucide--sm' : 'cj-lucide';

    $paths = [
        'plus'        => '<path d="M5 12h14"/><path d="M12 5v14"/>',
        'menu'        => '<path d="M4 12h16"/><path d="M4 18h16"/><path d="M4 6h16"/>',
        'check'       => '<path d="M20 6 9 17l-5-5"/>',
        'circle-check'=> '<circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/>',
        'nurse'       => '<path d="M11 2v2"/><path d="M5 2v2"/><path d="M5 3H4a2 2 0 0 0-2 2v4a6 6 0 0 0 12 0V5a2 2 0 0 0-2-2h-1"/><path d="M8 15a6 6 0 0 0 12 0v-3"/><circle cx="20" cy="10" r="2"/>',
        'attendant'   => '<path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>',
        'elder'       => '<path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>',
        'baby'        => '<path d="M9 12h.01"/><path d="M15 12h.01"/><path d="M10 16h.01"/><path d="M14 16h.01"/><path d="M22 12c0 5.52-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2s10 4.48 10 10Z"/>',
        'physio'      => '<path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/>',
        'equipment'   => '<path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"/><path d="M12 22V12"/><polyline points="3.29 7 12 12 20.71 7"/><path d="m7.5 4.27 9 5.15"/>',
        'doctor'      => '<path d="M11 2v2"/><path d="M5 2v2"/><path d="M5 3H4a2 2 0 0 0-2 2v4a6 6 0 0 0 12 0V5a2 2 0 0 0-2-2h-1"/><path d="M8 15a6 6 0 0 0 12 0v-3"/><circle cx="20" cy="10" r="2"/>',
        'shield'      => '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/>',
        'rupee'       => '<path d="M6 3h12"/><path d="M6 8h12"/><path d="M6 13l6 0a4 4 0 0 1 0 8H6"/><path d="M6 21V3"/>',
        'heart'       => '<path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>',
        'clock'       => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
        'phone'       => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>',
        'email'       => '<rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>',
        'location'    => '<path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/>',
        'home'        => '<path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>',
        'clipboard'   => '<rect width="8" height="4" x="8" y="2" rx="1" ry="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><path d="M12 11h4"/><path d="M12 16h4"/><path d="M8 11h.01"/><path d="M8 16h.01"/>',
        'consult'     => '<path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/>',
        'users'       => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
        'vnd-instant' => '<path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/>',
        'network'     => '<path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/>',
        'star'        => '<path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/>',
        'linkedin'    => '<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-12h4v2"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/>',
        'facebook'    => '<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>',
        'instagram'   => '<rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/>',
    ];

    if (! isset($paths[$name])) {
        return '';
    }

    return '<svg class="' . $cls . '" width="' . $px . '" height="' . $px . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $paths[$name] . '</svg>';
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
