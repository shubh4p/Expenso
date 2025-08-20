<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard | Expenso</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-blue-gray-50 text-gray-800 min-h-screen">

  <!-- Navbar -->
  <header class="bg-white shadow fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-green-700">Expenso</h1>
      <nav class="hidden md:flex space-x-6">
        <a href="home.php" class="hover:text-green-600">Home</a>
        <a href="dashboard.php" class="hover:text-green-600 font-semibold">Dashboard</a>
        <a href="add_expence.php" class="hover:text-green-600">Add Expense</a>
        <a href="report.php" class="hover:text-green-600">Reports</a>
        <a href="profile.php" class="hover:text-green-600">Profile</a>
      </nav>
    </div>
  </header>

  <main class="pt-24 px-4 pb-10 max-w-7xl mx-auto">
    <h2 class="text-3xl font-bold text-green-700 mb-6 text-center">Welcome back, User</h2>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition">
        <h3 class="text-gray-500 text-sm">Total This Month</h3>
        <p class="text-2xl font-semibold text-green-700 mt-2">₹12,500</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition">
        <h3 class="text-gray-500 text-sm">Total This Year</h3>
        <p class="text-2xl font-semibold text-green-700 mt-2">₹95,400</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition">
        <h3 class="text-gray-500 text-sm">Top Category</h3>
        <p class="text-2xl font-semibold text-green-700 mt-2">Food</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition">
        <h3 class="text-gray-500 text-sm">Transactions</h3>
        <p class="text-2xl font-semibold text-green-700 mt-2">42</p>
      </div>
    </div>

    <!-- Quick Actions -->
    <div class="flex flex-wrap justify-between items-center gap-4 mb-6">
      <h3 class="text-xl font-semibold text-gray-700">Recent Expenses</h3>
      <div class="flex gap-3">
        <button class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Add Expense</button>
        <button class="bg-white border px-4 py-2 rounded-md hover:shadow">View Reports</button>
        <button class="bg-white border px-4 py-2 rounded-md hover:shadow">Export</button>
      </div>
    </div>

    <!-- Expenses Table -->
    <div class="overflow-auto bg-white rounded-xl shadow-md">
      <table class="min-w-full text-sm">
        <thead class="bg-green-600 text-white">
          <tr>
            <th class="text-left px-4 py-3">Date</th>
            <th class="text-left px-4 py-3">Title</th>
            <th class="text-left px-4 py-3">Category</th>
            <th class="text-left px-4 py-3">Amount</th>
            <th class="text-left px-4 py-3">Method</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          <tr class="border-t">
            <td class="px-4 py-2">2025-07-09</td>
            <td class="px-4 py-2">Lunch</td>
            <td class="px-4 py-2">Food</td>
            <td class="px-4 py-2">₹250</td>
            <td class="px-4 py-2">UPI</td>
          </tr>
          <tr class="border-t">
            <td class="px-4 py-2">2025-07-08</td>
            <td class="px-4 py-2">Petrol</td>
            <td class="px-4 py-2">Travel</td>
            <td class="px-4 py-2">₹800</td>
            <td class="px-4 py-2">Card</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Chart Placeholder -->
    <div class="mt-10">
      <h3 class="text-xl font-semibold text-gray-700 mb-4">Spending by Category</h3>
      <div class="bg-white p-6 rounded-xl shadow-md flex items-center justify-center">
        <canvas id="expenseChart" class="w-full h-64"></canvas>
        <!-- Integrate Chart.js or similar here -->
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="text-center py-6 text-sm text-gray-500">
    © 2025 Expenso. All rights reserved.
  </footer>

</body>
</html>