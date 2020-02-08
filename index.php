<html>
    <head>
        <?php
            $author = getenv('AUTHOR');
            $storage_type = getenv('STORAGE_TYPE');

            echo "<title>PHP info by " . $author . "</title>";

        ?>
    </head>
    <body>
        <?php
            phpinfo();
        ?>
    </body>
<html>