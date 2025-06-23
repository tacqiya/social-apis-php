<?php
$json_data = '{
    "data": [
        {
            "text": "رحّب اليوم سعادة البروفيسور إبراهيم الحجري، رئيس جامعة خليفة، بسعادة فرانسيسكو شاكون إيرنانديس، سفير كوستاريكا لدى دولة الإمارات، في حرم الجامعة الرئيس.\n\nناقش سعادة البروفيسور إبراهيم الحجري خلال الزيارة، التطوّرات الأخيرة التي حققتها الجامعة في مجال البحوث والابتكار، واستكشف مع https://t.co/xfXyAHfwjp",
            "id": "1935994461353341185",
            "edit_history_tweet_ids": [
                "1935994461353341185"
            ]
        },
        {
            "text": "H.E. Prof. Ebrahim Al Hajri, President of Khalifa University, warmly welcomed H.E. Mr. Francisco J. Chacón Hernández, Ambassador of Costa Rica to the UAE, at our main campus today.\n\nDuring his visit, H.E. Prof. Ebrahim Al Hajri discussed the university’s recent advancements in https://t.co/YqbDHdtLFS",
            "id": "1935994457184248017",
            "edit_history_tweet_ids": [
                "1935994457184248017"
            ]
        },
        {
            "text": "RT @bancaditalia: Nell’ottica di rafforzare la cooperazione su #cybersicurezza 🛡️ e resilienza operativa nel settore finanziario attraverso…",
            "id": "1935703951157916137",
            "edit_history_tweet_ids": [
                "1935703951157916137"
            ]
        },
        {
            "text": "RT @dubaipost: https://t.co/Z11zgRlvKL",
            "id": "1935644054198403333",
            "edit_history_tweet_ids": [
                "1935644054198403333"
            ]
        },
        {
            "text": "RT @dubaipost: https://t.co/1zhs0Oq9y2",
            "id": "1935644044597641311",
            "edit_history_tweet_ids": [
                "1935644044597641311"
            ]
        },
        {
            "text": "RT @dubaipost: الفضاء يشهد ابتكارًا إماراتيًا جديدًا! 🇦🇪 🛰\nأول نظام دفع مستدام لقمر اصطناعي مُصغّر مُطوّر بأيادٍ إماراتية\nبرأيكم.. ما سر تم…",
            "id": "1935644032929067219",
            "edit_history_tweet_ids": [
                "1935644032929067219"
            ]
        },
        {
            "text": "حققنا الإنجاز معًا من جديد!\n\nتقدمت #جامعة_خليفة من المركز الـــــ 202 إلى المركز الـــــ 177 في تصنيف “كيو إس” العالمي للجامعات، كما احتفظت للعام الثامن على التوالي بصدارتها للجامعات في دولة الإمارات وفقًا لهذا التصنيف.\n\nنحتفي بتصنيفاتنا المتميزة وبتقدمنا الكبير في هذا العام، عام https://t.co/rxBkPUX5Uq",
            "id": "1935620653631086846",
            "edit_history_tweet_ids": [
                "1935620653631086846"
            ]
        },
        {
            "text": "RT @cscgovae: خلال مشاركته في ورشة عمل نظمتها جامعة خليفة، أكد سعادة الدكتور محمد حمد الكويتي، رئيس الأمن السيبراني لحكومة دولة الإمارات، ع…",
            "id": "1935611667762630736",
            "edit_history_tweet_ids": [
                "1935611667762630736"
            ]
        },
        {
            "text": "RT @_inivation: [DEV COMMUNITY] Improved event camera calibration for industrial perception from @KhalifaUni!\nE-Calib: a fast, precise tool…",
            "id": "1935611616328110461",
            "edit_history_tweet_ids": [
                "1935611616328110461"
            ]
        },
        {
            "text": "جامعة خليفة تتقدم 25 مركزًا لتحلّ في المرتبة الـ 177 عالميًا في تصنيف كيو إس للجامعات العالمية 2026\n\nhttps://t.co/5Ls9slALdQ\n\n#Khalifauniversity Soars 25 Slots to 177th Globally in QS World University Rankings 2026\n\nhttps://t.co/YrDn8uqtZ8\n\n#QS #QSWorldUniversityRankings https://t.co/9Fbh3DkXHI",
            "id": "1935585803591102687",
            "edit_history_tweet_ids": [
                "1935585803591102687"
            ]
        }
    ],
    "meta": {
        "result_count": 10,
        "newest_id": "1935994461353341185",
        "oldest_id": "1935585803591102687",
        "next_token": "7140dibdnow9c7btw4e0wv3sj3rsh8wwn4m0am59k9x6f"
    }
}';


