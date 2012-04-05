<?php
/**
 * 2012 by Tim Pietrusky
 * free for all and everything, just buy me a beer!
 * 
 * @TimPietrusky
 * tim-pietrusky.de
 *
 *
 * Problem:
 * you can access a webspace only via ftp. and you can not unpack the archive with your ftp client :(
 *
 *
 * Three (3) quick steps to solve your problem:
 *
 * 1. pack your files from the root directory of your page.
 *    e.g. /var/www/localhost/<your_page_files>
 *    -> you pack your files from /var/www/localhost: tar -czf unpack.tgz <your_folder_1>/ <your_folder_2>/ <your_file.php>
 * 
 * 2. upload this file (e.g. unpack.php) plus your archive (e.g. unpack.tgz) to your webspace root folder (e.g. htdocs or wtf) with your ♥ ftp tool 
 *
 * 3. switch to your browser and hit http://example/unpack.php and wait... your done!
 *    [optional] archive | e.g. http://example/unpack.php?archive=<your_archive.tgz>
 *
 */

$archive = 'unpack.tgz';

if (isset($_GET['archive'])) {
    $archive = $_GET['archive'];
}

if (file_exists($archive)) {
    echo "extracting... plz wait... just a sec bro... SHUT UP! <br>";
    exec("tar -xzf $archive 2>&1", $out);

    if ($out != null) {
        echo "error: " . print(implode("<br>", $out));
    }
} else {
    die('Archive <i>'.$archive.'</i> doesn\'t exist <br> <div class="wtf_happend" style="font-size:15em;font-weight:bold;width: 300px;-webkit-transform: rotate(90deg);-moz-transform: rotate(90deg);-ms-transform: rotate(90deg);-o-transform: rotate(90deg);transform: rotate(90deg);">:(</div>');
}

echo '<div class="hurray_we_have_a_party" style="font-size:13em;font-weight:bold;">&hearts;&hearts;&hearts;&hearts;&hearts;&hearts;&hearts;&hearts;&hearts; your done! &hearts;&hearts;&hearts;&hearts;&hearts;&hearts;&hearts;&hearts;&hearts;</div>';
