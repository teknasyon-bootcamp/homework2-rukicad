<?php

/**
 * functions.php
 */

 $file_base = basename(__FILE__);
 $server_base = basename($_SERVER['PHP_SELF']);

 // iki dosyanın isimleri eşit ise 
 if($server_base == $file_base) { 
    echo"Bu dosyaya erişemezsin";
 }else { // Eğer iki dosyanın isimleri eşit değil ise aşağıdaki kodları çalıştırır  
function getLatestPosts($count = 5)
{
    $posts = [];
    $postTypes = ["urgent", "warning", "normal"];

    for($i=1; $i<=$count; $i++) {
        do {
            $id = rand(1, 1000);
        } while (array_key_exists($id, $posts));

        $type = $postTypes[rand(0, count($postTypes)-1)];

        $posts[$id] = [
            "title" => "Yazı " . $i,
            "type" => $type
        ];
    }

    return $posts;
}

function getPostDetails($id, $title)
{
    echo "<h1>".$title." (#".$id.")</h1>";
    echo <<<EOT
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a iaculis justo, ac molestie justo. Integer semper nibh non imperdiet blandit. Integer nec diam eget sapien viverra rutrum ut eu justo. Suspendisse efficitur pretium eleifend. Vivamus ex nibh, euismod eget massa ut, accumsan ullamcorper nisi. Phasellus tristique magna et nibh dictum rhoncus. Phasellus at metus quis mi egestas blandit. Vestibulum lacinia ut tortor nec consectetur. Nulla sed risus ut est imperdiet vulputate ac non quam. Aliquam viverra erat vitae diam commodo, et molestie metus ultricies. Praesent rutrum urna a nisi egestas aliquam sit amet eu eros.
</p>
EOT;
}

// Aşağıya fonksiyonu tanımlayabilirsiniz.

    function getRandomPostCount($min, $max) { // Belirlenen iki aralıkta rastgele sayı döndürür
        return rand($min, $max); 
    }
      
 

