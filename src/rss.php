<!DOCTYPE html>
<html lang="en-GB" class="no-js">
<head>
<meta charset="utf-8">
<title></title>
<script>if(document.documentElement){document.documentElement.className='hasJS';}</script>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="content">

<?php

$url = "http://localhost/wordpress/feed/";
 $invalidurl = false;
 if(@simplexml_load_file($url)){
  $feeds = simplexml_load_file($url);
 }else{
  $invalidurl = true;
  echo "<h2>Invalid RSS feed URL.</h2>";
 }


 $i=0;
 if(!empty($feeds)){

  $site = $feeds->channel->title;
  $sitelink = $feeds->channel->link;

  echo "<h1>".$site."</h1>";
  foreach ($feeds->channel->item as $item) {

   //$title = $item->title;
   //$link = $item->link;
   $description = $item->description;
   $postDate = $item->pubDate;
   //$pubDate = date('D, d M Y',strtotime($postDate));


   if($i>=500) break;
  
?>

     <div class="post-content">
     	<?php echo $description; ?>
     </div>

   <?php
    $i++;
   }
 }else{
   if(!$invalidurl){
     echo "<h2>No item found</h2>";
   }
 }
 ?>
</div>


<!-- 
http://localhost/wordpress/feed/ 
pull in <content:encoded>
-->

</body>
</html>	