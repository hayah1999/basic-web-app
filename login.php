<?php include('server.php'); ?>
<!doctype html>
<html>
    <head>
        <title>LogInPage</title>
        <link href="style.css" rel="stylesheet">
        
    </head>
<body>
        <div class="box3">
    <header>LOG IN</header>
       </div>
<div class="box2" style="">
    <form method="post" action="login.php">
    <?php
    if(count($error)>0):
     ?>
    <div class="error">
       <?php
       foreach($error as $error1){
           echo $error1;
           echo "<br>";
       }?>
    </div>
    <?php endif ?>
<label>
    Username
</label>
<input name="un" type="text"> </input>

<label>
    Password
</label>
<input name="pass1" type="password"> </input>

<button type="submit" name="login" style="margin-top:30px;">Log In</button>
<p style="margin-top:85px;">Don't have an account?<a href="register1.php">SIGN UP</a></p>  
</form>
</div>
</body>
</html>