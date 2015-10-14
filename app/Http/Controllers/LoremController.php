<?php

namespace project3\Http\Controllers;

class LoremController extends Controller {

    public function __construct(){
        //place setup code here to prepare for other functions to execute
    }

    public function getCreate(){
        return view('loremipsum.create');
    }

    public function postCreate(){
        if(($_POST['numParagraphs'] < 1) || ($_POST['numParagraphs'] > 100)){
            return view('errors.inputCheck');
        }

        //instantiate a Lorem Ipsum generator from the package
        $generator = new \Badcow\LoremIpsum\Generator();

        //generate the paragraphs using the generator
        $paragraphs = $generator->getParagraphs($_POST['numParagraphs']);

        return view('loremipsum.show')->with('paragraphs', $paragraphs);
    }
}