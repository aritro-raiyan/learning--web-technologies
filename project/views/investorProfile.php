<html>
  <head>
    <title>Home</title>
    <style>
          ul
          {
          list-style-type: none;
          margin: 0;
          padding: 0;
          width: 200px;
          background-color: #f1f1f1;
          }

          li a {
          display: block;
          color: #000;
          padding: 8px 16px;
          text-decoration: none;
          }

          li a.active {
          background-color: #04AA6D;
          color: white;
          }

          li a:hover:not(.active) {
          background-color: #555;
          color: white;
          }
    </style>
  </head>
  <body>

<div align="center">
<h1>Your Profile</h1>
</div>
<ul>
  <li><a href="Invest.php">Invest</a></li>
  <li><a href="transtrack.php">Tracking</a></li>
  <li><a href="forum.php">Forum</a></li>
  <li><a href="request.php">Request</a></li>
</ul>
<div class="content">
</div>
<div align="center">
<font size=4> <a href="../controllers/logout.php"> Log Out </a> </font>
</div>
  </body>