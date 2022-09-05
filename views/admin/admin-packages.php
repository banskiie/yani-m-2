<?php
require '../../includes/admin/header.php';
@session_start();
if (isset($_SESSION["role"]) != "admin" && $_SESSION['loggedIn'] != true) {
  header('Location: ../../views/index.php');
}
?>

<main class="content">
  <script src="../../scripts/admin/pkg_buttons.js" defer></script>
  <h1>Packages</h1>
  <div id="full-window">
    <div id="tables">
      <div>
        <table>
          <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
          </tr>
          <?php
          require '../../includes/db/database.php';
          $sql = "SELECT * FROM package";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["pkg_name"] . "</td><td>" . $row["pkg_price"] . "</td><td>"
                . $row["pkg_desc"] . "</td></tr>";
            }
            echo "</table>";
          } else {
            echo "0 results";
          }
          $conn->close();
          ?>
        </table>
      </div>
    </div>
    <div id="buttons">
      <button id="add_btn">Add Package</button>
      <button id="update_btn">Update Package</button>
      <button id="delete_btn">Delete Package</button>
    </div>
    <div id="add_pkg">
      <form action="../../includes/util/register_admin.php" method="post">
        <h1>Add Package</h1>
        <div>
          <label>Name</label>
          <input type="text" name="admin_fn" required>
        </div>
        <div>
          <label for="admin_mn">Price</label>
          <input type="text" name="admin_mn" required>
        </div>
        <div>
          <label for="admin_ln">Description</label>
          <textarea name="" id="" required></textarea>
        </div>
        <div>
          <button type="submit" name="submit">Add Package</button>
        </div>
      </form>
    </div>
    <!-- <div id="update_pkg">
    <form action=""></form>
    <input type="text">
  </div>
  <div id="delete_pkg">
    <form action=""></form>
    <input type="text">
  </div> -->
  </div>

</main>
</div>
</body>

</html>