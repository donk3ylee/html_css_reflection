<?php 
include_once($_SERVER['DOCUMENT_ROOT'] .'/header.php'); 
?>
<main>
    <div class="wrapper-hero-slider">
        <div id="hero-slider">
            <div class="owl-carousel owl-theme">
                <div class="slider-design">
                    <h1 class="hero-item">Web Design</h1>
                    <p class="hero-item">For businesses looking to make a strong<br>and effective first impression.</p>
                    <a class="hero-item">Find Out More&nbsp;</a>
                </div>
                <div class="slider-support">
                    <h1 class="hero-item">IT Support</h1>
                    <p class="hero-item">Fast and cost-effective IT support<br>services for your business.</p>
                    <a class="hero-item">Find Out More&nbsp;</a>
                </div>
                <div class="slider-telecom">
                    <h1 class="hero-item">Telecoms Services</h1>
                    <p class="hero-item">A new approach to connectivity, see how<br>we can help your business.</p>
                    <a class="hero-item">Find Out More&nbsp;</a>
                </div>
                <div class="slider-software">
                    <h1 class="hero-item">Bespoke Software</h1>
                    <p class="hero-item">Bring your business together<br>with solutions that grow with you.</p>
                    <a class="hero-item">Find Out More&nbsp;</a>
                </div>
                <div class="slider-marketing">
                    <h1 class="hero-item">Digital Marketing</h1>
                    <p class="hero-item">Generating you new business through<br>results-driven marketing activities.</p>
                    <a class="hero-item">Find Out More&nbsp;</a>
                </div>
                <div class="slider-security">
                    <h1 class="hero-item">Cyber Security</h1>
                    <p class="hero-item">Keeping businesses and their customers<br>sensitive information protected.</p>
                    <a class="hero-item">Find Out More&nbsp;</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper-articles">  
        <div id="articles" class="row g-4">
            <div class="col-12 col-lg-4">
                <a href="#">
                    <article class="article-software">
                        <h2>Bespoke software</h2>
                        <div class="hr-dark"></div>
                        <p>Tailored software solutions to improve business productivity and online profits. Our expert team will ensure a software solution.</p>
                        <div class="button">Read More</div>       
                    </article>
                </a>
            </div>
            <div class="col-12 col-lg-4">
                <a href="#">
                    <article class="article-support">
                        <h2>IT Support</h2>
                        <div class="hr-dark"></div>
                        <p>Remotely managed IT services that is catered to your business needs, adds value and reduces costs.</p>
                        <div class="button">Read More</div>       
                    </article>
                </a>
            </div>
            <div class="col-12 col-lg-4">
                <a href="#">
                    <article class="article-marketing">
                        <h2>Digital Marketing</h2>
                        <div class="hr-dark"></div>
                        <p>Driving brand awareness and ROI through creative digital marketing campaigns. We review and monitor your online performances.</p>
                        <div class="button">Read More</div>       
                    </article>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xxl-3">
                <a href="#">
                    <article class="article-telecom">
                        <h2>Telecoms Support</h2>
                        <div class="hr-dark"></div>
                        <p>Stay connected with bespoke telecoms solutions when you need it most.</p>
                        <div class="button">Read More</div>       
                    </article>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xxl-3">
                <a href="#">
                    <article class="article-design">
                        <h2>Web Design</h2>
                        <div class="hr-dark"></div>
                        <p>User-centric design for businesses looking to make a lasting first impression.</p>
                        <div class="button">Read More</div>       
                    </article>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xxl-3">
                <a href="#">
                    <article class="article-security">
                        <h2>Cyber Security</h2>
                        <div class="hr-dark"></div>
                        <p>Ensuring your online business stay secure 24/7, 365 days of the year.</p>
                        <div class="button">Read More</div>       
                    </article>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xxl-3">
                <a href="#">
                    <article class="article-training">
                        <h2>Developer Training</h2>
                        <div class="hr-dark"></div>
                        <p>Have you considered a career in web development but you aren't sure where to start?</p>
                        <div class="button">Read More</div>       
                    </article>
                </a>
            </div>
        </div>
    </div>
    <div class="wrapper-about">
        <div id="about">
            <div  class="col-12 col-xl-6">
                <h1>Netmatters</h1>
                <p><strong>Netmatters Ltd is a leading web design, IT support and digital marketing agency based in Wymondham, Norfolk, with offices in Wymondham and Great Yarmouth.</strong></p>
                <p>Founded in 2008, we work with businesses from a variety of industries to gain new prospects, nurture existing leads and further grow their sales.</p>
                <p>We provide cost effective, reliable solutions to a range of services; from bespoke cloud-based management systems, workflow and IT solutions through to creative website development and integrated digital campaigning.</p>
                <a href="#" class="button">Our Culture</a>
            </div>
        </div>
    </div>
    <div class="wrapper-latest">
        <div id="latest">
            <div>Latest</div>
        </div>
    </div>
    <div class="wrapper-news">
        <div id="news" class="container-fluid">
            <div class="row g-4">
                <?php include_once('./src/getCards.php') ?>
            </div>
        </div>
    </div>
    <div class="wrapper-sponsors">
        <aside id="sponsors" class="d-none d-md-flex">
            <div class="busseys">
                <div class="bubble-busseys">
                    <h3>Busseys</h3>
                    <div class="hr-white"></div>
                    <p>One of the UK's leading Ford dealerships.</p>
                </div>
                <div class="stem-busseys"></div>
                <a href="#">
                    <img src="img/sponsors/busseys.jpg" alt="Busseys Ford Dealership">
                    <img class="over" src="img/sponsors/busseys_c.png" alt="Visit Busseys Ford Dealership">
                </a>
            </div>
            <div class="crane">
                <div class="bubble-crane">
                    <h3>Crane Garden Builders</h3>
                    <div class="hr-white"></div>
                    <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
                </div>
                <div class="stem-crane"></div>
                <a href="#">
                    <img src="img/sponsors/crane.jpg" alt="Crane Garden Buildings">
                    <img class="over" src="img/sponsors/crane_c.png" alt="Visit Crane Garden Buildings">
                </a>
            </div>
            <div class="beat">
                <div class="bubble-beat">
                    <h3>Beat</h3>
                    <div class="hr-white"></div>
                    <p>The UK's eating disorder charity founded in 1989.</p>
                </div>
                <div class="stem-beat"></div>
                <a href="#">
                    <img src="img/sponsors/beat.jpg" alt="Beat - The Uks Eating Disorder Charity">
                    <img class="over" src="img/sponsors/beat_c.png" alt="Visit Beat - The Uks Eating Disorder Charity">
                </a>
            </div>
            <div class="northern">
                <div class="bubble-northern">
                    <h3>Northern Diver</h3>
                    <div class="hr-white"></div>
                    <p>Global water based equipment manufacturers for sport, military, commercial and rescue businesses.</p>
                </div>
                <div class="stem-northern"></div>
                <a href="#">
                    <img src="img/sponsors/northern.jpg" alt="Northern Diver - Open Water Suits and Equipment">
                    <img class="over" src="img/sponsors/northern_c.png" alt="Visit Northern Diver - Open Water Suits and Equipment">
                </a>
            </div>
        </aside>
    </div>
<?php include_once($_SERVER['DOCUMENT_ROOT'] .'/newsletterSignup.php') ?>
</main>
<?php include_once($_SERVER['DOCUMENT_ROOT'] .'/footer.php') ?>