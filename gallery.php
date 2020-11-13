<?php 
include('config.php');
include('includes/header.php');
?> 


<div id="wrapper">

<main> 
<h1> <?php  echo $mainHeadline;  ?> </h1>
 
<!--  <img src="images/photo1.jpg" alt="photo1"> -->

 <table> 
  <?php foreach($people as $fullName => $image): ?> 
 <tr> 
 <td> 
 <img src="pics/<?php echo substr($image, 0, 5); ?> " alt="<?php echo $fullName; ?> "> 
 </td>
 
 
 </tr>
 <?php endforeach ; ?>
 </table>
  
  </main>
  
  <aside>
    <h3> This is my head line 3 on the gallery page  </h3>
      
      
  </aside>
<?php include ('includes/footer.php') ?>