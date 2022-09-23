<?php
function comprobarDato($param,$titulo){
    if($param == ""){
        echo "<p style=color:red>No ha indicado su ".$titulo."</p>";
    }else{
        echo "su ".$titulo." es ".$param;
    }
}
function comprobarDato2($param,$titulo){
  
        return  "su ".$titulo." es ".$param;
    }

 function comprobarArray($array,$titulo){
   
       $text="";
        for($i = 0; $i < count($array); $i++){
            $text = $text." ".$array[$i];
        }
        echo "Sus aficiones son: ".$text."<br>";
       // echo "sus aficiones son ".print_r($array);
 }

 

/*function comprobarArray($array,$titulo){
     print_r($array);
    }
*/
?>

<h1>Datos Personales</h1>
<?php comprobarDato($_POST["Nombre"],"nombre"); ?><br>
<?php comprobarDato($_POST["Apellidos"],"apellidos"); ?><br>
<?php comprobarDato($_POST["Edad"],"edad"); ?><br>
<?php comprobarDato($_POST["Peso"],"peso"); ?><br>
<?php echo isset($_POST["Sexo"]) ? comprobarDato2($_POST["Sexo"],"sexo") : "<p style=color:red>No ha indicado su sexo</p>"; ?><br>
<?php echo isset($_POST["Civil"]) ? comprobarDato2($_POST["Civil"],"Estado Civil") : "<p style=color:red>No ha indicado su estado civil</p>"; ?><br>
<?php if(isset($_POST["Aficiones"])){
	       comprobarArray($_POST["Aficiones"],"aficiones"); 
        }else{
	       echo "<p style=color:red>No ha indicado su estado civil </p>";
        }
?>
<a href="datos.html">Volver al formulario</a>