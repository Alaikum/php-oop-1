<?php

class Movie
{
   public $title;
   public $language = 'en';
   public $originalTitle;
   public $year;
   public $mainCast = [];
   function __construct($title, $originalTitle, $year, $mainCast = [], $language = 'en')
   {
      $this->title = $title;
      $this->originalTitle = $originalTitle;
      $this->setYear($year);
      $this->language = $language;
      $this->mainCast = $mainCast;
   }

   public function setYear($year)
   {
      // NON ESISTONO FILM PRIMA DEL 1890 
      if ($year > 1890 && is_int($year)) {
         $this->year = $year;
      } else {
         echo ('c\'è un errore nella data');
      }
   }
   public function addActor($people)
   {
      // var_dump($people);
      array_push($this->mainCast, $people);
   //   $this->mainCast+=$people->name;
   }
}
