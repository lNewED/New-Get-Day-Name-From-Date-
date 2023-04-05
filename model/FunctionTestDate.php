<?php declare(strict_types=1);
include "Function.php";
use PHPUnit\Framework\TestCase;
class FunctionTestDate extends TestCase {

    //<!-- ======= DateFunctionTC ======= -->
    public function testDayc01(){
        $obj = new DataAndGrade();
        $this->assertEquals(true,$obj->DateFunction("20","02","2023"));        //  tc1 Fulldate true (Pass)
        $this->assertEquals(false,$obj->DateFunction("","02","2023"));         //  tc2 errorFulldate false (Pass)
        $this->assertEquals(true,$obj->DateFunction("20","02","4"));           //  tc3 month2day29 true (Pass)
        $this->assertEquals(true,$obj->DateFunction("20","02","1"));           //  tc3 month2day29-Is D1 true (Pass)
        $this->assertEquals(true,$obj->DateFunction("20","02","5"));           //  tc4 month2 - Have 28 day true (Pass)
        $this->assertEquals(false,$obj->DateFunction("20","02","-1"));         //  tc5 errorYear-Too much false (Pass)
        $this->assertEquals(false,$obj->DateFunction("20","02","2024"));       //  tc6 errorYear-Too little false (Pass)
        $this->assertEquals(false,$obj->DateFunction("20","00","2023"));       //  tc7 errorMonth-Too little false (Pass)
        $this->assertEquals(false,$obj->DateFunction("20","13","2023"));       //  tc8 errorMonth-Too much false (Pass)
        $this->assertEquals(true,$obj->DateFunction("20","12","2023"));        //  tc9 successMonth true (Pass)
        $this->assertEquals(true,$obj->DateFunction("20","01","4"));           //  tc10 checkMonth31day true (Pass) array[ 1,3,5,7,8,10,12 ]
       
    }

}

?> 