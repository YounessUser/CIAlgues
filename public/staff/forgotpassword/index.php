<!DOCTYPE html>

<?php require_once('../../../private/initialize.php');


$errors = [];

$username = '';
$password = '';

if(is_post_request()) {

  $username = $_POST['username'] ?? '';

  // Validations
  if(is_blank($username)) {
    $errors[] = "Username cannot be blank.";
  }

  // if there were no errors, try to login
  if(empty($errors)) {
    // Using one variable ensures that msg is the same
    $login_failure_msg = "Username est incorrect";

    $admin = find_admin_by_username($username);
    if($admin) {
 
        redirect_to(url_for("/staff/forgotpassword/verifyquestion.php?forgotpassword=".$admin['id']));
    
    } else {
      // no username found
      $errors[] = $login_failure_msg;
    }

  }

}

?>




<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include(SHARED_PATH.'/Header.php'); ?>
	
        <div class="section">
    <div class="pageContent">


        <h1 class="presentationTitle"><b>Vous avez Oublié votre mot de Passe ?</b></h1>
        <div class="container">	
        
<form action="<?php echo url_for('/staff/forgotpassword/index.php'); ?>" method="post">
    
  <div class="imgcontainer">
<!--    <img src="img_avatar2.png" alt="Avatar" class="avatar">-->
  </div>

  <div class="container">

      <?php echo display_errors($errors); ?>
      
    <!--Saisir le Username-->
    <label><b></b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    
    <!--Valider la Connection-->
    <button type="submit">Verifier</button>
  </div>

  <div class="container" style="background-color:#f1f1f1;">
<!--    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>-->
  </div>
</form>
        
        </div>
        </div>
        </div>
        
<?php include(SHARED_PATH.'/Footer.php'); ?>
<?php include(SHARED_PATH.'/staff_footer.php'); ?>
        
   