<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elevate</title>
  <!-- google material icons -->
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">
  <!-- stylesheet -->
  <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
</head>
<body>
  <div class="container" style="grid-template-columns: 14rem auto;">
    <aside>
      <div class="top">
        <div class="logo">
          <img src="main-logo.png" alt="">
          <h2>ELEVATE</h2>
        </div>
        
        <div class="close" id="close-btn">
          <span class="material-icons-sharp">close</span>
        </div>
      </div>

        <div class="sidebar" >
        <a href="sales-dashboard.php">
            <span class="material-icons-sharp">grid_view</span>
            <h3>Dashboard</h3>
          </a>

          <a href="create-order.php" class="active">
            <span class="material-icons-sharp">post_add</span> 
            <h3>Create Order</h3>
          </a>

          <a href="sale-table-order.php">
            <span class="material-icons-sharp">receipt_long</span>
            <h3>Orders</h3>
            <span class="message-count">26</span>
          </a>

          <a href="sales-customer.php">
            <span class="material-icons-sharp">person_outline</span>
            <h3>Customers</h3>
          </a>

          <a href="user-profile.php">
            <span class="material-icons-sharp">account_circle</span>
            <h3>Profile</h3>
          </a>

          <a href="Login.php">
            <span class="material-icons-sharp">logout</span> 
            <h3>Logout</h3>
          </a>
      </div>
    </aside>
  <!-- End of Aside / sidebar -->
    <div class="right">
      <div class="top">
        <button id="menu-btn">
          <span class="material-icons-sharp">menu</span>
        </button>
        <div class="profile">
          <div class="info">
            <p>Hi ,<b>Daniel</b></p>
            <small class="text-muted">Admin</small>
          </div>
          <div class="profile-photo">
            <img src="profile-1.jpg" alt="">
          </div>
        </div>
      </div>
      <!-- end of top -->
  
    

    <!-- start of Dashboard -->
    <!-- user porof -->
    <main>
      <div class="wrapper">
        <div class="left">
            <img src="profile-1.jpg" alt="user"  >
            <h4>Alex William</h4>
             <p>Sales Representative</p>
        </div>
        <div class="right-1">
            <div class="info">
                <h3>Information</h3>
                    <h4>Name</h4>
                    <p>asdasdad</p>
                    <h4>Phone</h4>
                    <p>asdasdad</p> 
            </div> 
        </div>
    </div>
      <div class="insights ins-1">
        <div class="sales">
          <span class="material-icons-sharp">analytics</span>
            <div class="middle">
              <div class="left">
                <h3>Total Sales</h3>
                <h1>$25,024</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx='38' cy='38' r='36'></circle>
                </svg>
                <div class="number">
                  <p>81%</p>
                </div>
              </div>
            </div>
            <small class="text-muted">Last 24 Hours</small>
        </div>
        <!-- end of sales -->
       
        <!-- end of expenses -->

        <div class="income">
          <span class="material-icons-sharp">stacked_line_chart</span>
            <div class="middle">
              <div class="left">
                <h3>Total Income</h3>
                <h1>$10,024</h1>
              </div>
              <div class="progress">
                <svg>
                  <circle cx='38' cy='38' r='36'></circle>
                </svg>
                <div class="number">
                  <p>44%</p>
                </div>
              </div>
            </div>
            <small class="text-muted">Last 24 Hours</small>
        </div>
        <!-- end of income -->
      </div>
      <!-- end of insight -->

       </div>
    </main>

    <!-- end of main -->
 

  <script src="./index.js"></script>
</body>
</html>