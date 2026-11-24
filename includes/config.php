<?php
/**
 * DELIGHT GUNDAR - Central Configuration File
 * 
 * Edit this file to easily update:
 * - Brand Name & Taglines
 * - WhatsApp Number & Default Message
 * - Instagram Profile Link
 * - Contact Address, Email & Operating Hours
 * - Product Details & Gallery Data
 */

// -------------------------------------------------------------
// BRAND INFORMATION
// -------------------------------------------------------------
define('SITE_NAME', 'DELIGHT GUNDAR');
define('SITE_TAGLINE', 'Experience Quality, Taste & Tradition');
define('SITE_SUBTITLE', '100% Pure Natural Handpicked Edible Gum (Gond)');
define('SITE_DESCRIPTION', 'Delight Gundar brings you authentic, premium-grade edible gum (Gond / Babool Gond) handpicked for superior clarity, nutrition, and traditional winter delicacy preparation.');

// Brand Logo Path (Available: 'assets/images/logo/logo.png', 'assets/images/logo/logo-gold.png', 'assets/images/logo/logo-original.jpg', 'assets/images/logo/logo.svg')
define('SITE_LOGO', 'assets/images/logo/logo.png');
define('SITE_LOGO_FOOTER', 'assets/images/logo/logo.png');

// -------------------------------------------------------------
// OWNER & CONTACT CONFIGURATION (EASY TO REPLACE)
// -------------------------------------------------------------
// International format without '+' or spaces (e.g., 917435991767)
define('WHATSAPP_NUMBER', '917435991767'); 
define('WHATSAPP_DISPLAY_NUMBER', '+91 74359 91767');
define('WHATSAPP_DEFAULT_MESSAGE', 'Hello Delight Gundar! I visited your website and would like to know more about your products.');

// Instagram Profile Link (Replace with actual profile URL)
define('INSTAGRAM_URL', 'https://www.instagram.com/delightgundar');
define('INSTAGRAM_HANDLE', '@delightgundar');

// Business Location & Email
define('CONTACT_EMAIL', 'info@delightgundar.com');
define('CONTACT_PHONE_ALT', '+91 74359 91767');
define('BUSINESS_ADDRESS', 'Delight Gundar , Mohammedi Garments , Polan School Road , Lunawada - 389230');
define('BUSINESS_HOURS', 'Mon - Sun : Available 24/7');

// -------------------------------------------------------------
// HELPER FUNCTIONS
// -------------------------------------------------------------

/**
 * Generate direct WhatsApp URL with pre-filled message
 *
 * @param string|null $custom_message
 * @return string
 */
function get_whatsapp_url(?string $custom_message = null): string {
    $msg = $custom_message ?: WHATSAPP_DEFAULT_MESSAGE;
    return 'https://wa.me/' . WHATSAPP_NUMBER . '?text=' . rawurlencode($msg);
}

/**
 * Basic output sanitization for safe dynamic rendering
 *
 * @param mixed $data
 * @return string
 */
function e($data): string {
    return htmlspecialchars((string)$data, ENT_QUOTES, 'UTF-8');
}

/**
 * Determine active navigation link
 *
 * @param string $page
 * @return string
 */
function is_active(string $page): string {
    $current = basename($_SERVER['PHP_SELF']);
    return ($current === $page) ? 'active' : '';
}

// -------------------------------------------------------------
// HERO SLIDER CONFIGURATION (5 IMAGES)
// -------------------------------------------------------------
$hero_slides = [
    [
        'image' => 'assets/images/hero/slide1.jpg',
        'badge' => 'Royal Heritage Selection',
        'title' => 'WELCOME TO DELIGHT GUNDAR',
        'subtitle' => 'Experience Quality, Taste & Tradition',
        'desc' => 'Discover the finest, sun-dried natural golden edible gum harvested with purity, unmatched clarity, and time-honored Indian traditions.'
    ],
    [
        'image' => 'assets/images/hero/slide2.jpg',
        'badge' => '100% Pure & Chemical-Free',
        'title' => 'NATURE\'S GOLDEN TREASURE',
        'subtitle' => 'Handpicked For Supreme Quality',
        'desc' => 'Each crystal is meticulously sorted to deliver amber-like translucency, perfect for authentic winter recipes, ayurvedic health, and wellness.'
    ],
    [
        'image' => 'assets/images/hero/slide3.jpg',
        'badge' => 'Artisanal Grading',
        'title' => 'AUTHENTIC TASTE & PURITY',
        'subtitle' => 'The Heart of Traditional Sweets',
        'desc' => 'Elevate your Gond Pak, Gundar Laddu, and festive delicacies with gum that puffs flawlessly into crisp, melt-in-the-mouth golden granules.'
    ],
    [
        'image' => 'assets/images/hero/slide4.jpg',
        'badge' => 'Trusted By Families & Chefs',
        'title' => 'TIME-TESTED NOURISHMENT',
        'subtitle' => 'Wholesome Strength & Vitality',
        'desc' => 'Rich in natural dietary fiber and age-old restorative benefits, Delight Gundar brings authentic nourishment directly from source to home.'
    ],
    [
        'image' => 'assets/images/hero/slide5.jpg',
        'badge' => 'Premium Wholesale & Retail',
        'title' => 'CRAFTED WITH DEDICATION',
        'subtitle' => 'Direct Connect with Brand Owner',
        'desc' => 'Experience bespoke service and transparent guidance. Inquire directly on WhatsApp to discover our full seasonal harvests and grades.'
    ],
];

