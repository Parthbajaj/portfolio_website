<?php

if(isset($_POST['submit'])){
  
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
  
    $today = date("d/m/Y");
  
  require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';
  
                $mail = new PHPMailer();
                // $mail->SMTPDebug = 3;  
                $mail->isSMTP();  
                $mail->Mailer = "smtp"; 
               
                $mail->SMTPAuth = true;                            
                $mail->Host = 'smtp.gmail.com';  
                $mail->SMTPAuth = true;                             
                $mail->Username = 'sampleemail743@gmail.com';              
                $mail->Password = 'BE3=>`q>jW`TLT~9';                          
                $mail->SMTPSecure = 'tls';                            
                $mail->Port = 587;                                  
                
                $mail->setFrom('sampleemail743@gmail.com', 'HeartBeat');
                $mail->addAddress('bajajparth8@gmail.com', 'Parth');
                
                $mail->isHTML(true);                                
                
                $mail->Subject = $name.' - Contact Form(Portfolio) - '.$today;
            
                 
                 $body = "";
                 
                   $body .= "<table style='border: 1px solid black'> 
                        <tr>
                        <th style='border: 1px solid black'>Name</th>
                        <th style='border: 1px solid black'>Email</th>
                        <th style='border: 1px solid black'>Phone</th>
                        <th style='border: 1px solid black'>Subject</th>
                        <th style='border: 1px solid black'>Message</th>
                        </tr>";    
  
  
                   $body .= "<tr>
                        <td style='border: 1px solid black'>".$name."</td>
                        <td style='border: 1px solid black'>".$email."</td>
                        <td style='border: 1px solid black'>".$phone."</td>
                        <td style='border: 1px solid black'>".$subject."</td>
                        <td style='border: 1px solid black'>".$message."</td>
                       
                        
                        </tr>";
  
                  $body .= "</table>";
                  $mail->Body = $body;
                  $mail->send();

                
}

?>
