
<?php
require_once "funciones.php";
use PHPUnit\Framework\TestCase;

/*la clase TestCase eredada de PHPUnit*/
class problema3Test extends TestCase{

  // por cada prueba una funcion
  // siempre tiene que empezar con la palabra test
  public function testCadenaEnMedio() {

    $txt="asd<->sdf";
    $res = BuscarCoincidenciaEnUnString($txt);
    //$this->assertTrue($res);
    $this->assertEquals(true,$res);
  }

  public function testCadenaAlFinal() {

    $txt="asdaa<->f";
    $res = BuscarCoincidenciaEnUnString($txt);
    $this->assertEquals(false,$res);
  }

  public function testCadenaAlPrincipio() {

    $txt="asd<->asdf";
    $res = BuscarCoincidenciaEnUnString($txt);
    $this->assertEquals(false,$res);
  }

  public function testCadenaEnMedioMas1() {

    $txt="asda<->sdf";
    $res = BuscarCoincidenciaEnUnString($txt);
    $this->assertEquals(true,$res);
  }

    public function testDobleCadena() {

    $txt="asd<->asasa<->";
    $res = BuscarCoincidenciaEnUnString($txt);
    $this->assertEquals(false,$res);
  }

  public function testCadenaEnMedioMenos1() {

    $txt="asd<->asdf";
    $res = BuscarCoincidenciaEnUnString($txt);
    $this->assertEquals(false,$res);
  }

  /*te evalua verdadero si esta vacio*/
  public function testStringVacio() {
    $txt = "";
    $res = BuscarCoincidenciaEnUnString($txt);
    $this->assertFalse(false,$res);
  }
}


?>
