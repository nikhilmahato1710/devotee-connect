<?php include 'auth_check.php'; ?>
<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Ritual Calendar | Devotee Connect</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                        "background-light": "#f8f6f6",
                        "background-dark": "#221610",
                        "gold": "#d4af37",
                        "deep-maroon": "#472724"
                    },
                    fontFamily: {
                        "display": ["Public Sans"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
        }
        .festival-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background-color: #ec5b13;
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
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">

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
        <a href="booking.php" style="color:#374151;" onmouseover="this.style.color='#ec5b13'" onmouseout="this.style.color='#374151'">Booking</a>
        <a href="calendar.php" style="color:#ec5b13;border-bottom:2px solid #ec5b13;padding-bottom:2px;">Calendar</a>
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
<main class="flex-1 flex flex-col md:flex-row max-w-[1440px] mx-auto w-full px-6 md:px-20 py-8 gap-8">

<!-- Left Content: Calendar Section -->
<div class="flex-[2] flex flex-col gap-6">
<div class="flex flex-col gap-2">
<span class="text-primary font-bold tracking-widest text-xs uppercase">Sacred Timeline</span>
<h1 class="text-4xl md:text-5xl font-black tracking-tight text-slate-900 dark:text-white">Ritual Calendar</h1>
<p class="text-slate-500 dark:text-slate-400 text-lg">Detailed auspicious timings and festivals in Odisha.</p>
</div>


<!-- Calendar Controls -->
<div class="bg-white dark:bg-deep-maroon rounded-2xl shadow-sm p-6 border border-slate-100 dark:border-slate-800">
  <div class="flex items-center justify-between mb-8">
    <div class="flex flex-col">
      <h3 id="cal-heading" class="text-2xl font-bold text-slate-900 dark:text-white"></h3>
      <p id="cal-hindu-month" class="text-sm text-primary font-medium"></p>
    </div>
    <div class="flex gap-2">
      <button id="btn-prev" class="p-2 rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
        <span class="material-symbols-outlined">chevron_left</span>
      </button>
      <button id="btn-next" class="p-2 rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
        <span class="material-symbols-outlined">chevron_right</span>
      </button>
    </div>
  </div>
  <div class="calendar-grid text-center">
    <div class="py-3 text-sm font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Sun</div>
    <div class="py-3 text-sm font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Mon</div>
    <div class="py-3 text-sm font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Tue</div>
    <div class="py-3 text-sm font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Wed</div>
    <div class="py-3 text-sm font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Thu</div>
    <div class="py-3 text-sm font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Fri</div>
    <div class="py-3 text-sm font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Sat</div>
  </div>
</div>
</div>

<!-- Right Sidebar: Upcoming Rituals -->
<div class="flex-1 flex flex-col gap-6">
  <div class="bg-white dark:bg-deep-maroon rounded-2xl shadow-sm border border-slate-100 dark:border-slate-800 overflow-hidden">
    <div class="bg-primary p-6 text-white">
      <h3 class="text-xl font-bold">Festivals This Month</h3>
      <p class="text-sm opacity-90">Stay prepared for sacred moments</p>
    </div>
    <div id="sidebar-rituals" class="p-6 flex flex-col gap-6"></div>
    <div class="px-6 pb-6">
      <button class="w-full bg-slate-100 dark:bg-background-dark py-3 rounded-xl text-sm font-bold text-slate-600 dark:text-slate-300 hover:bg-primary/10 transition-colors flex items-center justify-center gap-2">
        <span class="material-symbols-outlined text-sm">event_repeat</span>
        Sync with Device Calendar
      </button>
    </div>
  </div>

  <div class="bg-gold/10 dark:bg-gold/5 rounded-2xl border border-gold/20 p-6">
    <div class="flex items-center gap-3 mb-3">
      <span class="material-symbols-outlined text-gold">lightbulb</span>
      <h4 class="font-bold text-gold">Today's Guidance</h4>
    </div>
    <p class="text-sm text-slate-700 dark:text-slate-300 italic">
      "The Brahma Muhurta today starts at 04:12 AM. It is a highly powerful time for deep meditation on Lord Jagannath."
    </p>
    <div class="mt-4 pt-4 border-t border-gold/10 flex justify-between items-center">
      <span class="text-xs font-bold text-gold uppercase tracking-widest">Daily Panchang</span>
      <span class="material-symbols-outlined text-gold cursor-pointer">arrow_forward</span>
    </div>
  </div>
</div>

<script>

const festivals = {
  "2026-1-14":  [{ name: "Makar Sankranti",    time: "Sunrise Onwards",       tithi: "Sankranti",    icon: "wb_sunny" }],
  "2026-1-26":  [{ name: "Republic Day",        time: "All Day",               tithi: "Pratipada",    icon: "flag" }],
  "2026-2-2":   [{ name: "Vasant Panchami",     time: "07:00 AM - 12:30 PM",  tithi: "Panchami",     icon: "local_florist" }],
  "2026-2-17":  [{ name: "Maha Shivaratri",     time: "Night — 11:30 PM",     tithi: "Chaturdashi",  icon: "nights_stay" }],
  "2026-2-28":  [{ name: "Holika Dahan",        time: "Evening",               tithi: "Chaturdashi",  icon: "celebration" }],
  "2026-3-1":   [{ name: "Holi",                time: "All Day",               tithi: "Purnima",      icon: "celebration" }],
  "2026-3-22":  [{ name: "Ugadi / Gudi Padwa",  time: "06:30 AM Onwards",     tithi: "Pratipada",    icon: "star" }],
  "2026-3-30":  [{ name: "Ram Navami",           time: "11:00 AM - 01:30 PM", tithi: "Navami",       icon: "temple_hindu" }],
  "2026-4-6":   [{ name: "Hanuman Jayanti",      time: "Sunrise Onwards",      tithi: "Purnima",      icon: "festival" }],
  "2026-4-14":  [{ name: "Baisakhi / Vishu",    time: "All Day",               tithi: "Sankranti",    icon: "wb_sunny" }],
  "2026-4-18":  [{ name: "Good Friday",          time: "All Day",               tithi: "Chaturdashi",  icon: "church" }],
  "2026-4-20":  [{ name: "Easter Sunday",        time: "All Day",               tithi: "Purnima",      icon: "wb_sunny" }],
  "2026-5-9":   [{ name: "Akshaya Tritiya",      time: "05:48 AM - 12:18 PM", tithi: "Tritiya",      icon: "star" }],
  "2026-5-23":  [{ name: "Buddha Purnima",       time: "Sunrise to Sunset",    tithi: "Purnima",      icon: "self_improvement" }],
  "2026-6-11":  [{ name: "Nirjala Ekadashi",     time: "Full Day Fast",         tithi: "Ekadashi",     icon: "water_drop" }],
  "2026-6-24":  [{ name: "Rath Yatra (Puri)",   time: "08:00 AM Onwards",     tithi: "Dwitiya",      icon: "festival" }],
  "2026-6-28":  [{ name: "Hera Panchami",        time: "04:30 PM Onwards",     tithi: "Panchami",     icon: "temple_hindu" }],
  "2026-7-1":   [{ name: "Bahuda Yatra",         time: "07:00 AM Onwards",     tithi: "Dashami",      icon: "festival" }],
  "2026-7-10":  [{ name: "Guru Purnima",         time: "Sunrise Onwards",      tithi: "Purnima",      icon: "self_improvement" }],
  "2026-7-26":  [{ name: "Sayana Ekadashi",      time: "Full Day",             tithi: "Ekadashi",     icon: "nights_stay" }],
  "2026-8-3":   [{ name: "Nag Panchami",         time: "06:00 AM - 08:30 AM", tithi: "Panchami",     icon: "pest_control" }],
  "2026-8-9":   [{ name: "Raksha Bandhan",       time: "All Day",              tithi: "Purnima",      icon: "favorite" }],
  "2026-8-15":  [{ name: "Independence Day",     time: "All Day",              tithi: "Saptami",      icon: "flag" }],
  "2026-8-20":  [{ name: "Janmashtami",          time: "Midnight Celebration", tithi: "Ashtami",      icon: "festival" }],
  "2026-9-4":   [{ name: "Ganesh Chaturthi",     time: "11:00 AM - 01:30 PM", tithi: "Chaturthi",    icon: "festival" }],
  "2026-9-14":  [{ name: "Onam",                 time: "All Day",              tithi: "Thiruvonam",   icon: "local_florist" }],
  "2026-9-23":  [{ name: "Mahalaya",             time: "Dawn — 04:30 AM",     tithi: "Amavasya",     icon: "nights_stay" }],
  "2026-10-2":  [{ name: "Gandhi Jayanti",       time: "All Day",              tithi: "Ashtami",      icon: "flag" }],
  "2026-10-8":  [{ name: "Navratri Begins",      time: "Sunrise Onwards",      tithi: "Pratipada",    icon: "festival" }],
  "2026-10-17": [{ name: "Dussehra",             time: "02:00 PM - 04:30 PM", tithi: "Dashami",      icon: "celebration" }],
  "2026-10-28": [{ name: "Dhanteras",            time: "06:00 PM - 08:00 PM", tithi: "Trayodashi",   icon: "star" }],
  "2026-10-30": [{ name: "Diwali",               time: "Evening Onwards",      tithi: "Amavasya",     icon: "celebration" }],
  "2026-10-31": [{ name: "Govardhan Puja",       time: "06:30 AM - 08:45 AM", tithi: "Pratipada",    icon: "temple_hindu" }],
  "2026-11-1":  [{ name: "Bhai Dooj",            time: "01:10 PM - 03:30 PM", tithi: "Dwitiya",      icon: "favorite" }],
  "2026-11-15": [{ name: "Kartik Purnima",       time: "Sunrise Onwards",      tithi: "Purnima",      icon: "nights_stay" }],
  "2026-11-16": [{ name: "Dev Diwali",           time: "Evening",              tithi: "Purnima",      icon: "celebration" }],
  "2026-12-25": [{ name: "Christmas",            time: "All Day",              tithi: "Chaturdashi",  icon: "star" }],
  "2026-12-30": [{ name: "Vaikunta Ekadashi",    time: "Full Day",             tithi: "Ekadashi",     icon: "self_improvement" }],
};

const hinduMonths = [
  "Pausha - Magha", "Magha - Phalguna", "Phalguna - Chaitra",
  "Chaitra - Vaishakha", "Vaishakha - Jyeshtha", "Jyeshtha - Ashadha",
  "Ashadha - Shravana", "Shravana - Bhadrapada", "Bhadrapada - Ashwina",
  "Ashwina - Kartika", "Kartika - Margashirsha", "Margashirsha - Pausha"
];
const monthNames = ["January","February","March","April","May","June",
                    "July","August","September","October","November","December"];

const today = new Date();
let currentYear  = 2026;
let currentMonth = (today.getFullYear() === 2026) ? today.getMonth() : 0;

function renderCalendar() {
  const year  = currentYear;
  const month = currentMonth;

  document.getElementById("cal-heading").textContent      = monthNames[month] + " " + year;
  document.getElementById("cal-hindu-month").textContent  = hinduMonths[month];

  const btnPrev = document.getElementById("btn-prev");
  const btnNext = document.getElementById("btn-next");
  btnPrev.disabled      = (month === 0);
  btnNext.disabled      = (month === 11);
  btnPrev.style.opacity = (month === 0)  ? "0.3" : "1";
  btnNext.style.opacity = (month === 11) ? "0.3" : "1";

  // Remove old day cells (keep the 7 weekday header divs)
  const grid = document.querySelector(".calendar-grid");
  grid.querySelectorAll(".cal-cell").forEach(c => c.remove());

  const firstDay    = new Date(year, month, 1).getDay();
  const daysInMonth = new Date(year, month + 1, 0).getDate();
  const isCurMonth  = (today.getFullYear() === year && today.getMonth() === month);

  // Blank padding cells
  for (let i = 0; i < firstDay; i++) {
    const blank = document.createElement("div");
    blank.className = "cal-cell h-24 md:h-28 border-t border-slate-100 dark:border-slate-800";
    grid.appendChild(blank);
  }

  // Day cells
  for (let d = 1; d <= daysInMonth; d++) {
    const key    = year + "-" + (month + 1) + "-" + d;
    const events = festivals[key] || [];
    const isToday  = isCurMonth && d === today.getDate();
    const hasFest  = events.length > 0;

    const cell = document.createElement("div");
    cell.className = "cal-cell h-24 md:h-28 border-t p-1.5 flex flex-col items-center relative overflow-hidden " +
      (hasFest ? "border-2 border-primary/50 bg-primary/5 cursor-pointer" : "border-slate-100 dark:border-slate-800");

    const num = document.createElement("span");
    num.className = "text-sm font-bold w-7 h-7 flex items-center justify-center rounded-full " +
      (isToday ? "bg-primary text-white" : hasFest ? "text-primary" : "text-slate-700 dark:text-slate-300");
    num.textContent = d;
    cell.appendChild(num);

    events.forEach(ev => {
      const icon = document.createElement("span");
      icon.className = "material-symbols-outlined text-primary text-xl mt-1 hidden md:block";
      icon.textContent = ev.icon;
      cell.appendChild(icon);

      const label = document.createElement("p");
      label.className = "text-[9px] md:text-[10px] font-bold text-primary text-center leading-tight mt-0.5";
      label.textContent = ev.name;
      cell.appendChild(label);

      const dot = document.createElement("div");
      dot.className = "absolute bottom-1 right-1 festival-dot";
      cell.appendChild(dot);
    });

    grid.appendChild(cell);
  }

  renderSidebar(month, year);
}

function renderSidebar(month, year) {
  const container   = document.getElementById("sidebar-rituals");
  container.innerHTML = "";
  const daysInMonth = new Date(year, month + 1, 0).getDate();
  const monthEvents = [];

  for (let d = 1; d <= daysInMonth; d++) {
    const key = year + "-" + (month + 1) + "-" + d;
    if (festivals[key]) festivals[key].forEach(ev => monthEvents.push({ day: d, ...ev }));
  }

  if (!monthEvents.length) {
    container.innerHTML = '<p class="text-sm text-slate-400 italic px-2">No major festivals recorded this month.</p>';
    return;
  }

  monthEvents.forEach(ev => {
    const item = document.createElement("div");
    item.className = "flex gap-4 group";
    item.innerHTML =
      '<div class="flex flex-col items-center justify-center min-w-[50px] h-[60px] rounded-xl bg-slate-50 dark:bg-background-dark border border-slate-100 dark:border-slate-700">' +
        '<span class="text-xs font-bold text-slate-400 uppercase">' + monthNames[month].slice(0,3) + '</span>' +
        '<span class="text-xl font-black text-primary">' + String(ev.day).padStart(2,"0") + '</span>' +
      '</div>' +
      '<div class="flex flex-col">' +
        '<h4 class="font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors">' + ev.name + '</h4>' +
        '<div class="flex items-center gap-2 mt-1">' +
          '<span class="material-symbols-outlined text-sm text-primary">schedule</span>' +
          '<p class="text-xs text-slate-500 dark:text-slate-400">' + ev.time + '</p>' +
        '</div>' +
        '<p class="text-xs font-semibold text-gold mt-1">Tithi: ' + ev.tithi + '</p>' +
      '</div>';
    container.appendChild(item);
  });
}

document.getElementById("btn-prev").addEventListener("click", function() {
  if (currentMonth > 0) { currentMonth--; renderCalendar(); }
});
document.getElementById("btn-next").addEventListener("click", function() {
  if (currentMonth < 11) { currentMonth++; renderCalendar(); }
});

renderCalendar();
</script>

</main>


<footer class="bg-white dark:bg-background-dark border-t border-slate-200 dark:border-deep-maroon py-10 px-6 md:px-20 mt-12">
<div class="max-w-[1440px] mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
<div class="col-span-1 md:col-span-1">
<div class="flex items-center gap-2 text-primary mb-6">
<span class="material-symbols-outlined">temple_hindu</span>
<span class="font-black text-xl tracking-tight text-slate-900 dark:text-white">Devotee Connect</span>
</div>
<p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed">
                            Empowering the global community of devotees with authentic ritual timings, traditional knowledge, and spiritual connection.
                        </p>
</div>
<div>
<h5 class="font-bold mb-6">Services</h5>
<ul class="flex flex-col gap-4 text-sm text-slate-500 dark:text-slate-400">
<li><a class="hover:text-primary" href="#">Ritual Scheduling</a></li>
<li><a class="hover:text-primary" href="#">Panchang Updates</a></li>
<li><a class="hover:text-primary" href="#">E-Darshan Services</a></li>
<li><a class="hover:text-primary" href="#">Spiritual Counseling</a></li>
</ul>
</div>
<div>
<h5 class="font-bold mb-6">Explore</h5>
<ul class="flex flex-col gap-4 text-sm text-slate-500 dark:text-slate-400">
<li><a class="hover:text-primary" href="#">Festival Gallery</a></li>
<li><a class="hover:text-primary" href="#">Traditional Recipes</a></li>
<li><a class="hover:text-primary" href="#">Historical Temples</a></li>
<li><a class="hover:text-primary" href="#">Devotional Music</a></li>
</ul>
</div>
<div>
<h5 class="font-bold mb-6">Newsletter</h5>
<p class="text-sm text-slate-500 dark:text-slate-400 mb-4">Receive monthly spiritual insights.</p>
<div class="flex gap-2">
<input class="bg-slate-50 dark:bg-background-dark border border-slate-200 dark:border-slate-700 rounded-lg px-4 py-2 text-sm w-full focus:ring-1 focus:ring-primary focus:border-primary" placeholder="Email Address" type="email"/>
<button class="bg-primary text-white p-2 rounded-lg">
<span class="material-symbols-outlined">send</span>
</button>
</div>
</div>
</div>
<div class="max-w-[1440px] mx-auto mt-12 pt-8 border-t border-slate-100 dark:border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-xs text-slate-400">� 2024 Devotee Connect. All sacred rights reserved.</p>
<div class="flex gap-6 text-xs text-slate-400">
<a class="hover:text-primary" href="#">Terms of Service</a>
<a class="hover:text-primary" href="#">Privacy Policy</a>
<a class="hover:text-primary" href="#">Cookie Settings</a>
</div>
</div>
</footer>
</div>
</div>
</body></htm