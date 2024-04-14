<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet" type="text/css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
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

    <div class="upld-txt"><p>Upload your data to create a graph</p></div>

    <input type="file" id="fileInput" accept=".xls,.xlsx,.csv">
    <button id="fileSubmit" onclick="uploadFile()">Upload File</button>
    

    <div class="shapeUpload">
            <label for="shapes">Choose shape:</label>
            <select name="shapes" id="selectShape" onchange="selectShape(this)">
                <option value="bar">Bar</option>
                <option value="line">Line</option>
                <option value="pie">Pie</option>
                <option value="doughnut">Doughnut</option>
                <option value="radar">Radar</option>
                <option value="polarArea">Polar Area</option>
            </select>
        </div>

    <div class="buttonsUp">
      <label>Press Button</label>
      <button class="buttonUpload" type="button" onclick="createButton()">Create</button>
      <button class="resetButton" type="button" onclick="resetButton()">Reset</button>
    </div>
    
    <div class="chartBox">
    <canvas id="createChart"></canvas>
    </div>
</div>


</body>
</html>

<script>
    //Uploads a file and saving it in an array
    let excelData;
    function uploadFile() {
    const input = document.getElementById('fileInput');
    const file = input.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
            const data = new Uint8Array(e.target.result);
            const workbook = XLSX.read(data, { type: 'array' });
            const sheetName = workbook.SheetNames[0]; 
            const worksheet = workbook.Sheets[sheetName];
            excelData = XLSX.utils.sheet_to_json(worksheet, { header: 1 });

            
            //console.log(excelData);
        };

        reader.readAsArrayBuffer(file);
    } else {
        console.log('No file selected.');
    }
}

    let myCreateChart;  
      let myChartShape = 'bar';
      let counter;
      function createButton(){
        

        let labelArray = [];
        let numberArray = [];

        for (let i = 0; i < excelData.length; i++) {
                
                if(i>19) { //max 20 entries, index no bigger than 19
                    break
                }
                labelArray[i] = excelData[i][0]; // first column, index 0, labels
                numberArray[i] = excelData[i][1]; // second column, index 1, num values
                
            }
    


            //Chart creation
            let ctx = document.getElementById('createChart');
            myCreateChart = new Chart(ctx, {
                type: myChartShape ,
                data: {
                    labels: labelArray,
                    datasets: [{
                        label: 'My Chart',
                        data: numberArray,
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
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            //Makes inputs disappear
            var styleC = document.createElement('style');
                styleC.innerHTML = `
                .resetButton {
                    display: inline-block; 
                 }

                    .buttonUpload{
                        display: none;
                    }
                    `;
                    document.head.appendChild(styleC);
      }

        function resetButton(){
        myCreateChart.destroy();

            //Resets Shape to 'Bar'
            document.getElementById("selectShape").value = 'bar';

        //Reset Button Disappear
        var styleR = document.createElement('style');
        styleR.innerHTML = `
            .resetButton{
                display: none;
            }

            .buttonUpload{
                display: inline-block;
            }
            `;
            document.head.appendChild(styleR);

            myChartShape="bar"
        }
        

    //defines charts type/shape
    function selectShape(slcShape){
      myChartShape = slcShape.value;
     }

            

</script>