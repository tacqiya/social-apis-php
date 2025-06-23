<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.twitter.com/2/tweets/298119851?tweet.fields=attachments%2Cauthor_id%2Ccreated_at%2Centities%2Cgeo%2Cid%2Cin_reply_to_user_id%2Clang%2Cpossibly_sensitive%2Creferenced_tweets%2Csource%2Ctext%2Cwithheld',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'oauth_consumer_key: JrwJ8pjUP7qjnxNuTPUufRiz4',
    'oauth_consumer_secret: UoCxFatIueNgUO8jv6hI6P63LjgUGK27UyWRAVpj1Txzxr2TRO'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
