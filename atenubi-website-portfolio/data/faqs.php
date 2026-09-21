<?php
/**
 * FAQ entries. Pass a $faqSet key to faqs-section.php to pick a subset;
 * default shows everything.
 */

$allFaqs = [
    'general' => [
        [
            'q' => 'What kind of problems do you work on?',
            'a' => 'Mostly manual processes that eat someone\'s time — stock counted by hand, reports built by copy-pasting between spreadsheets, records tracked in a notebook. If a task is repetitive and rule-based, it can usually be automated.',
        ],
        [
            'q' => 'What technologies do you use?',
            'a' => 'Python and MySQL are my core stack, alongside PHP for web backends and Flutter for mobile. I pick the tool that fits the problem rather than forcing one stack onto everything.',
        ],
        [
            'q' => 'Are you available for freelance or contract work?',
            'a' => 'Yes — I\'m currently open to junior developer roles, contract work, and freelance automation projects. Reach out through the contact form and I\'ll get back to you.',
        ],
    ],
    'timeline' => [
        [
            'q' => 'How long does a typical project take?',
            'a' => 'A small script can be a few days. A full system like Rise & Brew\'s inventory tracker runs several weeks, since it starts with schema design before any code gets written.',
        ],
        [
            'q' => 'Do you offer support after a project is delivered?',
            'a' => 'Custom builds include a post-launch support window, and ongoing support is available afterward on a monthly basis for anyone who wants it.',
        ],
    ],
    'process' => [
        [
            'q' => 'How do you start a new project?',
            'a' => 'By watching the manual process as it actually happens, not just how it\'s described. That\'s usually where the real requirements — and the edge cases — show up.',
        ],
        [
            'q' => 'Do I need to know anything technical to work with you?',
            'a' => 'No. I\'ll ask about your process in plain terms and translate it into the system myself.',
        ],
    ],
];
