<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['bio'] = $_POST['bio'];
    $_SESSION['social_media'] = $_POST['social_media'];
    $_SESSION['gender'] = $_POST['gender'];

    if ($_FILES['profile_picture']['tmp_name']) {
        $uploadDir = 'profile_pictures/';
        $uploadFile = $uploadDir . basename($_FILES['profile_picture']['name']);
        move_uploaded_file($_FILES['profile_picture']['tmp_name'], $uploadFile);
        $_SESSION['profile_picture'] = $uploadFile;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> Profile </title> 
        <link rel="stylesheet" href="profile.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico"> 
    </head>
    <body class="light-mode">
        <nav class="navbar">
            <div class="logo">
                <a href="index.php"><img src="pokedolllogo.png" alt="#"></a>
            </div>
            <div class="aboutme">
                <a class="main-page" href="profile.php"> My Profile </a>
            </div>
            <div class="nav-items">
                <a class="link" href="index.php"> Home </a>
                <a class="link" href="aboutme.php"> About Me </a>
                <a class="link" href="limited.php"> Limited Items</a>
                <a class="link" href="store.php"> Store </a>
                <a class="link" onclick="showAlert()" href="#" id="cart-link"> Shopping Cart </a>
                <a class="link" onclick="showAlert()" href="#" id="pokedex-link"> Pokedex </a>
                <button class="link-active">
                    <a href="profile.php">
                        Profile
                    </a>
                </button>
                <img id="toggle-mode" src="sun.png" alt="">
            </div>
        </nav>
        <section>
            <div class="profile-container">
                <div class="profile-card">
                    <h2>MY PROFILE</h2>
                    <?php if(isset($_SESSION['name'])): ?>
                    <div class="profile">
                        <?php if(isset($_SESSION['profile_picture'])): ?>
                        <img src="<?php echo $_SESSION['profile_picture']; ?>" alt="Profile Picture">
                        <?php endif; ?>
                        <h3>Name : <?php echo $_SESSION['name']; ?></h3>
                        <p>Email : <?php echo $_SESSION['email']; ?></p>
                        <p>Phone : <?php echo $_SESSION['phone']; ?></p>
                        <p>Address : <?php echo $_SESSION['address']; ?></p>
                        <p>Bio : <?php echo $_SESSION['bio']; ?></p>
                        <p>Social Media : <?php echo $_SESSION['social_media']; ?></p>
                        <p>Gender : <?php echo $_SESSION['gender']; ?></p>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="form-card">
                    <h2>CREATE YOUR PROFILE!</h2>
                    <form method="post" action="profile.php" enctype="multipart/form-data">
                        <label for="name">Name :</label>
                        <input type="text" id="name" name="name" required><br>
        
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" required><br>
        
                        <label for="profile_picture">Profile Picture :</label>
                        <input type="file" id="profile_picture" name="profile_picture" accept="image/*"><br>
        
                        <label for="phone">Phone Number :</label>
                        <input type="tel" id="phone" name="phone"><br>
        
                        <label for="address">Address :</label>
                        <input type="text" id="address" name="address"><br>
        
                        <label for="bio">Bio/Description :</label>
                        <textarea id="bio" name="bio" rows="4"></textarea><br>
        
                        <label for="social_media">Social Media :</label>
                        <input type="text" id="social_media" name="social_media"><br>
        
                        <label for="gender">Gender :</label>
                        <input type="radio" id="male" name="gender" value="Male"> Male
                        <input type="radio" id="female" name="gender" value="Female"> Female
                        <input type="radio" id="no_gender" name="gender" value="No Gender"> No Gender<br>
        
                        <input type="submit" value="Create Profile">
                    </form>
                </div>                                    
            </div>
        </section>
        <footer>
            <p> Please Nintendo Don't Sue Me, This Is Just For a College Project </p>
            <p> Contact Person : mrizkynoob@gmail.com </p>
        </footer>
        <script src="Script.js"></script>
    </body>
</html>