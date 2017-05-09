<?
// usage:
// php getWebPageTitle.php <web page url>
// i.e. php getWebPageTitle.php https://www.google.com


function displayTitle($url) {
   $page =curl_init();
   curl_setopt($page, CURLOPT_URL, $url);
   curl_setopt($page, CURLOPT_RETURNTRANSFER, 1);
   $page_str_conversion = curl_exec($page);

   if(!$page_str_conversion) {
      echo "Curl error: " .curl_error($page) . "\n";
   }
   else {
      preg_match("/<title>\w.+<\/title>/", $page_str_conversion , $output_array);
      $remove_first_title_tag = substr($output_array[0], 7);
      $position = stripos($remove_first_title_tag, "</title>");
      $remove_last_title_tag = substr_replace($remove_first_title_tag, "", $position);
      echo $remove_last_title_tag."\n";
   }

   curl_close($page);
}

displayTitle($argv[1]);

?>
