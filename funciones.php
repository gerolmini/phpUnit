<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>EC2-M3-Gustavo-Gerolmini</title>
</head>
<body>
  <h1>Problema 1</h1>
  <p>Función que busque el máximo de un array de enteros recibiendo como argumento</p>
  <p>max ([3,4,6,1,65,1-3,6,10]) resultado: 65</p>

  <?php
  $a =[3,4,6,1,65,-3,6,10];

  function MaximoDeUnArray($a){
    if(count($a)>0){
      $max=$a[0];
      for($i=1; $i<count($a); $i++){
        if($max<$a[$i]){
          $max = $a[$i];
        }
      }
      return $max;
    }else{
      return false;
    }
  }
  echo "el resultado es " .MaximoDeUnArray($a);
  // Mayor al inicio
  // Mayor al final
  // Negativo al inici
  // Negativo al final
  // array vacio
  // Mayor por el medio
  ?>

  <h1>Problema 2</h1>
  <p>Función que busque el mínimo de una array de enteros</p>
  <p>max ([3,4,6,1,65,1-3,6,10]) resultado: -3</p>

  <?php
  function MinimoDeUnArray($a){
    if(count($a)>0){
      $min=$a[0];
      for($i=1; $i<count($a); $i++){
        if($min>$a[$i]){
          $min = $a[$i];
        }
      }
      return $min;
    }else{
      return false;
    }
  }
  echo "el resultado es " .MinimoDeUnArray($a);
  ?>
  <h1>Problema 3</h1>
  <p>Dada una cadena, implementar una función que diga (true o false) si la secuencia "<->" aparece en medio. Se considerará que está en medio si el número de caracteres que hay antes y después difiren como mucho en una unidad.</p>
  <!-- <p>flechaMedio ("xaj<->bb") resultado: true</p> -->

  <?php

  $txt="a3d<->l44";

  echo $txt;
  echo "<br><br>";

  function BuscarCoincidenciaEnUnString($txt){

    if($txt !="") {
      $i = strlen($txt)/2;
      $i = intval($i);
      // encuentra la secuencia de caracteres en la mitad
      if($txt[$i]=="-") {
        $cadena = $i;
        // más de 2 caracteres en la primera mitad
      }elseif($txt[$i+1]=="-") {
        $cadena =$i;
        // más de 2 caracteres en la segunda mitad
      }

      elseif($txt[$i-1] == "-") {
        $cadena = $i;
      }else{

        return false;
      }

      if($txt[$cadena-1] == "<" && $txt[$cadena+1] == ">"){
        return true;

      }else{
        return false;

      }
    }
  }
  echo "el resultado es: " .BuscarCoincidenciaEnUnString($txt);
  ?>

</body>
</html>
