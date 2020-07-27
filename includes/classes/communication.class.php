<?php

  class communication extends page {

      // Parameters for sms api
    private $login = 'XXXXXXXXX';
    private $sender = 'XXXXXXXXX';
    private $api_key = 'XXXXXXXXX';
    private $phone = 'XXXXXXXXX';

      // Sms sending function
    public function sendSms($data){

      if ( array_key_exists('smsText' , $data) ) {
        $smstext = $data['smsText'];
      }

      elseif ( array_key_exists('name' , $data) && $data['name'] != 'XXXXXXXXX' ) {
        $smstext = $data['name'] . ' atsidare cv';
      }

      $time = file_get_contents("https://www.lightsms.com/external/get/timestamp.php");

      function Signature( $params, $api_key ) { ksort( $params );
                                                reset( $params );
                                                return md5( implode( $params ) . $api_key );}

      $params = array(  'timestamp' => $time,
                        'login'     => $this->login,
                        'phone'     => $this->phone,
                        'sender'    => $this->sender,
                        'text'      => $smstext );

      $smstext = rawurlencode($smstext);

      $url='https://www.lightsms.com/external/get/send.php?login='.$this->login.
        '&signature='.Signature($params, $this->api_key).
        '&phone='.$this->phone.
        '&text='.$smstext.
        '&sender='.$this->sender.
        '&timestamp='.$time;


      file_get_contents($url);
    }

      // Email sending function
    public function sendEmail($data){

      $newId = uniqid();
      date_default_timezone_set("Europe/Vilnius");
      $date = date("Y-m-d H:i:s");

      $company = $this -> connect() -> real_escape_string($data["company"]);
      $email = $this -> connect() -> real_escape_string($data["email"]);
      $id = $this -> connect() -> real_escape_string($data["id"]);
      $text = $this -> connect() -> real_escape_string($data["text"]);

      $sqlShares = $this -> connect() -> query("INSERT INTO " . $this->sharesTable . " (`company`, `email`, `time`, `newId`, `sharedBy`)
                                  VALUES (
                                  '" . $company . "',
                                  '" . $email . "',
                                  '" . $date . "',
                                  '" . $newId . "',
                                  '" . $id . "'
                                )");

      $sqlAddId = $this -> connect() -> query("INSERT INTO " . $this->companiesTable . " (`code`, `name`, `text`)
                                  VALUES (
                                  '" . $newId . "',
                                  '" . $company . "',
                                  '" . $text . "'
                                )");

      $headers  = "From: developit.lt < no-reply@developit.lt >\n" . 'X-Mailer: PHP/' . phpversion() . "X-Priority: 1\n" . "MIME-Version: 1.0\r\n" . "Content-Type: text/html; charset=UTF-8\n";
      $subject = $data["company"] . " - CV - Edgaras Žukauskas";
      $link= 'http://www.developit.lt/index.php?id=' . $newId;

      $txt = '
          Hello, <br><br>

          You have received invitation to check Edgaras Žukauskas CV.<br><br>

          Here is the link where you can see it: <a href="'.$link.'">'.$link.'</a><br>
          Id: '.$newId.'<br><br>

          Sincerely,<br>
          Edgaras Žukauskas';

      mail($data["email"],$subject,$txt,$headers);
    }
  }
?>
