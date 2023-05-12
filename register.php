<?php
    include("header.php")
?>
<div class="main">
    <div class="login">
        <h1>Registration</h1>
        <form action="./listen/register.php" method="post">
            <input type="text" name="login" placeholder="Enter login">
            <input type="password" name="password" placeholder="Enter password">
            <input type="password" name="password_conf" placeholder="Confirm password">
            <input type="email" name="email" placeholder="Enter email">
            <input type="file" id="file_selector" name="avatar"> 
            <label for="file_selector" class="file_label">
                Choose an avatar
            </label>            
            <input type="submit" value="Register" class="button reg_btn"> 
        </form>
    </div>    
</div>
<?php
    include("footer.php")
?>