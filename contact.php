<?php


$contact = new User;
if (isset($_POST['submit'])) {


//echo "<pre>";print_r($_POST);echo "</pre>";
echo $name = $contact->secure($_POST['f1']);
echo$phone = $contact->secure($_POST['f2']);
echo$email = $contact->secure($_POST['f3']);

echo$message = $contact->secure($_POST['f5']);
$subj = $contact->secure($_POST['f1']);
if (!empty($name)&&!empty($phone)&&!empty($email)&&!empty($country)&&!empty($message)) {
	if (!$contact->EmailValidate($email)) {
		echo "failed email";
		header("Location: ../contact-us.php?message=invalidemail");
		exit();
	}elseif (!$contact->NamesValidate($name)) {
		header("Location: contact-us.php?message=invalidenames");
		exit();
echo "failed name";
	}elseif (!$contact->NamesValidate($country)) {
		# code...
		header("Location: contact-us.php?message=invalidcountry");
		exit();
	}
	/*elseif (!$contact->ValidateMobile($phone)) {
		echo "failed phone";
	}*/
	else{
		$subject = 'Silent Pips Contact Us';
		$to='emmanuel4unib@gmail.com';
		$message = ''.$subj.'
Names: '.$name.'
Email: '.$email.'
Phone: '.$phone.'
Country: '.$country.'
'.$message;
		$headers = "From: Silentpipsfx.com Contact"." <".$email.">"; 
		if(mail($to, $subject, $message,$headers)){
			header("Location: contact-us.php?message=done");
		exit();
		}else{
		header("Location: contact-us.php?message=failed");
		exit();
		}
	}

}else{
	header("Location: contact-us.php?message=emptyfield");
		exit();
}
}else{
    header("Location: contact-us.php?message=error");
		exit();
}
?>