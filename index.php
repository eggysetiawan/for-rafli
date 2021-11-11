<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/style.css">

  <title>TESTING</title>
</head>

<?php
$conn = mysqli_connect("127.0.0.1", "root", "efotoadmin", "test");

if (isset($_POST['submitName'])) {
  $name = $_POST['name'];
  $sex = $_POST['sex'];
  $department = $_POST['department'];
  $query = "INSERT INTO pegawai (name, sex, department) values ('$name', '$sex', '$department')";
  if (!mysqli_query($conn, $query)) {
    echo mysqli_error($conn);
  }
  // success

  // success kedua
}

?>

<body>

  <div class="container">
    <form method="post" action="">
      <div class="form-group mt-5">
        <label for="nama">Nama</label>
        <input type="text" name="name" id="name" class="form-control">
      </div>
      <div class="form-group">
        <label for="sex">sex</label><br>
        <input type="radio" name="sex" id="sex" value="M">Male <br>
        <input type="radio" name="sex" id="sex" value="F">Female
      </div>
      <div class="form-group">
        <label for="department">Department</label>
        <input type="text" name="department" id="department" class="form-control">
      </div>

      <button class="btn btn-success" type="submit" name="submitName">Submit</button>
    </form>
    <br>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">ID</th>
        </tr>
      </thead>
      <?php $result = mysqli_query($conn, "SELECT * From pegawai");

      ?>
      <tbody>
        <?php $i = 1;
        while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <th><?= $i; ?></th>
            </th>
            <td><?= $row['name']; ?></td>
            <td><?= $row['sex']; ?></td>
            <td><?= $row['id']; ?></td>
          </tr>
        <?php $i++;
        } ?>
      </tbody>
    </table>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="assets/script.js"></script>
  <script src="assets/script2.js"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>