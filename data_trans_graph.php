
<?php
// Koneksi ke Database
include('configuration/conn.php');

?>
<?php 
    $data_p1 = "";
    $data_p2 = "";
    $data_p3 = "";
    $data_w = "";

    $query = mysqli_query($conn, " (SELECT * FROM data ORDER BY id DESC LIMIT 10) ORDER BY id ASC ");
	while($row = mysqli_fetch_assoc($query)){
    
        $data_w .= $row['waktu'] . ",";
        $data_p1 .= $row['pressure_101'] . ",";
        $data_p2 .= $row['pressure_102'] . ",";
        $data_p3 .= $row['pressure_103'] . ",";
    
    
}
    echo json_encode(array(
        'waktu' => substr($data_w, 0,-1), 
        'pressure_101' => substr($data_p1,0,-1),
        'pressure_102' => substr($data_p2,0,-1),
        'pressure_103' => substr($data_p3,0,-1)
    ));
    ?>

    
    
