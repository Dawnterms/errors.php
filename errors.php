<?php
//define variables and empty values
$nameErr=$passwordErr=$emailErr =$genderErr=$websiteErr="";
$name=$password=$email=$gender=$comment=$website="";
if ($_SERVER["REQUEST_METHOD"] =="POST"){
    //error message for name
    if(empty($_POST["name"]))
    {
    $nameErr ="Name is required";
    }
    else{
        $name= test_input($_POST["name"]);
    }
    //error message for password
    if (empty($_POST["password"]))
    {
        $passwordErr="password is required";}
        else{
            $password=test_input($_POST["password"]);
        }
 //error message for email
 if(empty($_POST["email"])){
    $emailErr="email is required";
}
else{
    $email=test_input($_POST["email"]);
}
//error message for website
if(empty($_POST["website"])){
    $websiteErr="";}
    else{
        $website=test_input($_POST["website"]);}

//error message for comment
if (empty($_POST["comment"])){
    $comment="";
}
else{
    $comment=test_input($_POST["website"]);
}
if(empty($_POST["gender"])){
    $genderErr="gender is required";
}
else{
    $gender=test_input($_POST["gender"]);
}
?>
    }
    
    
    
   
