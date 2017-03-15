<?php
require_once('recaptchalib.php');
$privatekey = "6Lf1JucSAAAAAMUvh7s1KNP4PAoapM_X_oRPlPl1";
$resp = recaptcha_check_answer ($privatekey,
                        $_SERVER["REMOTE_ADDR"],
                        $_REQUEST["recaptcha_challenge_field"],
                        $_REQUEST["recaptcha_response_field"]);

if (!$resp->is_valid) 
{
// What happens when the CAPTCHA was entered incorrectly
echo "Error";
} 

else 
{
echo "Valid";
}
?>