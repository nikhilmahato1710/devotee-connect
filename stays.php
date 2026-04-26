<?php include 'auth_check.php'; ?>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Spiritual Stays | Premium Divine Accommodations</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
  tailwind.config = {
    darkMode: "class",
    theme: {
      extend: {
        colors: {
          "primary": "#ec5b13",
          "saffron-deep": "#E65100",
          "gold-metallic": "#D4AF37",
          "cream-soft": "#FFF8E1",
          "background-light": "#FFF8E1",
          "background-dark": "#221610",
        },
        fontFamily: {
          "display": ["Cinzel", "serif"],
          "body": ["Poppins", "sans-serif"]
        },
        borderRadius: {
          "DEFAULT": "0.25rem",
          "lg": "0.5rem",
          "xl": "0.75rem",
          "full": "9999px"
        },
      },
    },
  }
</script>
<style>
  .glass-card {
    background: rgba(255, 248, 225, 0.7);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(212, 175, 55, 0.3);
  }
  .dark .glass-card {
    background: rgba(34, 22, 16, 0.7);
  }
  .live-dot {
    width: 10px; height: 10px; border-radius: 50%; background: #0bda87;
    box-shadow: 0 0 0 0 rgba(11, 218, 135, 0.7);
    animation: pulse-green 2s infinite;
    display: inline-block;
  }
  @keyframes pulse-green {
    0%   { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(11,218,135,0.7); }
    70%  { transform: scale(1);    box-shadow: 0 0 0 6px rgba(11,218,135,0); }
    100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(11,218,135,0); }
  }
  @keyframes pulse-orange {
    0%   { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(236,91,19,0.7); }
    70%  { transform: scale(1);    box-shadow: 0 0 0 6px rgba(236,91,19,0); }
    100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(236,91,19,0); }
  }
  @keyframes shimmer {
    0%   { background-position: -400px 0; }
    100% { background-position: 400px 0; }
  }
  .skeleton {
    background: linear-gradient(90deg, #f0e6d0 25%, #fdf6e3 50%, #f0e6d0 75%);
    background-size: 400px 100%;
    animation: shimmer 1.4s ease-in-out infinite;
    border-radius: 8px;
  }
  .card-enter { animation: cardFadeIn 0.4s ease forwards; opacity: 0; }
  @keyframes cardFadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .distance-badge {
    background: linear-gradient(135deg, #fff8e1, #fde68a);
    border: 1px solid #d4af37;
  }
  .temple-live {
    display: flex; align-items: center; gap: 6px;
    font-size: 11px; font-weight: 600;
    color: #0bda87; font-family: 'Poppins', sans-serif;
  }
  .spinner {
    border: 2px solid rgba(236,91,19,0.2);
    border-top: 2px solid #ec5b13;
    border-radius: 50%; width: 16px; height: 16px;
    animation: spin 0.8s linear infinite; display: inline-block;
  }
  @keyframes spin { to { transform: rotate(360deg); } }
</style>
  <style id="dc-unified-fonts">
  /* Unified typography — Devotee Connect */
  .font-cinzel, h1.brand, .brand-title { font-family: 'Cinzel', serif !important; }
  body, nav, p, span, a, button, input, select, label {
    font-family: 'Poppins', sans-serif;
  }
  h1, h2, h3, h4 { font-family: 'Cinzel', serif; }
</style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen">

<!-- Top Navigation Bar -->
<!-- ============================================================
     UNIFIED HEADER — Devotee Connect
     Font: Cinzel (brand name), Poppins (nav + body)
     ============================================================ -->
<!-- ===== UNIFIED HEADER — Devotee Connect ===== -->
<style>
  .dc-header {
    position: sticky; top: 0; z-index: 50;
    background: rgba(255,255,255,0.95);
    backdrop-filter: blur(12px);
    border-bottom: 1px solid rgba(212,175,55,0.25);
    box-shadow: 0 1px 8px rgba(0,0,0,0.06);
  }
  .dc-header-inner {
    max-width: 1280px; margin: 0 auto;
    padding: 0 24px;
    display: flex; align-items: center;
    justify-content: space-between;
    height: 72px;
  }
  .dc-brand {
    display: flex; align-items: center; gap: 10px;
    text-decoration: none; flex-shrink: 0;
  }
  .dc-brand-icon {
    font-size: 36px; color: #ec5b13;
  }
  .dc-brand-title {
    font-family: 'Cinzel', serif;
    font-size: 1.15rem; font-weight: 900;
    letter-spacing: 0.12em; text-transform: uppercase;
    color: #E65100; white-space: nowrap;
  }
  .dc-brand-title span { color: #ec5b13; }
  .dc-nav {
    display: flex; align-items: center; gap: 28px;
    font-family: 'Poppins', sans-serif;
    font-size: 0.72rem; font-weight: 600;
    text-transform: uppercase; letter-spacing: 0.1em;
    text-decoration: none;
  }
  .dc-nav a { text-decoration: none; transition: color 0.2s; }
  .dc-right {
    display: flex; align-items: center; gap: 12px;
    flex-shrink: 0;
  }
  .dc-user {
    display: flex; align-items: center; gap: 5px;
    font-family: 'Poppins', sans-serif;
    font-size: 0.8rem; font-weight: 500;
    color: #E65100; white-space: nowrap;
  }
  .dc-logout {
    display: inline-flex; align-items: center; gap: 6px;
    padding: 8px 18px;
    background: #ec5b13; color: #fff;
    font-family: 'Poppins', sans-serif;
    font-size: 0.72rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.08em;
    border-radius: 8px; text-decoration: none;
    transition: background 0.2s, transform 0.1s;
    box-shadow: 0 2px 8px rgba(236,91,19,0.25);
    white-space: nowrap;
  }
  .dc-logout:hover { background: #E65100; transform: scale(0.98); }
  @media (max-width: 900px) {
    .dc-nav { display: none; }
    .dc-user { display: none; }
  }
</style>
<header class="dc-header">
  <div class="dc-header-inner">

    <!-- Brand -->
    <a href="index.php" class="dc-brand">
      <span class="material-symbols-outlined dc-brand-icon">temple_hindu</span>
      <span class="dc-brand-title">Devotee <span>Connect</span></span>
    </a>

    <!-- Navigation -->
    <nav class="dc-nav">
        <a href="index.php" style="color:#374151;" onmouseover="this.style.color='#ec5b13'" onmouseout="this.style.color='#374151'">Home</a>
        <a href="booking.php" style="color:#374151;" onmouseover="this.style.color='#ec5b13'" onmouseout="this.style.color='#374151'">Booking</a>
        <a href="calendar.php" style="color:#374151;" onmouseover="this.style.color='#ec5b13'" onmouseout="this.style.color='#374151'">Calendar</a>
        <a href="stays.php" style="color:#ec5b13;border-bottom:2px solid #ec5b13;padding-bottom:2px;">Stays</a>
        <a href="transport.php" style="color:#374151;" onmouseover="this.style.color='#ec5b13'" onmouseout="this.style.color='#374151'">Transport</a>
        <a href="contact.php" style="color:#374151;" onmouseover="this.style.color='#ec5b13'" onmouseout="this.style.color='#374151'">Contact</a>
    </nav>

    <!-- Right: User + Logout -->
    <div class="dc-right">
      <a href="logout.php" class="dc-logout">
        <span class="material-symbols-outlined" style="font-size:16px;">logout</span>
        Logout
      </a>
    </div>

  </div>
</header>
<!-- ===== END UNIFIED HEADER ===== -->

<main>
<!-- Hero Section -->
<section class="relative h-[60vh] flex items-center justify-center overflow-hidden">
  <div class="absolute inset-0 z-0">
    <img id="heroBg" class="w-full h-full object-cover brightness-50 transition-all duration-1000"
      src="https://images.unsplash.com/photo-1600093463592-8e36ae95ef56?w=1600&q=80" alt="Temple"/>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-background-light dark:to-background-dark"></div>
  </div>
  <div class="relative z-10 text-center px-4 w-full max-w-4xl">
    <h2 class="text-4xl md:text-6xl font-display font-bold text-white mb-4 drop-shadow-lg">Spiritual Stays</h2>
    <p class="text-lg text-cream-soft/90 mb-8 font-body max-w-2xl mx-auto">Discover sanctuaries of peace. Handpicked premium accommodations near sacred sites.</p>

    <!-- Search Bar -->
    <div class="glass-card p-2 rounded-xl md:rounded-full shadow-2xl flex flex-col md:flex-row gap-2 max-w-3xl mx-auto">
      <div class="flex-1 flex items-center px-4 py-2 border-b md:border-b-0 md:border-r border-primary/20">
        <span class="material-symbols-outlined text-primary mr-3">location_on</span>
        <input id="cityInput" class="bg-transparent border-none focus:ring-0 w-full text-sm font-body placeholder:text-slate-500 dark:placeholder:text-slate-400 dark:text-slate-100"
          placeholder="Where is your soul heading? (e.g. Bhubaneswar)" type="text" value="Bhubaneswar"/>
      </div>
      <div class="flex-1 flex items-center px-4 py-2 border-b md:border-b-0 md:border-r border-primary/20">
        <span class="material-symbols-outlined text-primary mr-3">payments</span>
        <select id="priceFilter" class="bg-transparent border-none focus:ring-0 w-full text-sm font-body text-slate-600 dark:text-slate-300 cursor-pointer">
          <option value="">Any Price Range</option>
          <option value="budget">Budget (Under ₹3,000)</option>
          <option value="mid">Mid-range (₹3,000–₹8,000)</option>
          <option value="luxury">Luxury (₹8,000+)</option>
        </select>
      </div>
      <button id="searchBtn" onclick="searchHotels()"
        class="bg-primary text-white px-8 py-3 rounded-xl md:rounded-full font-bold hover:bg-saffron-deep transition-all flex items-center justify-center gap-2 font-body">
        <span>Find Sanctuary</span>
        <span class="material-symbols-outlined text-sm">arrow_forward</span>
      </button>
    </div>
    <p id="locationStatus" class="text-white/70 text-xs mt-3 font-body"></p>
  </div>
</section>

<!-- Results Section -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
  <div class="flex justify-between items-end mb-10">
    <div>
      <span class="text-primary font-bold tracking-widest uppercase text-xs font-body">Curated Selection</span>
      <h3 class="text-3xl font-display mt-2" id="sectionTitle">Recommended Sanctuaries</h3>
    </div>
    <div id="resultCount" class="text-sm font-body text-slate-500"></div>
  </div>

  <!-- Loading Skeletons -->
  <div id="loadingGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 hidden">
    <div class="glass-card rounded-xl overflow-hidden" style="animation-delay:0s">
      <div class="skeleton h-64 w-full"></div>
      <div class="p-6 space-y-3">
        <div class="skeleton h-5 w-3/4"></div>
        <div class="skeleton h-4 w-1/2"></div>
        <div class="skeleton h-4 w-full"></div>
        <div class="skeleton h-10 w-full mt-4"></div>
      </div>
    </div>
    <div class="glass-card rounded-xl overflow-hidden">
      <div class="skeleton h-64 w-full"></div>
      <div class="p-6 space-y-3">
        <div class="skeleton h-5 w-3/4"></div>
        <div class="skeleton h-4 w-1/2"></div>
        <div class="skeleton h-4 w-full"></div>
        <div class="skeleton h-10 w-full mt-4"></div>
      </div>
    </div>
    <div class="glass-card rounded-xl overflow-hidden">
      <div class="skeleton h-64 w-full"></div>
      <div class="p-6 space-y-3">
        <div class="skeleton h-5 w-3/4"></div>
        <div class="skeleton h-4 w-1/2"></div>
        <div class="skeleton h-4 w-full"></div>
        <div class="skeleton h-10 w-full mt-4"></div>
      </div>
    </div>
  </div>

  <!-- Hotels Grid -->
  <div id="hotelsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"></div>

  <!-- Empty State -->
  <div id="emptyState" class="hidden text-center py-24">
    <span class="material-symbols-outlined text-6xl text-primary/30">hotel</span>
    <p class="text-xl font-display mt-4 text-slate-500">No stays found for this location.</p>
    <p class="text-sm font-body text-slate-400 mt-2">Try searching another sacred city.</p>
  </div>

  <div class="mt-16 flex justify-center">
    <button id="loadMoreBtn" onclick="loadMore()" class="hidden flex items-center gap-2 text-primary font-bold border-b-2 border-primary pb-1 hover:gap-4 transition-all font-body">
      Explore More Stays
      <span class="material-symbols-outlined">arrow_forward</span>
    </button>
  </div>
</section>

<!-- Newsletter -->
<section class="bg-primary/5 py-16 border-y border-primary/10">
  <div class="max-w-4xl mx-auto px-4 text-center">
    <span class="material-symbols-outlined text-primary text-5xl mb-4">mail</span>
    <h3 class="text-3xl font-display font-bold mb-4">Join our Spiritual Circle</h3>
    <p class="text-slate-600 dark:text-slate-400 mb-8 font-body">Get exclusive early access to premium ashram openings and spiritual retreat discounts.</p>
    <div class="flex flex-col sm:flex-row gap-2 max-w-md mx-auto">
      <input class="flex-1 rounded-lg border border-primary/20 bg-background-light dark:bg-background-dark focus:ring-primary focus:border-primary px-4 py-2 font-body" placeholder="Your email address" type="email"/>
      <button class="bg-primary text-white px-8 py-3 rounded-lg font-bold hover:bg-saffron-deep transition-all font-body">Subscribe</button>
    </div>
  </div>
</section>
</main>

<footer class="bg-background-light dark:bg-background-dark py-12 border-t border-primary/10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8">
    <div>
      <div class="flex items-center gap-2 mb-6">
        <span class="material-symbols-outlined text-primary">temple_hindu</span>
        <h2 class="text-xl font-bold tracking-wider text-primary font-display">Premium Stays</h2>
      </div>
      <p class="text-sm text-slate-500 leading-relaxed font-body">Redefining the spiritual journey through comfort, peace, and divine hospitality.</p>
    </div>
    <div>
      <h5 class="font-bold mb-4">Explore</h5>
      <ul class="text-sm text-slate-500 space-y-2 font-body">
        <li><a class="hover:text-primary" href="transport.php">Destinations</a></li>
        <li><a class="hover:text-primary" href="index.php">Temples</a></li>
        <li><a class="hover:text-primary" href="#">Ashrams</a></li>
        <li><a class="hover:text-primary" href="#">Luxury Hotels</a></li>
      </ul>
    </div>
    <div>
      <h5 class="font-bold mb-4">Community</h5>
      <ul class="text-sm text-slate-500 space-y-2 font-body">
        <li><a class="hover:text-primary" href="#">Our Story</a></li>
        <li><a class="hover:text-primary" href="#">Pilgrim Reviews</a></li>
        <li><a class="hover:text-primary" href="#">Spirituality Blog</a></li>
        <li><a class="hover:text-primary" href="#">Affiliates</a></li>
      </ul>
    </div>
    <div>
      <h5 class="font-bold mb-4">Support</h5>
      <ul class="text-sm text-slate-500 space-y-2 font-body">
        <li><a class="hover:text-primary" href="#">Help Center</a></li>
        <li><a class="hover:text-primary" href="#">Cancellation Policy</a></li>
        <li><a class="hover:text-primary" href="#">Contact Us</a></li>
        <li><a class="hover:text-primary" href="#">Trust &amp; Safety</a></li>
      </ul>
    </div>
  </div>
  <div class="max-w-7xl mx-auto px-4 mt-12 pt-8 border-t border-primary/10 flex flex-col md:flex-row justify-between items-center text-xs text-slate-400 font-body">
    <p>© 2025 Devotee Connect. All rights reserved.</p>
    <div class="flex gap-6 mt-4 md:mt-0">
      <a class="hover:text-primary" href="#">Privacy Policy</a>
      <a class="hover:text-primary" href="#">Terms of Service</a>
      <a class="hover:text-primary" href="#">Sitemap</a>
    </div>
  </div>
</footer>

<!-- Hotel Detail Modal -->
<div id="hotelModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60 backdrop-blur-sm p-4">
  <div class="glass-card rounded-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto shadow-2xl relative">
    <button onclick="closeModal()" class="absolute top-4 right-4 z-10 p-2 rounded-full bg-white/80 hover:bg-white transition-colors">
      <span class="material-symbols-outlined text-slate-700">close</span>
    </button>
    <div id="modalContent"></div>
  </div>
</div>

<script>
// ─── HARDCODED HOTEL DATABASE ─────────────────────────────────
// Real hotels in Puri and Bhubaneswar with actual images
const HOTEL_DB = {

  puri: [
    {
      name: "Mayfair Heritage Puri",
      price: 8500,
      priceCurrency: "₹",
      rating: 4.6,
      nearestTemple: "Jagannath Temple",
      distanceToTemple: "1.2 km",
      hotelLat: 19.7988, hotelLng: 85.8274,
      templeLat: 19.8045, templeLng: 85.8180,
      amenities: ["Swimming Pool", "Spa & Wellness", "Multi-Cuisine Restaurant"],
      type: "Heritage Resort",
      address: "C.T. Road, Puri, Odisha 752001",
      phone: "+91-6752-223261",
      description: "A luxurious heritage property spread across 5 acres on the Puri beachfront. The resort blends Odishan architecture with modern comfort, just minutes from the sacred Jagannath Temple.",
      image: "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/35/84/f3/mayfair-heritage-puri.jpg?w=700&h=-1&s=1"
    },
    {
      name: "Hotel Hans Coco Palms",
      price: 4200,
      priceCurrency: "₹",
      rating: 4.3,
      nearestTemple: "Jagannath Temple",
      distanceToTemple: "0.8 km",
      hotelLat: 19.8021, hotelLng: 85.8213,
      templeLat: 19.8045, templeLng: 85.8180,
      amenities: ["Sea View Rooms", "AC", "Restaurant"],
      type: "Beach Hotel",
      address: "C.T. Road, Puri, Odisha 752001",
      phone: "+91-6752-222038",
      description: "Nestled amid lush coconut palms right on Puri beach, Hotel Hans Coco Palms offers comfortable sea-view rooms within walking distance of the holy Jagannath Temple.",
      image: "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/e7/c1/23/hotel-hans-coco-palms.jpg?w=700&h=-1&s=1"
    },
    {
      name: "Toshali Sands Resort",
      price: 6800,
      priceCurrency: "₹",
      rating: 4.4,
      nearestTemple: "Jagannath Temple",
      distanceToTemple: "2.0 km",
      hotelLat: 19.7925, hotelLng: 85.8340,
      templeLat: 19.8045, templeLng: 85.8180,
      amenities: ["Private Beach", "Pool", "Ayurvedic Spa"],
      type: "Ethnic Resort",
      address: "C.T. Road, Puri, Odisha 752001",
      phone: "+91-6752-223080",
      description: "Toshali Sands is an ethnic village resort on Puri beach celebrating Odishan heritage through its traditional architecture, folk art, and cultural performances.",
      image: "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/09/f7/e0/e7/toshali-sands-ethnic-village.jpg?w=700&h=-1&s=1"
    },
    {
      name: "Hotel Z The Pavilion",
      price: 2800,
      priceCurrency: "₹",
      rating: 4.1,
      nearestTemple: "Jagannath Temple",
      distanceToTemple: "0.5 km",
      hotelLat: 19.8052, hotelLng: 85.8195,
      templeLat: 19.8045, templeLng: 85.8180,
      amenities: ["WiFi", "AC", "Rooftop View"],
      type: "Budget Hotel",
      address: "Grand Road, Puri, Odisha 752001",
      phone: "+91-6752-222875",
      description: "A budget-friendly hotel on Grand Road, just 500 metres from the Jagannath Temple main gate. Ideal for pilgrims seeking clean, affordable rooms close to the sacred shrine.",
      image: "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/12/46/05/e2/hotel-z-the-pavilion.jpg?w=700&h=-1&s=1"
    },
    {
      name: "Sterling Puri",
      price: 5500,
      priceCurrency: "₹",
      rating: 4.2,
      nearestTemple: "Jagannath Temple",
      distanceToTemple: "1.8 km",
      hotelLat: 19.7960, hotelLng: 85.8290,
      templeLat: 19.8045, templeLng: 85.8180,
      amenities: ["Beach Access", "Pool", "Kids Club"],
      type: "Beach Resort",
      address: "C.T. Road, Chakratirtha, Puri 752002",
      phone: "+91-8047216000",
      description: "Sterling Puri is a family resort directly on the golden sands of Puri beach. The property features a large pool, beach volleyball, and comfortable cottages for families and pilgrims.",
      image: "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/c7/53/dc/sterling-puri.jpg?w=700&h=-1&s=1"
    },
    {
      name: "Nilachal Ashok Hotel",
      price: 3500,
      priceCurrency: "₹",
      rating: 3.9,
      nearestTemple: "Jagannath Temple",
      distanceToTemple: "1.0 km",
      hotelLat: 19.8038, hotelLng: 85.8230,
      templeLat: 19.8045, templeLng: 85.8180,
      amenities: ["WiFi", "Restaurant", "AC"],
      type: "Government Hotel",
      address: "C.T. Road, Puri, Odisha 752001",
      phone: "+91-6752-222064",
      description: "A government-run property offering reliable, clean accommodation close to both the Jagannath Temple and Puri beach. Popular with budget pilgrims and family groups.",
      image: "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/07/97/56/6e/nilachal-ashok.jpg?w=700&h=-1&s=1"
    }
  ],

  bhubaneswar: [
    {
      name: "Mayfair Convention Bhubaneswar",
      price: 9200,
      priceCurrency: "₹",
      rating: 4.7,
      nearestTemple: "Lingaraj Temple",
      distanceToTemple: "3.5 km",
      hotelLat: 20.2730, hotelLng: 85.8428,
      templeLat: 20.2383, hotelLng: 85.8336,
      amenities: ["Swimming Pool", "Spa", "Fine Dining"],
      type: "Luxury Hotel",
      address: "8-B, Jaydev Vihar, Bhubaneswar, Odisha 751013",
      phone: "+91-674-6661000",
      description: "Bhubaneswar's finest luxury hotel in the heart of the city's upscale Jaydev Vihar district. Mayfair Convention offers world-class amenities including a spa, pool, and multiple restaurants.",
      image: "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2b/02/8a/1e/mayfair-convention-bhubaneswar.jpg?w=700&h=-1&s=1"
    },
    {
      name: "Trident Bhubaneswar",
      price: 7800,
      priceCurrency: "₹",
      rating: 4.5,
      nearestTemple: "Lingaraj Temple",
      distanceToTemple: "4.0 km",
      hotelLat: 20.2644, hotelLng: 85.8098,
      templeLat: 20.2383, templeLng: 85.8336,
      amenities: ["Pool", "Gym", "Multiple Restaurants"],
      type: "5-Star Hotel",
      address: "CB-1, Nayapalli, Bhubaneswar, Odisha 751015",
      phone: "+91-674-2301010",
      description: "The Trident Bhubaneswar is a premier five-star property offering elegant rooms, a large outdoor pool, and direct access to Ekamra Kanan botanical gardens near the temple district.",
      image: "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/33/fc/15/trident-bhubaneswar.jpg?w=700&h=-1&s=1"
    },
    {
      name: "Swosti Grand",
      price: 4800,
      priceCurrency: "₹",
      rating: 4.3,
      nearestTemple: "Lingaraj Temple",
      distanceToTemple: "2.8 km",
      hotelLat: 20.2561, hotelLng: 85.8315,
      templeLat: 20.2383, templeLng: 85.8336,
      amenities: ["Restaurant", "Conference Hall", "WiFi"],
      type: "Business Hotel",
      address: "103, Janpath, Bhubaneswar, Odisha 751001",
      phone: "+91-674-2532178",
      description: "Swosti Grand is a well-established hotel in the heart of Bhubaneswar, known for its warm hospitality and proximity to major temples, government offices, and shopping districts.",
      image: "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/8d/41/c9/swosti-grand.jpg?w=700&h=-1&s=1"
    },
    {
      name: "Hotel Hindustan International",
      price: 3800,
      priceCurrency: "₹",
      rating: 4.1,
      nearestTemple: "Lingaraj Temple",
      distanceToTemple: "3.2 km",
      hotelLat: 20.2588, hotelLng: 85.8344,
      templeLat: 20.2383, templeLng: 85.8336,
      amenities: ["AC Rooms", "Restaurant", "Parking"],
      type: "Mid-Range Hotel",
      address: "58, Janpath, Bhubaneswar, Odisha 751001",
      phone: "+91-674-2531012",
      description: "A dependable mid-range hotel centrally located in Bhubaneswar. Hotel Hindustan International is a favourite among pilgrims visiting the Lingaraj and Mukteswar temples.",
      image: "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/06/c2/96/5a/hotel-hindustan-international.jpg?w=700&h=-1&s=1"
    },
    {
      name: "Marriott Bhubaneswar",
      price: 11000,
      priceCurrency: "₹",
      rating: 4.8,
      nearestTemple: "Lingaraj Temple",
      distanceToTemple: "5.0 km",
      hotelLat: 20.3002, hotelLng: 85.8178,
      templeLat: 20.2383, templeLng: 85.8336,
      amenities: ["Infinity Pool", "Luxury Spa", "Sky Bar"],
      type: "Luxury Hotel",
      address: "Nandankanan Road, Bhubaneswar, Odisha 751021",
      phone: "+91-674-6677777",
      description: "Bhubaneswar Marriott Hotel is the city's tallest luxury hotel featuring an infinity pool with panoramic city views, a world-class spa, and award-winning dining experiences.",
      image: "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/d6/16/5f/bhubaneswar-marriott-hotel.jpg?w=700&h=-1&s=1"
    },
    {
      name: "OYO Townhouse 447 Temple Town",
      price: 1200,
      priceCurrency: "₹",
      rating: 3.8,
      nearestTemple: "Lingaraj Temple",
      distanceToTemple: "0.6 km",
      hotelLat: 20.2405, hotelLng: 85.8320,
      templeLat: 20.2383, templeLng: 85.8336,
      amenities: ["WiFi", "AC", "24hr Checkout"],
      type: "Budget Stay",
      address: "Old Town, Near Lingaraj Temple, Bhubaneswar 751002",
      phone: "+91-9313931393",
      description: "A budget-friendly OYO stay in Bhubaneswar's historic Old Town, just 600 metres from the sacred Lingaraj Temple. Perfect for pilgrims seeking clean, affordable accommodation.",
      image: "https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=700&q=80"
    }
  ]
};

// City hero images
const cityHeroImages = {
  "puri":         "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Jagannath_Temple%2C_Puri%2C_Odisha.jpg/1280px-Jagannath_Temple%2C_Puri%2C_Odisha.jpg",
  "bhubaneswar":  "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Lingaraja_Temple_Bhubaneswar_1.jpg/1280px-Lingaraja_Temple_Bhubaneswar_1.jpg",
  "default":      "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Jagannath_Temple%2C_Puri%2C_Odisha.jpg/1280px-Jagannath_Temple%2C_Puri%2C_Odisha.jpg"
};

let allHotels    = [];
let currentPage  = 0;
const HOTELS_PER_PAGE = 6;
let userLat = null, userLng = null;

// ─── GEOLOCATION ─────────────────────────────────────────────
function getUserLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
      pos => {
        userLat = pos.coords.latitude;
        userLng = pos.coords.longitude;
        document.getElementById('locationStatus').textContent = '📍 Using your live location for distance calculations';
      },
      () => {
        document.getElementById('locationStatus').textContent = '📍 Distance calculated from city center';
      }
    );
  }
}

// ─── HAVERSINE DISTANCE ──────────────────────────────────────
function haversineDistance(lat1, lon1, lat2, lon2) {
  const R = 6371;
  const dLat = (lat2 - lat1) * Math.PI / 180;
  const dLon  = (lon2  - lon1)  * Math.PI / 180;
  const a = Math.sin(dLat/2)**2 + Math.cos(lat1*Math.PI/180)*Math.cos(lat2*Math.PI/180)*Math.sin(dLon/2)**2;
  return (R * 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a))).toFixed(1);
}

