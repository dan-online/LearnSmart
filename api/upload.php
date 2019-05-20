<?php
    $hi = move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "1819dw/LearnSmart/uploads/" . basename($_FILES['file']['name']));
    echo $_SERVER['DOCUMENT_ROOT'] . "1819dw/LearnSmart/uploads/" . basename($_FILES['file']['name'])
?>