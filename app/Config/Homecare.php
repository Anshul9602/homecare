<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Homecare extends BaseConfig
{
    public string $brandName = 'Care Jaipur';
    public string $tagline = 'Professional Home Nursing & Patient Care in Jaipur';
    public string $phone = '9876543210';
    public string $phoneDisplay = '98765 43210';
    public string $whatsapp = '919876543210';
    public string $email = 'info@carejaipur.com';
    public string $address = 'Vaishali Nagar, Jaipur, Rajasthan 302021';
    public string $hours = '24×7 Emergency Support Available';

    public array $stats = [
        ['value' => '5000+', 'label' => 'Happy Families'],
        ['value' => '200+', 'label' => 'Caregivers'],
        ['value' => '15+', 'label' => 'Areas in Jaipur'],
        ['value' => '24×7', 'label' => 'Support'],
    ];

    public array $seoKeywords = [
        'Home Nursing Services Jaipur',
        'Patient Care at Home Jaipur',
        'GDA Staff in Jaipur',
        'Elder Care Services Jaipur',
        'Home Nurse Jaipur',
        'Home Healthcare Jaipur',
    ];

    public array $locations = [
        'vaishali-nagar'   => 'Vaishali Nagar',
        'mansarovar'       => 'Mansarovar',
        'malviya-nagar'    => 'Malviya Nagar',
        'jagatpura'        => 'Jagatpura',
        'sanganer'         => 'Sanganer',
        'jhotwara'         => 'Jhotwara',
        'vidhyadhar-nagar' => 'Vidhyadhar Nagar',
        'tonk-road'        => 'Tonk Road',
        'ajmer-road'       => 'Ajmer Road',
        'pratap-nagar'     => 'Pratap Nagar',
        'c-scheme'         => 'C-Scheme',
        'raja-park'        => 'Raja Park',
        'bani-park'        => 'Bani Park',
        'civil-lines'      => 'Civil Lines',
    ];

    public array $mainServices = [
        [
            'slug'  => 'home-nursing-services',
            'icon'  => 'nurse',
            'image' => 'service-nursing',
            'title' => 'Home Nursing Care',
            'desc'  => 'Registered male & female nurses for injections, IV drips, dressing, post-surgery & ICU care at home.',
            'items' => ['Registered Male & Female Nurses', 'Injection & IV Drip', 'Dressing & Wound Care', 'Post-Surgery Care', 'ICU Nursing at Home'],
        ],
        [
            'slug'  => 'gda-patient-attendant',
            'icon'  => 'attendant',
            'image' => 'service-gda',
            'title' => 'GDA & Patient Attendant',
            'desc'  => 'Trained GDA staff for bedridden patients — hygiene, feeding, mobility & daily monitoring.',
            'items' => ['Bedridden Patient Care', 'Personal Hygiene Assistance', 'Feeding Support', 'Mobility Assistance', 'Daily Monitoring'],
        ],
        [
            'slug'  => 'elder-care',
            'icon'  => 'elder',
            'image' => 'service-elder',
            'title' => 'Elderly Care',
            'desc'  => '12-hour, 24-hour live-in caregivers with companion care and medication reminders.',
            'items' => ['12-Hour Caregiver', '24-Hour Live-in Care', 'Companion Care', 'Medication Reminders'],
        ],
        [
            'slug'  => 'physiotherapy',
            'icon'  => 'physio',
            'image' => 'service-physio',
            'title' => 'Physiotherapy at Home',
            'desc'  => 'Orthopedic, stroke rehabilitation, and post-operative physiotherapy in your home.',
            'items' => ['Orthopedic Physiotherapy', 'Stroke Rehabilitation', 'Post-Operative Physiotherapy'],
        ],
        [
            'slug'  => 'mother-baby-care',
            'icon'  => 'baby',
            'image' => 'service-baby',
            'title' => 'Mother & Baby Care',
            'desc'  => 'Newborn care, post-delivery mother support, and baby massage assistance.',
            'items' => ['Newborn Care', 'Mother Care After Delivery', 'Baby Massage Assistance'],
        ],
        [
            'slug'  => 'doctor-visit',
            'icon'  => 'doctor',
            'image' => 'service-doctor',
            'title' => 'Doctor Visit at Home',
            'desc'  => 'Qualified doctors visit your home for consultation, check-ups, and follow-up care.',
            'items' => ['General Physician Visit', 'Follow-up Consultation', 'Health Check-up at Home'],
        ],
        [
            'slug'  => 'icu-care',
            'icon'  => 'nurse',
            'image' => 'service-icu',
            'title' => 'ICU Care at Home',
            'desc'  => 'ICU-level nursing care with ventilator support, monitoring, and critical care at home.',
            'items' => ['Ventilator Support', 'Critical Care Monitoring', 'Trained ICU Nurses'],
        ],
        [
            'slug'  => 'medical-equipment',
            'icon'  => 'equipment',
            'image' => 'service-equipment',
            'title' => 'Medical Equipment on Rent',
            'desc'  => 'Oxygen concentrators, hospital beds, wheelchairs, BiPAP/CPAP & more delivered to your door.',
            'items' => ['Oxygen Concentrator', 'Hospital Bed', 'Wheelchair', 'BiPAP & CPAP'],
        ],
    ];

    public array $equipment = [
        ['name' => 'Oxygen Concentrator', 'price' => '₹3,500', 'period' => '/month', 'image' => 'equip-oxygen'],
        ['name' => 'Hospital Bed', 'price' => '₹4,000', 'period' => '/month', 'image' => 'equip-bed'],
        ['name' => 'Wheelchair', 'price' => '₹1,500', 'period' => '/month', 'image' => 'equip-wheelchair'],
        ['name' => 'Oxygen Cylinder', 'price' => '₹2,000', 'period' => '/month', 'image' => 'equip-cylinder'],
        ['name' => 'BiPAP & CPAP', 'price' => '₹5,000', 'period' => '/month', 'image' => 'equip-bipap'],
        ['name' => 'Suction Machine', 'price' => '₹2,500', 'period' => '/month', 'image' => 'equip-suction'],
    ];

    public array $staff = [
        ['name' => 'Priya Sharma', 'role' => 'Staff Nurse', 'category' => 'nurses', 'rating' => 4.9, 'image' => 'staff-1'],
        ['name' => 'Anita Meena', 'role' => 'GDA Staff', 'category' => 'gda', 'rating' => 4.8, 'image' => 'staff-2'],
        ['name' => 'Rajesh Kumar', 'role' => 'Patient Attendant', 'category' => 'gda', 'rating' => 4.7, 'image' => 'staff-3'],
        ['name' => 'Sunita Devi', 'role' => 'Elderly Caregiver', 'category' => 'caregivers', 'rating' => 4.9, 'image' => 'staff-4'],
        ['name' => 'Dr. Vikram Singh', 'role' => 'Physiotherapist', 'category' => 'physio', 'rating' => 4.8, 'image' => 'staff-5'],
        ['name' => 'Meera Joshi', 'role' => 'Staff Nurse', 'category' => 'nurses', 'rating' => 4.9, 'image' => 'staff-6'],
    ];

    public array $whyChooseUs = [
        ['icon' => 'shield', 'title' => 'Background Verified Staff', 'desc' => 'Every caregiver is thoroughly verified before assignment.'],
        ['icon' => 'nurse', 'title' => 'Trained Professionals', 'desc' => 'Skilled nurses and GDA staff with hands-on experience.'],
        ['icon' => 'clock', 'title' => '24×7 Emergency Support', 'desc' => 'Round-the-clock assistance whenever you need help.'],
        ['icon' => 'rupee', 'title' => 'Affordable Packages', 'desc' => 'Flexible plans to suit every family budget.'],
    ];

    public array $howItWorks = [
        ['num' => 1, 'icon' => 'phone', 'title' => 'Consult', 'desc' => 'Call or WhatsApp us with your requirements.'],
        ['num' => 2, 'icon' => 'clipboard', 'title' => 'Assessment', 'desc' => 'We assess the patient\'s condition and needs.'],
        ['num' => 3, 'icon' => 'consult', 'title' => 'Care Plan', 'desc' => 'A personalized care plan is created for you.'],
        ['num' => 4, 'icon' => 'nurse', 'title' => 'Caregiver Assigned', 'desc' => 'We assign the best-suited nurse or GDA.'],
        ['num' => 5, 'icon' => 'home', 'title' => 'Care Starts', 'desc' => 'Professional care begins at your home.'],
    ];

    public array $testimonials = [
        ['name' => 'Ramesh Agarwal', 'location' => 'Vaishali Nagar', 'rating' => 5, 'text' => 'Excellent nursing care for my father after surgery. The nurse was professional, caring, and always on time. Highly recommend Care Jaipur!'],
        ['name' => 'Sunita Verma', 'location' => 'Mansarovar', 'rating' => 5, 'text' => 'We hired a GDA attendant for my bedridden mother. The staff was very gentle and took excellent care. Very satisfied with the service.'],
        ['name' => 'Amit Jain', 'location' => 'Malviya Nagar', 'rating' => 5, 'text' => 'Quick response and affordable packages. They arranged an ICU nurse within 3 hours for my grandfather. Truly a lifesaver!'],
    ];

    public array $platformRatings = [
        ['platform' => 'Google', 'rating' => '4.9', 'reviews' => '120+ Reviews'],
        ['platform' => 'Justdial', 'rating' => '4.8', 'reviews' => '85+ Reviews'],
        ['platform' => 'Sulekha', 'rating' => '4.7', 'reviews' => '60+ Reviews'],
    ];

    public array $faqs = [
        ['q' => 'What home nursing services do you provide in Jaipur?', 'a' => 'We provide registered male and female nurses for injections, IV drips, wound dressing, post-surgery care, and ICU-level nursing at home across Jaipur.'],
        ['q' => 'How quickly can you arrange a nurse or GDA?', 'a' => 'In most cases, we can assign suitable staff within a few hours. For emergency requirements, call our 24×7 helpline.'],
        ['q' => 'Are your caregivers background verified?', 'a' => 'Yes. All nurses, GDA staff, and patient attendants undergo background verification and skill assessment.'],
        ['q' => 'Do you offer 24-hour live-in care for elderly patients?', 'a' => 'Yes. We provide 12-hour shifts as well as 24-hour live-in caregivers for elderly patients.'],
        ['q' => 'Can I rent medical equipment for home use?', 'a' => 'Yes. We rent oxygen concentrators, hospital beds, wheelchairs, and more with home delivery in Jaipur.'],
        ['q' => 'Which areas in Jaipur do you serve?', 'a' => 'We serve Vaishali Nagar, Mansarovar, Malviya Nagar, Jagatpura, and 10+ more areas across Jaipur.'],
    ];

    public array $blogPosts = [
        [
            'slug' => 'choosing-home-nurse-jaipur',
            'title' => 'How to Choose the Right Home Nurse in Jaipur',
            'date' => '2026-06-15',
            'excerpt' => 'Key factors families should consider when hiring a home nurse — qualifications, experience, and verification.',
            'image' => 'blog-1',
            'content' => [
                'Choosing the right home nurse is one of the most important decisions for your family\'s health and peace of mind.',
                '1. Check Qualifications — Ensure the nurse is registered and has relevant experience for your patient\'s condition.',
                '2. Verify Background — Always hire through a verified agency that conducts background checks.',
                '3. Assess Compatibility — The nurse should communicate well with the patient and family members.',
                '4. Review References — Ask for testimonials or reviews from previous families.',
                '5. Understand the Care Plan — A good agency provides a clear, personalized care plan before starting.',
            ],
        ],
        [
            'slug' => 'elderly-care-tips',
            'title' => 'Essential Elderly Care Tips for Families at Home',
            'date' => '2026-05-28',
            'excerpt' => 'Practical advice on keeping elderly loved ones safe, comfortable, and independent at home.',
            'image' => 'blog-2',
            'content' => [
                'Caring for elderly loved ones at home requires patience, planning, and the right support.',
                '1. Keep Cleanliness — Maintain a hygienic environment to prevent infections.',
                '2. Proper Nutrition — Ensure balanced meals suited to their dietary needs.',
                '3. Regular Exercise — Gentle mobility exercises help maintain strength and balance.',
                '4. Medication Management — Use pill organizers and set reminders for timely doses.',
                '5. Social Connection — Encourage visits and activities to prevent loneliness.',
            ],
        ],
        [
            'slug' => 'post-surgery-recovery',
            'title' => 'Post-Surgery Recovery: Why Home Nursing Matters',
            'date' => '2026-05-10',
            'excerpt' => 'How professional home nursing speeds up recovery and reduces hospital readmissions.',
            'image' => 'blog-3',
            'content' => [
                'Professional home nursing after surgery can significantly improve recovery outcomes.',
                '1. Wound Care — Nurses manage dressings and monitor healing progress daily.',
                '2. Pain Management — Proper medication administration reduces discomfort.',
                '3. Mobility Support — Gradual rehabilitation exercises prevent complications.',
                '4. Infection Prevention — Sterile techniques and hygiene protocols reduce risks.',
                '5. Family Peace of Mind — Knowing a professional is monitoring recovery brings comfort.',
            ],
        ],
    ];

    public array $careers = [
        ['title' => 'Registered Staff Nurse', 'type' => 'Full-time', 'location' => 'Jaipur'],
        ['title' => 'General Duty Assistant (GDA)', 'type' => 'Full-time / Shift', 'location' => 'Jaipur'],
        ['title' => 'Patient Care Attendant', 'type' => 'Part-time', 'location' => 'Jaipur'],
        ['title' => 'Physiotherapist', 'type' => 'Freelance', 'location' => 'Jaipur'],
    ];

    public array $careerBenefits = [
        'Good Salary & Incentives',
        'Training Provided',
        'Flexible Shifts',
        'Growth Opportunities',
    ];
}
