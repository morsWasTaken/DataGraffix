<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet" type="text/css"> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <script type="text/javascript" src="selectInputs.js"></script>

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
        <p>You can <b>Create</b> you own Chart. First choose the number of values and then fill the values.   
        </p>
 
        <div class="chooseNumRec">
            <label for="numbers">Choose number:</label>
            <select name="numbers" id="selectNumber" onchange="selectInput(this)">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
   <div class="inputs">
     <div class="textInput">
       <ul>
        <li class="li1">   
       <label for="label1">Label 1</label>
       <input type="text" id="label1">
       </li> 
       <li class="li2">
       <label for="label2">Label 2</label>
       <input type="text" id="label2">
       </li> 
       <li class="li3">
       <label for="label3">Label 3</label>
       <input type="text" id="label3">
       </li> 
       <li class="li4">
       <label for="label4">Label 4</label>
       <input type="text" id="label4">
       </li>
       <li class="li5">
       <label for="label5">Label 5</label>
       <input type="text" id="label5">
       </li>
       <li class="li6">
       <label for="label6">Label 6</label>
       <input type="text" id="label6">
       </li>
       <li class="li7">
       <label for="label7">Label 7</label>
       <input type="text" id="label7">
       </li>
       <li class="li8">
       <label for="label8">Label 8</label>
       <input type="text" id="label8">
       </li>
       <li class="li9">
       <label for="label9">Label 9</label>
       <input type="text" id="label9">
       </li>
       <li class="li10">
       <label for="label10">Label 10</label>
       <input type="text" id="label10">
       </li>
        </ul>

       </div>
 
     <div class="numberInput">
       <ul>
        <li class="li1">
       <label for="number1">Number 1</label>       
       <input type="number" id="number1">
       </li> 
       <li class="li2">
       <label for="number2">Number 2</label>
       <input type="number" id="number2">
       </li> 
       <li class="li3">
       <label for="number3">Number 3</label>
       <input type="number" id="number3">
       </li> 
       <li class="li4">
       <label for="number4">Number 4</label>
       <input type="number" id="number4">
       </li>
       <li class="li5">
       <label for="number5">Number 5</label>
       <input type="number" id="number5">
       </li>
       <li class="li6">
       <label for="number6">Number 6</label>
       <input type="number" id="number6">
       </li>
       <li class="li7">
       <label for="number7">Number 7</label>
       <input type="number" id="number7">
       </li>
       <li class="li8">
       <label for="number8">Number 8</label>
       <input type="number" id="number8">
       </li>
       <li class="li9">
       <label for="number9">Number 9</label>
       <input type="number" id="number9">
       </li>
       <li class="li10">
       <label for="number10">Number 10</label>
       <input type="number" id="number10">
       </li>
        </ul>
 
    </div>

    
    <div class="shapeInput">
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
    <div class="buttons">
      <label>Press Button</label>
      <button class="createB" type="button" onclick="createButton()">Create</button>
      <button class="resetB" type="button" onclick="resetButton()">Reset</button>
    </div>
    
  </div>

    <div class="chartBox">
    <canvas id="createChart"></canvas>
    </div>

    <script>
      //Global var myChart  
      let myCreateChart;  
      let myChartShape = 'bar';
      let counter;

      var style = document.createElement('style');
      document.head.appendChild(style);

      function createButton(){

        counter = document.getElementById("selectNumber").value;
        let labelArray = [];
        let numberArray = [];
        for(i=1;i<=counter;i++){
            labelArray[i-1]=document.getElementById("label"+i).value;
            numberArray[i-1]=document.getElementById("number"+i).value;
            
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
                style.textContent = `
                    .resetB{
                        display: inline-block;
                    }

                    .createB, .chooseNumRec, .numberInput, .textInput, .shapeInput {
                        display: none;
                    }
                    `;
                     
      }
   
    //Reset Button 
     function resetButton(){
      myCreateChart.destroy();

        //Resets inputs with blank space
        for(i=1;i<=counter;i++){
        document.getElementById("label"+i).value = "";
        document.getElementById("number"+i).value = "";
        }
        //Resets Shape to 'Bar'
        document.getElementById("selectShape").value = 'bar';

       //Reset Button Disappear
       style.textContent = `
        .resetB, .textInput, .numberInput{
            display: none;
        }


        .chooseNumRec{
                        display: inline-block;
                    }
        `;

        myChartShape="bar"
     }
    
     
     //Shape Change Dropdown

     function selectShape(slcShape){
      myChartShape = slcShape.value;
     }

    </script>


 </div>
</body>
</html>
