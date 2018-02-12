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
            require_once "PHP/Model/TodoItem.php";
            require_once "PHP/Model/HtmlBuilder.php";

            // Get the array of items
            $todoItemArray = array(
                new TodoItem("Haha1"),
                new TodoItem("Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String Very Long String "),
                new TodoItem("Haha2")
            );
            $builder = new HtmlBuilder();
            $builder->build($todoItemArray);

            // Display contents
            echo $builder->content;
        ?>


        <!-- Temporary -->
        <hr>
        <form action="PHP/Controller/Test.php" method="post">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            <input type="submit">
        </form>

    </body>
</html>
