<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sundu Cabs</title>
  <link rel="stylesheet" href="style1.css">
    <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
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
      <a href="#home" class="block px-3 py-2 text-black font-semibold hover:underline">Home</a>
      <a href="#form-section" class="block px-3 py-2 text-black font-semibold hover:underline">Services</a>
      <a href="#about" class="block px-3 py-2 text-black font-semibold hover:underline">About</a>
      <a href="#tariff" class="block px-3 py-2 text-black font-semibold hover:underline">Tariffs</a>
      <a href="#contact" class="block px-3 py-2 text-black font-semibold hover:underline">Contact </a>

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


  <!-- Hero Section -->
  <header class="hero" style="background-image: url('images/img1.jpg'); background-size: cover;" id="home">
    <h1 style="text-shadow: 0 0 3px black; font-size: 40px; font-weight: 800;">Sundu Cabs Pvt Ltd</h1>
    <p>24/7 Trusted Taxi Service</p>
  </header>
 <!-- <h2>Our Services</h2> -->

   <div class="flex items-center justify-center min-h-screen" id="form-section"><br><br>
 <!-- <h2>Our Services</h2> -->

    <!-- <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-lg"> -->
      
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
      
    </div>
  <!-- </div> -->


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


<section class="about-section" >
 <div class="contact-container" >
        <div class="about" id="about">
         <h3>Sundu cabs</h3>
         <h1>About Us</h1>
         <p>
           Sundu Pvt Ltd is one of the growing and emerging taxi service providers in South India. We provide 24/7 cab service at the lowest prices in Tamil Nadu, Bangalore and Pondicherry. Book the cheapest & best cab with Nandha Cabs and get 10% offer.</p>
           <br>
           <div class="about-ul">
          <ul>
            <li> <i style="font-size:24px" class="fa">&#xf046;</i>  Luxury Cars</li>
            <li> <i style="font-size:24px" class="fa">&#xf046;</i>  No Cancellation Fee</li>
            <li> <i style="font-size:24px" class="fa">&#xf046;</i>  24/7 Services </li>
            <li> <i style="font-size:24px" class="fa">&#xf046;</i>  Experienced Drivers</li>
            <li> <i style="font-size:24px" class="fa">&#xf046;</i>  Experienced Drivers</li>
            <li> <i style="font-size:24px" class="fa">&#xf046;</i>  Lowest Price</li>
            </ul>
        <br>
    
          
          
          </div>
        </div>
        <div class="carimg">
              <img src="images/n3.jpeg" alt="">
        </div>
    </div>

<section class="tariff" id="tariff"> 

    <!--<div class="seeour">-->
        <center>
        <h3 class="see">SeeOur</h3>
        <h1 class="tar">Tariffs</h1>
        </center>
            <div class="grid-container">
                
             
              <div class="sedan">
                <img src="images/se1.jpeg">
                <center>
                 <a href="user-login.php">
                   <button  >BOOK NOW</button>  
                 </a>
                  </center>
                  
                   
              </div>
              <div class="suv">
                <img src="images/suv1.jpeg">
                <center>
                 <a href="user-login.php">
                   <button >BOOK NOW</button>  
                 </a>
                  </center>
                    
              </div>
              <div class="innova">
                <img src="images/wp3119944.webp">
                <center>
                <a href="user-login.php">
                   <button >BOOK NOW</button>  
                 </a>
                </center>
              </div>
            </div>
        <br>
        <br>
        <br>
        <a name="terms"></a>
        <br>
        <div class="termhead">
          <center>
           <h1>Terms & Conditions</h1>
           </center>
        </div>
        
        <div class="term-container">
          <div class="price-left">
              <ul>
                <li><i style="font-size:24px" class="fa">&#xf192;</i>Minimum one way Drop 130 km for all vechicle.</li>
                <li><i style="font-size:24px" class="fa">&#xf192;</i> Minimum Round trip 250 km per day.</li>
                <li><i style="font-size:24px" class="fa">&#xf192;</i> Drive allowance-Rs.300/- for sedan. Rs.400 for suv.Rs.500 for innove. Rs.600 for above 400 Kms</li>
                <li><i style="font-size:24px" class="fa">&#xf192;</i> Night Charge Addition Rs.300/-</li>


              </ul>
          </div>
          <div class="price-right">
               <ul>
                <li><i style="font-size:24px" class="fa">&#xf192;</i>  Hill station charges Rs.400 for mini and sedan,Rs.600/- for SUV Not applicable for Round trips.</li>
                <li><i style="font-size:24px" class="fa">&#xf192;</i>  Extra hour charges Rs.250/-for Mini and sedan,Rs.400/- for SUV</li>
                <li><i style="font-size:24px" class="fa">&#xf192;</i>  Toll,State,tax,permit,parking will be extra.</li>

               </ul>
          </div>
        </div>

</section>

<section class="contect" id="contact"><br><br>

 <div class="termhead">
          <center>
           <h1>Contact Us</h1>
           </center>
        </div>
   <div class="container-contact">
        <img src="images/new1.jpeg">
        
        <div class="home">
            <center>
            <i style="font-size:55px; color:red; padding: 10px;" class="fa">&#xf015;</i>
            </center>
            <h1>Sundu Cabs Pvt Ltd</h1>
            <p> Ground Floor,Plot No.12 PART,<br>V.P North Street,<br>watrap-626132,<br>Tamil Nadu.</p>
        </div>
        <div class="phone" style="gap: 20px;">
           <div class="mail">
         
              <a href="mailto:senthilsasi59@gmail.com"> <i class="fa fa-phone" style="font-size:30px; justify-content: center; justify-items: center;">   </i></a>
           
               <h3>6381200750 </h3>

            </div>
            <div class="mail">
         
              <a href="mailto:senthilsasi59@gmail.com"><i style="font-size:50px; color:#5f9df7" class="fa">&#xf0e0;</i></a>
                <h3>sunducabs@gmail.com</h3>

            </div>
          </div>
    </div>
</section>
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

  <script>
    function toggleMenu() {
      document.getElementById("nav-links").classList.toggle("show");
    }
  </script>
  <script>
const singleTripBtn = document.getElementById("singleTripBtn");
    const roundTripBtn = document.getElementById("roundTripBtn");
    const singleTripForm = document.getElementById("singleTripForm");
    const roundTripForm = document.getElementById("roundTripForm");

    singleTripBtn.addEventListener("click", () => {
      singleTripForm.classList.remove("hidden");
      roundTripForm.classList.add("hidden");

      singleTripBtn.classList.add("active-btn");
      singleTripBtn.classList.remove("inactive-btn");
      roundTripBtn.classList.add("inactive-btn");
      roundTripBtn.classList.remove("active-btn");
    });

    roundTripBtn.addEventListener("click", () => {
      roundTripForm.classList.remove("hidden");
      singleTripForm.classList.add("hidden");

      roundTripBtn.classList.add("active-btn");
      roundTripBtn.classList.remove("inactive-btn");
      singleTripBtn.classList.add("inactive-btn");
      singleTripBtn.classList.remove("active-btn");
    });

    // Default load: show single trip form
    singleTripBtn.click();


  </script>
    
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
