<?php
include 'db.php'; // database connection


if (isset($_POST['question']) && !empty($_POST['question'])) {
    $question = $_POST['question'];

    // Insert the new question 
    $sql = "INSERT INTO faqs (question) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $question);

    if ($stmt->execute()) {
        $success_message = "Your question has been submitted!";
    } else {
        $error_message = "Error submitting question: " . $conn->error;
    }

    $stmt->close();
}

// Fetch all questions answered
$sql = "SELECT * FROM faqs WHERE answer IS NOT NULL";
$answered_faqs = $conn->query($sql);

// Fetch all questions  not answered
$unanswered_sql = "SELECT * FROM faqs WHERE answer IS NULL";
$unanswered_faqs = $conn->query($unanswered_sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        h1 { text-align: center; }
        .faq-list { margin-top: 20px; }
        .faq-list ul { list-style: none; padding: 0; }
        .faq-list li { border-bottom: 1px solid #ccc; padding: 10px 0; }
        .submit-question { margin-top: 40px; }
        textarea { width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-top: 10px; }
        button { background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer; margin-top: 10px; }
        button:hover { background-color: #0056b3; }
        .success-message, .error-message { margin-top: 20px; padding: 10px; border-radius: 5px; }
        .success-message { background-color: #d4edda; color: #155724; }
        .error-message { background-color: #f8d7da; color: #721c24; }
    </style>
        <link rel="stylesheet" href="fstyles.css">

</head>
<body>
    <div class="container">
        <h1>Frequently Asked Questions</h1>

        <!-- Display success or error message -->
        <?php if (isset($success_message)): ?>
            <div class="success-message"><?php echo $success_message; ?></div>
        <?php endif; ?>
        <?php if (isset($error_message)): ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <!-- Display answered FAQs -->
        <div class="faq-list">
            <h2>Answered Questions</h2>
            <ul>
                <?php if ($answered_faqs->num_rows > 0): ?>
                    <?php while ($row = $answered_faqs->fetch_assoc()): ?>
                        <li>
                            <strong>Question:</strong> <?php echo htmlspecialchars($row['question']); ?><br>
                            <strong>Answer:</strong> <?php echo htmlspecialchars($row['answer']); ?>
                        </li>
                    <?php endwhile; ?>
                <?php else: ?>
                    <li>No answered questions yet.</li>
                <?php endif; ?>
            </ul>
        </div>

        //pendingquestions
        <div class="faq-list">
            <h2>Pending Questions</h2>
            <ul>
                <?php if ($unanswered_faqs->num_rows > 0): ?>
                    <?php while ($row = $unanswered_faqs->fetch_assoc()): ?>
                        <li>
                            <strong>Question:</strong> <?php echo htmlspecialchars($row['question']); ?><br>
                            <em>(This question is awaiting an answer from the admin)</em>
                        </li>
                    <?php endwhile; ?>
                <?php else: ?>
                    <li>No pending questions.</li>
                <?php endif; ?>
            </ul>
        </div>

        //new question
        <div class="submit-question">
            <h2>Ask a New Question</h2>
            <form action="" method="POST">
            <!--<input type="text" name="name" placeholder="Your Name" required>-->
            <!--<input type="email" name="email" placeholder="Your Email" required>-->
                <textarea name="question" rows="4" placeholder="Enter your question..." required></textarea>
                <button type="submit">Submit Question</button>
            </form>
        </div>
    </div>
</body>
</html>
