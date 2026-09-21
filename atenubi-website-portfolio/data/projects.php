<?php
/**
 * Portfolio project data.
 * In a larger build this would come from the database (see db/schema.sql),
 * but for a personal portfolio a plain array is easier to maintain by hand.
 */

$projects = [
    'rise-and-brew-inventory' => [
        'slug' => 'rise-and-brew-inventory',
        'title' => 'Rise & Brew Inventory System',
        'client' => 'Independent project',
        'summary' => 'A stock and sales tracker built for a small café, so a manual end-of-day count in a notebook became a live dashboard.',
        'thumbnail' => 'inventory',
        'tags' => ['Python', 'MySQL', 'XAMPP'],
        'featured' => true,
        'body' => "Small cafés usually track stock the same way: a notebook by the register, a end-of-day recount, and a shrug when the numbers don't match. Rise & Brew Inventory replaces that with a proper system — every sale automatically deducts from stock, every delivery logs back in, and low-stock items surface before they run out mid-shift.",
        'challenge' => "The hard part wasn't the CRUD — it was designing a schema that could handle recipes made of multiple ingredients (a latte pulls from milk, beans, and cups at once) without the stock math drifting out of sync over time.",
        'solution' => "I mapped the ERD first, then built the schema in MySQL through phpMyAdmin before writing a line of app code. The Python layer handles the sprint-by-sprint feature work: CRUD screens, a sync_stock_from_sales() routine that ties transactions to ingredient-level deductions, input validation loops, and a paginated view for scanning inventory without the list becoming unreadable.",
        'features' => [
            'Sale-to-stock sync — every transaction automatically deducts ingredient-level stock',
            'ERD-first schema design for recipes made of multiple ingredients',
            'Paginated inventory views for fast scanning on a shop-floor screen',
            'Input validation loops to keep stock entries from silently corrupting',
        ],
        'stack' => ['Python', 'MySQL', 'phpMyAdmin', 'XAMPP'],
        'timeline' => [
            ['label' => 'Research', 'detail' => 'Shadowed the manual counting process to find where the errors actually happen'],
            ['label' => 'ERD & schema', 'detail' => 'Designed the entity relationships before any app code, tested in phpMyAdmin'],
            ['label' => 'Core build', 'detail' => 'CRUD logic, stock-sync function, input validation, in Agile sprints'],
            ['label' => 'In progress', 'detail' => 'Refining reporting views and edge cases in ingredient-level tracking'],
        ],
        'stats' => [
            ['value' => '2', 'label' => 'core stock tables normalized from one messy sheet'],
            ['value' => '1', 'label' => 'sync function tying sales to ingredient stock'],
            ['value' => '100%', 'label' => 'of stock updates now automatic, zero manual recount'],
        ],
    ],
    'som-detection' => [
        'slug' => 'som-detection',
        'title' => 'On-Device Soil Organic Matter Detection',
        'client' => 'Thesis project — Amadeo, Cavite',
        'summary' => 'A Flutter app that reads soil organic matter from a phone camera, built for coffee farmers who can\'t wait on a lab.',
        'thumbnail' => 'som',
        'tags' => ['Flutter', 'TFLite', 'MobileNetV2'],
        'featured' => true,
        'body' => "Coffee farmers in Amadeo, Cavite need to know their soil's organic matter content to manage cultivation, but lab testing is slow and often out of reach. This thesis project puts the test in their pocket: point a phone camera at a soil sample and get a classification on the spot, no lab, no internet connection required once the model is on-device.",
        'challenge' => "'Real-time' is a loaded word for on-device ML — I had to be precise in the manuscript about what the app actually does: on-device, on-demand inference, not a live continuous feed. Getting the model small enough to run on a mid-range phone without gutting its accuracy was the real constraint.",
        'solution' => "Built on MobileNetV2 and ResNet50 backbones, converted to TFLite for on-device inference. The Flutter side handles a multi-screen flow from capture to result, with SQLite storing scan history locally. Debugging spanned TFLite inference quirks, asset path issues across Android build variants, and fixing an off-by-one indexing bug in the sklearn precision-recall curve that was skewing the reported metrics.",
        'features' => [
            'On-device inference via TFLite — works without a live connection',
            'Multi-screen Flutter architecture from capture to classification result',
            'SQLite local storage for scan history',
            'Multiclass micro-average PR curves added for honest metric reporting',
        ],
        'stack' => ['Flutter', 'TFLite', 'MobileNetV2', 'ResNet50', 'SQLite', 'scikit-learn'],
        'timeline' => [
            ['label' => 'Model training', 'detail' => 'Trained and compared MobileNetV2 / ResNet50 backbones for SOM classification'],
            ['label' => 'Conversion', 'detail' => 'Converted to TFLite, debugged inference and asset-path issues on-device'],
            ['label' => 'App build', 'detail' => 'Multi-screen Flutter app with SQLite-backed scan history'],
            ['label' => 'Defense', 'detail' => 'Corrected PR-curve indexing bug, defended the on-device framing'],
        ],
        'stats' => [
            ['value' => '~93%', 'label' => 'classification accuracy'],
            ['value' => '2', 'label' => 'backbones trained and compared'],
            ['value' => '0', 'label' => 'internet connection required at inference time'],
        ],
    ],
    'csv-inventory' => [
        'slug' => 'csv-inventory',
        'title' => 'CSV Inventory & Sales Tracker',
        'client' => 'Early portfolio piece',
        'summary' => 'A lighter, file-based inventory system — the sketch that Rise & Brew\'s database version grew out of.',
        'thumbnail' => 'csv',
        'tags' => ['Python', 'pandas'],
        'featured' => false,
        'body' => "Before reaching for a full database, I built this as a pandas-and-CSV version of the same problem: track stock, log sales, and keep the two in sync without a server. It's smaller in scope than Rise & Brew, but it's where the core logic — the sync_stock_from_sales() pattern, paginated display, and input validation loops — was first worked out.",
        'challenge' => "Keeping a flat CSV file consistent under repeated writes, without the safety net a real database gives you for free.",
        'solution' => "Wrote defensive read-modify-write logic around the CSV, paginated the console output so long inventories stay readable, and validated every input before it touched the file.",
        'features' => [
            'sync_stock_from_sales() — the sync logic later reused in Rise & Brew',
            'Paginated console display for scanning long inventories',
            'Input validation loops before any write to the CSV',
        ],
        'stack' => ['Python', 'pandas'],
        'timeline' => [
            ['label' => 'Build', 'detail' => 'File-based CRUD and sync logic in pandas'],
        ],
        'stats' => [
            ['value' => '1', 'label' => 'file-based prototype that became a full DB system'],
        ],
    ],
    'medication-reminder' => [
        'slug' => 'medication-reminder',
        'title' => 'Medication Reminder System',
        'client' => 'Desktop app project',
        'summary' => 'A CustomTkinter desktop app that reminds patients to take medication on schedule — no manual tracking required.',
        'thumbnail' => 'meds',
        'tags' => ['Python', 'CustomTkinter'],
        'featured' => false,
        'body' => "A desktop reminder app built with CustomTkinter, aimed at replacing the sticky-note-on-the-fridge method of remembering medication schedules.",
        'challenge' => "Making a scheduling UI that stays clear even with several medications and times stacked in the same day.",
        'solution' => "Built a clean CustomTkinter interface for adding, editing, and tracking medication schedules, with reminders surfaced at the right time.",
        'features' => [
            'Add / edit / track medication schedules',
            'Clear CustomTkinter interface for non-technical users',
        ],
        'stack' => ['Python', 'CustomTkinter'],
        'timeline' => [
            ['label' => 'Build', 'detail' => 'Designed and built the CustomTkinter interface and scheduling logic'],
        ],
        'stats' => [],
    ],
];
