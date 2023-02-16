
<?php
// Koneksi ke Database
include('configuration/conn.php');

?>
<?php 
    $query = mysqli_query($conn, "SELECT * FROM data ORDER BY id DESC LIMIT 1");
	while($row = mysqli_fetch_assoc($query)){

    $pressure_101   = $row['pressure_101'];
    $pressure_102   = $row['pressure_102'];
    $pressure_103   = $row['pressure_103'];
    $temp_101   = $row['temp_101'];
    $temp_102   = $row['temp_102'];
    $temp_103   = $row['temp_103'];
    
    
    $data = array(
        'pressure_101' => $pressure_101,
        'pressure_102' => $pressure_102,
        'pressure_103' => $pressure_103,
        'temp_101' => $temp_101,
        'temp_102' => $temp_102,
        'temp_103' => $temp_103,
    );
    echo json_encode($data);
    
}
    ?>
    
    
