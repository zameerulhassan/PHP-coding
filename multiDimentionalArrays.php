<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>

    <?php
    $Products = array(
        'paper' => array(
            'copier' => "Copier & Multipurpose",
            'inkjet' => "Inkjet Printer",
            'laser' => "Laser Printer",
            'photo' => "Photographic Paper"),
        'pens' => array(
            'ball' => "Ball Point",
            'hilite' => "Highlighters",
            'marker' => "Markers"),
        'misc' => array(
            'tape' => "Sticky Tape",
            'glue' => "Adhesives",
            'clips' => "Paperclips")
    );

    echo "<br />";
    echo "<br />";
    echo "***************************************<br />";
    echo "Multi Dimentional Arrays  <br />";
    echo "*************************************** <br />";
    echo "<br />";
    echo "<br />";
    echo "<pre>"; //preformatted. not to ignore whitespaces/&tabs
    foreach($Products as $sections => $items)
        foreach($items as $key =>$value)
            echo "$sections:\t$key\t$value <br />";
    echo "<pre>";
    

    echo "***************************************<br />";
    echo "Accessing Individual Items in Multi Dimentional Arrays   <br />";
    echo "*************************************** <br />";
    echo "<br />";
    echo "<br />";
    echo $Products['pens']['hilite']; //can not access by indexing with numbers, bcoz these key/value pair
    echo "<br />";
    echo "<br />";
    echo "***************************************<br />";
    echo "Accessing Individual Items in Multi Dimentional Arrays with INDEX Nos.  <br />";
    echo "*************************************** <br />";

    $chessBoard = array(
        array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
        array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
        array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
        array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
    );  

    echo "<pre>"; //preformatted. not to ignore whitespaces/&tabs
    foreach($chessBoard as $row){
        foreach($row as $peice)
        echo "$peice ";
        echo "<br />";
    }

    
    echo "<pre>";

    echo "<br />";
    echo $chessBoard[9][3];


    ?>
</body>
</html>