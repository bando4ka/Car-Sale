let districtCar = document.getElementById('district')

districtCar.innerHTML+=
            `<select name="district" id="SelectCity" onchange="location2()" class="myInputs">
            <option value="Select a District">Select a District</option>
            <option value="Jerusalem District">Jerusalem District</option>
            <option value="Tel-Aviv District">Tel-Aviv District</option>
            <option value="Central District">Central District</option>
            <option value="Haifa District">Haifa District</option>
            <option value="Northern District">Northern District</option>
            <option value="Southern District">Southern District</option>
            <option value="Judea and Samaria Area">Judea and Samaria Area</option>
            </select>`


            // let more = document.getElementById('more')
            // more.innerHTML =
            //         `<select class="model">
            //             <option value="X6">X6</option>
            //             <option value="X5">X5</option>
            //         </select>` 


            districtCar.innerHTML+= '<br>'


function jerusalemCities(){
    document.getElementById('city').innerHTML =
                `<select name="city" class="myInputs">
                <option value="Select a City">Select a City</option>
                <option value="Jerusalem">Jerusalem</option>
                <option value="Beit Shemesh">Beit Shemesh</option>
                <option value="Abu Ghosh">Abu Ghosh</option>
                <option value="Mevaseret Zion">Mevaseret Zion</option>
                <option value="Kiryat Ye'arim">Kiryat Ye'arim</option>
                <option value="Mateh Yehuda">Mateh Yehuda</option>
                </select>` 
}

jerusalemCities()

