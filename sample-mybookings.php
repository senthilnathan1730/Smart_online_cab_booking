<?php 
session_start();
if (empty($_SESSION['email'])) {
    header('Location: user-login.php');
    exit();
}

include 'dbconnection.php';
$email = $_SESSION['email'];

// Get user's full name
$inlog = "SELECT * FROM user_register WHERE email = '$email'";
$res = mysqli_query($connec, $inlog);
$user = mysqli_fetch_array($res);
$name = $user['fullname'] ?? '';

// Get booking data
$inget = "SELECT * FROM single_trip_book WHERE email = '$email'";
$query = mysqli_query($connec, $inget);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>My Bookings | Sundu Cabs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @media print {
      .no-print {
        display: none !important;
      }
      body {
        background: white !important;
      }
    }
  </style>
</head>
<body class="bg-gradient-to-br from-blue-100 via-white to-green-100 min-h-screen p-4">

  <div class="max-w-7xl mx-auto">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4 w-full">
      <h1 class="text-2xl sm:text-3xl font-bold text-blue-600 text-center sm:text-left w-full">🚖 Single Trip Booking History for <?= htmlspecialchars($name) ?></h1>
     
    </div>

    <!-- Responsive Card Layout Instead of Table -->
    <?php if (mysqli_num_rows($query) > 0): ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php while ($row = mysqli_fetch_assoc($query)): ?>
          <div class="bg-white shadow-md rounded-xl p-5 transition hover:shadow-xl w-full">
             <div class="w-full sm:w-auto flex justify-center sm:justify-end">
        <button onclick="window.print()" class="no-print bg-black text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition font-semibold text-sm sm:text-base">
          🖨️ Print Bookings
        </button>
      </div>
            <h2 class="text-lg font-bold text-green-600 mb-2">🚗 <?= htmlspecialchars($row['car_selection']) ?> Trip</h2>
            <ul class="text-sm text-gray-700 space-y-1">
              <li><strong>Pickup:</strong> <?= htmlspecialchars($row['pickup_from']) ?></li>
              <li><strong>Drop:</strong> <?= htmlspecialchars($row['drop_to']) ?></li>
              <li><strong>Date:</strong> <?= htmlspecialchars($row['date']) ?></li>
              <li><strong>Time:</strong> <?= htmlspecialchars($row['time']) ?></li>
              <li><strong>Phone:</strong> <?= htmlspecialchars($row['phone']) ?></li>
              <li><strong>Rate:</strong> ₹<?= htmlspecialchars($row['price']) ?>/km</li>
              <li><strong>Status:</strong> <span class="text-blue-500 font-medium">Confirmed</span></li>
              <li><strong>Total Amount:</strong> <span class="text-green-600 font-semibold">₹<?= htmlspecialchars($row['amount']) ?> </span></li>


             <li>
            <button style="height:40px; width:90px;" onclick="window.print()" class="no-print bg-red-500 text-white px-2 py-2 rounded-lg hover:bg-yellow-600 transition font-semibold text-sm sm:text-base">
          Pay
        </button>
             </li>
            </ul>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <div class="text-center text-red-500 font-medium mt-8">No bookings found.</div>
    <?php endif; ?>

  </div>

</body>
</html>
