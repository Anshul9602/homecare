<?php

namespace App\Controllers;

class Portal extends BaseController
{
    public function index()
    {
        return hc_render('portal/home', [
            'pageTitle' => 'Professional Home Nursing & Patient Care in Jaipur — Care Jaipur',
            'metaDescription' => 'Experienced nurses, GDA staff, patient attendants, elderly care, ICU care, and home healthcare services available 24×7 across Jaipur.',
            'activeNav' => 'home',
        ]);
    }

    public function about()
    {
        return hc_render('portal/about', [
            'pageTitle' => 'About Us — Care Jaipur',
            'metaDescription' => 'Reliable home healthcare services in Jaipur with trained nurses, GDA staff, and caregivers.',
            'activeNav' => 'about',
            'breadcrumbs' => [['label' => 'About Us']],
        ]);
    }

    public function services()
    {
        return hc_render('portal/services', [
            'pageTitle' => 'Our Services — Care Jaipur',
            'metaDescription' => 'Home nursing, GDA staff, elderly care, physiotherapy, ICU care, and medical equipment rental in Jaipur.',
            'activeNav' => 'services',
            'breadcrumbs' => [['label' => 'Services']],
        ]);
    }

    public function service(string $slug)
    {
        $service = hc_service_by_slug($slug);

        if ($service === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return hc_render('portal/service', [
            'pageTitle' => $service['title'] . ' in Jaipur — Care Jaipur',
            'metaDescription' => $service['desc'],
            'activeNav' => 'services',
            'service' => $service,
            'breadcrumbs' => [['label' => 'Services', 'url' => 'services'], ['label' => $service['title']]],
        ]);
    }

    public function staff()
    {
        return hc_render('portal/staff', [
            'pageTitle' => 'Our Staff — Care Jaipur',
            'metaDescription' => 'Meet our verified nurses, GDA staff, physiotherapists, and caregivers in Jaipur.',
            'activeNav' => 'staff',
            'breadcrumbs' => [['label' => 'Our Staff']],
        ]);
    }

    public function equipment()
    {
        return hc_render('portal/equipment', [
            'pageTitle' => 'Medical Equipment on Rent — Care Jaipur',
            'metaDescription' => 'Rent oxygen concentrators, hospital beds, wheelchairs, and more in Jaipur.',
            'activeNav' => 'equipment',
            'breadcrumbs' => [['label' => 'Equipment']],
        ]);
    }

    public function booking()
    {
        return hc_render('portal/booking', [
            'pageTitle' => 'Book a Caregiver — Care Jaipur',
            'metaDescription' => 'Book a nurse, GDA, or caregiver for home care in Jaipur.',
            'activeNav' => 'booking',
            'breadcrumbs' => [['label' => 'Book Now']],
        ]);
    }

    public function areas()
    {
        return hc_render('portal/areas', [
            'pageTitle' => 'Areas We Serve in Jaipur — Care Jaipur',
            'metaDescription' => 'Home nursing and patient care services across all major areas of Jaipur.',
            'activeNav' => 'areas',
            'breadcrumbs' => [['label' => 'Areas We Serve']],
        ]);
    }

    public function location(string $slug)
    {
        $locations = hc_config()->locations;

        if (! isset($locations[$slug])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $areaName = $locations[$slug];

        return hc_render('portal/location', [
            'pageTitle' => 'Home Nursing in ' . $areaName . ', Jaipur — Care Jaipur',
            'metaDescription' => 'Professional home nursing, GDA staff, and patient care in ' . $areaName . ', Jaipur.',
            'activeNav' => 'areas',
            'areaSlug' => $slug,
            'areaName' => $areaName,
            'breadcrumbs' => [['label' => 'Areas We Serve', 'url' => 'areas-we-serve'], ['label' => $areaName]],
        ]);
    }

    public function contact()
    {
        return hc_render('portal/contact', [
            'pageTitle' => 'Contact Us — Care Jaipur',
            'metaDescription' => 'Call, WhatsApp, or email Care Jaipur for home nursing and patient care in Jaipur.',
            'activeNav' => 'contact',
            'breadcrumbs' => [['label' => 'Contact Us']],
        ]);
    }

    public function faqs()
    {
        return hc_render('portal/faqs', [
            'pageTitle' => 'FAQs — Care Jaipur',
            'metaDescription' => 'Frequently asked questions about home nursing and patient care in Jaipur.',
            'activeNav' => 'faqs',
            'breadcrumbs' => [['label' => 'FAQs']],
        ]);
    }

    public function blog()
    {
        return hc_render('portal/blog', [
            'pageTitle' => 'Blog — Care Jaipur',
            'metaDescription' => 'Tips and guides on home nursing, elderly care, and patient recovery.',
            'activeNav' => 'blog',
            'breadcrumbs' => [['label' => 'Blog']],
        ]);
    }

    public function blogPost(string $slug)
    {
        $post = hc_blog_by_slug($slug);

        if ($post === null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return hc_render('portal/blog-detail', [
            'pageTitle' => $post['title'] . ' — Care Jaipur Blog',
            'metaDescription' => $post['excerpt'],
            'activeNav' => 'blog',
            'post' => $post,
            'breadcrumbs' => [['label' => 'Blog', 'url' => 'blog'], ['label' => $post['title']]],
        ]);
    }

    public function career()
    {
        return hc_render('portal/career', [
            'pageTitle' => 'Careers — Care Jaipur',
            'metaDescription' => 'Join Care Jaipur as a nurse, GDA, patient attendant, or physiotherapist.',
            'activeNav' => 'career',
            'breadcrumbs' => [['label' => 'Career']],
        ]);
    }

    public function testimonials()
    {
        return hc_render('portal/testimonials', [
            'pageTitle' => 'Testimonials — Care Jaipur',
            'metaDescription' => 'Read what families across Jaipur say about our home nursing and patient care services.',
            'activeNav' => 'testimonials',
            'breadcrumbs' => [['label' => 'Testimonials']],
        ]);
    }

    public function privacy()
    {
        return hc_render('portal/privacy', [
            'pageTitle' => 'Privacy Policy — Care Jaipur',
            'activeNav' => '',
            'breadcrumbs' => [['label' => 'Privacy Policy']],
        ]);
    }

    public function terms()
    {
        return hc_render('portal/terms', [
            'pageTitle' => 'Terms & Conditions — Care Jaipur',
            'activeNav' => '',
            'breadcrumbs' => [['label' => 'Terms & Conditions']],
        ]);
    }
}
