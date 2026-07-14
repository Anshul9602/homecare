<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Portal::index');
$routes->get('about-us', 'Portal::about');
$routes->get('services', 'Portal::services');
$routes->get('our-staff', 'Portal::staff');
$routes->get('equipment', 'Portal::equipment');
$routes->get('book-now', 'Portal::booking');
$routes->get('areas-we-serve', 'Portal::areas');
$routes->get('contact', 'Portal::contact');
$routes->get('faqs', 'Portal::faqs');
$routes->get('blog', 'Portal::blog');
$routes->get('blog/(:segment)', 'Portal::blogPost/$1');
$routes->get('career', 'Portal::career');
$routes->get('testimonials', 'Portal::testimonials');
$routes->get('privacy-policy', 'Portal::privacy');
$routes->get('terms-and-conditions', 'Portal::terms');

$routes->get('home-nursing-services', 'Portal::service/home-nursing-services');
$routes->get('gda-patient-attendant', 'Portal::service/gda-patient-attendant');
$routes->get('elder-care', 'Portal::service/elder-care');
$routes->get('mother-baby-care', 'Portal::service/mother-baby-care');
$routes->get('physiotherapy', 'Portal::service/physiotherapy');
$routes->get('doctor-visit', 'Portal::service/doctor-visit');
$routes->get('icu-care', 'Portal::service/icu-care');
$routes->get('medical-equipment', 'Portal::equipment');

$routes->get('locations/(:segment)', 'Portal::location/$1');

$routes->set404Override(function () {
    return hc_render('portal/404', [
        'pageTitle' => 'Page Not Found — Care Jaipur',
        'activeNav' => '',
    ]);
});
