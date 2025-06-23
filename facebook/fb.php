<?php

$curl = curl_init();

$access_token_fb = 'EAAb81CBhzm8BOxxdHXFpnFp4NP9HSy56ZCeqsPjtMPwL7mmwdOvhhCG5r5SK08Xr6raxWufsh3fGEP9MCtsNlvdjXy6RfZCMhpFWhWenXMpZCVCj9DhNHDrKZAD3yonHjqKlYTmaEYe9FUWAoZBzbq594zNXdafZCRYz3YnhVvfjgeVxcpKZBKRCF8aLvJQCqVLnEwSALZADdpTpjRRlwGI5m4hrSl7QJTvkd2v9ZBe7Y0CqTqSvTfeEV';
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://graph.facebook.com/v20.0/me?fields=photos{picture}&access_token='.$access_token_fb,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
