<?php

class Comment
{
    public $name;
    public $date;
    public $text;

    function __construct(string $name, string $date,string $text)
    {
        $this->name = $name;
        $this->date = $date;
        $this->text = $text;
    }

    function show()
    {
        $userName = $this->name;
        $userText = $this->text;
        
        $format = 'Y-m-d H:i:s';
        $date = DateTime::createFromFormat($format, $this->date);

        $commentTime = $date->format('H:i');
        $commentDate = $date->format('d.m.Y');
        include "comment-template.php";
    }
    
}
