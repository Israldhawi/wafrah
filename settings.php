<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Settings</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="./style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }
    h2 {
      color: #2c3e50;
      text-align: center;
      margin-top: 40px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }
    th {
      background-color: #f4f4f4;
    }
  </style>
</head>
<body>

<div id="nav">
  <ul id="list">
    <li class="link"><a href="index.php"><img src='./pic/logo.jpeg' alt='Logo' class='logo'> Home</a></li>
    <li class="link"><a href="login.php">Login</a></li>
    <li class="link"><a href="create.php">Create Account</a></li>
  </ul>
  <hr>
</div>

<main>
  <div class="content">
    <h2 style="color:#103775; text-align:left ">Settings</h2>
    <a href="login.php"><button class="btn">Login <i class="fa-solid fa-arrow-right"></i></button></a><br><br>
	<a href="logout.php"><button class="btn">Logout <i class="fa-solid fa-arrow-right"></i></button></a>
  </div>

<div class="swiper-container" style="transform: translateX(-260px); color:#103775; border: 2px solid #103775; border-radius: 10px; padding: 20px;">
  <div class="swiper">
    <div class="slide-content" style="max-width: 900px; padding: 30px;">

      <h2 style="color:#103775;">Account Information</h2>
      <table>
        <thead>
          <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Membership Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>exampleuser</td>
            <td>user@example.com</td>
            <td>+123456789</td>
            <td>2022-01-01</td>
          </tr>
        </tbody>
      </table>

      <h2 style="color:#103775;">Transactions</h2>
      <table>
        <thead>
          <tr>
            <th>Date</th>
            <th>Type</th>
            <th>Amount</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2025-05-01</td>
            <td>Payment</td>
            <td>$50</td>
            <td>Completed</td>
          </tr>
        </tbody>
      </table>

      <h2 style="color:#103775;">Notifications and Alerts</h2>
      <table>
        <thead>
          <tr>
            <th>Alert Type</th>
            <th>Status</th>
            <th>Last Sent</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Email</td>
            <td>Enabled</td>
            <td>2025-05-01</td>
            <td><button>Disable</button></td>
          </tr>
          <tr>
            <td>SMS</td>
            <td>Disabled</td>
            <td>—</td>
            <td><button>Enable</button></td>
          </tr>
        </tbody>
      </table>

      <h2 style="color:#103775;">Profile</h2>
      <table>
        <thead>
          <tr>
            <th>Full Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Address</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John Doe</td>
            <td>Male</td>
            <td>1995-05-15</td>
            <td>123 Main St, City</td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
</div>

<div class="swiper-pagination"></div>

</main>

<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js'></script>
<script src="./script.js"></script>

<footer style="text-align:center; color:#FA28C1;background: black; opacity: 0.7;">
  <ul class="wrapper">
    <li class="icon facebook"><span class="tooltip">Facebook</span><span><i class="fab fa-facebook-f"></i></span></li>
    <li class="icon twitter"><span class="tooltip">Twitter</span><span><i class="fab fa-twitter"></i></span></li>
    <li class="icon instagram"><span class="tooltip">Instagram</span><span><i class="fab fa-instagram"></i></span></li>
    <li class="icon github"><span class="tooltip">Github</span><span><i class="fab fa-github"></i></span></li>
    <li class="icon youtube"><span class="tooltip">Youtube</span><span><i class="fab fa-youtube"></i></span></li>
  </ul>
  <br><br>
  <ol style="font-size:13px; color:white;">
    This website developed by:
    <li>Esraa Abdullah Al-dhawi (36S2336740)</li>
    <li>Afnan Abdullah Anbar AL-qinqi (36J2248)</li>
    <li>Romisa Hamood Al-ashaykhi (36S2175)</li>
    <li>ALBayan hamdan AL-Mushaqri (36s2149)</li>
    <li>Maather saeed AL-sharji (36J2246)</li>
  </ol>
</footer>

</body>
</html>
