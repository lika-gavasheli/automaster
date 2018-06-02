<!DOCTYPE html>
<html>
<head>
    <title>Auto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
</head>
<body>

        <!-- -------------------- SECTION ONE -------------------- -->

        <section id="sectionone" class="section-one">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100 car-img" src="img/car.png" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 car-img" src="img/car.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 car-img" src="img/car.png" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <div class="left-arrow-div">
                    <img class="slider-arrows left-arrow" src="img/left-arrow.svg">
                </div>
                
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <div class="right-arrow-div">
                    <img class="slider-arrows right-arrow" src="img/right-arrow.svg">
                </div>
                
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div id="burgermain" class="burgermain">
                <div id="burger" class="burger">
                    <div class="divider"></div>
                    <div class="divider"></div>
                    <div class="divider"></div>
                </div>
            </div>
            <nav id="navigation" class="navigation">
                <ul id="navigation-ul" class="navigation-ul">
                    <li id="navigation-li" class="navigation-li">
                        <a id="navigation-a1" class="navigation-a" href="#sectionone">home</a>
                    </li>
                    <li id="navigation-li" class="navigation-li">
                        <a id="navigation-a2" class="navigation-a" href="#sectiontwo">services</a>
                    </li>
                    <li id="navigation-li" class="navigation-li">
                        <a id="navigation-a3" class="navigation-a" href="#sectionthree">contact</a>
                    </li>
                </ul>
            </nav>
            <img class="text-auto" src="img/text-auto.svg">
            <img id="text-auto-red" class="text-auto-red" src="img/text-auto-red.svg">
            <div class="circles">
                <img class="circle circle1" src="img/circle1.svg">
                <img class="circle circle2" src="img/circle2.svg">
                <img class="circle circle3" src="img/circle3.svg">
                <img class="circle circle4" src="img/circle4.svg">
                <img class="circle circle5" src="img/circle5.svg">
                <img class="circle circle6" src="img/circle6.svg">
                <img class="circle circle7" src="img/circle7.svg">
                <img class="circle circle8" src="img/circle8.svg">
                <img class="circle circle9" src="img/circle9.svg">
                <img class="circle circle10" src="img/circle10.svg">
            </div>
            <h1 class="bottom-text-h1">27.11.</h1>
            <h2 class="bottom-text-h2">Vintage Auto Exhibition</h2>
        </section>

        <!-- -------------------- SECTION TWO -------------------- -->

        <section id="sectiontwo" class="section-two">
            <h1 class="section-two-h1">The corner garage for collector cars</h1>
            <div class="row services-row">
                <div class="services">
                    <img class="services-img" src="img/modify.svg">
                    <a class="services-h2" href="#">modify</a>
                </div>
                <div class="services">
                    <img class="services-img" src="img/buy.svg">
                    <a class="services-h2" href="#">buy</a>
                </div>
                <div class="services">
                    <img class="services-img" src="img/repair.svg">
                    <a class="services-h2" href="#">repair</a>
                </div>
            </div>
            <div class="animation">
                <div class="mountains"> 
                    <div class="trees">
                        <img class="trees-img" src="img/trees.png">
                    </div> 
                </div>
                <div class="road mt-4">
                    <div class="bus">
                        <img class="bus-img" src="img/bus.png">
                    </div> 
                </div>
            </div>
        </section>

        <!-- -------------------- SECTION THREE -------------------- -->

        <section id="sectionthree" class="section-three">
            <div class="map">
                <iframe class="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.1362824355547!2d44.78283021533764!3d41.717577979235244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472d4fa5b02d7%3A0xced15c2c7992ceb5!2sGeoLab!5e0!3m2!1sen!2sge!4v1523036835850" frameborder="0" style="border:0" allowfullscreen></iframe>
                <div class="bottom-box">
                    <div class="contact">
                        <h3 class="contact-h3">contact information</h3>
                        <a class="contact-a" href="javascript:void(0)">click to view</a>
                        <div class="social-icons">
                            <a class="social-icons-a" href="javascript:void(0)">
                                <img class="social-icons-img" src="img/gplus.svg">
                            </a>
                            <a class="social-icons-a" href="javascript:void(0)">
                                <img class="social-icons-img" src="img/fb.svg">
                            </a>
                            <a class="social-icons-a" href="javascript:void(0)">
                                <img class="social-icons-img" src="img/twitter.svg">
                            </a>
                        </div>
                    </div>
                    <div class="forms-main">
                        <h3 class="forms-h3">get in touch</h3>
                        <div class="forms">
                            <div class="input">
                            <form>
                              <div class="form-group">
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="name">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="email">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="subject">
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control form-control-last-child" id="formGroupExampleInput" placeholder="text">
                              </div>                              
                            </form>
                        </div>
                        <div class="chackbox-main">
                            <div class="checkbox-1">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                  <label class="form-check-label" for="inlineRadio1">male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                  <label class="form-check-label" for="inlineRadio2">female</label>
                                </div>
                            </div>
                            <div class="checkbox-2">
                                <p>Sign up for newslatter:</p>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" value="option1">
                                  <label class="form-check-label" for="defaultCheck1">
                                    recive images
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" value="option1">
                                  <label class="form-check-label" for="defaultCheck2">
                                    recive promotions
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" value="option1">
                                  <label class="form-check-label" for="defaultCheck3">
                                    recive updates
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck4" value="option1">
                                  <label class="form-check-label" for="defaultCheck4">
                                    recive job offers
                                  </label>
                                </div>
                            </div>  
                        </div>
                        <button type="button" class="btn btn-dark">send</button>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <p class="footer-p1">© copyright 2017</p>
            <p class="footer-p2">created by: BEQA CHALADZE</p>
        </footer>

        <!-- -------------------- SCRIPT -------------------- -->
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>