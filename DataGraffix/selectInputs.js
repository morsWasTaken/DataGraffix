//style = document.createElement('style')
//Change the number of Inputs displaying
function selectInput(selectNum){
    if(selectNum.value === "1"){
        style.innerHTML = `
        li{
            display: none;
        }
        .li1 {
        display: block;
        }
        .createB{
            display: inline;  
        }

        .shapeInput{
            display: inline;
        }
        `;
        document.head.appendChild(style);

    }
    else if(selectNum.value === "2"){
        style.innerHTML = `
        li{
            display: none;
        }
        .li1,.li2 {
        display: block;
        }

        .createB{
            display: inline;
        }

        .shapeInput{
            display: inline;
        }
        `;
        document.head.appendChild(style);
    }
    else if(selectNum.value === "3"){
        style.innerHTML = `
        li{
            display: none;
        }
        .li1,.li2,.li3 {
        display: block;
        }

        .createB{
            display: inline;
        }

        .shapeInput{
            display: inline;
        }
        `;
        document.head.appendChild(style);
    }
    else if(selectNum.value === "4"){
        style.innerHTML = `
        li{
            display: none;
        }
        .li1,.li2,.li3,.li4 {
        display: block;
        }

        .createB{
            display: inline;
        }

        .shapeInput{
            display: inline;
        }
        `;
        document.head.appendChild(style);
    }
    else if(selectNum.value === "5"){
        style.innerHTML = `
        li{
            display: none;
        }
        .li1,.li2,.li3,.li4,.li5 {
        display: block;
        }

        .createB{
            display: inline;
        }

        .shapeInput{
            display: inline;
        }
        `;
        document.head.appendChild(style);
    }
    else if(selectNum.value === "6"){
        style.innerHTML = `
        li{
            display: none;
        }
        .li1,.li2,.li3,.li4,.li5,.li6 {
        display: block;
        }

        .createB{
            display: inline;
        }

        .shapeInput{
            display: inline;
        }
        `;
        document.head.appendChild(style);
    }
    else if(selectNum.value === "7"){
        style.innerHTML = `
        li{
            display: none;
        }
        .li1,.li2,.li3,.li4,.li5,.li6,.li7 {
        display: block;
        }

        .createB{
            display: inline;
        }

        .shapeInput{
            display: inline;
        }
        `;
        document.head.appendChild(style);
    }
    else if(selectNum.value === "8"){
        style.innerHTML = `
        li{
            display: none;
        }
        .li1,.li2,.li3,.li4,.li5,.li6,.li7,.li8 {
        display: block;
        }

        .createB{
            display: inline;
        }

        .shapeInput{
            display: inline;
        }
        `;
        document.head.appendChild(style);
    }
    else if(selectNum.value === "9"){
        style.innerHTML = `
        li{
            display: none;
        }
        .li1,.li2,.li3,.li4,.li5,.li6,.li7,.li8,.li9 {
        display: block;
        }

        .createB{
            display: inline;
        }

        .shapeInput{
            display: inline;
        }
        `;
        document.head.appendChild(style);
    }
    else{
        style.innerHTML = `
        li{
            display: block;
        }

        .createB{
            display: inline;
        }

        .shapeInput{
            display: inline;
        }
        `;
        document.head.appendChild(style);
    }
}



