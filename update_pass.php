<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update Password | Expenso</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-blue-gray-50 min-h-screen text-gray-800">

  <!-- Navbar -->
  <header class="bg-white shadow fixed top-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-green-700">Expenso</h1>
      <nav class="hidden md:flex space-x-6">
        <a href="home.php" class="hover:text-green-600">Home</a>
        <a href="dashboard.php" class="hover:text-green-600">Dashboard</a>
        <a href="add_expence.php" class="hover:text-green-600">Add Expense</a>
        <a href="report.php" class="hover:text-green-600">Reports</a>
        <a href="profile.php" class="hover:text-green-600 font-semibold">Profile</a>
      </nav>
    </div>
  </header>

  <main class="pt-24 px-4 pb-10 max-w-md mx-auto">
    <h2 class="text-3xl font-bold text-green-600 text-center mb-8">Update Password</h2>

    <div class="bg-white p-6 rounded-xl shadow-md animate-fade-in">
      <form class="space-y-4" onsubmit="handleSubmit(event)">
        <div>
          <label for="currentPassword" class="block text-sm font-medium text-gray-700">Current Password</label>
          <input type="password" id="currentPassword" name="currentPassword" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>
        <div>
          <label for="newPassword" class="block text-sm font-medium text-gray-700">New Password</label>
          <input type="password" id="newPassword" name="newPassword" required minlength="6" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>
        <div>
          <label for="confirmPassword" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
          <input type="password" id="confirmPassword" name="confirmPassword" required minlength="6" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>

        <div id="message" class="text-sm text-red-600 hidden"></div>

        <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 font-semibold transition">Update Password</button>

        <p class="text-center text-sm mt-3">
          <a href="profile.php" class="text-blue-600 hover:underline">Back to Profile</a>
        </p>
      </form>
    </div>
  </main>

  <footer class="text-center py-6 text-sm text-gray-500">
    © 2025 Expenso. All rights reserved.
  </footer>

  <script>
    function handleSubmit(event) {
      event.preventDefault();
      const newPassword = document.getElementById('newPassword').value;
      const confirmPassword = document.getElementById('confirmPassword').value;
      const message = document.getElementById('message');

      if (newPassword !== confirmPassword) {
        message.textContent = 'Passwords do not match.';
        message.classList.remove('hidden');
        return;
      }

      message.textContent = 'Password updated successfully!';
      message.classList.remove('text-red-600');
      message.classList.add('text-green-600');
      message.classList.remove('hidden');
    }
  </script>

  <style>
    @keyframes fade-in {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-in {
      animation: fade-in 0.4s ease-out;
    }
  </style>

</body>
</html>
