<?php
require("../php/signup.php");

?>



<!DOCTYPE html>
<html>
<head>

    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../css/signup.css?v=<?php echo time(); ?>">
    <?php
   
    if($sucess!=null){
       
        ?><style>.sucess{display:block} </style><?php
     
    } 
    else if($failure!=null){
      
        ?><style>.fail{display:block} </style><?php
       
    }  
    else if($invalid!=null){
        ?><style>.invalid{display:block} </style><?php
    } 
    
    ?>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="" method="POST">

       
            

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required autocomplete="off"><br>

        

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required autocomplete="off" ><br>
            <!-- confirm password -->
            <label for="password">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confpwd" required ><br>
            <!-- messages -->
            <p class="sucess"><?php echo $sucess?> </p>
            <p class="fail"><?php echo $failure?></p>
            <p class="invalid"><?php echo $invalid?></p>
            <p id="confirm"></p>

            <button type="submit" name="submit">Sign Up</button>
        </form>

        <div class="login-link">
            Already have an account? <a href="../html/signin.php">Sign In</a>
        </div>
    </div>
    <script src="../js/signup.js"></script>
</body>
</html>
