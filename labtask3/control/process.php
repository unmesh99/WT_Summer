<?php 
$language="";
$_POST["des"]="";
if(isset($_POST["Submit"]))
{
    $fname= $_POST["fname"];
$lname= $_POST["lname"];

$age=$_POST["age"];
$des=$_POST["des"];
$email=$_POST["email"];
$pass=$_POST["pass"];
//$file=$_POST["file"];


$pattern = "([0-9])";

if(empty($fname) || empty($lname)){
    echo "Name is kept unfilled";
}

else{
if(preg_match($pattern, $fname) || preg_match($pattern, $lname))
{
    echo "Enter name without any numeric value";
}
else{
    echo "First name is ".$fname."<br>Last name is ".$lname;
}
}

if(isset($_POST["des"]))
{
    echo "<br>Designation is ".$_POST["des"] ;
}
else{
    echo "<br>Select designation please";
}

if(!empty($age)){
    echo "<br>Age is ".$age;
}
if(isset($_POST["l1"]) || isset($_POST["l2"]) || isset($_POST["l3"])){
    echo "<br>Language preferred - <br>";
    if(isset($_POST["l2"])){
        echo $_POST["l3"]." <br>";
        if($language==""){
            $language=$_POST["l1"];
        }
        else{
            $language=$language.",".$_POST["l1"];
        }
    }
    if(isset($_POST["l2"])){
        echo $_POST["l2"]." <br>";
        if($language==""){
            $language=$_POST["l1"];
        }
        else{
            $language=$language.",".$_POST["l2"];
        }
    }
    if(isset($_POST["l3"])){
        echo $_POST["l3"]." <br>";
        if($language==""){
            $language=$_POST["l1"];
        }
        else{
            $language=$language.",".$_POST["l2"];
        }
    }
}
else{
    echo "<br>Preferred language must be selected<br>";
}
if(!empty($_POST["email"])){
    echo"Email is".$email;
}
else{
    echo "Email must be entered";
}
echo"<br>";
if(strlen($pass)>6){
    echo "Password given";
}
else{
    echo "Password should be more than 6 characters";
}

$formdata = array(
    'firstname'=>$_POST["fname"],
    'lastname'=>$_POST["lname"],
    'age'=>$_POST["age"],
    'pass'=>$_POST["pass"],
    'email'=>$_POST["email"],
    'designation: '=> $_POST["des"],
    'language' => $language

   

);
$existingdata = file_get_contents('../data/data.json');
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$formdata;


$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
if(file_put_contents("../data/data.json",$jsondata))
{
    echo '<br>Data Successfully Saved<br>';
}
else
echo '<br>No Data Saved<br>';

$data = file_get_contents("../data/data.json");
$mydata = json_decode($data);
/*foreach($mydata as $myobject)
     {
     foreach($myobject as $key=>$value)
    {
        echo $key." => ".$value."<br>";
    }
    }*/
}
?>