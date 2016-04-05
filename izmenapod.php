<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=ISO 8859-5">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
<h1 align="center">Измена података ученика</h1>
<hr/>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" accept-charset="UTF-8">
<table border="0">
<caption><strong>Ученик чије податке мењамо</strong></caption>
<tr>
<td>Име и презиме ученика</td>
<td><input type = "text" name =  "ime"></td>
</tr>
<tr>
<td>Датум рођења</td>
<td><input type = "text" name =  "datumrodjenja"></td>
</tr>
</table>
<hr/>
<table border="0">
<tr>
<td>ЈМБГ</td>
<td><input type = "text" name = "jmbg"></td>
</tr>
<tr>
<td>Одељенски старешина</td>
<td><input type = "text" name = "staresina"></td>
</tr>
<tr>
<td>Име и презиме оца</td>
<td><input type = "text" name = "imeoca"></td>
</tr>
<tr>
<td>Име и презиме мајке</td>
<td><input type = "text" name = "imemajke"></td>
</tr>
<tr>
<td>Адреса становања</td>
<td><input type = "text" name = "adresa"></td>
</tr>
<tr>
<td>Телефон</td>
<td><input type = "text" name = "telefon"></td>
</tr>
<tr>
<td>Школска година</td>
<td><input type = "text" name = "skolskagodina"></td>
</tr>
<tr>
<td>Деловодни број</td>
<td><input type = "text" name = "delovodnibroj"></td>
</tr>
<tr>
<td>Матични број I-IV</td>
<td><input type = "text" name = "maticnibroj"></td>
</tr>
<tr>
<td>Матични број V-VIII</td>
<td><input type = "text" name = "maticnibrojb"></td>
</tr>
<tr>
<td>Година уписа у I разред</td>
<td><input type = "text" name = "godupisa"></td>
</tr>
<tr>
<td>Место рођења,општина</td>
<td><input type = "text" name = "mro"></td>
</tr>
<tr>
<td>Држављанство</td>
<td><input type = "text" name = "drzavljanstvo"></td>
</tr>
<tr>
<td>Место</td>
<td><input type = "text" name = "mesto"></td>
</tr>
<tr>
<td>Фирма где ради отац - телефон</td>
<td><input type = "text" name = "firmaotac"></td>
</tr>
<tr>
<td>Фирма где ради мајка - телефон</td>
<td><input type = "text" name = "firmamajka"></td>
</tr>
<tr>
<td>Фирма где ради ученик - телефон</td>
<td><input type = "text" name = "firmaucenik"></td>
</tr>
<tr>
<td>Последњи завршени разред/Школа/Школска година</td>
<td><input type = "text" name = "pzrs"></td>
</tr>
<tr>
<td>Разред који уписује</td>
<td><input type = "radio" name = "razred" value = "I">I
                    <input type = "radio" name = "razred" value = "II">II
                    <input type = "radio" name = "razred" value = "III">III
                    <input type = "radio" name = "razred" value = "IV">IV
                    <input type = "radio" name = "razred" value = "V">V
                    <input type = "radio" name = "razred" value = "VI">VI
                    <input type = "radio" name = "razred" value = "VII">VII
                    <input type = "radio" name = "razred" value = "VIII">VIII</td>
