<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GoKart | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- External CSS -->
    <link rel="stylesheet" href="style1.css">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

    <div class="nav">
        <div class="logo">
            <h1>GoKart</h1>
        </div>
        <div class="item">
            <a href="#">Home</a>
            <a href="#">Rent a Car</a>
            <a href="#">Bookings</a>
            <a href="#">Support</a>
        </div>
        <div class="btn">
            <span>Welcome, <?php echo $_SESSION['name']; ?> 👋</span>
            <form action="logout.php" method="post">
                <input type="submit" value="Logout" class="logout">
            </form>
        </div>
    </div>

    <div class="welcome">
        <h2>Welcome to GoKart!</h2>
        <p>Explore top-rated vehicles and rent with ease and safety.</p>
    </div>

    <div class="cards">
        <div class="card">
            <img src="user_10001.png" alt="Car 1">
            <h3>Swift Dzire</h3>
            <p>₹500/day · Petrol · Manual</p>
        </div>
        <div class="card">
            <img src="user_10230.png" alt="Car 2">
            <h3>Hyundai i20</h3>
            <p>₹650/day · Diesel · Automatic</p>
        </div>
        <div class="card">
            <img src="user_21034.png" alt="Car 3">
            <h3>Tata Nexon</h3>
            <p>₹800/day · Petrol · Automatic</p>
        </div>
    </div>

</body>
</html>
<?php 
} else {
     header("Location: index.php");
     exit();
}
?>
