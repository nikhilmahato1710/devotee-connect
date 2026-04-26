<?php
// ============================================================
// STEP 1: Auth check + session (MUST be first)
// ============================================================
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

// ============================================================
// STEP 2: DB connection & temple data fetch
// ============================================================
include "config.php";

// Get and sanitise temple ID from URL
$temple_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($temple_id <= 0) {
    header("Location: index.php");
    exit();
}

// Fetch temple from DB
$stmt = mysqli_prepare($conn, "SELECT id, name, location, description, image_url, badge FROM temples WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $temple_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$temple  = mysqli_fetch_assoc($result);

if (!$temple) {
    header("Location: index.php");
    exit();
}

// Clean variables for use in HTML
$temple_name = htmlspecialchars($temple['name']);
$location    = htmlspecialchars($temple['location']);
$description = htmlspecialchars($temple['description']);
$image_url   = htmlspecialchars($temple['image_url']);
$badge       = htmlspecialchars($temple['badge']);

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title><?php echo $temple_name; ?> | Devotee Connect</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
  tailwind.config = {
    darkMode: "class",
    theme: {
      extend: {
        colors: {
          "primary":          "#ec5b13",
          "saffron-deep":     "#E65100",
          "gold-metallic":    "#D4AF37",
          "background-light": "#FFF8E1",
          "background-dark":  "#221610",
        },
        fontFamily: {
          "display": ["Cinzel",  "serif"],
          "body":    ["Poppins", "sans-serif"]
        },
      },
    },
  }
</script>
<style>
  body { font-family: 'Poppins', sans-serif; }
  h1,h2,h3,h4 { font-family: 'Cinzel', serif; }
  .glass-card {
    background: rgba(255,248,225,0.7);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(212,175,55,0.3);
  }
  .live-dot {
    box-shadow: 0 0 0 0 rgba(11,218,135,0.7);
    animation: pulse-green 2s infinite;
  }
  .live-dot-delayed {
    box-shadow: 0 0 0 0 rgba(236,91,19,0.7);
    animation: pulse-orange 2s infinite;
  }
  @keyframes pulse-green {
    0%   { transform:scale(0.95); box-shadow:0 0 0 0 rgba(11,218,135,0.7); }
    70%  { transform:scale(1);    box-shadow:0 0 0 6px rgba(11,218,135,0); }
    100% { transform:scale(0.95); box-shadow:0 0 0 0 rgba(11,218,135,0); }
  }
  @keyframes pulse-orange {
    0%   { transform:scale(0.95); box-shadow:0 0 0 0 rgba(236,91,19,0.7); }
    70%  { transform:scale(1);    box-shadow:0 0 0 6px rgba(236,91,19,0); }
    100% { transform:scale(0.95); box-shadow:0 0 0 0 rgba(236,91,19,0); }
  }
  /* Unified header styles */
  .dc-header { position:sticky; top:0; z-index:50; background:rgba(255,255,255,0.95); backdrop-filter:blur(12px); border-bottom:1px solid rgba(212,175,55,0.25); box-shadow:0 1px 8px rgba(0,0,0,0.06); }
  .dc-header-inner { max-width:1280px; margin:0 auto; padding:0 24px; display:flex; align-items:center; justify-content:space-between; height:72px; }
  .dc-brand { display:flex; align-items:center; gap:10px; text-decoration:none; flex-shrink:0; }
  .dc-brand-icon { font-size:36px; color:#ec5b13; }
  .dc-brand-title { font-family:'Cinzel',serif; font-size:1.15rem; font-weight:900; letter-spacing:0.12em; text-transform:uppercase; color:#E65100; white-space:nowrap; }
  .dc-brand-title span { color:#ec5b13; }
  .dc-nav { display:flex; align-items:center; gap:28px; font-family:'Poppins',sans-serif; font-size:0.72rem; font-weight:600; text-transform:uppercase; letter-spacing:0.1em; }
  .dc-nav a { text-decoration:none; color:#374151; transition:color 0.2s; }
  .dc-nav a:hover { color:#ec5b13; }
  .dc-nav a.active { color:#ec5b13; border-bottom:2px solid #ec5b13; padding-bottom:2px; }
  .dc-right { display:flex; align-items:center; gap:12px; flex-shrink:0; }
  .dc-user { display:flex; align-items:center; gap:5px; font-family:'Poppins',sans-serif; font-size:0.8rem; font-weight:500; color:#E65100; white-space:nowrap; }
  .dc-logout { display:inline-flex; align-items:center; gap:6px; padding:8px 18px; background:#ec5b13; color:#fff; font-family:'Poppins',sans-serif; font-size:0.72rem; font-weight:700; text-transform:uppercase; letter-spacing:0.08em; border-radius:8px; text-decoration:none; transition:background 0.2s,transform 0.1s; box-shadow:0 2px 8px rgba(236,91,19,0.25); white-space:nowrap; }
  .dc-logout:hover { background:#E65100; transform:scale(0.98); }
  @media (max-width:900px) { .dc-nav { display:none; } .dc-user { display:none; } }
</style>
</head>
<body class="bg-background-light text-slate-900 min-h-screen">

<!-- ===== UNIFIED HEADER ===== -->

<header class="dc-header">
  <div class="dc-header-inner">
    <a href="index.php" class="dc-brand">
      <span class="material-symbols-outlined dc-brand-icon">temple_hindu</span>
      <span class="dc-brand-title">Devotee <span>Connect</span></span>
    </a>
    <nav class="dc-nav">
      <a href="index.php">Home</a>
      <a href="booking.php">Booking</a>
      <a href="calendar.php">Calendar</a>
      <a href="stays.php">Stays</a>
      <a href="transport.php">Transport</a>
      <a href="contact.php">Contact</a>
    </nav>
    <div class="dc-right">
      <a href="logout.php" class="dc-logout">
        <span class="material-symbols-outlined" style="font-size:16px;">logout</span>
        Logout
      </a>
    </div>
  </div>
</header>

<!-- ===== END HEADER ===== -->

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

<!-- Breadcrumbs -->

<nav class="flex items-center gap-2 text-sm mb-6 text-slate-500">
  <a class="hover:text-primary" href="index.php">Home</a>
  <span class="material-symbols-outlined text-xs">chevron_right</span>
  <a class="hover:text-primary" href="index.php">Temples</a>
  <span class="material-symbols-outlined text-xs">chevron_right</span>
  <span class="text-primary font-semibold"><?php echo $temple_name; ?></span>
</nav>

<!-- Hero Section -->

<section class="relative rounded-2xl overflow-hidden mb-12 shadow-2xl h-[450px]">
  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo $image_url; ?>');">
    <div class="absolute inset-0 bg-gradient-to-t from-background-dark/90 via-background-dark/20 to-transparent"></div>
  </div>
  <div class="absolute bottom-0 left-0 p-8 md:p-12 w-full flex flex-col md:flex-row md:items-end justify-between gap-6">
    <div>
      <div class="flex items-center gap-2 mb-2">
        <span class="bg-primary text-white px-3 py-1 rounded-full text-xs font-bold tracking-widest uppercase"><?php echo $badge; ?></span>
      </div>
      <h2 class="text-4xl md:text-6xl font-display text-white drop-shadow-lg"><?php echo $temple_name; ?></h2>
      <p class="text-primary font-display mt-2 text-xl italic"><?php echo $location; ?></p>
    </div>
    <button class="bg-primary hover:bg-saffron-deep text-white px-8 py-4 rounded-xl font-bold flex items-center gap-2 shadow-lg transition-all transform hover:scale-105">
      <span class="material-symbols-outlined">event_available</span>
      Book Darshan Slot
    </button>
  </div>
</section>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

  <!-- Left Column: History & Transit -->

  <div class="lg:col-span-2 space-y-12">

    <!-- Temple History -->
     
    <section class="glass-card rounded-2xl p-8 border-l-4 border-l-gold-metallic">
      <div class="flex items-center gap-3 mb-6">
        <span class="material-symbols-outlined text-gold-metallic text-3xl">history_edu</span>
        <h3 class="text-2xl font-display font-bold text-saffron-deep">Sacred Chronicles</h3>
      </div>
      <div class="text-lg leading-relaxed space-y-4 font-light">
        <p><?php echo $description; ?></p>
        <p class="italic border-l-2 border-primary/30 pl-4 py-2 text-slate-600">
          "This sacred temple stands as a timeless testament to Odisha's rich spiritual heritage, drawing devotees from across the world seeking divine blessings."
        </p>
      </div>
    </section>

    <!-- Live Transit Portal -->
    <script>var TEMPLE_ID = <?php echo intval($temple_id); ?>;</script>

    <section class="space-y-6">
      <div class="flex items-center justify-between">
        <h3 class="text-2xl font-display font-bold text-saffron-deep">Live Transit Portal</h3>
        <div class="flex items-center gap-2 text-sm text-primary font-bold">
          <span class="w-2 h-2 rounded-full bg-primary live-dot inline-block"></span>
          LIVE UPDATES
        </div>
      </div>
      <div class="bg-white rounded-3xl overflow-hidden border border-gold-metallic/30 shadow-xl relative">
        <div class="absolute left-1/2 -top-4 w-8 h-8 bg-background-light rounded-full -translate-x-1/2"></div>
        <div class="flex border-b border-slate-100 px-8 pt-8 gap-4">
          <button id="tab-bus" class="transit-tab pb-3 text-sm font-bold border-b-2 border-primary text-primary flex items-center gap-1" onclick="showTab('bus')">
            <span class="material-symbols-outlined text-base">directions_bus</span> Buses
          </button>
          <button id="tab-train" class="transit-tab pb-3 text-sm font-bold border-b-2 border-transparent text-slate-400 flex items-center gap-1" onclick="showTab('train')">
            <span class="material-symbols-outlined text-base">train</span> Trains
          </button>
        </div>
        <div id="transit-bus" class="p-6 space-y-4"></div>
        <div id="transit-train" class="p-6 space-y-4 hidden"></div>
        <div class="absolute left-1/2 -bottom-4 w-8 h-8 bg-background-light rounded-full -translate-x-1/2"></div>
      </div>
      <div class="text-right">
        <a href="transport.php" class="text-sm font-bold text-primary underline underline-offset-4 hover:text-saffron-deep">View Full Transport Hub &rarr;</a>
      </div>
    </section>

  </div>

  <!-- Right Sidebar -->
  <aside class="space-y-8">
    <div class="glass-card rounded-2xl overflow-hidden border border-gold-metallic/40 sticky top-24">
      <div class="bg-gradient-to-r from-saffron-deep to-primary p-6">
        <h3 class="text-xl font-display font-bold text-white flex items-center gap-2">
          <span class="material-symbols-outlined">hotel</span> Premium Stays
        </h3>
        <p class="text-white/80 text-sm">Divine comfort near the sanctum</p>
      </div>
      <div class="p-4 space-y-6">
        <!-- Stay Card 1 -->
        <div class="group cursor-pointer">
          <div class="relative h-40 rounded-xl overflow-hidden mb-3">
            <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAXhwXHKOo1boKEWC0Lj534JwW_p7GbH7hHKLZnneY5694tovY-RP0iAavmL6uWzFBMaTV1R61elyJpXfezDP0M21SKDT-xgyAii5N0q0-pXw8M1a6kQjeuVLHGK-YHLFpYUpfim8whBottlxumKcTdKr0G2GmSuiGse7fylQ-vJ74f_FdDMny2A2fQcwmqcDZruUmmJDWt4H0haXWnDnGVOaex2-t9aTPgRVcJLOnonfTHmVmiwM5R_bXE5YVaXiRzf-EF6s1NI6g" alt="Hotel"/>
            <div class="absolute top-2 right-2 bg-white/90 px-2 py-1 rounded text-xs font-bold text-saffron-deep">4.8 ★</div>
          </div>
          <h4 class="font-bold font-display text-lg text-slate-800">Temple View Residency</h4>
          <p class="text-xs text-slate-500 flex items-center gap-1 mb-2"><span class="material-symbols-outlined text-sm">location_on</span>500m from Temple</p>
          <div class="flex items-center justify-between">
            <span class="text-xl font-bold text-primary">₹1,499/night</span>
            <button class="text-xs font-bold text-gold-metallic border border-gold-metallic px-3 py-1.5 rounded-lg hover:bg-gold-metallic hover:text-white transition-colors">View Details</button>
          </div>
        </div>
        <div class="border-b border-slate-200"></div>
        <!-- Stay Card 2 -->
        <div class="group cursor-pointer">
          <div class="relative h-40 rounded-xl overflow-hidden mb-3">
            <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2XXXHgYMR8eXbZWUCfFoD3wh-fr8KJwl1eIDjYnlx285SivQjTrIsRhXuMv5OLev2VA86wgRZgmCaQEu3gB1JMy7yRsY50TlmUYxhD805fBhlyJWJkS7sbwoCvfU5eQq4aL2lx-QeUQoTh9h5Vw_bwTytQfJDIL5q-ZfTy2G4Z6kEZ_wLwWSmLW9X8wRcW1GMM0iWZQgWFn3LNjQW6LaKxB-FNy51JovSVSTZ5B1t9ft7LRSAGxqw7VYXilCDpZEtIN9r0qPI-cM" alt="Hotel"/>
            <div class="absolute top-2 right-2 bg-white/90 px-2 py-1 rounded text-xs font-bold text-saffron-deep">4.5 ★</div>
          </div>
          <h4 class="font-bold font-display text-lg text-slate-800">Heritage Pilgrim House</h4>
          <p class="text-xs text-slate-500 flex items-center gap-1 mb-2"><span class="material-symbols-outlined text-sm">location_on</span>1.2km from Temple</p>
          <div class="flex items-center justify-between">
            <span class="text-xl font-bold text-primary">₹899/night</span>
            <button class="text-xs font-bold text-gold-metallic border border-gold-metallic px-3 py-1.5 rounded-lg hover:bg-gold-metallic hover:text-white transition-colors">View Details</button>
          </div>
        </div>
        <button class="w-full py-4 bg-slate-100 rounded-xl font-bold text-sm text-slate-600 hover:bg-primary/10 hover:text-primary transition-colors">View All Accommodations</button>
      </div>
    </div>

    <!-- Devotee Tip -->
    <div class="bg-saffron-deep rounded-2xl p-6 text-white shadow-lg overflow-hidden relative">
      <span class="material-symbols-outlined absolute -right-4 -bottom-4 text-white/10 text-9xl">info</span>
      <h4 class="text-lg font-display font-bold mb-4 flex items-center gap-2">
        <span class="material-symbols-outlined">lightbulb</span> Devotee Tip
      </h4>
      <p class="text-sm leading-relaxed mb-4 text-white/90">
        The early morning Mangala Aarti at 4:30 AM is the most spiritually significant. We recommend booking your slot at least 48 hours in advance.
      </p>
      <a class="text-sm font-bold underline decoration-gold-metallic underline-offset-4" href="#">Read Full Guidelines</a>
    </div>
  </aside>

</div>
</main>

<!-- Footer -->
<footer class="mt-20 border-t border-gold-metallic/20 py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 text-center">
    <div class="flex justify-center items-center gap-4 mb-8">
      <span class="material-symbols-outlined text-primary text-3xl">temple_hindu</span>
      <h2 class="text-2xl font-bold font-display text-saffron-deep">Devotee Connect</h2>
    </div>
    <p class="text-slate-500 max-w-2xl mx-auto mb-8">Empowering your spiritual journey with seamless technology and ancient wisdom.</p>
    <div class="flex justify-center gap-8 mb-8 font-medium">
      <a class="hover:text-primary" href="#">About Us</a>
      <a class="hover:text-primary" href="#">Guidelines</a>
      <a class="hover:text-primary" href="#">Support</a>
      <a class="hover:text-primary" href="contact.php">Contact</a>
    </div>
    <p class="text-xs text-slate-400">© 2024 Devotee Connect. All spiritual rights reserved.</p>
  </div>
</footer>

<!-- Transit Data Script -->
<script>
var TRANSIT = {
  1: {
    buses: [
      { name:"Puri Jagannath Express",   from:"Bhubaneswar", dep:"06:00", arr:"07:30", freq:"Every 30 min", status:"ontime"  },
      { name:"Konark–Puri Pilgrim Link", from:"Konark",      dep:"07:00", arr:"08:00", freq:"Hourly",       status:"ontime"  },
      { name:"Berhampur Puri Fast",      from:"Berhampur",   dep:"05:45", arr:"09:00", freq:"3 trips/day",  status:"delayed", delay:15 },
      { name:"Cuttack Puri Deluxe",      from:"Cuttack",     dep:"06:30", arr:"08:30", freq:"Every 1 hr",   status:"ontime"  },
    ],
    trains: [
      { name:"Purushottam Express", number:"12801", from:"Bhubaneswar", dep:"06:10", arr:"07:10", platform:"1", status:"ontime"  },
      { name:"Jagannath Express",   number:"18010", from:"Howrah",      dep:"08:45", arr:"15:30", platform:"2", status:"delayed", delay:35 },
      { name:"Dhauli Express",      number:"12821", from:"Bhubaneswar", dep:"07:15", arr:"08:15", platform:"4", status:"ontime"  },
      { name:"Puri Passenger",      number:"58001", from:"Bhubaneswar", dep:"06:40", arr:"08:35", platform:"1", status:"delayed", delay:20 },
      { name:"Jan Shatabdi Express",number:"12073", from:"Howrah",      dep:"06:15", arr:"12:55", platform:"3", status:"ontime"  },
    ]
  },
  2: {
    buses: [
      { name:"Konark Pilgrim Shuttle",  from:"Puri",        dep:"07:00", arr:"08:15", freq:"Every 45 min", status:"ontime"  },
      { name:"Bhubaneswar–Konark Link", from:"Bhubaneswar", dep:"08:00", arr:"10:00", freq:"Every 1 hr",   status:"ontime"  },
      { name:"Cuttack–Konark Express",  from:"Cuttack",     dep:"07:30", arr:"10:30", freq:"3 trips/day",  status:"delayed", delay:20 },
      { name:"Beach Route Shuttle",     from:"Puri Beach",  dep:"09:00", arr:"09:45", freq:"Hourly",       status:"ontime"  },
    ],
    trains: [
      { name:"Konark Express",        number:"12895", from:"Bhubaneswar", dep:"17:25", arr:"18:30", platform:"5", status:"ontime"  },
      { name:"Purushottam Express",   number:"12801", from:"Bhubaneswar", dep:"06:10", arr:"07:10", platform:"1", status:"ontime"  },
      { name:"Puri Rajdhani Express", number:"12993", from:"Puri",        dep:"14:25", arr:"15:10", platform:"6", status:"delayed", delay:15 },
    ]
  },
  3: {
    buses: [
      { name:"City Circular Service",   from:"Bhubaneswar Stn", dep:"06:00", arr:"06:20", freq:"Every 15 min", status:"ontime"  },
      { name:"Puri–Bhubaneswar Deluxe", from:"Puri",            dep:"05:30", arr:"07:00", freq:"Every 30 min", status:"ontime"  },
      { name:"Cuttack City Link",       from:"Cuttack",         dep:"07:30", arr:"08:30", freq:"Every 30 min", status:"delayed", delay:10 },
      { name:"Airport Shuttle",         from:"Airport",         dep:"07:00", arr:"07:25", freq:"Every 1 hr",   status:"ontime"  },
    ],
    trains: [
      { name:"Rajdhani Express",   number:"12442", from:"New Delhi", dep:"17:00", arr:"07:20", platform:"3", status:"ontime"  },
      { name:"Konark Express",     number:"12895", from:"Puri",      dep:"15:30", arr:"17:25", platform:"5", status:"ontime"  },
      { name:"Rajya Rani Express", number:"18116", from:"Cuttack",   dep:"09:00", arr:"09:40", platform:"2", status:"ontime"  },
      { name:"Aranyak Express",    number:"12887", from:"Sambalpur", dep:"05:30", arr:"10:30", platform:"3", status:"delayed", delay:20 },
      { name:"Shatabdi Express",   number:"12073", from:"Howrah",    dep:"06:15", arr:"12:00", platform:"4", status:"ontime"  },
    ]
  }
};

function statusBadge(s, delay) {
  if (s === "ontime")
    return '<span style="font-size:11px;font-weight:700;color:#16a34a;background:#dcfce7;padding:3px 8px;border-radius:999px;display:inline-flex;align-items:center;gap:4px;"><span style="width:6px;height:6px;border-radius:50%;background:#16a34a;display:inline-block;"></span>On Time</span>';
  return '<span style="font-size:11px;font-weight:700;color:#ea580c;background:#ffedd5;padding:3px 8px;border-radius:999px;display:inline-flex;align-items:center;gap:4px;"><span style="width:6px;height:6px;border-radius:50%;background:#ea580c;display:inline-block;"></span>+' + (delay||0) + ' min</span>';
}

function buildRow(icon, title, sub, dep, arr, status, delay) {
  return '<div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-radius:12px;gap:12px;">' +
    '<div style="display:flex;align-items:center;gap:12px;">' +
      '<div style="width:48px;height:48px;border-radius:12px;background:rgba(236,91,19,0.1);border:1px solid rgba(236,91,19,0.2);display:flex;align-items:center;justify-content:center;color:#ec5b13;flex-shrink:0;">' +
        '<span class="material-symbols-outlined">' + icon + '</span>' +
      '</div>' +
      '<div><div style="font-weight:700;font-size:14px;">' + title + '</div>' +
      '<div style="font-size:11px;color:#64748b;">' + sub + '</div></div>' +
    '</div>' +
    '<div style="text-align:right;flex-shrink:0;">' +
      '<div style="font-family:\'Cinzel\',serif;font-weight:700;color:#ec5b13;font-size:15px;">' + dep + ' → ' + arr + '</div>' +
      statusBadge(status, delay) +
    '</div>' +
  '</div>';
}

function showTab(tab) {
  document.getElementById('transit-bus').classList.toggle('hidden', tab !== 'bus');
  document.getElementById('transit-train').classList.toggle('hidden', tab !== 'train');
  ['bus','train'].forEach(function(t) {
    var btn = document.getElementById('tab-' + t);
    if (t === tab) {
      btn.style.borderBottomColor = '#ec5b13'; btn.style.color = '#ec5b13';
    } else {
      btn.style.borderBottomColor = 'transparent'; btn.style.color = '#94a3b8';
    }
  });
}

(function() {
  var data = TRANSIT[TEMPLE_ID];
  var busEl = document.getElementById('transit-bus');
  var trainEl = document.getElementById('transit-train');
  if (!data) {
    busEl.innerHTML = '<p style="color:#94a3b8;font-style:italic;font-size:13px;">No bus data available.</p>';
    trainEl.innerHTML = '<p style="color:#94a3b8;font-style:italic;font-size:13px;">No train data available.</p>';
    return;
  }
  busEl.innerHTML = data.buses.map(function(b, i) {
    return buildRow('directions_bus', b.name, 'From: ' + b.from + ' • ' + b.freq, b.dep, b.arr, b.status, b.delay) +
      (i < data.buses.length-1 ? '<hr style="border:none;border-top:1px dashed #e2e8f0;margin:0 16px;"/>' : '');
  }).join('');
  trainEl.innerHTML = data.trains.map(function(t, i) {
    return buildRow('train', t.name + ' (' + t.number + ')', 'From: ' + t.from + ' • Platform ' + t.platform, t.dep, t.arr, t.status, t.delay) +
      (i < data.trains.length-1 ? '<hr style="border:none;border-top:1px dashed #e2e8f0;margin:0 16px;"/>' : '');
  }).join('');
})();
</script>

</body>
</html>