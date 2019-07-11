# Captcha-Class-File-in-Php-
You can Simplay call the captcha class file  where you want to use captcha  and use captcha image and captcha text 
<h1> Use This Captcha In Another File </h1>
<p>copy and paste This code in that file where you want to use this captcha </p>

include('captcha_classes/Noise_dot_captcha.php');
// echo create_image("hii");


$Noise_dot_captcha = new Noise_dot_captcha();
//You can give dynamically height and width Like This 
// $Noise_dot_captcha->width='250';
// $Noise_dot_captcha->height='80';



echo $Noise_dot_captcha->html();

echo $_SESSION[Add_security_code];
