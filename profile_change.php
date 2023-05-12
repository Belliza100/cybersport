<?php
    include("header.php")
?>
<div class="main">
    <div class="profile">
        <form action="./listen/profile_change.php" method="post" class="profile_frame">
            <div class="profile_left">
                <input type="file" name="avatar" id="file_selector">
                <label for="file_selector">
                    <img src="assets/icons/users/a.png" alt="">
                    <p>Change avatar</p>
                </label>                  
            </div>
            <div class="profile_right">
                <p>Login: <input type="login" name="login" placeholder="Enter login"></p>
                <p>Email: <input type="email" name="email" placeholder="Enter email"></p>
                <input type="submit" value="Save" class="button">
            </div>            
        </form>
    </div>    
</div>
<?php
    include("footer.php")
?>