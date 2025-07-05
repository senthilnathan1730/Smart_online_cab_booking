<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Login/Register | Santhi Cabs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style1.css">
  
  <style>
    .hidden-form {
      display: none;
    }
  </style>
</head>
<body class="bg-gradient-to-br from-yellow-100 via-red-100 to-pink-100 min-h-screen">

<nav class="bg-white shadow-md p-4">
  <div class="max-w-7xl mx-auto flex justify-between items-center">
    <!-- Logo -->
    <h1 class="text-xl font-bold text-black">Sundu Cabs</h1>

    <!-- Hamburger Button -->
    <button id="menu-toggle" class="md:hidden text-black focus:outline-none">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <!-- Links -->
    <div id="menu" class="hidden md:flex md:space-x-4 md:items-center mt-4 md:mt-0">
      <a href="index.php" class="block px-3 py-2 text-black font-semibold hover:underline">Home</a>
      <a href="index.php#form-section" class="block px-3 py-2 text-black font-semibold hover:underline">Services</a>
      <a href="index.php#about" class="block px-3 py-2 text-black font-semibold hover:underline">About</a>
      <a href="index.php#tariff" class="block px-3 py-2 text-black font-semibold hover:underline">Tariffs</a>
      <a href="index.php#contact" class="block px-3 py-2 text-black font-semibold hover:underline">Contact </a>

     <a href="user-login.php" ><button onclick="logout()" class="bg-black text-white px-4 py-2 rounded hover:bg-yellow-700">Sign In</button></a>
    </div>
  </div>

  <!-- Mobile Menu Dropdown -->
  <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-2">
    <a href="book.html" class="block px-4 py-2 text-black font-semibold hover:underline">Book Trip</a>
    <a href="bookings.html" class="block px-4 py-2 text-black font-semibold hover:underline">My Bookings</a>
    <a href="services.html" class="block px-4 py-2 text-black font-semibold hover:underline">Services</a>
    
    <a href="user-login.php"> <button onclick="logout()" class="w-full bg-black text-white px-4 py-2 rounded hover:bg-yellow-700">Sign In</button></a>
  </div>
</nav>
<br>

  <div class="flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-lg">

      <!-- Heading -->
      <h2 class="text-3xl font-bold text-center text-red-600 mb-6" id="form-title">Sign In</h2>

      <!-- Login Form -->
      <form id="loginForm" action="user-loginprocess.php" method="POST" class="space-y-5 hidden-form">
        <div>
          <label class="block mb-1 text-gray-700 font-semibold">Email</label>
          <input type="email" name="email" required placeholder="you@example.com"
            class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" />
        </div>
        <div>
          <label class="block mb-1 text-gray-700 font-semibold">Password</label>
          <input type="password" name="password" required placeholder="••••••••"
            class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" />
        </div>
        <button type="submit" name="login"
          class="w-full bg-red-600 text-white py-3 rounded-lg font-bold hover:bg-red-700 transition duration-300">Login</button>
        <p class="text-center text-sm text-gray-600 mt-4">
          Don't have an account?
          <a href="#" onclick="toggleForms(true)" class="text-red-600 hover:underline">Register</a>
        </p>
      </form>

      <!-- Register Form -->
      <form id="registerForm" action="user-registerprocess.php" method="POST" class="space-y-5 ">
        <div>
          <label class="block mb-1 text-gray-700 font-semibold">Full Name</label>
          <input type="text" name="fullname" required placeholder="Your Name"
            class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" />
        </div>
        <div>
          <label class="block mb-1 text-gray-700 font-semibold">Email</label>
          <input type="email" name="email" required placeholder="you@example.com"
            class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" />
        </div>
        <div>
          <label class="block mb-1 text-gray-700 font-semibold">Phone Number</label>
          <input type="tel" name="phone" required placeholder="9876543210"
            class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" />
        </div>
        <div>
          <label class="block mb-1 text-gray-700 font-semibold">Password</label>
          <input type="password" name="password" required placeholder="••••••••"
            class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" />
        </div>
        <!-- <div>
          <label class="block mb-1 text-gray-700 font-semibold">Confirm Password</label>
          <input type="password" name="confirm_password" required placeholder="••••••••"
            class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-red-400" />
        </div> -->
        <button type="submit" name="register"
          class="w-full bg-red-600 text-white py-3 rounded-lg font-bold hover:bg-red-700 transition duration-300">Register</button>
        <p class="text-center text-sm text-gray-600 mt-4">
          Already have an account?
          <a href="#" onclick="toggleForms(false)" class="text-red-600 hover:underline">Login</a>
        </p>
      </form>

    </div>
  </div><br>

 <!-- Footer -->
  <footer>
    <div class="footer-content">
      <h3>Sundu Cabs Pvt Ltd</h3>
      <p>V.P North Street, Watrap-626132, Tamil Nadu</p>
      <p>Email: sunducabs@gmail.com | Phone: 6381200750</p>
      <div class="social-icons">
        <a href="#"><i class="fa fa-facebook-square"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-telegram"></i></a>
      </div>
    </div>
    <p class="copy">&copy; 2025 Sundu Cabs. All rights reserved.</p>
  </footer>

  <!-- Script -->
  <script>
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    const formTitle = document.getElementById('form-title');

    function toggleForms(showRegister) {
      if (showRegister) {
        loginForm.classList.add('hidden-form');
        registerForm.classList.remove('hidden-form');
        formTitle.textContent = "Sign in";
      } else {
        registerForm.classList.add('hidden-form');
        loginForm.classList.remove('hidden-form');
        formTitle.textContent = "Login";
      }
    }
  </script>

<script>
  const toggle = document.getElementById("menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");

  toggle.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
  });
</script>

</body>
</html>
