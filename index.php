<?php include 'auth_check.php'; ?>
<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Devotee Connect | Rituals &amp; Donations</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&amp;family=Poppins:wght@300;400;500;600&amp;family=Public+Sans:wght@400;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>

<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Devotee Connect | Spiritual Portal of Odisha</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&amp;family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

<!-- Tailwind Config -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#ec5b13",
                        "saffron": "#FF9933",
                        "deep-saffron": "#FF6600",
                        "gold": "#D4AF37",
                        "background-light": "#f8f6f6",
                        "background-dark": "#221610",
                    },
                    fontFamily: {
                        "display": ["Poppins", "sans-serif"],
                        "heading": ["Cinzel", "serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
 
<!-- Custom Styles -->
<style data-purpose="typography">
    h1, h2, h3, h4, .font-heading {
      font-family: 'Cinzel', serif;
    }
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #FFF8E1;
    }
  </style>
<style data-purpose="glassmorphism">
    .glass-card {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .glass-search {
      background: rgba(255, 248, 225, 0.2);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      border: 1px solid rgba(212, 175, 55, 0.3);
    }
  </style>
<style data-purpose="layout-effects">
    .temple-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: 1px solid #D4AF37;
    }
    .temple-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 25px -5px rgba(230, 81, 0, 0.15);
    }
    .hero-overlay {
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7));
    }
  </style>


  <style id="dc-unified-fonts">
  
  .font-cinzel, h1.brand, .brand-title { font-family: 'Cinzel', serif !important; }
  body, nav, p, span, a, button, input, select, label {
    font-family: 'Poppins', sans-serif;
  }
  h1, h2, h3, h4 { font-family: 'Cinzel', serif; }
</style>
</head>
<body class="text-gray-800">


<!--  MainHeader -->
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
        <a href="index.php" style="color:#ec5b13;border-bottom:2px solid #ec5b13;padding-bottom:2px;">Home</a>
        <a href="booking.php" style="color:#374151;" onmouseover="this.style.color='#ec5b13'" onmouseout="this.style.color='#374151'">Booking</a>
        <a href="calendar.php" style="color:#374151;" onmouseover="this.style.color='#ec5b13'" onmouseout="this.style.color='#374151'">Calendar</a>
        <a href="stays.php" style="color:#374151;" onmouseover="this.style.color='#ec5b13'" onmouseout="this.style.color='#374151'">Stays</a>
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



<!-- HeroSection -->
<section class="relative h-[90vh] flex items-center justify-center overflow-hidden">

<!-- Hero Image -->
<img alt="Jagannath Temple Puri" class="absolute inset-0 w-full h-full object-cover" src="https://odishatourism.gov.in/content/dam/tourism/home/experience/rath-yatra/2025/RathYatra-2025-1.JPG"/>

<!-- Dark Overlay -->
<div class="absolute inset-0 hero-overlay"></div>

<!-- Hero Content -->
<div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
<h1 class="text-4xl md:text-7xl font-black text-white mb-6 drop-shadow-2xl">Discover Divine Odisha</h1>
<p class="text-lg md:text-2xl text-soft-cream/90 mb-10 font-light italic">"Experience the spiritual heart of the soul of India"</p>

<!-- Glassmorphism Search Bar -->
<div class="glass-search p-2 rounded-2xl flex flex-col md:flex-row items-center gap-2 max-w-3xl mx-auto">
<div class="flex-grow flex items-center px-4 w-full">
<svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
<input id="templeSearch" class="bg-transparent border-none focus:ring-0 text-white placeholder-soft-cream/60 w-full text-lg ml-2" placeholder="Search temples, locations or rituals..." type="text" oninput="filterTemples()" onkeydown="if(event.key==='Enter')filterTemples()"/>
</div>
<button onclick="filterTemples()" class="bg-saffron hover:bg-deep-saffron text-white font-bold py-4 px-10 rounded-xl transition-all w-full md:w-auto uppercase tracking-tighter">
          Search
        </button>
</div>
</div>
</section>

