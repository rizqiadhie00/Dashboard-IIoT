<?php include('LayOut/header.php') ?>

<div class="wrapper">

    <!-- Sidebar -->
    <?php include('LayOut/sidebar.php') ?>
    <!-- Page Content -->
    <div id="content">
    <div class="container">
    <h1>Tabel Data</h1>

    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Waktu</th>
      <th scope="col">Pressure 101</th>
      <th scope="col">Pressure 102</th>
      <th scope="col">Pressure 103</th>
      <th scope="col">Temperature 101</th>
      <th scope="col">Temperature 102</th>
      <th scope="col">Temperature 103</th>
    </tr>
  </thead>
  <tbody>
  <?php
        include('configuration/conn.php');
        $query = "SELECT * FROM data ORDER BY id DESC LIMIT 10";
        $read = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($read)){
        ?>
        <tr>
          <th scope="row"><?php echo $row['id']; ?></th>
          <td><?php echo $row['tanggal'] ?></td>
          <td><?php echo $row['waktu'] ?></td>
          <td><?php echo $row['pressure_101'] ?></td>
          <td><?php echo $row['pressure_102'] ?></td>
          <td><?php echo $row['pressure_103'] ?></td>
          <td><?php echo $row['temp_101'] ?></td>
          <td><?php echo $row['temp_102'] ?></td>
          <td><?php echo $row['temp_103'] ?></td>
        <?php } ?>
  </tbody>
</table>
</div>
    </div>
</div>

<?php include('LayOut/footer.php') ?>