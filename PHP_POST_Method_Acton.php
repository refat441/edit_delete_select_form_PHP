<?php
$first_name = $_POST['first_name'];
$surename = $_POST['surename'];
$mail_number = $_POST['mail_number'];
$password = $_POST['password'];
$date = $_POST['date'];
$costom_select = $_POST['costom_select'];
$radio_custom = $_POST['radio_custom'];
?>

<html>
    <body>
        <h3>First_Name : <?php print $first_name; ?></h3>
        <h3>Surename : <?php print $surename; ?></h3>
        <h3>Mail_Number : <?php print $mail_number; ?></h3>
        <h3>Password : <?php print $password; ?></h3>
        <h3>Date: <?php print $date; ?></h3>
        <h3>Select : <?php print $costom_select; ?></h3>
        <h3>radio_custom : <?php print $radio_custom; ?></h3>
    </body>
</html>