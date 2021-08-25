<?php

/**
 * posts.php */

include_once("functions.php"); 

// 1 ila 15 arasında rasgele sayı döndürür
$rand_post_count = getRandomPostCount(1, 15); 
// rasgele post sayı değerine göre son postları dizi olarak getirir
$posts = getLatestPosts($rand_post_count); 

  foreach ($posts as $id => $post) {
      include('post.php'); }
  
