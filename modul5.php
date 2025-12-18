<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <h1>MyWeb</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
 
  <!-- Button trigger modal praktikum1 -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPraktikum1">
  Praktikum 1
</button>

<!-- Modal praktikum1 -->
<div class="modal fade" id="modalPraktikum1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="labelPraktikum1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="labelPraktikum1">Praktikum 1</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
        $bil = 1;
        while($bil <= 3){
          echo "Nilai sekarang adalah $bil<br>";
          $bil++;
        }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal praktikum2 -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalPraktikum2">
  Praktikum 2
</button>

<!-- Modal praktikum2 -->
<div class="modal fade" id="modalPraktikum2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="labelPraktikum2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="labelPraktikum2">Praktikum 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
          $bil = 1;
          while($bil<=3){
           echo $bil."<br/>";
           $bil++;
          }
          echo "nilai bilangan sekarang adalah: ".$bil;
          
          ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal praktikum3 -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalPraktikum3">
  Praktikum 3
</button>

<!-- Modal praktikum3 -->
<div class="modal fade" id="modalPraktikum3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="labelPraktikum3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="labelPraktikum3">Praktikum 3</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
        $bil=5;
        while ($bil<=100)
        {
          if($bil%10==0) echo $bil."<br/>";
          $bil++;
        }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


<!-- Button trigger modal praktikum4 -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalPraktikum4">
  Praktikum 4
</button>

<!-- Modal praktikum4 -->
<div class="modal fade" id="modalPraktikum4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="labelPraktikum4" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="labelPraktikum4">Praktikum 4</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
        $bil=5;
        while ($bil<=100)
        {
          if($bil%10==0) echo $bil."<br/>";
          $bil++;
        }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal praktikum5 -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalPraktikum5">
  Praktikum 5
</button>

<!-- Modal praktikum5 -->
<div class="modal fade" id="modalPraktikum5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="labelPraktikum5" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="labelPraktikum5">Praktikum 5</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
        $bilangan=0;
        for ($a=1; $a<=5; $a++){
          echo "bilangan sekarang adalah $bilangan <br>"; $bilangan=$bilangan+$a;
        }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal praktikum6 -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalPraktikum6">
  Praktikum 6
</button>

<!-- Modal praktikum6 -->
<div class="modal fade" id="modalPraktikum6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="labelPraktikum6" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="labelPraktikum6">Praktikum 6</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
        for ($a=1; $a<=3; $a++)
        {
          for ($b=1; $b<=2; $b++)
          {
            echo "nilai a".$a. "nilai b=".$b. "<br/>";
          }
        }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


<!-- Button trigger modal praktikum7 -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalPraktikum7">
  Praktikum 7
</button>

<!-- Modal praktikum7 -->
<div class="modal fade" id="modalPraktikum7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="labelPraktikum7" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="labelPraktikum7">Praktikum 7</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
        $d=1;
        do{
          echo "perulangan ke-$d <br>";
          $d++;

        }while ($d <=5);
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal tugas1 -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modaltugas1">
  tugas 1
</button>

<!-- Modal tugas1 -->
<div class="modal fade" id="modaltugas1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="labeltugas1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="labeltugas1">tugas 1</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
      echo "Bilangan kelipatan 10 dari 5 sampai 100:<br>";
      for ($i = 5; $i <= 100; $i++) {
      if ($i % 10 == 0) {
        echo $i . " ";
    }
}
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal tugas2 -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modaltugas2">
  tugas 2
</button>

<!-- Modal tugas2 -->
<div class="modal fade" id="modaltugas2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="labeltugas2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="labeltugas2">tugas 2</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
      $jumlah = 0;
      for ($i = 2; $i <= 50; $i++) {
      $jumlah += $i;
      }
      echo "<br>Jumlah bilangan dari 2 sampai 50 adalah: $jumlah<br>";
      ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal tugas3 -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modaltugas3">
  tugas 3
</button>

<!-- Modal tugas3 -->
<div class="modal fade" id="modaltugas3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="labeltugas3" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="labeltugas3">tugas 3</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
      $count = 0;
      for ($i = 3; $i <= 127; $i++) {
      if ($i % 6 == 0) {
        $count++;
    }
      }
      echo "Jumlah bilangan kelipatan 6 dari 3 sampai 127 adalah: $count";
      ?>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


  <p align= >Copyright © Mohamad Zainul Arifin </p>
</html>