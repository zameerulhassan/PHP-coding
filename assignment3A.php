<?php 
if (isset($_PSOT["Step1"])) //at first, this condition is false
{
    displayStep1();
}
else if(isset($_POST["Step2"]))
{
    displayStep2();
}
else if(isset($_POST["Step3"]))
{
    displayStep3();
}
else if(isset($_POST["Thanks"]))
{
    displayThanks();
}
else    //at first load only this condition is true.
{
    displayStep1();
}
?>
<!-- HTML -->
    <html>
    <head>
        <meta charset="utf-8"> 
        <title></title>
    </head>
    <body>
    <?php 
    function displayStep1()
    {?>
    <div style="background-color:silver;color:black;padding:20px;">
        <form method="post" style=padding:20px;> <!--action is not set, so it will be submitted to current page only. all variables will be stored in suppreglobal i.e. $_POST  -->
            <h1>This is Step1</h1>
            <div style=padding:20px;>
                <input type="hidden" name="txtm" value="<?php setValue("txtm") ?>">
                <input type="hidden" name="txtl" value="<?php setValue("txtl") ?>">
                Enter First Name:<br />
                    <input style=width:100px; type="text" name="txtf" value="<?php setValue("txtf") ?>"><br>
                Enter City:<br />
                    <input style=width:100px; type="text" name="City" value="<?php setValue("City") ?>"><br>
                Choose your Favourite Color: 
                    <input type="hidden" name="Color" value="<?php setValue("Color") ?>"><br>
                        <div>
                            <select name="Color">
                                <option value="Red">Red</option>
                                <option value="Green">Green</option>
                                <option value="Blue">Blue</option>
                                <option value="Pink">Pink</option>
                                <option value="Yellow">Yellow</option>
                            </select>
                        </div>
                <br />
                <br />
                <br />
            <div>
                And by the way.<br />
                    <input type="checkbox" name="btw" value="swimming"> I luv swimming<br>
                </div>
                    <br />
                        <input style=width:100px;background-color:silver;color:black type="submit" name="Step2" value="Step2"><br> <!--This is actually a submit button and name is Step2-->
                </div>
        </form>
    </div>
    <?php } 
    function displayStep2()
    {?>
    <div style="background-color:silver;color:black;padding:20px;">
        <form method="post">
            <h1>This is Step2</h1>
                <input type="hidden" name="txtf" value="<?php setValue("txtf") ?>">
                <input type="hidden" name="txtl" value="<?php setValue("txtl") ?>">
                <input type="hidden" name="Color" value="<?php setValue("Color") ?>">
                <input type="hidden" name="City" value="<?php setValue("City") ?>">
                <input type="hidden" name="terms" value="<?php setValue("terms") ?>">
                <input type="hidden" name="btw" value="<?php setValue("btw") ?>">
            Enter Middle Name <br>
                <input type="text" name="txtm" value="<?php setValue("txtm") ?>"><br>
                <input style=width:100px;background-color:silver;color:black type="submit" name="Step1" value="Step1"> <!--it is a button -->
                <input style=width:100px;background-color:silver;color:black type="submit" name="Step3" value="Step3"> <!--it is a button -->
        </form>
    </div>
    <?php } 
    ?>
    <?php
    function displayStep3()
    {?>
    <div style="background-color:silver;color:black;padding:20px;">
        <form method="post">
            <h1>
                This is Step3
            </h1>
                <input type="hidden" name="txtf" value="<?php setValue("txtf") ?>">
                <input type="hidden" name="txtm" value="<?php setValue("txtm") ?>">
                <input type="hidden" name="Color" value="<?php setValue("Color") ?>">
                <input type="hidden" name="City" value="<?php setValue("City") ?>">
                <input type="hidden" name="terms" value="<?php setValue("terms") ?>">
                <input type="hidden" name="btw" value="<?php setValue("btw") ?>">
            Enter Last Name <br>
                <input type="text" name="txtl" value="<?php setValue("txtl") ?>"><br>
                <input style=width:100px;background-color:silver;color:black type="submit" name="Step2" value="Step2"> <!--it is a button -->
                <input style=width:100px;background-color:silver;color:black type="submit" name="Thanks" value="Thanks"> <!--it is a button -->
        </form>
    </div>
    <?php } ?>
    <?php 
    function displayThanks(){
        echo"<pre>";
        echo "<h1>Thanks for submitting information. Berry! you are awesome!</h1>";
        echo "<h2>You entered the following details</h2>";
        echo "<strong>First Name    :</strong>".$_POST['txtf']."<br>";
        echo "<strong>Middle Name   :</strong>".$_POST['txtm']."<br>";
        echo "<strong>Last Name     :</strong>" .$_POST['txtl']."<br>";
        echo "<strong>Your favourite color is    :</strong>" .$_POST['Color']."<br>";
        echo "<strong>You live in     :</strong>" .$_POST['City']."<br>";
        //to echo out status of checkbox
        if (isset($_POST['btw']))
            if(($_POST['btw']!=""))
            {
                echo "<strong>And By The Way you said, you luv  :</strong>" .$_POST['btw']."<br>";
            }
            else
            {
                echo "You did not checked the box for swimming";
            }
    }

    ?>
    <?php
    function setValue($fieldName){
        if(isset($_POST[$fieldName]))
            {
                echo $_POST[$fieldName];
            }
    }
    ?>
    </body> 
    </html>