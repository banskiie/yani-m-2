<?php
require '../../includes/admin/header.php';
@session_start();
if (isset($_SESSION["role"]) != "admin" && $_SESSION['loggedIn'] != true) {
  header('Location: ../../views/index.php');
}
?>

<main class="content">
  <h1>Log</h1>
  <div id="tables">
    <div>
      <h2>Admin Log</h2>
      <table>
        <tr>
          <th>Admin Email</th>
          <th>Activity</th>
          <th>Date</th>
        </tr>
        <?php
        require '../../includes/db/database.php';
        $sql = "SELECT admin.admin_email, user_log.ulog_act, user_log.ulog_datetime FROM user_log INNER JOIN admin ON admin.admin_id = user_log.admin_id";
        //  INNER JOIN client ON user_log.clnt_id = client.clnt_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["admin_email"] . "</td><td>" . $row["ulog_act"] . "</td><td>"
              . $row["ulog_datetime"] . "</td></tr>";
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
</main>
</div>
</body>

</html>