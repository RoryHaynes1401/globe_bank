<?php require_once('../private/initialize.php'); ?>

<?php

if(isset($_GET['id'])) {
  $page_id = $_GET['id'];
  $page = find_page_by_id($page_id, ['visible' => true]);
  if(!$page) {
    redirect_to(url_for('/index.php'));
  }
  else{
    $subject_id = $page['subject_id'];
    $subject = find_subject_by_id($subject_id, ['visible' => true]);
    if (!$subject) {
      redirect_to(url_for('/index.php'));
    }
  }
} elseif (isset($_GET['subject_id'])){
  $subject_id = $_GET['subject_id'];
  $subject = find_subject_by_id($subject_id, ['visible' => true]);
  if (!$subject) {
    redirect_to(url_for('/index.php'));
  }
  $page_set = find_pages_by_subject_id($subject_id, ['visible' => true]); //all the pages
  $page = mysqli_fetch_assoc($page_set); //first page only (no loop)
  mysqli_free_result($page_set);
  if(!$page) {
    redirect_to(url_for('/index.php'));
  }
  else{
    $page_id = $page['id'];
  }
}

else {

//no $_GET, so show home page

}

 ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <?php  include(SHARED_PATH . '/public_navigation.php'); ?>

  <div id="page">

    <?php
    if(isset($page)) {

      //TODO add html escaping back in
      echo ($page['content']);
    }


    else{
      include(SHARED_PATH . '/static_homepage.php');

    }
    ?>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>