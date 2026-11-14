=== NB Accounting ===
A professional WordPress theme for online accounting, bookkeeping, VAT/TDS
and payroll compliance services — serving clients in Nepal and worldwide,
working in Xero, QuickBooks, Tally Prime, Zoho Books and Wave.

INSTALLATION
1. In your WordPress dashboard, go to Appearance > Themes > Add New > Upload Theme.
2. Upload the nirmal-accounting.zip file and click "Install Now".
3. Click "Activate".

SETTING UP THE PAGES (multi-page structure)
The theme uses dedicated page templates. Create these 5 pages
(Pages > Add New), then set each page's Template in the Page Attributes
box on the right:

  Page title   Slug         Template
  ----------   ----         --------
  Services     services     Services Page
  Pricing      pricing      Pricing Page
  About        about        About Page
  FAQ          faq          FAQ Page
  Contact      contact      Contact Page

  (Leave the page content empty — the template renders everything.
   Make sure Settings > Permalinks is set to "Post name" so the URLs
   are /services/, /pricing/, etc.)

4. HOMEPAGE: Go to Settings > Reading > "Your homepage displays" >
   "A static page". You may leave the dropdowns on "— Select —":
   the theme's custom homepage (front-page.php) renders automatically
   as the front page.
5. MENU: Go to Appearance > Menus, create a menu and add:
   Home (/), Services (/services/), Pricing (/pricing/),
   About (/about/), FAQ (/faq/), Contact (/contact/).
   Assign it to the "Primary Menu" location. Create a second
   shorter menu for the "Footer Menu" location.

CUSTOMISATION (no code needed)
- Appearance > Customize > Business Info:
    WhatsApp Number  (default 9703140647 — wa.me link auto-adds +977)
    Email Address     (default contact@nirmalbhattarai12.com.np)
    Working Hours     (default 9:00 AM – 12:00 AM)
    Address           (default "Online")
- Appearance > Customize > Homepage Hero: edit the hero title & subtitle.
- Appearance > Customize > Pricing Plans: edit the 3 plan names, NPR prices,
  descriptions, feature lists (one per line), and which plan is highlighted.
- Appearance > Customize > Site Identity: set your site title, tagline
  and logo.

CONTACT FORM
The contact form on the Contact page sends enquiries via wp_mail() to the
email address set in Business Info. Make sure your hosting can send mail
(SMTP plugin recommended, e.g. WP Mail SMTP).

FILES
  style.css                 Theme header + all styles
  functions.php             Setup, Customizer, contact-form handler
  header.php                Top bar, navigation, sticky header
  footer.php                Footer columns + floating WhatsApp button
  front-page.php            Homepage: hero, services preview, software,
                            process, testimonials, CTA
  page-services.php         Template: Services Page (full 6 services)
  page-pricing.php          Template: Pricing Page (plans + pricing FAQ)
  page-about.php            Template: About Page
  page-contact.php          Template: Contact Page (cards + form)
  page-faq.php              Template: FAQ Page
  template-parts/           Shared sections (services grid, pricing table,
                            FAQ accordion, contact section, CTA band,
                            software strip)
  index.php / page.php / single.php / 404.php
  js/main.js                Mobile menu, FAQ accordion, header shadow
  screenshot.png            Theme preview

VERSION: 1.1.0
