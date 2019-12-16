
<!-- https://www.youtube.com/watch?v=xb8aad4MRx8&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=44 -->
<?php 
    include_once 'header.php';
?>
<section class="main-container">
    <div class="main-wrapper">
        <h2>Home</h2>
        <?php
        if(isset($_SESSION['u_id'])){
            echo "You are logged in.";
        }
        ?>
    </div>
</section>
<?php
    include_once 'footer.php';
?>
