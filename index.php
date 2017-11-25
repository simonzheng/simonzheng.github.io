<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="index.css">
  <!-- Google Web Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Cinzel:400,700' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="./scripts/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="./flex-slider/jquery.flexslider-min.js"></script>
  <script src="scripts/jquery.prettyPhoto.js" type="text/javascript"></script>
  <script src="scripts/jquery.tipsy.js" type="text/javascript"></script>
  <script src="scripts/jquery.knob.js" type="text/javascript"></script>
  <script type="text/javascript" src="./scripts/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="./scripts/jquery.smooth-scroll.min.js"></script>
  <script type="text/javascript" src="./scripts/waypoints.min.js"></script>
  <script type="text/javascript" src="./scripts/setup.js"></script>
</head> 
<body>
  <div id="wrapper">
    <!-- Header -->
    <div id="header">
      <h1>Simon Zheng</h1>
      <div id="profile"><img src="images/linkedinprofilepic.jpg"></div>
    </div>
    <div id="tagline">
      <strong>&ldquo;</strong>
      <p> Stanford CS '14 | Software Engineer | New Yorker </p>
    </div>

    <!-- Below the header -->
    <div class="section">
      <h2> About Me </h2>
      My name is Simon and I'm a Stanford senior interested in Computer Science and how we can use technology to better our lives and improve productivity, education and medicine. 
      I am always looking to broaden my horizons and my personal philosophy is to never stop learning and improving.
      In my spare time, you can find me staring off thinking about how I am making a difference in the world, reading about productivity and self-improvement, discussing accessibility and quality of education for students from underserved backgrounds, and possibly trying to learn a new language (programming or otherwise).
        <!-- <h1><strong> This page is under major construction. </strong></h1> -->
    </div>


    <div class="section">
      <h2> Projects </h2>
      <em> Some of my previous projects include: </em>
      <div class="clear"> </div>

      <div class="one_half first">
        <div class="column_content">
          <h4> Balance </h4>
          <a href="http://balance.simonjz.com/">
            <img src="images/logos/balance-logo.png" class="left no_border" alt="" style="margin-top: 10px;
                              margin-right: 10px" />
          </a>
          <p>
            <small>
              <a href="http://balance.simonjz.com/"> Balance</a> is a mobile newsreader web application for stories based on political biases 
              around the 2012 presidential elections. 
              Developed from ideation to finalization using HTML, CSS, JS, Twitter Bootstrap with one other engineer. 
              Best viewed on a mobile browser. 
              Currently discontinued.
            </small>
          </p>
        </div>
      </div>

      <!-- <div class="one_half last">
        <div class="column_content">
          <h4> Project 2 </h4>
          <img src="images/logos/balance-logo.png" class="left no_border" alt="" style="margin-top: 10px;
                              margin-right: 10px" />
          <p> <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at feugiat
            felis. Ut faucibus molestie turpis, sit amet scelerisque ipsum scelerisque quis.
            Quisque suscipit fermentum sodales.</small></p>
        </div>
      </div> -->



    </div>
    <div class="space"> </div>
    <div class="clear"> </div>

    <!-- Links -->
    <div class="section">
      <h2> Links </h2>
      <ul>
        <li> <a href="https://www.dropbox.com/s/7wejouehuxqlr8o/Zheng%2C%20Simon%20-%20Resume%20%2820131223%29.pdf" target="_blank"> Resume - updated 20131223</a> </li>
      </ul>
      
    </div>


    <div class="section">
      <h2> Contact Me! </h2>
      <div class="page" id="contact"> 
      <!-- Contact Form -->
        <div class="page_content">
          <fieldset id="contact_form">
            <div id="msgs"> </div>
            <form id="cform" name="cform" method="post" action="">
              <input type="text" id="name" name="name" value="Full Name*" onfocus="if(this.value == 'Full Name*') this.value = ''"
                              onblur="if(this.value == '') this.value = 'Full Name*'" />
              <input type="text" id="email" name="email" value="Email Address*" onfocus="if(this.value == 'Email Address*') this.value = ''"
                              onblur="if(this.value == '') this.value = 'Email Address*'" />
              <input type="text" id="subject" name="subject" value="Subject*" onfocus="if(this.value == 'Subject*') this.value = ''"
                              onblur="if(this.value == '') this.value = 'Subject*'" />
              <textarea id="msg" name="message" onfocus="if(this.value == 'Your Message*') this.value = ''"
                              onblur="if(this.value == '') this.value = 'Your Message*'">Your Message*</textarea>
              <button id="submit" class="button"> Send Message</button>
            </form>
          </fieldset>
          
          <!-- Social Icons -->
          <ul class="social_icons">
            <li><a href="https://www.facebook.com/ninjah" id="fb" original-title="Find me on Facebook!"> <img src="images/facebook.png" alt="Facebook" /></a></li>
            <!-- <li><a href="#" id="tw" original-title="No Twitter as of Yet"> <img src="images/twitter.png" alt="Twitter" /></a></li> -->
            <li><a href="http://www.linkedin.com/in/simonzheng/" id="ld" original-title="Find me on LinkedIn"> <img src="images/linkedin.png" alt="LinkedIn" /></a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="footer">
      (c) 2013 Simon Zheng <!-- - <a href="credits.html"> credits </a> -->
      <p> Huge thanks to <a href="http://www.kingstontam.com">Kingston Tam</a> for his web development workshop! </p>
      <p> Contact box and buttons designed by <a href="http://esarfraz.com">Sarfraz Shoukat</a> from <a href="eGrappler.com"> eGrappler.com </a> </p>
    </div>

  </div>



</body>
</html>
