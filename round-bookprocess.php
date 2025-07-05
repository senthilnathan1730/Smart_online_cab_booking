<?php 
session_start();
if(empty($_SESSION['email'])):
    header('Location:user-login.php');
endif; 

?>
<?php
date_default_timezone_set('Asia/Kolkata');

// Check if form submitted correctly
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Collect and validate input
  $name = trim($_POST['r_bookname'] ?? '');
  $from = trim($_POST['r_from'] ?? '');
  $to = trim($_POST['r_to'] ?? '');
  $r_date = $_POST['c_r_date'] ?? '';
  $r_time = $_POST['c_r_time'] ?? '';
  $date = $_POST['r_date'] ?? '';
  $time = $_POST['r_time'] ?? '';
  $phone = $_POST['r_phone'] ?? '';

  // Combine date and time
  $datetime = strtotime("$date $time");
  $now = time();

  // Validation
  if (empty($name) || empty($from) || empty($to) || empty($date) || empty($time) || empty($phone) || empty($r_date) || empty($r_time)) {
    $error = "❌ Please fill out all required fields.";
  } elseif ($datetime < $now) {
    $error = "❌ Please select a future date and time.";
  } else {
    // ✅ Success – Store in session and redirect to booking summary
    $_SESSION['r_bookname'] = $name;
    $_SESSION['r_from'] = $from;
    $_SESSION['r_to'] = $to;
    $_SESSION['c_r_date'] = $r_date;
    $_SESSION['c_r_time'] = $r_time;
    $_SESSION['r_date'] = $date;
    $_SESSION['r_time'] = $time;
    $_SESSION['r_phone'] = $phone;

    header("Location: round-bookprocess1.php");
    exit();
  }
} else {
  $error = "❌ Invalid form submission.";
}


?>
<!DOCTYPE html>
<html>
<head>
  <title>Booking Error | Sundu Cabs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-red-100 flex items-center justify-center min-h-screen p-6">

  <div class="bg-white p-6 rounded-xl shadow-lg max-w-md w-full text-center">
    <h1 class="text-2xl font-bold text-red-600 mb-4">Booking Failed</h1>
    <p class="text-gray-800 text-lg mb-6"><?= $error ?></p>
    <a href="book.php" class="bg-red-500 text-white px-5 py-3 rounded-full hover:bg-red-600 transition">
      🔁 Go Back to Booking
    </a>
  </div>

</body>
</html>
