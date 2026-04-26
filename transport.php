<?php include 'auth_check.php'; ?>
<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Live Transport Hub - Spiritual Tourism</title>
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
                        "primary": "#ec5b13", // Primary Saffron derived
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
        <a href="stays.php" style="color:#374151;" onmouseover="this.style.color='#ec5b13'" onmouseout="this.style.color='#374151'">Stays</a>
        <a href="transport.php" style="color:#ec5b13;border-bottom:2px solid #ec5b13;padding-bottom:2px;">Transport</a>
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

<!-- Hero Section -->
<section class="relative h-[450px] w-full flex items-center justify-center overflow-hidden">
<div class="absolute inset-0 z-0">
<div class="absolute inset-0 bg-gradient-to-b from-primary/40 to-background-light/100 dark:to-background-dark/100 z-10"></div>
<img alt="Varanasi Ghats" class="w-full h-full object-cover" data-alt="Golden hour at ancient river ghats with spiritual lamps" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzbASIJu4GyyyNRVDY06xF3ieYEYFvHuN-EP0w3jhe3vTbg9VFOa42k2hNlURmdIYOJYsHWO3ol2tj-1_YvUQrZINQLDCTQ6NNE1wR8Q4J3E4njD6IA1oyyP4_b8U-a9I7AbgSDhD37DEx8QWIU0JlSI7siX8oy6nlX7VZWhB2cjzs96cRbkzrNXvKM9N-hLWwM5r4kTxpud1rLNDcX5TOdWdI498ESl6JnNqroKNMmo8WOZGmNNKVzVifJPRWmzNS4exS59YzjsY"/>
</div>
<div class="relative z-20 text-center px-4 max-w-4xl mx-auto">
<h1 class="font-heading text-4xl md:text-6xl font-black text-slate-900 dark:text-slate-100 mb-4 tracking-tighter">
                Live Transport Hub
            </h1>
<p class="text-lg md:text-xl font-medium text-slate-700 dark:text-slate-300 mb-8 max-w-2xl mx-auto">
                Navigate your sacred journey with real-time updates for buses, trains, and spiritual shuttles.
            </p>
<!-- ============================================================
     LIVE TRANSPORT SEARCH — Odisha places only
     Trains & buses stored as JS data. Search filters by from/to.
     Status (On Time / Delayed) simulated with live clock pulse.
     ============================================================ -->

<!-- Search Bar -->
<div class="glass-card p-3 rounded-2xl border-gold shadow-2xl max-w-3xl mx-auto">
  <div class="flex flex-col md:flex-row gap-2">
    <div class="flex-1 relative">
      <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-primary">location_on</span>
      <input id="input-from" autocomplete="off"
        class="w-full pl-12 pr-4 py-4 bg-transparent border-none focus:ring-0 text-slate-900 placeholder-slate-500 font-medium"
        placeholder="From (e.g. Bhubaneswar)" type="text"/>
      <ul id="suggest-from" class="absolute z-50 left-0 right-0 top-full mt-1 bg-white rounded-xl shadow-xl border border-gold/20 hidden max-h-52 overflow-y-auto text-sm"></ul>
    </div>
    <!-- Swap button -->
    <button id="btn-swap" class="hidden md:flex items-center justify-center w-12 h-12 self-center rounded-full border border-gold/40 hover:bg-primary/10 transition" title="Swap">
      <span class="material-symbols-outlined text-primary">swap_horiz</span>
    </button>
    <div class="flex-1 relative">
      <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-primary">flag</span>
      <input id="input-to" autocomplete="off"
        class="w-full pl-12 pr-4 py-4 bg-transparent border-none focus:ring-0 text-slate-900 placeholder-slate-500 font-medium"
        placeholder="To (e.g. Puri)" type="text"/>
      <ul id="suggest-to" class="absolute z-50 left-0 right-0 top-full mt-1 bg-white rounded-xl shadow-xl border border-gold/20 hidden max-h-52 overflow-y-auto text-sm"></ul>
    </div>
    <button id="btn-search"
      class="bg-primary hover:bg-primary/90 text-white px-8 py-4 rounded-xl font-bold transition-all shadow-lg flex items-center justify-center gap-2">
      <span class="material-symbols-outlined">travel_explore</span> Search
    </button>
  </div>
  <!-- Mode tabs -->
  <div class="flex gap-2 mt-3 px-1">
    <button data-mode="all"   class="mode-tab active-tab px-4 py-1.5 rounded-full text-xs font-bold border border-primary bg-primary text-white transition-all">All</button>
    <button data-mode="train" class="mode-tab px-4 py-1.5 rounded-full text-xs font-bold border border-slate-200 text-slate-600 hover:border-primary hover:text-primary transition-all">Trains</button>
    <button data-mode="bus"   class="mode-tab px-4 py-1.5 rounded-full text-xs font-bold border border-slate-200 text-slate-600 hover:border-primary hover:text-primary transition-all">Buses</button>
  </div>
