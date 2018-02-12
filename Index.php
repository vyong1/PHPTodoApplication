<!DOCTYPE html>
<html>
    <head>
        <title>My Todo</title>
        <link rel="icon" href="Resources/favicon.png"/>
        <script src="Resources\index.js"></script>
        <link rel="stylesheet" href="Resources\index.css" />
    </head>
    <body>   
        <?php
        $strArray = array(
            "Haha1",
            "Haha2"
        );
        foreach ($strArray as $s)
        {
            echo "$s";
        }
        ?>
    </body>
</html>
