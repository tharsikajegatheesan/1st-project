<?php
include 'db.php'; //database connection

if (isset($_POST['faq_id']) && isset($_POST['answer'])) {
    $faq_id = $_POST['faq_id'];
    $answer = $_POST['answer'];

    // Update the FAQ with the answer
    $sql = "UPDATE faqs SET answer = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $answer, $faq_id);

    if ($stmt->execute()) {
        echo "Answer submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}

// Redirect back to the admin page
header("Location: admin.php");
exit();
?>
