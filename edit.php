<?php
include "db.php";

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name=?, email=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssi", $name, $email, $id);
    mysqli_stmt_execute($stmt);

    header("Location: dashboard.php");
}

$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$user = mysqli_fetch_assoc($result);
?>

<form method="post">
  <input type="text" name="name" value="<?php echo $user['name']; ?>"><br>
  <input type="email" name="email" value="<?php echo $user['email']; ?>"><br>
  <button name="update">Update</button>
</form>