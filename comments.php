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
<li><h4>This person</h4><p class="mood"> was satisfied</p><p class="datetime">10/17/2018 at 14:59</p></li><li><h4>This person</h4><p class="mood"> was satisfied</p><p class="datetime">10/17/2018 at 15:00</p></li><li><h4>This person</h4><p class="mood"> was okay</p><p class="datetime">10/17/2018 at 15:01</p></li><li><h4>Jeff</h4><p class="mood"> was satisfied</p><p class="datetime">10/17/2018 at 15:10</p>This is my first comment</li><li><h4>This person</h4><p class="mood"> was satisfied</p><p class="datetime">10/17/2018 at 15:11</p></li><li><h4>This person</h4><p class="mood"> was satisfied</p><p class="datetime">10/17/2018 at 15:12</p></li><li><h4>This person</h4><p class="mood"> was satisfied</p><p class="datetime">10/17/2018 at 15:13</p></li><li><h4>This person</h4><p class="mood"> was satisfied</p><p class="datetime">10/17/2018 at 15:13</p></li><li><h4>This person</h4><p class="mood"> was satisfied</p><p class="datetime">10/17/2018 at 15:14</p></li><li><h4>This person</h4><p class="mood"> was satisfied</p><p class="datetime">10/17/2018 at 15:15</p></li><li><h4>This person</h4><p class="mood"> was satisfied</p><p class="datetime">10/17/2018 at 15:15</p></li><li><h4>This person</h4><p class="mood"> was satisfied</p><p class="datetime">10/17/2018 at 15:15</p></li><li><h4>This person</h4><p class="mood"> was satisfied</p><p class="datetime">10/17/2018 at 15:16</p></li><li><h4>This person</h4><p class="mood"> was satisfied</p><p class="datetime">10/17/2018 at 15:24</p></li><li><h4>This person</h4><p class="mood"> was satisfied</p><p class="datetime">10/17/2018 at 15:24</p></li><li><h4>This person</h4><p class="mood"> was satisfied</p><p class="datetime">10/17/2018 at 15:25</p></li><li><h4>www</h4><p class="mood"> was satisfied</p><p class="datetime">01/15/2019 at 10:58</p>Nice</li><li><h4>Errr</h4><p class="mood"> was satisfied</p><p class="datetime">01/15/2019 at 10:58</p>erer</li><li><h4>www</h4><p class="mood"> was okay</p><p class="datetime">01/15/2019 at 10:59</p>wefw</li><li><h4>This person</h4><p class="mood"> was satisfied</p><p class="datetime">01/15/2019 at 10:59</p></li>