// -------------------------------------------------------------
// TRADITIONAL NUTRITIONAL & WELLNESS BENEFITS
// (Displays in detail on hover over product images)
// -------------------------------------------------------------
$gundar_benefits = [
    [
        'icon' => 'bi-shield-plus',
        'title' => 'Boosts Immunity & Seasonal Defense',
        'subtitle' => 'Traditional Winter Protection',
        'desc' => 'Celebrated across generations of traditional Indian household care, Gundar is revered as a vital winter seasonal defense. Prepared in nourishing festive recipes such as warm Gond ke Laddu or roasted in pure desi ghee, it has traditionally been consumed to build seasonal stamina, generate internal warmth, and help fortify the body against the harsh winter chill and common seasonal discomforts. While cherished in Ayurvedic folk practices as an immune-supportive delicacy, it remains a beloved wholesome dietary staple rather than an artificial supplement.'
    ],
    [
        'icon' => 'bi-person-arms-up',
        'title' => 'Strengthens Bones & Joint Flexibility',
        'subtitle' => 'Nourishing Skeletal Comfort',
        'desc' => 'Throughout Ayurvedic traditions and regional culinary customs, edible gum has earned an esteemed reputation as a premier joint-nourishing superfood. Grandmothers and traditional sweet artisans have long recommended Gond preparations for elders, active individuals, and growing youth seeking to ease joint stiffness and maintain flexibility in colder climates. Combined with calcium-rich dry fruits, milk solids, and pure ghee, it provides dense, wholesome nourishment believed to lubricate cartilage and support structural comfort.'
    ],
    [
        'icon' => 'bi-flower1',
        'title' => 'Improves Digestion & Gut Regularity',
        'subtitle' => 'Natural Prebiotic Plant Fiber',
        'desc' => 'As a natural, water-soluble plant resin harvested from acacia trees, edible gum is naturally packed with dietary fiber and complex polysaccharides. These plant fibers offer functional prebiotic properties that gently support gut motility, promote beneficial digestive flora, and aid in soothing occasional stomach acidity. Its mild, demulcent qualities help maintain a balanced digestive lining, ensuring comfortable and smooth digestion when eaten in measured quantities.'
    ],
    [
        'icon' => 'bi-lightning-charge',
        'title' => 'Provides Sustained Natural Energy',
        'subtitle' => 'Slow-Burning Caloric Vitality',
        'desc' => 'Unlike refined sugary snacks that cause sudden energy spikes and subsequent crashes, traditional Gundar preparations offer clean, slow-burning fuel. When roasted in pure cow ghee and paired with nutritious almonds, cashews, and traditional jaggery, it acts as a calorie-dense powerhouse that releases sustained stamina throughout the day. It is ideal for active lifestyles, cold winter mornings, and anyone needing wholesome, sustained vigor without artificial stimulants.'
    ],
    [
        'icon' => 'bi-heart-pulse',
        'title' => 'Beneficial for Overall Health & Postpartum Recovery',
        'subtitle' => 'Generational Maternal Care',
        'desc' => 'Perhaps the most celebrated traditional use of Delight Gundar is in postnatal maternal care. For centuries in Indian households, new mothers have been lovingly nourished with specially prepared Gundar Pak and Panjiri to replenish vital fluids, support tissue recovery, and restore depleted physical strength after childbirth. Rich in natural plant goodness and restorative minerals, it stands as an enduring symbol of authentic nourishment, vitality, and holistic well-being.'
    ]
];

// -------------------------------------------------------------
// CURATED PRODUCTS (Exclusive 2-Product Showcase)
// -------------------------------------------------------------
$products = [
    [
        'id' => 1,
        'name' => 'Dhavda Gundar',
        'category' => '100% Pure Edible Gum',
        'badge' => 'Flagship Grade A+',
        'image' => 'assets/images/products/product1.jpg',
        'short_desc' => 'Dhavda gundar  , 800rs kg  , 250gm,500gm,1kg available.',
        'highlights' => ['100% Sun-Dried', 'Zero Chemical Polish', 'Maximum Puffing Rate', 'Artisanal Grading'],
        'benefits' => $gundar_benefits,
        'inquiry_msg' => 'Hello Delight Gundar! I would like to inquire about Dhavda Gundar.'
    ],
];
