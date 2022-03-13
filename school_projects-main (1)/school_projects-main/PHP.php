<?php

echo "<h1>Client or User Log Data from contactus.html</h1>";
$txtName = $_POST['txtName'];
$inpBorn = $_POST['inpBorn'];
$txtEmail = $_POST['txtEmail'];
$txtTel = $_POST['txtTel'];
$txtObs = $_POST['txtObs'];
$ckNewslatter = $_POST['cbChannel'];
$optCar = $_POST['optCar'];


echo "<br>Name: $txtName";
echo "<br>Email: $txtEmail";
echo "<br>Tel: $txtTel";
echo "<br>Birthday: $inpBorn";


switch($optCar){

    case 'corsa-sedan':
        echo "<br>Selected Car: Corsa<br><img src='style/corsa-sedan.jpg' style='max-width:40vw; max-height:30vh;'>";
        break;
    case 'corsa':
        echo "<br>Selected Car: CorsaSendan<br><img src='style/corsa.jpg' style='max-width:40vw; max-height:30vh;'>";
        break;
    case 'cybertruck':
        echo "<br>Selected Car: Cybertruck<br><img src='style/cybertruck.jpeg' style='max-width:40vw; max-height:30vh;'>";
        break;
}
echo "<br>";


/*Verify if the checkbox is set or non-default, by definition or non-default, when the option is not variable,
 set in reverse of the variables, and yes there is a mark of this option, which is not variable.*/
if (isset($ckNewslatter)){
    echo "<br>Newslatter confirmation: yes";
}else{
    echo "<br>Newslatter confirmation: not";
}


$channels = "";
foreach($_POST['cbChannel'] as $values){
    $channels.="\n".$values;
}

echo " ---> channels: $channels";



?>
