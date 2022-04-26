<?php

if(isset($_POST['submit']))
{

    $ftp_server = "localhost";
    $ftp_user_name = "test";
    $ftp_user_pass="";
    $remote_dir = "/". basename($_FILES['file']['name']);//to be uploaded
    $file = $_FILES['file']['tmp_name'];

    $destination_file = $remote_dir . $file;

    // set up basic connection
    $conn_id = ftp_connect($ftp_server) or die('Error connecting to ftp server...');

    // login
    $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

    if (!$login_result) {

        echo "not correct";
    }
    else {

        // upload file
        if ( ftp_put($conn_id, $remote_dir, $file, FTP_BINARY) ) 
        {
            echo "succesfully uploaded $file\n";
            header("Location: http://localhost/web/");
            exit();
        } 
        else 
        {
            echo "There was a problem while uploading $file\n";
            header("Location: http://localhost/web/");
            exit();
        }

    }


    // close conntection
    ftp_close($conn_id);

}

// https://www.php.net/manual/en/book.ftp.php

?>