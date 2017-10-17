<?php require_once('../../../private/initialize.php');
require_login();
?>

<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = isset($_GET['id']) ? $_GET['id'] : '1'; 

$subject = find_subject_by_id($id);

?>

<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/Header_admin.php'); ?>

<div class="section">
    <div class="pageContent">
        <div id="content">

            <a class="back-link" href="<?php echo url_for('/staff/articles/index.php'); ?>">&laquo; Back to List</a>

            <div class="subject show">

                <h1>Title: <?php echo h($subject['ar_title']); ?></h1>

                <?php 
                try {
              
               /* $tmp = explode('.', du($subject['ar_path']));
                $ext = end($tmp);
                
                //if its docx file
                if($ext == 'docx'){
                   $subject['ar_text'] = extracttext(du($subject['ar_path']));
                }elseif ($ext == 'doc') {
                    $subject['ar_text'] = readDoc(du($subject['ar_path']));
                }
                
                update_article($subject);
                */
                } catch (Exception $ex) {
                    
                }
                
                ?> 
                
                <h3><?php $subject['ar_text'];?></h3>

                <?php update_article($subject)?>
                
            </div>
        </div>
    </div></div>


<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>