<?php include('C:\xampp\htdocs\hackathon\I-Gen\navbar.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor</title>
    <link rel="stylesheet" href="dpay.css">
</head>
<body>
    <div class="container">
    <h1>Donor Information</h1>
    <form method="POST" action="payment.php">
        <div class="section">
            <label for="donorName">Full Name</label>
            <input type="text" id="donorName" name="donorName" placeholder="Enter your full name" required>
        </div>
        <div class="section">
            <label for="donorEmail">Email Address</label>
            <input type="email" id="donorEmail" name="donorEmail" placeholder="Enter your email address" required>
        </div>
        <div class="section">
            <label for="donorPhone">Phone Number</label>
            <input type="tel" id="donorPhone" name="donorPhone" placeholder="Enter your phone number">
        </div>
        <button type="submit">Next</button>
    </form>
    </div>
</body>
</html>

    </form>
    <?php include('C:\xampp\htdocs\hackathon\I-Gen\footer.php')
?>
    
</body>
</html>