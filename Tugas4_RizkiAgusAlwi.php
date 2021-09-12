<!DOCTYPE html>
<html lang="en">
</head>
     <meta charset="UTF-8">
     <title>Tugas 4 JWD3</title>
     <link rel="stylesheet" href="css/Tugas4_RizkiAgusAlwi.css">
      
</head>
<body>

<section id="iqqo1" class="gpd-section">
  <div id="iost7" class="gpd-container">
    <div id="iqeze" class="gdp-row">
      <div id="izx1u" class="cell">
        <h1 id="ikb9j" data-anim-type="fadeInUp" class="gpd-header">Tugas 4 JWD3
        </h1>
      </div>
    </div>
  </div>
</section>
<style>html {
  scroll-behavior: smooth;
  }
</style>
<section id="section1" class="gpd-section">
  <div id="hasil" title="hasil" class="gpd-container gpd-cnt">
    <div id="judul" title="judul" class="gpd-text">Nama : Rizki Agus Alwi
      <br>​​​​​​​Judul : Membuat Program Sederhana
      <br>Kalkulator Sederhana
    </div>
    <form method="post" id="ijw3i" data-redirect="" name="form2" class="form">
      <div id="bilangan 1" title="bilangan 1" class="form-group">
        <label id="ipech" for="bilangan 1" class="label">Bilangan 1</label>
        <input type="number" placeholder="masukan bilangan 1" name="bil1" required id="ix15f" class="input"/>
      </div>
      <div id="bilangan 2" title="bilangan 2" class="form-group">
        <label id="ia1fh" for="bilangan 2" class="label">Bilangan 2</label>
        <input type="number" placeholder="masukan bilangan 2" name="bil2" required id="iniom" class="input"/>
      </div>
      <div id="submit" title="submit" class="form-group">
        <button type="submit" name="submit" id="ilboo" data-anim-type="bounce" class="button">HITUNG</button>
      </div>

    </form>
    <?php 
    if (isset ($_POST['submit'])) {
      $bil1 = $_POST['bil1'];
      $bil2 = $_POST['bil2'];
        echo "bilangan masukkan ke 1 adalah $bil1"; 
        echo "<br>"; 
        echo "bilangan masukkan ke 2 adalah $bil2";
        echo "<br>";
        /*Membuat fungsi variabel a dan b untuk penjumlahan */
      function penjumlahan($a, $b){
        $hasil = $a + $b; /*didalam statement variabel hasil sama dengan variabel a ditambah variabel b untuk rumus fungsi penjumlahan*/
        return $hasil;
      }  
        /* output akan mengirimkan sebuah teks digabung dengan hasil penjumlahan  nilai dari variabel bil1 dan bil2*/
        echo " Hasil Penjumlahan adalah : ". 
        penjumlahan($bil1,$bil2);
        echo "<br>";

      function pengurangan($a, $b) /*Membuat fungsi variabel a dan b untuk perkurangan */
        {
        $hasil = $a - $b;/*didalam statement variabel hasil sama dengan variabel a dikurangi variabel b untuk rumus fungsi pengurangan*/
        return $hasil;

      }
            /* output akan mengirimkan sebuah teks digabung dengan hasil pengurangan  nilai dari variabel bil1 dan bil2*/
        echo " Hasil Pengurangan adalah : ".
        pengurangan($bil1,$bil2);
        echo "<br>"; 

      function perkalian($a, $b)/*Membuat fungsi variabel a dan b untuk perkalian */
        {
        $hasil = $a * $b;/*didalam statement variabel hasil sama dengan variabel a dikali variabel b untuk rumus fungsi pengurangan*/
        return $hasil;
      }  
            /* output akan mengirimkan sebuah teks digabung dengan hasil perkalian nilai dari variabel bil1 dan bil2*/
        echo " Hasil Perkalian adalah : ".
        perkalian($bil1,$bil2);
        echo "<br>";

      function pembagian($a, $b)/*Membuat fungsi variabel a dan b untuk pembagian */
        {
        $hasil = $a / $b;/*didalam statement variabel hasil sama dengan variabel a dibagi variabel b untuk rumus fungsi pengurangan*/
        return $hasil;

      }
            /* output akan mengirimkan sebuah teks digabung dengan hasil pembagian nilai dari variabel bil1 dan bil2*/
        echo " Hasil Pembagian adalah: ".
        pembagian($bil1,$bil2);
        echo "<br>"; 
        echo "<br>"; 
        echo "====Terima Kasih =====";
    }
    echo "<br>";
    

     ?>
  </div>
</section>


  


</head>
<body>