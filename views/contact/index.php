    <?php
    
        function has_header_injection($str){
            return preg_match("/[\r\n]/", $str);
        }
        
        if(isset ($_POST['contact_submit'])){
            
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $msg = $_POST['message'];
            
            if(has_header_injection($name) || has_header_injection($email)){
                die();
            }
            
            if(!$name || !$email || !$msg){
                echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block">Try again</a>';
                exit;
            }
            
            $to = "savnikvid5@gmail.com";
            
            $subject = "$name sent you a message via Sharepost your contact form";
            
            $message = "Name: $name\r\n";
            $message .= "Email: $email\r\n";
            $message .= "Message:\r\n$msg";
            
            if(isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe'){
                $message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
            }
            
            $message = wordwrap($message, 72);
            
            $headers = "MIME-version: 1.0\r\n";
            $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
            $headers .= "From: $name <$email> \r\n";
            $headers .= "X-Priority: 1\r\n";
            $headers .= "X-MSMail-Priority: High\r\n\r\n";
            
            mail($to, $subject, $message, $headers);
    
    ?>
    
    <h5>Thank you for contacting us</h5>
    <p>Please allow 24 hours for a response</p>
    <p><a href="/final" class="button block">&laquo; Go to home page</a></p>
    
    <?php }else{ ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
            <h1>Contact us</h1>
                </div>
                <hr class="my-4">
                <div class="col-md-12">
                    <form>
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" placeholder="Your message" rows="5"></textarea>
                  </div> 
                  <input type="submit" class="btn btn-primary" value="Send Message">
                </form>
                </div>
            </div>
        </div>
    <?php } ?>