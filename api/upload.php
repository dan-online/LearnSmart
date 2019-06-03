<?php
echo json_encode($_FILES['fileToUpload']);
echo  '<br>' . '/var/www/html/1819dw/LearnSmart/uploads/' . $_FILES["fileToUpload"]['name'] . '<br>';

    if ( move_uploaded_file($_FILES['fileToUpload']['tmp_name'], '/var/www/html/1819dw/LearnSmart/uploads/' . $_FILES['fileToUpload']['name'])) {
        echo "<img src='" . __DIR__. $_FILES['fileToUpload']["name"] . "'>";
    } else {
       echo "File was not uploaded";
    }
    
    include("../main/footer.php")
?>