</div>
</div>
</section>

<!-- ── Main Results ─────────────────────────────────────────── -->
<main class="max-w-7xl mx-auto px-6 py-12">

  <!-- Result count / label -->
  <div class="flex items-center justify-between mb-6">
    <p id="result-label" class="text-slate-500 text-sm font-medium"></p>
    <div class="flex items-center gap-2 text-xs font-bold text-green-700 bg-green-50 border border-green-200 px-3 py-1.5 rounded-full">
      <div class="w-2 h-2 rounded-full bg-green-500 live-dot"></div> LIVE DATA
    </div>
  </div>

  <!-- Bus Section -->
  <div id="section-bus" class="mb-14">
    <div class="flex items-center gap-3 mb-6">
      <div class="bg-primary/20 p-3 rounded-xl border border-primary/30">
        <span class="material-symbols-outlined text-primary text-3xl">directions_bus</span>
      </div>
      <h2 class="font-heading text-3xl font-bold text-slate-900 dark:text-slate-100">Bus Schedules</h2>
    </div>
    <div id="bus-results" class="grid grid-cols-1 lg:grid-cols-2 gap-6"></div>
    <p id="bus-empty" class="text-slate-400 italic text-sm hidden mt-2">No buses found for this route.</p>
  </div>

  <!-- Train Section -->
  <div id="section-train">
    <div class="flex items-center gap-3 mb-6">
      <div class="bg-primary/20 p-3 rounded-xl border border-primary/30">
        <span class="material-symbols-outlined text-primary text-3xl">train</span>
      </div>
      <h2 class="font-heading text-3xl font-bold text-slate-900 dark:text-slate-100">Train Routes</h2>
    </div>
    <div id="train-results" class="space-y-4"></div>
    <p id="train-empty" class="text-slate-400 italic text-sm hidden mt-2">No trains found for this route.</p>
  </div>

</main>

<script>
// ============================================================
// ODISHA TRANSPORT DATA
// ============================================================

// All places inside Odisha (for autocomplete)
const PLACES = [
  "Bhubaneswar","Puri","Cuttack","Konark","Berhampur","Sambalpur",
  "Rourkela","Balasore","Baripada","Brahmapur","Kendrapara","Paradip",
  "Jajpur","Dhenkanal","Rayagada","Koraput","Jeypore","Phulbani",
  "Bolangir","Sundargarh","Angul","Talcher","Bhadrak","Jagatsinghpur",
  "Nayagarh","Khurda","Titlagarh","Bhawanipatna","Nabarangpur","Malkangiri"
];

