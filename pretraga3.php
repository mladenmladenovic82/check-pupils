<?php
echo '<style>
      table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      }
      </style>';
require 'konekcija.php';
mysqli_set_charset($conn,'utf8');
if(isset($_POST['ime'])){
  $ime = ltrim(mysqli_real_escape_string($conn,$_POST['ime']));
  if(!empty($ime)){
    $query = "SELECT `id`, `ime`,`datumrodjenja`, `jmbg`, `odeljenskistaresina`, `imeoca`, `imemajke`, `adresa`, `telefon`, `skolskagodina`, `delovodnibroj`, `maticnibroj`, `maticnibrojb`, `godupisa`, `mro`, `drzavljanstvo`, `mesto`, `firmaotac`, `firmamajka`, `firmaucenik`, `pzrs`, `razred`, `napomena` FROM `ucenici` WHERE `ime` LIKE  '%".$ime."%'";
    if ($query_run = mysqli_query($conn,$query)){

      if (mysqli_num_rows($query_run)  == 0){
        echo 'Nema rezultata pretrage';
      }else if(mysqli_num_rows($query_run)  >= 1){
         while($row =  mysqli_fetch_assoc($query_run)){
            
            $ime = $row['ime'];
			$datumrodjenja = $row['datumrodjenja'];
            $jmbg = $row['jmbg'];
            $staresina = $row['odeljenskistaresina'];
            $imeoca  = $row['imeoca'];
            $imemajke = $row['imemajke'];
            $adresa = $row['adresa'];
            $telefon = $row['telefon'];
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
            echo '<table border="1" style="width:50%">';
			echo '<tr>
                  <td><strong>Школска година</strong></td>
                  <td>'.$skolskagodina.'</td>
                  </tr>
			      <tr>
                  <td><strong>Деловодни број</strong></td>
                  <td>'.$delovodnibroj.'</td>
                  </tr>
                  <tr>
                  <td><strong>Матични број I-IV</strong></td>
                  <td>'.$maticnibroj.'</td>
                  </tr>
                  <tr>
                  <td><strong>Матични број V-VIII</strong></td>
                  <td>'.$maticnibrojb.'</td>
                  </tr>
				  <tr>
                  <td><strong>ЈМБГ</strong></td>
                  <td>'.$jmbg.'</td>
                  </tr>
				  <tr>
                  <td><strong>Година уписа у I разред</strong></td>
                  <td>'.$godupisa.'</td>
                  </tr>';
			echo '</table>';
			echo '<h1 align="center"><strong>ПРИЈАВА</strong></h1>';
            echo '<h2 align="center">ЗА УПИС У ОСНОВНУ ШКОЛУ "БРАНКО ПЕШИЋ"</h2>';
            echo '<h3 align="center">СВЕТОТРОЈЧИНА 4</h3>';
            echo '<h4 align="center" style="font-size:200%;"><strong>ЗЕМУН</strong></h4>';
			echo '<table border="1" style="width:100%">';
          echo'<tr>
                <td><strong>Име и презиме ученика</strong></td>
                <td>'.$ime.'</td>
              </tr>
			  <tr>
                <td><strong>Датум рођења</strong></td>
                <td>'.$datumrodjenja.'</td>
              </tr>
              <tr>
                <td><strong>Одељенски старешина</strong></td>
                <td>'.$staresina.'</td>
              </tr>
              <tr>
                <td><strong>Име оца</strong></td>
                <td>'.$imeoca.'</td>
              </tr>
              <tr>
                <td><strong>Име мајке</strong></td>
                <td>'.$imemajke.'</td>
              </tr>
              <tr>
                <td><strong>Адреса становања</strong></td>
                <td>'.$adresa.'</td>
              </tr>
              <tr>
                <td><strong>Телефон</strong></td>
                <td>'.$telefon.'</td>
              </tr>
              <tr>
                <td><strong>Место рођења,општина</strong></td>
                <td>'.$mro.'</td>
              </tr>
              <tr>
                <td><strong>Држављанство</strong></td>
                <td>'.$drzavljanstvo.'</td>
              </tr>
              <tr>
                <td><strong>Место</strong></td>
                <td>'.$mesto.'</td>
              </tr>
              <tr>
                <td><strong>Фирма где ради отац - телефон</strong></td>
                <td>'.$firmaoca.'</td>
              </tr>
              <tr>
                <td><strong>Фирма где ради мајка - телефон</strong></td>
                <td>'.$firmamajke.'</td>
              </tr>
              <tr>
                <td><strong>Фирма где ради ученик - телефон</strong></td>
                <td>'.$firmaucenik.'</td>
              </tr>
              <tr>
                <td><strong>Последњи завршени разред,школа,школска година</strong></td>
                <td>'.$pzrs.'</td>
              </tr>
              <tr>
                <td><strong>Разред који уписује</strong></td>
                <td>'.$razred.'</td>
              </tr>';
			  echo '</table>';
			  echo '<br>';
			  echo '<table border="1" style="width:50%">';
              echo '<tr>
                    <td><strong>Напомена</strong></td>
                    <td rowspan="2">'.$napomena.'</td>
                    </tr>
					<tr>
                    <td><strong>Напомена</strong></td>
                    </tr>';
              echo '</table>';
			  echo '<br>';
			  echo '<p align="left"><strong>У Земуну,  __.__._____.</strong></p><p align="right"><strong>Подносилац пријаве</strong>        ______________________</p>';
           echo '<br><br><br>';


         }
      }else{
        echo 'Nije pronadjen.';
      }
     }
  }else{
    echo 'Moras da uneses podatke.';
  }

}
mysqli_close($conn);
?>