function mailform($mailto, $subj, $messageID,
                  $unsubcode, $accountID){
  //define values to use to format the email
  $unsubLink="http://funwebdev.com/unsub.php?id=$unsubcode
               &userID=$accountID";
  $trackURL="http://funwebdev.com/msg=$messageID
              &userID=$accountID";
  $trackImg="http://funwebdev.com/img.php?msg=$messageID
             &userID=$accountID";
  //unique boundary string
  $bound = uniqid("FUNWEBDEV_MAIL_EXAMPLE");

  $rn = "\r\n";
  // define a plain (no HTML) footer to illustrate tracking
  // link inclusion.
  $plainfooter="$rn$rn$trackURL$rn$rn"; $plainfooter.="---------------------$rn";
  $plainfooter.="To unsubscribe from this campaign, please click the
                 following link.$rn";
  $plainfooter.=$unsubLink;

  //now define an HTML version of the footer to illustrate web bugs
  $htmlfooter="<br><br><a href='$trackURL'>funwebdev.com</a>"; //hidden image.
  $htmlfooter.="<img src='$trackImg'>"; $htmlfooter.="<hr><br>";
  $htmlfooter.="<p>To unsubscribe from this campaign, please click
                 the following link.</p>";
  $htmlfooter.="<a href='$unsubLink'>$unsubLink</a>";
  
  // Override SMTP headers
  $headers='From: System Administrator <donotreply@funwebdev. com>';
  $headers .= $rn;
  $headers .= "MIME-Version: 1.0\r\n"; //specify MIME ver. 1.0

  //tell email client this email contains alternate versions
  $headers.= "Content-Type: multipart/alternative";
  $headers.= "boundary = $bound".$rn.$rn;
  $headers.= "This is a MIME encoded message.".$rn.$rn;

  $message = "..."; //Message TAKEN FROM DB based on messageID
  //declare this is the plain text version
  $headers .= "--$bound" . $rn . "Content-Type: text/plain"; $headers .= "charset= ISO-8859-1".$rn;
  $headers .= "Content-Transfer-Encoding: base64".$rn.$rn;
  //actually output the plaintext version (base64 encoded)
  $headers .= chunk_split(base64_encode($message.$plainfooter));

  $HTMLMessage =//Get HTML message from DB based on messageID //declare we’re about to add the HTML version
    $headers .= "--$bound\r\n" . "Content-Type: text/html"; $headers .= "charset=ISO-8859-1".$rn;
  $headers .= "Content-Transfer-Encoding: base64".$rn.$rn;
  //actually output the plaintext version (base64 encoded)
  $headers .= chunk_split(base64_encode($HTMLMessage.$htmlfooter));

  mail($mailto,$subj, "" ,$headers); //the PHP mail function
}
