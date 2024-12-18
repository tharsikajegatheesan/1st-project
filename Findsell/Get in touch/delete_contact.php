<?php
    include 'config_contact.php';

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = intval($_GET['id']); // Sanitize the id to ensure it's an integer

        // Prepare the SQL DELETE statement using prepared statements to prevent SQL injection
        $stmt = $conn->prepare("DELETE FROM details WHERE id = ?");
        $stmt->bind_param("i", $id); // "i" specifies that id is an integer

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "Message deleted success!";
            echo "<br><a href='read_contact.php'>Back to Records</a>";

            
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'read_contact.php';
                    }, 2000); // Redirect after 2 seconds
                  </script>";
        } else {
            echo "cannot deleting record: " . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "Invalid ID!";
    }

    // Close  database 
    $conn->close();
?>