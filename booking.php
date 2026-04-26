<?php include 'auth_check.php'; ?>
<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Devotee Connect | Rituals &amp; Donations</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&amp;family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
        .live-dot {
            box-shadow: 0 0 0 0 rgba(11, 218, 135, 0.7);
            animation: pulse-green 2s infinite;
        }
        .live-dot-delayed {
            box-shadow: 0 0 0 0 rgba(236, 91, 19, 0.7);
            animation: pulse-orange 2s infinite;
        }
        @keyframes pulse-green {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(11, 218, 135, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 6px rgba(11, 218, 135, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(11, 218, 135, 0); }
        }
        @keyframes pulse-orange {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(236, 91, 19, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 6px rgba(236, 91, 19, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(236, 91, 19, 0); }
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
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen">

<!-- Top Navigation Bar -->

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
        <a href="booking.php" style="color:#ec5b13;border-bottom:2px solid #ec5b13;padding-bottom:2px;">Booking</a>
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
<!-- ===== END UNIFIED HEADER ===== -->
<main class="flex-1 max-w-7xl mx-auto w-full px-6 py-8">

<!-- Hero Section -->
<div class="relative rounded-xl overflow-hidden mb-12 h-[300px] flex items-end">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Traditional Indian temple interior with glowing oil lamps" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDKNxuvpchkR-O-Vgef3gLkSeyQDW4pENqSpJruhGAXulJv8hFbG8pTiLsYLPFSKXA2F_j6boEBszbmFK9VasHR76mGvrj-KryPI46Q1w5Jabiyp2fIVTJK4FU8y_r9MbfRXxD-5LWgKk2b8DT8pMzpzo7m2f-gpMHbKQ-W9OC0PSDbaNNgDA0Hrj2QHDbOZqqadpEdROi867qZDPtB74ldd39-9CUsx5kAi6l7STwdm8APKTU8om_hyTd73t5whRIaFfE3RCCYpaM");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-background-dark/90 to-transparent"></div>
<div class="relative p-8 w-full">
<h1 class="text-white text-4xl md:text-5xl font-bold heading-font mb-2">Divine Services</h1>
<p class="text-saffron font-medium">Book Sacred Rituals &amp; Contribute to the Temple</p>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

<!-- Rituals Section -->
<div class="lg:col-span-2 space-y-8">
<div class="flex items-center justify-between border-b border-primary/20 pb-4">
<h2 class="text-2xl font-bold heading-font flex items-center gap-2">
<span class="material-symbols-outlined text-primary">auto_awesome</span>
                                Temple Rituals (Pooja/Aarti)
                            </h2>
<span class="text-sm text-slate-500">Available Daily</span>
</div>

<!-- Ritual Cards Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

<!-- Ritual Item 1 -->
<div class="glass-card p-5 rounded-xl gold-border hover:shadow-xl transition-all group">
<div class="flex justify-between items-start mb-4">
<div class="bg-primary/10 p-3 rounded-lg text-primary">
<span class="material-symbols-outlined text-3xl">flare</span>
</div>
<span class="text-lg font-bold text-deep-saffron">₹501.00</span>
</div>
<h3 class="text-xl font-bold heading-font mb-2">Maha Aarti</h3>
<p class="text-sm text-slate-600 dark:text-slate-400 mb-6">A grand evening prayer ceremony with multiple lamps and devotional hymns for spiritual upliftment.</p>
<button class="w-full bg-primary hover:bg-deep-saffron text-white py-3 rounded-lg font-bold transition-colors flex items-center justify-center gap-2">
                                    Select Ritual <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
<input name="ritual_id" type="hidden" value="RITUAL_001"/>
</div>

<!-- Ritual Item 2 -->
<div class="glass-card p-5 rounded-xl gold-border hover:shadow-xl transition-all group border-primary/40">
<div class="flex justify-between items-start mb-4">
<div class="bg-primary/10 p-3 rounded-lg text-primary">
<span class="material-symbols-outlined text-3xl">water_drop</span>
</div>
<span class="text-lg font-bold text-deep-saffron">₹1,100.00</span>
</div>
<h3 class="text-xl font-bold heading-font mb-2">Abhishekam</h3>
<p class="text-sm text-slate-600 dark:text-slate-400 mb-6">Sacred bathing ritual of the deity with milk, honey, and holy water for purification and blessings.</p>
<button class="w-full bg-primary hover:bg-deep-saffron text-white py-3 rounded-lg font-bold transition-colors flex items-center justify-center gap-2">
                                    Select Ritual <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
<input name="ritual_id" type="hidden" value="RITUAL_002"/>
</div>
</div>

<!-- Booking Form -->
<div class="glass-card p-8 rounded-xl border-primary/10 mt-12">
<h3 class="text-xl font-bold heading-font mb-6 border-b border-primary/10 pb-2">Booking Details</h3>
<form action="#" class="grid grid-cols-1 md:grid-cols-2 gap-6" method="POST">
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Selected Ritual</label>
<input class="bg-background-light dark:bg-background-dark border border-gold/30 rounded-lg px-4 py-2 text-slate-500 focus:ring-primary focus:border-primary" name="ritual_name" readonly="" type="text" value="Maha Aarti"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Price (INR)</label>
<input class="bg-background-light dark:bg-background-dark border border-gold/30 rounded-lg px-4 py-2 text-slate-500 focus:ring-primary focus:border-primary" name="ritual_price" readonly="" type="text" value="501.00"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Preferred Date</label>
<input class="bg-white dark:bg-slate-800 border border-gold/30 rounded-lg px-4 py-2 focus:ring-primary focus:border-primary" type="date"/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-semibold text-slate-700 dark:text-slate-300">Devotee Name</label>
<input class="bg-white dark:bg-slate-800 border border-gold/30 rounded-lg px-4 py-2 focus:ring-primary focus:border-primary" placeholder="Enter Full Name" type="text"/>
</div>
<div class="md:col-span-2">
<button class="w-full bg-gradient-to-r from-primary to-deep-saffron text-white py-4 rounded-xl font-bold text-lg shadow-lg shadow-primary/20 hover:scale-[1.01] transition-transform" type="submit">
                                        Confirm Booking
                                    </button>
</div>
</form>
</div>
</div>

<!-- Donations Sidebar -->
<div class="space-y-8">
<div class="flex items-center gap-2 border-b border-primary/20 pb-4">
<h2 class="text-2xl font-bold heading-font">
<span class="material-symbols-outlined text-primary align-middle">favorite</span>
                                Donations
                            </h2>
</div>
<div class="glass-card p-6 rounded-xl gold-border sticky top-24">
<div class="aspect-video rounded-lg overflow-hidden mb-6 relative">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Golden temple dome against a clear blue sky" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBv0_ncTOqeHY8fPujJVRQp3C_B4YMHbO6evz8OHE6dYy3WAdJxfs00vehmi4xfJ0Wyg-1nQ0mnpnxFPITqrvlNLyG1QB5hJW7XL_K04fG8eFyMU6NboxgGlq7FdQW6IyzeFqNBtpUJGgTU1lSIFY84OrqSGPIK9T13QyApqUrNKAkMWjcd_BcQSSPjRaxg1B37VjgYrJeQ5_IJ2ggKRbDKhBUvtaYE6B38XUaZJfW8sBFbn-z94GzwyQGgDmdbc_EYBsQOyle9hFY");'></div>
<div class="absolute inset-0 bg-primary/20 mix-blend-overlay"></div>
</div>
<h3 class="text-lg font-bold heading-font mb-2">Support Temple Seva</h3>
<p class="text-sm text-slate-600 dark:text-slate-400 mb-8">Your contribution helps maintain temple premises and organize community kitchens (Langar).</p>
<form action="#" class="space-y-6" method="POST">
<div class="space-y-4">
<div class="flex justify-between items-center mb-2">
<label class="text-sm font-bold">Donation Amount</label>
<span class="text-xl font-bold text-primary">₹<output id="amount">5000</output></span>
</div>
<input class="w-full h-2 bg-primary/20 rounded-lg appearance-none cursor-pointer accent-primary" max="50000" min="100" name="donation_amount" oninput="document.getElementById('amount').value = this.value" step="100" type="range" value="5000"/>
<div class="flex justify-between text-[10px] text-slate-400 font-bold tracking-widest uppercase">
<span>₹100</span>
<span>₹50,000</span>
</div>
</div>
<div class="grid grid-cols-3 gap-2">
<button class="border border-gold/30 rounded-lg py-2 text-xs font-bold hover:bg-primary/10 transition-colors" onclick="document.getElementsByName('donation_amount')[0].value = 501; document.getElementById('amount').value = 501" type="button">₹501</button>
<button class="border border-gold/30 rounded-lg py-2 text-xs font-bold hover:bg-primary/10 transition-colors" onclick="document.getElementsByName('donation_amount')[0].value = 1001; document.getElementById('amount').value = 1001" type="button">₹1,001</button>
<button class="border border-gold/30 rounded-lg py-2 text-xs font-bold hover:bg-primary/10 transition-colors" onclick="document.getElementsByName('donation_amount')[0].value = 5001; document.getElementById('amount').value = 5001" type="button">₹5,001</button>
</div>
<button class="w-full bg-slate-900 dark:bg-primary text-white py-4 rounded-xl font-bold hover:bg-primary dark:hover:bg-deep-saffron transition-colors shadow-lg" type="submit">
                                    Proceed to Donate
                                </button>
<div class="flex items-center justify-center gap-4 pt-4 border-t border-primary/10">
<span class="material-symbols-outlined text-gold">verified_user</span>
<p class="text-[10px] text-slate-500 font-medium uppercase tracking-tighter">Secure 256-bit Encrypted Payment</p>
</div>
</form>
</div>
</div>
</div>
</main>

<!-- Footer -->
<footer class="border-t border-primary/10 bg-white dark:bg-background-dark/50 py-10 mt-20">
<div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary">temple_hindu</span>
<span class="font-bold heading-font">Devotee Connect</span>
</div>
<p class="text-sm text-slate-500">© 2024 Devotee Connect. Promoting modern spirituality.</p>
<div class="flex gap-4">
<a class="text-slate-400 hover:text-primary" href="#"><span class="material-symbols-outlined">share</span></a>
<a class="text-slate-400 hover:text-primary" href="#"><span class="material-symbols-outlined">mail</span></a>
<a class="text-slate-400 hover:text-primary" href="#"><span class="material-symbols-outlined">policy</span></a>
</div>
</div>
</footer>
</div>
</div>
</body></html>