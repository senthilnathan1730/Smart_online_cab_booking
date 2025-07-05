<?php 
session_start();
if(empty($_SESSION['email'])):
    header('Location:user-login.php');
endif; 

?>

<?php
$name = $_SESSION['bookname'];
$car = $_SESSION['car'];
$price = $_SESSION['price'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Payment | Sundu Cabs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-yellow-100 via-white to-pink-100 min-h-screen flex items-center justify-center p-4">

  <div class="bg-white shadow-2xl rounded-2xl max-w-lg w-full p-8">
    <h1 class="text-2xl font-bold text-center text-pink-600 mb-6">💳 Secure Payment</h1>

    <div class="bg-gray-100 p-4 rounded-xl mb-6">
      <p><strong>Name:</strong> <?= $name ?></p>
      <p><strong>Car:</strong> <?= $car ?></p>
      <p><strong>Fare:</strong> ₹<?= $price ?></p>
    </div>

    <form action="payment-success.php" method="post" class="space-y-4">
      <label class="block">
        <span class="text-gray-700 font-semibold">Cardholder Name</span>
        <input type="text" name="card_name" required class="w-full mt-1 p-3 border rounded-xl" placeholder="Senthil Nathan">
      </label>

      <label class="block">
        <span class="text-gray-700 font-semibold">Card Number</span>
        <input type="text" name="card_number" maxlength="16" pattern="\d{16}" required class="w-full mt-1 p-3 border rounded-xl" placeholder="1234 5678 9012 3456">
      </label>

      <div class="grid grid-cols-2 gap-4">
        <label class="block">
          <span class="text-gray-700 font-semibold">Expiry Date</span>
          <input type="text" name="expiry" placeholder="MM/YY" pattern="\d{2}/\d{2}" required class="w-full mt-1 p-3 border rounded-xl">
        </label>

        <label class="block">
          <span class="text-gray-700 font-semibold">CVV</span>
          <input type="text" name="cvv" maxlength="3" pattern="\d{3}" required class="w-full mt-1 p-3 border rounded-xl" placeholder="123">
        </label>
      </div>

      <button type="submit" class="w-full bg-pink-500 hover:bg-pink-600 text-white py-3 rounded-xl font-bold transition">
        Pay & Confirm 🚀
      </button>
    </form>
  </div>

</body>
</html>
