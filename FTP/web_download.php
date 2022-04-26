<?php
 
if(isset($_POST['submit'])) // Profile.pdf
{
 
    $ftp_server = "localhost";
    $ftp_user_name = "test";
    $ftp_user_pass="";
    $server_file = $_POST['file_name'];
    $local_file = "C:\Users\Viktor Georgiev\Desktop\Download_Here" . "\\" . $server_file; //to be download
   
 
    $conn_id = ftp_connect($ftp_server) or die('Error connecting to ftp server...');
 
    // login
    $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
 
 
    if ( ftp_get($conn_id, $local_file, $server_file, FTP_BINARY) )
    {
        echo "sucessfully download file to $local_file \n";
        header("Location: http://localhost/web/");
        exit();
    }
    else
    {
        echo "problem to dowload file \n";
        header("Location: http://localhost/web/");
        exit();
    }
 
 
    ftp_close($conn_id);
}
 
// https://www.php.net/manual/en/function.ftp-get.php
 
?>