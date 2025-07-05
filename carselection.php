<?php 
session_start();
if(empty($_SESSION['email'])):
    header('Location:user-login.php');
endif; 

?>

<!-- select-car.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Select Your Car - Sundu Cabs</title>
  <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-to-br from-yellow-100 via-pink-200 to-red-100 p-6">
<div class="text-center mb-8">
    <h3 class="text-xl text-gray-600 font-semibold">See Our</h3>
    <h1 class="text-4xl font-bold text-red-600">Tariffs</h1>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
    <!-- Sedan -->
    <div class="bg-white shadow-lg rounded-xl p-4">
      <img src="images/se1.jpeg" alt="Sedan" class="rounded-lg mb-3 h-48 w-full object-cover" />
      <h2 class="text-xl font-bold text-gray-800 text-center">Sedan</h2>
      <p class="text-center text-gray-600">₹12/km - AC Comfort</p>
      <form action="booking-summary.php" method="POST" class="mt-4 text-center">
        <input type="hidden" name="car" value="Sedan">
        <input type="hidden" name="price" value="12/km">
        <button type="submit" class="bg-red-600 text-white px-5 py-2 rounded-full hover:bg-red-700">Book Now</button>
      </form>
    </div>

  

    <!-- SUV -->
    <div class="bg-white shadow-lg rounded-xl p-4">
      <img src="images/suv1.jpeg" alt="SUV" class="rounded-lg mb-3 h-48 w-full object-cover" />
      <h2 class="text-xl font-bold text-gray-800 text-center">SUV</h2>
      <p class="text-center text-gray-600">₹15/km - Spacious & Strong</p>
      <form action="booking-summary.php" method="POST" class="mt-4 text-center">
        <input type="hidden" name="car" value="SUV">
        <input type="hidden" name="price" value="15/km">
        <button type="submit" class="bg-red-600 text-white px-5 py-2 rounded-full hover:bg-red-700">Book Now</button>
      </form>
    </div>



    <!-- Innova -->
    <div class="bg-white shadow-lg rounded-xl p-4">
      <img src="images/wp3119944.webp" alt="Innova" class="rounded-lg mb-3 h-48 w-full object-cover" />
      <h2 class="text-xl font-bold text-gray-800 text-center">Innova</h2>
      <p class="text-center text-gray-600">₹18/km - Premium & Family</p>
      <form action="booking-summary.php" method="POST" class="mt-4 text-center">
        <input type="hidden" name="car" value="Innova">
        <input type="hidden" name="price" value="18/km">
        <button type="submit" class="bg-red-600 text-white px-5 py-2 rounded-full hover:bg-red-700">Book Now</button>
      </form>
    </div>
  </div>
</body>
</html>
