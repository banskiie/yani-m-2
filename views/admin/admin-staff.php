<?php
require '../../includes/admin/header.php';
@session_start();
if (isset($_SESSION["role"]) != "admin" && $_SESSION['loggedIn'] != true) {
  header('Location: ../../views/index.php');
}
?>


<main class="content">
  <h1>Staff</h1>
  <div id="full-window">
    <div id="tables">
      <div>
        <table>
          <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Position</th>
            <th>Role</th>
            <th></th>
          </tr>
          <?php
          require '../../includes/db/database.php';
          $sql = "SELECT * FROM staff";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
              <tr>
                <td><?php echo $row['staff_fn']; ?></td>
                <td><?php echo $row['staff_mn']; ?></td>
                <td><?php echo $row['staff_ln']; ?></td>
                <td><?php echo $row['staff_email']; ?></td>
                <td><?php echo $row['staff_contno']; ?></td>
                <td><?php echo $row['staff_add']; ?></td>
                <td><?php echo $row['staff_pos']; ?></td>
                <td>
                  <div id="table-buttons">
                    <form action="../../includes/util/staff_update.php?update=<?php echo $row['staff_id']; ?>" method="post">
                      <button name="submit">Edit</button>
                    </form>
                    <form action="../../includes/util/staff_delete.php?delete=<?php echo $row['staff_id']; ?>" method="post">
                      <button name="submit">Delete</button>
                    </form>
                  </div>
                </td>
              </tr>
          <?php };
          } ?>
        </table>
      </div>
    </div>
  </div>
</main>
</div>
</body>

</html>