
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Expenso</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-blue-gray-50 min-h-screen flex items-center justify-center py-10 px-4">

  <div class="w-full max-w-lg bg-white p-8 rounded-2xl shadow-lg">
    <!-- Logo / App Name -->
    <div class="text-center mb-6">
      <h1 class="text-3xl font-bold text-green-700">Expenso</h1>
      <p class="text-gray-500">Register to manage your expenses smartly</p>
    </div>

    <!-- Register Form -->
    <form action="insert.php" method="POST" class="space-y-4">
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
        <input type="text" id="name" name="name" required
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" />
      </div>

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" required
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" />
      </div>

      <div>
        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
        <input type="tel" id="phone" name="phone" required
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" />
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" id="password" name="password" required
                 class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" />
        </div>
    

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label for="age" class="block text-sm font-medium text-gray-700">Age (optional)</label>
          <input type="number" id="age" name="age"
                 class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" />
        </div>

        <div>
          <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
          <select id="gender" name="gender" required
                  class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
      </div>

      <div>
        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
        <input type="text" id="city" name="city" required
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400" />
      </div>

      <button type="submit"
              class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-lg transition font-semibold mt-4">
        Register
      </button>
    </form>

    <!-- Login Link -->
    <p class="text-sm text-center text-gray-600 mt-6">
      Already have an account?
      <a href="login.php" class="text-green-600 hover:underline">Login here</a>
    </p>
  </div>

</body>
</html>
