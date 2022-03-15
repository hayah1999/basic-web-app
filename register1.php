<?php include('server.php'); ?>
<!doctype html>
<html>
    <head>
        <title>RegisterPage</title>
        <link href="style.css" rel="stylesheet">
    </head>
<body>
        <div class="box3">
    <header>Registeration</header>
       </div>
<div class="box2">
    <form method="post" action="register1.php" style="margin-top:0px;">
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
    E-mail
</label>
<input name="em" type="email"> </input>
<label>
    Password
</label>
<input name="pass1" type="password"> </input>
<label>
    Confirm Password
</label>
<input name="pass2" type="password"> </input>
<button type="submit" name="register">Register</button>
<p>Already have account?<a href="login.php">SIGN IN</a></p>  
</form>
</div>

</body>
    </html>