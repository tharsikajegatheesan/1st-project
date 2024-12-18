<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
                padding: 0px;
                margin: 0;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                background-color: #99F4AE;
            }

            table {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                border-collapse: collapse;
                width: 1500px;
                height: 200px;
                border: 1px solid #bdc3c7;
                box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
            }
    
            tr {
                transition: all .2s ease-in;
                cursor: pointer;
            }
    
            td {
                padding: 12px;
                text-align: center;
                border-bottom: 1px solid #ddd;
                background-color: #E7E2D5;
            }

            th {
                padding: 12px;
                text-align: center;
                border-bottom: 1px solid #ddd;
                background-color: #1DDC49;
            }

            tr:hover {
                background-color: #f5f5f5;
                transform: scale(1.02);
                box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
            }
    
            @media only screen and (max-width: 768px) {
                table {
                    width: 90%;
                }
            }
        </style>
    </head>
    <body>
    </body>
</html>

<?php
	include 'config_contact.php';

	$sql = "SELECT * FROM details";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    <th></th>
                </tr>";

        // Output data for each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['message']}</td>
                    <td>
                        <a href='edit_contact.php?id={$row['id']}'>Edit</a> | 
                        <a href='delete_contact.php?id={$row['id']}' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a>
                    </td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No messages found.";
    }

    // Close the connection
    $conn->close();
?>