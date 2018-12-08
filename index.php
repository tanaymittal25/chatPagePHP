<?php

    include 'db.php';    

?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <title>Chat Box</title>
    <link rel = "stylesheet" href = "style.css" media = "all" />
</head>
<body>

    <div class = "container">
        <div class = "chat_box">

            <?php

                $query = "SELECT * FROM chat ORDER BY ID DESC";
                $run = $con->query($query);

                while($row = $run->fetch_array())  :   
            ?>
            <div class = "chat_data">
                <span class = "username">
                    <?php
                        echo $row['Name'];
                    ?>
                </span> :
                <span class = "message">
                    <?php
                        echo $row['Message'];
                    ?>
                </span>
                <span class = "time">
                    <?php
                        echo $row['Date'];
                    ?>
                </span>
            </div>

            <?php endwhile ?> 
        </div> 
    <form method = "POST" action = "index.php">
    <input type = "text" name = "name" placeholder = "Name"/>
    <textarea name = "enter message" placeholder = "Message"></textarea>
    <input type = "submit" name = "submit" value = "Send"/>

    </div>
    
</body>
</html>