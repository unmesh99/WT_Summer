
<?php

$fanme=$_POST["fname"];
$lname=$_POST["lname"];
$age=$_POST["age"];

$email=$_POST["email"];
$pass=$_POST["pass"];
$file=$_POST["file"];
$pattern= "([0-9])";


if (empty($fname) || empty($lname))
{
    echo "Please enter your name <br>";
}
else
if(preg_match($pattern,$fname) || preg_match($pattern,$lname))
{
    echo "Don't enter numeric numbers";

}
else{
    echo "First name is ".$fname."<br> Last name is ".$lname;
}
if (isset($_POST["desig"]))
{
    echo " <br> Designation is ".$_POST["desig"];
}
else{
    echo "<br> Choose your designation";
}
if(!empty($age)){
    echo"<br>Age is ".$age;
}
if(isset($_POST["JAVA"]) || isset($_POST["PHP"]) || isset ($_POST ["C++"]))
{
 echo"Language preffered - <br>";
}

 if(isset($_POST["JAVA"]))
 {
     echo $_POST["JAVA"]."<br>";
    }
     if(isset($_POST["PHP"]))
     {
        echo $_POST["PHP"]."<br>";
    }
        if(isset($_POST["C++"]))
        {
            echo $_POST["C++"]."<br>";
 }
else{
    echo "<br>Please select your preferred language <br>";
}
if(!empty($_POST["email"])){
    echo"Email is".$email;
}
else{
    echo "Enter your mail<br>";

}
if(strlen($pass)>6){
    echo "Password given<br>";
}
else{
    echo "Password must be more than 6 characters";
}
