<?php
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
echo '<h1 align="center">PRIJAVA</h1>';
echo '<h2 align="center">ZA UPIS U OSNOVNU ŠKOLU BRANKO PEŠIĆ</h2>';
echo '<h3 align="center">SVETOTROJČINA 4</h3>';
echo '<h4 align="center">ZEMUN</h4>';
echo '<style>
      table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      }
      </style>';
echo '<table border="1" style="width:100%">';
$connerror = 'Could not connect';
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'ucenik';
if(!@mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db)){
   die($connerror);
   }
if(isset($_POST['ime']) && isset($_POST['jmbg'])){
  $ime = $_POST['ime'];
  $jmbg = $_POST['jmbg'];
  if(!empty($ime) && !empty($jmbg)){
    $query = "SELECT `id`, `ime`, `jmbg`, `razred/odeljenje`, `odeljenskistaresina`, `imeoca`, `imemajke`, `adresa`, `telefon`, `brojclanovaporodice`, `bracnostanjeroditelja`,`zanimanjeoca`, `zanimanjemajke`, `skolskagodina`, `delovodnibroj`, `maticnibroj`, `maticnibrojb`, `godupisa`, `mro`, `drzavljanstvo`, `mesto`, `firmaotac`, `firmamajka`, `firmaucenik`, `pzrs`, `razred`, `napomena` FROM `ucenici` WHERE `ime`= '$ime' AND `jmbg`='$jmbg'";
    if ($query_run = mysqli_query(@mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db),$query)){

      if (mysqli_num_rows($query_run)  == 0){
        echo 'Nema rezultata pretrage';
      }else if(mysqli_num_rows($query_run)  == 1){
         while($row =  mysqli_fetch_assoc($query_run)){
            $ime = $row['ime'];
            $jmbg = $row['jmbg'];
            $raz_od = $row['razred/odeljenje'];
            $staresina = $row['odeljenskistaresina'];
            $imeoca  = $row['imeoca'];
            $imemajke = $row['imemajke'];
            $adresa = $row['adresa'];
            $telefon = $row['telefon'];
            $brclanova = $row['brojclanovaporodice'];
            $bracnostanje = $row['bracnostanjeroditelja'];
            $zanimanjeoca = $row['zanimanjeoca'];
            $zanimanjemajke = $row['zanimanjemajke'];
            $skolskagodina = $row['skolskagodina'];
            $delovodnibroj = $row['delovodnibroj'];
            $maticnibroj = $row['maticnibroj'];
            $maticnibrojb = $row['maticnibrojb'];
            $godupisa = $row['godupisa'];
            $mro = $row['mro'];
            $drzavljanstvo = $row['drzavljanstvo'];
            $mesto = $row['mesto'];
            $firmaoca = $row['firmaotac'];
            $firmamajke = $row['firmamajka'];
            $firmaucenik = $row['firmaucenik'];
            $pzrs = $row['pzrs'];
            $razred = $row['razred'];
            $napomena = $row['napomena'];

          echo'<tr>
                <td><strong>Ime i Prezime Ucenika</strong></td>
                <td>'.$ime.'</td>
              </tr>
              <tr>
                <td><strong>JMBG</strong></td>
                <td>'.$jmbg.'</td>
              </tr>
              <tr>
                <td><strong>Razred/Odeljenje</strong></td>
                <td>'.$raz_od.'</td>
              </tr>
              <tr>
                <td><strong>Odeljenski Staresina</strong></td>
                <td>'.$staresina.'</td>
              </tr>
              <tr>
                <td><strong>Ime Oca</strong></td>
                <td>'.$imeoca.'</td>
              </tr>
              <tr>
                <td><strong>Ime Majke</strong></td>
                <td>'.$imemajke.'</td>
              </tr>
              <tr>
                <td><strong>Adresa Stanovanja</strong></td>
                <td>'.$adresa.'</td>
              </tr>
              <tr>
                <td><strong>Telefon</strong></td>
                <td>'.$telefon.'</td>
              </tr>
              <tr>
                <td><strong>Broj Clanova Porodice</strong></td>
                <td>'.$brclanova.'</td>
              </tr>
              <tr>
                <td><strong>Bracno Stanje Roditelja</strong></td>
                <td>'.$bracnostanje.'</td>
              </tr>
              <tr>
                <td><strong>Zanimanje Oca</strong></td>
                <td>'.$zanimanjeoca.'</td>
              </tr>
              <tr>
                <td><strong>Zanimanje Majke</strong></td>
                <td>'.$zanimanjemajke.'</td>
              </tr>
              <tr>
                <td><strong>Skolska Godina</strong></td>
                <td>'.$skolskagodina.'</td>
              </tr>
              <tr>
                <td><strong>Delovodni Broj</strong></td>
                <td>'.$delovodnibroj.'</td>
              </tr>
              <tr>
                <td><strong>Maticni Broj I-IV</strong></td>
                <td>'.$maticnibroj.'</td>
              </tr>
              <tr>
                <td><strong>Maticni Broj V-VIII</strong></td>
                <td>'.$maticnibrojb.'</td>
              </tr>
              <tr>
                <td><strong>Godina Upisa u Prvi Razred</strong></td>
                <td>'.$godupisa.'</td>
              </tr>
              <tr>
                <td><strong>Mesto Rodjenja/Opstina</strong></td>
                <td>'.$mro.'</td>
              </tr>
              <tr>
                <td><strong>Drzavljanstvo</strong></td>
                <td>'.$drzavljanstvo.'</td>
              </tr>
              <tr>
                <td><strong>Mesto</strong></td>
                <td>'.$mesto.'</td>
              </tr>
              <tr>
                <td><strong>Firma Gde Radi Otac-Telefon</strong></td>
                <td>'.$firmaoca.'</td>
              </tr>
              <tr>
                <td><strong>Firma Gde Radi Majka-Telefon</strong></td>
                <td>'.$firmamajke.'</td>
              </tr>
              <tr>
                <td><strong>Firma Gde Radi Ucenik-Telefon</strong></td>
                <td>'.$firmaucenik.'</td>
              </tr>
              <tr>
                <td><strong>Poslednji Zavrsni Razred Skola,Skolska Godina</strong></td>
                <td>'.$pzrs.'</td>
              </tr>
              <tr>
                <td><strong>Razred Koji Upisuje</strong></td>
                <td>'.$razred.'</td>
              </tr>
              <tr>
                <td><strong>Napomena</strong></td>
                <td>'.$napomena.'</td>
              </tr>';
           echo '</table>';



         }
      }else{
        echo 'Nije pronadjen';
      }
     }
  }else{
    echo 'Moras da uneses podatke.';
  }

}
echo '<hr/>';
mysqli_close(@mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db));
?>

<form action = "pretraga5.php" method = "POST">
Ime i Prezime:<input type = "text" name = "ime"><br><br>
JMBG:<input type = "text" name = "jmbg"><br><br>
<input type="submit" formtarget="_blank" value="Pretraga">
</form>