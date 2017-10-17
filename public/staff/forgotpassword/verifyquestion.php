<?php
require_once('../../../private/initialize.php');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$errors = [];
?>
<?php
$admin;
$question;
$response;
$getresponse;
$id;
if (isset($_GET['forgotpassword'])) {
    $id = $_GET['forgotpassword'];
    $admin = find_user_by_id($id);
    $question = $admin['quest'];
    $response = $admin['resp'];
}



if (is_post_request()) {
    if (isset($_POST['resp'])) {
        $getresponse = $_POST['resp'];
        //if ($admin != NULL) {

            if (is_response_correct($id,$getresponse) != NULL) {
                $_SESSION['correct'] = $id;
                redirect_to(url_for('/staff/forgotpassword/verify.php'));
            }else{
                $errors = 'Reponse incorrect';
                redirect_to(url_for('/staff/forgotpassword/verifyquestion.php?forgotpassword='.$id));
            }
        
    }
}

?>

<?php include(SHARED_PATH . '/Header.php'); ?>

<div class="section">
    <div class="pageContent">


        <h1 class="presentationTitle"><b>Verification par Question</b></h1>
        <div class="container">	

<form action="<?php echo url_for('/staff/forgotpassword/verifyquestion.php?forgotpassword='.$id); ?>" method="post">

    <div class="imgcontainer">
  <!--    <img src="img_avatar2.png" alt="Avatar" class="avatar">-->
    </div>

    <div class="container">

        <?php echo display_errors($errors); ?>

        <!--Saisir le Username-->
        <label><b></b></label>
        <input type="text" disabled="" value="<?php echo $question; ?>" name="quest" required>


        <!--Saisir le Password-->
        <label><b></b></label>
        <input type="text" placeholder="Entrer la Reponse" name="resp" required>


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

<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>