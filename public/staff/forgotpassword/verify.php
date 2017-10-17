<?php
require_once('../../../private/initialize.php');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_SESSION['correct'])){
$id = $_SESSION['correct'];
}

if(is_post_request()){
    if(isset($_POST['password'])){
        $new_password = $_POST['password'];
        $admin = find_user_by_id($id);
        $admin['password'] = $new_password;
        $result = update_user($admin);
        redirect_to(url_for('/staff/connection/login.php'));
    }
}



?>

<?php include(SHARED_PATH . '/Header.php'); ?>

<div class="section">
    <div class="pageContent">


        <h1 class="presentationTitle"><b>Saisir le nouveau mot de passe</b></h1>
        <div class="container">	

<form action="<?php echo url_for('/staff/forgotpassword/verify.php'); ?>" method="post">

    <div class="imgcontainer">
  <!--    <img src="img_avatar2.png" alt="Avatar" class="avatar">-->
    </div>

    <div class="container">


        <!--Saisir le Username-->
        <label><b></b></label>
        <input type="password" placeholder="Saisir le nouveau mot de passe" name="password" required>


        <!--Valider la Connection-->
        <button type="submit">Modifier</button>
    </div>

    <div class="container" style="background-color:#f1f1f1;">
        <!--    <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>-->
    </div>
</form>

        </div>
        </div>
        </div>

<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>