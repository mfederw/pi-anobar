#!/usr/bin/php

$pianobar_fifo = "/home/pi/.config/pianobar/ctl";

$file = fopen(pianobar_fifo, "w");

fwrite($file, "s");
fwrite($file, "5\n");

fclose($file);
