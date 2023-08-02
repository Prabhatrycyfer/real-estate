<?php
    include('index.php');
    // Taking all values from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    if(isset($_POST['submit'])){
    // Performing insert query execution
    // here our table name is contact
        $query = "INSERT INTO notify(name,email,phone)VALUES('$name','$email','$phone')";
        $result=mysqli_query($conn,$query);
        if($result){
                echo '<script type="text/javascript">';
    		    echo 'window.location.href = "https://signatureglobal.estate/thank-you.php"';
    		    echo '</script>';
    		}
    		else{
    		    echo '<script type="text/javascript">';
    			echo 'window.location.href = "https://signatureglobal.estate"';
    		    echo '</script>';
    		}
    }
    
    $to = "maxlandbase93@gmail.com, vishalkaushal.finndit@gmail.com";
    $subject = $_POST['name'] ;
    $message = "Name: ".$_POST['name']."\r\n";
    $message1 = "Email: ".$_POST['email']."\r\n";
    $message2 = "Phone: ".$_POST['phone']."\r\n";
    $message .= $message1 .= $message2;
    $from = $_POST['name'];
    $headers = "From:".$_POST['name'];
    if(isset($_POST['submit'])){
        if(mail($to,$subject,$message,$headers)){
            echo "Mail Sent";
        }
        else{
           echo "Email Failed";
        }
    }
?>