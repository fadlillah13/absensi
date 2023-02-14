<!DOCTYPE html>
<html>
<head>
    <title>Grafik Absensi</title>
    <!-- Load file plugin Chart.js -->
    <script src="<?php echo base_url()?>/assets/chart/Chart.js"></script>
</head>
<body>
<br>
<h4>Grafik Absensi</h4>
<canvas id="myChart"></canvas>
    <?php
    //Inisialisasi nilai variabel awal
    $waktu= "";
    $jumlah=null;
    foreach ($hasil as $item)
    {
        $id_user=$item->id_user;
        $waktu .= "'$waktu'". ", ";
        $jum=$item->id_user;
        $jumlah .= "$jum". ", ";
    }
    ?>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $waktu; ?>],
            datasets: [{
                label:'Data Absensi ',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
</body>
</html>