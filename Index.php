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
            require_once "PHP/HtmlBuilder.php";

            // Get the array of items
            $itemArray = array(
                new TodoItem("Haha1"),
                new TodoItem("Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String "),
                new TodoItem("Haha2")
            );
            $builder = new HtmlBuilder();

            // Build up the html for each item
            foreach ($itemArray as $item)
            {
                $builder->addTodoItem($item);
            }

            // Display contents
            echo $builder->content;
        ?>
    </body>
</html>
