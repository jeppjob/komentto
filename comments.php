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
<li><h4>Jeff</h4><p class="mood"> was satisfied</p><p class="datetime">10/15/2018 at 12:48</p>Kevin was great!</li><li><h4>Jeff</h4><p class="mood"> was satisfied</p><p class="datetime">10/15/2018 at 12:51</p>It was nice</li><li><h4>Josh</h4><p class="mood"> was satisfied</p><p class="datetime">10/15/2018 at 12:53</p>Kevin was fantastic! Good job.</li><li><h4>Jeff</h4><p class="mood"> was satisfied</p><p class="datetime">10/16/2018 at 13:28</p>Nice app!</li><li><h4>Josh</h4><p class="mood"> was satisfied</p><p class="datetime">10/16/2018 at 13:29</p>Good!</li>