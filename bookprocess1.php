<?php 
session_start();
if(empty($_SESSION['email'])):
    header('Location:user-login.php');
endif; 

?>

<?php
// $_SESSION['bookname'] = $_POST['bookname'];
// $_SESSION['from'] = $_POST['from'];
// $_SESSION['to'] = $_POST['to'];
// $_SESSION['date'] = $_POST['date'];
// $_SESSION['time'] = $_POST['time'];
// $_SESSION['phone'] = $_POST['phone'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Booking Confirmed</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans min-h-screen flex flex-col items-center justify-start pt-10">

  <!-- Confirmation Banner -->
  <div class="bg-green-200 border border-green-600 text-green-900 px-6 py-4 rounded-lg shadow-md w-full max-w-2xl text-center">
    <h2 class="text-2xl font-bold mb-2">🎉 Booking Confirmed!</h2>
    <p class="text-lg">
      Hi <strong><?= $_SESSION['bookname'] ?></strong>, your trip from <strong><?= $_SESSION['from'] ?></strong> to <strong><?= $_SESSION['to'] ?></strong> on <strong><?= $_SESSION['date'] ?></strong> at <strong><?= $_SESSION['time'] ?></strong> is booked!
    </p>
  </div>

  <!-- Continue Button -->
  <div class="mt-6">
    <a href="carselection.php" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-3 px-6 rounded-xl shadow-lg transition duration-300">
      🚗 Select Car and Enjoy Your Trip
    </a>
  </div>

</body>
</html>