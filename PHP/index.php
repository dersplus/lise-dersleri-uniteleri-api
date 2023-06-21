<?php
  // Sınıf seviyelerini getirme
  $url = 'https://api.dersplus.net/ogm/uniteler/list-class';
  $data = file_get_contents($url);
  $classList = json_decode($data, true);
  
  // Sınıf ID ile dersleri getirme
  $classId = 'your_class_id'; // buraya sınıf ID giriniz
  $url = 'https://api.dersplus.net/ogm/uniteler/get-lesson?sınıfId=' . $classId;
  $data = file_get_contents($url);
  $lessons = json_decode($data, true);

  // Ders ID ile üniteleri getirme
  $lessonId = 'your_lesson_id'; // buraya ders ID giriniz
  $url = 'https://api.dersplus.net/ogm/uniteler/get-unite?dersId=' . $lessonId;
  $data = file_get_contents($url);
  $units = json_decode($data, true);
?>
