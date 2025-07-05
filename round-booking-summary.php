
<?php 
session_start();
if(empty($_SESSION['email'])):
    header('Location:user-login.php');
endif; 

?>

<?php
// Start the session to get data from previous step

// Collect posted values
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION['r_car'] = $_POST['r_car'];
  $_SESSION['r_price'] = $_POST['r_price'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Confirm Your Booking | Sundu Cabs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-100 via-white to-blue-100 min-h-screen p-6">

  <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-lg mt-10 text-center">
    <h1 class="text-3xl font-bold text-yellow-600 mb-4">📝 Confirm Your Booking</h1>
    <p class="text-lg text-gray-700 mb-8">Please review your booking details below. If everything looks correct, click <strong>Confirm Order</strong>.</p>

    <!-- Booking Summary -->
    <div class="bg-gray-100 p-6 rounded-xl text-left">
      <h2 class="text-xl font-semibold mb-4 text-blue-700">Booking Summary:</h2>
      <ul class="space-y-2 text-gray-800">
        <li><strong>Pickup Location:</strong> <?= $_SESSION['r_from'] ?></li>
        <li><strong>Drop Location:</strong> <?= $_SESSION['r_to'] ?></li>
        <li><strong>Date:</strong> <?= $_SESSION['r_date'] ?></li>
        <li><strong>Time:</strong> <?= $_SESSION['r_time'] ?></li>
        <li><strong>Name:</strong> <?= $_SESSION['r_bookname'] ?></li>
        <li><strong>Phone:</strong> <?= $_SESSION['r_phone'] ?></li>
        <li><strong>Car Selected:</strong> <?= $_SESSION['r_car'] ?></li>
        <li><strong>Price:</strong> ₹<?= $_SESSION['r_price'] ?></li>
      </ul>
       <h2 class="text-xl font-semibold mb-4 text-blue-700">Return Booking Summary:</h2>
      <ul class="space-y-2 text-gray-800">
        <li><strong>Date:</strong> <?= $_SESSION['c_r_date'] ?></li>
        <li><strong>Time:</strong> <?= $_SESSION['c_r_time'] ?></li>
        <li><strong>Name:</strong> <?= $_SESSION['r_bookname'] ?></li>
      </ul>
    </div>

    <!-- Confirm Button -->
    <form action="round-booking-confirmed.php" method="post" class="mt-8">
      <button type="submit" name="comfirm-order" class="bg-green-600 text-white px-6 py-3 rounded-full hover:bg-green-700 transition">
        ✅ Confirm Order
      </button>
    </form>
  </div>

</body>
</html>
