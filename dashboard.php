<?php
session_start();
include "db.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>
<a href="logout.php">Logout</a>

<h3>User List</h3>

<table border="1">
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Email</th>
  <th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM users");
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['email']; ?></td>
  <td>
    <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
    <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
  </td>
</tr>
<?php } ?>
</table>