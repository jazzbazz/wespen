<?php 


$burl="https://www.youtube.com/watch?v=ehjoh_MmE9A";
$tags=get_meta_tags($burl);



echo"<br>------------------------------------------------------<br>";


 $resultimg=preg_grep ('/.png|.jpeg|.jpg/', $tags ); 
print_r($resultimg); 
echo "_______________________________________________<br>";

echo " dit is currentfunction ----> ";
echo current($resultimg);

$resultdescription = $tags['description'];
echo "<br> Description is : ".$resultdescription;

// TODO GET TITLE ! functie geleend van internet die met curl werkt

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

echo "test met functie curl <br>";
echo website_title($burl);





?>
