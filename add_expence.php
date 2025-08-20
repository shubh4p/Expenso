<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Add Expense | Expenso</title>
  
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f5f9;
      color: #1f2937;
      margin: 0;
      min-height: 100vh;
    }

    .header-bar {
      background-color: #ffffff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 50;
    }

    .nav-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 16px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .nav-links {
      display: none;
    }

    @media (min-width: 768px) {
      .nav-links {
        display: flex;
        gap: 24px;
      }
    }

    .nav-link {
      text-decoration: none;
      color: #374151;
      transition: color 0.2s ease-in-out;
    }

    .nav-link:hover {
      color: #059669;
    }

    .nav-active {
      font-weight: 600;
    }

    .main-section {
      padding: 96px 16px 40px;
    }

    .page-title {
      font-size: 28px;
      font-weight: bold;
      color: #047857;
      text-align: center;
      margin-bottom: 24px;
    }

    .form-container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 32px;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
      animation: fade-in 0.5s ease-out;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-size: 14px;
      font-weight: 500;
      color: #374151;
    }

    .form-input,
    .form-select,
    .form-textarea {
      width: 100%;
      padding: 10px 14px;
      border: 1px solid #d1d5db;
      border-radius: 6px;
      font-size: 15px;
      outline: none;
      transition: border-color 0.2s, box-shadow 0.2s;
    }

    .form-input:focus,
    .form-select:focus,
    .form-textarea:focus {
      border-color: #34d399;
      box-shadow: 0 0 0 2px rgba(34, 197, 94, 0.3);
    }

    .submit-btn {
      width: 100%;
      background-color: #059669;
      color: #ffffff;
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.2s;
    }

    .submit-btn:hover {
      background-color: #047857;
    }

    .footer {
      text-align: center;
      padding: 24px;
      font-size: 14px;
      color: #6b7280;
    }

    @keyframes fade-in {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <header class="header-bar">
    <div class="nav-container">
      <h1 style="font-size: 24px; font-weight: bold; color: #047857;">Expenso</h1>
      <nav class="nav-links">
        <a href="home.php" class="nav-link">Home</a>
        <a href="dashboard.php" class="nav-link">Dashboard</a>
        <a href="add_expence.php" class="nav-link nav-active">Add Expense</a>
        <a href="report.php" class="nav-link">Reports</a>
        <a href="profile.php" class="nav-link">Profile</a>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class="main-section">
    <h2 class="page-title">Log a New Expense</h2>
    <div class="form-container">
      <form action="insert1.php" method="POST">
        <div class="form-group">
          <label>Expense Title</label>
          <input type="text" name="title" required class="form-input" />
        </div>

        <div class="form-group">
          <label>Amount (₹)</label>
          <input type="number" name="amount" required class="form-input" />
        </div>

        <div class="form-group">
          <label>Category</label>
          <select name="category" class="form-select">
            <option>Food</option>
            <option>Travel</option>
            <option>Rent</option>
            <option>Shopping</option>
            <option>Others</option>
          </select>
        </div>

        <div class="form-group">
          <label>Date of Expense</label>
          <input type="date" name="date" required class="form-input" />
        </div>

        <div class="form-group">
          <label>Payment Method</label>
          <select name="payment" class="form-select">
            <option>Cash</option>
            <option>Card</option>
            <option>UPI</option>
            <option>Bank Transfer</option>
          </select>
        </div>

        <div class="form-group">
          <label>Notes</label>
          <textarea name="note" rows="3" class="form-textarea"></textarea>
        </div>

        <button type="submit" class="submit-btn">Add Expense</button>
      </form>
    </div>
  </main>

  <!-- Footer -->
  <footer class="footer">© 2025 Expenso. All rights reserved.</footer>
</body>
</html>