// ─── DARK MODE ───────────────────────────────────────────────
document.getElementById('darkToggle').addEventListener('click', () => {
  document.documentElement.classList.toggle('dark');
});

// ─── ENTER KEY SEARCH ────────────────────────────────────────
document.getElementById('cityInput').addEventListener('keydown', e => {
  if (e.key === 'Enter') searchHotels();
});

// ─── MAIN SEARCH ─────────────────────────────────────────────
function searchHotels() {
  const rawCity    = document.getElementById('cityInput').value.trim();
  if (!rawCity) return;

  const city       = rawCity.toLowerCase();
  const priceFilter = document.getElementById('priceFilter').value;

  // Update hero background
  const heroKey = Object.keys(cityHeroImages).find(k => city.includes(k)) || 'default';
  document.getElementById('heroBg').src = cityHeroImages[heroKey];

  // Show loading briefly for UX
  document.getElementById('loadingGrid').classList.remove('hidden');
  document.getElementById('hotelsGrid').classList.add('hidden');
  document.getElementById('emptyState').classList.add('hidden');
  document.getElementById('loadMoreBtn').classList.add('hidden');
  document.getElementById('sectionTitle').textContent = `Finding stays in ${rawCity}...`;

  setTimeout(() => {
    // Get hotels for city
    let hotels = [];
    for (const key of Object.keys(HOTEL_DB)) {
      if (city.includes(key) || key.includes(city)) {
        hotels = HOTEL_DB[key];
        break;
      }
    }

    // Price filter
    if (priceFilter === 'budget')  hotels = hotels.filter(h => h.price < 3000);
    if (priceFilter === 'mid')     hotels = hotels.filter(h => h.price >= 3000 && h.price <= 8000);
    if (priceFilter === 'luxury')  hotels = hotels.filter(h => h.price > 8000);

    allHotels   = hotels;
    currentPage = 0;
    document.getElementById('loadingGrid').classList.add('hidden');

    if (hotels.length === 0) {
      // City not in our DB or no results after filter
      document.getElementById('emptyState').classList.remove('hidden');
      document.getElementById('sectionTitle').textContent = 'No Stays Found';
      document.getElementById('resultCount').textContent = '';
      // Show suggestion
      document.getElementById('emptyState').innerHTML = `
        <span class="material-symbols-outlined text-6xl text-primary/30">hotel</span>
        <p class="text-xl font-display mt-4 text-slate-500">No stays found for "<strong>${rawCity}</strong>"</p>
        <p class="text-sm font-body text-slate-400 mt-2">Try searching <strong>Puri</strong> or <strong>Bhubaneswar</strong></p>
        <div class="flex gap-3 justify-center mt-6">
          <button onclick="document.getElementById('cityInput').value='Puri';searchHotels();" class="px-6 py-2 bg-primary text-white rounded-lg font-bold text-sm font-body hover:bg-saffron-deep transition">Search Puri</button>
          <button onclick="document.getElementById('cityInput').value='Bhubaneswar';searchHotels();" class="px-6 py-2 bg-primary text-white rounded-lg font-bold text-sm font-body hover:bg-saffron-deep transition">Search Bhubaneswar</button>
        </div>
      `;
      return;
    }

    renderHotels(false);
    document.getElementById('sectionTitle').textContent = `Spiritual Stays in ${rawCity}`;
    document.getElementById('resultCount').textContent  = `${hotels.length} sanctuaries found`;
  }, 600);
}

