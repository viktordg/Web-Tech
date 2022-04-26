<!DOCTYPE html>
 
<html>
    <head>
        <title> FTP сървър </title>
        <meta charset="UTF-8">
    </head>
 
    <body>
 
        <h3> Добре дошли! </h3>
 
        <h3> Качване </h3>
        <form action="web.php" enctype="multipart/form-data" method="post">
            <input name="file" type="file" >
            <input type="submit" value="Качи файл" name="submit" >
        </form>
 
        <h3> Сваляне </h3>
        <form action="web_download.php" method="post">
            <input name="file_name" type="text" >
            <input type="submit" value="Свали файл" name="submit" >
        </form>
 
        <h3> Снимки </h3>
 
        <?php
 
            foreach(glob("upload/*.jpg") as $filename){
 
                echo "<img src='$filename' alt='$filename' style='width: 450px; height: 450px;' />";
                echo "<br>";
            }
 
            echo "<br>";
 
            foreach(glob("upload/*.png") as $filename){
 
                echo "<img src='$filename' alt='$filename' style='width: 450px; height: 450px;' />";
                echo "<br>";
            }  
 
            echo "<br>";
 
        ?>
 
    </body>
</html>