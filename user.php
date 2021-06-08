<?php
class user{
    private $email;
    private $answers;
    private $score;
    private $db;
    public function __construct(){
    }
    public function set_email($email){

        $this->$email=$email;
    }
    public function set_answers($answers){

        $this->$answers=$answers;
    }
    public function set_score($score){

        $this->$score=$score;
    }
    public function get_email()
    {
        return $this->$email;
    }
    public function get_answers()
    {
        return $this->$answers;
    }
    public function get_score()
    {
        return $this->score;
    }
    public function saveemail($email)
    { 
    $db=mysqli_connect('localhost','root','','bznsbuilder'); 
     mysqli_query($db,"INSERT INTO `user`(`email`) VALUES ('$email')");

    }
    public function saveanswers($answers,$email)
    { 
        $db=mysqli_connect('localhost','root','','bznsbuilder');
    mysqli_query($db,"UPDATE `user` SET `answer`='$answers' WHERE email='$email'");
    }
    public function savescore($score,$email)
    { 
    $db=mysqli_connect('localhost','root','','bznsbuilder');
    mysqli_query($db,"UPDATE `user` SET `score`='$score' WHERE email='$email'");
    }
    public function score_is($email)
    {
        $db=mysqli_connect('localhost','root','','bznsbuilder');
    $score=mysqli_query($db,"SELECT  `score` FROM `user` WHERE `email`='$email'");
    $score=mysqli_fetch_array($score);
    return $score;
    }
    public function uniqueemail($email)
    {
        $db=mysqli_connect('localhost','root','','bznsbuilder');
        $found=mysqli_query($db,"SELECT email FROM user Where email='$email'");  
        $found=mysqli_fetch_array($found);
        return $found;
    }
}

?>