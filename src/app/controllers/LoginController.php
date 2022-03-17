<?php

use Phalcon\Mvc\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        //return '<h1>Hello!!!</h1>';
    }

    public function loginAction()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $user = Users::find (
            [
                'conditions' => 'name = :name: and email = :email:' ,
                'bind'       => [
                    'name' => $name,
                    'email' => $email,
                ]
            ]
        );
        echo "<h2>Logged in</h2>";
        echo "<br>User id: ";
        print_r($user[0]->id);
        echo "<br>Username: ";
        print_r($user[0]->name);
        echo "<br>Email: ";
        print_r($user[0]->email);
    }
}