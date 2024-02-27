<?php
  $numbers = [
    [
        "id" => "1",
        "nama" => "mangga", 
        "warna" => "oren",
        "stok" => "50",
        "harga" => " 20000", 
        "deskripsi" => " buah ini sangat harum dan manis yang sangat khas",
    
    ],
    [
      "id" => "2",
      "nama" => "anggur", 
      "warna" => "unggu",
      "stok" => "20",
      "harga" => "30000",
      "deskripsi" => "buah ini sangat manis",
  
  ],
  [
    "id" => "3",
    "nama" => "apel", 
    "warna" => "merah",
    "stok" => "25",
    "harga" => "15000",
    "deskripsi" => "buah ini sangat bagus untuk meningkatkan kesehatan ",

],
[
  "id" => "4",
  "nama" => "pisang", 
  "warna" => "kuning",
  "stok" => "50",
  "harga" => "20000",
  "deskripsi" => "buah ini sangat disukain customer karna pelancar metabolisme",

],
[
  "id" => "5",
  "nama" => "alpukat mentega", 
  "warna" => "hijau",
  "stok" => "100",
  "harga" => "250000",
  "deskripsi" => " buah ini lebih manis dibanding alpukat biasa",

],

]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
         foreach ($numbers as $number)  {
        ?>
        <tr>            
            <td><?= $number["id"] ?></td>
            <td><?= $number["nama"] ?></td>
            <td><?= $number["warna"] ?></td>
            <td><?= $number["stok"] ?></td>
            <td><?= $number["harga"] ?></td>
            <td><?= $number["deskripsi"] ?></td>
        </tr>
        <?php
         }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>