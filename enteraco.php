<?php
    include("header.php");
?>


    <!-- Page Content -->
    <!-- Heading Starts Here -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Countries and Capitals</h1>
            <p><a href="index.html">Home</a> / <span>Countries and Capitals</span></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Heading Ends Here -->


    <!-- About Us Starts Here -->
    <div class="about-us">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            
          </div>
          <div class="col-md-12">
            <div class="right-content">
              <div class="section-heading">
                <span>Countries and Capitals</span>
               


                <link rel="stylesheet" href="style.css">

 
<body>
<h1>ENTER YOUR CITY IF YOU CAN'T FIND IT ON THE LIST<br /></h1>
 
<?php

  $cities=array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
  "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
  "Finland"=>"Helsinki", "France" => "Paris",
  "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
  "Germany" => "Berlin", "Greece" => "Athens",
  "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
  "Portugal"=>"Lisbon", "Spain"=>"Madrid",
  "Sweden"=>"Stockholm", "United Kingdom"=>"London",
  "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
  "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
  "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
  "Austria" => "Vienna", "Poland"=>"Warsaw", "Sorry, coud not be find"=>"Other",);

  if(!isset($_POST['submit'])){
?>

 
<form method="post" action="">
    <div  class="form-inline" >
    <p > Choose a City   :</p>
<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="city">
    
 
<?php

  foreach($cities as $c){
    echo "<option value=\"$c\">$c</option>\n";
  }
?>
 
</select>
<div class="col-auto my-1" >
<input class="btn btn-primary mb-2" type="submit" name="submit" value="Submit" >


</div>
</div>
</form>

  

 
<?php
 
  }else{
 
    $city=$_POST['city'];

    $country=array_search($city, $cities);

    echo "<p>$city is capital of $country.</p>" ;
 
  }
?>
    <?php
    include("footer.php");
?>