<?php 
session_start();
if(empty($_SESSION['email'])):
    header('Location:user-login.php');
endif; 

?>
<?php
			 include 'dbconnection.php';
			$sql = "SELECT * FROM user_register WHERE email = '{$_SESSION['email']}'";
			 $query = mysqli_query($connec,$sql);
			 $num = mysqli_num_rows($query);
			 if($num>0){
				while($result=mysqli_fetch_assoc($query)){
				  
            $name =$result['fullname'];
            $email = $result['email'];
          
				     }
				   }
?>	   


<!-- dashboard.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>User services | Sundu Cabs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    /* .container-slide,
.container-slide1 {
  width: 80%;
  overflow: hidden;
  position: relative;
  margin: 1rem auto;
  border-radius: 1rem;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
  background: #fff;
}

.wallpaper,
.wallpaper1 {
  display: flex;
  width: max-content;
  animation: slide 30s linear infinite;
}

.wallpaper img,
.wallpaper1 img {
  width: 100%;
  max-width: 300px;
  height: 180px;
  object-fit: cover;
  border-radius: 0.75rem;
  margin-right: 1rem;
  transition: transform 0.3s ease-in-out;
}

.wallpaper img:hover,
.wallpaper1 img:hover {
  transform: scale(1.05);
  cursor: pointer;
}

@keyframes slide {
  0% { transform: translateX(0); }
  100% { transform: translateX(-100%); }
}

/* Optional: Make it scrollable on small screens */
/* @media (max-width: 768px) {
  .wallpaper,
  .wallpaper1 {
    animation: none;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
  }

  .wallpaper img,
  .wallpaper1 img {
    scroll-snap-align: start;
  }
}  */


.container-slide {
  width: 90%;
  overflow: hidden;
  border-radius: 1rem;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  margin: 2rem auto;
  background: white;
}

.wallpaper {
  display: flex;
  animation: scrollSlide 40s linear infinite;
}

.wallpaper img {
  width: 300px;
  height: 200px;
  object-fit: cover;
  border-radius: 1rem;
  margin-right: 1rem;
  transition: transform 0.3s ease-in-out;
}

.wallpaper img:hover {
  transform: scale(1.05);
  cursor: pointer;
}

/* Keyframes for smooth looping */
@keyframes scrollSlide {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); } /* Half because we repeat images */
}

/* Mobile responsive */
@media (max-width: 768px) {
  .wallpaper {
    animation: none;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
  }

  .wallpaper img {
    min-width: 80%;
    scroll-snap-align: start;
  }
}

  </style>
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
      <a href="user-dashboard.php" class="block px-3 py-2 text-black font-semibold hover:underline">Home</a>
      <a href="user-services.php" class="block px-3 py-2 text-black font-semibold hover:underline">Services</a>

      <a href="book.php" class="block px-3 py-2 text-black font-semibold hover:underline">Book Trip</a>

      <a href="mybookings.php" class="block px-3 py-2 text-black font-semibold hover:underline">My Bookings</a>

     <a href="user-logoutprocess.php" ><button  class="bg-black text-white px-4 py-2 rounded hover:bg-red-700">logout</button></a>
    </div>
  </div>

  <!-- Mobile Menu Dropdown -->
  <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-2 text-center">
    <a href="user-dashboard.php" class="block px-4 py-2 text-black font-semibold hover:underline">Home</a>
    <a href="user-services.php" class="block px-4 py-2 text-black font-semibold hover:underline">Services</a>

    <a href="book.php" class="block px-4 py-2 text-black font-semibold hover:underline">Book Trip</a>
    <a href="mybookings.php" class="block px-4 py-2 text-black font-semibold hover:underline">My Bookings</a>
    
    <a href="user-logoutprocess.php"> <button  class="w-full bg-black text-white px-4 py-2 rounded hover:bg-red-700">logout</button></a>
  </div>
</nav>


  <!-- User Info -->
  <section class="max-w-2xl mx-auto bg-white p-8 mt-10 rounded-xl shadow-xl text-center">
    <h2 class="text-3xl font-bold text-gray-700 mb-2">  <div class="text-black">
            	<?php
                    		echo "<h3>welcome, ".$name."</h3>";
                    	?>
             </div>
    <p class="text-yellow-400">Thank you for choosing Sundu Cabs. Get ready for your first trip.</p>
    <!-- <img src="images/young-boy.png" class="mx-auto mt-6 w-24 h-24 rounded-full border-4 border-red-300" /> -->
  </section>


<section>


  <div class="container-slide">
  <div class="wallpaper">
    <img src="images/slide1.jpeg">

    <img src="images/slide6.jpg">

    <img src="images/slide2.jpeg">
    <img src="images/slider3.jpeg">
    <img src="images/slide4.jpeg">
    <img src="images/slide5.jpeg">
    
    <!-- Duplicated for seamless loop -->
    <img src="images/slide1.jpeg">
     
    <img src="images/slide6.jpg">

    <img src="images/slide2.jpeg">
    <img src="images/slider3.jpeg">
    <img src="images/slide4.jpeg">
    <img src="images/slide5.jpeg">
  </div>
</div>

           
</section>

<footer class="bg-black text-white mt-10">
  <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
    
    <!-- Brand Info -->
    <div>
      <h2 class="text-xl font-bold text-yellow-400">Sundu Cabs</h2>
      <p class="mt-2 text-sm text-gray-300">Your trusted partner for safe, fast, and reliable rides across Tamil Nadu and beyond.</p>
    </div>

    <!-- Quick Links -->
    <div>
      <h3 class="text-lg font-semibold mb-3">Quick Links</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="dashboard.php" class="hover:underline">Dashboard</a></li>
        <li><a href="book.html" class="hover:underline">Book a Ride</a></li>
        <li><a href="my-bookings.php" class="hover:underline">My Bookings</a></li>
        <li><a href="logout.php" class="hover:underline text-red-400">Logout</a></li>
      </ul>
    </div>

    <!-- Contact -->
    <div>
      <h3 class="text-lg font-semibold mb-3">Contact Us</h3>
      <p class="text-sm"> Watrap, Tamil Nadu</p>
      <p class="text-sm"> +91 98765 43210</p>
      <p class="text-sm"> support@sunducabs.in</p>
    </div>
  </div>

  <div class="bg-black text-center py-4 text-xs text-gray-300 border-t border-gray-700">
    © <?= date("Y") ?> Sundu Cabs. All rights reserved.
  </div>
</footer>



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