<!-- TempleGridSection -->
<main class="py-20 px-6 container mx-auto">
<div class="text-center mb-16">
<h2 class="text-4xl font-bold text-deep-saffron mb-4">Sacred Destinations</h2>
<div class="w-24 h-1 bg-gold mx-auto mb-4"></div>
<p class="text-gray-600 max-w-xl mx-auto">Explore the magnificent architecture and divine energy of Odisha's ancient temples.</p>
</div>

<!-- Temple Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

<!-- Card 1: Jagannath Temple -->
<article class="temple-card bg-white rounded-2xl overflow-hidden shadow-sm flex flex-col" data-purpose="temple-item" data-name="jagannath temple" data-location="puri odisha" data-tags="vaishnava krishna 12th century popular">
<div class="relative h-64">
<img alt="Jagannath Temple" class="w-full h-full object-cover" src="https://media.istockphoto.com/id/1069137628/photo/top-of-the-jagannath-temple-puri-odisha-india.jpg?s=612x612&w=0&k=20&c=QIj54CAlnD_CKzb1roAVms9f2fdWnqwOb3BMSMvbee4="/>
</div>
<div class="absolute top-4 right-4 bg-deep-saffron text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
            Popular
          </div>
<div class="p-6 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="text-2xl font-bold text-gray-800">Jagannath Temple</h3>

<!-- LIVE DISTANCE: Jagannath Temple, Puri -->
<span class="bg-soft-cream text-deep-saffron border border-gold/40 text-[10px] font-bold px-2 py-1 rounded flex items-center gap-1">
<svg class="h-3 w-3" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path>
</svg>
<span id="dist-jagannath">...</span>
</span>
</div>
<p class="text-deep-saffron font-medium text-sm mb-4">Puri, Odisha</p>
<p class="text-gray-600 text-sm mb-6 flex-grow">The 12th-century temple is a sacred Vaishnava temple dedicated to Lord Jagannath, a form of Sri Krishna.</p>

<!-- DYNAMIC LINK: passes temple id -->
<button onclick="window.location.href='temple_details.php?id=1';"
class="mt-auto border-2 border-gold text-deep-saffron font-bold py-2 rounded-lg hover:bg-gold hover:text-white transition-all">
View Details
</button>
</div>
</article>

<!-- Card 2: Konark Sun Temple -->
<article class="temple-card bg-white rounded-2xl overflow-hidden shadow-sm flex flex-col" data-purpose="temple-item" data-name="sun temple konark" data-location="konark odisha" data-tags="surya sun god 13th century chariot popular">
<div class="relative h-64">
<img alt="Konark Sun Temple" class="w-full h-full object-cover" src="https://www.drishtiias.com/images/uploads/1640860172_Sun_temple_drishti_ias_english.png"/>
</div>
<div class="absolute top-4 right-4 bg-deep-saffron text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
            Popular
          </div>
<div class="p-6 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="text-2xl font-bold text-gray-800">Sun Temple</h3>

<!-- LIVE DISTANCE: Konark Sun Temple -->
<span class="bg-soft-cream text-deep-saffron border border-gold/40 text-[10px] font-bold px-2 py-1 rounded flex items-center gap-1">
<svg class="h-3 w-3" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path>
</svg>
<span id="dist-konark">...</span>
</span>
</div>
<p class="text-deep-saffron font-medium text-sm mb-4">Konark, Odisha</p>
<p class="text-gray-600 text-sm mb-6 flex-grow">Built in the 13th century, this temple is designed as a colossal chariot of the Sun God, Surya.</p>

<!-- DYNAMIC LINK: passes temple id  -->
<button onclick="window.location.href='temple_details.php?id=2';"
class="mt-auto border-2 border-gold text-deep-saffron font-bold py-2 rounded-lg hover:bg-gold hover:text-white transition-all">
View Details
</button>
</div>
</article>

