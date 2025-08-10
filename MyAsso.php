<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Wafrah Platform</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
  <style>
    html, body {
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      font-family: Arial, sans-serif;
    }

    .logo {
      height: 30px;
      margin-right: 8px;
      vertical-align: middle;
    }

    .container {
      max-width: 900px;
      margin: 20px auto;
      padding: 20px;
      background-color: #f5f5f5;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      flex: 1;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 5px;
      color: #444;
    }

    select, input[type="date"], input[type="number"] {
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      margin-top: 15px;
      padding: 10px 15px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 25px;
    }

    th, td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: left;
    }

    th {
      background-color: #e0e0e0;
    }

    footer {
      width: 100%;
      text-align: center;
      color: #FA28C1;
      background: black;
      opacity: 0.7;
      padding: 20px 10px;
    }

    footer ol {
      font-size: 13px;
      color: white;
      list-style: none;
      padding-left: 0;
    }

    .wrapper {
      display: flex;
      justify-content: center;
      padding: 0;
      margin: 0;
      list-style: none;
      gap: 10px;
    }

    .icon {
      cursor: pointer;
      font-size: 18px;
      color: white;
      transition: transform 0.2s;
    }

    .icon:hover {
      transform: scale(1.2);
    }

    .tooltip {
      display: none;
    }
  </style>
</head>
<body>

  <!-- Navigation -->
  <div id="nav">
    <ul id="list">
      <li class="link"><a href="index.php"><img src="./pic/logo.jpeg" alt="Logo" class="logo"> Home</a></li>
      <?php if ($isLoggedIn): ?>
        <li class="link"><a href="logout.php">Logout</a></li>
      <?php else: ?>
        <li class="link"><a href="login.php">Login</a></li>
        <li class="link"><a href="create.php">Create Account</a></li>
      <?php endif; ?>
    </ul>
    <hr>
  </div>

  <!-- Main Content -->
  <div class="container">
    <h2>Available Associations Details</h2>

    <div class="form-group">
      <label for="goal">Choose a Goal:</label>
      <select id="goal">
        <option value="">-- Select Goal --</option>
        <option value="Travel">Travel</option>
        <option value="Debt">Debt</option>
        <option value="Car">Car</option>
        <option value="Other">Other</option>
      </select>
    </div>

    <div class="form-group">
      <label for="proceeds">Association's Proceeds:</label>
      <select id="proceeds">
        <option value="">-- Select Proceeds --</option>
        <option value="Installments">Installments</option>
        <option value="Donations">Donations</option>
        <option value="Sponsorship">Sponsorship</option>
      </select>
    </div>

    <div class="form-group">
      <label for="duration">Duration:</label>
      <select id="duration">
        <option value="">-- Select Duration --</option>
        <option value="6">6 Months</option>
        <option value="12">12 Months</option>
        <option value="24">24 Months</option>
      </select>
    </div>

    <div class="form-group">
      <label for="amount">Amount (OMR):</label>
      <input type="number" id="amount" placeholder="Enter amount in OMR">
    </div>

    <div class="form-group">
      <label for="receipt_date">Receipt Date:</label>
      <input type="date" id="receipt_date" />
    </div>

    <button onclick="addAssociation()">Add to Table</button>

    <h2>My Association</h2>
    <table id="associationTable">
      <thead>
        <tr>
          <th>Association Name</th>
          <th>Goal</th>
          <th>Duration</th>
          <th>Start Date</th>
          <th>Next Installment</th>
          <th>Total Amount (OMR)</th>
          <th>Monthly Payment (OMR)</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>

  <!-- Footer -->
  <footer>
    <ul class="wrapper">
      <li class="icon facebook"><span class="tooltip">Facebook</span><span><i class="fab fa-facebook-f"></i></span></li>
      <li class="icon twitter"><span class="tooltip">Twitter</span><span><i class="fab fa-twitter"></i></span></li>
      <li class="icon instagram"><span class="tooltip">Instagram</span><span><i class="fab fa-instagram"></i></span></li>
      <li class="icon github"><span class="tooltip">Github</span><span><i class="fab fa-github"></i></span></li>
      <li class="icon youtube"><span class="tooltip">Youtube</span><span><i class="fab fa-youtube"></i></span></li>
    </ul>
    <br><br>
    <ol>
      This website developed by:
      <li>Esraa Abdullah Al-dhawi (36S2336740)</li>
      <li>Afnan Abdullah Anbar AL-qinqi (36J2248)</li>
      <li>Romisa Hamood Al-ashaykhi (36S2175)</li>
      <li>ALBayan hamdan AL-Mushaqri (36S2149)</li>
      <li>Maather saeed AL-sharji (36J2246)</li>
    </ol>
  </footer>

  <!-- JavaScript -->
  <script>
    function addAssociation() {
      const goal = document.getElementById('goal').value;
      const proceeds = document.getElementById('proceeds').value;
      const durationValue = document.getElementById('duration').value;
      const receiptDate = document.getElementById('receipt_date').value;
      const amount = parseFloat(document.getElementById('amount').value);

      if (!goal || !proceeds || !durationValue || !receiptDate || isNaN(amount)) {
        alert("Please fill in all fields before adding.");
        return;
      }

      const durationMonths = parseInt(durationValue);
      const monthlyPayment = (amount / durationMonths).toFixed(2);

      const table = document.getElementById('associationTable').getElementsByTagName('tbody')[0];
      const row = table.insertRow();

      row.insertCell(0).innerText = proceeds + " Association";
      row.insertCell(1).innerText = goal;
      row.insertCell(2).innerText = durationMonths + " Months";
      row.insertCell(3).innerText = receiptDate;

      const date = new Date(receiptDate);
      date.setMonth(date.getMonth() + durationMonths);
      const futureDate = date.toISOString().split('T')[0];

      row.insertCell(4).innerText = futureDate;
      row.insertCell(5).innerText = amount.toFixed(2) + " OMR";
      row.insertCell(6).innerText = monthlyPayment + " OMR";
    }
  </script>

</body>
</html>
