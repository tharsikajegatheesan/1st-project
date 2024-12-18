<!DOCTYPE html>
<html>
<head>
    <title>FindSell</title>
    <link rel="stylesheet" href="contactus.css">
</head>
<body>
        <div class="container">
            <nav class="navbar">
            <img class="logo" src="../images/logo.png">
            <ul>
                <li><a href="..\homepage\home.html">Home</a></li>
                <li><a class="active href="contact_us.php >Contact us</a></li>
                <li><a href="..\Project\Property.html">Properties</a></li>
                <li><a href="../faq/combin.php">FAQ</a></li>
                <li><a href="../Get in touch/getintouch.html">Get in touch</a></li>
                <li><a href="..\seller registration\index.php">Become a seller</a></li>
                <li><a href="..\Sign Up\signUp.html">Sign up</a></li>
                <li><a href="..\login\login.html">Login</a></li>
            </ul>
            </nav>
        </div>


        <div class="support-us-form">
            <h1>Contact us</h1>
            <form id="support-us-form" action="insert_msg.php" method="POST">
                <label for="id">ID:</label>
                <input type="text" name="id" placeholder="ID"> 
                <br>

                <label for="name">Name:</label>
                <input type="text" name="name" placeholder="Mr/Mrs/Miss.......">
                <br>

                <label for="contact">Contact number:</label>
                <input type="tel" name="contact" placeholder="077xxxxxxx"required>
                <br>

                <label for="message">Type message:</label>
                <textarea name="message" rows="5" required></textarea>

                <button class="button"type="submit">Submit</button>
                </form>

  

  <h2>Delete the message</h2>
<form id="delete-form" action="delete_msg.php" method="POST">
    <label for="deleteId">Enter ID To Delete:</label>
    <input type="text" name="id" required>
    <button class="button" type="submit">Delete</button>
</form>

      <h2>Edit message form</h2>
            <form id="edit-form" action="edit_message.php" method="POST">
                <label for="id"> Enter ID to edit:</label>
                <input type="text" name="id" placeholder="Enter the ID of the message "> 
                <br>

                <label for="name">Enter New Name:</label>
                <input type="text" name="name" placeholder="Enter the new name">
                <br>

                <label for="contact">Enter New Contact number:</label>
                <input type="tel" name="contact" placeholder="Enter the new contact Number"required>
                <br>

                <label for="message">Enter New message:</label>
                <textarea name="message" rows="5" required></textarea>

                <button class="button"type="submit">Edit</button>
            </form>

            <h2>Messages</h2>
        <table styles="border:1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection
                $con = new mysqli('localhost', 'root', '', 'findsell');

                // Check connection
                if ($con->connect_error) {
                    die('Connection Error: ' . $con->connect_error);
                }

                // Fetching data from the table
                $result = $con->query("SELECT * FROM support_us");
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['s_id']}</td>
                                <td>{$row['s_name']}</td>
                                <td>{$row['s_contact']}</td>
                                <td>{$row['s_message']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No messages found.</td></tr>";
                }

                // Close the connection
                $con->close();
                ?>
            </tbody>
        </table>
    </div>


</body>
</html>

     












