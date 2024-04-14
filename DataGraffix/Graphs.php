<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet" type="text/css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <?php require "connection.php" ?>
    <title>DataGraffix</title>
</head>
<body>
    <div class="banner">
        <img id="banner" src="resources/banner.png">
    </div>
    <div class="navbar">
            <a href="index.php">Home</a>
            <a href="Graphs.php">Graphs</a>
            <a href="Create.php">Create</a>
            <a href="Upload.php">Upload</a>
            <a href="About.php">About</a>
    </div>
    <div class="main">

    <?php include 'query.php';?>

    <div class="graphs">


       <div class="chartBox">
        <canvas id="myChart" ></canvas>
        </div>
        <div class="dropdown">
        <label for="shapes">Choose a shape:</label>
        <select name="shapes" id="shapes" onchange="changeShape(this)">
            <option value="bar">Bar</option>
            <option value="line">Line</option>
            <option value="pie">Pie</option>
            <option value="doughnut">Doughnut</option>
            <option value="radar">Radar</option>
            <option value="polarArea">Polar Area</option>
        </select>

       </div> 
        
</div>




<script>
//Setup Block
const colCountry = <?php echo json_encode($colCountry); ?>; // Store the 'Country' data retrieved from PHP
const colIntAVG = <?php echo json_encode($colIntAVG); ?>; // Store the 'Broadband Mbps' data retrieved from PHP
let data = {
labels: colCountry, // Define labels for the chart using the Country data
        datasets: [{
            label: 'Average Fixed Broadband(Mbps) per Country', // Definition of label for the dataset
            data: colIntAVG, // Definition of the data for the chart using the Broadband Mbps data
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 2
        }]  
    };
 
//Configuration Block
let config = {
type: "bar", // Define the type of chart (bar chart)
    data, // Pass the data object to the chart
    options: {        

        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
}


//Render Block
//Creates a chart Object
let myChart = new Chart(
    document.getElementById("myChart"),
    config
);
   

//Change Shape Function
function changeShape(chartShape){
          
            
            myChart.destroy();
            myChart = new Chart(
            document.getElementById("myChart"),
            {                                     //Chart configuration, Change Shape
            type: chartShape.value,
                data,
                options: {        

                    scales: {
                        y: {
                            beginAtZero: true
                        }
         }
      }
   }
 );

}


 function showRange(rangeForm){
   document.getElementById("rangeMeter").innerText = rangeForm.value;  

 }

</script>

</div>

</body>
</html>
