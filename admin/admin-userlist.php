<?php
session_start();
if (empty($_SESSION['admin_name'])) {
  header('Location: adminlogin.php');
  exit();
}
include 'admin-dbconnection.php';

// Handle delete user if requested
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user_id'])) {
  $deleteUserId = intval($_POST['delete_user_id']);
  $deleteQuery = "DELETE FROM user_register WHERE email = $deleteUserId";
  mysqli_query($connec, $deleteQuery);
  // Redirect to avoid form resubmission
  header('Location: '.$_SERVER['PHP_SELF']);
  exit();
}

$query = "SELECT * FROM user_register";
$result = mysqli_query($connec, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>All Registered Users | Sundu Cabs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-yellow-100 to-green-100 min-h-screen p-6">

  <div class="max-w-6xl mx-auto">
    <h1 class="text-3xl font-bold text-center text-green-700 mb-8">👥 All Registered Users</h1>

    <!-- Search Bar -->
    <div class="mb-6">
      <input
        type="text"
        id="searchInput"
        placeholder="🔍 Search by name, email, or phone..."
        class="w-full p-3 rounded-lg border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400"
      />
    </div>

    <?php if (mysqli_num_rows($result) > 0): ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <?php $i = 1; while ($row = mysqli_fetch_assoc($result)): ?>
          <div class="user-card bg-white shadow-md rounded-xl p-6 hover:shadow-lg transition relative">
            <div class="flex items-center justify-between mb-2">
              <h2 class="text-lg font-bold text-green-600">User #<?= $i++ ?></h2>
              <!-- Delete Button Form -->
              <form method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                <input type="hidden" name="delete_user_id" value="<?= $row['email'] ?>" />
                <button type="submit"
                  class="text-red-600 hover:text-red-800 font-semibold px-3 py-1 rounded border border-red-600 hover:bg-red-100 transition"
                  title="Delete User">
                  Delete
                </button>
              </form>
            </div>
            <p><strong class="text-gray-700">Name:</strong> <?= htmlspecialchars($row['fullname']) ?></p>
            <p><strong class="text-gray-700">Email:</strong> <?= htmlspecialchars($row['email']) ?></p>
            <p><strong class="text-gray-700">Phone:</strong> <?= htmlspecialchars($row['phone']) ?></p>
            <p><strong class="text-gray-700">Registered:</strong>
              <?= isset($row['created_at']) ? date('d M Y', strtotime($row['created_at'])) : 'N/A' ?>
            </p>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <div class="text-center text-red-600 font-semibold mt-10">No registered users found.</div>
    <?php endif; ?>
  </div>

  <script>
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', function () {
      const filter = this.value.toLowerCase();
      const cards = document.querySelectorAll('.user-card');

      cards.forEach(card => {
        const text = card.innerText.toLowerCase();
        card.style.display = text.includes(filter) ? 'block' : 'none';
      });
    });
  </script>

</body>
</html>
