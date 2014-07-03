<?php
require_once('lib/rss_fetch.inc');
require_once('lib/OpenGraph.php');


// Get it from http://idgettr.com/
$flickr_id = '44468780@N02';

$url = 'https://api.flickr.com/services/feeds/photos_public.gne?id=' . $flickr_id;
$rss = fetch_rss($url);

foreach($rss->items as $item) {
    $url = $item['link'];
    $graph = OpenGraph::fetch($url);
    echo '<img src="' . $graph->image . '">';
}
?>
