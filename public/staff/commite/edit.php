<?php
require_once('../../../private/initialize.php');

#$commite_set = find_all_commite();
#mysqli_free_result($commite_set);
#$test = $_GET['test'] ?? '';
/*
  if($test == '404') {
  error_404();
  } elseif($test == '500') {
  error_500();
  } elseif($test == 'redirect') {
  redirect_to(url_for('/staff/subjects/index.php'));
  }
 * 
 */

require_login();
if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/commite/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {

  // Handle form values sent by new.php

  $getcommite = [];
  $getcommite['id'] = $id;
  $getcommite['nom'] = $_POST['commite_nom'] ?? '';
  $getcommite['country'] = $_POST['country'] ?? '';
  $getcommite['type'] = $_POST['commite_type'] ?? '';
  $getcommite['university'] = $_POST['commite_univ'] ?? '';
  
  $result = update_commite($getcommite);
  redirect_to(url_for('/staff/commite/index.php'));
  
  
}else{
    $getcommite = find_commite_by_id($id);
}
?>

<?php $page_title = 'Modifier le Commite Selectionne'; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>
<div class="section" style="padding-top: 5%;">
    <div class="pageContent">

        <h1 class="presentationTitle"><b><?php echo $page_title; ?></b></h1>
        <div class="container">

            <!--<div id="content" class="container">-->

            <a class="back-link" href="<?php echo url_for('/staff/commite/index.php'); ?>">&laquo; Revenir vers la list</a>

            <h1></h1>
            <div style="padding-top: 2%;">
                <form action="<?php echo url_for('/staff/commite/edit.php?id=' . h(u($id))); ?>" method="post" style="width: 100%;">


                    <!--Saisir le nom -->
                    <input type="text" maxlength="20" placeholder="Saisir le nom" name="commite_nom" required value="<?php echo $getcommite['nom'];?>">

                    <!--Saisir le Pays--> 
                    <!--<input type="text" maxlength="15" placeholder="Saisir le Pays" name="commite_country" required>-->
                    <?php include(UTIL_PATH."/countries.php"); ?>

                    <!--Saisir le nom de l'universite-->    
                    <input type="text" maxlength="30" placeholder="Saisir le nom d'Universite" name="commite_univ" value="<?php echo $getcommite['university'];?>" required>
                    <!--<input type="checkbox"  checked="checked"> Remember me-->


                    <div style="padding-top: 2%;">
                        <input type="radio" name="commite_type" value="1" required checked=""> Commite d'Organisation
                        <input type="radio" name="commite_type" value="2" required checked=""> Commite de Scientifique
                    </div>

                    <br/>


                    <!--valider l'enregistrement-->
                    <button type="submit">Modifier</button>



                </form>
            </div>
        </div>
    </div>
</div>
<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
