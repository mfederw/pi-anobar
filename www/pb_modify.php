<?php

$ctl_fifo = "/home/pi/.config/pianobar/ctl";

   # phpinfo();
if (isset($_POST["station"])) {
    $station = $_POST["station"];
    system("echo 's$station' > $ctl_fifo");
	sleep(4);
}

if (isset($_POST["love"])) {
    system("echo -n '\+' > $ctl_fifo");
	sleep(3);
}

if (isset($_POST["ban"])) {
    system("echo -n '-' > $ctl_fifo");
	sleep(3);
}

if (isset($_POST["skip"])) {
    system("echo -n 'n' > $ctl_fifo");
	sleep(3);
}

if (isset($_POST["tired"])) {
    system("echo -n 't' > $ctl_fifo");
	sleep(3);
}

if (isset($_POST["quit"])) {
    system("echo -n 'q' > $ctl_fifo");
    copy("/var/www/stopped.php","/var/www/playing.php");

    sleep(3);
}

if (isset($_POST["start"])) {
	system("touch /tmp/start_pianobar");
	sleep(15);
	system("rm /tmp/start_pianobar");
}

if (isset($_POST["volup"])) {
    system("echo -n ')' > $ctl_fifo");
}

if (isset($_POST["voldwn"])) {
    system("echo -n '(' > $ctl_fifo");
}

if (isset($_POST["pause"])) {
    system("echo -n 'p' > $ctl_fifo");
}

header("Location:pb.php");
?>
