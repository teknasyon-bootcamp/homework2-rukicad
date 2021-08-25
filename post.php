<?php

/**
 * post.php
 */
include_once("functions.php");

if(!isset($posts))
{ 

    $rand_post_count = getRandomPostCount(1, 15); // 1 ila 15 arasında rasgele sayı döndürür
    $posts = getLatestPosts($rand_post_count); // rasgele post sayı değerine göre son postları dizi olarak getirir
    
    
    foreach($posts as $id => $post){ 
        $id_arr[] = $id; // $posts dizisindeki tüm id değerlerini $id_arr dizisi ile yeni bir diziye ekler  
    }

    for($i=1; $i<10000; $i++) { // 1 ila 10000 sayısı aralığında  
        if(in_array($i,$id_arr)) { // $i sayısı $id_arr dizisinde tanımlı ise,
           continue; // döngüyü bir sonraki değere atar 
        } else { //değilse
            $tmp = $i; // Geçici $tmp değişkenine $i değişkenini atar
            break; // döngüden çıkar.
        }
    }
    
    $id = $tmp; // $id değişkenine geçici $tmp değerini atar

    $my_post = [];
    $my_post[$id] = [ 
        "title" => "Prototype Title ",
        "type" => "warning" ];
  
  
    $posts[] = $my_post; 
    foreach($my_post as $id => $post) { 
    
        if($post['type'] =="urgent") { // $post dizisinde "type" değerine göre div içerisinde background-color stilini oluşturur
              echo "<div style = 'background-color:pink' >";
        } elseif($post['type'] =="warning") {
              echo "<div style = 'background-color:green' >";
        } else {
              echo "<div>";
        }
        getPostDetails($id, $post['title']); // Verilen parametrelere göre ekrana post detaylarını getirir
             echo "</div>";
    }
}
else { // Eğer yukarıda $posts isimli değişken tanımlandıysa aşağıdaki kodları çalıştırır
    
        if(!isset($id)){

        foreach($posts as $id => $post){ 
             $id_arr[] = $id; // $posts dizisindeki tüm id değerlerini $id_arr dizisi ile yeni bir diziye ekler 
            }
    
        for($i=1; $i<10000; $i++) { // 1 ila 10000 sayısı aralığında  
             if(in_array($i,$id_arr)) { // eğer $i sayısı $id_arr dizisinde tanımlı ise,
                 continue; // devam et yani bir sonraki değere iterate eder 
            }    
        else { //değilse
  $tmp = $i; // Geçici $tmp değişkenine $i değişkenini atar
                 break; // döngüden çıkar. 
            }}

  $id = $tmp; // $id değişkenine geçici $tmp değerini atar
            }
  $post[$id] = [
  'title' => $post['title'],
  'type' => $post['type']
    ];

    
        if(!isset($post['title'])){ // Eğer posts array içerisindeki geçerli dizi değeri içerisinde $title değeri tanımlı değilse,
             $post['title'] = "Added Title"; // mevcut post dizisine 'title' değeri ekle
        }
        if(!isset($post['type'])){ 
             $post['type'] = "warning"; 
        }
    

    // Eğer posts array i içerisindeki geçerli dizi değeri içerisinde $id değeri tanımlı değilse aşağıdaki kodları çalıştırır
    if($post['type'] == "urgent") { // $post dizisinde "type" değerine göre div içerisinde background-color stilini oluştur
           echo "<div style = 'background-color:blue' >";
        
    } elseif($post['type'] == "warning") {
           echo "<div style = 'background-color:pink' >";
    } else {
           echo "<div>";
    }
    getPostDetails($id, $post['title']); // Belirtilen $id ve $post['title] parametrelerine göre post içeriğini getirir
           echo "</div>";

}

