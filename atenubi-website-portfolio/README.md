# Atenoobie — Portfolio Site

A multi-page portfolio site: HTML + PHP templating, Bootstrap 5 for layout,
vanilla JS for the contact/newsletter forms, and a small PHP + MySQL backend.

## Pages

| File            | Sitemap page |
|------------------|--------------|
| `index.php`      | Home |
| `about.php`      | About Us (includes the contact form, `#contact`) |
| `portfolio.php`  | Portfolio |
| `services.php`   | Services |
| `project.php?id=`| Project detail (dynamic — see project IDs below) |

Project detail links: `project.php?id=rise-and-brew-inventory`,
`?id=som-detection`, `?id=csv-inventory`, `?id=medication-reminder`.
Add more projects by adding an entry to `data/projects.php` — no other
code changes needed.

## Running it locally (XAMPP)

1. Copy the whole `atenoobie-portfolio` folder into your XAMPP `htdocs`
   directory, e.g. `C:\xampp\htdocs\atenoobie-portfolio` (or
   `/Applications/XAMPP/htdocs/` on Mac).
2. Start **Apache** and **MySQL** from the XAMPP control panel.
3. Open **phpMyAdmin** (`http://localhost/phpmyadmin`), go to **Import**,
   and import `db/schema.sql`. This creates the `atenoobie_portfolio`
   database with two tables: `contact_messages` and
   `newsletter_subscribers`.
4. Visit `http://localhost/atenoobie-portfolio/index.php` in your browser.

If you skip step 3, the contact and newsletter forms still work — they
fall back to writing submissions to `data/_local/*.log` instead of the
database, so nothing breaks while you're setting things up.

## Editing content

- **Projects:** `data/projects.php`
- **Services & pricing:** `data/services.php`
- **FAQs:** `data/faqs.php`
- **Nav, footer, contact email:** `includes/navbar.php`, `includes/footer.php`

## Structure

```
atenoobie-portfolio/
├── index.php, about.php, portfolio.php, services.php, project.php
├── includes/       shared header, navbar, footer, icons, small helpers
├── css/style.css   design tokens + all component styles
├── js/main.js      contact/newsletter form handling (fetch → PHP)
├── php/            config.php (DB connection), form handlers
├── data/           content as PHP arrays (projects, services, FAQs)
└── db/schema.sql   MySQL schema for the two form tables
```

## Notes

- Colors, type, and the dashed "thread" connector motif are all defined
  as CSS variables at the top of `css/style.css` — change the palette
  there and it propagates everywhere.
- `php/config.php` defaults to XAMPP's stock MySQL credentials
  (`root` / no password). Update `DB_USER` / `DB_PASS` if yours differ.
