# DELIGHT GUNDAR – PREMIUM INFORMATIONAL BRAND WEBSITE

A professional, elegant, luxurious, and fully responsive informational website built for **DELIGHT GUNDAR** — a premier brand specializing in 100% pure, natural, handpicked edible gum (*Gundar / Gond / Babool Gond*).

---

## 🌟 KEY FEATURES

- **Premium Luxury Visual Identity:**
  - Bespoke color palette: Golden (`#C9A227`, `#A67C00`, `#E8D48A`), Warm Cream (`#FFF9EB`), Dark Brown (`#3B2A1A`), Deep Black (`#17130D`), and White (`#FFFFFF`).
  - Golden gradient action buttons with soft shadows and smooth hover transitions.
  - Serif typography for luxury headings (`Cinzel` & `Playfair Display`) paired with clean modern sans-serif (`Plus Jakarta Sans`) for maximum readability.
  - Custom vector SVG logo & favicon with delicate gold accents.

- **Five-Image Hero Carousel:**
  - Exactly 5 sliding images showcasing authentic Delight Gundar crystals.
  - Automatic sliding (5.5s intervals) with pause-on-hover.
  - Manual Previous and Next navigation arrows with golden glassmorphism styling.
  - 5 progress indicators for intuitive slide tracking.
  - Mobile touch swipe support for smooth swiping on phones and tablets.
  - Crisp overlay text: *"WELCOME TO DELIGHT GUNDAR - Experience Quality, Taste & Tradition"*.
  - Direct CTA button scrolling smoothly to the About section.

- **Informational Product Showcase & Health Benefits Hover:**
  - Featuring your 2 authentic flagship product images (`product1.jpg`: Whole Amber Crystals, `product2.jpg`: Nutritional Benefits Poster).
  - **Interactive Hover & Tap Overlay:** Hovering over (or tapping) either product photo reveals an in-depth, beautifully styled breakdown of the 5 time-honored traditional benefits (Immunity & Seasonal Defense, Bone & Joint Strength, Digestion & Prebiotic Fiber, Sustained Natural Energy, Overall Strength & Postpartum Recovery).
  - Direct WhatsApp inquiry buttons for both products with customized pre-filled messages.
  - Zero cart or checkout clutter — purely informational to establish trust and drive direct conversations.

- **Direct Touchpoints (WhatsApp & Instagram):**
  - **Floating WhatsApp button** at bottom-right with pulsating gold-green wave effect, pre-filled message, and hover tooltip.
  - **Interactive WhatsApp Inquiry Form** that formats visitor requirements into a clean WhatsApp message and opens directly in a new tab.
  - **Official Instagram profile links** with secure external attributes (`target="_blank" rel="noopener noreferrer"`).

- **Visual Gallery with Vanilla JS Lightbox:**
  - High-resolution image grid.
  - Click-to-enlarge modal lightbox with Next / Prev buttons, keyboard arrow navigation, and ESC key support.

- **Clean & Modular PHP Architecture:**
  - Built with PHP 8+, HTML5, CSS3, Vanilla JavaScript, and Bootstrap 5.
  - No database or MySQL required — zero setup friction.
  - Centralized configuration file (`includes/config.php`) where all brand details, phone numbers, and URLs can be modified in one single place.

---

## 📂 PROJECT FOLDER STRUCTURE

