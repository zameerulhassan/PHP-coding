
<?php
// video link
//https://www.youtube.com/watch?v=tJ5eUgOxITE&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=15 
//in step 2 we are creating 2 messges for empty() to be used in if/else statements
$msg ='';
$msgClass ='';
//check for submit
if(filter_has_var(INPUT_POST, 'submit')){
    //echo "submitted";
    $name= htmlspecialchars($_POST['name']);
    $email= htmlspecialchars($_POST['email']);
    $message= htmlspecialchars($_POST['message']);
    //check required fields
    //using empty() function
    if(!empty($name) && !empty($email) && !empty($message)){
        //we passed
        //echo "PASSED"; now step 3 and 4 to check email
        if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){
            //then it failed
            $msg='Please use a valid email.';
            $msgClass='alert-danger'; //to make it red
        }else{
            //passed
            //echo "PASSED"; now in step 5
            $toEmail = 'zameerulhassan@gmail.com';
            $subject = 'Contact Report Form: '.$name;
            $body = '<h2>Contact Request</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Message</h4><p>'.$message.'</p>
            ';
            //Email Headers
            $headers ="MIME-Version: 1.0". "\r\n";
            $headers .="Content-Type:text/html; charset=UTF-8 "."\r\n"; //appending headers using dot-equal to append
            //additional headers.
            $headers .= "FROM : ". $name. "< ".$email."> "."\r\n";

            if(mail($toEmail, $subject, $body, $headers)){
                $msg='Your Email Has Beeb Sent.';
                $msgClass='alert-success'; //to make it green
            }else{
                $msg='Your Email Was Not Sent.';
                $msgClass='alert-danger';
            }

        }
    }else{
        //we failed
        $msg='Please fill in all the fields.';
        $msgClass='alert-danger'; //to make it red
    }
}
?>
<html>
<head>
<title>Contact Us</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cosmo/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="navbar-container">
        <div class="navbar-header">
            <a class="navbar-brand" href="contact_us.php">My Website</a>
        </div>
    </div>
</nav>
    
</body>
</html>




<div class="container">
        <?php if($msg!= ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg ?></div>
        <?php endif; ?>
    <form method ="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);  ?>"> <!--htmlentities is used to remove risk of using PHP_SELF-->
        <div class="form-group">
            <label for="">Name</label>
            <input type="data" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            <!-- setting value = to ensure the inserted values are displayed even after error message-->
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="data" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
        </div>
        <div class="form-group">
            <label for="">Message</label>
            <textarea type="data" name="message" class="form-control"> <?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
        </div>
        <br />
        <button type="submit" name="submit" id="" class="btn btn-primary">Submit</button>
    </form>
</div>