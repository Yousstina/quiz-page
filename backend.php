<?php
session_start();
 include 'database\user.php';
 $newuser=new user;
 //button start
 if(isset($_POST['submit']))
 { $email=$_POST['email'];
    $_SESSION['email']=$email;
    $found=$newuser->uniqueemail($email);
    if($found){
        header("Location: http://localhost/Protfolio/projects/bznbuldier/discover.html");
    }
    else
    {
      $newuser->set_email($email);
      $newuser->saveemail();
    header("Location: http://localhost/Protfolio/projects/bznbuldier/discover.html");
    }
 }
 $email=$_SESSION['email'];
$newuser->set_email($email);
 //button go to questions
 if(isset($_POST['questions']))
 {
    header("Location: http://localhost/Protfolio/projects/bznbuldier/questions.html");
 }

  //button save answer
  if(isset($_POST['saveanswer']))
  {  
      $score=0;
      $answer='';
      if($_POST['q1']==NULL)
      {
          $score=$score;
      }elseif($_POST['q1']=="yes")
      {
          $score=$score+1;
      }
      $newuser->set_score($score);
      $newuser->savescore($score,$email);
      $newuser->set_answers($_POST['q1']);
      $newuser->saveanswers($_POST['q1'],$email);
     header("Location: http://localhost/Protfolio/projects/bznbuldier/score.php");
 
  }
  //save score
  if(isset($_POST['savescore']))
  {  
     header("Location: http://localhost/Protfolio/projects/bznbuldier/score.php");
  }

  //sending email 
  if(isset($_POST['send']))
  {
    $to = $_POST['cofounderemail'];
    $subject = "bznsBulider";
    $txt = "Your friend send you invite to grow your bussniess in BznsBulider";
    $headers = "From: companyname@example.com" . "\r\n" .
    "CC: name@example.com";
    
    mail($to,$subject,$txt,$headers);
  }
?>