<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Affordable and cozy cinema">
  <meta name="author" content="Kevin Vu & Ted Vu">

  <title>Lunardo Cinemas | Welcome</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="../a2/style.css">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Red+Hat+Text:400,500,700&display=swap');
  </style>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap');
  </style>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap');
  </style>
  <script src='../wireframe.js'></script>
  <script src='../a3/updateSynopsisScript.js'></script>
  <script src='../a3/updateBookingFormScript.js'></script>
  <script src='../a3/submitBookingForm.js'></script>

  <link rel="icon" href="../../media/lunardo_logo_icon.png" />
</head>

<body>
  <a class="anchor" id="to-top"></a>
  <!-- header -->
  <header>
    <div class="site-inner-header">
      <div class="logo-container">
        <img src='../../media/lunardo_logo.png' alt='logo' />
        <h1><span><span class="highlight-1">Lunar</span>do</span></h1>
      </div>
    </div>
  </header>

  <!-- nav -->
  <nav>
    <div class="nav-container">
      <ul>
        <li class="nav-list">
          <a class="nav-content" href="#to-top">Top</a>
        </li>
        <li class="nav-list">
          <a class="nav-content" href="#to-about-us">About Us</a>
        </li>
        <li class="nav-list">
          <a class="nav-content" href="#to-now-showing">Now Showing</a>
        </li>
        <li class="nav-list">
          <a class="nav-content" href="#to-prices">Prices</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- main -->
  <main>
    <!-- slogan -->
    <section id="slogan" class="secondary-background">
      <div class="container">

        <div class="slogan-content">
          <h1>REDEFINING CINEMA EXPERIENCE</h1>
          <p>The <span class="highlight-2">best</span> cinema in town.</p>
        </div>

      </div>
    </section>
    <!-- End of slogan -->

    <!-- about -->
    <section id="about-us">
      <a class="anchor" id="to-about-us"></a>
      <div class="container">
        <h2>About Us</h2>

        <div class="flex-container">
          <div class="box-content">
            <h3 class="header-of-section"><span class="cross-word">WE DO NOT OFFER MOVIES</span> <span class="highlight-4 motto">WE OFFER EXPERIENCE</span></h3>
            <p class="content-font">After extensive <span class="highlight-5">improvements</span> and <span class="highlight-5">rennovation</span> our cinema will reopen on <span class="highlight-5">30/08/2019</span>. Mark your calendar and join us enjoying your favorite movies with <span class="highlight-5">one-of-a-kind experience</span> at Lunardo. We guarantee to bring you the joyest experience that you have never experienced before.</p>
          </div>
          <div class="box-img">
            <img src=../../media/CinemaExperience_2.jpg alt="cinema experience" />
          </div>
        </div>

        <div class="seat">
          <div class="seat-title">
            <h3>Enjoy the ride with our <span class="highlight-4">amazing seats</span></h3>
          </div>

          <div class="flex-container" id="reverse-container">
            <div class="box-img">
              <img src=../../media/CinemaStandardSeat.jpg alt="cinema standard seat" />
            </div>
            <div class="box-content">
              <h3 class="title-box-1">Standard Seat</h3>
              <div class="content-font">
                <p>Our standard seats are bound to deliver the outstanding comfortable experience to you</p>
                <div>FEATURES</div>
                <ul class="image-list">
                  <li>Leather headrest for extended durability</li>
                  <li>Multi-angled positioned backrest</li>
                  <li>No finger traps</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="flex-container">
            <div class="box-content">
              <h3 class="title-box-2">Reclinable First Class Seat</h3>
              <div class="content-font">
                <p>Our first class seats are bound to deliver the luxurious experience </p>
                <div>FEATURES</div>
                <ul class="image-list">
                  <li>luxurious aesthetic</li>
                  <li>fully reclining seat</li>
                  <li>footrest sensor option</li>
                </ul>
              </div>
            </div>
            <div class="box-img">
              <img src=../../media/CinemaFirstClassSeat.jpg alt="cinema first class seat" />
            </div>
          </div>
        </div>

        <div class="dolby-content">
          <h3><span class="content-title-1"><span class="highlight-4">Redefining</span> cinema experience</span> <span class="content-title-2">with our 3D Dolby Vision and Dolby Atmos system</span></h3>
          <div class="few-word">
            <p class="content-font">With our new 3D Dolby Digital projector and Dolby Atmos, we proudly offer you the <span class="highlight-5">most authentic experience</span> that you will never forget</p>
            <h4> Live in the film with 3D Dolby Digital Projector </h4>
          </div>
        </div>

        <div class="dolby-container">
          <div class="dolby-box">
            <img src="../../media/3D_Dolby.jpg" alt="3D-Dolby" />
            <p class="content-font">Superior Picture Quality using the most advanced technology</p>
          </div>
          <div class="dolby-box">
            <img src="../../media/3D_Dolby_Kids.jpg" alt="3D-Kids" />
            <p class="content-font">Super Kid-friendly, making moviegoing more enjoyable and comfortable</p>
          </div>
        </div>

        <div class="flex-container">
          <h3><span class="content-title-1"><span class="highlight-4">Surround</span> yourself</span> <span class="content-title-2">with the most astounding sound system</span></h3>
          <div class="box-img-author box-img">
            <img src="../../media/GeorgeLucas.jpg" alt="George-Lucas" />
          </div>
          <div class="box-content">
            <div class="notepaper">
              <figure class="quote">
                <blockquote class="curly-quotes">
                  Sound is 50 percent of the movie going experience, and I've always believed audiences are moved and excited by what they hear in my movies at least as much by what they see
                </blockquote>
                <figcaption class="quote-by">-George Lucas-Director of StarTrek</figcaption>
              </figure>
            </div>
          </div>
        </div>

        <div class="pannel-container">
          <div class="pannel-content">
            <span>That's why</span>&#10;We use the state-of-the-art sound system <span class="highlight-3">embraced by many Hollywood film makers</span>.
          </div>
        </div>

      </div>
    </section>
    <!-- End of about -->

    <!-- now-showing -->
    <section id="now-showing">
      <a class="anchor" id="to-now-showing"></a>
      <div class="container">

        <h2>Now Showing</h2>

        <div id="movie-boxes">

          <div class="movie-box">
            <h3>Avengers: Endgame</h3>
            <div class="movie-box-row">
              <div class="movie-box-column-1">
                <div class="movie-main">
                  <img src="../../media/avengers-poster-1.jpg" alt="movie-poster">
                  <button id='buttonACT' class="movie-button" onclick='displaySynopsis()'><span class="movie-btn-content">Movie Info</span></button>
                </div>
              </div>
              <div class="movie-box-column-2">
                <div class="movie-info-list">
                  <div class="movie-rating"><img src="../../media/classification-m.svg" alt="m-movie-rating"></div>
                  <div class="movie-info disabled-text"><span class="movie-date">Mon</span><span class="movie-time-text">N/A</span></div>
                  <div class="movie-info disabled-text"><span class="movie-date">Tue</span><span class="movie-time-text">N/A</span></div>
                  <div class="movie-info"><span class="movie-date">Wed</span><span class="movie-time-text">09:00PM</span></div>
                  <div class="movie-info"><span class="movie-date">Thu</span><span class="movie-time-text">09:00PM</span></div>
                  <div class="movie-info"><span class="movie-date">Fri</span><span class="movie-time-text">09:00PM</span></div>
                  <div class="movie-info"><span class="movie-date">Sat</span><span class="movie-time-text">06:00PM</span></div>
                  <div class="movie-info"><span class="movie-date">Sun</span><span class="movie-time-text">06:00PM</span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="movie-box">
            <h3>Top End Wedding</h3>
            <div class="movie-box-row">
              <div class="movie-box-column-1">
                <div class="movie-main">
                  <img src="../../media/topendwedding-poster-1.jpg" alt="movie-poster">
                  <button id='buttonRMC' class="movie-button" onclick='displaySynopsis()'><span class="movie-btn-content">Movie Info</span></button>
                </div>
              </div>
              <div class="movie-box-column-2">
                <div class="movie-info-list">
                  <div class="movie-rating"><img src="../../media/classification-ma.svg" alt="ma-movie-rating"></div>
                  <div class="movie-info"><span class="movie-date">Mon</span><span class="movie-time-text">06:00PM</span></div>
                  <div class="movie-info"><span class="movie-date">Tue</span><span class="movie-time-text">06:00PM</span></div>
                  <div class="movie-info disabled-text"><span class="movie-date">Wed</span><span class="movie-time-text">N/A</span></div>
                  <div class="movie-info disabled-text"><span class="movie-date">Thu</span><span class="movie-time-text">N/A</span></div>
                  <div class="movie-info disabled-text"><span class="movie-date">Fri</span><span class="movie-time-text">N/A</span></div>
                  <div class="movie-info"><span class="movie-date">Sat</span><span class="movie-time-text">03:00PM</span></div>
                  <div class="movie-info"><span class="movie-date">Sun</span><span class="movie-time-text">03:00PM</span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="movie-box">
            <h3>Dumbo</h3>
            <div class="movie-box-row">
              <div class="movie-box-column-1">
                <div class="movie-main">
                  <img src="../../media/dumbo-poster-1.jpg" alt="movie-poster">
                  <button id='buttonANM' class="movie-button" onclick='displaySynopsis()'><span class="movie-btn-content">Movie Info</span></button>
                </div>
              </div>
              <div class="movie-box-column-2">
                <div class="movie-info-list">
                  <div class="movie-rating"><img src="../../media/classification-pg.svg" alt="pg-movie-rating"></div>
                  <div class="movie-info"><span class="movie-date">Mon</span><span class="movie-time-text">12:00PM</span></div>
                  <div class="movie-info"><span class="movie-date">Tue</span><span class="movie-time-text">12:00PM</span></div>
                  <div class="movie-info"><span class="movie-date">Wed</span><span class="movie-time-text">06:00PM</span></div>
                  <div class="movie-info"><span class="movie-date">Thu</span><span class="movie-time-text">06:00PM</span></div>
                  <div class="movie-info"><span class="movie-date">Fri</span><span class="movie-time-text">06:00PM</span></div>
                  <div class="movie-info"><span class="movie-date">Sat</span><span class="movie-time-text">12:00PM</span></div>
                  <div class="movie-info"><span class="movie-date">Sun</span><span class="movie-time-text">12:00PM</span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="movie-box">
            <h3>The Happy Prince</h3>
            <div class="movie-box-row">
              <div class="movie-box-column-1">
                <div class="movie-main">
                  <img src="../../media/thehappyprince-poster-1.jpg" alt="movie-poster">
                  <button id='buttonAHF' class="movie-button" onclick="displaySynopsis()"><span class="movie-btn-content">Movie Info</span></button>
                </div>
              </div>
              <div class="movie-box-column-2">
                <div class="movie-info-list">
                  <div class="movie-rating"><img src="../../media/classification-r.svg" alt="r-movie-rating"></div>
                  <div class="movie-info disabled-text"><span class="movie-date">Mon</span><span class="movie-time-text">N/A</span></div>
                  <div class="movie-info disabled-text"><span class="movie-date">Tue</span><span class="movie-time-text">N/A</span></div>
                  <div class="movie-info"><span class="movie-date">Wed</span><span class="movie-time-text">12:00PM</span></div>
                  <div class="movie-info"><span class="movie-date">Thu</span><span class="movie-time-text">12:00PM</span></div>
                  <div class="movie-info"><span class="movie-date">Fri</span><span class="movie-time-text">12:00PM</span></div>
                  <div class="movie-info"><span class="movie-date">Sat</span><span class="movie-time-text">09:00PM</span></div>
                  <div class="movie-info"><span class="movie-date">Sun</span><span class="movie-time-text">09:00PM</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="synopsis">

          <div class="synopsis-box" id='synopsisACT'>
            <a class="anchor" id="synopsisACT-anchor"></a>
            <div>
              <h3><span>Avengers: Endgame</span><img src="../../media/classification-m.svg" alt="m-movie-rating"></h3>
            </div>
            <div class="synopsis-box-row">
              <div class="synopsis-box-column-1">
                <div class="synopsis-plot">
                  <div class="synopsis-plot-description">
                    Plot description
                  </div>
                  <span class="content-font">Avengers: Endgame picks up after the events of Avengers: Infinity War, which saw the Avengers divided and defeated. Thanos won the day and used the Infinity Stones to snap away half of all life in the universe. Only the original Avengers - Iron Man, Captain America, Thor, Hulk, Black Widow, and Hawkeye remain, along with some key allies like War Machine, Ant-Man, Rocket Raccoon, Nebula, and Captain Marvel. Each of the survivors deals with the fallout from Thanos' decimation in different ways, but when an opportunity presents itself to potentially save those who vanished, they all come together and set out to defeat Thanos, once and for all.</span>
                  <div class="synopsis-plot-author">
                    <em>&mdash;<a href="https://www.imdb.com/search/title/?plot_author=Santhosh&view=simple&sort=alpha&ref_=ttpl_pl_4">Santhosh</a></em>
                  </div>
                </div>
              </div>
              <div class="synopsis-box-column-2">
                <div class="synopsis-trailer">
                  <iframe src="https://www.youtube.com/embed/GxmDE6q7XBE?controls=0"></iframe>
                </div>
              </div>
            </div>
            <div class="synopsis-booking-row">
              <div class="synopsis-booking-column-1">
                <div class="synopsis-plot-description">
                  Make a Booking:
                </div>
              </div>
              <div class="synopsis-booking-column-2">
                <div class="synopsis-booking-btn-list">
                  <div id='datetimeACT'>
                    <div class="synopsis-booking-movie-info disabled-btn" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking();'><span>Mon<span>N/A</span></span></div>
                    <div class="synopsis-booking-movie-info disabled-btn" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Tue<span>N/A</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Wed<span>09:00PM</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Thu<span>09:00PM</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Fri<span>09:00PM</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Sat<span>06:00PM</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Sun<span>06:00PM</span></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="synopsis-box" id='synopsisRMC'>
            <a class="anchor" id="synopsisRMC-anchor"></a>
            <div>
              <h3><span>Top End Wedding</span><img src="../../media/classification-ma.svg" alt="ma-movie-rating"></h3>
            </div>
            <div class="synopsis-box-row">
              <div class="synopsis-box-column-1">
                <div class="synopsis-plot">
                  <div class="synopsis-plot-description">
                    Plot description
                  </div>
                  <span class="content-font">Lauren and Ned are engaged, they are in love, and they have just ten days to find Lauren's mother who has gone AWOL somewhere in the remote far north of Australia, reunite her parents and pull off their dream wedding. Lauren and Ned are engaged, they are in love, and they have just ten days to find Lauren's mother who has gone AWOL somewhere in the remote far north of Australia, reunite her parents and pull off their dream wedding.</span>
                  <div class="synopsis-plot-author">
                    <em>&mdash;<a href="/search/title?plot_author=Production&amp;view=simple&amp;sort=alpha&amp;ref_=ttpl_pl_0">Production</a></em>
                  </div>
                </div>
              </div>
              <div class="synopsis-box-column-2">
                <div class="synopsis-trailer">
                  <iframe src="https://www.youtube.com/embed/J4V43Gjr-dI?controls=0"></iframe>
                </div>
              </div>
            </div>
            <div class="synopsis-booking-row">
              <div class="synopsis-booking-column-1">
                <div class="synopsis-plot-description">
                  Make a Booking:
                </div>
              </div>
              <div class="synopsis-booking-column-2">
                <div class="synopsis-booking-btn-list">
                  <div id='datetimeRMC'>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Mon<span>06:00PM</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Tue<span>06:00PM</span></span></div>
                    <div class="synopsis-booking-movie-info disabled-btn" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Wed<span>N/A</span></span></div>
                    <div class="synopsis-booking-movie-info disabled-btn" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Thu<span>N/A</span></span></div>
                    <div class="synopsis-booking-movie-info disabled-btn" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Fri<span>N/A</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Sat<span>03:00PM</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Sun<span>03:00PM</span></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="synopsis-box" id='synopsisANM'>
            <a class="anchor" id="synopsisANM-anchor"></a>
            <div>
              <h3><span>Dumbo</span><img src="../../media/classification-pg.svg" alt="pg-movie-rating"></h3>
            </div>
            <div class="synopsis-box-row">
              <div class="synopsis-box-column-1">
                <div class="synopsis-plot">
                  <div class="synopsis-plot-description">
                    Plot description
                  </div>
                  <span class="content-font">Struggling circus owner Max Medici enlists former star Holt Farrier and his children Milly and Joe to care for Dumbo, a baby elephant whose oversized ears make him the circus' laughing stock. But when they discover that Dumbo can fly, the circus makes an incredible comeback, attracting persuasive entrepreneur V.A. Vandevere, who recruits Dumbo for his newest, larger-than-life entertainment venture, Dreamland. Dumbo soars to new heights alongside a charming and spectacular aerial artist, Colette Marchant, until Holt learns that Dreamland hides dark secrets beneath its shiny veneer.</span>
                  <div class="synopsis-plot-author">
                    <em>&mdash;<a href="https://www.imdb.com/search/title/?plot_author=Santhosh&view=simple&sort=alpha&ref_=ttpl_pl_4">Santhosh</a></em>
                  </div>
                </div>
              </div>
              <div class="synopsis-box-column-2">
                <div class="synopsis-trailer">
                  <iframe src="https://www.youtube.com/embed/UoA5z8OhuU8?controls=0"></iframe>
                </div>
              </div>
            </div>
            <div class="synopsis-booking-row">
              <div class="synopsis-booking-column-1">
                <div class="synopsis-plot-description">
                  Make a Booking:
                </div>
              </div>
              <div class="synopsis-booking-column-2">
                <div class="synopsis-booking-btn-list">
                  <div id='datetimeANM'>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Mon<span>12:00PM</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Tue<span>12:00PM</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Wed<span>06:00PM</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Thu<span>06:00PM</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Fri<span>06:00PM</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Sat<span>12:00PM</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Sun<span>12:00PM</span></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="synopsis-box" id='synopsisAHF'>
            <a class="anchor" id="synopsisAHF-anchor"></a>
            <div>
              <h3><span>The Happy Prince</span><img src="../../media/classification-r.svg" alt="r-movie-rating"></h3>
            </div>
            <div class="synopsis-box-row">
              <div class="synopsis-box-column-1">
                <div class="synopsis-plot">
                  <div class="synopsis-plot-description">
                    Plot description
                  </div>
                  <span class="content-font">In a cheap Parisian hotel room Oscar Wilde lies on his death bed. The past floods back, taking him to other times and places. In a cheap Parisian hotel room Oscar Wilde lies on his death bed. The past floods back, taking him to other times and places. In a cheap Parisian hotel room Oscar Wilde lies on his death bed. The past floods back, taking him to other times and places.</span>
                  <div class="synopsis-plot-author">
                    <em>&mdash;<a href="https://www.betafilm.com/en/product/d/the-happy-prince.html">Beta Film GmbH</a></em>
                  </div>
                </div>
              </div>
              <div class="synopsis-box-column-2">
                <div class="synopsis-trailer">
                  <iframe src="https://www.youtube.com/embed/tXANCJQkUIE?controls=0"></iframe>
                </div>
              </div>
            </div>
            <div class="synopsis-booking-row">
              <div class="synopsis-booking-column-1">
                <div class="synopsis-plot-description">
                  Make a Booking:
                </div>
              </div>
              <div class="synopsis-booking-column-2">
                <div class="synopsis-booking-btn-list">
                  <div id='datetimeAHF'>
                    <div class="synopsis-booking-movie-info disabled-btn" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Mon<span>N/A</span></span></div>
                    <div class="synopsis-booking-movie-info disabled-btn" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Tue<span>N/A</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Wed<span>12:00PM</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Thu<span>12:00PM</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Fri<span>12:00PM</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Sat<span>09:00PM</span></span></div>
                    <div class="synopsis-booking-movie-info" onclick='updateBookingForm(); clearErrors(); setValueForMonth(); setValueForYear(); moveToBooking()'><span>Sun<span>09:00PM</span></span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <form id='bookingForm' action="https://titan.csit.rmit.edu.au/~e54061/wp/lunardo-formtest.php" method="POST" onsubmit="return formValidate();">
          <a class="anchor" id="booking-anchor"></a>
          <h3 id='bookingFormHeading'>Movie Title - Day - Time</h3>
          <input type="hidden" name="movie[id]" id="movie-id" value="">
          <input type="hidden" name="movie[day]" id="movie-day" value="">
          <input type="hidden" name="movie[hour]" id="movie-hour" value="">
          <div class="row">
            <div class="column">

              <fieldset>
                <legend>Standard</legend>
                <div class="form-group w1">
                  <label for="seats-STA">Adults</label>
                  <select name="seats[STA]" id="seats-STA" class='seatsForm' onchange="calcPrice();">
                  </select>
                </div>
                <div class="form-group w1">
                  <label for="seats-STP">Concession</label>
                  <select name="seats[STP]" id="seats-STP" class='seatsForm' onchange="calcPrice();">
                  </select>
                </div>
                <div class="form-group w1">
                  <label for="seats-STC">Children</label>
                  <select name="seats[STC]" id="seats-STC" class='seatsForm' onchange="calcPrice();">
                  </select>
                </div>
              </fieldset>

              <fieldset>
                <legend>First Class</legend>
                <div class="form-group w1">
                  <label for="seats-FCA">Adults</label>
                  <select name="seats[FCA]" id="seats-FCA" class='seatsForm' onchange="calcPrice(); ">
                  </select>
                </div>
                <div class="form-group w1">
                  <label for="seats-FCP">Concession</label>
                  <select name="seats[FCP]" id="seats-FCP" class='seatsForm' onchange="calcPrice(); ">
                  </select>
                </div>
                <div class="form-group w1">
                  <label for="seats-FCC">Children</label>
                  <select name="seats[FCC]" id="seats-FCC" class='seatsForm' onchange="calcPrice();">
                  </select>
                </div>
              </fieldset>

              <div class="form-total-box">
                <label>Total $ </label>
                <span id='finalPrice'>0.00 $</span>
                <div class='errors' id='seatError'></div>
              </div>
            </div>
            <div class="column">
              <div class="form-container">
                <div class="form-group w2">
                  <label class="form-label" for="cust-name">Name</label>
                  <input class="form-control" type="text" placeholder="Enter your name" name="cust[name]" id="cust-name">
                  <span class='errors' id='nameError'></span>
                </div>
                <div class="form-group w2">
                  <label class="form-label" for="cust-email">Email</label>
                  <input class="form-control" type="email" placeholder="Enter your email" name="cust[email]" id="cust-email">
                  <span class='errors' id='emailError'></span>
                </div>
                <div class="form-group w2">
                  <label class="form-label" for="cust-mobile">Mobile</label>
                  <input class="form-control" type="tel" placeholder="Enter your phone number" name="cust[mobile]" id="cust-mobile">
                  <span class='errors' id='mobileError'></span>
                </div>
                <div class="form-group w2">
                  <label class="form-label" for="cust-card">Credit Card</label>
                  <input class="form-control" type="text" placeholder="Enter Card Number" name="cust[card]" id="cust-card">
                  <span class='errors' id='cardError'></span>
                </div>
                <div class="form-group w2">
                  <label class="form-label">Expiry</label>
                  <select name="cust[expiryMonth]" id="cust-expiryMonth" onchange="limitYear()">
                  </select>
                  <select name="cust[expiryYear]" id="cust-expiryYear" onchange="limitMonth()">
                  </select>
                  <span class='errors' id='expiryError'></span>
                </div>
              </div>
              <div class="form-btn-container">
                <input class="form-control-btn" type="submit" value="Order" name="order[submit]" id="order-submit">
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!-- End of now-showing -->

    <!-- prices -->
    <section id="prices">
      <a class="anchor" id="to-prices"></a>
      <div class="container">

        <h2>Prices</h2>

        <div class="prices-table">
          <div class="prices-table-body">
            <div class="prices-table-row">
              <div class="prices-table-cell" id="prices-table-corner-top-left">Seat Type</div>
              <div class="prices-table-cell">Monday & Wenesday<span id="prices-table-line-break">Weekdays - 12pm</span></div>
              <div class="prices-table-cell" id="prices-table-corner-top-right">All other times</div>
            </div>
            <div class="prices-table-row">
              <div class="prices-table-cell">Standard Adult</div>
              <div class="prices-table-cell"><span>$</span>14.00</div>
              <div class="prices-table-cell"><span>$</span>19.80</div>
            </div>
            <div class="prices-table-row">
              <div class="prices-table-cell">Standard Concession</div>
              <div class="prices-table-cell"><span>$</span>12.50</div>
              <div class="prices-table-cell"><span>$</span>17.50</div>
            </div>
            <div class="prices-table-row">
              <div class="prices-table-cell">Standard Child</div>
              <div class="prices-table-cell"><span>$</span>11.00</div>
              <div class="prices-table-cell"><span>$</span>15.30</div>
            </div>
            <div class="prices-table-row">
              <div class="prices-table-cell">First Class Adult</div>
              <div class="prices-table-cell"><span>$</span>24.00</div>
              <div class="prices-table-cell"><span>$</span>30.00</div>
            </div>
            <div class="prices-table-row">
              <div class="prices-table-cell">First Class Concession</div>
              <div class="prices-table-cell"><span>$</span>22.50</div>
              <div class="prices-table-cell"><span>$</span>27.00</div>
            </div>
            <div class="prices-table-row">
              <div class="prices-table-cell" id="prices-table-corner-bottom-left">First Class Child</div>
              <div class="prices-table-cell"><span>$</span>21.00</div>
              <div class="prices-table-cell" id="prices-table-corner-bottom-right"><span>$</span>24.00</div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End of prices -->

  </main>

  <!-- footer -->
  <footer>
    <div class="contact-info">
      <div class="contact-info-column">
        <p><img src="../../media/mail.svg" alt="mail" /><span class="contact-field">Email:</span><a href="mailto:lunardo@example.com"> lunardo@example.com</a>.</p>
        <p><img src="../../media/phone.svg" alt="phone" /><span class="contact-field">Phone:</span><a href="tel:012-345-6789"> +012-345-6789</a>.</p>
      </div>
      <div class="contact-info-column">
        <p><img src="../../media/location.svg" alt="location" /><span class="contact-field">Address:</span> 1 Lunar Street, VIC, Melbourne.</p>
        <p><img src="../../media/plane.svg" alt="github" /><span class="contact-field">GitHub:</span><a href="https://github.com/s3678491/wp"> Go-to-GitHub</a>.</p>
      </div>
    </div>

    <div class="copy-right">
      <div>
        &copy;
        <script>
          document.write(new Date().getFullYear());
        </script>Tuan Vu - S3678491/Khoa Vu - S3678490. Last modified <?= date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
      </div>

      <div>
        Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.
      </div>

      <div>
        <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
      </div>
    </div>
  </footer>
  <!-- End of footer -->

  <script src="../a3/navProgrammingScript.js"></script>
</body>

</html>
