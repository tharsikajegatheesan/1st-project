<!DOCTYPE html>
<html>
<head>
    <title>Admin - Manage FAQs</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        h1 { text-align: center; }
        .faq-list { margin-top: 20px; }
        .faq-list ul { list-style: none; padding: 0; }
        .faq-list li { border-bottom: 1px solid #ccc; padding: 10px 0; margin-bottom: 20px; }
        button { background-color: #007bff; color: white; padding: 10px 10px; border: none; border-radius: 5px; cursor: pointer; font-size: 0.9em; }
        button:hover { background-color: #0056b3; }
        .delete-button { background-color: #dc3545; }
        .delete-button:hover { background-color: #c82333; }
        
        .update-button { background-color: #ffc107; } /* Yellow color for the update button */
        .update-button:hover { background-color: #e0a800; } /* Darker yellow on hover */

        form { display: inline-block; margin-right: 10px; }
        .button-container { display: inline-flex; gap: 2px; } /* Reduced gap between buttons */
        .answer-container { margin-top: 10px; display: flex; flex-direction: column; gap: 15px; }
        textarea { margin-bottom: 10px; } /* Add margin to the textarea */
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin - Manage FAQs</h1>

        <div class="faq-list">
            <ul>
                <?php
                include 'db.php'; //  database connection

                // Fetch all questions whether answered or not
                $sql = "SELECT * FROM faqs";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>";
                        echo "<strong>Question:</strong> " . htmlspecialchars($row['question']) . "<br>";
                        if ($row['answer']) {
                            echo "<strong>Answer:</strong> " . htmlspecialchars($row['answer']) . "<br>";
                        } else {
                            echo "<strong>Status:</strong> Pending Answer<br>";

                            // Form to  answer
                            echo "<form action='submit_answer.php' method='POST'>";
                            echo "<div class='answer-container'>"; 
                            echo "<textarea name='answer' placeholder='Enter your answer' required></textarea>"; 
                            echo "<input type='hidden' name='faq_id' value='" . $row['id'] . "'>";
                            echo "</div>"; 
                            echo "<div class='button-container'>"; 
                            echo "<button type='submit'>Submit Answer</button>";
                            echo "</div>"; 
                            echo "</form>";
                        }

                        // Delete button
                        echo "<form action='delete_faq.php' method='POST'>";
                        echo "<input type='hidden' name='faq_id' value='" . $row['id'] . "'>";
                        echo "<button type='submit' class='delete-button'>Delete</button>";
                        echo "</form>";

                        // Update button
                        echo "<form action='edit_faq.php' method='POST'>";
                        echo "<input type='hidden' name='faq_id' value='" . $row['id'] . "'>";
                        echo "<button type='submit' class='update-button'>Update</button>"; // Updated class for yellow color
                        echo "</form>";

                        echo "</li>";
                    }
                } else {
                    echo "<li>No questions found.</li>";
                }

                $conn->close();
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
