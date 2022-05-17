<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dasar</title>
<style>
  * {
    padding: 0;
    margin: 0;
  }
  
  body {
    font-size: 16px;
    font-weight: 400;
    color: rgb(32, 32, 32);
    background: #afeeee;
  }
  
  .biodata {
    text-align: center;
    /* membuat semua huruf menjadi kapital */
    text-transform: uppercase;
    font-size: 28pt;
    padding-bottom: 15px;
  }
  
  .kotak {
    width: 350px;
    background: #fff5ee;
    /*meletakkan form ke tengah*/
    margin: 50px auto;
    padding: 150px 150px;
    border-radius: 10px;
  }
  
  .output {
    padding-top: 20px;
    text-align: center;
    text-transform: uppercase;
    font-size: 18pt;
  }
  
  label {
    font-size: 20pt;
    font-weight: bold;
  }
  
  .nama {
    /*membuat lebar form penuh*/
    box-sizing: border-box;
    width: 100%;
    padding: 10px;
    font-size: 11pt;
    margin-bottom: 20px;
  }
  
  .tombol {
    background: #FF0000;
    color: white;
    font-size: 14pt;
    width: 100%;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
    cursor: pointer;
  }
</style>
</head>

<body>

  <div class="kotak">
    <p class="biodata">Isi Data Diri</p>

    <form action="" method="POST">
      <label for="">Nama</label>
      <input class="nama" type="text" name="nama" id="">
      <br>
      <label for="">Tanggal Lahir</label>
      <input class="nama" type="date" name="tanggal" value="">
      <br>
      <label for="job">Pekerjaan</label>
      <select class="nama" name="job" id="job">
        <option value="pilih">Pilih Pekerjaan...</option>
        <option value="guru">Guru</option>
        <option value="polisi">Polisi</option>
        <option value="tentara">TNI</option>
        <option value="dokter">Dokter</option>
      </select>
      <br>
      <input type="submit" class="tombol" name="submit" value="Submit">
    </form>

    <div class="output">
      <?php 
    echo 'nama saya ' . @$_POST['nama'];
    echo '<br>';

    $tanggal_lahir = new DateTime(@$_POST['tanggal']);
    $sekarang = new DateTime("today");
    if ($tanggal_lahir > $sekarang) { 
    $thn = "0";
    $bln = "0";
    $tgl = "0";
    }
    $thn = $sekarang->diff($tanggal_lahir)->y;
    $bln = $sekarang->diff($tanggal_lahir)->m;
    $tgl = $sekarang->diff($tanggal_lahir)->d;
    echo "Umur saya  " . $thn . " tahun " . $bln . " bulan " . $tgl . " hari";
    echo '<br>';

    echo 'pekerjaan saya ' . @$_POST['job'];
    echo '<br>';
    if (@$_POST['job'] == 'guru') {
      echo 'gaji saya 4 juta';
    } elseif (@$_POST['job'] == 'polisi') {
      echo 'gaji saya 5 juta';
    } elseif (@$_POST['job'] == 'tentara') {
      echo 'gaji saya 6 juta';
    } elseif (@$_POST['job'] == 'dokter') {
      echo 'gaji saya 10 juta';
    } else {
      echo 'anda tidak punya pekerjaan';
    }
  ?>
    </div>
  </div>
</body>
</html>