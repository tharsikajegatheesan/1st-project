<?php

include 'connectdb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data with post method                  //https://www.geeksforgeeks.org/how-to-prevent-sql-injection-in-php/
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sellerType = mysqli_real_escape_string($conn, $_POST['sellerType']);
    $subscribe = isset($_POST['subscribe']) ? 1 : 0; // checkbox value

    //password hashing
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);    //ref - onecompiler

    // SQL part
    $sql = "INSERT INTO sellers (name, email, password, seller_type)
            VALUES ('$name', '$email', '$hashed_password', '$sellerType')";

    //execute the query
    if (mysqli_query($conn, $sql)) {
        
        echo "<script>
                alert('New seller registered');
                window.location.href='manage_sellers.php';
                
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close  db
    mysqli_close($conn);
}
?>
