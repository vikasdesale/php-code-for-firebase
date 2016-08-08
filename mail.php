<?php
  $subject = "Test mail";
  $to_email = "yourmail@xyz.com";
  $to_fullname = "John Doe";
  $from_email = "from@example.com";
  $from_fullname = "Jane Doe";
  $headers  = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  // Additional headers
  // This might look redundant but some services REALLY favor it being there.
  $headers .= "To: $to_fullname <$to_email>\r\n";
  $headers .= "From: $from_fullname <$from_email>\r\n";
  $message = "<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\" xml:lang=\"en\">\r\n
  <head>\r\n
    <title>Hello Test</title>\r\n
  </head>\r\n
  <body>\r\n
    <p></p>\r\n
    <p style=\"color: #00CC66; font-weight:600; font-style: italic; font-size:14px; float:left; margin-left:7px;\">You have received an inquiry from your website.  Please review the contact information below.</p>\r\n
  </body>\r\n
  </html>";
  if (!mail($to_email, $subject, $message, $headers)) { 
    print_r(error_get_last());
  }
  else { ?>
    <h3 style="color:#d96922; font-weight:bold; height:0px; margin-top:1px;">Thank You For Contacting us!!</h3>
  <?php
  }
  ?>