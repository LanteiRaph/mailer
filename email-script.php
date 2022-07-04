<?php

if(isset($_POST)){

    // //Extract the values{name, email, to,form and msg with subject} from the request 
    // $Name = $_POST['Name'];
    // $Email = $_POST['Email'];
    // $subjectName = $_POST['subject'];
    // //Extract the msg to send 
    // $message = $_POST['message'];
    // //
    // //Compile the massege to send.Formated as HMTl for broswer
    // $to = 'beliorotich@gmail.com';
    // //Message to send
    // $subject = $subjectName;
    // //
    // //Compile haeders for the request.
    // $headers = "MIME-Version: 1.0" . "\r\n";
    // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // $headers .= 'From: '.$Name.'<'.$Email.'>' . "\r\n".'Reply-To: '.$Name."\r\n" . 'X-Mailer: PHP/' . phpversion();
    // //
    // //Format Htl respose value
    // $message = '<!doctype html>
	// 		<html lang="en">
	// 		<head>
	// 			<meta charset="UTF-8">
	// 			<meta name="viewport"
	// 				  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	// 			<meta http-equiv="X-UA-Compatible" content="ie=edge">
	// 			<title>Document</title>
	// 		</head>
	// 		<body>
	// 		<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
	// 			<div class="container">
    //              '.$message.'<br/>
    //                 Regards<br/>
    //               '.$Name.'
	// 			</div>
	// 		</body>
	// 		</html>';
    // $result = @mail($to, $subject, $message, $headers);
    // //
    // if($result){
    //     echo 'True';
    // }else{
    //     echo 'false';
    // }
    // echo $result;
    // echo '<script>alert("Email sent successfully !")</script>';
    // // echo '<script>window.location.href="index.php";</script>';
}

?>