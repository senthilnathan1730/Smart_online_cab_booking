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
  $name = trim($_POST['bookname'] ?? '');
  $from = trim($_POST['from'] ?? '');
  $to = trim($_POST['to'] ?? '');
  $date = $_POST['date'] ?? '';
  $time = $_POST['time'] ?? '';
  $phone = $_POST['phone'] ?? '';

  // Combine date and time
  $datetime = strtotime("$date $time");
  $now = time();

  // Validation
  if (empty($name) || empty($from) || empty($to) || empty($date) || empty($time) || empty($phone)) {
    $error = "❌ Please fill out all required fields.";
  } elseif ($datetime < $now) {
    $error = "❌ Please select a future date and time.";
  } else {
    // ✅ Success – Store in session and redirect to booking summary
    $_SESSION['bookname'] = $name;
    $_SESSION['from'] = $from;
    $_SESSION['to'] = $to;
    $_SESSION['date'] = $date;
    $_SESSION['time'] = $time;
    $_SESSION['phone'] = $phone;

    header("Location: bookprocess1.php");
    exit();
  }
} else {
  $error = "❌ Invalid form submission.";
}


?>


<?php
$_SESSION['bookname'] = $_POST['bookname'];
$_SESSION['from'] = $_POST['from'];
$_SESSION['to'] = $_POST['to'];
$_SESSION['date'] = $_POST['date'];
$_SESSION['time'] = $_POST['time'];
$_SESSION['phone'] = $_POST['phone'];
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
