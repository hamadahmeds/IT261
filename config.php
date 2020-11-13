<?php


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// our gallery php //

$people['Donald_Trump'] = 'trump_President from NY.';
$people['Joe_Biden'] = 'biden_Vice Pesident from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie-sanders'] = 'sande_Senator  from VT.';
$people['Elizabeth-Warren'] = 'warre_ Senator from MA.';

$people['Kemala-Harris'] = 'harri_Senator from CA.';
$people['Cory-Booker'] = 'booke_Senatorfrom NJ.';
$people['Andrew-Yany'] = 'ayang_Senator from NY.';
$people['Pete-Buttigieg']='butti_Senatorfrom IN.';
$people['Amy-klobuchar']='klobu_Senatorfrom MN.';
$people['Julian-Castro']='castr_Senator from TX.';



switch (THIS_PAGE){ 
    case 'index.php' :
        $title ='Homepage for out new website';
        $mainHeadline ='Welcome to our Home page!';
        $center = 'center';
       $body ='home';
        break ; 
        
    case 'about.php' :
        $title ='About page for out new website';
        $mainHeadline ='Welcome to our Wonderful About Page!';
        $center = 'center';
        $body ='about inner';
        break ; 
        
    case 'daily.php' :
        $title ='Daily page';
        $mainHeadline ='Welcome to our Daily Page!';
        $center = 'center';
        
        $body ='daily inner';
     
        break ; 
    case 'customers.php' :
        $title ='Our important Customers page';
        $mainHeadline ='Hello Customers _Good to See you';
        $center = 'center';
        
        $body ='Customers inner';
      
        break ; 

    case 'contact.php' :
        $title ='Contact us today!';
        $mainHeadline ='Welcome to our Contact Page!';
        $center = 'center';
        $body ='contact inner';
        break ; 
        
        
    case 'thx.php' :
        $title ='Our thank you page !';
        $mainHeadline ='Thank you for filling out our form !';
//        $center = 'center';
        $body ='contact inner';
        break ;
        
        
        
        
    case 'gallery.php' :
        $title =' check out our Gallery Page';
        $mainHeadline =' Welcome to Candidadates  Gallery Page';
        $center = 'center';
        $body ='gallery inner';
        break ; 


}  //end swith 
$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['customers.php']= 'Customers';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';

function makelinks($nav){
$myReturn = '';

foreach($nav as $key => $value){
 if(THIS_PAGE == $key){
  $myReturn .= '<li> <a href=" '.$key.' " class="active">'.$value.'</a> </li>'; 
 } else {

$myReturn .= '<li> <a href=" '.$key.' " >'.$value.'</a> </li>';

 } //end else 
} //end foreach 

// always remember to return myReturn //
    
 return $myReturn;
} //end function


//this is the php my form //
$firstName = '';
$lastName = '';
$email = '';
$gender = '';
$wines = '';
$privacy = '';
$comments = '';
$tel = '';

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$genderErr = '';
$winesErr = '';
$privacyErr = '';
$commentsErr = '';
$telErr = '';



if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['firstName'])) {
    $firstNameErr = 'Please fill out your first name';
    } else {
    $firstName = $_POST['firstName'];
    }
    
if(empty($_POST['lastName'])) {
    $lastNameErr = 'Please fill out your last name';
    } else {
    $lastName = $_POST['lastName'];
    }
    
if(empty($_POST['email'])) {
    $emailErr = 'Please fill out your email';
    } else {
    $email = $_POST['email'];
    }

if(empty($_POST['gender'])) {
    $genderErr = 'Please check one!';
    } else {
    $gender = $_POST['gender']; 
    }
    
    if($gender == 'male') {
        $male = 'checked';
    }    elseif($gender == 'female') {
            $female = 'checked';
    }
    
    
if(empty($_POST['wines'])) {
    $winesErr = 'What, no wines?';
    } else {
    $wines = $_POST['wines']; 
    }

if(empty($_POST['comments'])) {
    $commentsErr = 'Please include your comments!';
    } else {
    $comments = $_POST['comments']; 
    }

if(empty($_POST['privacy'])) {
    $privacyErr = 'Please agree to our Privacy Rules!';
    } else {
    $privacy = $_POST['privacy']; 
    }
    
// in end user checkes the checkboxes all of them , we wants to know 
// implode arry of wines so we need to creat a function for that !
function myWines(){
    $myReturn =''; 
if(!empty($_POST['wines'])){
 $myReturn = implode(',', $_POST['wines']);

} return $myReturn;   //end if  
    
} //end function 
    
if(empty($_POST['tel'])) {  // if empty, type in your number
    $telErr = 'Your phone number please!';
    } elseif(array_key_exists('tel', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $telErr = 'Invalid format!';
    } else{
    $tel = $_POST['tel'];
}
}

if(isset($_POST['firstName'],
        $_POST['lastName'],
        $_POST['gender'],
        $_POST['wines'],
         $_POST['comments'],
         $_POST['tel'],
         $_POST['privacy'])) { 
    $to = 'ahemdhamads@gmail.com';
    $subject = 'Test Email' .date('m/d/y');
    $body = ''.$firstName.' has filled out your form '.PHP_EOL.'';
    $body .= 'Email: '.$email.' '.PHP_EOL.'';
    $body .= 'Your phone number : '.$tel.' '.PHP_EOL.'';

    $body .='Your wines: ' .myWines().' '.PHP_EOL.'';

    $body .= 'Gender:'.$gender.' '.PHP_EOL.'';
    $body .= 'Comments: '.$comments.'';

    $headers = array(
    'From' => 'no-reply@lca.red',
    'Reply-to' => ''.$email.'');

    mail($to, $subject, $body, $headers);
    header('Location: thx.php');
    
} // end isset
    
    

} // close if $_SERVER request method

?>