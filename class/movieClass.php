<?php

class Movie{
    public $title;
    public $language='en';
    public $originalTitle;
    public $year;
     function __construct($title,$originalTitle,$year,$language='en')
     {
        $this->title=$title;
        $this->originalTitle=$originalTitle;
        $this->setYear($year);
        $this->language=$language;
     }

     public function setYear($year){
        // NON ESISTONO FILM PRIMA DEL 1890 
        if($year>1890 && is_int($year)){
            $this->year=$year;
        }else{echo('c\'è un errore nella data');}
     }

}