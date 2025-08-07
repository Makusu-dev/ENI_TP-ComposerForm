<?php

namespace App\Entity;

class Form
{
    protected $formHtml='';
    protected $formHeader='';
    protected $formFooter='</fieldset></form>';

    public function __construct($url,$title)
    {
        $this->formHeader="<form method=\"post\" action=\"$url\">$title<fieldset>";
        $this->formHtml=$this->formHeader;
    }

    public function getForm() : string{
        $this->formHtml=$this->formHtml.$this->formFooter;
        return $this->formHtml;
    }

    public function setText(string $text,string $id): void {
        $this->formHtml=$this->formHtml."<label for=\"$id\">$text</label>";
        $this->formHtml=$this->formHtml."<div><input id=\"$id\" placeholder=\"$text\"></div>";
    }
    public function setButton(string $text='Submit'): void {
        $this->formHtml=$this->formHtml."<div><button>$text</button></div>";
    }



}