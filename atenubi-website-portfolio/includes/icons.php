<?php
/**
 * Minimal stroke-style icon set, drawn to match the site's line/thread motif
 * rather than pulling in an icon font.
 */
function icon(string $name): string {
    $common = 'fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"';
    $icons = [
        'automation' => '<svg viewBox="0 0 40 40" '.$common.'><path d="M8 20h6M26 20h6M17 20a3 3 0 106 0 3 3 0 00-6 0z"/><path d="M11 12l3 5M26 12l-3 5M11 28l3-5M26 28l-3-5"/></svg>',
        'code' => '<svg viewBox="0 0 40 40" '.$common.'><path d="M14 12L6 20l8 8M26 12l8 8-8 8M23 9l-6 22"/></svg>',
        'data' => '<svg viewBox="0 0 40 40" '.$common.'><path d="M8 12c0-2.2 5.4-4 12-4s12 1.8 12 4-5.4 4-12 4-12-1.8-12-4z"/><path d="M8 12v16c0 2.2 5.4 4 12 4s12-1.8 12-4V12M8 20c0 2.2 5.4 4 12 4s12-1.8 12-4"/></svg>',
        'database' => '<svg viewBox="0 0 40 40" '.$common.'><rect x="8" y="8" width="24" height="24" rx="2"/><path d="M8 16h24M16 8v24"/></svg>',
        'clock' => '<svg viewBox="0 0 40 40" '.$common.'><circle cx="20" cy="20" r="13"/><path d="M20 12v8l6 4"/></svg>',
        'check' => '<svg viewBox="0 0 40 40" '.$common.'><circle cx="20" cy="20" r="13"/><path d="M14 20l4 4 8-9"/></svg>',
        'search' => '<svg viewBox="0 0 40 40" '.$common.'><circle cx="17" cy="17" r="9"/><path d="M24 24l8 8"/></svg>',
        'build' => '<svg viewBox="0 0 40 40" '.$common.'><path d="M13 27l-6 6M25 13l6-6M16 24l-9 9M23 16l9-9"/><path d="M18 22l-3-3 7-7 3 3-7 7z"/></svg>',
        'ship' => '<svg viewBox="0 0 40 40" '.$common.'><path d="M8 24l4-14h16l4 14"/><path d="M6 24h28l-3 8H9l-3-8zM17 24v-6M23 24v-6"/></svg>',
        'inventory' => '<svg viewBox="0 0 60 44" '.$common.'><rect x="8" y="14" width="18" height="14" rx="1.5"/><rect x="30" y="8" width="18" height="20" rx="1.5"/><path d="M14 14v-3a3 3 0 013-3h4a3 3 0 013 3v3M36 8V6a2 2 0 012-2h4a2 2 0 012 2v2"/><path d="M8 34h44"/></svg>',
        'som' => '<svg viewBox="0 0 60 44" '.$common.'><rect x="18" y="6" width="16" height="26" rx="3"/><path d="M23 12h10M26 4v2"/><path d="M10 36c4-8 10-8 12-4 3-6 10-6 14 0 3-5 9-4 11 2"/></svg>',
        'csv' => '<svg viewBox="0 0 60 44" '.$common.'><rect x="12" y="6" width="30" height="32" rx="2"/><path d="M12 16h30M12 24h30M12 32h30M22 6v32M32 6v32"/></svg>',
        'meds' => '<svg viewBox="0 0 60 44" '.$common.'><rect x="18" y="10" width="24" height="12" rx="6" transform="rotate(-25 30 16)"/><path d="M23 20l9-10"/><circle cx="15" cy="30" r="7"/><path d="M15 24v12M9 30h12"/></svg>',
        'quote' => '<svg viewBox="0 0 40 40" '.$common.' fill="currentColor" stroke="none"><path d="M10 14c-3.3 0-6 2.7-6 6 0 3.3 2.7 6 6 6h1c-.3 3-2 5.4-5 6.6V34c5-1 9-4.6 9-11v-3c0-3.3-2.2-6-5-6zm16 0c-3.3 0-6 2.7-6 6 0 3.3 2.7 6 6 6h1c-.3 3-2 5.4-5 6.6V34c5-1 9-4.6 9-11v-3c0-3.3-2.2-6-5-6z"/></svg>',
    ];
    return $icons[$name] ?? '';
}
