<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
      <link rel="stylesheet" href="css/custom.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <title>Document</title>
   </head>
   <body>
      <section class="section">
         <div class="container">
             <!-- MODAL -->
         <div id="thankyouModal" class="modal">
               <h3>THANK YOU!</h3>
               <p>Your feedback is highly <strong>appreciated!</strong></p>
               <input id="viewComments" type="button" value="View Comments">
               <div class="motivation"><p>--OR--</p><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=RM2GTR2H3LK2L" target="_blank">Send Motivation</a></div>
            </div>
            <!-- feedback form -->
            <div id="feedback-form">
            <div class="img-container"><img src="./images/jc.png"></div>
            <div class="feedback-form">
               <form id="form" method="POST">
                  <h4>How's the service?</h4>
                  <fieldset class="feedback-survey u-full-width">
                  <label><input type="radio" class="survey" name="survey" value="satisfied" checked><span class="far fa-smile-wink fa-5x"><div>Wooo</div></span></label>
                  <label><input type="radio" class="survey" name="survey" value="okay"><span class="far fa-meh fa-5x"><div>Mehh</div></span></label>
                  <label><input type="radio" class="survey" name="survey" value="dissatisfied"><span class="far fa-frown fa-5x"><div>Errr</div></span></label>
                  </fieldset>
                  <input id="name" class="u-full-width" onfocus="this.placeholder=''" onblur="this.placeholder='Your Name'" type="text" name="name" placeholder="Your Name" required>
                  <textarea id="comment" maxlength="500"class="u-full-width" name="comment" onfocus="this.placeholder=''" onblur="this.placeholder='Your Comment'" placeholder="Your Comment" required></textarea>
                  <input id="submitform" class="u-full-width" type="button" value="Comment">
               </form>
            </div>
            </div>
         <!-- feedback comments -->
            <div id="feedback-comments" class="feedback-comments">
               <ul class="list" id="lol">
               <script></script>               
                  <?php
                     require("comments.php");
                     ?>
               </ul>
               <input id="addNewComments" type="button" value="New Comment">
            </div>
         </div>
         <script src="./js/alljs.js"></script>
      </section>
   </body>
</html>