```
delight-gundar/
│
├── index.php                 # Homepage (Hero carousel, About, Products, Why Us, Gallery, Contact)
├── about.php                 # Dedicated About page (Heritage, Gundar tradition, Purity process)
├── contact.php               # Dedicated Contact page (Business info, Form, Google Maps, FAQ)
│
├── includes/
│   ├── config.php            # Central configuration (WhatsApp, Instagram, Address, Products data)
│   ├── header.php            # Reusable header component, SEO meta tags, navigation bar
│   └── footer.php            # Reusable footer component, floating WhatsApp button, lightbox modal
│
├── assets/
│   ├── css/
│   │   └── style.css         # Custom responsive stylesheet with gold, cream & brown theme
│   │
│   ├── js/
│   │   └── script.js         # Vanilla JavaScript (Navbar scroll, Touch swipe, Lightbox, WA Form)
│   │
│   ├── images/
│   │   ├── hero/
│   │   │   ├── slide1.jpg    # Slide 1: Royal Heritage Selection
│   │   │   ├── slide2.jpg    # Slide 2: Nature's Golden Treasure
│   │   │   ├── slide3.jpg    # Slide 3: Authentic Taste & Purity
│   │   │   ├── slide4.jpg    # Slide 4: Time-Tested Nourishment
│   │   │   └── slide5.jpg    # Slide 5: Crafted with Dedication
│   │   │
│   │   ├── products/         # Flagship product showcase (product1.jpg: Royal Crystals, product2.jpg: Nutritional Poster)
│   │   ├── gallery/          # Visual gallery showcase (gallery1.jpg to gallery6.jpg)
│   │   └── logo/
│   │       ├── logo.png      # Active official brand logo (transparent background, white typography)
│   │       ├── logo-gold.png # Gold luxury tint variant (transparent background)
│   │       ├── logo-original.jpg # Original master logo image
│   │       ├── logo.svg      # Vector SVG alternative
│   │       └── favicon.svg   # Browser tab favicon
│   │
│   └── icons/                # Additional icon assets
│
└── README.md                 # Complete documentation & setup instructions
```

---

## 🚀 HOW TO RUN ON XAMPP

1. **Copy Project Folder to XAMPP htdocs:**
   - Copy the entire `delight-gundar/` folder into your XAMPP web root directory:
     ```
     C:\xampp\htdocs\delight-gundar
     ```
     *(Or if your XAMPP is installed at `C:\xampp_new`, copy into `C:\xampp_new\htdocs\delight-gundar`)*

2. **Start Apache Web Server:**
   - Open the **XAMPP Control Panel**.
   - Click the **Start** button next to **Apache**.
   - *(Note: MySQL is NOT required since this is an informational website without database dependencies).*

3. **Open the Website in Your Browser:**
   - Visit:
     ```
     http://localhost/delight-gundar/
     ```
   - You can also navigate directly to:
     - Home: `http://localhost/delight-gundar/index.php`
     - About Us: `http://localhost/delight-gundar/about.php`
     - Contact Us: `http://localhost/delight-gundar/contact.php`

---

## 🖼️ HOW TO REPLACE THE FIVE SLIDER IMAGES

All 5 hero slider images are located in:
```
assets/images/hero/
├── slide1.jpg
├── slide2.jpg
├── slide3.jpg
├── slide4.jpg
└── slide5.jpg
```

### Steps to Replace:
1. Prepare your 5 new images.
2. Recommended resolution: **1400×700 pixels** (or **1920×950 pixels** for ultra HD screens).
3. Name your new images exactly:
   - `slide1.jpg`
   - `slide2.jpg`
   - `slide3.jpg`
   - `slide4.jpg`
   - `slide5.jpg`
4. Replace the existing files inside `assets/images/hero/`.
5. Refresh your browser (`Ctrl + F5` or `Cmd + Shift + R`).
6. *Optional:* To update slide captions, titles, or descriptions, open `includes/config.php` and edit the `$hero_slides` array starting around **line 62**.

---

## 🎨 HOW TO CHANGE OR UPDATE THE BRAND LOGO

Your official custom **DELIGHT GUNDAR** logo has been integrated directly into the website!

The logo files are stored in:
📂 `assets/images/logo/`
- `logo.png` – **(Currently Active)** Transparent PNG with crisp white lettering, perfectly cropped for the dark navbar & footer.
- `logo-gold.png` – Transparent PNG with luxury gold gradient tint.
- `logo-original.jpg` – The original high-res banner image you provided.
- `logo.svg` – Vector emblem version.

