<?php
/**
 * Services offered, and the tiered pricing shown on services.php.
 */

$services = [
    [
        'title' => 'Workflow Automation',
        'description' => 'Scripting away the repetitive parts of a process — data entry, file sorting, report generation — so the manual steps disappear from your day.',
        'icon' => 'automation',
    ],
    [
        'title' => 'Custom Software Development',
        'description' => 'A tool built around how your process actually works, not a generic template you have to bend yourself around.',
        'icon' => 'code',
    ],
    [
        'title' => 'Data Processing & Reporting',
        'description' => 'Turning scattered spreadsheets and CSVs into clean, validated data with reports that update themselves.',
        'icon' => 'data',
    ],
    [
        'title' => 'Database Design',
        'description' => 'A schema mapped out from your real workflow first, so the data stays consistent as the system grows.',
        'icon' => 'database',
    ],
];

$pricingTiers = [
    [
        'name' => 'Starter',
        'price' => '₱8,000',
        'period' => 'per small script or tool',
        'description' => 'A single, well-defined automation — one manual task, scripted and handed off.',
        'features' => [
            'One automation script or small tool',
            'Basic input validation',
            'Setup instructions included',
            '1 round of revisions',
        ],
        'highlighted' => false,
    ],
    [
        'name' => 'Custom Build',
        'price' => '₱25,000+',
        'period' => 'per project',
        'description' => 'A full system like Rise & Brew — schema design, CRUD, and the logic that keeps it all in sync.',
        'features' => [
            'Full requirements and ERD/schema design',
            'Database-backed application',
            'Core CRUD and business logic',
            '3 rounds of revisions',
            '2 weeks of post-launch support',
        ],
        'highlighted' => true,
    ],
    [
        'name' => 'Ongoing Support',
        'price' => '₱6,000',
        'period' => 'per month',
        'description' => 'For systems already in place that need fixes, small features, or someone keeping an eye on them.',
        'features' => [
            'Bug fixes and small feature requests',
            'Monthly check-in on system health',
            'Priority response time',
        ],
        'highlighted' => false,
    ],
];
