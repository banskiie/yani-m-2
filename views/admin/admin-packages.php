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
            <th>Package</th>
            <th>Price</th>
            <th>Description</th>
            <th></th>
          </tr>
          <?php
          require '../../includes/db/database.php';
          $sql = "SELECT * FROM package";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
              <tr>
                <td><?php echo $row['pkg_name']; ?></td>
                <td><?php echo $row['pkg_price']; ?></td>
                <td><?php echo $row['pkg_desc']; ?></td>
                <td>
                  <div id="table-buttons">
                    <form action="../../includes/util/package_f.php?update=<?php echo $row['pkg_id']; ?>" method="post">
                      <button name="update">Edit</button>
                    </form>
                    <form action="../../includes/util/package_f.php?delete=<?php echo $row['pkg_id']; ?>" method="post">
                      <button name="remove">Delete</button>
                    </form>
                  </div>
                </td>
              </tr>
          <?php };
          } ?>
        </table>
      </div>
    </div>
    <div id="buttons">
      <button id="add_btn">Add Package</button>
    </div>
    <div id="add_page">
      <form action="../../includes/util/package_f.php" method="post">
        <h1>Add Package</h1>
        <div>
          <label>Name</label>
          <input type="text" name="pkg_name" required>
        </div>
        <div>
          <label>Price</label>
          <input type="text" name="pkg_price" required>
        </div>
        <div>
          <label>Description</label>
          <textarea name="pkg_desc" required></textarea>
        </div>
        <div>
          <button type="submit" name="add">Add</button>
        </div>
      </form>
    </div>
  </div>
</main>
</div>
</body>

</html>