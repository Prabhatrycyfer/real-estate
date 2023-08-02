<?php
    $servername = "localhost";
    $username = "u848568311_maxland";
    $password = "Maxland@123";
    $dbname = "u848568311_maxland";
    

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
  
    // Taking all values from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $messages = $_POST['messages'];
    
    if(!empty($_POST)){
  
         $sql = "INSERT INTO contact(name,email,phone,messages)VALUES('".$name."','".$email."','".$phone."','".$messages."')";
        
        if ($conn->query($sql) === TRUE) {
          $to = "maxlandbase93@gmail.com";
            $subject = $_POST['name'] ;
            $message = "Name: ".$_POST['name']."\r\n";
            $message1 = "Email: ".$_POST['email']."\r\n"; 
            $message2 = "Email: ".$_POST['phone']."\r\n"; 
            $message3 = "messages: ".$_POST['messages']."\r\n";
            $message .= $message1 .= $message2.= $message3;
            $from = $_POST['name'];
            $headers = "From:".$_POST['name'];
            mail($to,$subject,$message,$headers);
                   
               
            echo '<script type="text/javascript">';
		    echo 'window.location.href = "https://signatureglobal.estate/thank-you.php"';
		    echo '</script>';
		}
		else{
		    echo '<script type="text/javascript">';
			echo 'window.location.href = "https://signatureglobal.estate/"';
		    echo '</script>';
		}
        
        $conn->close();
        
      
    }
    else{
         echo '<script type="text/javascript">';
		echo 'window.location.href = "https://signatureglobal.estate/"';
	    echo '</script>';
    }
    
   
?>