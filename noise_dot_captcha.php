
<?php 

include('captcha_classes/Noise_dot_captcha.php');
// echo create_image("hii");


$Noise_dot_captcha = new Noise_dot_captcha();
$Noise_dot_captcha->width='250';
$Noise_dot_captcha->height='80';



echo $Noise_dot_captcha->html();

echo $_SESSION[Add_security_code];



 ?>