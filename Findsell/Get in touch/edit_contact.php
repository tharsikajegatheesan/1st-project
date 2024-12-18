<?php
	include 'config_contact.php';

	if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $sql = "SELECT name, email, phone, message FROM details WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetching the record as an associative array
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $message = $row['message'];
    } else {
        echo "No records found with id: $id";
        exit();
    }

    // Close the database connection
    $conn->close();
?>

<!DOCTYPE html>
<head>
    <title>Edit Records</title>

    <style>
        .form{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #f6f8fa;
            font-family: 'Poppins', sans-serif;
        }

        form {
            max-width: 700px;
            width: 100%;
            background: #ffffff;
            border-radius: 0.5rem;
            box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.1),
                        0px 5px 12px -2px rgba(0, 0, 0, 0.1),
                        0px 18px 36px -6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: 10px;
        }

        form p {
            font-size: 40px;
            font-weight: bold;
            position: relative;
        }

        form input {
            height: 20px;
            width: 95%;
            border: 1px solid black;
            border-radius: 0.5rem;
        }

        form textarea {
            width: 95%;
            border: 1px solid black;
            border-radius: 0.5rem;
        }

        form label {
            font-weight: bold;
            font-style: italic; 
        }

        #submit{
            height: 45px;
            width: 100%;
            border: none;
            font-size: 18px;
            font-weight: 500;
            cursor: pointer;
            background: linear-gradient(to right, #AFF6C0, #1DDC49);
            border-radius: 5px;
            color: black;
            letter-spacing: 1px;
            text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.2);
        }

        #submit:hover{
            background: linear-gradient(to right, #1DDC49, #AFF6C0);
        }
    </style>
</head>
<body>
    <div class="form">
        <form action="submitEdit_contact.php" method="GET">
            <center><p><u>Edit Records</u></p></center>
            <div class="main">
                <ul>
                        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" readonly />
                    <li>
                        <label for="name">Full Name:</label><br />
                        <input type="text" id="name" name="name" value="<?php echo "$name" ?>" /><br /><br />
                    </li>
                    <li>
                        <label for="email">Email:</label><br />
                        <input type="text" id="email" name="email" value="<?php echo "$email" ?>" ><br /><br />
                    </li>
                    <li>
                        <label for="phone">Phone Number:</label><br />
                        <input type="number" id="phone" name="phone" value="<?php echo "$phone" ?>"  /><br /><br />
                    </li>
                    <li>
                        <label for="message">Your Message.:</label><br />
                        <input type="text" id="message" name="message" value="<?php echo "$message" ?>"  /><br /><br />
                    </li>
                </ul>
            </div>

            <input type="submit" id="submit" value="Update" name="submit">
        </form>
    </div>
</body>
</html>