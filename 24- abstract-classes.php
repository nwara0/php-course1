<?php

// Abstract Classes and methods

abstract class Document
{
    protected $author;

    public function getAuthor()
    {
        return $this->author;
    }

    abstract protected function render($key); // Declared not implemented

//    abstract public function render()
//    {
//
//    } // Declared not implemented (empty body)
}

// private > protected > public

class PDFDocument extends Document
{
    public function render($key, $value=1, $name= 'Omar')
    {
        // Empty
    }
}

//Fatal error: Class PDFDocument contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Document::render) in D:\xampp\htdocs\PHP Course\24- abstract-classes.php on line 22

class DocxDocument extends Document
{
    public function render($key)
    {
        // Code to render the document
    }
}