<!-- Card 3: Lingaraj Temple -->
<article class="temple-card bg-white rounded-2xl overflow-hidden shadow-sm flex flex-col" data-purpose="temple-item" data-name="lingaraj temple" data-location="bhubaneswar odisha" data-tags="shiva vishnu harihara popular temple city">
<div class="relative h-64">
<img alt="Lingaraj Temple" class="w-full h-full object-cover" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhmOnY2Co6TaeGhyphenhyphenzTkro9391IDhI0JwkUsn6XlHr_KwyNEXXyl3dM7Ydo9T8SrCtQ1ki0gi5ktZGok-GcSAe6L_0m4fPIm0qMD8faJkZRfdsen03fvQYN_cZEwPDrZb0zbgf6cx6bedOa986UmG_FUoQqxZZ4aXO8o8dKZukZrWvAukCO1JpJIx6zbdO1y/w1200-h630-p-k-no-nu/Screenshot_20240916-200822_Maps.jpg"/>
</div>
<div class="absolute top-4 right-4 bg-deep-saffron text-white px-3 py-1 rounded-full text-xs font-bold shadow-lg">
            Popular
          </div>
<div class="p-6 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="text-2xl font-bold text-gray-800">Lingaraj Temple</h3>

<!-- LIVE DISTANCE: Lingaraj Temple, Bhubaneswar -->
<span class="bg-soft-cream text-deep-saffron border border-gold/40 text-[10px] font-bold px-2 py-1 rounded flex items-center gap-1">
<svg class="h-3 w-3" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" fill-rule="evenodd"></path>
</svg>
<span id="dist-lingaraj">...</span>
</span>
</div>
<p class="text-deep-saffron font-medium text-sm mb-4">Bhubaneswar, Odisha</p>
<p class="text-gray-600 text-sm mb-6 flex-grow">The largest temple in the Temple City, dedicated to Lord Harihara, representing both Shiva and Vishnu.</p>

<!-- DYNAMIC LINK: passes temple id to temple_details.php -->
<button onclick="window.location.href='temple_details.php?id=3';"
class="mt-auto border-2 border-gold text-deep-saffron font-bold py-2 rounded-lg hover:bg-gold hover:text-white transition-all">
View Details
</button>
</a>
</div>
</article>
</div>

<!-- No Results Message -->
<div id="noResults" style="display:none;" class="text-center py-20 col-span-3">
  <span class="material-symbols-outlined text-6xl text-gold/50 block mb-4">search_off</span>
  <h3 class="text-2xl font-bold text-deep-saffron mb-2">No Temples Found</h3>
  <p class="text-gray-500">Try searching for "Puri", "Konark", "Bhubaneswar" or "Sun Temple"</p>
  <button onclick="clearSearch()" class="mt-6 px-6 py-3 bg-saffron text-white font-bold rounded-xl hover:bg-deep-saffron transition-all">
    Show All Temples
  </button>
</div>

</main>

<!-- Footer -->
<footer class="bg-deep-saffron text-white py-12">
<div class="container mx-auto px-6">
<div class="grid grid-cols-1 md:grid-cols-4 gap-12 border-b border-white/20 pb-10">
<div class="col-span-1 md:col-span-1">
<h4 class="font-cinzel text-xl font-bold mb-6 text-gold">Devotee Connect</h4>
<p class="text-soft-cream/80 text-sm leading-relaxed">
            Preserving and promoting the rich cultural and spiritual heritage of Odisha through digital connection.
          </p>
</div>
<div>
<h4 class="font-cinzel font-bold mb-6">Quick Links</h4>
<ul class="space-y-3 text-sm text-soft-cream/80">
<li><a class="hover:text-gold transition-colors" href="#">Temple Directory</a></li>
<li><a class="hover:text-gold transition-colors" href="#">Ritual Calendars</a></li>
<li><a class="hover:text-gold transition-colors" href="#">Booking Services</a></li>
<li><a class="hover:text-gold transition-colors" href="#">Donations</a></li>
</ul>
</div>
<div>
<h4 class="font-cinzel font-bold mb-6">Policies</h4>
<ul class="space-y-3 text-sm text-soft-cream/80">
<li><a class="hover:text-gold transition-colors" href="#">Privacy Policy</a></li>
<li><a class="hover:text-gold transition-colors" href="#">Terms of Service</a></li>
<li><a class="hover:text-gold transition-colors" href="#">Refund Policy</a></li>
</ul>
</div>
<div>
<h4 class="font-cinzel font-bold mb-6">Connect</h4>
<div class="flex space-x-4 mb-6">
<a class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-gold transition-all" href="#">
<svg class="w-4 h-4" fill="currentColor" viewbox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg>
</a>
<a class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-gold transition-all" href="#">
<svg class="w-4 h-4" fill="currentColor" viewbox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.84 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path></svg>
</a>
</div>
<p class="text-xs text-soft-cream/60">Subscribe to our newsletter for daily Darshan updates.</p>
</div>
</div>
<div class="pt-8 text-center text-xs text-soft-cream/50">
        � 2023 Devotee Connect. All Rights Reserved. Jay Jagannath.
      </div>