// ── BUS DATA ─────────────────────────────────────────────────
// status: "ontime" | "delayed" | "arriving"
const BUSES = [
  { id:"OD-101", name:"Puri Jagannath Express", from:"Bhubaneswar", to:"Puri",      dep:"06:00", arr:"07:30", status:"ontime",  delay:0  },
  { id:"OD-102", name:"Konark Pilgrim Shuttle", from:"Puri",         to:"Konark",    dep:"07:00", arr:"08:15", status:"ontime",  delay:0  },
  { id:"OD-103", name:"Cuttack City Link",      from:"Bhubaneswar", to:"Cuttack",   dep:"07:30", arr:"08:30", status:"delayed", delay:20 },
  { id:"OD-104", name:"Berhampur Fast Bus",     from:"Bhubaneswar", to:"Berhampur", dep:"08:00", arr:"11:30", status:"ontime",  delay:0  },
  { id:"OD-105", name:"Sambalpur Superfast",    from:"Bhubaneswar", to:"Sambalpur", dep:"06:30", arr:"12:00", status:"delayed", delay:30 },
  { id:"OD-106", name:"Rourkela Express",       from:"Cuttack",     to:"Rourkela",  dep:"05:00", arr:"11:00", status:"ontime",  delay:0  },
  { id:"OD-107", name:"Puri Darshan Shuttle",   from:"Konark",      to:"Puri",      dep:"09:00", arr:"10:00", status:"arriving",delay:0  },
  { id:"OD-108", name:"Chilika Lake Service",   from:"Berhampur",   to:"Puri",      dep:"06:45", arr:"09:30", status:"ontime",  delay:0  },
  { id:"OD-109", name:"Balasore City Bus",      from:"Bhubaneswar", to:"Balasore",  dep:"07:00", arr:"10:00", status:"ontime",  delay:0  },
  { id:"OD-110", name:"Baripada Express",       from:"Balasore",    to:"Baripada",  dep:"08:30", arr:"10:00", status:"delayed", delay:15 },
  { id:"OD-111", name:"Paradip Port Bus",       from:"Cuttack",     to:"Paradip",   dep:"09:00", arr:"11:00", status:"ontime",  delay:0  },
  { id:"OD-112", name:"Puri-Bhubaneswar Return",from:"Puri",        to:"Bhubaneswar",dep:"14:00",arr:"15:30",status:"ontime",  delay:0  },
  { id:"OD-113", name:"Koraput Hill Cruiser",   from:"Berhampur",   to:"Koraput",   dep:"05:30", arr:"11:30", status:"ontime",  delay:0  },
  { id:"OD-114", name:"Angul Industrial Link",  from:"Cuttack",     to:"Angul",     dep:"07:00", arr:"09:30", status:"delayed", delay:10 },
  { id:"OD-115", name:"Jeypore Tribal Route",   from:"Koraput",     to:"Jeypore",   dep:"08:00", arr:"09:30", status:"ontime",  delay:0  },
];

// ── TRAIN DATA ───────────────────────────────────────────────
const TRAINS = [
  { number:"12801", name:"Purushottam Express",      from:"Bhubaneswar", to:"Puri",        dep:"06:10", arr:"07:10", platform:"1", scheduled:"06:10", actual:"06:12", status:"ontime",  delay:0  },
  { number:"12887", name:"Aranyak Express",          from:"Bhubaneswar", to:"Sambalpur",   dep:"22:05", arr:"05:30", platform:"3", scheduled:"22:05", actual:"22:05", status:"ontime",  delay:0  },
  { number:"18010", name:"Jagannath Express",        from:"Howrah",      to:"Puri",        dep:"08:45", arr:"15:30", platform:"2", scheduled:"08:45", actual:"09:20", status:"delayed", delay:35 },
  { number:"12895", name:"Konark Express",           from:"Bhubaneswar", to:"Howrah",      dep:"17:25", arr:"23:55", platform:"5", scheduled:"17:25", actual:"17:25", status:"ontime",  delay:0  },
  { number:"18029", name:"Shalimar LTT Express",    from:"Cuttack",     to:"Berhampur",   dep:"11:10", arr:"15:40", platform:"1", scheduled:"11:10", actual:"11:25", status:"delayed", delay:15 },
  { number:"18303", name:"Sambalpur City Express",  from:"Sambalpur",   to:"Puri",        dep:"20:20", arr:"07:55", platform:"2", scheduled:"20:20", actual:"20:20", status:"ontime",  delay:0  },
  { number:"12821", name:"Dhauli Express",          from:"Bhubaneswar", to:"Puri",        dep:"07:15", arr:"08:15", platform:"4", scheduled:"07:15", actual:"07:15", status:"ontime",  delay:0  },
  { number:"18006", name:"Saraswati Express",       from:"Rourkela",    to:"Puri",        dep:"06:05", arr:"16:10", platform:"1", scheduled:"06:05", actual:"06:05", status:"ontime",  delay:0  },
  { number:"12993", name:"Puri Rajdhani Express",   from:"Puri",        to:"New Delhi",   dep:"14:25", arr:"17:50", platform:"6", scheduled:"14:25", actual:"14:40", status:"delayed", delay:15 },
  { number:"18421", name:"Hirakhand Express",       from:"Visakhapatnam",to:"Jagdalpur",  dep:"06:45", arr:"19:00", platform:"3", scheduled:"06:45", actual:"06:45", status:"ontime",  delay:0  },
  { number:"18116", name:"Rajya Rani Express",      from:"Cuttack",     to:"Bhubaneswar", dep:"09:00", arr:"09:40", platform:"2", scheduled:"09:00", actual:"09:00", status:"ontime",  delay:0  },
  { number:"58001", name:"Bhubaneswar-Puri Passenger",from:"Bhubaneswar",to:"Puri",       dep:"06:40", arr:"08:35", platform:"1", scheduled:"06:40", actual:"07:00", status:"delayed", delay:20 },
  { number:"12073", name:"Howrah-Puri Jan Shatabdi",from:"Howrah",      to:"Puri",        dep:"06:15", arr:"12:55", platform:"4", scheduled:"06:15", actual:"06:15", status:"ontime",  delay:0  },
  { number:"18424", name:"Utkal Express",           from:"Puri",        to:"New Delhi",   dep:"11:30", arr:"17:00", platform:"5", scheduled:"11:30", actual:"11:30", status:"ontime",  delay:0  },
];

