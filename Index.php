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
            // Require statements
            require_once "PHP/TodoItem.php";

            // Get the array of items
            $itemArray = array(
                new TodoItem("Haha1"),
                new TodoItem("Haha2")
            );

            // Build up the html for each item
            foreach ($itemArray as $item)
            {
                echo "$item->content<br/>";
            }
        ?>
    </body>
</html>
