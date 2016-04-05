<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=ISO 8859-5">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
<h1 align="center">Унос података ученика</h1>
<hr/>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" accept-charset="UTF-8">
<table border="0">
<tr>
<td>Име и презиме</td>
<td><input type = "text" name =  "ime"></td>
</tr>
<tr>
<td>Датум рођења</td>
<td><input type = "text" name =  "datumrodjenja"></td>
</tr>
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
<td colspan="2"><input type = "submit" value = "Потврди"></td>
</tr>
</table>
</form>

<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'skola';

$baza = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
mysqli_set_charset($baza,'utf8');

if ($baza->connect_error > 0) {
    die("Neuspešno povezivanje sa bazom 1: " . $baza->connect_error);
}
if(isset($_POST['ime']) && isset($_POST['datumrodjenja']) && isset($_POST['jmbg']) && isset($_POST['staresina']) && isset($_POST['imeoca']) && isset($_POST['imemajke']) && isset($_POST['adresa']) && isset($_POST['telefon']) && isset($_POST['skolskagodina']) && isset($_POST['delovodnibroj']) && isset($_POST['maticnibroj']) && isset($_POST['maticnibrojb']) && isset($_POST['godupisa']) && isset($_POST['mro']) && isset($_POST['drzavljanstvo']) && isset($_POST['mesto']) && isset($_POST['firmaotac']) && isset($_POST['firmamajka']) && isset($_POST['firmaucenik']) && isset($_POST['pzrs']) && isset($_POST['razred']) && isset($_POST['napomena']))
{
  $ime = ltrim(mysqli_real_escape_string($baza,$_POST['ime']));
  $datumrodjenja = ltrim(mysqli_real_escape_string($baza,$_POST['datumrodjenja']));
  $jmbg = ltrim(mysqli_real_escape_string($baza,$_POST['jmbg']));
  $staresina = ltrim(mysqli_real_escape_string($baza,$_POST['staresina']));
  $imeoca  = ltrim(mysqli_real_escape_string($baza,$_POST['imeoca']));
  $imemajke = ltrim(mysqli_real_escape_string($baza,$_POST['imemajke']));
  $adresa = ltrim(mysqli_real_escape_string($baza,$_POST['adresa']));
  $telefon = ltrim(mysqli_real_escape_string($baza,$_POST['telefon']));
  $skolskagodina = ltrim(mysqli_real_escape_string($baza,$_POST['skolskagodina']));
  $delovodnibroj = ltrim(mysqli_real_escape_string($baza,$_POST['delovodnibroj']));
  $maticnibroj = ltrim(mysqli_real_escape_string($baza,$_POST['maticnibroj']));
  $maticnibrojb = ltrim(mysqli_real_escape_string($baza,$_POST['maticnibrojb']));
  $godupisa = ltrim(mysqli_real_escape_string($baza,$_POST['godupisa']));
  $mro = ltrim(mysqli_real_escape_string($baza,$_POST['mro']));
  $drzavljanstvo = ltrim(mysqli_real_escape_string($baza,$_POST['drzavljanstvo']));
  $mesto = ltrim(mysqli_real_escape_string($baza,$_POST['mesto']));
  $firmaoca = ltrim(mysqli_real_escape_string($baza,$_POST['firmaotac']));
  $firmamajke = ltrim(mysqli_real_escape_string($baza,$_POST['firmamajka']));
  $firmaucenik = ltrim(mysqli_real_escape_string($baza,$_POST['firmaucenik']));
  $pzrs = ltrim(mysqli_real_escape_string($baza,$_POST['pzrs']));
  $razred = ltrim(mysqli_real_escape_string($baza,$_POST['razred']));
  $napomena = ltrim(mysqli_real_escape_string($baza,$_POST['napomena']));
  if(!empty($ime) && !empty($datumrodjenja) && !empty($jmbg) && !empty($staresina) && !empty($imeoca) && !empty($imemajke) && !empty($adresa) && !empty($telefon) && !empty($skolskagodina) && !empty($delovodnibroj) && !empty($maticnibroj) && !empty($maticnibrojb) && !empty($godupisa) && !empty($mro) && !empty($drzavljanstvo) && !empty($mesto) && !empty($firmaoca) && !empty($firmamajke) && !empty($firmaucenik) && !empty($pzrs) && !empty($razred) && !empty($napomena))
  {
    $query = "INSERT INTO `ucenici` VALUES('','$ime','$datumrodjenja','$jmbg','$staresina','$imeoca','$imemajke','$adresa','$telefon','$skolskagodina','$delovodnibroj','$maticnibroj','$maticnibrojb','$godupisa','$mro','$drzavljanstvo','$mesto','$firmaoca','$firmamajke','$firmaucenik','$pzrs','$razred','$napomena')";
   $result = $baza->query($query);
  }else
  {
    echo 'Popuni sva polja!';
  }
}
$baza->close();
?>
</body>
</html>