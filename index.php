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
            $link = mysqli_connect($_ENV["DATABASE_SERVICE_NAME"],$_ENV["DATABASE_USER"],
            $_ENV["DATABASE_PASSWORD"],$_ENV["DATABASE_NAME"]);
             if (!$link) {
                http_response_code (500);
                error_log ("Error: unable to connect to database\n");
             die();
             }else{
                http_response_code (200);
             }
        ?>
    </body>
<html>
