<?php


        include ("../../GameEngine/Database.php");
        include ("../../GameEngine/Admin/database.php");
        include ("../../GameEngine/config.php");
        

        mysql_connect(SQL_SERVER, SQL_USER, SQL_PASS);
        mysql_select_db(SQL_DB);

        $database->populateOasisdata();  
        $database->populateOasis();
        
        


        header("Location: ../index.php?s=6");

?>