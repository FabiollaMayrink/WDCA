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

    <?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
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
"Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort($ceu) ;?>

<table class="table">
  <thead>
    <tr>
  <th>
    Country
  </th>
  <th>
    Capital
  </th>
</tr>
  </thead>
  <tbody>
<?php foreach($ceu as $country => $capital)
{?>
<tr>
  <td><?php echo $country ?></td>
  <td><?php echo $capital ?></td>
</tr>

<?php } ?>
  </tbody>
</table>

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



    <!-- Footer Starts Here -->
    
    <?php
    include("footer.php");
?>