<?php
use App\Add;
use PHPUnit\Framework\TestCase;

class AddTest extends TestCase
{
    public function setUp(){ }
    public function tearDown(){ }
    public function testadd()
    {
        $Obj = new Add();
        $this->assertEquals($Obj->addnum(2,6),8);
    }
}