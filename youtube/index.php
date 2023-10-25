<?php 

require_once('define.php');

$api_error = "Videos not found";
try {
    $api_data = @file_get_contents('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet,contentDetails,status&playlistId=' . $all_playlist . '&maxResults=' . $max_results . '&key=' . $API_key . '');
    if ($api_data) {
        $videoList = json_decode($api_data);
    } else {
        throw new Exception('Invalid API Key');
    }
} catch (Exception $e) {
    $api_error = $e->getMessage();
}

?>

<div class="blk ytube">
                <span class="title"><a href="#" target="_blank">Youtube</a></span>
                <div class="posts clear owl-carousel-6">
                    <?php
                    if (!empty($videoList->items)) {
                        foreach ($videoList->items as $video) {
                            if (isset($video)) {
                                ?>
                                <div class="post">
                                    <a data-fancybox="gallery" href="https://youtu.be/<?php echo $video->contentDetails->videoId ?>" target="_blank" class="common-a">
                                        <div class="img">
                                            <div class="play"></div>
                                            <?php if ($video->snippet->thumbnails->maxres->url) { ?>
                                                <img src="<?php echo $video->snippet->thumbnails->maxres->url; ?>" alt="<?php echo $video->snippet->title; ?>" />
                                            <?php } else if ($video->snippet->thumbnails->standard->url) { ?>
                                                <img src="<?php echo $video->snippet->thumbnails->standard->url; ?>" alt="<?php echo $video->snippet->title; ?>" />
                                            <?php } else if ($video->snippet->thumbnails->high->url) { ?>
                                                <img src="<?php echo $video->snippet->thumbnails->high->url; ?>" alt="<?php echo $video->snippet->title; ?>" />
                                            <?php } else if ($video->snippet->thumbnails->default->url) { ?>
                                                <img src="<?php echo $video->snippet->thumbnails->default->url; ?>" alt="<?php echo $video->snippet->title; ?>" />
                                            <?php } ?>
                                        </div>
                                    </a>
                                    <div class="text">
                                        <span style="font-weight:600;"><?php echo $video->snippet->title; ?></span><br>
                                        <b style="font-weight:100; color:gray; font:small-caption;"><?php echo date('F j, Y, g:i a', strtotime($video->snippet->publishedAt)); ?></b>
                                        <p style="overflow: hidden;display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;font: -webkit-small-control;"><?php echo $video->snippet->description; ?></p>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>