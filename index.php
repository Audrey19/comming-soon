<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">

    <title>Document</title>
</head>
<body>
<header>
  
</header>

<div class="container">
    <img  class="kenburns-top " src="./assets/Asset1.svg" alt="logo">
    <div class="container_page">
            <img  class="container_page_logo" src="./assets/Asset5.svg" alt="logo">
        <div class="container_page_counter">
            <p>New website coming soon</p>
            <div class="container_page_counter_boxes">
                <div class="container_page_counter_boxes_items">
                   <div class="counter">
                       <span class="jour"></span>
                       <span class="text">days</span>
                    </div>
                </div>
                <div class="container_page_counter_boxes_items">
                <div class="counter">
                    <span class="heures"></span>
                    <span class="text">hours</span>
                </div>
                </div>
                <div class="container_page_counter_boxes_items">
                <div class="counter">
                    <span class="min"></span>
                    <span class="text">minutes</span>
                </div>
                </div>
                <div class="container_page_counter_boxes_items" >
                <div class="counter">
                    <span class="sec"></span>
                    <span class="text">seconds</span>
                </div>
                </div>
            </div>
        </div>
        
        <div class="container_page_mail">    
            <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">

            <div class="mc-field-group">
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter email address">
            <div class="clear"><input type="submit" value="Be notified" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </div>
            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_867545ed2bd7ce03f1f4dbc5f_174f47ee4a" tabindex="-1" value=""></div>
            
            </div>
            </form>
        </div>

        <div class="container_page_links">
            <p>You can still access our old websites:</p>
            <div class="container_page_links_logos">
                <img class="logo1" src="./assets/Asset6.svg" alt="logo">
                <img class="logo2" src="./assets/Asset7.svg" alt="logo">
            </div>
        </div>
    </div>
</div>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Jun 5, 2019 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementsByClassName("jour")[0].innerHTML = days;

  document.getElementsByClassName("heures")[0].innerHTML = hours;

  document.getElementsByClassName("min")[0].innerHTML = minutes;

  document.getElementsByClassName("sec")[0].innerHTML = seconds;


  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementsByClassName("jour").innerHTML = "EXPIRED";
  }
}, 1000);
</script>


</body>
</html>