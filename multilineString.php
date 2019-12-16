<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>
    <?php
    /*
    It is important to remember that the closing _END; tag must appear right at the start of
    a new line and must be the only thing on that line—not even a comment is allowed to
    be added after it (nor even a single space). Once you have closed a multiline block, you
    are free to use the same tag name again.
    */

    /* 
    
    this is useful to bring in all the HTML one-shot
    */
    echo <<<_END
    Hello There I am zamir

    What your Name Sir

    Well I live in Lethbirdge
_END;
    ?>
</body>
</html>