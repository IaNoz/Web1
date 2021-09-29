<div class="login-forms-page">
    <div class="form login">
        <h1>Login</h1>
        <form class="public_login_form" action="/action_page.php">
          <label for="fname">Username or e-mail address</label><br>
          <input type="text" id="fname" name="fname" value=""><br>
          <label for="lname">Password</label><br>
          <input type="text" id="lname" name="lname" value=""><br><br>
          <div class="button_right"><input class="button" type="submit" value="SEND"></div>
        </form>
    </div>
    
    
<?php // Register form fields validation

if ($_POST){ // is the form is submitted then ...."<span>"
    $username = $wpdb->prepare('%s',$_POST['txtusername']);
    $email = $wpdb->prepare('%s',$_POST['email']);
    $password = $wpdb->prepare('%s',$_POST['txtuserpassword']);
    $confirm_password = $wpdb->prepare('%s',$_POST['txtconfirmpassword']);
    
    $error = array();
    
    // check username has no Spaces
    if (strpos($username, ' ') !== FALSE){
        $error['username_space'] = "Username cannot contain any space";
    }
    // check Username field is not empty
    if (empty($username)){
        $error['username_empty'] = "You must enter a Username";
    }
    // check Username is not taken
    if (username_exists($username)){
        $error['username_exists'] = "The Username you choose is not available, please pick a different one";
    }
    // check email is valid
    if (!is_email($email)){
        $error['email_valid'] = "the email you inserted is not valid";
    }
    // check email does not exists
    if (email_exists($email)){
        $error['email_exists'] = "the email you inserted is already being used by a registered user";
    }
    // check password and pasword confirmation mach
    if (!strcmp($password,$confirm_password)){
        $error['password'] = "password didn't match";
    }
    
    //print error message
    if (count($error) == 0){
        wp_create_user($username, $password, $email);
        echo "your profile has been succesfully created!";
        exit();
    }
}
?>
    <div class="form register">
        <h1>Register</h1>
        <form class="public_login_form" method="post">
            <div class="label" id="username"><label for="txtusersername">Pick a username</label>
                <?php   if ($_POST && $error['username_space']){ echo "<span class='error_message'>".$error['username_space']."</span>"; }
                        if ($_POST && $error['username_empty']){ echo "<span class='error_message'>".$error['username_empty']."</span>"; }
                        if ($_POST && $error['username_exists']){ echo "<span class='error_message'>".$error['username_exists']."</span>"; }?></div>
            <input type="text" id="txt-username" name="txtusername" value="" placeholder='Username'>
            <div class="label" id="email"><label for="email">Email</label>
                <?php   if ($_POST && $error['email_valid']){ echo "<span class='error_message'>".$error['email_valid']."</span>"; }
                        if ($_POST && $error['email_exists']){ echo "<span class='error_message'>".$error['email_exists']."</span>"; }?></div>
            <input type="text" id="e-mail" name="email" value="" placeholder='your e-mail'>
            <div class="label" id="password"><label for="txtuserpassword">Enter Password</label>
                <?php if ($_POST && $error['password']){ echo "<span class='error_message'>".$error['password']."</span>"; }?></div>
            <input type="password" id="txt-user-password" name="txtuserpassword" value="">
            <div class="label" id="confirmpassword"><label for="txtconfirmpassword">Confirm Password</label>
                <?php if ($_POST && $error['password']){ echo "<span class='error_message'>".$error['password']."</span>"; }?></div>
            <input type="password" id="txt-confirm-password" name="txtconfirmpassword" value="">
          
            <div class="button_right"><input class="button" type="submit" name="btnsubmit" value="SEND"></div>
        </form>
    </div>    
    <?php // }//end else
    
//}//end if ?>
</div>