<!DOCTYPE html>
<html>
<head>
    <title>Ask a Question</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        h1 { text-align: center; }
        form { margin-top: 20px; }
        label { display: block; margin-bottom: 8px; }
        input[type="text"], input[type="email"], textarea { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ced4da; border-radius: 5px; }
        button { background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ask a Question</h1>
        <form action="submit_question.php" method="POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="question">Your Question</label>
            <textarea id="question" name="question" rows="4" required></textarea>
            
            <button type="submit">Submit Question</button>
        </form>
    </div>
</body>
</html>
