<?php

abstract class SocialMediaIterface
{
    abstract public function CreatPost($artical):string;
    abstract public function Login($username,$password):string;
    public function Logout()
    {
        echo "You Are Logout Now";
    }

}

class FaceBook extends SocialMediaIterface
{

    public function CreatPost($artical=''): string
    {
        return "Artical about animals \n";
    }

    public function Login($username, $password): string
    {
        return " Login to Facebook \n";
    }

}

class Twitter extends SocialMediaIterface
{

    public function CreatPost($artical=''): string
    {
        return "Artical about People \n";
    }

    public function Login($username, $password): string
    {
        return " Login to Twitter \n";
    }

}

class LinkedIn extends SocialMediaIterface
{

    public function CreatPost($artical=''): string
    {
        return "Artical about Jobs \n";
    }

    public function Login($username, $password): string
    {
        return " Login to LinkedIn \n";
    }

}

class Ineracte
{
    public function setSocialmediaObj(SocialMediaIterface $SMIterface)
    {
        echo $SMIterface->Login("Maher","123");

        echo $SMIterface->CreatPost();

        echo $SMIterface->Logout();
    }
}


$obj = new Ineracte();
echo $obj->setSocialmediaObj(new LinkedIn());