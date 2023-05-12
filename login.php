
<?php
    include("header.php")
?>

<div class="main">
    <div class="login">
        <h1>Authorization</h1>
        <form action="./listen/login.php" method="post">
            <input type="text" name="login" placeholder="Enter Login">
            <input type="password" name="password" placeholder="Enter Password">
            <p>You don't have an account? - <a href="register.php">Register !</a></p>
            <input type="submit" value="Login" class="button login_btn">   
        </form>
    </div>    
</div>

<?php
    include("footer.php")
?>

