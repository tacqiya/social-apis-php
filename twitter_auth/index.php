<?php
require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

// Twitter API credentials
$consumer_key = 'vJcvlbOwpNLfgjgeXmJ8FRz1y';
$consumer_secret = '7cLhV3fWfbNqq6JrXZ8mmyDbZQJAtZT3zhphQBxlhJcK7Y41ix';
$access_token = 'Ccv4CKq5sINidhqEC7Di3H3MoOqju4';
$access_token_secret = 'y3ikaC4IVyHvpL3f0UyCPSTELoWJcDwi4TCp5vz2Anwxu';

// User's Twitter handle (screen name)
$screen_name = 'TyphixD';

// Connect to Twitter API
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$connection->setApiVersion('2');
$response = $connection->get('users', ['ids' => 1366280536403177473]);
// $content = $connection->get("account/verify_credentials");
echo '<pre>'; print_r($response);
// Get tweets
$tweets = [];
$max_id = null;

do {
    $params = ['screen_name' => $screen_name, 'count' => 200];
    if ($max_id) {
        $params['max_id'] = $max_id;
    }
    $user_tweets = $connection->get('statuses/user_timeline', $params);
    
    if (!empty($user_tweets)) {
        $tweets = array_merge($tweets, $user_tweets);
        $last_tweet = end($user_tweets);
        $max_id = $last_tweet->id_str;
    }
} while (!empty($user_tweets) && count($user_tweets) > 1);

// Display tweets
foreach ($tweets as $tweet) {
    echo $tweet->text . "\n";
}
?>