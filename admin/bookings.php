<?php
session_start();
if (empty($_SESSION['admin_name'])) {
  header('Location: adminlogin.php');
  exit();
}
include 'admin-dbconnection.php';
$email = $_SESSION['email'];

// Get user's full name
$inlog = "SELECT * FROM user_register WHERE email = '$email'";
$res = mysqli_query($connec, $inlog);
$user = mysqli_fetch_array($res);
$name = $user['fullname'] ?? '';

// Get booking data
$inget = "SELECT * FROM single_trip_book WHERE email = '$email'";
$query = mysqli_query($connec, $inget);

$inget1 = "SELECT * FROM round_trip_book WHERE email = '$email'";
$query1 = mysqli_query($connec, $inget1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Santhi Cabs Booking</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .active-btn {
      background-color: #fee2e1;
      color: black;
    }
    .inactive-btn {
      background-color: #e5e7eb;
      color: #374151;
    }
  </style>
</head>
<body class="bg-gradient-to-br from-yellow-100 via-red-100 to-pink-200 min-h-screen p-9">

<div class="max-w-5xl mx-auto p-6 bg-white rounded-2xl shadow-lg">
  <h1 class="text-3xl font-bold text-center text-black mb-6">🚖 Booking Details</h1>

  <!-- Toggle Buttons -->
  <div class="flex justify-center gap-4 mb-6">
    <button id="singleTripBtn" class="px-6 py-2 rounded-full font-semibold inactive-btn">Single Trip</button>
    <button id="roundTripBtn" class="px-6 py-2 rounded-full font-semibold inactive-btn">Round Trip</button>
  </div>

  <!-- Single Trip Section -->
  <div id="singleTripForm">
    <h2 class="text-xl font-semibold text-green-700 mb-4 text-center">🛣️ Your Single Trip Bookings</h2>
    <?php if (mysqli_num_rows($query) > 0): ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <?php while ($row = mysqli_fetch_assoc($query)): ?>
          <div class="bg-white rounded-xl shadow p-4 border border-gray-300">
            <p><strong>Name:</strong> <?= $row['name'] ?></p>
            <p><strong>From:</strong> <?= $row['pickup_from'] ?></p>
            <p><strong>To:</strong> <?= $row['drop_to'] ?></p>
            <p><strong>Date:</strong> <?= $row['date'] ?></p>
            <p><strong>Time:</strong> <?= $row['time'] ?></p>
            <p><strong>Phone:</strong> <?= $row['phone'] ?></p>

            <p><strong>Car:</strong> <?= $row['car_selection'] ?></p>
            <p><strong>Amount:</strong> ₹<?= $row['amount'] ?></p>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <p class="text-center text-red-600 mt-4">No single trip bookings found.</p>
    <?php endif; ?>
  </div>

  <!-- Round Trip Section -->
  <div id="roundTripForm" class="hidden">
    <h2 class="text-xl font-semibold text-purple-700 mb-4 text-center">🔁 Your Round Trip Bookings</h2>
    <?php if (mysqli_num_rows($query1) > 0): ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <?php while ($row = mysqli_fetch_assoc($query1)): ?>
          <div class="bg-white rounded-xl shadow p-4 border border-gray-300">
            <p><strong>Name:</strong> <?= $row['name'] ?></p>
            <p><strong>From:</strong> <?= $row['pickup_from'] ?></p>
            <p><strong>To:</strong> <?= $row['drop_to'] ?></p>
            <p><strong>Start Date:</strong> <?= $row['date'] ?></p>
            <p><strong>Time:</strong> <?= $row['r_time'] ?></p>

            <p><strong>Return Date:</strong> <?= $row['r_date'] ?></p>
            <p><strong>Time:</strong> <?= $row['r_time'] ?></p>

            <p><strong>Phone:</strong> <?= $row['phone'] ?></p>

            <p><strong>Car:</strong> <?= $row['car_selection'] ?></p>
            <p><strong>Total:</strong> ₹<?= $row['amount'] ?></p>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <p class="text-center text-red-600 mt-4">No round trip bookings found.</p>
    <?php endif; ?>
  </div>
</div>

<!-- Toggle Script -->
<script>
  const singleBtn = document.getElementById('singleTripBtn');
  const roundBtn = document.getElementById('roundTripBtn');
  const singleForm = document.getElementById('singleTripForm');
  const roundForm = document.getElementById('roundTripForm');

  singleBtn.addEventListener('click', () => {
    singleForm.classList.remove('hidden');
    roundForm.classList.add('hidden');

    singleBtn.classList.add('active-btn');
    singleBtn.classList.remove('inactive-btn');
    roundBtn.classList.add('inactive-btn');
    roundBtn.classList.remove('active-btn');
  });

  roundBtn.addEventListener('click', () => {
    roundForm.classList.remove('hidden');
    singleForm.classList.add('hidden');

    roundBtn.classList.add('active-btn');
    roundBtn.classList.remove('inactive-btn');
    singleBtn.classList.add('inactive-btn');
    singleBtn.classList.remove('active-btn');
  });

  // Set default tab
  singleBtn.click();
</script>

</body>
</html>
