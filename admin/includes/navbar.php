<?php
// session_start();
// include('../login.php');
include("../config/dbcon.php");
include("../functions/authcode.php");


?>

<style>
  .search input {
    border-radius: 20px;
    padding: 5px;
    border: 1px solid #000;
  }

  .profile button {
    border: none;
  }

  .logout {
    text-decoration: none;

  }
</style>

<div class="d-flex align-items-center justify-content-end p-4">
  <div class="search">
    <input type="text" placeholder="Search Here">
  </div>


  <?php
  if (isset($_SESSION['auth'])) {
    if ($_SESSION['role_as'] == 1) {
      ?>
      <div class="profile">
        <div class=" px-3">
          <button class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="true">
            <?= $_SESSION['auth_user']['name'] ?>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">View Profile</a></li>
              <li><a class="dropdown-item" href="#">Edit Profile</a></li>
              <!-- <li><a class="dropdown-item" href="../login.php">Logout</a></li> -->
            </ul>
          </button>
          <button>
              <a class="logout" href="../logout.php">Logout</a>
            </button>
        </div>
      </div>
      <?php
    }
    ?>
    <?php
  }
  ?>
</div>