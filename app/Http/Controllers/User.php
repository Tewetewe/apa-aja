<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function getUser(){
        return 'Ini dari controller User';
    }

    public function getUserById($id){
        return 'Ini User Id '.$id;
    }

    public function getUserByName($name){
        return 'Nama ' .$name;
    }

    public function returnView($id){
        $namaDepan ='Ferdy';
        $namaBelakang ='Pratama';
        return view('test', compact('namaDepan','namaBelakang','id'));
    }

    public function (){
        return ('tets');
    }
}
