<?php

  include_once "common/header.php";
  // echo "<pre>";
  // var_dump($pdata[0]->title);
?>

    <div id="page-wraper">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image">
              <a href="#"><img src="portfolio/image/profile.png" alt="profile" /></a>
            </div>
            <div class="author-content">
              <h4><?php echo $pdata[0]->pname; ?></h4>
              <span><?php echo $pdata[0]->title; ?></span>
            </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section1">About Me</a></li>
                <li><a href="#section2">What I’m good at</a></li>
                <li><a href="#section3">My Work</a></li>
                <li><a href="#section4">Contact Me</a></li>
              </ul>
            </nav>
            <div class="social-network">
              <ul class="soial-icons">              
                <li>
                  <a href="https://www.linkedin.com/in/ankul-kashyap-619a0a155/"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="https://www.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://github.com/Geekyankul"><i class="fa fa-github" aria-hidden="true"></i></i></a>
                </li>
                <li>
                  <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                </li>
              </ul>
            </div>
            <div class="copyright-text">
              <p>Copyright 2019 Reflux Design</p>
            </div>
          </div>
        </div>
      </div>

      <section class="section about-me" data-section="section1">
        <div class="container">
          <div class="section-heading">
            <h2>About Me</h2>
            <div class="line-dec"></div>
            <span>“Software always remain softly for End users! But sometimes hardly to developers!”</span>
          </div>
          <div class="left-image-post">
            <div class="row">
              <div class="col-md-6">
                <div class="left-image">
                  <img src="assets/images/left-image.jpg" alt="" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-text">
                  <h4>Reflux HTML CSS Template</h4>
                  <p>
                    Donec tristique feugiat lacus, at sollicitudin nunc euismod
                    sed. Mauris viverra, erat non sagittis gravida, elit dui
                    mollis ante, sit amet eleifend purus ligula eget eros. Sed
                    tincidunt quam vitae neque pharetra dignissim eget ut
                    libero.
                  </p>
                  <div class="white-button">
                    <a href="#">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="right-image-post">
            <div class="row">
              <div class="col-md-6">
                <div class="left-text">
                  <h4>Sed sagittis rhoncus velit</h4>
                  <p>
                    Pellentesque habitant morbi tristique senectus et netus et
                    malesuada fames ac turpis egestas. Vestibulum fermentum
                    eleifend nibh, vitae sodales elit finibus pretium.
                    Suspendisse potenti. Ut sollicitudin risus a sollicitudin
                    semper.
                  </p>
                  <div class="white-button">
                    <a href="#">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-image">
                  <img src="assets/images/right-image.jpg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section my-services" data-section="section2">
        <div class="container">
          <div class="section-heading">
            <h2>What I’m good at?</h2>
            <div class="line-dec"></div>
            <span
              >Curabitur leo felis, rutrum vitae varius eu, malesuada a tortor.
              Vestibulum congue leo et tellus aliquam, eu viverra nulla semper.
              Nullam eu faucibus diam. Donec eget massa ante.</span
            >
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service-item">
                <div class="first-service-icon service-icon"></div>
                <h4>HTML5 &amp; CSS3</h4>
                <p>
                  Phasellus non convallis dolor. Integer tempor hendrerit arcu
                  at bibendum. Sed ac ante non metus vehicula congue quis eget
                  eros.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="second-service-icon service-icon"></div>
                <h4>Creative Ideas</h4>
                <p>
                  Proin lacus massa, eleifend sed fermentum in, dignissim vel
                  metus. Nunc accumsan leo nec felis porttitor, ultricies
                  faucibus purus mollis.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="third-service-icon service-icon"></div>
                <h4>Easy Customize</h4>
                <p>
                  Integer suscipit condimentum aliquet. Nam quis risus metus.
                  Nullam faucibus quam eget arcu pretium tincidunt. Nam libero
                  dui.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="fourth-service-icon service-icon"></div>
                <h4>Admin Dashboard</h4>
                <p>
                  Vivamus et dui a massa venenatis fringilla. Proin lacus massa,
                  eleifend sed fermentum in, dignissim vel metus. Nunc accumsan
                  leo nec felis porttitor.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section my-work" data-section="section3">
        <div class="container">
          <div class="section-heading">
            <h2>My Work</h2>
            <div class="line-dec"></div>
            <span
              >Aenean sollicitudin ex mauris, lobortis lobortis diam euismod sit
              amet. Duis ac elit vulputate, lobortis arcu quis, vehicula
              mauris.</span
            >
          </div>
          <div class="row">
            <div class="isotope-wrapper">
              <form class="isotope-toolbar">
                <label
                  ><input
                    type="radio"
                    data-type="*"
                    checked=""
                    name="isotope-filter"
                  />
                  <span>all</span></label
                >
                <label
                  ><input
                    type="radio"
                    data-type="people"
                    name="isotope-filter"
                  />
                  <span>people</span></label
                >
                <label
                  ><input
                    type="radio"
                    data-type="nature"
                    name="isotope-filter"
                  />
                  <span>nature</span></label
                >
                <label
                  ><input
                    type="radio"
                    data-type="animals"
                    name="isotope-filter"
                  />
                  <span>animals</span></label
                >
              </form>
              <div class="isotope-box">
                <div class="isotope-item" data-type="nature">
                  <figure class="snip1321">
                    <img
                      src="assets/images/portfolio-01.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/portfolio-01.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>First Title</h4>
                      <span>free to use our template</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="people">
                  <figure class="snip1321">
                    <img
                      src="assets/images/portfolio-02.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/portfolio-02.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Second Title</h4>
                      <span>please tell your friends</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="animals">
                  <figure class="snip1321">
                    <img
                      src="assets/images/portfolio-03.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/portfolio-03.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Item Third</h4>
                      <span>customize anything</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="people">
                  <figure class="snip1321">
                    <img
                      src="assets/images/portfolio-04.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/portfolio-04.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Item Fourth</h4>
                      <span>Re-distribution not allowed</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="nature">
                  <figure class="snip1321">
                    <img
                      src="assets/images/portfolio-05.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/portfolio-05.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Fifth Awesome</h4>
                      <span>Ut sollicitudin risus</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="animals">
                  <figure class="snip1321">
                    <img
                      src="assets/images/portfolio-06.jpg"
                      alt="sq-sample26"
                    />
                    <figcaption>
                      <a
                        href="assets/images/portfolio-06.jpg"
                        data-lightbox="image-1"
                        data-title="Caption"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Awesome Sixth</h4>
                      <span>Donec eget massa ante</span>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section contact-me" data-section="section4">
        <div class="container">
          <div class="section-heading">
            <h2>Contact Me</h2>
            <div class="line-dec"></div>
            <span></span
            >
          </div>
          <div class="row">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input
                          name="name"
                          type="text"
                          class="form-control"
                          id="name"
                          placeholder="Your name..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input
                          name="email"
                          type="text"
                          class="form-control"
                          id="email"
                          placeholder="Your email..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input
                          name="subject"
                          type="text"
                          class="form-control"
                          id="subject"
                          placeholder="Subject..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea
                          name="message"
                          rows="6"
                          class="form-control"
                          id="message"
                          placeholder="Your message..."
                          required=""
                        ></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">
                          Send Message
                        </button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
<?php
    include_once "common/footer.php";
?>