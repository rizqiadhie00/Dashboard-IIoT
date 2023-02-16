<?php include('LayOut/header.php') ?>

<div class="wrapper">

    <!-- Sidebar -->
    <?php include('LayOut/sidebar.php') ?>
    <div id="content">
    <div class="container">
    <h1>Grafik Data</h1>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <div id="divChart">
        
        </div>
    </div>
</div>

<!--- SCRIPT PANGGIL DATA --->

<script>
  function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "data_trans_graph.php", true);
  xhttp.send();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
      document.getElementById("divChart").innerHTML = '<canvas id="cnvChart"></canvas>';
      let obj = JSON.parse(xhttp.response);
      let chart_settings={
        type:'line',
        data : {
            labels: obj.waktu.split(','),
            datasets: [ {
                label:"Pressure 101",
                hoverBackgroundColor : 'rgba(0, 0, 0, 0.1)',
                hoverBorderWidth : 3,
                fill: false,
                borderColor : '#2d3237',
                data : obj.pressure_101.split(',')
            },
            {
                label:"Pressure 102",
                hoverBackgroundColor : 'rgba(0, 0, 0, 0.1)',
                hoverBorderWidth : 3,
                fill: false,
                borderColor : '#D80EC1DE',
                data : obj.pressure_102.split(',')
            },
            {
                label:"Pressure 103",
                hoverBackgroundColor : 'rgba(0, 0, 0, 0.1)',
                hoverBorderWidth : 3,
                fill: false,
                borderColor : '#140ED8CF',
                data : obj.pressure_103.split(',')
            }
          ]
        },
        options : {
            legend: {
                display : true
            },
            animation: {
                    duration: 0
                }
        }
      }
      let chart = new Chart(document.getElementById
      ('cnvChart'), chart_settings);
    }
  };
  
  }
  setInterval(function(){
  loadXMLDoc();
	// 1sec
    },1000);

  window.onload = loadXMLDoc;
</script>

<?php include('LayOut/footer.php') ?>