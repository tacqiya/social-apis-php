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


$json_data = json_decode($json_data, true);
echo "<pre>"; print_r($json_data); echo "</pre>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Twitter Timeline UI</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #e6ecf0;
      margin: 0;
      padding: 2rem;
    }

    .timeline {
      max-width: 600px;
      margin: auto;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      overflow: hidden;
    }

    .timeline-header {
      display: flex;
      align-items: center;
      gap: 1rem;
      padding: 1.2rem;
      border-bottom: 1px solid #ccc;
      background: #f5f8fa;
    }

    .timeline-header img {
      width: 64px;
      height: 64px;
      border-radius: 50%;
    }

    .timeline-header .header-info {
      display: flex;
      flex-direction: column;
    }

    .timeline-header .name {
      font-size: 1.3rem;
      font-weight: bold;
    }

    .timeline-header .handle {
      font-size: 0.95rem;
      color: #657786;
    }

    .tweet {
      display: flex;
      gap: 1rem;
      padding: 1rem;
      border-bottom: 1px solid #e1e8ed;
    }

    .tweet:last-child {
      border-bottom: none;
    }

    .avatar {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background-color: #bbb;
    }

    .content {
      flex: 1;
    }

    .name {
      font-weight: bold;
      font-size: 1rem;
    }

    .handle {
      color: #657786;
      font-size: 0.9rem;
      margin-left: 0.5rem;
    }

    .text {
      margin: 0.25rem 0;
      font-size: 1rem;
      line-height: 1.4;
    }

    .tweet-img {
      margin-top: 0.5rem;
      border-radius: 12px;
      max-width: 100%;
    }

    .timestamp {
      font-size: 0.8rem;
      color: #657786;
      margin-top: 0.25rem;
    }
  </style>
</head>
<body>

  <div class="timeline">
    <!-- Header -->
    <div class="timeline-header">
      <img src="https://pbs.twimg.com/profile_images/1539491785147400192/cZqyKwuX_400x400.jpg" alt="Profile"/>
      <div class="header-info">
        <div class="name">جامعة خليفة للعلوم والتكنولوجيا</div>
        <div class="handle">@KhalifaUni</div>
      </div>
    </div>

    <!-- Tweet 1 -->
    <?php foreach($json_data['data'] as $tweet) {

// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://api.twitter.com/2/tweets/'.$tweet['id'].'?expansions=attachments.media_keys&media.fields=url%2Cpreview_image_url%2Ctype',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'GET',
//   CURLOPT_HTTPHEADER => array(
//     'Authorization: Bearer AAAAAAAAAAAAAAAAAAAAAElkowEAAAAA6w3Z2IT5S5L2WOuH%2BumwpBmEfZ0%3DwOLcGqYUgzDV37jF4wgiYDNYtHBWGFYRKC91PKxh84uyVwUl3q',
//     'Cookie: __cf_bm=dHtsanD8ucYz1BrVOmTtzYw3IPrdyBLQd3lTyKbfZFQ-1750495009-1.0.1.1-Ic3.jUvYka0TqJxz3xFTdvV9dT0j8nHX1DXHiCxOLGakk1mG756tBeLYyzC1ESdDD08pL12ua.fl8OWQdWazJo2hrLzE5MRDa33Xy98WfU8; guest_id=v1%3A175042007048313146'
//   ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;
// sleep(15);
        
        ?>
    <div class="tweet">
      <img src="https://pbs.twimg.com/profile_images/1539491785147400192/cZqyKwuX_400x400.jpg" class="avatar" alt="Avatar"/>
      <div class="content">
        <div><span class="name">جامعة خليفة للعلوم والتكنولوجيا</span><span class="handle">@KhalifaUni</span></div>
        <div class="text"><?= $tweet['text'] ?></div>
        <!-- <img src="https://via.placeholder.com/500x250" class="tweet-img" alt="Tweet image"/> -->
        <!-- <div class="timestamp">June 19, 2025 • 10:03 AM</div> -->
      </div>
    </div>
    <?php } ?>

    

</body>
</html>
