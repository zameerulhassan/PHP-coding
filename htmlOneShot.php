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
    //echo<<<(ANY SIGN YOu Want to choose) ....code/comments you want to write and final line 
    //(ANY SIGN YOu Want to choose)
    echo <<<_END
    <h2>Hoverable Table</h2>
    <p>Move the mouse over the table rows to see the effect.</p>
    
    <table>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Points</th>
      </tr>
      <tr>
        <td>Peter</td>
        <td>Griffin</td>
        <td>$100</td>
      </tr>
      <tr>
        <td>Lois</td>
        <td>Griffin</td>
        <td>$150</td>
      </tr>
      <tr>
        <td>Joe</td>
        <td>Swanson</td>
        <td>$300</td>
      </tr>
      <tr>
        <td>Cleveland</td>
        <td>Brown</td>
        <td>$250</td>
      </tr>
    </table>
    

_END;
"<br>";

echo <<<SEC
    <h2>Hoverable Table</h2>
    <p>Move the mouse over the table rows to see the effect.</p>
    
    <table>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Points</th>
      </tr>
      <tr>
        <td>Peter</td>
        <td>Griffin</td>
        <td>$100</td>
      </tr>
      <tr>
        <td>Lois</td>
        <td>Griffin</td>
        <td>$150</td>
      </tr>
      <tr>
        <td>Joe</td>
        <td>Swanson</td>
        <td>$300</td>
      </tr>
      <tr>
        <td>Cleveland</td>
        <td>Brown</td>
        <td>$250</td>
      </tr>
    </table>
    

SEC;
    ?>
</body>
</html>