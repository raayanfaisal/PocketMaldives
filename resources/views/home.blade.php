@extends('layouts.app')

@section('content')
<section>
<section>
      <nav>
        <label for="nav" class="nav-btn">
              <i></i>
              <i></i>
              <i></i>
        </label>
        <div class="logo">
              <a href="#">TravelGuide</a>
        </div>
        <div class="nav-wrapper">
              <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Articles</a></li>
                    <li><a href="#">Travel news</a></li>
                    <li><a href="#">Contacts</a></li>
              </ul>
        </div>
  </nav>
</section>
<section>
<div class="row">
      <div class="col-md-6">
      <div class="container">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                  <img class="d-block w-100" src="https://iso.500px.com/wp-content/uploads/2015/10/anthony-1500x995.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                  <img class="d-block w-100" src="https://specials-images.forbesimg.com/imageserve/5d54dc7368cb0a0009171dc2/960x0.jpg?fit=scale" alt="Second slide">
            </div>
            <div class="carousel-item">
                  <img class="d-block w-100" src="https://pullman.accor.com/destinations/country/thailand-1400x788-1.jpg" alt="Third slide">
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
      </div>
      <div class="col-md-6">
      <div class="container">
    <div id="carouselContent" class="carousel slide textSlide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active text-center p-4">
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="carousel-item text-center p-4">
                
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum</p>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
      </div>
</div>
</section>
<section class="mt-5">
      <div class="row">
            <div class="col-md-9">
                 <div class="container">
                 <div class="heading-003 mt-5 mb-5 ml-5 pl-5">
                        <h3>Re<span class="underline-001">cently add</span>ed</h3>
                 </div>
                        <!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

<!--Controls-->
<div class="controls-top">
  <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
  <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
      class="fas fa-chevron-right"></i></a>
</div>
<!--/.Controls-->

<!--Indicators-->
<ol class="carousel-indicators">
  <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
  <li data-target="#multi-item-example" data-slide-to="1"></li>
  
</ol>
<!--/.Indicators-->

<!--Slides-->
<div class="carousel-inner" role="listbox">

  <!--First slide-->
  <div class="carousel-item active">

    <div class="col-md-3" style="float:left">
     <div class="card mb-2">
        <img class="card-img-top"
          src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Airlines raises price due to COVID19</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a href="/travelnews" class="btn btn-primary">Button</a>
        </div>
      </div>
    </div>

    <div class="col-md-3" style="float:left">
      <div class="card mb-2">
        <img class="card-img-top"
          src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary">Button</a>
        </div>
      </div>
    </div>

    <div class="col-md-3" style="float:left">
      <div class="card mb-2">
        <img class="card-img-top"
          src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary">Button</a>
        </div>
      </div>
    </div>
    
     <div class="col-md-3" style="float:left">
     <div class="card mb-2">
        <img class="card-img-top"
          src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary">Button</a>
        </div>
      </div>
    </div>

  </div>
  <!--/.First slide-->

  <!--Second slide-->
  <div class="carousel-item">

    <div class="col-md-3" style="float:left">
      <div class="card mb-2">
        <img class="card-img-top"
          src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary">Button</a>
        </div>
      </div>
    </div>

    <div class="col-md-3" style="float:left">
      <div class="card mb-2">
        <img class="card-img-top"
          src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary">Button</a>
        </div>
      </div>
    </div>

    <div class="col-md-3" style="float:left">
      <div class="card mb-2">
        <img class="card-img-top"
          src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary">Button</a>
        </div>
      </div>
    </div>
    
    <div class="col-md-3" style="float:left">
      <div class="card mb-2">
        <img class="card-img-top"
          src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a class="btn btn-primary">Button</a>
        </div>
      </div>
    </div>

  </div>
  <!--/.Second slide-->

 

</div>
<!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->
                 </div> 
            </div>

            <div class="col-md-3">
                  <div class="heading-002">
                       <h2>Po<span class="underline-001">pular po</span>sts</h2>
                  </div>
                  <div class="recents-list">
                        <ul class="recents">
                              <li>Thailand</li>
                              <li>Sun island resort</li>
                              <li>Cocunut maldives</li>
                              <li>Maafushi island resort</li>
                        </ul>
                  </div>
            </div>
      </div>
</section>
<section class="footer">
<footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <form action="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-auto mb-4 mb-md-0">
          <p class="pt-2"><strong>Sign up for our newsletter</strong></p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5 col-12 mb-4 mb-md-0">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form5Example2" class="form-control" />
            <label class="form-label" for="form5Example2">Email address</label>
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-auto mb-4 mb-md-0">
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary mb-4">Subscribe</button>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </form>
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">travelnews.com</a>
  </div>
  <!-- Copyright -->
</footer>
</section>
@endsection
