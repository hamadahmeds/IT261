<?php 
include('config.php');
include('includes/header.php');
?> 


<div id="wrapper">
<h1 class=" <?php echo $center; ?> "> <?php  echo $mainHeadline;  ?> </h1>
 
<!--  <img src="images/photo1.jpg" alt="photo1"> -->
 <?php include ('../random-count.php') ?>
  
  <blockquote> 
  
  "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
  
  </blockquote>
  
<?php include ('includes/footer.php') ?>