// ─── RENDER HOTELS ───────────────────────────────────────────
function renderHotels(append) {
  const grid  = document.getElementById('hotelsGrid');
  const empty = document.getElementById('emptyState');

  if (allHotels.length === 0) { empty.classList.remove('hidden'); return; }
  if (!append) grid.innerHTML = '';
  grid.classList.remove('hidden');

  const start = currentPage * HOTELS_PER_PAGE;
  const end   = Math.min(start + HOTELS_PER_PAGE, allHotels.length);
  const batch = allHotels.slice(start, end);

  batch.forEach((hotel, i) => {
    const imgUrl = hotel.image;

    let liveDistanceHTML = '';
    if (userLat && userLng && hotel.hotelLat && hotel.hotelLng) {
      const dist = haversineDistance(userLat, userLng, hotel.hotelLat, hotel.hotelLng);
      liveDistanceHTML = `<div class="flex items-center gap-2 text-green-600 text-xs font-bold mb-3 font-body">
        <span style="width:8px;height:8px;border-radius:50%;background:#0bda87;display:inline-block;"></span>You are ${dist} km away</div>`;
    }

    const amenityBadges = (hotel.amenities || []).map(a =>
      `<span class="text-[10px] uppercase tracking-tighter bg-primary/10 text-primary px-2 py-1 rounded font-body">${a}</span>`
    ).join('');

    const card = document.createElement('div');
    card.className = 'glass-card rounded-xl overflow-hidden group hover:shadow-2xl transition-all duration-300 card-enter';
    card.style.animationDelay = `${i * 0.08}s`;
    card.innerHTML = `
      <div class="relative h-64 overflow-hidden">
        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
          src="${imgUrl}" alt="${hotel.name}"
          onerror="this.src='https://images.unsplash.com/photo-1566073771259-6a8506099945?w=600&q=80'"/>
        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-2 py-1 rounded-lg flex items-center gap-1 shadow-sm">
          <span class="material-symbols-outlined text-yellow-500 text-sm" style="font-variation-settings:'FILL' 1">star</span>
          <span class="text-xs font-bold text-slate-800">${hotel.rating}</span>
        </div>
        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-3">
          <span class="text-white/80 text-xs font-body uppercase tracking-widest">${hotel.type}</span>
        </div>
      </div>
      <div class="p-6">
        <div class="flex justify-between items-start mb-2">
          <h4 class="text-lg font-display font-bold leading-tight flex-1 pr-2">${hotel.name}</h4>
          <span class="text-primary font-bold text-lg whitespace-nowrap">${hotel.priceCurrency}${Number(hotel.price).toLocaleString('en-IN')}<span class="text-xs font-normal text-slate-500 font-body">/night</span></span>
        </div>
        <div class="distance-badge rounded-lg p-2.5 mb-3 flex items-start gap-2">
          <span class="material-symbols-outlined text-gold-metallic text-base mt-0.5">temple_hindu</span>
          <div>
            <p class="text-xs font-bold text-slate-700 font-body">${hotel.nearestTemple}</p>
            <p class="text-xs text-slate-500 font-body flex items-center gap-1">
              <span class="material-symbols-outlined text-xs">directions_walk</span>${hotel.distanceToTemple} from hotel
            </p>
          </div>
        </div>
        ${liveDistanceHTML}
        <p class="text-xs text-slate-500 mb-3 font-body flex items-start gap-1">
          <span class="material-symbols-outlined text-xs mt-0.5 flex-shrink-0">location_on</span>
          <span>${hotel.address}</span>
        </p>
        <div class="flex flex-wrap gap-2 mb-5">${amenityBadges}</div>
        <button onclick='openModal(${JSON.stringify(hotel).replace(/'/g,"&#39;")}, "${imgUrl}")'
          class="w-full py-3 border-2 border-primary text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-all font-body text-sm">
          View Details
        </button>
      </div>
    `;
    grid.appendChild(card);
  });

  currentPage++;
  const loadMoreBtn = document.getElementById('loadMoreBtn');
  if (currentPage * HOTELS_PER_PAGE < allHotels.length) {
    loadMoreBtn.classList.remove('hidden');
  } else {
    loadMoreBtn.classList.add('hidden');
  }
}

