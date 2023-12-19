<script src="<?php echo base_url('assets/startbootstrap-sb-admin-2/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets/startbootstrap-sb-admin-2/'); ?>vendor/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url('assets/startbootstrap-sb-admin-2/'); ?>js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url('assets/startbootstrap-sb-admin-2/'); ?>js/demo/chart-pie-demo.js"></script>

<script>
    var xValues = [
        <?php
            foreach($payment_project as $ipp){
                echo "'".$ipp->name_project."'".",";
            }    
        ?>
    ];
    var yValues = [
        <?php
            foreach($payment_project as $ipp){
                echo $ipp->total_perproject;
            }    
        ?>
    ];
    var barColors = ["#6f42c1"];

    new Chart("payment_project", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
        backgroundColor: barColors,
        data: yValues
        }]
    },
    options: {
        legend: {display: false},
        title: {
        display: true,
        text: "Success Payment Project"
        },
        scales: {
            yAxes: [{
                ticks: {
                    stepSize: 1
                }
            }]
        },
    }
    });
</script>


<script>
    var xValues = [
        <?php
            foreach($payment_perregency as $ipp){
                echo "'".$ipp->regency."'".",";
            }    
        ?>
    ];
    var yValues = [
        <?php
            foreach($payment_perregency as $ipp){
                echo $ipp->total_perregency;
            }    
        ?>
    ];
    var barColors = ["#6a1512 "];

    new Chart("payment_regency", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
        backgroundColor: barColors,
        data: yValues
        }]
    },
    options: {
        legend: {display: false},
        title: {
        display: true,
        text: "Success Payment munisípiu"
        },
        scales: {
            yAxes: [{
                ticks: {
                    stepSize: 1
                }
            }]
        },
    }
    });
</script>


<script>
    var xValues = [
        <?php
            foreach($payment_pervillage as $ipp){
                echo "'".$ipp->village."'".",";
            }    
        ?>
    ];
    var yValues = [
        <?php
            foreach($payment_pervillage as $ipp){
                echo $ipp->total_pervillage;
            }    
        ?>
    ];
    var barColors = ["#4e73df"];

    new Chart("payment_village", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
        backgroundColor: barColors,
        data: yValues
        }]
    },
    options: {
        legend: {display: false},
        title: {
        display: true,
        text: "Success Payment Village"
        },
        scales: {
            yAxes: [{
                ticks: {
                    stepSize: 1
                }
            }]
        },
    }
    });
</script>