</tr>
<tr>
<td>Напомена</td>
<td><textarea name = "napomena" rows = "4" cols = "70">Напомена</textarea></td>
</tr>
<tr>
<td>Ново име и презиме ученика</td>
<td><input type = "text" name =  "novoime"></td>
</tr>
<tr>
<td colspan="2"><input type = "submit" value = "Измени"></td>
</tr>
</table>
</form>
<?php
require 'konekcija.php';
mysqli_set_charset($conn,'utf8');
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['jmbg'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $jmbg = ltrim(mysqli_real_escape_string($conn,$_POST['jmbg']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($jmbg))
   {
		 $sql1 = "UPDATE `ucenici` SET `jmbg`='$jmbg' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql1);
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['staresina'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $staresina = ltrim(mysqli_real_escape_string($conn,$_POST['staresina']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($staresina))
   {
		 $sql2 = "UPDATE `ucenici` SET `odeljenskistaresina`='$staresina' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql2);
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['imeoca'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $imeoca = ltrim(mysqli_real_escape_string($conn,$_POST['imeoca']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($imeoca))
   {
		 $sql3 = "UPDATE `ucenici` SET `imeoca` = '$imeoca' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql3);
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['imemajke'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $imemajke = ltrim(mysqli_real_escape_string($conn,$_POST['imemajke']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($imemajke))
   {
		 $sql4 = "UPDATE `ucenici` SET `imemajke`='$imemajke' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql4);
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['adresa'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $adresa = ltrim(mysqli_real_escape_string($conn,$_POST['adresa']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($adresa))
   {
		 $sql5 = "UPDATE `ucenici` SET `adresa`='$adresa' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql5);
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['telefon'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $telefon = ltrim(mysqli_real_escape_string($conn,$_POST['telefon']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($telefon))
   {
		 $sql6 = "UPDATE `ucenici` SET `telefon`='$telefon' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql6);
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['skolskagodina'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $skolskagodina = ltrim(mysqli_real_escape_string($conn,$_POST['skolskagodina']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($skolskagodina))
   {
		 $sql7 = "UPDATE `ucenici` SET `skolskagodina`='$skolskagodina' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql7);
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['delovodnibroj'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $delovodnibroj = ltrim(mysqli_real_escape_string($conn,$_POST['delovodnibroj']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($delovodnibroj))
   {
		 $sql8 = "UPDATE `ucenici` SET `delovodnibroj`='$delovodnibroj' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql8);
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['maticnibroj'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $maticnibroj = ltrim(mysqli_real_escape_string($conn,$_POST['maticnibroj']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($maticnibroj))
   {
		 $sql9 = "UPDATE `ucenici` SET `maticnibroj`='$maticnibroj' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql9);
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['maticnibrojb'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $maticnibrojb = ltrim(mysqli_real_escape_string($conn,$_POST['maticnibrojb']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($maticnibrojb))
   {
		 $sql10 = "UPDATE `ucenici` SET `maticnibrojb`='$maticnibrojb' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql10);
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['godupisa'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $godupisa = ltrim(mysqli_real_escape_string($conn,$_POST['godupisa']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($godupisa))
   {
		 $sql20 = "UPDATE `ucenici` SET `godupisa`='$godupisa' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql20);
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['mro'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $mro = ltrim(mysqli_real_escape_string($conn,$_POST['mro']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($mro))
   {
		 $sql11 = "UPDATE `ucenici` SET `mro`='$mro' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql11);
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['drzavljanstvo'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $drzavljanstvo = ltrim(mysqli_real_escape_string($conn,$_POST['drzavljanstvo']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($drzavljanstvo))
   {
		 $sql12 = "UPDATE `ucenici` SET `drzavljanstvo`='$drzavljanstvo' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql12);
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['mesto'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $mesto = ltrim(mysqli_real_escape_string($conn,$_POST['mesto']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($mesto))
   {
		 $sql13 = "UPDATE `ucenici` SET `mesto`='$mesto' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql13);
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['firmaotac'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $firmaoca = ltrim(mysqli_real_escape_string($conn,$_POST['firmaotac']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($firmaoca))
   {
		 $sql14 = "UPDATE `ucenici` SET `firmaotac`='$firmaoca' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql14); 
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['firmamajka'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $firmamajke = ltrim(mysqli_real_escape_string($conn,$_POST['firmamajka']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($firmamajke))
   {
		 $sql15 = "UPDATE `ucenici` SET `firmamajka`='$firmamajke' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql15); 
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['firmaucenik'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $firmaucenik = ltrim(mysqli_real_escape_string($conn,$_POST['firmaucenik']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($firmaucenik))
   {
		 $sql21 = "UPDATE `ucenici` SET `firmaucenik`='$firmaucenik' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql21); 
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['pzrs'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $pzrs = ltrim(mysqli_real_escape_string($conn,$_POST['pzrs']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($pzrs))
   {
		 $sql16 = "UPDATE `ucenici` SET `pzrs`='$pzrs' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql16); 
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['razred'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $razred = ltrim(mysqli_real_escape_string($conn,$_POST['razred']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($razred))
   {
		 $sql17 = "UPDATE `ucenici` SET `razred`='$razred' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql17); 
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['napomena'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $napomena = ltrim(mysqli_real_escape_string($conn,$_POST['napomena']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($napomena))
   {
		 $sql18 = "UPDATE `ucenici` SET `napomena`='$napomena' WHERE `ime`= '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql18); 
   }
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['novoime'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($conn,$_POST['datumrodjenja']));
  $novoime = ltrim(mysqli_real_escape_string($conn,$_POST['novoime']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($novoime))
   {
		 $sql19 = "UPDATE `ucenici` SET `ime` = '$novoime' WHERE `ime` = '$ime' AND `datumrodjenja` = '$datumrodjenja'";
		 mysqli_query($conn,$sql19);
   }
}
mysqli_close($conn); 
?>
</body>
</html>