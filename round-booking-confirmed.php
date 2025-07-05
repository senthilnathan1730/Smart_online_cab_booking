<?php 
session_start();
if(empty($_SESSION['email'])):
    header('Location:user-login.php');
endif; 

?>

<?php 
include 'dbconnection.php';
if(isset($_POST['comfirm-order'])){
    $r_name = $_SESSION['r_bookname'];
    $r_car_selection = $_SESSION['r_car'];
    $r_from = $_SESSION['r_from'];
    $r_to = $_SESSION['r_to'];
    $r_date = $_SESSION['r_date'];
    $r_time = $_SESSION['r_time'];
    $c_r_date = $_SESSION['c_r_date'];
    $c_r_time = $_SESSION['c_r_time'];
    $r_phone = $_SESSION['r_phone'];
    $r_price = $_SESSION['r_price'];
    $r_email =  $_SESSION['email'];
    $r_amount = 0;
    

   $inlog = "INSERT INTO round_trip_book(name, email, pickup_from, drop_to, date, time, r_date, r_time, phone, car_selection, price, amount) VALUES ('$r_name', '$r_email', '$r_from','$r_to','$r_date','$r_time', '$c_r_date', '$c_r_time', '$r_phone','$r_car_selection','$r_price','$r_amount')";
    $result = $connec->query($inlog);
    echo $result;

    
if($result == TRUE)
{
    header('Location:round-confirmed.php');
}
else{
   $error = "❌ Booking Error .";
}
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