<?php
    $badWord = $_POST['badWord'];
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Server</title>
    </head>
    <body>

        <p> 
            <?php echo $badWord; ?> ---
            lunghezza : <?php echo strlen($badWord); ?> 
        </p>
        <p>
          <?php echo str_replace('fuck','****',$badWord); ?> 

        </p>

    </body>
</html>

