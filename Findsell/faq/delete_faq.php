<?php
include 'db.php'; //database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $faq_id = $_POST['faq_id'];

    // Delete the FAQ by ID
    $stmt = $conn->prepare("DELETE FROM faqs WHERE id = ?");
    $stmt->bind_param("i", $faq_id);

    if ($stmt->execute()) {
        echo "FAQ deleted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

// Redirect back to admin panel
header('Location: admin.php');
exit;
?>
