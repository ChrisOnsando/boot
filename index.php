<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NemCo Car Rental</title>
    <link rel="stylesheet" href="main.css" />

     <!--Google font-->
     <link
     href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
     rel="stylesheet"
   />
   <link rel="stylesheet" href="dash.css">
   <!-- font awesome icons -->
   <link
     rel="stylesheet"
     href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
   />
   <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
   />
   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link
     href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;600;700;800;900&display=swap"
     rel="stylesheet"
   />
   <link
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
     crossorigin="anonymous"
   />
   <script
     src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
     integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
     crossorigin="anonymous"
   ></script>
   <script
     src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
     integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
     crossorigin="anonymous"
   ></script>
  </head>
  <body>
      
    <header class="header">
        <h1>NemCo Car Rental</h1>
      <img class="logo" src="images/logo.png" alt="logo">
      <nav class="navbar">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Employee</a></li>
          <li><a href="login.php">Customer</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      
    </header>
    
     <div class="intro">
        <div class="introheader">
            <hr class="line">
          <h1>Car Rentals</h1>
          <hr class="line">
          <h5>Online Car Rental Service</h5>
        </div>
    </div>

    <section class="cars">
            <div id="cars-title">
              <h1>Available Cars</h1>
            </div>
    
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100">
                    <img src="images/audi.jpeg" style="width: 100%" class="card-img-top" alt="audi">
                    <div class="card-body">
                      <h5 class="card-title fw-bold text-success">Audi Series</h5>
                      <p class="card-text fw-bold text-success">AC Fare: Ds.36/km & ks5600/Day <br>
                        Non-AC Fare: Ds.26/km & ks3600/Day
                      </p>
                    </div>
                  </div>
                </div>
                
                <div class="col">
                  <div class="card h-100">
                    <img src="images/hondacrv.jpg" style="width: 100%" class="card-img-top" alt="hondacrv">
                    <div class="card-body">
                      <h5 class="card-title fw-bold text-success">Honda CR-V</h5>
                      <p class="card-text fw-bold text-success">AC Fare: Ds.36/km & ks6600/Day <br>
                        Non-AC Fare: Ds.16/km & ks2600/Day</p>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card h-100">
                    <img src="images/HyundaiCreta.jpg" style="width: 100%" class="card-img-top" alt="HyundaiCreta">
                    <div class="card-body">
                      <h5 class="card-title fw-bold text-success">Hyundai Creta</h5>
                      <p class="card-text fw-bold text-success">AC Fare: Ds.36/km & ks3600/Day <br>
                        Non-AC Fare: Ds.26/km & ks1600/Day</p>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card h-100">
                    <img src="images/HyundaiGrandi10sedan.jpg" style="width: 100%" class="card-img-top" alt="HyundaiGrandi10sedan">
                    <div class="card-body">
                      <h5 class="card-title fw-bold text-success">Hyundai Grandi10 Sedan</h5>
                      <p class="card-text fw-bold text-success">AC Fare: Ds.36/km & ks2600/Day <br>
                        Non-AC Fare: Ds.26/km & ks800/Day</p>
                    </div>
                  </div>
                </div>

                  <div class="col">
                    <div class="card h-100">
                      <img src="images/mazdademio.jpg" style="width: 100%" class="card-img-top" alt="mazdademio">
                      <div class="card-body">
                        <h5 class="card-title fw-bold text-success">Mazda Demio</h5>
                        <p class="card-text fw-bold text-success">AC Fare: Ds.36/km & ks800/Day <br>
                          Non-AC Fare: Ds.26/km & ks500/Day</p>
                      </div>
                    </div>
                  </div>

                    <div class="col">
                        <div class="card h-100">
                          <img src="images/mercedesbenz.jpeg" style="width: 100%" class="card-img-top" alt="mercedesbenz">
                          <div class="card-body">
                            <h5 class="card-title fw-bold text-success">Mercedes Benz</h5>
                            <p class="card-text fw-bold text-success">AC Fare: Ds.36/km & ks5000/Day <br>
                              Non-AC Fare: Ds.26/km & ks3000/Day</p>
                          </div>
                        </div>
                    </div>

                        <div class="col">
                            <div class="card h-100">
                              <img src="images/vwtouareg.jpg" style="width: 100%" class="card-img-top" alt="vwtouareg">
                              <div class="card-body">
                                <h5 class="card-title fw-bold text-success">VW Touareg</h5>
                                <p class="card-text fw-bold text-success">AC Fare: Ds.36/km & ks6000/Day <br>
                                  Non-AC Fare: Ds.26/km & ks5400/Day</p>
                              </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                              <img src="images/rav4.jpeg" style="width: 100%" class="card-img-top" alt="rav4">
                              <div class="card-body">
                                <h5 class="card-title fw-bold text-success">Toyota RAV4</h5>
                                <p class="card-text fw-bold text-success">AC Fare: Ds.36/km & ks6000/Day <br>
                                  Non-AC Fare: Ds.26/km & ks5400/Day</p>
                              </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100">
                              <img src="images/subaruforester.jpg" style="width: 100%" class="card-img-top" alt="subaruforester">
                              <div class="card-body">
                                <h5 class="card-title fw-bold text-success">Subaru Forester</h5>
                                <p class="card-text fw-bold text-success">AC Fare: Ds.36/km & ks6000/Day <br>
                                  Non-AC Fare: Ds.26/km & ks5400/Day</p>
                              </div>
                            </div>
                        </div>
                </div>
              </div>

              <div class="FAQ">
                <div class="FAQheader">
            <h1>FAQ</h1>
            <h5>Frequently Asked Questions</h5>
                </div>
            </div>

              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button fw-bold text-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      What do I need to rent a car?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body text-body">
                        When you’re booking a car, all you need is a debit or credit card.

                        At the rental counter, you’ll need:
                        
                        Your passport
                        Your voucher
                        A driver’s license for each driver
                        The main driver’s credit card (some companies accept debit cards, but most don’t).
                        Important: Check the car’s rental terms as well, because each company has its own rules. For example, they might need to see extra ID, might not accept certain types of credit cards, or might not rent to anybody who hasn’t held their driver's license for 36 months, etc.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed fw-bold text-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Am I old enough to rent a car?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body text-body">
                        Most companies will let you rent a car if you’re at least 21, and some will even rent to younger drivers. However, if you’re under 25, you might have to pay a "young driver fee."
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header fw-bold text-success" id="headingThree">
                    <button class="accordion-button collapsed fw-bold text-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Can I book a rental car for someone else?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body text-body">
                        Of course. Just put their info on the "Driver details" form when booking the car.
                    </div>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed fw-bold text-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Any tips for picking the right car?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body text-body">
                    Think about where you’re going. An SUV might be great for cruising down a Texas freeway, but a smaller car will be a lot easier for getting around Rome.
                    See what other people think. You’ll find lots of reviews and ratings on our site, so check out what other customers liked (and didn’t like) about each company.
                    Don’t forget the transmission. In some countries, almost everyone drives manual cars, while automatics are the norm in other ones. Make sure you rent a car you can drive!
                  </div>
                </div>
              </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed fw-bold text-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Are all fees included in the rental price?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse fw-bold text-success" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body text-body">
                    The price you see includes the car, mandatory coverage (e.g. Theft Protection, Collision Damage Waiver), and fees that, if they apply, are usually payable at pick-up (e.g. any one-way fees, airport surcharges, or local taxes).

It also includes any extras you already added (e.g. GPS, baby seats).

It doesn’t include any extra coverage you buy when you get to the rental counter.

Tip: There’s a full price breakdown on the Payment page.
                  </div>
                </div>
              </div>
            </div>

</section>
</body>
</html>