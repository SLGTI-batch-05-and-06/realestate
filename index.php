<?php include_once('script.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>


<!--........................ top navigation bar ..........................................-->

<nav class="navbar navbar-expand-lg navbar-white" style="background-color:#28AF60; height:33px;" >
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
 <div class="images">
 <img src="used/fac.png" width="10" height="19"> &nbsp;
 <img src="used/g.png" width="20" height="22" > &nbsp; 
 <img src="used/i.png" width="18" height="18"> &nbsp; 
 <img src="used/t.png" width="25" height="20"> &nbsp;
 
 &nbsp; &nbsp;
 <img src="used/l.png" width="20" height="20"> &nbsp;
    <a class="nav-link-active" href="login.php" style="color:white;">login</a>
    &nbsp;
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</div>

    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#" style="color:white;">admin@gmail.com<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <div class="images">
     
        <img src="used/c.png"  width="20" height="23">
        
    </div>
        &nbsp;
       
        <span class="navbar-text">
            <a href="#" style="color:white;">call us:94770589968</a> &nbsp; &nbsp;
    </span>  

     </div>
 </nav>


<!--.................................logo page.................................................... -->


 <div class="navbar">
            <img src="used/style_green.png" width="285" height="85">
        
<nav>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a  class="nav-link active" href="#">HOME</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#" style="color:#1D1C1C">ABOUT US</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#" style="color:#1D1C1C">CONTACT US</a>
  </li>
 
  <li class="nav-item">
    <a class="nav-link" href="#" style="color:#1D1C1C">FAQ</a>
  </li>
</ul>
</nav>
</div>




<!-- .........................................body of the page.......................................... -->


<div class="dash">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="used/sale.jpg" width="150" height="600" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="used/sale1.jpg" width="150" height="600">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="used/sale3.jpg" width="150" height="600">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<!-- ......................... .........searching bar................................................... -->

<div class="dash1" style="background_color:secondary;">
        <div class="features"> 
            <!-- <div class="image"> -->
        <!-- <img src="used/l11.png" > --> 
        </div> 


<!-- ...............drop down lists............. -->
<div class="dropdown">
<div class="dropdown1" > 
<button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" style="width:350px">
    Property type
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Land</button>
    <button class="dropdown-item" type="button">House</button>
    <button class="dropdown-item" type="button">Park areas</button>
  </div>
  </div>



  <div class="dropdown2">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" style="width:350px" >
    Purpose
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Sale</button>
    <button class="dropdown-item" type="button">Rent</button>
    
  </div>
  </div>




  <div class="dropdown3">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" style="width:350px" >
    Province
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Central province</button>
    <button class="dropdown-item" type="button">Uva</button>
    <button class="dropdown-item" type="button">Sabaragamuwa</button>
    <button class="dropdown-item" type="button">Southern</button>
    <button class="dropdown-item" type="button">Western</button>
    <button class="dropdown-item" type="button">Eastern</button>
    <button class="dropdown-item" type="button">North central</button>
    <button class="dropdown-item" type="button">Northen</button>
    <button class="dropdown-item" type="button">North western</button>
  </div>
  </div>

  <div class="dropdown4">
  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" style="width:350px">
    City
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2" >
    <button class="dropdown-item" type="button">Land</button>
    <button class="dropdown-item" type="button">House</button>
    <button class="dropdown-item" type="button">Park areas</button>
  </div>
  </div>
</div>
</div>

<!-- .........search button............. -->

<div class=search>
<button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="width:350px">Search</button>  
</div>





<!-- .......................................extraa................................................-->

<div class="link">
  <div class="link1">
  <img src="used/house.jpg" alt="jh" class="rounded-circle" width="150" height="150">
</div>
<p class="card-text">Some quick example text to build <br>on the card title and make up the<br> bulk of the card's content.</p>
<br>
  <a href="#" class="btn btn-dark" style="width:255px">SMART PROPERTY SEARCH</a>
</div>


<div class="linkk">
  <div class="link1">
  <img src="used/y.jpg" alt="jh" class="rounded-circle" width="150" height="150">
</div>
<p class="card-text">Some quick example text to build <br>on the card title and make up the<br> bulk of the card's content.</p>
<br>
  <a href="#" class="btn btn-dark " style="width:255px">HELP</a>
</div>


<div class="linkkk">
  <div class="link1">
  <img src="used/AGENT.png" alt="jh" class="rounded-circle" width="150" height="150">
</div>
<p class="card-text">Some quick example text to build <br>on the card title and make up the<br> bulk of the card's content.</p>
<br>
  <a href="#" class="btn btn-dark " style="width:255px">USER COMMENTS</a>
</div> 


<!--............................................card design.................................................... -->

<div class="card1">

<img src="used/lk.png" width="993" height="52">
<br>
<br>
<div class="card-deck">
  <div class="card"  style="max-width: 19.5rem;">
    <img class="card-img-top" src="used/l2.png" >
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  <div class="card"   style="max-width: 19.5rem;">
    <img class="card-img-top" src="used/Group 47.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>

  <div class="card"  style="max-width: 19.5rem;">
    <img class="card-img-top" src="used/l3.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>


<!-- .........................................next bar............................................. -->

<div class="label">
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>
<br>
<br>



  


</body>
</html>