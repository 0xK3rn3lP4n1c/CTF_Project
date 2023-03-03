<?php
namespace app\models;

use DateTimeImmutable;
use Firebase\JWT\JWT;

class Login extends BaseModel
{
    public $uname;
    public $pass;
    public $jwt;
    
    public function form()
    {
        $path = __DIR__.'/form.php';
        $this->render($path, ['title' => 'CTF site', "info" => $this]);
    }

    public function getDetail()
    {
        echo $this->uname . $this->pass . "</br>";
    }
  
    public function isAdmin()
    {
       echo "sdadasdasdsdsadsada";
    }

    
    public function generateJwt()
    {
    $secretKey = 'bGS6lzFqvvSQ8ALbOxatm7/Vk7mLQyzqaS34Q4oR1ew=';
    $issuedAt  = new DateTimeImmutable();
    $expire    = $issuedAt->modify('+6 minutes')->getTimestamp();
    $serverName= 'localhost';

    $data =[
        'iat' => $issuedAt->getTimestamp(), //Issued At: time when the token was generated
        'iss' => $serverName,               //Issuer
        'nbf' => $issuedAt->getTimestamp(), //Not Before
        'exp' => $expire, 
        'data'=> ['uname' => $this->uname,'pass' => $this->pass]

    ];

    $this->jwt = JWT::encode(
        $data,
        $secretKey,
        'HS512'
    );

    }

}