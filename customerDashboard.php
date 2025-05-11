<?php
  session_start();
  if(isset($_SESSION['validateCustomer'])){
?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Customer Dashboard</title>
    <link rel="stylesheet" href="customerDashboard.css">
    </head>
    <body>

    <header>Dashboard</header>

    <div class="dashboard-buttons">
      <button onclick="location.href='profile.html'">Profile</button>
      <button onclick="location.href='fooditem.html'">Food Item</button>
      <button onclick="location.href='reservation.html'">Reservation</button>
    </div>
    </body>
    </html>
<?php
  }
  else{
    header("location: login.php");
  }
?>