// ── AUTOCOMPLETE ─────────────────────────────────────────────
function setupAutocomplete(inputId, listId) {
  const input = document.getElementById(inputId);
  const list  = document.getElementById(listId);

  input.addEventListener("input", function() {
    const val = this.value.trim().toLowerCase();
    list.innerHTML = "";
    if (!val) { list.classList.add("hidden"); return; }

    const matches = PLACES.filter(p => p.toLowerCase().startsWith(val));
    if (!matches.length) { list.classList.add("hidden"); return; }

    matches.forEach(p => {
      const li = document.createElement("li");
      li.className = "px-4 py-2 cursor-pointer hover:bg-primary/10 hover:text-primary font-medium";
      li.textContent = p;
      li.addEventListener("mousedown", function(e) {
        e.preventDefault();
        input.value = p;
        list.classList.add("hidden");
      });
      list.appendChild(li);
    });
    list.classList.remove("hidden");
  });

  input.addEventListener("blur", () => setTimeout(() => list.classList.add("hidden"), 150));
}

setupAutocomplete("input-from", "suggest-from");
setupAutocomplete("input-to",   "suggest-to");

// ── SWAP BUTTON ───────────────────────────────────────────────
document.getElementById("btn-swap").addEventListener("click", function() {
  const f = document.getElementById("input-from");
  const t = document.getElementById("input-to");
  [f.value, t.value] = [t.value, f.value];
  renderResults();
});

// ── MODE TABS ─────────────────────────────────────────────────
let activeMode = "all";
document.querySelectorAll(".mode-tab").forEach(btn => {
  btn.addEventListener("click", function() {
    activeMode = this.dataset.mode;
    document.querySelectorAll(".mode-tab").forEach(b => {
      b.classList.remove("bg-primary","text-white","border-primary");
      b.classList.add("border-slate-200","text-slate-600");
    });
    this.classList.add("bg-primary","text-white","border-primary");
    this.classList.remove("border-slate-200","text-slate-600");
    renderResults();
  });
});

// ── STATUS BADGE HTML ─────────────────────────────────────────
function statusBadge(s, delay) {
  if (s === "ontime")   return `<div class="flex items-center gap-2 bg-green-100 px-3 py-1 rounded-full border border-green-200"><div class="w-2 h-2 rounded-full bg-green-500 live-dot"></div><span class="text-[10px] font-bold text-green-700">ON TIME</span></div>`;
  if (s === "delayed")  return `<div class="flex items-center gap-2 bg-orange-100 px-3 py-1 rounded-full border border-orange-200"><div class="w-2 h-2 rounded-full bg-orange-500 live-dot-delayed"></div><span class="text-[10px] font-bold text-orange-700">+${delay} MIN</span></div>`;
  if (s === "arriving") return `<div class="flex items-center gap-2 bg-blue-100 px-3 py-1 rounded-full border border-blue-200"><div class="w-2 h-2 rounded-full bg-blue-500 live-dot"></div><span class="text-[10px] font-bold text-blue-700">ARRIVING SOON</span></div>`;
  return "";
}