### Method 1: Change Logo by Replacing the File (Quickest)
1. Prepare your logo image (PNG with transparent background is recommended for dark navigation bars).
2. Save it as `logo.png`.
3. Replace the file at `assets/images/logo/logo.png`.
4. Refresh your browser (`Ctrl + F5`).

### Method 2: Change Logo Path in Configuration
Open `includes/config.php` and locate lines 19–20:
```php
// Brand Logo Path
define('SITE_LOGO', 'assets/images/logo/logo.png');
define('SITE_LOGO_FOOTER', 'assets/images/logo/logo.png');
```
You can switch to any variant, for example:
- To use the **Gold-tinted** version: change to `'assets/images/logo/logo-gold.png'`
- To use the **Original** banner: change to `'assets/images/logo/logo-original.jpg'`
- To use a custom logo file: place your file in `assets/images/logo/my-logo.png` and update the definition.

---

## 📱 HOW TO CHANGE WHATSAPP NUMBER & INSTAGRAM LINK

The entire website is controlled by a single configuration file:
👉 **`includes/config.php`**

Open `includes/config.php` in any text editor and edit the following constants:

### 1. Changing the WhatsApp Number:
Locate lines 19–21:
```php
// International format without '+' or spaces (e.g. 919876543210 for India)
define('WHATSAPP_NUMBER', '919876543210'); 

// Human-readable display format shown on the website
define('WHATSAPP_DISPLAY_NUMBER', '+91 98765 43210');

// Default message sent when visitor clicks WhatsApp
define('WHATSAPP_DEFAULT_MESSAGE', 'Hello Delight Gundar! I visited your website and would like to know more about your products.');
```
- Replace `'919876543210'` with your actual WhatsApp phone number including country code (e.g., `91` for India, `1` for US/Canada) with **no plus sign, dashes, or spaces**.
- Replace `'+91 98765 43210'` with your preferred display text.

### 2. Changing the Instagram Profile Link:
Locate lines 24–25:
```php
// Instagram Profile Link
define('INSTAGRAM_URL', 'https://www.instagram.com/delightgundar');
define('INSTAGRAM_HANDLE', '@delightgundar');
```
- Replace `'https://www.instagram.com/delightgundar'` with your actual Instagram page URL.
- Replace `'@delightgundar'` with your Instagram handle.

### 3. Changing Business Details (Email & Address):
Locate lines 28–30:
```php
define('CONTACT_EMAIL', 'info@delightgundar.com');
define('BUSINESS_ADDRESS', 'Delight Gundar Trading Co., Heritage Market, Gujarat - 380001, India');
define('BUSINESS_HOURS', 'Mon - Sat: 9:00 AM - 7:30 PM (Sunday Closed)');
```

Once saved, the navbar, hero slider buttons, product cards, contact cards, footer, inquiry form, and floating button will all update instantly across the entire site!

---

## 🧪 RESPONSIVE VIEWPORT TESTING

The website layout has been rigorously designed and validated across:
- **Mobile Phones:** 320px – 480px (Clean single column, touch swipe carousel, touch-friendly buttons, responsive logos, no horizontal scrolling).
- **Tablets:** 481px – 768px (Two-column product and gallery grids, adapted typography, balanced spacing).
- **Laptops:** 769px – 1366px (Full three-column showcases, interactive lightbox, sticky navigation).
- **Desktop & Ultra-wide:** 1367px and above (Max-width container containment, sharp imagery, luxurious gold borders).

---

## 🔒 SECURITY & BEST PRACTICES

- Dynamic output is sanitized with PHP `htmlspecialchars()` with `ENT_QUOTES, 'UTF-8'`.
- All external links open with `target="_blank" rel="noopener noreferrer"` to prevent reverse tabnabbing.
- Zero cookie collection or unnecessary user data capture.
- Lightweight, dependency-free vanilla JavaScript for peak performance.

---

Crafted with dedication for **DELIGHT GUNDAR** — Experience Quality, Taste & Tradition.
