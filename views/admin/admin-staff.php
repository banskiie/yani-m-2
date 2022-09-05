<?php
require '../../includes/admin/header.php';
@session_start();
if (isset($_SESSION["role"]) != "admin" && $_SESSION['loggedIn'] != true) {
  header('Location: ../../views/index.php');
}
?>


<main class="content">
  <h1>Staff</h1>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, quod
    ullam saepe fuga expedita ipsum impedit praesentium omnis repellendus!
    Ipsam?
  </p>
</main>
</div>
</body>

</html>