function location2(){
    //alert('car')
    let d = document.getElementById('SelectCity').value
    //or bmw, or audi

    if(d == 'Jerusalem District'){
        jerusalemCities()

    } 
    if(d == 'Tel-Aviv District'){
         /* `<select class="model">*/
                //alert('audi')
                let city = document.getElementById('city')
                city.innerHTML =
                    `<select name="city" class="myInputs">
                    <option value="Select a City">Select a City</option>
                    <option value="Tel Aviv-Yafo">Tel Aviv-Yafo</option>
                    <option value="Bat Yam">Bat Yam</option>
                    <option value="Bnei Brak">Bnei Brak</option>
                    <option value="Givatayim">Givatayim</option>
                    <option value="Herzliya">Herzliya</option>
                    <option value="Holon">Holon</option>
                    <option value="Kiryat Ono">Kiryat Ono</option>
                    <option value="Or Yehuda">Or Yehuda</option>
                    <option value="Ramat Gan">Ramat Gan</option>
                    <option value="Ramat HaSharon">Ramat HaSharon</option>
                    <option value="Azor">Azor</option>
                    <option value="Kfar Shmaryahu">Kfar Shmaryahu</option>
                </select>` 
                 
    } if(d == 'Central District'){
    //alert('audi')
    let city = document.getElementById('city')
    city.innerHTML =
            `<select name="city" class="myInputs">
                <option value="Select a City">Select a City</option>
                <option value="Rishon-LeZion">Rishon-LeZion</option>
                <option value="Rehovot">Rehovot</option>
                <option value="Petah Tikva">Petah Tikva</option>
                <option value="Kfar Saba">Kfar Saba</option>
                <option value="Ness Ziona">Ness Ziona</option>
                <option value="Hod Ha Sharon">Hod Hasharon</option>
                <option value="Lod">Lod</option>
                <option value="Ramla">Ramla</option>
                <option value="Netanya">Netanya</option>
                <option value="Yavne">Yavne</option>
                <option value="Rosh Ha Ayin">Rosh HaAyin</option>
                <option value="Giv'at Shmuel">Giv'at Shmuel/option>
                <option value="Ra'anana">Ra'anana</option>
                <option value="El'ad">El'ad</option>
                <option value="Kafr Qasim">Kafr Qasim</option>
                <option value="Modi'in">Modi'in</option>
                <option value="Qalansawe">Qalansawe</option>
                <option value="Tayibe">Tayibe</option>
                <option value="Tira">Tira</option>
                <option value="Gedera">Gedera</option>
                <option value="Be'er Ya'akov">Be'er Ya'akov</option>
                <option value="Gan Yavne">Gan Yavne</option>
                <option value="Kfar Yona">Kfar Yona</option>
            </select>`  

    } if(d == 'Haifa District'){
        let city = document.getElementById('city')
        city.innerHTML =
                `<select name="city" class="myInputs">
                    <option value="Select a City">Select a City</option>
                    <option value="Haifa">Haifa</option>
                    <option value="Hadera">Hadera</option>
                    <option value="Kiryat Ata">Kiryat Ata</option>
                    <option value="Kiryat Bialik">Kiryat Bialik</option>
                    <option value="Kiryat Motzkin">Kiryat Motzkin</option>
                    <option value="Kiryat Yam">Kiryat Yam</option>
                    <option value="Nesher">Nesher</option>
                    <option value="Or Akiva">Or Akiva</option>
                    <option value="Tirat Carmel">Tirat Carmel</option>
                    <option value="Zikhron Ya'akov">Zikhron Ya'akov</option>
                    <option value="Hof Ha Carmel">Hof HaCarmel</option>
                    <option value="Ummal-Fahm">Umm al-Fahm</option>
                </select>` 

        } if(d == 'Northern District'){
            let city = document.getElementById('city')
            city.innerHTML =
                    `<select name="city" class="myInputs">
                        <option value="Select a City">Select a City</option>
                        <option value="Acre">Acre</option>
                        <option value="Afula">Afula</option>
                        <option value="Bet She'an">Bet She'an</option>
                        <option value="Karmiel">Karmiel</option>
                        <option value="Kiryat Shmona">Kiryat Shmona</option>
                        <option value="Ma'alot-Tarshiha">Ma'alot-Tarshiha</option>
                        <option value="Migdal Ha Emek">Migdal HaEmek</option>
                        <option value="Nahariyya">Nahariyya</option>                    
                        <option value="Nazareth">Nazareth</option>
                        <option value="Nazareth Illit">Nazareth Illit</option>
                        <option value="Safed">Safed</option>
                        <option value="Sakhnin">Sakhnin</option>
                        <option value="Shefa-'Amr">Shefa-'Amr</option>
                        <option value="Tamra">Tamra</option>                    
                        <option value="Tiberias">Tiberias</option>
                        <option value="Yokneam">Yokneam</option>
                    </select>` 

            } if(d == 'Southern District'){
                let city = document.getElementById('city')
                city.innerHTML =
                        `<select name="city" class="myInputs">
                            <option value="Select a City">Select a City</option>
                            <option value="Beersheba">Beersheba</option>
                            <option value="Ashdod">Ashdod</option>
                            <option value="Ashkelon">Ashkelon</option>
                            <option value="Eilat">Eilat</option>
                            <option value="Netivot">Netivot</option>
                            <option value="Arad">Arad</option>
                            <option value="Dimona">Dimona</option>
                            <option value="Ofakim">Ofakim</option>
                            <option value="Kiryat Gat">Kiryat Gat</option>
                            <option value="Kiryat Malakhi">Kiryat Malakhi</option>
                            <option value="Rahat">Rahat</option>
                            <option value="Sderot">Sderot</option>
                            <option value="Omer">Omer</option>
                            <option value="Meitar">Meitar</option>
                        </select>`  

                }  if(d == 'Judea and Samaria Area'){
                    let city = document.getElementById('city')
                    city.innerHTML =
                            `<select name="city" class="myInputs">
                                <option value="Select a City">Select a City</option>
                                <option value="Ariel">Ariel</option>
                                <option value="Betar Illit">Betar Illit</option>
                                <option value="Ma'ale Adumim">Ma'ale Adumim</option>
                                <option value="Modi'in Illit">Modi'in Illit</option>
                                <option value="Kiryat Arba">Kiryat Arba</option>
                                <option value="Gush Etzion">Gush Etzion</option>
                                <option value="Har Hebron">Har Hebron</option>
                                <option value="Megilot Dead Sea">Megilot Dead Sea</option>
                            </select>`  
                    }


}