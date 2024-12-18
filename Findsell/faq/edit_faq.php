<?php
include 'db.php'; //database connection

if (isset($_POST['faq_id'])) {
    $faq_id = $_POST['faq_id'];

    // get  existing FAQ data
    $sql = "SELECT * FROM faqs WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $faq_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $faq = $result->fetch_assoc();
    $stmt->close();
} else {
    echo "FAQ not found!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit FAQ</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        h1 { text-align: center; }
        form { margin-top: 20px; }
        label { display: block; margin-bottom: 8px; }
        textarea { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ced4da; border-radius: 5px; }
        button { background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit FAQ</h1>

        <form action="update_faq.php" method="POST">
            <label for="question">Question</label>
            <textarea id="question" name="question" rows="3" required><?php echo $faq['question']; ?></textarea>

            <label for="answer">Answer</label>
            <textarea id="answer" name="answer" rows="4"><?php echo $faq['answer']; ?></textarea>

            <input type="hidden" name="faq_id" value="<?php echo $faq['id']; ?>">

            <button type="submit">Update FAQ</button>
        </form>
    </div>
</body>
</html>
