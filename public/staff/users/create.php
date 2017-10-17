<?php

require_once('../../../private/initialize.php');

$errors = [];



if (is_post_request()) {

    // Handle form values sent by new.php

    $user = [];
    $user['username'] = $_POST['username'] ?? '';
    $user['password'] = $_POST['password'] ?? '';
    $user['quest'] = $_POST['quest'] ?? '';
    $user['resp'] = $_POST['resp'] ?? '';

    #$ar_title = filter_input(INPUT_POST, 'ar_title') ; // it doesn't work
  #$ar_text = filter_input(INPUT_POST, 'ar_text'); // it doesn't work
  
  //$article['visible'] = $_POST['visible'] ?? '';
if(find_admin_by_username($user['username']) != NULL){
    $errors = 'ce nom exist deja, veuillez choisir un autre !';
    redirect_to(url_for('/staff/users/new.php'));
}
    
    
  $result = insert_user($user);
  $new_id = mysqli_insert_id($db);
  #redirect_to(url_for('/staff/user/show.php?id=' . $new_id));
  redirect_to(url_for('/staff/users/index.php'));


} else {
  redirect_to(url_for('/staff/users/new.php'));
}

?>
