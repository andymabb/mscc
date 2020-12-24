<!DOCTYPE html><html lang="en-GB" class="no-js"><head><meta charset="utf-8"><title></title><script>if(document.documentElement){document.documentElement.className='hasJS';}</script><meta name="description" content=""><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="stylesheet" href="css/main.css?t=1608575654393"></head><body><div class="content"> <?php
$url = 'http://localhost/wordpress/feed/';

    $rss = new DOMDocument();
    $rss->load($url);
    $feed = array();
    foreach ($rss->getElementsByTagName('item') as $node) {
        $item = array (
                'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                'pubDate' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
                'description' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                'content' => $node->getElementsByTagName('encoded')->item(0)->nodeValue

                );
        array_push($feed, $item);
    }
?> <!-- 
http://localhost/wordpress/feed/ 
pull in <content:encoded>
--></div></body></html>