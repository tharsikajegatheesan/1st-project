<!DOCTYPE html>
<html>
<head>
    <title>Become Seller</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>


    <div class="form-container">
        <h2>Become Seller</h2>
        <form action="../seller registration/insert.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="repassword">Re-Enter Password</label>
            <input type="password" id="repassword" name="repassword" required>

            <label for="sellerType">Select Type</label>
            <select id="sellerType" name="sellerType" required>
                <option value="real-estate-seller">Real Estate Seller</option>
                <option value="auction-seller">Auction Seller</option>
                <option value="land-owner">Land Owner</option>
                <option value="commercial">Commercial</option>
            </select>

            <button type="submit">Register Now</button>
        </form>
        <p>Already have an account? <a href="..\login\login.html">Login here</a></p>
    </div>

    
</body>
</html>
