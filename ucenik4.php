<?php

echo '<h1 align="center">Unos podataka ucenika</h1>';
echo '<hr/>';
$connerror = 'Could not connect';
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'ucenik';
if(!@mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db)){
   die($connerror);
}
mysqli_query(@mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db),"SET NAMES utf8");
mysqli_query(@mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db),"SET CHARACTER SET utf8");
mysqli_query(@mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db),"SET COLLATION_CONNECTION='utf8_unicode_ci'");
if(isset($_POST['ime']) && isset($_POST['jmbg']) && isset($_POST['raz_od']) && isset($_POST['staresina']) && isset($_POST['imeoca']) && isset($_POST['imemajke']) && isset($_POST['adresa']) && isset($_POST['telefon']) && isset($_POST['brclanova']) && isset($_POST['bracnostanje']) && isset($_POST['zanimanjeoca']) && isset($_POST['zanimanjemajke']) && isset($_POST['skolskagodina']) && isset($_POST['delovodnibroj']) && isset($_POST['maticnibroj']) && isset($_POST['maticnibrojb']) && isset($_POST['godupisa']) && isset($_POST['mro']) && isset($_POST['drzavljanstvo']) && isset($_POST['mesto']) && isset($_POST['firmaotac']) && isset($_POST['firmamajka']) && isset($_POST['firmaucenik']) && isset($_POST['pzrs']) && isset($_POST['razred']) && isset($_POST['napomena'])){
  $ime = $_POST['ime'];
  $jmbg = $_POST['jmbg'];
  $raz_od = $_POST['raz_od'];
  $staresina = $_POST['staresina'];
  $imeoca  = $_POST['imeoca'];
  $imemajke = $_POST['imemajke'];
  $adresa = $_POST['adresa'];
  $telefon = $_POST['telefon'];
  $brclanova = $_POST['brclanova'];
  $bracnostanje = $_POST['bracnostanje'];
  $zanimanjeoca = $_POST['zanimanjeoca'];
  $zanimanjemajke = $_POST['zanimanjemajke'];
  $skolskagodina = $_POST['skolskagodina'];
  $delovodnibroj = $_POST['delovodnibroj'];
  $maticnibroj = $_POST['maticnibroj'];
  $maticnibrojb = $_POST['maticnibrojb'];
  $godupisa = $_POST['godupisa'];
  $mro = $_POST['mro'];
  $drzavljanstvo = $_POST['drzavljanstvo'];
  $mesto = $_POST['mesto'];
  $firmaoca = $_POST['firmaotac'];
  $firmamajke = $_POST['firmamajka'];
  $firmaucenik = $_POST['firmaucenik'];
  $pzrs = $_POST['pzrs'];
  $razred = $_POST['razred'];
  $napomena = $_POST['napomena'];
  if(!empty($ime) && !empty($jmbg) && !empty($raz_od) && !empty($staresina) && !empty($imeoca) && !empty($imemajke) && !empty($adresa) && !empty($telefon) && !empty($brclanova) && !empty($bracnostanje) && !empty($zanimanjeoca) && !empty($zanimanjemajke) && !empty($skolskagodina) && !empty($delovodnibroj) && !empty($maticnibroj) && !empty($maticnibrojb) && !empty($godupisa) && !empty($mro) && !empty($drzavljanstvo) && !empty($mesto) && !empty($firmaoca) && !empty($firmamajke) && !empty($firmaucenik) && !empty($pzrs) && !empty($razred) && !empty($napomena)){
    $query = "INSERT INTO `ucenici` VALUES('','$ime','$jmbg','$raz_od','$staresina','$imeoca','$imemajke','$adresa','$telefon','$brclanova','$bracnostanje','$zanimanjeoca','$zanimanjemajke','$skolskagodina','$delovodnibroj','$maticnibroj','$maticnibrojb','$godupisa','$mro','$drzavljanstvo','$mesto','$firmaoca','$firmamajke','$firmaucenik','$pzrs','$razred','$napomena')";
    mysqli_query(@mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db),$query);
  }else{
    echo 'Popuni sva polja!';
  }
}
mysqli_close(@mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db));
?>
<form action = "ucenik4.php" method = "POST">
Ime i Prezime:<input type = "text" name =  "ime"><br><br>
JMBG:<input type = "text" name = "jmbg"><br><br>
Razred/Odeljenje:<input type = "text" name = "raz_od"><br><br>
Odeljenski Staresina:<input type = "text" name = "staresina"><br><br>
Ime oca:<input type = "text" name = "imeoca"><br><br>
Ime majke:<input type = "text" name = "imemajke"><br><br>
Adresa stanovanja:<input type = "text" name = "adresa"><br><br>
Telefon:<input type = "text" name = "telefon"><br><br>
Broj clanova porodice: <input type = "text" name = "brclanova"><br><br>
Bracno stanje roditelja:<input type = "radio" name = "bracnostanje" value = "ozenjen">Ozenjen
                        <input type = "radio" name = "bracnostanje" value = "neozenjen">Neozenjen
                        <input type = "radio" name = "bracnostanje" value = "razveden">Razveden<br><br>
Zanimanje oca:<input type = "text" name = "zanimanjeoca"><br><br>
Zanimanje majke:<input type = "text" name = "zanimanjemajke"><br><br>
Skolska godina:<input type = "text" name = "skolskagodina"><br><br>
Delovodni broj:<input type = "text" name = "delovodnibroj"><br><br>
Maticni broj I-IV:<input type = "text" name = "maticnibroj"><br><br>
Maticni broj V-VIII:<input type = "text" name = "maticnibrojb"><br><br>
Godina upisa u I razred:<input type = "text" name = "godupisa"><br><br>
Mesto rodjenja,Opstina:<input type = "text" name = "mro"><br><br>
Drzavljanstvo:<input type = "text" name = "drzavljanstvo"><br><br>
Mesto:<input type = "text" name = "mesto"><br><br>
Firma gde radi otac - telefon:<input type = "text" name = "firmaotac"><br><br>
Firma gde radi majka - telefon:<input type = "text" name = "firmamajka"><br><br>
Firma gde radi ucenik:<input type = "text" name = "firmaucenik"><br><br>
Poslednji zavrseni razred/Skola/Skolska godina:<input type = "text" name = "pzrs"><br><br>
Razred koji upisuje:<input type = "radio" name = "razred" value = "I">I
                    <input type = "radio" name = "razred" value = "II">II
                    <input type = "radio" name = "razred" value = "III">III
                    <input type = "radio" name = "razred" value = "IV">IV
                    <input type = "radio" name = "razred" value = "V">V
                    <input type = "radio" name = "razred" value = "VI">VI
                    <input type = "radio" name = "razred" value = "VII">VII
                    <input type = "radio" name = "razred" value = "VIII">VIII<br><br>
Napomena:<textarea name = "napomena" rows = "4" cols = "70">Napomena</textarea><br><br>
<input type = "submit" value = "Potvrdi">
</form>