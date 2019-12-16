<?php
    require('config/config.php');
    require('config/db.php');
    //check for submit
    if(isset($_POST['submit'])){
        //echo "submitted";
        //get the form data
        $update_id= mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn,$_POST['body']);
        $author = mysqli_real_escape_string($conn,$_POST['author']);

        $query= "UPDATE blog SET
                    title='$title',
                    author='$author',
                    body='$body'
                        WHERE id ={$update_id}";

        if(mysqli_query($conn, $query)){
            header('Location: '.ROOT_URL.'');
        }else{
            echo 'ERROR'.mysqli_error($conn);
        }
    }
    $id=mysqli_real_escape_string($conn,$_GET['id']);
    $query = 'SELECT * FROM blog WHERE id='.$id;
    $result = mysqli_query($conn, $query);
    $post = mysqli_fetch_assoc($result);
    //var_dump($posts);
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>
    
    ?>

    <?php include('inc/header.php'); ?>
        <div class="container">
            <h1>Add Posts</h1>
            <form method ="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" id="" class="form-control" value="<?php echo $post['title']; ?>">
            </div>

            <div class="form-group">
            <label for="">Author</label>
            <input type="text" name="author" id="" class="form-control" value="<?php echo $post['author']; ?>">
            </div>

            <div class="form-group"> 
            <label for="">Body</label>
            <textarea name="body" id="" class="form-control"><?php echo $post['body']; ?></textarea>
            </div>
            <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            
            </form>
        </div>
        <?php include('inc/footer.php'); ?>



