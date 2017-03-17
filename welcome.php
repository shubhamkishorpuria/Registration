<link rel="stylesheet" href="form.css">

<?php session_start(); ?>
<div class="body content">
  <div class ="welcome">
    <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
      <span class="user"><img src='<?= $_SESSION['avatar'} ?>'</span><br />
    welcome <span class="user" ><?= $_SESSION['username'] ?> </span>  
    
          
   <?php 
    
    $mysqli = new mysqli('localhost', 'root', 'mypass123', 'accounts');
    $sql = 'SELECT USERNAME, avatar FROM users';
    $reult = $mysqli->query($sql);
                                                 
    ?>
    
    <div id="registered">
        <span> ALL registered users</span>
        <?php
            while($roe =$result->fetch_assoc()){
                echo "<div class='userlist'><span>$row[username]</span><br />";
                echo "<img src='$row[avatar]'></div>";
            }                                      
                        ?>                         
          
          
</div>