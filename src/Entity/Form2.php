<?php

namespace App\Entity;

class Form2 extends Form
{
    public function __construct($url,$title){
        parent::__construct($url,$title);
    }

    public function setRadio($stringArray,string $text,string $id): void {
        $this->formHtml=$this->formHtml."<label for='\"$id'>$text</label>";
        $this->formHtml=$this->formHtml."<fieldset>";
        foreach ($stringArray as $string) {
            $this->addRadio($string,$text);
        }
        $this->formHtml=$this->formHtml."</fieldset>";
    }

    public function setCheckbox($stringArray,string $text,string $id): void {
        $this->formHtml=$this->formHtml."<label for='\"$id'>$text</label>";
        $this->formHtml=$this->formHtml."<fieldset>";
        foreach ($stringArray as $string) {
            $this->addCheckbox($string,$text);
        }
        $this->formHtml=$this->formHtml."</fieldset>";
    }

    public function setSelect($stringArray,string $text,string $id): void {
        $this->formHtml=$this->formHtml."<label for='\"$id'>$text</label>";
        $this->formHtml=$this->formHtml."<fieldset><select id=\".$id\">";
        foreach ($stringArray as $string) {
            $this->addSelectOption($string,$text);
        }
        $this->formHtml=$this->formHtml."</select></fieldset>";
    }

    public function addRadio(string $text,string $name): void {
        $this->formHtml=$this->formHtml."<div><input name=\"$name\" type='radio'>$text</div>";
    }

    public function addCheckbox(string $text,string $name): void {
        $this->formHtml=$this->formHtml."<div><input name=\"$name\" type='checkbox'>$text</div>";
    }

    public function addDate(string $text,string $name): void {
        $this->formHtml=$this->formHtml."<fieldset><input name=\"$name\" type=\"date\">$text</fieldset>";
    }

    public function addSelectOption(string $text,string $name): void {
        $this->formHtml=$this->formHtml."<option name=\"$name\">$text</option>";
    }

    public function addTextarea(string $text,string $name): void {
        $this->formHtml=$this->formHtml."<fieldset>$text<textarea name=\"$name\"></textarea></fieldset>";
    }

    public function addFile(string $text,string $name): void {
        $this->formHtml=$this->formHtml."<fieldset>$text<input name=\"$name\" type=\"file\"></fieldset>";
    }


}