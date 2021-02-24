<!DOCTYPE html>
<html>
   <head>
      <title>Diawanti_tugas8</title>
   </head>
      <body>
      <h1>Soal 1</h1>
 <form action="" method="POST">
      PROGRAM CEK KELULUSAN<br>
      Nilai Ujian : <input type="text" name="nilai">
      <input type="submit" value="Hasil">
    </form>
    <?php
      if ($_POST)
      {
        $nilai = $_POST['nilai'];
        if ($nilai >= 98)
        {
          $keterangan = "Sangat Baik";
        }
        elseif ($nilai >= 76)
        {
          $keterangan = "Baik";
        }
        elseif ($nilai >= 67)
        {
          $keterangan = "Cukup";
        }
        elseif ($nilai >= 43)
        {
          $keterangan = "Kurang";
        }
        echo "Hasil Kelulusan";
        echo "<br>";
        echo "Nilai : " . $nilai;
        echo "<br>";
        echo "Keterangan : " . $keterangan;
      }
    ?>
  </body>
  </html>