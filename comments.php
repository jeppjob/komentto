<?php
         if ($_POST){
             $survey = $_POST['survey'];
             $name = $_POST['name'];
             $comment = $_POST['comment'];
             $date = gmdate("m/d/Y");
             $time = gmdate("H:i");
             date_default_timezone_set('UTC');
             $new = fopen("comments.php","a");
             fwrite($new, '<li><h4>'. $name .'</h4><p class="mood">'." was ".$survey.'</p><p class="datetime">'. $date . " at " . $time .'</p>' . $comment . '</li>' );
             fclose($new);
             header("Location: " . $_SERVER['REQUEST_URI'] );
         }
?>