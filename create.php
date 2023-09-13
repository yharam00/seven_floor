<?php
require('lib/print.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php print_title(); ?></title>
    </head>
    <body>
        <h1><a href='index.php'>7층</a></h1>        
        <ol>
            <?php print_contents(); ?>
        </ol>
        <a href="create.php">create</a>
        <form action="create_process.php" method="post">
            <p><input type="text" name="title" placeholder="이름"></p>
            <p><textarea name="description" placeholder="한마디"></textarea></P>
            <p><input type="submit"></p>
        </form>
    </body>
</html>