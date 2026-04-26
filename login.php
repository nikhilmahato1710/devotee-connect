<?php
// login.php — DO NOT add auth_check here
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Already logged in? Skip login page
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: index.php");
    exit();
}
// Map URL error codes to messages
$errors = [
    'wrong_password' => 'Incorrect password. Please try again.',
    'user_not_found' => 'No account found with this email address.',
    'empty_fields'   => 'Please enter both your email and password.',
    'session_expired'=> 'Your session expired. Please log in again.',
];
$error_msg = isset($_GET['error']) ? ($errors[$_GET['error']] ?? '') : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login | Devotee Connect</title>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&family=Poppins:wght@300;400;500;600&family=Public+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
  tailwind.config = {
    darkMode: "class",
    theme: {
      extend: {
        colors: {
          "primary":          "#ec5b13",
          "background-light": "#f8f6f6",
          "background-dark":  "#221610",
          "saffron":          "#FF9933",
          "deep-saffron":     "#E65100",
          "metallic-gold":    "#D4AF37",
        },
        fontFamily: {
          "display": ["Public Sans", "sans-serif"],
          "cinzel":  ["Cinzel",      "serif"],
          "poppins": ["Poppins",     "sans-serif"],
        },
        borderRadius: {"DEFAULT":"0.25rem","lg":"0.5rem","xl":"0.75rem","full":"9999px"},
      },
    },
  }
</script>
<style>
  body { font-family: 'Poppins', sans-serif; }
  .glass-card {
    background: rgba(34, 22, 16, 0.75);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(212, 175, 55, 0.3);
  }
  /* Shake animation for error */
  @keyframes shake {
    0%,100% { transform: translateX(0); }
    20%,60%  { transform: translateX(-6px); }
    40%,80%  { transform: translateX(6px); }
  }
  .shake { animation: shake 0.4s ease; }
</style>
</head>
<body class="bg-background-dark font-poppins antialiased">
<div class="relative min-h-screen w-full flex items-center justify-center overflow-hidden">

  <!-- Background -->
  <div class="absolute inset-0 z-0">
    <div class="absolute inset-0 bg-black/50 z-10"></div>
    <div class="w-full h-full bg-center bg-no-repeat bg-cover"
         style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA-_XQ23ly0cFqX7P2X6qqPlkQAJNTdeE1ImOCG_Sfl1DxpIVl8uKBzuiD8OSHiXm6sZpCJljg_Mc9Hk4uHiBGiG5-YM47pDkeI5Nld3e3HPVf58IUTIuztHLhvXT5qlHdRYVbUP5LOxoshDWiVhlp4uXvJNjzYYSfGG25Wob-6NCSCDHGl03QyXpzH3YoYFzHYVmrgo0EY9R9-vllOTNySjvddt5vps_bNT4H23G_hYVmBGfuL5Jelpe4joCX2wa1u-d1tr_6_YT8")'>
    </div>
  </div>

  <!-- Login Card -->
  <div class="relative z-20 w-full max-w-md px-6 py-12">
    <div class="glass-card rounded-xl p-8 shadow-2xl border-t border-metallic-gold/50">

      <!-- Logo -->
      <div class="flex flex-col items-center mb-8">
        <div class="w-20 h-20 bg-primary/20 rounded-full flex items-center justify-center mb-4 border border-metallic-gold/30">
          <span class="material-symbols-outlined text-saffron text-5xl">temple_hindu</span>
        </div>
        <h1 class="font-cinzel text-3xl font-black text-white tracking-widest text-center">
          DEVOTEE <span class="text-saffron">CONNECT</span>
        </h1>
        <p class="text-primary/80 text-sm font-medium mt-2 tracking-widest uppercase">Spiritual Portal of Odisha</p>
      </div>

      <!-- ✅ ERROR MESSAGE BOX — shows only when there's an error -->
      <?php if ($error_msg): ?>
      <div class="shake mb-6 flex items-center gap-3 bg-red-500/20 border border-red-500/40 text-red-300 text-sm rounded-lg px-4 py-3">
        <span class="material-symbols-outlined text-red-400 text-base flex-shrink-0">error</span>
        <span><?php echo htmlspecialchars($error_msg); ?></span>
      </div>
      <?php endif; ?>

      <!-- Form -->
      <form action="login_process.php" method="POST" class="space-y-6">

        <!-- Email -->
        <div class="space-y-2">
          <label class="text-slate-200 text-sm font-medium ml-1 flex items-center gap-2">
            <span class="material-symbols-outlined text-xs text-saffron">mail</span>
            Email or Phone Number
          </label>
          <input
            name="email"
            type="text"
            value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
            class="w-full h-12 bg-background-dark/50 border border-slate-700/50 rounded-lg px-4 text-white placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all <?php echo $error_msg ? 'border-red-500/60' : ''; ?>"
            placeholder="devotee@jagannath.com"
          />
        </div>

        <!-- Password -->
        <div class="space-y-2">
          <div class="flex justify-between items-center">
            <label class="text-slate-200 text-sm font-medium ml-1 flex items-center gap-2">
              <span class="material-symbols-outlined text-xs text-saffron">lock</span>
              Password
            </label>
            <a class="text-xs text-saffron hover:text-deep-saffron transition-colors font-medium" href="#">Forgot Password?</a>
          </div>
          <div class="relative flex items-center">
            <input
              id="passwordInput"
              name="password"
              type="password"
              class="w-full h-12 bg-background-dark/50 border border-slate-700/50 rounded-lg px-4 text-white placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all <?php echo isset($_GET['error']) && $_GET['error'] === 'wrong_password' ? 'border-red-500/60' : ''; ?>"
              placeholder="••••••••"
            />
            <!-- Toggle password visibility -->
            <button type="button" onclick="togglePassword()"
                    class="absolute right-3 text-slate-500 hover:text-slate-300 transition-colors">
              <span id="eyeIcon" class="material-symbols-outlined text-xl">visibility</span>
            </button>
          </div>
        </div>

        <!-- Submit -->
        <button
          type="submit"
          class="w-full h-14 bg-saffron hover:bg-deep-saffron text-white font-bold rounded-lg shadow-lg shadow-deep-saffron/20 transition-all transform active:scale-[0.98] flex items-center justify-center gap-2 mt-4">
          <span>Sign In</span>
          <span class="material-symbols-outlined">login</span>
        </button>

      </form>

     

    <!-- Footer -->
    <div class="mt-6 text-center">
      <p class="text-slate-500 text-xs flex items-center justify-center gap-2">
        <span class="material-symbols-outlined text-xs">verified_user</span>
        Secure Access to Devotee Connect
      </p>
      <div class="flex justify-center gap-4 mt-3">
        <a class="text-slate-600 hover:text-slate-400 text-[10px] uppercase tracking-tighter" href="#">Terms of Service</a>
        <a class="text-slate-600 hover:text-slate-400 text-[10px] uppercase tracking-tighter" href="#">Privacy Policy</a>
      </div>
    </div>

  </div>
</div>

<script>
  // Toggle show/hide password
  function togglePassword() {
    const input = document.getElementById('passwordInput');
    const icon  = document.getElementById('eyeIcon');
    if (input.type === 'password') {
      input.type = 'text';
      icon.textContent = 'visibility_off';
    } else {
      input.type = 'password';
      icon.textContent = 'visibility';
    }
  }
</script>

</body>
</html>