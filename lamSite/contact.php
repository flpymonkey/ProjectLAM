<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data" class="col-md-8">
    <div class="row">
                <div class="col-md-12">
                <h2>Send Enquiry</h2>
                </div>
                <input type="hidden" name="action" value="submit">
    			<div class="col-md-6">
                	<p>Name</p>
    				<input type="text" name="name" id="name" placeholder="Your Name" value="" />
     			</div>
                <div class="col-md-6">
                    <p>Email</p>
                    <input type="text" name="email" id="email" placeholder="Your Email" value=""/>
                </div>
                <div class="col-md-12">
                    <p>Message</p>
                    <textarea name="message" id="message"  placeholder="Write your message here..."></textarea>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-offset-6">
                    <input type="submit" value="Send email"/>
                </div>
    </div>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("youremail@yoursite.com", $subject, $message, $from);
		echo "Email sent!";
	    }
    }  
?>