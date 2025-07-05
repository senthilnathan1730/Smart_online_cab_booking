<?php 
session_start();
if(empty($_SESSION['email'])):
    header('Location:user-login.php');
endif; 


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
      background-color: #fee2e1; /* Blue */
      color: black;
    }
    .inactive-btn {
      background-color: #e5e7eb; /* Gray-200 */
      color: #374151; /* Gray-700 */
    }
  </style>

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
<body class="bg-gradient-to-br from-yellow-100 via-red-100 to-pink-200 min-h-screen p-6">




  <div class="max-w-5xl mx-auto p-6 bg-white rounded-2xl shadow-lg">
        <h1 class="text-3xl font-bold text-center text-black mb-6">🚖 Booking History for <?= htmlspecialchars($name) ?></h1>

    <!-- Buttons -->
    <div class="flex justify-center gap-4 mb-6">
      <button id="singleTripBtn" class="px-6 py-2 rounded-full font-semibold inactive-btn">Single Trip</button>
      <button id="roundTripBtn" class="px-6 py-2 rounded-full font-semibold inactive-btn">Round Trip</button>
    </div>

    <!-- Single Trip Form -->
    <form action="bookprocess.php" method="POST" id="singleTripForm" class="space-y-4 hidden">
     <div class="max-w-7xl mx-auto">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4 w-full">
     
    </div>

    <!-- Responsive Card Layout Instead of Table -->
    <?php if (mysqli_num_rows($query) > 0): ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php while ($row = mysqli_fetch_assoc($query)): ?>
          <div class="bg-black shadow-md rounded-xl p-5 transition hover:shadow-xl w-full">
             <div class="w-full sm:w-auto flex justify-center sm:justify-end">
        <!-- <button onclick="window.print()" class="no-print bg-black text-white px-2 py-2 rounded-lg hover:bg-yellow-600 transition font-semibold text-sm">
          🖨️ Print Bookings
        </button> -->
      </div>
            <h2 class="text-lg font-bold text-green-600 mb-2">🚗 <?= htmlspecialchars($row['car_selection']) ?> Trip</h2>
            <ul class="text-sm text-gray-500 space-y-1">
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
    </form>

    <!-- Round Trip Form -->
    <form  action="round-bookprocess.php" method="POST" id="roundTripForm" class="space-y-4 hidden">
     <div class="max-w-7xl mx-auto">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4 w-full">
     
    </div>

    <!-- Responsive Card Layout Instead of Table -->
    <?php if (mysqli_num_rows($query1) > 0): ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php while ($row1 = mysqli_fetch_assoc($query1)): ?>
          <div class="bg-black shadow-md rounded-xl p-5 transition hover:shadow-xl w-full">
             <div class="w-full sm:w-auto flex justify-center sm:justify-end">
        <!-- <button onclick="window.print()" class="no-print bg-black text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition font-semibold text-sm sm:text-base">
          🖨️ Print Bookings
        </button> -->
      </div>
            <h2 class="text-lg font-bold text-green-600 mb-2">🚗 <?= htmlspecialchars($row1['car_selection']) ?> Trip</h2>
            <ul class="text-sm text-gray-500 space-y-1">
              <li><strong>Pickup:</strong> <?= htmlspecialchars($row1['pickup_from']) ?></li>
              <li><strong>Drop:</strong> <?= htmlspecialchars($row1['drop_to']) ?></li>
              <li><strong>Date:</strong> <?= htmlspecialchars($row1['date']) ?></li>
              <li><strong>Time:</strong> <?= htmlspecialchars($row1['time']) ?></li>
              <li><strong>Phone:</strong> <?= htmlspecialchars($row1['phone']) ?></li>
              <li><strong>Rate:</strong> ₹<?= htmlspecialchars($row1['price']) ?>/km</li>
              <li><strong>Status:</strong> <span class="text-blue-500 font-medium">Confirmed</span></li>
              <li><strong>Total Amount:</strong> <span class="text-green-600 font-semibold">₹<?= htmlspecialchars($row1['amount']) ?> </span></li>


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
     
    
    </form> 
  </div>

  <!-- Script -->
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
<!-- <script>
document.getElementById("singleTripForm").addEventListener("submit", function (e) {
    const date = document.querySelector("input[name='date']").value;
    const time = document.querySelector("input[name='time']").value;
    const now = new Date();
    const selectedDateTime = new Date(`${date}T${time}`);

    if (!date || !time) {
        alert("❌ Please enter both date and time.");
        e.preventDefault();
        return;
    }

    if (selectedDateTime < now) {
        alert("❌ Please select a future date and time.");
        e.preventDefault(); // stop form submit
    }
}); -->
</script>

</body>
</html>
