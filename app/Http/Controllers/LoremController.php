<?php

namespace project3\Http\Controllers;

class LoremController extends Controller {

    public function __construct(){
        //place setup code here to prepare for other functions to execute
    }

    public function getCreate(){
        echo 'Enter the number of paragraphs you would like: ';
        $view = '<form method="POST" action="/randomtext/create">';
        $view .= csrf_field();
        $view .= '<input type="text" name="numParagraphs">';
        $view .= '<input type="submit">';
        $view .= '<form>';

        return $view;
    }

    public function postCreate(){
        //instantiate a Lorem Ipsum generator from the package
        $generator = new \Badcow\LoremIpsum\Generator();

        //generate the paragraphs using the generator
        $paragraphs = $generator->getParagraphs($_POST['numParagraphs']);

        //use php implode() function to format text
        $paragraphsImploded = implode('<p>', $paragraphs);

        return 1;
//        return $paragraphsImploded;
    }
}