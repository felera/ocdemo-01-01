<html>
    <head>
        <?php
            $author = getenv('AUTHOR');
            $storage_type = getenv('STORAGE_TYPE');

            echo "<title>PHP info by " . $author . "</title>";

        ?>
    </head>
    <body>
        <h1>-- Hello World! --</h1><br>
        <?php
            phpinfo();
        ?>
    </body>
<html>
