<?php
    echo "<pre>";
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
    // echo "Print_r STARTS HERE";
    // echo "````````````````````````````````````````````````";
    // print_r($Products);
    // echo "Print_r ENDS HERE";
    // echo "<br />";
    // echo "````````````````````````````````````````````````";
    // echo "\n\n";
    // echo "Print_r 1 index";
    // print_r($Products['pens']);
    // echo "<br />";
    // echo "````````````````````````````````````````````````";
    // echo "\n\n";
    // echo "<br />";
    // echo "Print_r using foreach loop";
    // foreach($Products as $innerArray){
    //     print_r($innerArray);
    // }
    echo "````````````````````````````````````````````````";
    echo "using foreach loop inside foreach";
    foreach($Products as $itm => $innerArray2){
        echo "<pre>";
        echo "<strong>" . $itm." </strong>".'<br />';
        foreach($innerArray2 as $elements){
           echo $elements.'<br />';
        }
        echo "</pre>";
    }
    
    echo "````````````````````````````````````````````````";
?>