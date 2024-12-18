<!DOCTYPE html>
<html>
<head>
    <title>FAQs</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        h1 { text-align: center; }
        .faq-list { margin-top: 20px; }
        .faq-list ul { list-style: none; padding: 0; }
        .faq-list li { border-bottom: 1px solid #ccc; padding: 10px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Frequently Asked Questions</h1>

        <div class="faq-list">
            <ul>
                <?php
                include 'db.php'; // database connection

                // Fetch all answered questions
                $sql = "SELECT * FROM faqs WHERE answer IS NOT NULL";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>";
                        echo "<strong>Question:</strong> " . $row['question'] . "<br>";
                        echo "<strong>Answer:</strong> " . $row['answer'] . "<br>";
                        echo "</li>";
                    }
                } else {
                    echo "<li>No questions  answered yet.</li>";
                }

                $conn->close();
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
