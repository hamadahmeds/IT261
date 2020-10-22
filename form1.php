<?php 


// our form-element//
//if (iset ($Post ['name']))//
 if(isset($_POST['name'], 
         $_POST['email'])
   
   
   ){
     $name = $_POST ['name'];
     $email = $_POST ['email'];
     echo $name;
     echo'<br>';
     echo $email;
     echo ' '.$name.'has filed out the form';
     echo '<br>';
     echo 'thier email is ' .$email.''; 
} else { // show the form after else if nothing intered in a name 
     echo'  
           <form action = " " methode= "post"> 
           <lable> Name </lable>
           <input type = "text" name = "name"><br>
           <lable> Email </lable>
           <input type = "email" name = "email"><br>
         
           <input type = "submit" value = "send it!" >
           
         </from>
         ';
         
 }

?>