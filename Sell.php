

<!DOCTYPE html>
<html lang="en">
<head>
<!--קידוד אותיות מטבלה -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sell Your Car</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link rel="stylesheet" href="CSS/Style.css">
</head>

<body>
<?php
include 'header.php';

?>
    <article class="container">
    <div class="white"><h2><b>Sell Your Car</b><h2></div><br/>
        <!-- <div class="back" dir="rtl"> //разворачивает текст для иврита -->
    <!-- <h1 class="white text-center">Ad for sale</h1> -->
    <!-- form>input:text*6 -->
    <!-- <input type="submit" value="Send Form"> -->
    <form action="mainSales.php" method="POST" class="advertisement">
        <!-- <h2 class="white text-center">Sign Up</h2> -->
        
    
        <label class="label">District</label>
        <div id="district" value=""></div>
        
        <label class="label">City</label>
        <div id="city" value=""></div>

        <label class="label"><h4>Basic Vehicle Information</h4></label><br/>
        <label class="label"><h6>Required Information</h6></label><hr/>
        <label class="label">Year</label>
        <div class="field dropdown">
            <select name='caryear'>
                <option label="Select a Year" value="0" selected="selected"> 
                <option label="2018" value="2018">2018</option>
                <option label="2017" value="2017">2017</option>
                <option label="2016" value="2016">2016</option>
                <option label="2015" value="2015">2015</option>
                <option label="2014" value="2014">2014</option>
                <option label="2013" value="2013">2013</option>
                <option label="2012" value="2012">2012</option>
                <option label="2011" value="2011">2011</option>
                <option label="2010" value="2010">2010</option>
                <!-- <option label="2009" value="20090000">2009</option>
                <option label="2008" value="20080000">2008</option>
                <option label="2007" value="20070000">2007</option>
                <option label="2006" value="20060000">2006</option>
                <option label="2005" value="20050000">2005</option>
                <option label="2004" value="20040000">2004</option>
                <option label="2003" value="20030000">2003</option>
                <option label="2002" value="20020000">2002</option>
                <option label="2001" value="20010000">2001</option>
                <option label="2000" value="20000000">2000</option>
                <option label="1999" value="19990000">1999</option>
                <option label="1998" value="19980000">1998</option>
                <option label="1997" value="19970000">1997</option>
                <option label="1996" value="19960000">1996</option>
                <option label="1995" value="19950000">1995</option>
                <option label="1994" value="19940000">1994</option>
                <option label="1993" value="19930000">1993</option>
                <option label="1992" value="19920000">1992</option>
                <option label="1991" value="19910000">1991</option>
                <option label="1990" value="19900000">1990</option> -->
            </select><br/>
        </div>

        <label class="label">On the road from the Month:</label>
        <div class="field dropdown">
            <select name="carmonth">
                <option label="Select a Month" value="0" selected="selected"> 
                <option label="January" value="January">January</option>
                <option label="February" value="February">February</option>
                <option label="March" value="March">March</option>
                <option label="April" value="April">April</option>
                <option label="May" value="May">May</option>
                <option label="June" value="June">June</option>
                <option label="July" value="July">July</option>
                <option label="August" value="August">August</option>
                <option label="September" value="September">September</option>
                <option label="October" value="October">October</option>
                <option label="November" value="November">November</option>
                <option label="December" value="December">December</option>
            </select><br/>
        </div>

        <label class="label">Make</label>
        <div id="middle" value=""></div>

        <label class="label">Model</label>
        <div id="more" value=""></div>

        <label class="label">Body Style</label>
        <div class="field dropdown">
            <select name="bodyStyle">
                <option label="Select a Body Style" value="0" selected="selected">
                <option label="Minivan" value="Minivan">Minivan</option>
                <option label="Coupe" value="Coupe">Coupe</option>
                <option label="Hetchback" value="Hetchback">Hetchback</option>
                <option label="Sedan" value="Sedan"></option>
                <option label="SUV" value="SUV">SUV</option>
        <!-- <option label="" value=""></option> -->
            </select><br/>
        <div>
     
        <label class="label">Transmission</label>
        <div class="field dropdown">
            <select name="transmission">
                <option label="Select a Transmission" value="0" selected="selected">
                <option label="Automanual" value="Automanual">Automanual</option>
                <option label="Automatic" value="Automatic">Automatic</option>
                <option label="Manual" value="Manual">Manual</option>
            </select><br/>
        <div><br/>

        <label class="label"><h6>Optional Information</h6></label><hr/>

        <label class="label">Exterior Color</label>
        <div class="field dropdown">
            <select name="exteriorColor">
                <option label="Select a Color" value="0" selected="selected">
                <option label="Beige" value="Beige">Beige</option>
                <option label="Black" value="Black">Black</option>
                <option label="Blue" value="Blue">Blue</option>
                <option label="Brown" value="Brown">Brown</option>
                <option label="Gold" value="Gold">Gold</option>
                <option label="Grey" value="Grey">Green</option>
                <option label="Green" value="Green"> Gold</option>
                <option label="Orange" value="Orange">Orange</option>
                <option label="Pink" value="Pink">Pink</option>
                <option label="Purple" value="Purple">Purple</option>
                <option label="Red" value="Red">Red</option>
                <option label="White" value="White">White</option>
                <option label="Silver" value="Silver">Silver</option>
                <option label="Yellow" value="Yellow">Yellow</option>
            </select>
        <div>



        <label class="label">Number of Doors</label>
        <div class="field dropdown">
            <select name="numberOfDoors">
                <option label="Select a Number of Doors" value="0" selected="selected">
                <option label="2 Doors" value="2 Doors">2 Doors</option>
                <option label="3 Doors" value="3 Doors">3 Doors</option>
                <option label="4 Doors" value="4 Doors">4 Doors</option>
                <option label="5 Doors" value="5 Doors">5 Doors</option>
                <option label="6 Doors" value="6 Doors">6 Doors</option>
            </select>
        <div>

        
        <label class="label">Engine Cylinder</label>
        <div class="field dropdown">
            <select name="engineCylinder">
                <option label="Select Engine Cylinder" value="0" selected="selected">
                <option label="1 cylinder" value="1 cylinder">1 cylinder</option>
                <option label="2 cylinder" value="2 cylinder">2 cylinder</option>
                <option label="3 cylinder" value="3 cylinder">3 cylinder</option>
                <option label="4 cylinder" value="4 cylinder">4 cylinder</option>
                <option label="5 cylinder" value="5 cylinder">5 cylinder</option>
                <option label="6 cylinder" value="6 cylinder">6 cylinder</option>
                <option label="8 cylinder" value="8 cylinder">8 cylinder</option>
                <option label="10 cylinder" value="10 cylinder">10 cylinder</option>
                <option label="12 cylinder" value="12 cylinder">12 cylinder</option>
            </select>
        <div>

        <label class="label">Drive Type</label>
        <div class="field dropdown">
            <select name="driveType">
                <option label="Select a Drive Type" value="0" selected="selected">
                <option label="4x2 / 2 wheel drive" value="4x2/2wheeldrive">4x2 / 2 wheel drive</option>
                <option label="4x4 / 4 wheel drive" value="4x4/4wheeldrive">4x4 / 4 wheel drive</option>
                <option label="AWD" value="AWD">AWD</option>
                <option label="FWD" value="FWD">FWD</option>
                <option label="RWD" value="RWD">RWD</option>
            </select>
        <div>

        <label class="label">Fuel Type</label>
        <div class="field dropdown">
            <select name="fuelType">
                <option label="Select a Fuel Type" value="0" selected="selected">
                <option label="Compressed Natural Gas" value="Compressed Natural Gas">Compressed Natural Gas</option>
                <option label="Diesel" value="Diesel">Diesel</option>
                <option label="E85 Flex Fuel" value="E85 Flex Fuel">E85 Flex Fuel</option>
                <option label="Electric" value="Electric">Electric</option>
                <option label="Gasoline" value="Gasoline">Gasoline</option>
                <option label="Hybrid" value="Hybrid">Hybrid</option>
            </select>
        <div>
        
        <label class="label"><h4>Personal Information</h4></label><br/>
        <label class="label">Condition</label>
        <div class="field dropdown">
            <select name='condition1'>
                <option label="Select a Condition" value="0" selected="selected"> 
                <option label="excellent" value="excellent"></option>
                <option label="good" value="good"></option>
                <option label="needs Repair" value="needs repair"></option>
                <option label="for Parts" value="for parts"></option>
            </select>
        </div>

        <label class="label">Mileage</label>
            <!-- <form name="mileage" method="POST"> -->
                 <input class="myInputs" type="text" name="mileage" placeholder="Mileage (km)"> km<br>
            <!-- </form> -->
        
            <label class="label">Hand</label>
        <div class="field dropdown">
            <select name='hand'>
                <option label="Select a Hand" value="0" selected="selected"> 
                <option label="1" value="1"></option>
                <option label="2" value="2"></option>
                <option label="3" value="3"></option>
                <option label="4" value="4"></option>
                <option label="5 and more" value="5 and more"></option>
            </select>
        </div>

                <label class="label">Engine Volume</label>
            <!-- <form name="engineVolume" method="POST"> -->
                 <input class="myInputs" type="text" name="engineVolume" placeholder="Engine Volume (l)"> litr<br>
            <!-- </form> -->

                <label class="label">Engine Power</label>
            <!-- <form name="enginePower" method="POST"> -->
                 <input class="myInputs" type="text" name="enginePower" placeholder="Engine Power (HP)"> h.p.<br>
            <!-- </form> -->
            <br/>

      <!-- <label for="lastbuy">
        When did you last buy:
        <input type="month"
          id="lastbuy" name="lastbuy" />
      </label><br/> -->


        <label class="label">Pictures</label>
        <div class="pictures">
            <input type="text" name="image1" placeholder="url-picture">
            <input type="text" name="image2" placeholder="url-picture">
            <input type="text" name="image3" placeholder="url-picture">
            <input type="text" name="image4" placeholder="url-picture">
            <input type="text" name="image5" placeholder="url-picture">
        </div>



        <!-- <label class="label">Pictures1</label>
        <input id="input_file" type="file" multiple style="position:absolute; top:-999px; visibility:hidden"/>
        <div id="button" style="background-color: blue; width: 100px; height:40px;"></div>

            <script type="text/javascript">
                var input = document.querySelector("#input_file");
                var btn = document.querySelector("#button");
                btn.onclick = function () {
            input.click();
            };
            </script> -->
        
        <!--!!!!!!!!! <input type="image" name="image" accept-"image">" -->
        <!-- <input type="password" name="password" placeholder="Password"> -->

        <!-- <h6>Optional Information</h6> -->
        <label class="label"><h4>Your Contact Information</h4></label><br/>
        <div class="Contact-Card">
            <input class="myInputs" type="text" name="firstname" placeholder="First Name">
            <input class="myInputs" type="text" name="lastname" placeholder="Last Name">
            <input class="myInputs" type="text" name="phone" placeholder="Phone Number(Optional)">
            <input class="myInputs" type="email" name="email" placeholder="E-mail" value ="aaa@bbb.ccc">
            <input class="myInputs" type="password" name="password" placeholder="password"><br/>
            <input class="btn btn-lg btn-secondary btn-block text-uppercase" id="submit" type="submit" value="Send Form"><br/>
        </div>


    </form>

<!-- </div> -->
 
</div>

</article>


<script src="js/regionCities.js"></script>
<script src="js/makeModels.js"></script>

<footer>
</footer>


<!-- <div id="footer"></div> -->

<?php
include 'footer.php';
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>


</html>