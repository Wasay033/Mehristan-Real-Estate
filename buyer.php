<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $cnic = $_POST['cnic'];
    $city = $_POST['city'];
    $location = $_POST['location'];
    $type = $_POST['type'];
    $bedrooms = $_POST['bedrooms'];
    $area = $_POST['area'];
    $price = $_POST['price'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `email`, `phone`, `address`, `cnic`, `city`, `location`, `type`, `bedrooms`,`area`,`price` ) VALUES ('$name', '$email', '$phone', '$address','$cnic' ,'$city' ,'$location' ,'$type' ,'$bedrooms' ,'$area','$price')";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mehristan Real Estate</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <style>  
 *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    
font-family: 'Roboto', sans-serif;
}


*{
    
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    
}
a{
    display: inline;
    text-decoration: none;
    
    
}




.hero{
    font-size: 30px;
    display: inline;
    width: 80%;
    height: 700px;
  

    
    
    
    
}
nav{
    display:inline;
    align-items: center;
    justify-content: space-between;
    padding: 30px 100px;
    
}

nav ul li{
    list-style: none;
    display: inline;
    padding: 0px 20px;
    
    
    
}
nav ul li a{
    display: inline;
    color: #1d1d24;
    position:relative;
    padding: 5px ;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    
}
nav ul li a:hover{
    color: #fd4766;
}
nav ul li a:after{
    content: "";
    position: absolute;
    left: 0;
    width: 0;
    height: 3px;
    background: #fd4766;
    transition: .3s;
    bottom: 0;
}
nav ul li a:hover:after{
    width: 100%;
}
.btn{
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 16px 40px;
    border-radius: 500px;
    display: inline;
    font-weight: 500;
    transition: all .4s ease-in-out;
    background-size: 152% 100%;
    background: #fd4766;
    border: 2px solid #fd4766;
    
}


 


 

 body{
    background-image: linear-gradient(to right, rgb(230, 253, 253) , rgba(58, 58, 56, 0.521));
 }

.container{
    max-width: 80%; 
    padding: 34px; 
    margin: auto;
}

.container h1 {
    text-align: center;
    font-family: 'Sriracha', cursive;
    font-size: 40px;
}

p{
    font-size: 17px;
    text-align: center;
    font-family: 'Sriracha', cursive;
}

input, textarea{
    
    border: 2px solid black;
    border-radius: 6px;
    outline: none;
    font-size: 16px;
    width: 80%;
    margin: 11px 0px;
    padding: 7px;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.btn{
    color: white;
    background: purple;
    padding: 8px 12px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
}

.bg{
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.6;
}
.submitMsg{ 
    color: green;
}


.form-control{
    width: 100%;
    font-size: medium;
    text-align: center;
    
}
.form-group{
    text-align: center;
}



</style>
</head>
<body>




<div class="hero">
      
      <nav>
          
          <ul>
              <li><a href="C:\Users\mahwish\Desktop\ISE proj\index.html">Home</a></li>
              <li><a href="C:\Users\Ifrah\Downloads\project\buyer.html">Buyer</a></li>
              <li><a href="C:\Users\Ifrah\Downloads\project\seller.html">Seller</a></li>
              <li><a href="C:\Users\mahwish\Desktop\ISE proj\contact.html">Contact</a></li>
              <li><a href="C:\Users\mahwish\Desktop\ISE proj\about.html">About</a></li>
              
              
              
              
              
          </ul>

        </nav>
    <div class="container">
        <h1>Buyer Details</h1>
        <p>Want to buy property? fill this form </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>your details has been submitted succesfully!</p>";
        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <input type="text" name="address" id="address" placeholder="Enter your residential address">
            <input type="text" name="cnic" id="cnic" placeholder="Enter your CNIC number">

            <h1> Property Details </h1>

        
        
          <div class="form-group col-md-4">
            <label for="city">City</label>
            <select name="city" id="city" class="form-control">
              <option selected>karachi</option>
              <option selected>Lahore</option>
              <option selected>faisalabad</option>
              <option selected>Rawalpindi</option>
              <option selected>Multan</option>
              <option selected>Gujranawala</option>
              <option selected>Hyderabad</option>
              <option selected>Peshawar</option>
              <option selected>Islamabad</option>
              <option selected>Quetta</option>
              <option selected>Sargodha</option>
              <option selected>Sialkot</option>
              <option selected>Bahawalpur</option>
              <option selected>Sukkur</option>
              <option selected>Larkana</option>
              <option selected>Rahim Yar Khan</option>
              <option selected>Mirpurkas</option>
              <option selected>Nawabshah</option>
              <option selected>Khuzdar</option>
              <option selected>Tando Adam </option>              
            </select>
          </div><br>

          <input type="text" name="location" id="location" placeholder="Enter Location"><br>

          <div class="form-group col-md-4">
                <label for="type">Property Type</label>
                <select name="type" id="type" class="form-control">
                  <option selected>Upper Portion</option>
                  <option selected>Lower Portion</option>
                  <option selected>Farm House</option>
                  <option selected>Pent House</option>
                  <option selected>House</option>
                  <option selected>Flat</option>
                  <option selected>Room</option>
                
                </select>
    
    
            </div><br>

            

              <div class="form-group col-md-4">
                <label for="bedrooms">Bedrooms</label>
                <select name="bedrooms" id="bedrooms" class="form-control">
                  <option selected>1</option>
                  <option selected>2</option>
                  <option selected>3</option>
                  <option selected>4</option>
                  <option selected>5</option>
                  <option selected>6</option>
                  <option selected>7</option>
                  <option selected>8</option>
                  <option selected>9</option>
                  <option selected>10+</option>
                
                </select>
    
    
              </div><br>


              <div class="form-group col-md-4">
                <label for="area">Area (SQ YD)</label>
                <select name="area" id="area" class="form-control">
                  <option selected>50</option>
                  <option selected>70</option>
                  <option selected>80</option>
                  <option selected>100</option>
                  <option selected>120</option>
                  <option selected>140</option>
                  <option selected>160</option>
                  <option selected>180</option>
                  <option selected>200</option>
                  <option selected>250</option>
                  <option selected>300</option>
                  <option selected>350</option>
                  <option selected>400</option>
                  <option selected>450</option>
                  <option selected>500</option>
                  <option selected>1,000</option>
                  <option selected>2,000</option>
                  <option selected>4,000</option>
                  
                
                </select>
              </div><br>

                <div class="form-group col-md-7">
                    <label for="price">Price (PKR)</label>
                    <select name="price" id="price" class="form-control">
                      <option selected>500,000</option>
                      <option selected>1,000,000</option>
                      <option selected>2,000,000</option>
                      <option selected>3,000,000</option>
                      <option selected>4,500,000</option>
                      <option selected>6,000,000</option>
                      <option selected>8,000,000</option>
                      <option selected>10,000,000</option>
                      <option selected>12,000,000</option>
                      <option selected>15,000,000</option>
                      <option selected>20,000,000</option>
                      <option selected>50,000,000</option>
                      
                      
                    
                    </select>
                </div><br>

           <button class="btn">Submit</button> 
        </form>
    </div>
    
</body>
</html>