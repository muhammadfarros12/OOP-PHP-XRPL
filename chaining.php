<?php

class StringMutator {

    protected $word;

    public function __construct($word) 
    {
        $this->word = $word;
    }

    public function bold() {
        $this->word = '<b>' . $this->word . '</b>';
        return $this;
    }

    public function italic() {
        $this->word = '<i>' . $this->word . '</i>';
        return $this;
    }
    
    public function underscore() {
        $this->word = '<u>' . $this->word . '</u>';
        return $this;
    }
    
    public function get() {
        return $this->word;
    }
}