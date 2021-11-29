 <?php
  

function send_LINE($msg){
 $access_token = 'IMu8sGxVqzdZryMK5cMNZ/YJJEAmVvdC573BsHQbMCkw7tt1OI8v3UNHK8kfa7dmSPzcAhj1X4SI0yHZeIjrPN78nbFfSM3c+/krBc+6kWXd1F6btTuD4wrFyPyuTAveIGAR7q5AJiW/YcOb52cnrwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '@353xmjqe',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
