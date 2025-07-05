
<?php 
session_start();
if(empty($_SESSION['email'])):
    header('Location:user-login.php');
endif; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>User services | Sundu Cabs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="style1.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-yellow-100 via-pink-100 to-red-100 min-h-screen">

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
      <a href="user-dashboard.php" class="block px-3 py-2 text-black font-semibold hover:underline"> Home</a>
      <a href="user-services.php" class="block px-3 py-2 text-black font-semibold hover:underline">Services</a>

      <a href="book.php" class="block px-3 py-2 text-black font-semibold hover:underline">Book Trip</a>

      <a href="mybookings.php" class="block px-3 py-2 text-black font-semibold hover:underline">My Bookings</a>

     <a href="user-logoutprocess.php" ><button  class="bg-black text-white px-4 py-2 rounded hover:bg-red-700">logout</button></a>
    </div>
  </div>

  <!-- Mobile Menu Dropdown -->
  <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-2 text-center">
    <a href="user-dashboard.php" class="block px-4 py-2 text-black font-semibold hover:underline"> Home</a>
    <a href="user-services.php" class="block px-4 py-2 text-black font-semibold hover:underline">Services</a>

    <a href="book.php" class="block px-4 py-2 text-black font-semibold hover:underline">Book Trip</a>
    <a href="mybookings.php" class="block px-4 py-2 text-black font-semibold hover:underline">My Bookings</a>
    
    <a href="user-logoutprocess.php"> <button  class="w-full bg-black text-white px-4 py-2 rounded hover:bg-red-700">logout</button></a>
  </div>
</nav>


 <!-- Services -->
  <section class="services">
    <h2>Our Services</h2>
    <div class="service-cards">
      <div class="card">
        <img src="images/b1.jpeg" alt="One Way Cab">
        <h3>One Way Cabs</h3>
        <p>Low-cost one-way cab service across Tamil Nadu, Bangalore, and Pondicherry.</p>
      </div>
      <div class="card">
        <img src="images/air.jpeg" alt="Airport Cab">
        <h3>Airport Cabs</h3>
        <p>24/7 airport pickup & drop taxi service at affordable rates across South India.</p>
      </div>
      <div class="card">
        <img src="images/b1.jpeg" alt="Outstation Cab">
        <h3>Outstation Cabs</h3>
        <p>Outstation one-way & round-trip cabs available 24/7 at affordable prices.</p>
      </div>
    </div>
  </section>


    <script>
  function toggleDropdown() {
    const dropdown = document.getElementById("myDropdown1");
    dropdown.classList.toggle("hidden");
  }

  // Optional: Hide when clicking outside
  window.addEventListener("click", function (e) {
    const button = document.getElementById("mybtn1");
    const dropdown = document.getElementById("myDropdown1");
    if (!button.contains(e.target) && !dropdown.contains(e.target)) {
      dropdown.classList.add("hidden");
    }
  });
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