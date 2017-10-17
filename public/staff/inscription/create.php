<?php

require_once('../../../private/initialize.php');

if (is_post_request()) {

    // Handle form values sent by new.php

    $inscription = [];
    try {
        $array_test = array($_POST['firstname'],$_POST['lastname'], $_POST['email'],$_POST['gender'],$_POST['address'],$_POST['type'],$_POST['titre'],$_POST['theme'],$_POST['country']);

        if (!is_any_null($array_test)) {
            $firstname = $_POST['firstname'] != NULL ? strval($_POST['firstname']) : '';
            $lastname = $_POST['lastname'] != NULL ? strval($_POST['lastname']) : '';
            $address = $_POST['address'] != NULL ? strval($_POST['address']) : '';
            $titre = $_POST['titre'] != NULL ? strval($_POST['titre']) : '';
            $theme = $_POST['theme'] != NULL ? strval($_POST['theme']) : '';
            $country = $_POST['country'] != NULL ? strval($_POST['country']) : '';
            $email = $_POST['email'] != NULL ? strval($_POST['email']) : '';
            $type = $_POST['type'] != NULL ? intval($_POST['type']) : ''; 
            $gender = $_POST['gender'] != NULL ? intval($_POST['gender']) : ''; 
            $inscription['firstname'] = $firstname;
            $inscription['lastname'] = $lastname;
            $inscription['email'] = $email;
            $inscription['gender'] = $gender;
            $inscription['address'] = $address;
            $inscription['type'] = $type;
            $inscription['titre'] = $titre;
            $inscription['theme'] = $theme;
            $inscription['country'] = $country;
        }
    } catch (Exception $ex) {
        echo "<h1> {$ex} </h1>";
    }

    #$ar_title = filter_input(INPUT_POST, 'ar_title') ; // it doesn't work
  #$ar_text = filter_input(INPUT_POST, 'ar_text'); // it doesn't work
  
  //$article['visible'] = $_POST['visible'] ?? '';

  $result = insert_inscription($inscription);
  $new_id = mysqli_insert_id($db);
  #redirect_to(url_for('/staff/inscription/show.php?id=' . $new_id));
  redirect_to(url_for('/staff/inscription/message.php'));


} else {
  redirect_to(url_for('/staff/inscription/message.php'));
}

?>
