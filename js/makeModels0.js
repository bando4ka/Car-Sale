let middleSell = document.getElementById('makers')

middleSell.innerHTML+=
            `<select name="make" id="carType" onchange="car()" class="myInputs">
            <option value="0">Select a Make</option>
            <option value="BMW">BMW</option>
            <option value="Audi">Audi</option>
            <option value="Honda">Honda</option>
            </select>`


            // let more = document.getElementById('more')
            // more.innerHTML =
            //         `<select class="model">
            //             <option value="X6">X6</option>
            //             <option value="X5">X5</option>
            //         </select>` 


            middleSell.innerHTML+= '<br>'


function bmwModels(){
    document.getElementById('models').innerHTML =
                `<select name="model" class="myInputs">
                    <option value="0">Select a Model</option>
                    <option value="X6">X6</option>
                    <option value="X5">X5</option>
                    <option value="X5">X4</option>
                    <option value="X5">X3</option>
                    <option value="X5">X2</option>
                    <option value="X5">X1</option>
                </select>` 
}

bmwModels()

function car(){
    //alert('car')
    let c = document.getElementById('carType').value
    //or bmw, or audi

    if(c == 'BMW'){
        bmwModels()

    } if(c == 'Audi'){
         /* `<select class="model">*/
                //alert('audi')
        let more = document.getElementById('models')
        more.innerHTML =
                    `<select name="model" class="myInputs">

                    <option value="0">Select a Model</option>
                    <option value="TT">TT</option>
                    <option value="RS8">RS8</option>
                    <option value="RS7">RS7</option>
                </select>` 
                 
    } if(c == 'Honda'){
    //alert('honda')
    let more = document.getElementById('more')
    more.innerHTML =
            `<select name="model" class="myInputs">
                <option value="0">Select a Model</option>
                <option value="Civic">Civic</option>
                <option value="Accord">Accord</option>
                <option value="Fit">Fit</option>
                <option value="CR-V">CR-V</option>
            </select>`  
    }
}