// ── BUS CARD HTML ─────────────────────────────────────────────
function busCard(b) {
  return `
  <div class="glass-card rounded-2xl p-6 border-gold/50 flex flex-col gap-4 hover:shadow-xl transition-all">
    <div class="flex justify-between items-start">
      <div>
        <h3 class="font-heading text-lg font-bold text-primary">${b.name}</h3>
        <p class="text-xs font-semibold uppercase tracking-widest text-slate-500">Route #${b.id}</p>
      </div>
      ${statusBadge(b.status, b.delay)}
    </div>
    <div class="flex items-center gap-4">
      <div class="flex flex-col">
        <span class="text-2xl font-black font-heading tracking-tight">${b.dep}</span>
        <span class="text-[10px] text-slate-500 font-bold uppercase">${b.from}</span>
      </div>
      <div class="flex-1 border-t-2 border-dashed border-gold/30 relative">
        <span class="material-symbols-outlined absolute left-1/2 -translate-x-1/2 -top-3 text-gold bg-cream-soft rounded-full px-1">chevron_right</span>
      </div>
      <div class="flex flex-col text-right">
        <span class="text-2xl font-black font-heading tracking-tight">${b.arr}</span>
        <span class="text-[10px] text-slate-500 font-bold uppercase">${b.to}</span>
      </div>
    </div>
    <div class="flex justify-between items-center">
      <span class="inline-flex items-center gap-1 text-[11px] font-bold bg-primary/10 text-primary px-2 py-1 rounded border border-primary/20">
        <span class="material-symbols-outlined text-xs">directions_bus</span> OSRTC Service
      </span>
      <a href="https://www.osrtc.in" target="_blank" class="text-xs font-bold text-slate-500 underline">Book Ticket</a>
    </div>
  </div>`;
}

// ── TRAIN CARD HTML ───────────────────────────────────────────
function trainCard(t) {
  const barColor = t.status === "ontime" ? "bg-primary" : "bg-gold";
  return `
  <div class="glass-card rounded-2xl p-4 md:p-6 border-gold/50 flex flex-col md:flex-row items-stretch md:items-center justify-between gap-6 hover:shadow-lg transition-all relative overflow-hidden">
    <div class="absolute top-0 left-0 w-1.5 h-full ${barColor}"></div>
    <div class="flex items-center gap-4 pl-2">
      <div class="bg-primary/10 w-12 h-12 rounded-full flex items-center justify-center text-primary shrink-0">
        <span class="material-symbols-outlined">directions_railway</span>
      </div>
      <div>
        <h3 class="font-heading text-lg font-bold">${t.name} (${t.number})</h3>
        <p class="text-sm font-medium text-slate-500">${t.from} &rarr; ${t.to}</p>
      </div>
    </div>
    <div class="flex items-center gap-6 px-4 py-2 bg-white/40 dark:bg-slate-800/40 rounded-xl flex-wrap">
      <div class="text-center">
        <span class="block text-[10px] uppercase font-bold text-slate-400">Scheduled</span>
        <span class="font-heading font-black">${t.scheduled}</span>
      </div>
      <div class="w-px h-8 bg-gold/30"></div>
      <div class="text-center">
        <span class="block text-[10px] uppercase font-bold text-slate-400">Actual</span>
        <span class="font-heading font-black text-primary">${t.actual}</span>
      </div>
      <div class="w-px h-8 bg-gold/30"></div>
      <div class="text-center">
        <span class="block text-[10px] uppercase font-bold text-slate-400">Platform</span>
        <span class="font-heading font-black">${t.platform}</span>
      </div>
    </div>
    <div class="flex items-center gap-3">
      ${statusBadge(t.status, t.delay)}
      <a href="https://www.irctc.co.in" target="_blank"
         class="bg-slate-900 text-white p-2 rounded-lg hover:opacity-80 transition-opacity" title="Book on IRCTC">
        <span class="material-symbols-outlined">open_in_new</span>
      </a>
    </div>
  </div>`;
}

