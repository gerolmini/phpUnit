
<?php
require_once "funciones.php";
use PHPUnit\Framework\TestCase;

/*la clase TestCase eredada de PHPUnit*/
class problema4Test extends TestCase{

  // por cada prueba una funcion
  // siempre tiene que empezar con la palabra test
  public function testTodosNegativos(){

    $a =[-3,-4,-6,-1,-65,-3,-6,-10];
    $res = MaximoDeUnArray($a);
    //$this->assertTrue($res);
    $this->assertEquals(-1,$res);
  }

  public function testNoTodosNegativos(){

    $a =[3,4,6,1,65,-3,6,10];
    $res = MaximoDeUnArray($a);
    $this->assertEquals(65,$res);
  }
  /*MAYOR QUE*/

  public function testPrimeroNegativos(){

    $a =[-3,-4,-6,1,65,-3,6,10];
    $res = MaximoDeUnArray($a);
    $this->assertEquals(65,$res);
  }

  public function testUltimoNegativos(){

    $a =[3,4,6,1,65,-3,-6,-10];
    $res = MaximoDeUnArray($a);
    $this->assertEquals(65,$res);
  }

  // MENOR QUE
  public function testPrimeroPositivo(){

    $a =[3,4,6,1,65,-3,6,10];
    $res = MaximoDeUnArray($a);
    $this->assertEquals(65,$res);
  }

  public function testUltimoPositivo(){

    $a =[3,4,6,1,65,3,6,10];
    $res = MaximoDeUnArray($a);
    $this->assertEquals(65,$res);
  }

  /*te evalua verdadero si esta vacio*/
  public function testArrayVacio(){
    $a = [];
    $res = MaximoDeUnArray($a);
    $this->assertFalse($res);
  }
}


?>