</div>
</footer>

<!-- LIVE DISTANCE CALCULATOR -->
<script>
  // Temple coordinates
  const temples = [
    { id: 'dist-jagannath', lat: 19.8045, lng: 85.8180 }, // Jagannath Temple, Puri
    { id: 'dist-konark',    lat: 19.8876, lng: 86.0945 }, // Konark Sun Temple
    { id: 'dist-lingaraj',  lat: 20.2383, lng: 85.8336 }, // Lingaraj Temple, Bhubaneswar
  ];

  // Haversine formula 
  function haversine(lat1, lng1, lat2, lng2) {
    const R = 6371;
    const dLat = (lat2 - lat1) * Math.PI / 180;
    const dLng = (lng2 - lng1) * Math.PI / 180;
    const a =
      Math.sin(dLat / 2) * Math.sin(dLat / 2) +
      Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
      Math.sin(dLng / 2) * Math.sin(dLng / 2);
    return R * 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
  }

  // Format
  function formatDist(km) {
    return km < 1 ? Math.round(km * 1000) + ' M' : km.toFixed(1) + ' KM';
  }

  // On success: 
  function onPosition(pos) {
    const { latitude: uLat, longitude: uLng } = pos.coords;
    temples.forEach(({ id, lat, lng }) => {
      const el = document.getElementById(id);
      if (el) el.textContent = formatDist(haversine(uLat, uLng, lat, lng));
    });
  }

  // On error or denial
  function onError() {
    temples.forEach(({ id }) => {
      const el = document.getElementById(id);
      if (el) el.textContent = 'N/A';
    });
  }

  // Request location on page load
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(onPosition, onError, {
      enableHighAccuracy: true,
      timeout: 8000,
      maximumAge: 60000
    });
  } else {
    onError();
  }
</script>

<script>
// ── Temple Search ─────────────────────────────────────────────
function filterTemples() {
  const query = document.getElementById('templeSearch').value.trim().toLowerCase();
  const cards = document.querySelectorAll('[data-purpose="temple-item"]');
  let visibleCount = 0;

  cards.forEach(card => {
    const name     = (card.dataset.name     || '').toLowerCase();
    const location = (card.dataset.location || '').toLowerCase();
    const tags     = (card.dataset.tags     || '').toLowerCase();
    const combined = name + ' ' + location + ' ' + tags;

    if (!query || combined.includes(query)) {
      card.style.display = '';
      card.style.animation = 'fadeIn 0.3s ease forwards';
      visibleCount++;
    } else {
      card.style.display = 'none';
    }
  });

  document.getElementById('noResults').style.display = visibleCount === 0 ? 'block' : 'none';
  
  // scroll to results section
  if (query) {
    document.querySelector('main').scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
}

function clearSearch() {
  document.getElementById('templeSearch').value = '';
  filterTemples();
}

// Also highlight the search input when typing (hero area)
document.addEventListener('DOMContentLoaded', function() {
  const input = document.getElementById('templeSearch');
  if (input) {
    input.addEventListener('focus', function() {
      this.parentElement.parentElement.style.boxShadow = '0 0 0 2px rgba(255,153,51,0.6)';
    });
    input.addEventListener('blur', function() {
      this.parentElement.parentElement.style.boxShadow = '';
    });
  }
});
</script>

<style>
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(12px); }
  to   { opacity: 1; transform: translateY(0); }
}
</style>

</body></html>