<?php

//phpdoc
/**
 * Speichert einen Eintrag in der Logdatei
 *
 * @param string $message Text der geloggt werden soll
 * @param string $filename Logdateiname
 */
function logMessage($message, $filename='resources/log/logfile.txt')
{
    $logdatei = fopen($filename, "a");
    fputs($logdatei, date("d.m.Y, H:i:s", time()) . ": " .  $message . "\r\n");
    fclose($logdatei);
}
