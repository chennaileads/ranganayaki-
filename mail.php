<?php
$msg="";
extract($_REQUEST);
$msg='<div id="mail_body">

    	<center>
        	<h1>Contact Form</h1>
            <p><b>'.date("d-m-y | h:i:s a").'</b></p>
       	</center>
    <table width="100%">
    	<tr>
        	<td align="left" width="30%">
            	<b>Name</b>
            </td>
            <td align="left" width="70%">
            	<p>: '.$name.'</p>
            </td>
       </tr>
       <tr>
            <td align="left" width="30%">
            	<b>Email</b>
            </td>
            <td align="left" width="70%">
            	<p>: '.$email.'</p>
            </td>
      	</tr>
       <tr>
            <td align="left" width="30%">
            	<b>Mobile</b>
            </td>
            <td align="left" width="70%">
            	<p>: '.$phone.'</p>
            </td>
       </tr>
     
             
       <tr>
            <td align="left" width="30%">
            	<b>Message</b>
            </td>
            <td align="left" width="70%">
            	<p>: '.$message.'</p>
            </td>
        </tr>
    </table>
    
</div>
';



// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: noreply@ranganayakibuilders.com \r\n";
$subject  = 'Contact Form';
$to = 'ranganayakibuilders@gmail.com';

mail($to,$subject,$msg,$headers);

echo '<script>alert("Sent Successfully");window.location.href="contact.html";</script>';
?>
