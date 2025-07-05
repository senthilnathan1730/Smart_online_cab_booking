<?php 
session_start();
if(empty($_SESSION['email'])):
    header('Location:user-login.php');
endif; 

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
</head>
<body class="bg-gradient-to-br from-yellow-100 via-red-100 to-pink-200 min-h-screen p-6">

  <div class="max-w-3xl mx-auto p-6 bg-white rounded-2xl shadow-lg">
    <h1 class="text-3xl font-bold text-center text-black mb-6">Sundu Cabs - Book Your Ride</h1>

    <!-- Buttons -->
    <div class="flex justify-center gap-4 mb-6">
      <button id="singleTripBtn" class="px-6 py-2 rounded-full font-semibold inactive-btn">Single Trip</button>
      <button id="roundTripBtn" class="px-6 py-2 rounded-full font-semibold inactive-btn">Round Trip</button>
    </div>

    <!-- Single Trip Form -->
    <form action="bookprocess.php" method="POST" id="singleTripForm" class="space-y-4 hidden">
      <div class="grid md:grid-cols-2 gap-4">
        <input type="text" name="from" placeholder="From" class="p-3 border rounded-lg w-full" />
        <input type="text" name="to" placeholder="To" class="p-3 border rounded-lg w-full" />
      </div>
      <div class="grid md:grid-cols-2 gap-4">
        <input type="date" name="date" class="p-3 border rounded-lg w-full" />
        <input type="time" name="time" class="p-3 border rounded-lg w-full" />
      </div>
      <input type="text" name="bookname" placeholder="Name" class="p-3 border rounded-lg w-full" />
      <input type="tel" name="phone" placeholder="Phone Number" class="p-3 border rounded-lg w-full" />
      <button type="submit" class="w-full bg-black text-white py-3 rounded-xl font-bold hover:bg-pink-300 hover:text-black">Book Single Trip</button>
    </form>

    <!-- Round Trip Form -->
    <form  action="round-bookprocess.php" method="POST" id="roundTripForm" class="space-y-4 hidden">
      <div class="grid md:grid-cols-2 gap-4">
        <input type="text" name="r_from" placeholder="From" class="p-3 border rounded-lg w-full" />
        <input type="text" name="r_to"  placeholder="To" class="p-3 border rounded-lg w-full" />
      </div>
      <div class="grid md:grid-cols-2 gap-4">
        <input type="date" name="r_date" placeholder="Departure Date" class="p-3 border rounded-lg w-full" />
        <input type="time" name="r_time" placeholder="Departure Time" class="p-3 border rounded-lg w-full" />
      </div>
      <div class="grid md:grid-cols-2 gap-4">
        <input type="date" name="c_r_date" placeholder="Return Date" class="p-3 border rounded-lg w-full" />
        <input type="time" name="c_r_time" placeholder="Return Time" class="p-3 border rounded-lg w-full" />
      </div>
      <input type="text" name="r_bookname" placeholder="Name" class="p-3 border rounded-lg w-full" />
      <input type="tel" name="r_phone" placeholder="Phone Number" class="p-3 border rounded-lg w-full" />
      <button type="submit" class="w-full bg-black text-white py-3 rounded-xl font-bold hover:bg-pink-300 hover:text-black">Book Round Trip</button>
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