function loadMore() { renderHotels(true); }

// ─── MODAL ───────────────────────────────────────────────────
function openModal(hotel, imgUrl) {
  const modal   = document.getElementById('hotelModal');
  const content = document.getElementById('modalContent');

  let liveDistText = '';
  if (userLat && userLng && hotel.hotelLat && hotel.hotelLng) {
    const dist = haversineDistance(userLat, userLng, hotel.hotelLat, hotel.hotelLng);
    liveDistText = `<div class="flex items-center gap-2 text-green-600 font-semibold text-sm font-body mt-1">
      <span style="width:8px;height:8px;border-radius:50%;background:#0bda87;display:inline-block;"></span> You are ${dist} km from this hotel
    </div>`;
  }

  const templeMapUrl = `https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(hotel.nearestTemple)}`;
  const hotelMapUrl  = `https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(hotel.name + ' ' + hotel.address)}`;

  content.innerHTML = `
    <div class="relative h-72 overflow-hidden rounded-t-2xl">
      <img src="${imgUrl}" class="w-full h-full object-cover" alt="${hotel.name}"
        onerror="this.src='https://images.unsplash.com/photo-1566073771259-6a8506099945?w=600&q=80'"/>
      <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6">
        <div>
          <span class="text-white/70 text-xs font-body uppercase tracking-widest">${hotel.type}</span>
          <h3 class="text-2xl font-display font-bold text-white">${hotel.name}</h3>
          <div class="flex items-center gap-2 mt-1">
            <span class="material-symbols-outlined text-yellow-400 text-sm" style="font-variation-settings:'FILL' 1">star</span>
            <span class="text-white font-bold text-sm font-body">${hotel.rating} / 5</span>
          </div>
        </div>
      </div>
    </div>
    <div class="p-6">
      <div class="flex justify-between items-center mb-4">
        <span class="text-2xl font-bold text-primary">${hotel.priceCurrency}${Number(hotel.price).toLocaleString('en-IN')}<span class="text-sm font-normal text-slate-500 font-body">/night</span></span>
        <a href="tel:${hotel.phone}" class="flex items-center gap-2 text-sm text-primary font-body hover:underline">
          <span class="material-symbols-outlined text-base">call</span> ${hotel.phone}
        </a>
      </div>
      <p class="text-sm font-body text-slate-600 mb-5 leading-relaxed">${hotel.description}</p>
      <div class="distance-badge rounded-xl p-4 mb-4">
        <div class="flex items-center gap-2 mb-2">
          <span class="material-symbols-outlined text-gold-metallic">temple_hindu</span>
          <span class="font-bold text-slate-800 font-display text-sm">Nearest Sacred Site</span>
        </div>
        <div class="flex justify-between items-center">
          <div>
            <p class="font-bold text-slate-700 font-body">${hotel.nearestTemple}</p>
            <p class="text-xs text-slate-500 font-body">${hotel.distanceToTemple} from hotel</p>
          </div>
          <a href="${templeMapUrl}" target="_blank"
            class="text-xs bg-primary text-white px-3 py-1.5 rounded-full font-body hover:bg-saffron-deep transition-colors flex items-center gap-1">
            <span class="material-symbols-outlined text-xs">directions</span> Navigate
          </a>
        </div>
      </div>
      ${liveDistText}
      <div class="flex items-start gap-2 mt-3 mb-5">
        <span class="material-symbols-outlined text-primary text-base mt-0.5">location_on</span>
        <p class="text-sm font-body text-slate-600">${hotel.address}</p>
      </div>
      <div class="mb-6">
        <p class="text-xs font-bold uppercase tracking-widest text-slate-500 font-body mb-2">Amenities</p>
        <div class="flex flex-wrap gap-2">
          ${(hotel.amenities||[]).map(a => `<span class="text-xs bg-primary/10 text-primary px-3 py-1.5 rounded-full font-body">${a}</span>`).join('')}
        </div>
      </div>
      <div class="flex gap-3">
        <a href="${hotelMapUrl}" target="_blank"
          class="flex-1 py-3 bg-primary text-white font-bold rounded-lg hover:bg-saffron-deep transition-all font-body text-sm text-center flex items-center justify-center gap-2">
          <span class="material-symbols-outlined text-base">map</span> View on Map
        </a>
        <button onclick="closeModal()"
          class="flex-1 py-3 border-2 border-primary text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-all font-body text-sm">
          Close
        </button>
      </div>
    </div>
  `;

  modal.classList.remove('hidden');
  modal.classList.add('flex');
}

function closeModal() {
  document.getElementById('hotelModal').classList.add('hidden');
  document.getElementById('hotelModal').classList.remove('flex');
}

document.getElementById('hotelModal').addEventListener('click', function(e) {
  if (e.target === this) closeModal();
});

// ─── INIT ────────────────────────────────────────────────────
getUserLocation();
window.addEventListener('DOMContentLoaded', () => {
  // Default load Puri on page open
  document.getElementById('cityInput').value = 'Puri';
  setTimeout(() => searchHotels(), 200);
});
</script>

</body>
</html>