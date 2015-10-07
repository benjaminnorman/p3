<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 10/6/2015
 * Time: 9:12 PM
 */

namespace project3\Http\Controllers;

class FakeUserController extends Controller {

    public function __construct(){
        //place setup code here to prepare for other functions to execute
    }

    public function getCreate(){
        echo 'Enter the number of users you would like: ';
        $view = '<form method="POST" action="/randomuser/create">';
        $view .= csrf_field();
        $view .= '<input type="text" name="numUsers">';
        $view .= '<input type="submit">';
        $view .= '<form>';

        return $view;
    }

    public function postCreate(){
        $this->generateFakeUser($_POST['numUsers']);
    }

    public function generateFakeUser($numUsers){
        for($i=1; $i<=$numUsers; $i++){
            //instantiate new random user generator
            $faker = \Faker\Factory::create();

            //get random user info
            $name = $faker->name;
            $address = $faker->address;

            echo 'NEW USER: ';
            echo '<br>';
            echo 'Name: '.$name;
            echo '<br>';
            echo 'Address: '.$address;
            echo '<br><br>';
        }
    }
}