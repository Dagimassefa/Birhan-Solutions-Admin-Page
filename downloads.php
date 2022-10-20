<?php
if (!empty($_GET['file'])) {
    $fileName  = basename($_GET['file']);
    // The location of the PDF file
    // on the server
    $filePath  = "C:\\Users\\Dagi\\Downloads\\" . $fileName;

    if (!empty($fileName) && file_exists($filePath)) {
        header('Content-type: application/pdf');

        header('Content-Disposition: inline; filename="' . $fileName . '"');

        header('Content-Transfer-Encoding: binary');

        header('Accept-Ranges: bytes');

        // Read the file
        @readfile($fileName);
        //read file 
        readfile($filePath);
        exit;
    } else {
        echo "file not exit";
    }
}
