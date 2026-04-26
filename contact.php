<?php include 'auth_check.php'; ?>
<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Contact &amp; Feedback - Devotee Connect</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&amp;family=Cinzel:wght@400;700&amp;family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&amp;family=Poppins:wght@300;400;500;600&amp;family=Public+Sans:wght@400;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>

<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Devotee Connect | Spiritual Portal of Odisha</title>
<!-- Fonts-->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&amp;family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#ec5b13",
                        "saffron": "#FF9933",
                        "gold": "#D4AF37",
                        "cream": "#FFF8E1",
                        "background-light": "#f8f6f6",
                        "background-dark": "#221610",
                    },
                    fontFamily: {
                        "display": ["Public Sans", "sans-serif"],
                        "heading": ["Cinzel", "serif"],
                        "body": ["Poppins", "sans-serif"],
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
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(212, 175, 55, 0.3);
        }
        .gold-border {
            border: 1px solid #D4AF37;
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
<body class="bg-cream font-body text-slate-900 selection:bg-primary/30">
<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
<!-- Navigation -->

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
        <a href="stays.php" style="color:#374151;" onmouseover="this.style.color='#ec5b13'" onmouseout="this.style.color='#374151'">Stays</a>
        <a href="transport.php" style="color:#374151;" onmouseover="this.style.color='#ec5b13'" onmouseout="this.style.color='#374151'">Transport</a>
        <a href="contact.php" style="color:#ec5b13;border-bottom:2px solid #ec5b13;padding-bottom:2px;">Contact</a>
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
<!-- Hero Header -->
<section class="relative h-[300px] w-full flex items-center justify-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover opacity-60" data-alt="Serene spiritual temple background with soft lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnRMiVc_hAYPhiK8lVNOl_R_bnemgtsFNV4aGue09JDqmHpSKyJsPLOGFofZuO5fDPNOJaFE3TeazmChrCJ2z7Jiv3L-oXskdjb7MmnMeQhC6zIc1yVPK1w3SHqwMi6kkBnl8yXRtLPp27u7irNsRmAHtLenEIb7g4AlB4mVxS_uJdO5VyDx4xIudztGTwMjEA-4m66EVfJZA29b6w-2bczjl7myq5tCfvXsXUR6UVUxUyrL70si3mRS2bmAo4WQlULHWFTiQqcLI"/>
<div class="absolute inset-0 bg-gradient-to-b from-cream/20 via-cream/40 to-cream"></div>
</div>
<div class="relative z-10 text-center px-4">
<h1 class="font-heading text-4xl md:text-6xl text-slate-900 mb-4 tracking-tight">Get in Touch</h1>
<p class="max-w-xl mx-auto text-lg text-slate-700 italic">"Service to humanity is service to the Divine."</p>
</div>
</section>
<!-- Main Content Area -->
<main class="max-w-7xl mx-auto px-4 md:px-10 py-12 w-full">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
<!-- Left Column: Contact Info -->
<div class="space-y-12">
<div>
<h2 class="font-heading text-3xl text-slate-900 mb-6">Contact Information</h2>
<p class="text-slate-600 mb-8 max-w-md">Our team is dedicated to supporting your spiritual journey. Reach out to us through any of the channels below.</p>
<div class="space-y-6">
<div class="flex items-start gap-4">
<div class="bg-gold/20 p-3 rounded-lg">
<span class="material-symbols-outlined text-gold">location_on</span>
</div>
<div>
<h4 class="font-bold text-slate-800">Office Address</h4>
<p class="text-slate-600">Temple Road, Near Jagannath Temple,<br/>Puri, Odisha 752001, India</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="bg-gold/20 p-3 rounded-lg">
<span class="material-symbols-outlined text-gold">call</span>
</div>
<div>
<h4 class="font-bold text-slate-800">Phone Support</h4>
<p class="text-slate-600">+91 933 704 1968<br/>Mon-Sat, 9:00 AM - 6:00 PM IST</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="bg-gold/20 p-3 rounded-lg">
<span class="material-symbols-outlined text-gold">mail</span>
</div>
<div>
<h4 class="font-bold text-slate-800">Email Address</h4>
<p class="text-slate-600"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f2818782829d8086b29697849d869797919d9c9c979186dc9d8095">[email&#160;protected]</a><br/><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7e171018113e1a1b08110a1b1b1d1110101b1d0a50110c19">[email&#160;protected]</a></p>
</div>
</div>
</div>
</div>
<div>
<h3 class="font-heading text-xl text-slate-900 mb-6">Connect with us</h3>
<div class="flex gap-4">
<a class="gold-border p-3 rounded-full hover:bg-gold/10 transition-all text-slate-700" href="#">
<svg class="size-6" fill="currentColor" viewbox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
</a>
<a class="gold-border p-3 rounded-full hover:bg-gold/10 transition-all text-slate-700" href="#">
<svg class="size-6" fill="currentColor" viewbox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"></path></svg>
</a>
<a class="gold-border p-3 rounded-full hover:bg-gold/10 transition-all text-slate-700" href="#">
<svg class="size-6" fill="currentColor" viewbox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
</a>
</div>
</div>
<div class="rounded-xl overflow-hidden shadow-lg border border-gold/30 h-64">
<img class="w-full h-full object-cover" data-alt="Stylized map of Bhubaneswar area highlighting spiritual landmarks" data-location="Bhubaneswar" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAih4ZYUnFKdq2QDi07-6z2Z6uau9gj7Fsjnwf-R8f8aN7MsFIUMBY7dn65ePgqkodgyN5ko-Q6EuEJUasmioWuIbAj0XnlBp_Nw_L9t9W2RSFc9j6em-l_UvieqTyN_hADktTOTzkzBGim4vTwZIVZrLx2-H45UGoDs2nO2zS-WXMxNPkwB6uJvv5oAJr6KA8RECxN977lm1krwdy6i0U7T5JeULmrXNfQs6Z7jM4OiuceZ3IIDYAmG3I1nz-AjMRJ-rwDOSUHHbk"/>
</div>
</div>
<!-- Right Column: Premium Feedback Form -->
<div>
<div class="glass-card p-8 rounded-2xl shadow-xl border border-gold/40">
<h3 class="font-heading text-2xl text-slate-900 mb-6 border-b border-gold/20 pb-4">Send a Message</h3>
<form class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700">Full Name</label>
<input class="w-full bg-white/50 border-gold/30 rounded-lg focus:ring-primary focus:border-primary transition-all" placeholder="Your full name" type="text"/>
</div>
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700">Email Address</label>
<input class="w-full bg-white/50 border-gold/30 rounded-lg focus:ring-primary focus:border-primary transition-all" placeholder="email@example.com" type="email"/>
</div>
</div>
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700">Subject</label>
<select class="w-full bg-white/50 border-gold/30 rounded-lg focus:ring-primary focus:border-primary transition-all">
<option>General Inquiry</option>
<option>Event Registration Support</option>
<option>Donation Feedback</option>
<option>Technical Issue</option>
<option>Others</option>
</select>
</div>
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700">Message</label>
<textarea class="w-full bg-white/50 border-gold/30 rounded-lg focus:ring-primary focus:border-primary transition-all" placeholder="How can we assist you today?" rows="5"></textarea>
</div>
<button class="w-full py-4 bg-saffron hover:bg-primary text-white font-bold rounded-xl transition-all shadow-lg shadow-saffron/30 flex items-center justify-center gap-2" type="submit">
<span class="material-symbols-outlined">send</span>
                                Submit Inquiry
                            </button>
</form>
</div>
</div>
</div>
<!-- Feedback & Suggestions Section -->
<section class="mt-24 pt-16 border-t border-gold/30">
<div class="text-center mb-12">
<h2 class="font-heading text-3xl text-slate-900 mb-4">Feedback &amp; Suggestions</h2>
<p class="text-slate-600">Your thoughts help us improve our services for the entire community.</p>
</div>
<div class="max-w-4xl mx-auto glass-card p-10 rounded-2xl">
<div class="flex flex-col md:flex-row items-center justify-between gap-8 mb-10">
<div class="text-center md:text-left">
<h4 class="font-bold text-lg text-slate-800 mb-2">Rate Your Experience</h4>
<p class="text-sm text-slate-500">How would you describe your overall satisfaction?</p>
</div>
<div class="flex gap-2">
<button class="p-2 text-gold hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1">star</span>
</button>
<button class="p-2 text-gold hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1">star</span>
</button>
<button class="p-2 text-gold hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1">star</span>
</button>
<button class="p-2 text-gold hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1">star</span>
</button>
<button class="p-2 text-slate-300 hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-4xl">star</span>
</button>
</div>
</div>
<div class="space-y-6">
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700">What did you love about our service?</label>
<textarea class="w-full bg-white border-gold/20 rounded-lg focus:ring-primary focus:border-primary" placeholder="Share your positive experiences..." rows="3"></textarea>
</div>
<div class="space-y-2">
<label class="text-sm font-semibold text-slate-700">Any suggestions for improvement?</label>
<textarea class="w-full bg-white border-gold/20 rounded-lg focus:ring-primary focus:border-primary" placeholder="We value your constructive ideas..." rows="3"></textarea>
</div>
<div class="pt-4 flex justify-end">
<button class="px-8 py-3 bg-white border-2 border-gold text-gold font-bold rounded-lg hover:bg-gold hover:text-white transition-all">
                                Post Feedback
                            </button>
</div>
</div>
</div>
<!-- Recent Feedback Snippets -->
<div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="p-6 bg-white/50 rounded-xl border border-gold/10">
<div class="flex text-gold mb-3">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
</div>
<p class="text-sm text-slate-700 italic mb-4">"The event registration was seamless. Truly appreciative of the support team's help."</p>
<p class="text-xs font-bold text-slate-500">- Rahul Sharma</p>
</div>
<div class="p-6 bg-white/50 rounded-xl border border-gold/10">
<div class="flex text-gold mb-3">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm">star</span>
</div>
<p class="text-sm text-slate-700 italic mb-4">"Great platform for community building. Would love to see more local temple updates."</p>
<p class="text-xs font-bold text-slate-500">- Priya Mohanty</p>
</div>
<div class="p-6 bg-white/50 rounded-xl border border-gold/10">
<div class="flex text-gold mb-3">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1">star</span>
</div>
<p class="text-sm text-slate-700 italic mb-4">"The devotion section is very peaceful. Thank you for this wonderful initiative!"</p>
<p class="text-xs font-bold text-slate-500">- Anant Das</p>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-background-dark text-white pt-20 pb-10 px-4 md:px-20 mt-20">
<div class="max-w-7xl mx-auto">
<div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
<div class="col-span-1 md:col-span-1">
<div class="flex items-center gap-3 mb-6">
<div class="size-8 text-primary">
<svg fill="currentColor" viewbox="0 0 48 48"><path d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z"></path></svg>
</div>
<h2 class="font-heading text-lg font-bold">Devotee Connect</h2>
</div>
<p class="text-slate-400 text-sm">Connecting hearts and souls across the global spiritual community since 2021.</p>
</div>
<div>
<h4 class="font-bold mb-6">Quick Links</h4>
<ul class="space-y-4 text-sm text-slate-400">
<li><a class="hover:text-primary transition-colors" href="#">About Us</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Our Mission</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Spiritual Events</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Community Forum</a></li>
</ul>
</div>
<div>
<h4 class="font-bold mb-6">Resources</h4>
<ul class="space-y-4 text-sm text-slate-400">
<li><a class="hover:text-primary transition-colors" href="#">Meditation Guides</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Temple Directory</a></li>
<li><a class="hover:text-primary transition-colors" href="#">Donation Policies</a></li>
<li><a class="hover:text-primary transition-colors" href="#">FAQ</a></li>
</ul>
</div>
<div>
<h4 class="font-bold mb-6">Newsletter</h4>
<p class="text-sm text-slate-400 mb-4">Stay updated with spiritual events and news.</p>
<div class="flex">
<input class="bg-white/10 border-none rounded-l-lg text-sm w-full focus:ring-1 focus:ring-primary" placeholder="Email" type="email"/>
<button class="bg-primary px-4 py-2 rounded-r-lg hover:bg-primary/80 transition-all">
<span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</div>
</div>
</div>
<div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-500">
<p>© 2024 Devotee Connect. All rights reserved.</p>
<div class="flex gap-6">
<a class="hover:text-white tran