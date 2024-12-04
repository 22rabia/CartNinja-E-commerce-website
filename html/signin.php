<?php
require("../php/signin.php")
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="../css/signin.css?v=<?php echo time(); ?>">
    <?php
    if($notFound!=null){
        ?><style>.usernotfound{display:block} </style><?php
    } 
    else if($failure!=null){
        ?><style>.fail{display:block} </style><?php
    }   
    
    ?>
</head>
<body>
        <header>
            <ul class="navbar">
            <li><a href="homepage.php">CartNinja</a></li>
            <div class="right">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="about.php">About</a></li>
            </div>
          </ul>
            </header>
        <div class="container">
            <h2>Sign In</h2>
            <form action="" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required autocomplete="on"><br>
    
                <label for="password">Password:</label>
                <input type="password" id="pass" name="password" required autocomplete="on"><br>
                <p class="fail"><?php echo $failure?></p>
                <p class="usernotfound"><?php echo $notFound?></p>
    
                <button type="submit" id="submit" name="submit">Sign In</button>
            </form>
    
            <div class="signup-link">
                Don't have an account? <a href="../html/signup.php">Sign Up</a>
            </div>
        </div>
        <footer class="footer bg-primary text-white text-center py-3">
            <p>&copy; 2024 CartNinja</p>
        </footer>
        <script src="../js/signin.js"></script>
  
</body>
</html>
