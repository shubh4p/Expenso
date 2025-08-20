<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Expenso | Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'blue-gray': {
              50: '#f8fafc',
              100: '#f1f5f9',
              200: '#e2e8f0',
            },
          },
        },
      },
    }
  </script>
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-blue-gray-50 text-gray-800">
  <!-- Navbar -->
  <header class="bg-white shadow fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-green-700">Expenso</h1>
      <nav class="hidden md:flex space-x-6">
        <a href="home.php" class="text-gray-700 hover:text-green-600">Home</a>
        <a href="dashboard.php" class="text-gray-700 hover:text-green-600">Dashboard</a>
        <a href="add_expence.php" class="text-gray-700 hover:text-green-600">Add Expense</a>
        <a href="report.php" class="text-gray-700 hover:text-green-600">Reports</a>
        <a href="profile.php" class="text-gray-700 hover:text-green-600">Profile</a>
      </nav>
      <div class="md:hidden">
        <button id="menu-toggle" class="text-green-700 focus:outline-none">☰</button>
      </div>
    </div>
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 space-y-2 bg-white">
      <a href="home.php" class="block text-gray-700">Home</a>
      <a href="dashboard.php" class="block text-gray-700">Dashboard</a>
      <a href="add_expence.php" class="block text-gray-700">Add Expense</a>
      <a href="report.php" class="block text-gray-700">Reports</a>
      <a href="profile.php" class="block text-gray-700">Profile</a>
    </div>
  </header>

  <script>
    document.getElementById('menu-toggle').addEventListener('click', () => {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    });
  </script>

  <!-- Hero Section -->
  <section class="pt-24 pb-16 px-4 text-center bg-white">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-4xl font-bold text-green-700 mb-4">Take Control of Your Expenses</h2>
      <p class="text-gray-600 mb-6">Track, manage, and save smarter with Expenso</p>
      <a href="add_expence.php" class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition">Add Your First Expense</a>
    </div>
  </section>

  <!-- Summary Cards -->
  <section class="py-10 px-4 max-w-6xl mx-auto grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
    <div class="bg-white rounded-xl p-6 shadow hover:shadow-md transition">
      <h3 class="text-xl font-semibold text-green-600 mb-2">Total Spent This Month</h3>
      <p class="text-2xl font-bold">₹12,540</p>
    </div>
    <div class="bg-white rounded-xl p-6 shadow hover:shadow-md transition">
      <h3 class="text-xl font-semibold text-green-600 mb-2">Top Spending Category</h3>
      <p class="text-lg">Groceries</p>
    </div>
    <div class="bg-white rounded-xl p-6 shadow hover:shadow-md transition">
      <h3 class="text-xl font-semibold text-green-600 mb-2">Quick Links</h3>
      <ul class="space-y-2">
        <li><a href="add_expence.php" class="text-green-700 hover:underline">➕ Add Expense</a></li>
        <li><a href="report.php" class="text-green-700 hover:underline">📊 View Report</a></li>
      </ul>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center py-6 text-sm text-gray-500">
    © 2025 Expenso. All rights reserved.
  </footer>
</body>
</html>
