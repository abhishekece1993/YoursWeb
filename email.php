<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $to = 'admin@yourswebdesign.com';
    $subject = 'Form Submitted';
    $message = $name;
    $message .= "<br />";
    $message .= $email;
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html\r\n";

//send email
$sendMail = mail($to,$subject,$message,$headers);

    if($sendMail)
{
echo "Email Sent Successfully";
}
else

{
echo "Mail Failed";
}
}
?>