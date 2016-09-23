<?php

use PHPUnit\Framework\TestCase;
use Laravist\Hasher\MD5Hasher;

class MD5HasherTest extends TestCase
{
    protected $hasher;

    public function setUp()
    {
        $this->hasher = new MD5Hasher();
    }

    public function testMD5HaserMake()
    {
        $password = md5('password');
        $passwordTwo = $this->hasher->make('password');

        $this->assertEquals($password,$passwordTwo);

    }

    public function testMD5HaserMakeWithouSalt()
    {
        $passwordTwo = $this->hasher->make('password',['salt'=>'jelly']);
        $password = md5('passwordjelly');

        $this->assertEquals($password,$passwordTwo);

    }

    public function testMD5HaserCheck()
    {
        $password = md5('password');
        $passwordCheck = $this->hasher->check('password',$password);

        $this->assertTrue($passwordCheck);
    }
}