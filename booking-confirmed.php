<?php 
session_start();
if(empty($_SESSION['email'])):
    header('Location:user-login.php');
endif; 

?>

<?php 
include 'dbconnection.php';
if(isset($_POST['comfirm-order'])){
    $name = $_SESSION['bookname'];
    $car_selection = $_SESSION['car'];
    $phone = $_SESSION['phone'];
    $from = $_SESSION['from'];
    $to = $_SESSION['to'];
    $date = $_SESSION['date'];
    $time = $_SESSION['time'];
    $price = $_SESSION['price'];
    $email =  $_SESSION['email'];
    $amount = 0;
    

   $inlog = "INSERT INTO single_trip_book(name, email, pickup_from, drop_to, date, time, phone, car_selection, price, amount) VALUES ('$name', '$email', '$from','$to','$date','$time','$phone','$car_selection','$price','$amount')";
    $result = $connec->query($inlog);
    echo $result;

    
if($result == TRUE)
{
    header('Location:confirmed.php');
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