// ── RENDER RESULTS ────────────────────────────────────────────
function renderResults() {
  const from = document.getElementById("input-from").value.trim().toLowerCase();
  const to   = document.getElementById("input-to").value.trim().toLowerCase();

  const matchBus = BUSES.filter(b =>
    (!from || b.from.toLowerCase().includes(from)) &&
    (!to   || b.to.toLowerCase().includes(to))
  );
  const matchTrain = TRAINS.filter(t =>
    (!from || t.from.toLowerCase().includes(from)) &&
    (!to   || t.to.toLowerCase().includes(to))
  );

  const showBus   = activeMode !== "train";
  const showTrain = activeMode !== "bus";

  // Bus section
  document.getElementById("section-bus").style.display  = showBus   ? "" : "none";
  document.getElementById("section-train").style.display = showTrain ? "" : "none";

  if (showBus) {
    const busEl = document.getElementById("bus-results");
    busEl.innerHTML = matchBus.map(busCard).join("");
    document.getElementById("bus-empty").classList.toggle("hidden", matchBus.length > 0);
  }

  if (showTrain) {
    const trainEl = document.getElementById("train-results");
    trainEl.innerHTML = matchTrain.map(trainCard).join("");
    document.getElementById("train-empty").classList.toggle("hidden", matchTrain.length > 0);
  }

  // Result label
  const total = (showBus ? matchBus.length : 0) + (showTrain ? matchTrain.length : 0);
  const label = (from || to)
    ? `Showing ${total} result${total !== 1 ? "s" : ""} ${from ? "from <strong>${from}</strong>" : ""} ${to ? "to <strong>${to}</strong>" : ""}`
    : `Showing all ${total} services across Odisha`;
  document.getElementById("result-label").innerHTML = label
    .replace("${from}", document.getElementById("input-from").value)
    .replace("${to}",   document.getElementById("input-to").value);
}

// ── SEARCH BUTTON ─────────────────────────────────────────────
document.getElementById("btn-search").addEventListener("click", renderResults);
document.getElementById("input-from").addEventListener("keydown", e => { if(e.key==="Enter") renderResults(); });
document.getElementById("input-to").addEventListener("keydown",   e => { if(e.key==="Enter") renderResults(); });

// Initial render (show all)
renderResults();
</script>

<!-- Map View Preview Component -->
<section class="max-w-7xl mx-auto px-6 pb-20">
<div class="relative rounded-3xl overflow-hidden border-2 border-gold/30 h-80 group">
<img alt="Route Map" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" data-alt="Modern stylized transit map of Northern India" data-location="Varanasi" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBUPlOpS4WxQc8usYeFydTVnD7ywjwVQz4l2Yv7gXGramoD0nFeXMbmz1bkOW8rZvDLamohGdmxMxoCDpfAcIiRJBZM6SS5qJNtt8UzqAV8tK6kq5UIRwfL6v_LaIiBLyfxLTNNbSpc3-G9Ep94zgB78jFJpsnf_ttq02H6LONc18I8ZhVCi9D_ehr2QSnySFTfG9iApu3ir_ZXoLe7r1htwFVZv-pIEo4hruqIMDcId57bkuyMTMR6k1APGNsBU8tcB_ZBGaU7hcg"/>
<div class="absolute inset-0 bg-primary/20 flex items-center justify-center flex-col text-center p-8 backdrop-blur-[2px] group-hover:backdrop-blur-none transition-all">
<div class="bg-cream/90 dark:bg-slate-900/90 p-8 rounded-2xl shadow-2xl border border-gold inline-block">
<span class="material-symbols-outlined text-4xl text-primary mb-2">map</span>
<h3 class="font-heading text-2xl font-bold mb-2">Interactive Live Map</h3>
<p class="text-sm font-medium mb-6 opacity-80">Track all active spiritual shuttles and pilgrim trains in real-time across the country.</p>
<button class="bg-primary text-white px-10 py-3 rounded-xl font-bold shadow-lg hover:bg-primary/90 transition-all">Open Full Screen Map</button>
</div>
</div>
</div>
</section>

<!-- Footer -->
<footer class="border-t border-gold/20 bg-cream/50 dark:bg-background-dark/50 py-12 px-6">
<div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-8">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-3xl">temple_hindu</span>
<span class="font-heading text-xl font-bold text-primary">Spiritual Yatra</span>
</div>
<div class="flex gap-8">
<a class="text-sm font-semibold opacity-60 hover:opacity-100" href="#">About</a>
<a class="text-sm font-semibold opacity-60 hover:opacity-100" href="#">Transit Safety</a>
<a class="text-sm font-semibold opacity-60 hover:opacity-100" href="#">Helpline</a>
<a class="text-sm font-semibold opacity-60 hover:opacity-100" href="#">Privacy</a>
</div>
<p class="text-xs font-bold opacity-40">© 2024 Spiritual Yatra Live Transit. Devotion in Motion.</p>
</div>
</footer>
</body></html>