<!DOCTYPE HTML>
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="includes/styles/style.style.css" rel="stylesheet" type="text/css">
    <link rel='icon' href='includes/images/favicon.ico' type='image/x-icon'/ >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="includes/scripts/copiedScripts.script.js"></script>
    <title>Edgaras Žukauskas
          <?php if (array_key_exists('code', $_SESSION)){ echo " // " . $comapny; }
            else { echo " // CV"; } ?>
    </title>
  </head>

  <body onmouseover="counter()" onscroll="counter()">

    <div class="topNavigation appear">
      <div class="menuItemList">
        <a class="menuItem appear" href="#start"><span class="menuItemNumber">01. </span>Start</a>
        <a class="menuItem appear" href="#about"><span class="menuItemNumber">02. </span>About me</a>
        <a class="menuItem appear" href="#career"><span class="menuItemNumber">03. </span>Career</a>
        <a class="menuItem appear" href="#example"><span class="menuItemNumber">04. </span>Code</a>
        <a class="menuItem appear" href="#letsTalk"><span class="menuItemNumber">05. </span>Lets talk</a>
        <a class="menuItem menuShare appear" onclick="sharePopup()">Share</a>
      </div>
    </div>

    <div class="content">

      <div class="container" id="start">
        <div class="row">
          <div class="firstLine appear">Hi, my name is</div>
          <div class="secondLine appear">Edgaras Žukauskas.</div>
          <div class="thirdLine appear">I write code for the web.</div>
          <div class="fourthLine appear">
            <?php if (array_key_exists('code', $_SESSION)){ echo $text; } ?>
          </div>
          <a class="aboutButton appear" href="#about">More about me</a>
        </div>
      </div>

      <div class="container" id="about">
        <div class="row">
          <div class="aboutMeLeft">
            <div class="header"><span class="headerNumber">02.</span>About me as a web dev</div>
            <div class="aboutMeText">Hello! I'm Edgaras, a self-taught Web Developer.</div>
            <div class="aboutMeText">My first experience with web development started in 2008. Back then I was 16 and created my first website using Joomla. For 10 years I was creating websites using Wordpress as side projects. In 2018 I started writing my own PHP code and developed few projects from scratch that I was really proud about. It took me a while to understand that I was missing JavaScript and OOP to be a real web dev, so in 2019 I started learning it.</div>
            <div class="aboutMeText">Today I expect to become part of your team where I could develop my skills to the next level.</div>
          </div>
          <div class="aboutMeRight">
            <img src="includes/images/foto.png" alt="Photo" class="myPhoto">
          </div>
          <a class="careerButton" href="#career">Work experience</a>
        </div>
      </div>

      <div class="container" id="career">
        <div class="row">
          <div class="narrowRow">
            <div class="header"><span class="headerNumber">03.</span>My work experience</div>
            <div class="careerJobs">
              <div class="jobList">
                <li id="3" class="jobListItem" onclick="jobChange('3')">Moxy Kaunas</li>
                <li id="2" class="jobListItem jobListItemActive" onclick="jobChange('2')">GymPlius</li>
                <li id="1" class="jobListItem" onclick="jobChange('1')">TVG</li>
                <li id="0" class="jobListItem" onclick="jobChange('0')">Atea</li>
              </div>
              <div class="jobText">
                <div class="jobTitle">Operations Manager / IT Manager <a href="http://www.gymplius.lt" target="_blank" class="jobTitleComapny">@ GymPlius</a></div>
                <div class="jobDates">2017-03 to 2020-01</div>
                <div class="jobDescription">At the beginning of the company growth I was responsible for all the company operations- creating and automating services, hiring staff, keeping up with customer expectations, building maintenance, security, data analysis and lots of other things. As during the growth the IT part was becoming more and more critical I became fully dedicated to IT where lots of new things were created every month.</div>
              </div>
            </div>
          </div>
          <a class="examplesButton" href="#example">Lets see my code</a>
        </div>
      </div>

      <div class="container" id="example">
        <div class="row">
          <div class="header"><span class="headerNumber">04.</span>Some of my code</div>

          <div class="examplesContainer">
            <div class="exampleImageRight">
              <a class="exampleLink" href="http://www.developit.lt/" target="_blank"><img src="includes/images/developit.png" class="codeImg" alt="Developit" onclick=""></a>
            </div>
            <div class="exampleDescriptionRight">
              <div class="exampleDescriptionNameRight">Personal CV webpage</div>
              <div class="exampleDescriptionTextRight">Web purpose is to show my programming skills. PHP with mysql used to log visitor access and personalize content. Javascript used to log visitor time spent on the webpage and for other ui solutions. SMS api used to send sms messages directly from website. All code is written from scratch except two jQuery functions.</div>
              <img src="includes/images/developit.png" class="codeImgMobileRight" alt="Developit" onclick="window.open('http://www.developit.lt/','_blank')">
              <div class="exampleDescriptionLanguagesRight">php html css javascript mysql</div>
              <div class="exampleDescriptionHyperlinksRight">
                <a href="https://github.com/EdgarasZukauskas/EZcv" target="_blank" class="exampleLink">
                  <img class="exampleLinkImgR" src="includes/images/github.png">
                </a>
                <a href="http://www.developit.lt/" target="_blank" class="exampleLink">
                  <img class="exampleLinkImgR" src="includes/images/openLink.png">
                </a>
              </div>
            </div>
          </div>

          <div class="examplesContainer">
            <div class="exampleImageLeft">
              <a class="exampleLink" href="https://festuves.lt/index.php?pass=11223344" target="_blank"><img src="includes/images/festuves.png" class="codeImg" alt="Festuves" onclick=""></a>
            </div>
            <div class="exampleDescriptionLeft">
              <div class="exampleDescriptionNameLeft">Wedding invitation web</div>
              <div class="exampleDescriptionTextLeft">Unique 8-bit style web to invite friends to the wedding. Using get it recognizes visitor and displays unique text. Tracks every answer and informs web owner about visitor actions. Also sends email with details to the visitor.</div>
              <img src="includes/images/festuves.png" class="codeImgMobileLeft" alt="Festuves" onclick="window.open('https://festuves.lt/index.php?pass=11223344','_blank')">
              <div class="exampleDescriptionLanguagesLeft">php html css javascript mysql</div>
              <div class="exampleDescriptionHyperlinksLeft">
                <a href="https://github.com/EdgarasZukauskas/EZfestuves" target="_blank" class="exampleLink">
                  <img class="exampleLinkImgL" src="includes/images/github.png">
                </a>
                <a href="https://festuves.lt/index.php?pass=11223344" target="_blank" class="exampleLink">
                  <img class="exampleLinkImgL" src="includes/images/openLink.png">
                </a>
              </div>
            </div>
          </div>

          <div class="examplesContainer">
            <div class="exampleImageRight">
              <a class="exampleLink" href="http://www.taskatron.lt/" target="_blank"><img src="includes/images/taskatron.png" class="codeImg" alt="Taskatron" onclick=""></a>
            </div>
            <div class="exampleDescriptionRight">
              <div class="exampleDescriptionNameRight">Company operations management app</div>
              <div class="exampleDescriptionTextRight">A website used everyday by over 70 employees to record and solve equipment and building failures, collect information about cleaning quality, automatically detects problems and informs management about it, display statistics. Also, using SMS api it informs management about other urgent problems.</div>
              <img src="includes/images/taskatron.png" class="codeImgMobileRight" alt="Taskatron" onclick="window.open('http://www.taskatron.lt/','_blank')">
              <div class="exampleDescriptionLanguagesRight">php html css javascript mysql</div>
              <div class="exampleDescriptionHyperlinksRight">
                <a href="http://taskatron.lt/" target="_blank" class="exampleLink">
                  <img class="exampleLinkImgR" src="includes/images/openLink.png">
                </a>
              </div>
            </div>
          </div>

          <div class="examplesContainer">
            <div class="exampleImageLeft">
              <a class="exampleLink" href="https://chat.developit.lt/" target="_blank"><img src="includes/images/chat.png" class="codeImg" alt="Chat" onclick=""></a>
            </div>
            <div class="exampleDescriptionLeft">
              <div class="exampleDescriptionNameLeft">Anonymous web chat</div>
              <div class="exampleDescriptionTextLeft">Invite other participants to your chat thread by sharing unique key. No information about who created the thread, sent the message or visited the thread is saved, only the messages.</div>
              <img src="includes/images/chat.png" class="codeImgMobileLeft" alt="Chat" onclick="window.open('https://chat.developit.lt/','_blank')">
              <div class="exampleDescriptionLanguagesLeft">php html css javascript mysql</div>
              <div class="exampleDescriptionHyperlinksLeft">
                <a href="https://github.com/EdgarasZukauskas/EZchat" target="_blank" class="exampleLink">
                  <img class="exampleLinkImgL" src="includes/images/github.png">
                </a>
                <a href="https://chat.developit.lt/" target="_blank" class="exampleLink">
                  <img class="exampleLinkImgL" src="includes/images/openLink.png">
                </a>
              </div>
            </div>
          </div>

          <div class="examplesContainer">
            <div class="exampleImageRight">
              <a class="exampleLink" href="http://news.developit.lt/" target="_blank"><img src="includes/images/newsdevelopit.png" class="codeImg" alt="News" onclick=""></a>
            </div>
            <div class="exampleDescriptionRight">
              <div class="exampleDescriptionNameRight">Location based news portal</div>
              <div class="exampleDescriptionTextRight">The website gets visitor location and based by the chosen settings displays news by distance and category. News importance is calculated by visitors ratings. Portal still in development.</div>
              <img src="includes/images/newsdevelopit.png" class="codeImgMobileRight" alt="Developit" onclick="window.open('http://news.developit.lt/','_blank')">
              <div class="exampleDescriptionLanguagesRight">php html css javascript mysql</div>
              <div class="exampleDescriptionHyperlinksRight">
                <a href="https://github.com/EdgarasZukauskas/EZnews" target="_blank" class="exampleLink">
                  <img class="exampleLinkImgR" src="includes/images/github.png">
                </a>
                <a href="http://news.developit.lt/" target="_blank" class="exampleLink">
                  <img class="exampleLinkImgR" src="includes/images/openLink.png">
                </a>
              </div>
            </div>
          </div>

          <a class="letsTalkButton" href="#letsTalk">Lets talk!</a>
        </div>
      </div>

      <div class="container" id="letsTalk">
        <div class="row">
            <div class="header"><span class="headerNumber">05.</span>My contacts</div>
            <div class="letsTalk">
              <div class="contacts">
                <div class="contactsBox">
                  <a href="https://www.linkedin.com/in/edgaras-žukauskas-9aa6a8199/" class="contactsLinkedin"><img class="contactsIcon" src="includes/images/linkedin.png">Edgaras Žukauskas</a>
                  <a href="mailto:Edgaras.Zukauskas@outlook.com?subject=Lets Talk! // <?php echo $comapny; ?>" class="contactsEmail"><img class="contactsIcon" src="includes/images/email.png">Edgaras.Zukauskas@outlook.com</a>
                  <a href="tel:+37069233663" class="contactsPhone"><img class="contactsIcon" src="includes/images/phone.png">+37069233663</a>
                </div>
              </div>
              <div class="sms">
                <div class="smsField">
                  <form action="javascript:sendSms()">
                    <textarea id="sms" class="smsText" placeholder="Or just enter your text to send me sms message..." onfocus="this.placeholder = ''" rows="5"></textarea>
                  </form>
                  <div class="smsTextButton" onclick="javascript:sendSms()">Send it!</div>
                </div>
              </div>
          </div>
      </div>

      <div class="credentials appear" onclick="writeEmail()">Edgaras.Zukauskas@outlook.com<div class="credentialsLine"></div></div>
      <div class="share" onclick="sharePopup()"><img src="includes/images/share.png" class="shareIcon"></div>
      <div class="shareCV"><input class="shareEmailInput" placeholder="Enter email" onfocus="this.placeholder = ''"><img class="shareEmailSend" src="includes/images/send.png" onclick="email()"></div>

    </div>
    <script><?php include 'includes/scripts/script.script.php';?></script>
  </body>
</html>
