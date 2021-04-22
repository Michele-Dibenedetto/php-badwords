<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    <?php
        $paragraph = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit veritatis harum alias dolorem, enim optio corporis! Recusandae.";
    ?>
    <h1>Il paragrafo è lungo:
        <?php 
            echo strlen($paragraph); 
        ?>
    </h1>
    <p><?php echo $paragraph ?></p>

    <?php
        // $newParagraph = str_replace("amet", "***", $paragraph);
        $badword = $_GET["badword"];
        $newParagraph = str_replace($badword, "***", $paragraph);
    ?>

    <h1>Il paragrafo è lungo:
        <?php
            echo strlen($newParagraph);
        ?>
    </h1>
    <p><?php echo $newParagraph ?></p>
</body>
</html>
