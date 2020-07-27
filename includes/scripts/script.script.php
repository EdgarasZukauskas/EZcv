    // Setting constants and variables
    const startTime = new Date();
    var lastTime = startTime;
    var timeSpent = 0;
    const text = '<?php echo $text; ?>';
    const company = '<?php echo $comapny; ?>';
    const sessionId = Math.random().toString(36).substr(2, 9);
    const id = '<?php echo $_GET["id"]; ?>';
    const letTalkSubject = 'mailto:Edgaras.Zukauskas@outlook.com?subject=Lets Talk! // <?php echo $comapny; ?>';

    // Counting how much time was spent in the websites and stores it in sql
    function counter() {
      var currentTime = new Date();
      if ( (currentTime - lastTime)/1000 > 5 ){
         lastTime = currentTime;
         timeSpent = timeSpent + 5;
         if ( timeSpent > 0 ){
           let postData = {
             api: 'counter',
             companyId: id,
             company: company,
             timeSpent: timeSpent,
             sessionId: sessionId
           };
           fetch('includes/api/api.api.php', {
             method: 'POST',
             headers: {
               'Content-Type': 'application/json;charset=utf-8'
             },
             body: JSON.stringify(postData)
           });
        }
      }
    }

    // Function to change career text by tab
    function jobChange(id) {
      var jobTitle = document.getElementsByClassName('jobTitle')[0]
      var jobDates = document.getElementsByClassName('jobDates')[0]
      var jobDescription = document.getElementsByClassName('jobDescription')[0]
      for ( var i = 0 ; i < 4 ; i++ ) {
        if ( i == id ){ document.getElementById(i).className = "jobListItem jobListItemActive"; }
        else { document.getElementById(i).className = "jobListItem"; }
      }
      switch (id) {
        case '0':
          jobTitle.innerHTML = 'Software Asset Managment Services Manager <a href="https://www.atea.lt" target="_blank" class="jobTitleComapny">@ Atea</a>'
          jobDates.innerHTML = '2013-07 to 2015-08'
          jobDescription.innerHTML = 'Created SAM programs, methods how it is performed, and completed over 20 audits in Baltic states. Also took part in hundreds of projects as a Microsoft product and licensing specialist.'
          break;
        case '1':
          jobTitle.innerHTML = 'Microsoft Product Manager <a href="https://www.tvg.lt" target="_blank" class="jobTitleComapny">@ Tvg</a>'
          jobDates.innerHTML = '2016-01 to 2017-03'
          jobDescription.innerHTML = 'Microsoft guru in Software Distribution company.'
          break;
        case '2':
          jobTitle.innerHTML = 'Operations Manager / IT Manager <a href="https://www.gymplius.lt" target="_blank" class="jobTitleComapny">@ GymPlius</a>'
          jobDates.innerHTML = '2017-03 to 2020-01'
          jobDescription.innerHTML = 'At the beginning of the company growth I was responsible for all the company operations- creating and automating services, hiring staff, keeping up with customer expectations, building maintenance, security, data analysis and lots of other things. As during the growth the IT part was becoming more and more critical I became fully dedicated to IT where lots of new things were created every month.'
          break;
        case '3':
          jobTitle.innerHTML = 'IT Project Manager <a href="http://www.moxykaunas.com" target="_blank" class="jobTitleComapny">@ Moxy Kaunas</a>'
          jobDates.innerHTML = '2020-01 to 2020-06'
          jobDescription.innerHTML = 'In 6 months helped to execute IT part for 175 room hotel. Over 500.000 eur investment in Servers, BMS, Security, Employees and Guest IT.'
          break;
        default:
          console.log("Klaida pasirenkant imone")
      }
    }

    // Function to send sms from web
    function sendSms(){
      if (document.getElementById('sms').value != ""){
        var smsText = document.getElementById('sms').value;
        let postData = {
          api: 'sendSms',
          smsText: smsText
        };
        fetch('includes/api/api.api.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json;charset=utf-8'
          },
          body: JSON.stringify(postData)
        });
        document.getElementsByClassName('smsTextButton')[0].innerHTML='Done';
        document.getElementsByClassName('smsTextButton')[0].classList.add("smsTextButtonSent");
        document.getElementById('sms').value='...sms was sent to Edgaras!';
      }
      else {
        document.getElementById('sms').placeholder='...forgot to add text. Write your message here.';
      }
    }

    // Function to show share popUp
    function sharePopup(){
      document.getElementsByClassName('shareCV')[0].classList.toggle("displayShare");
      document.getElementsByClassName('menuShare')[0].classList.toggle("showShareButton");
      document.getElementsByClassName('share')[0].classList.toggle("shareIconActive");
    }

    // Function to log entered emailCheck
    var input = document.getElementsByClassName('shareEmailInput')[0];
    input.addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
        email();
      }
    });

    // Function to send email
    function email(){
      var email = document.getElementsByClassName('shareEmailInput')[0].value;
      var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if ( email.match(mailFormat) ){
        let postData = {
          api: 'sendEmail',
          id: id,
          email: email,
          company: company,
          text: text
        };
        fetch('includes/api/api.api.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json;charset=utf-8'
          },
          body: JSON.stringify(postData)
        });
        document.getElementsByClassName('shareEmailInput')[0].value="...email was sent!";
        setTimeout(() => {  sharePopup(); }, 4000);
      }
      else {
        document.getElementsByClassName('shareEmailInput')[0].value="";
        document.getElementsByClassName('shareEmailInput')[0].placeholder="... Wrong email";
      }
    }

    // Formating email subject when visitor press on side email hyperlink
    function writeEmail() {
      window.location.href = (letTalkSubject);
    }