$twitterx_data = json_decode($json_data, true);



// global $wpdb;
//     $table_twitter = "twitter_api_data";
//     $twitterxdata = $wpdb->get_results("SELECT * FROM $table_twitter ORDER BY id DESC LIMIT 1");
//     if(!empty($twitterxdata[0]->datetime)) {
//         $givenTime = new DateTime($twitterxdata[0]->datetime);
//         $now = new DateTime();
//         $interval = $givenTime->diff($now);
//         if ($interval->days >= 5 && $now > $givenTime) {
//             $curl = curl_init();
//             curl_setopt_array($curl, array(
//             CURLOPT_URL => 'https://api.twitter.com/2/users/298119851/tweets',
//             CURLOPT_RETURNTRANSFER => true,
//             CURLOPT_ENCODING => '',
//             CURLOPT_MAXREDIRS => 10,
//             CURLOPT_TIMEOUT => 0,
//             CURLOPT_FOLLOWLOCATION => true,
//             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//             CURLOPT_CUSTOMREQUEST => 'GET',
//             CURLOPT_HTTPHEADER => array(
//                 'Authorization: Bearer AAAAAAAAAAAAAAAAAAAAAElkowEAAAAA6w3Z2IT5S5L2WOuH%2BumwpBmEfZ0%3DwOLcGqYUgzDV37jF4wgiYDNYtHBWGFYRKC91PKxh84uyVwUl3q',
//                 'Cookie: __cf_bm=LMtesFar3kWvubf1TsvYwsg4o_02zWBWZwXX_bPENW8-1750676674-1.0.1.1-vMqh7MCeXdfMl0LARddxhmY0rC6uzoQsqJ.3t7ZWh8op2Bu2xj9MZXg23i6wHgfsgopPVZxEQy13ZOU.ivw6O4OqEWYhWsk38n2AxFiLugs; guest_id=v1%3A175042007048313146'
//             ),
//             ));
//             $response = curl_exec($curl);
//             curl_close($curl);
//             echo $response;

//             $tweet_data = [
//                 'full_data' => $response,
//                 'images_data' => $response,
//                 'datetime' => date('Y-m-d H:i:s')
//             ];
//             $update_twit = $wpdb->insert($table_twitter, $tweet_data);
//             echo $response;
//         }
//     }
//     $twitterx_data = json_decode($twitterxdata[0]->full_data);
//     foreach ($twitterx_data->data as $key => $value) {
//         echo "<pre>"; print_r($value->text);
//     }

?>

<link rel="stylesheet" href="twitter-x.css" />
<div class="twitter-x">
  <!-- Profile Header -->
  <div class="profile-header">
    <div class="banner"></div>
    <div class="profile-info">
      <img class="avatar" src="https://pbs.twimg.com/profile_images/1539491785147400192/cZqyKwuX_400x400.jpg" alt="Profile" />
      <a class="x-link" href="https://x.com/KhalifaUni"><div class="name">Khalifa University</div></a>
      <div class="handle">@KhalifaUni</div>
      <div class="bio">The UAE’s top-ranked university, KU is leading R&D of real-world solutions and preparing science and engineering graduates to build a better world.</div>
      <div class="follow-stats">
        <span><b>5</b> Following</span>
        <span><b>26.5K</b> Followers</span>
      </div>
    </div>
  </div>

  <!-- Timeline -->
  <div class="timeline">
    <!-- Tweet 1 -->
    <?php foreach($twitterx_data['data'] as $tweet) { ?>
    <div class="tweet">
      <img src="https://pbs.twimg.com/profile_images/1539491785147400192/cZqyKwuX_400x400.jpg" class="avatar" alt="Avatar"/>
      <div class="content">
        <div><a class="x-link" href="https://x.com/KhalifaUni"><span class="name">جامعة خليفة للعلوم والتكنولوجيا</span></a><span class="handle">@KhalifaUni</span></div>
        <a href="https://x.com/KhalifaUni/status/<?=$tweet['id'] ?>" target="_blank"><div class="text"><?= $tweet['text'] ?></div></a>
        <!-- <img src="https://via.placeholder.com/500x250" class="tweet-img" alt="Tweet image"/> -->
        <!-- <div class="timestamp">June 19, 2025 • 10:03 AM</div> -->
      </div>
    </div>
    <?php } ?>
  </div>
  </div>

