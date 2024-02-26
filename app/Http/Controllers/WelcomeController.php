<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return 'Hello World';
    }

    // public function welcome(){
    //     return view('welcome');
    // }

    public function postComment($postId, $commentId){
        return 'Pos ke-'.$postId." Komentar ke-:".$commentId; 
    }

    public function article($id){
        return 'Halaman Artikel dengan ID - '.$id;
    }

    public function DisName($name){
        return 'Nama saya '.$name;
    }

    public function greeting(){
        return view('blog.hello')
        >with('name','Fathurrozak')
                ->with('occupation','Astronaut');
    }

}
