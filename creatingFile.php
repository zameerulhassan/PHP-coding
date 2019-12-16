<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>

    <?php
    $fh = fopen("testfile.txt", 'w') or die("Failed to create file");
    $text = <<<_END
    Line 1
    Line 2
    Line 3
    _END;

    fwrite($fh, $text) or die("Could not write to file");
    fclose($fh);
    echo "File 'testfile.txt' written successfully";

      ?>
</body>
</html>