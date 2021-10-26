<?php

Interface SocialMediaIterface
{
    public function CreatPost($artical):string;
    public function Login($username,$password):string;
    public function Logout();

}

class FaceBook implements SocialMediaIterface
{

    public function CreatPost($artical): string
    {
        return $artical."\n";
    }

    public function Login($username, $password): string
    {
        return $username." Login to Facebook \n";
    }
    public function Logout()
    {
        echo "You Are Logout from Facebook \n";
    }

}

class Twitter implements SocialMediaIterface
{

    public function CreatPost($artical): string
    {
        return $artical."\n";
    }

    public function Login($username, $password): string
    {
        return $username." Login to Twitter \n";
    }
    public function Logout()
    {
        echo "You Are Logout from Twitter \n";
    }

}

class LinkedIn implements SocialMediaIterface
{

    public function CreatPost($artical): string
    {
        return $artical."\n";
    }

    public function Login($username, $password): string
    {
        return $username." Login to LinkedIn \n";
    }
    public function Logout()
    {
        echo "You Are Logout from LinkedIn \n";
    }

}

class Ineracte
{
    public function setSocialmediaObj(SocialMediaIterface $SMIterface)
    {
        return $SMIterface;
    }
}


$obj = new Ineracte();
$obj2=$obj->setSocialmediaObj(new Twitter());
echo $obj2->Login("maher","123");
echo $obj2->CreatPost("Hi Twitter");
echo $obj2->Logout();
