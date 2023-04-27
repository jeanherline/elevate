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
          <a href="dashboard.php">
            <span class="material-icons-sharp">grid_view</span>
            <h3>Dashboard</h3>
          </a>

          <a href="RoleManagement.php" class="active">
            <span class="material-icons-sharp">badge</span> 
            <h3>Employee</h3>
          </a>

          <a href="Customer.php">
            <span class="material-icons-sharp">person_outline</span>
            <h3>Customer</h3>
          </a>

          <a href="Products.php">
            <span class="material-icons-sharp">ballot</span>
            <h3>Products</h3>
          </a>

          <a href="Inventory.php">
            <span class="material-icons-sharp">inventory</span>
            <h3>Inventory</h3>
          </a>

          <a href="Orders.php">
            <span class="material-icons-sharp">receipt_long</span>
            <h3>Orders</h3>
            <span class="message-count">26</span>
          </a>
        
          <a href="./Login.php">
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

    <!--  table -->
    <main>
      <form action="">
        <h1>Role Management</h1>

        <div class="recent-orders">
          <div class="search-container">
            <div class="search-bar">
              <input type="text"  placeholder="Search.." > 
            </div>
            <button>Search</button>
          </div>
         
          <button class="add-em-btn">Add Employee</button>
          <button class="add-em-btn">Generate Report</button>
          <label for="table_sort">Sort by:</label>
            <select name="table_sort" id="table_sort">
              <option value="name">Name</option>
              <option value="row">Row</option>
              <option value="month">Month</option>
            </select> 
          <div class="table-wrapper">
          <table>
            <thead>
              <tr>
                <th>Receiver</th>
                <th>Receiver Telephone</th>
                <th>Receiver Address</th>
                <th>Receiver Province</th>
                <th>Reciver City</th>
                <th>Express Type</th>
                <th>Parcel Name</th>
                <th>Weight(kg)</th>
                <th>Total Parcel</th>
                <th>Insurance Value</th>
                <th>COD(PHP)</th>
                <th>Remarks</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Foldable Mini Drone</td>
                <td>85612</td>
                <td>Due</td>
                <td class="warning">Pending</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td class="Primary">
                  <span class="material-icons-sharp">edit</span>
                  <span class="material-icons-sharp">delete</span>
                  <span class="material-icons-sharp">check</span>
                </td>
              </tr>
              
              <tr>
                <td>Foldable Mini Drone</td>
                <td>85612</td>
                <td>Due</td>
                <td class="warning">Pending</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td class="Primary">
                  <span class="material-icons-sharp">edit</span>
                  <span class="material-icons-sharp">delete</span>
                  <span class="material-icons-sharp">check</span>
                </td>
              </tr>
              
              <tr>
                <td>Foldable Mini Drone</td>
                <td>85612</td>
                <td>Due</td>
                <td class="warning">Pending</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td class="Primary">
                  <span class="material-icons-sharp">edit</span>
                  <span class="material-icons-sharp">delete</span>
                  <span class="material-icons-sharp">check</span>
                </td>
              </tr>
  
              <tr>
                <td>Foldable Mini Drone</td>
                <td>85612</td>
                <td>Due</td>
                <td class="warning">Pending</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td class="Primary">
                  <span class="material-icons-sharp">edit</span>
                  <span class="material-icons-sharp">delete</span>
                  <span class="material-icons-sharp">check</span>
                </td>
              </tr>
  
              <tr>
                <td>Foldable Mini Drone</td>
                <td>85612</td>
                <td>Due</td>
                <td class="warning">Pending</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td class="Primary">
                  <span class="material-icons-sharp">edit</span>
                  <span class="material-icons-sharp">delete</span>
                  <span class="material-icons-sharp">check</span>
                </td>
              </tr>
  
              <tr>
                <td>Foldable Mini Drone</td>
                <td>85612</td>
                <td>Due</td>
                <td class="warning">Pending</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td>12/31/21</td>
                <td class="Primary">
                  <span class="material-icons-sharp">edit</span>
                  <span class="material-icons-sharp">delete</span>
                  <span class="material-icons-sharp">check</span>
                </td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </form>
      <!-- sorting by row -->
      <div class="sort-row">
        <label for="table_rows">Table Rows:</label>
        <select name="table_rows" id="table_rows">
          <option value="10 ">10 rows</option>
          <option value="20">30 rows</option>
          <option value="50">50 rows</option>
          <option value="80">80 rows</option>
          <option value="100">100 rows</option>
        </select>
      </div>
      
      <!-- pagination  -->
      <div class="pagination">
        <div id="pagination">
          <a href="#" class="blocks">Previous</a>
          <a href="#" class="blocks ">1</a>
          <a href="#" class="blocks">2</a>
          <a href="#" class="blocks">3</a>
          <a href="#" class="blocks">Next</a>
        </div>
        <p>1 of 20</p>
      </div>
    </main>
    <!-- end of main -->
    </div>
  </div>

  <script src="./index.js"></script>
</body>
</html>