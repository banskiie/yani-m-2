<?php
require '../../includes/admin/header.php';
@session_start();
if (isset($_SESSION["role"]) != "admin" && $_SESSION['loggedIn'] != true) {
  header('Location: ../../views/index.php');
}
?>


<main class="content">
  <script src="../../scripts/admin/pkg_buttons.js" defer></script>
  <h1>Supplier</h1>
  <div id="full-window">
    <div id="tables">
      <div>
        <table>
          <tr>
            <th>Name</th>
            <th>Contact Number</th>
            <th>Email</th>
            <th>Role</th>
            <th>Address</th>
            <th></th>
          </tr>
          <?php
          require '../../includes/db/database.php';
          $sql = "SELECT * FROM supplier";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
              <tr>
                <td><?php echo $row['supp_name']; ?></td>
                <td><?php echo $row['supp_contno']; ?></td>
                <td><?php echo $row['supp_email']; ?></td>
                <td><?php echo $row['supp_role']; ?></td>
                <td><?php echo $row['supp_add']; ?></td>
                <td>
                  <div id="table-buttons">
                    <form action="../../includes/util/supplier_f.php?update=<?php echo $row['supp_id']; ?>" method="post">
                      <button name="update">Edit</button>
                    </form>
                    <form action="../../includes/util/supplier_f.php?delete=<?php echo $row['supp_id']; ?>" method="post">
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
      <button id="add_btn">Add Supplier</button>
    </div>
    <div id="add_page">
      <form action="../../includes/util/supplier_f.php" method="post">
        <h1>Add Supplier</h1>
        <div>
          <label>Name</label>
          <input type="text" name="supp_name" required>
        </div>
        <div>
          <label>Contact Number</label>
          <input type="text" name="supp_contno" required>
        </div>
        <div>
          <label>Email</label>
          <input type="email" name="supp_email" required>
        </div>
        <div>
          <label>Role</label>
          <input type="text" name="supp_role" required>
        </div>
        <div>
          <label>Address</label>
          <input type="text" name="supp_add" required>
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