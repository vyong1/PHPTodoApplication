<?php
    echo __DIR__;
    // See http://laravel-recipes.com/recipes/118/setting-up-the-sqlite-database-driver
    try
    {
        $db = new PDO("sqlite:C:/Users/Viroon Yong/Desktop/PHP Todo Website/Database.db");
        echo 'Successful connection';
    }
    catch(PDOException $e)
    {
        echo 'Connection failed: ' . $e->getMessage();
    }
?>