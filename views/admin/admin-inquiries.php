<?php
require '../../includes/admin/header.php';
@session_start();
if (isset($_SESSION["role"]) != "admin" && $_SESSION['loggedIn'] != true) {
  header('Location: ../../views/index.php');
}
?>

<main class="content">
  <h1>Inquiries</h1>
  <div id="tables">
    <div>
      <table>
        <tr>
          <th>Name</th>
          <th>Contact No</th>
          <th>Email</th>
          <th>Remark</th>
          <th>Status</th>
          <th></th>
        </tr>
        <?php
        require '../../includes/db/database.php';
        $sql = "SELECT * FROM inquiry";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $row['inq_name']; ?></td>
              <td><?php echo $row['inq_contno']; ?></td>
              <td><?php echo $row['inq_email']; ?></td>
              <td><?php echo $row['inq_remark']; ?></td>

              <td><?php if ($row['inq_status'] == 1) {
                    echo "Unread";
                  } else {
                    echo "Seen";
                  } ?>
              </td>
              <td>
                <form action="../../includes/util/update_inq.php?update=<?php echo $row['inq_id']; ?>" method="post">
                  <button name="submit">x</button>
                </form>
              </td>
            </tr>
        <?php };
        } ?>
      </table>
    </div>
  </div>
</main>
</div>
</body>

</html>