<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login | Sundu Cabs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-yellow-100 to-green-100 min-h-screen flex items-center justify-center">

  <form action="adminlogin.php" method="POST" class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold text-center text-green-700 mb-6"> Admin Login</h2>

    <?php if (isset($_SESSION['login_error'])): ?>
      <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm"><?= $_SESSION['login_error']; unset($_SESSION['login_error']); ?></div>
    <?php endif; ?>


    <input type="text" name="name" placeholder="Admin Name" required class="w-full p-3 mb-4 border rounded">
    <input type="password" name="password" placeholder="Password" required class="w-full p-3 mb-4 border rounded">
    <button type="submit" name="login" class="bg-black hover:bg-yellow-700 text-white w-full py-3 rounded font-bold">Login</button>
  </form>

</body>
</html>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    include 'admin-dbconnection.php';

    $name = mysqli_real_escape_string($connec, $_POST['name']);
    $password = mysqli_real_escape_string($connec, $_POST['password']);

    $query = "SELECT * FROM admin_user WHERE username = '$name' AND passwd = '$password'";
    $res = mysqli_query($connec, $query);

    if ($res && mysqli_num_rows($res) === 1) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_name'] = $name;
        header('Location: admin.php');
        exit();
    } else {
        $_SESSION['login_error'] = 'Invalid username or password.';
        header('Location: adminlogin.php');
        exit();
    }
}
?>

