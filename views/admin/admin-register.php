<?php
require '../../includes/admin/header.php';
require '../../includes/util/popup.php';
@session_start();
if (isset($_SESSION["role"]) != "admin" && $_SESSION['loggedIn'] != true) {
  header('Location: ../../views/index.php');
}
?>

<head>
  <link rel="stylesheet" href="../../styles/admin/admin-register.css?v=1">
</head>


<main class="content">


  <form action="../../includes/util/register_admin.php" method="post">
    <h1>Register New Admin</h1>
    <div>
      <label for="admin_fn">First Name</label>
      <input type="text" name="admin_fn" id="admin_fn" required>
    </div>
    <div>
      <label for="admin_mn">Middle Name</label>
      <input type="text" name="admin_mn" id="admin_mn" required>
    </div>
    <div>
      <label for="admin_ln">Last Name</label>
      <input type="text" name="admin_ln" id="admin_ln" required>
    </div>
    <div>
      <label for="admin_contno">Contact No.</label>
      <input type="text" name="admin_contno" id="admin_contno" required>
    </div>
    <div>
      <label for="admin_email">Email</label>
      <input type="email" name="admin_email" id="admin_email" required>
    </div>
    <div>
      <label for="admin_password">Password</label>
      <input type="password" name="admin_password" id="admin_password" required>
    </div>
    <div>
      <label for="admin_confpassword">Confirm Password</label>
      <input type="password" name="confirmPassword" id="admin_confpassword" required>
    </div>
    <div>
      <button type="submit" name="submit">Create New Account</button>
    </div>

  </form>



</main>
</div>
</body>

</html>