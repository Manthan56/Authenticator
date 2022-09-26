<?php 
    include 'dbcon.php';
    session_start();
    $em = $_POST['email'];
    $sql = "SELECT * from login where username='" . $em . "'";
    $result = $conn->query($sql) or die($conn->error);
    $row = $result->fetch_assoc();
    if (mysqli_num_rows($result) > 0) {
      $_SESSION['username'] = $row['emp_id'];
      $_SESSION['admin'] = $row['is_hr'];
      echo "./login.php";
    }
    else
    {
        echo "./index.php";
    }
?>