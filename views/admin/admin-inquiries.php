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
        </tr>
        <?php
        require '../../includes/db/database.php';
        $sql = "SELECT * FROM inquiry";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["inq_name"] . "</td><td>" . $row["inq_contno"] . "</td><td>"
              . $row["inq_email"] . "</td><td>" . $row["inq_remark"] . "</td><td> <button name='status_btn' class='status_btn'>Read</button> </td></tr>" ;
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