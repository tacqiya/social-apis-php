<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.twitter.com/2/tweets/1366280536403177473?tweet.fields=attachments%2Cauthor_id%2Ccreated_at%2Centities%2Cgeo%2Cid%2Cin_reply_to_user_id%2Clang%2Cpossibly_sensitive%2Creferenced_tweets%2Csource%2Ctext%2Cwithheld',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'oauth_consumer_key: vJcvlbOwpNLfgjgeXmJ8FRz1y',
    'oauth_consumer_secret: 7cLhV3fWfbNqq6JrXZ8mmyDbZQJAtZT3zhphQBxlhJcK7Y41ix'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
