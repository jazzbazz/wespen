<?php 

$out=[];

// $url = "https://www.youtube.com/watch?v=wE2OMbAZu-M";
// $url="https://css-tricks.com/essential-meta-tags-social-media/";
 $burl="https://www.youtube.com/watch?v=ehjoh_MmE9A";
// $url="https://getbootstrap.com";

$tags=get_meta_tags($burl);
echo "<br>";


echo"<br>------------------------------------------------------<br>";

// echo preg_match("/<title>([a-z 0-9]*)<\/title>/si", $tags, $out) ? $out[0] : 'no match';
// $result=preg_grep ('/<title>([a-z 0-9]*)<\/title>/si', $tags ); 
 $resultimg=preg_grep ('/.png|.jpeg|.jpg/', $tags ); 
print_r($resultimg); 
echo "_______________________________________________<br>";

echo " dit is currentfunction ----> ";
echo current($resultimg);

$resultdescription = $tags['description'];
echo "<br> Description is : ".$resultdescription;

// TODO GET TITLE !

function website_title($url) {
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   // some websites like Facebook need a user agent to be set.
   curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.94 Safari/537.36');
   $html = curl_exec($ch);
   curl_close($ch);

   $dom  = new DOMDocument;
   @$dom->loadHTML($html);

   $title = $dom->getElementsByTagName('title')->item('0')->nodeValue;
   return $title;
}
echo "<br>";
echo "test met functie curl <br>";
echo website_title($burl);





?>