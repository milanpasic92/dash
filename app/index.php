<?php

$yourEmail = "you@gmail.com";
$yourEmailPassword = "your password";

$mailbox = imap_open("{imap.gmail.com:993/ssl}INBOX", $yourEmail, $yourEmailPassword);
$mail = imap_search($mailbox, "ALL");
$mail_headers = imap_headerinfo($mailbox, $mail[0]);
$subject = $mail_headers->subject;
$from = $mail_headers->fromaddress;
imap_setflag_full($mailbox, $mail[0], "\\Seen \\Flagged");
imap_close($mailbox);
