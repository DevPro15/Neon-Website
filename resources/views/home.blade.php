@extends('parent.master')

@section('content')

     <section class="header-bg-parent">
        <div class="header-col1">
            <h5 style="color:black;">WELCOME</h5>
            <h2 style="color:black;">Digital Products</h2>
            <h2 style="color:black;" class="typewrite" data-period="1000" data-type='[ "for Business", "to sell online", "for your ideas"]'></h2>
            <p style="color:black;">Ensuring the best return on investment for your
                bespoke SEO campaign requirement.</p>
            <button style="color:black;" class="common-btn" type="button">CONTACT TODAY</button>
        </div>
        <!--header-col1-->
        <div class="header-col2">

        </div>
        <!--header-col2-->
        <div class="clear"></div>
        <!--clear-->
        <img class="hedaer-bg-par-img" src="images/corner-img.png" class="img-responsive" alt="corner" />
    </section>
    <!--header-bg-parent-->

    <section id="feature-sec">
        <div class="text-center">
            <h5 style="color:black;" class="common-h5">CARE FEATURES</h5>
            <h2 style="color:black;" class="common-h2">Provide Awesome Service With Our Tools</h2>
        </div>
        <!--text-center-->
        <section class="faeture-col-par">
            <div class="container">
                <div class="feature-col">
                    <h3>Discover, Explore the Product</h3>
                    <img src="images/home-faeture-img/service_img1.png" class="img-responsive" alt="service" />
                    <h4>Discover, Explore &amp; understanding the product</h4>
                    <!--                </div>feature-col-->
                </div>
                <!--feature-col-->
                <div class="feature-col">
                    <h3>Discover, Explore the Product</h3>
                    <img src="images/home-faeture-img/service_img2.png" class="img-responsive" alt="service" />
                    <h4>Discover, Explore &amp; understanding the product</h4>
                    <!--                </div>feature-col-->
                </div>
                <!--feature-col-->
                <div class="feature-col">
                    <h3>Discover, Explore the Product</h3>
                    <img src="images/home-faeture-img/service_img3.png" class="img-responsive" alt="service" />
                    <h4>Discover, Explore &amp; understanding the product</h4>
                    <!--                </div>feature-col-->
                </div>
                <!--feature-col-->
                <div class="feature-col">
                    <h3>Discover, Explore the Product</h3>
                    <img src="images/home-faeture-img/service_img4.png" class="img-responsive" alt="service" />
                    <h4>Discover, Explore &amp; understanding the product</h4>
                    <!--                </div>feature-col-->
                </div>
                <!--feature-col-->
                <div class="clear"></div>
            </div>
        </section>

        <section id="why-choose-us">
            <div class="container">
                <div class="why-choose-col">
                    <h5 style="color:black;" class="common-h5">WHY CHOOSE US</h5>
                    <h2 style="color:black;" class="common-h2">Boosts Your Website Traffic!</h2>
                    <p style="color:black;">We are passionate about our work. Our designers stay ahead of the curve to provide engaging and user-friendly website designs to make your business stand out. Our developers are committed to maintaining the highest web standards so that your site will withstand the test of time. We care about your business, which is why we work with you.</p>
                    <a href="{{ url('/discover') }}"><button style="color:black;" class="common-btn" type="button" }}>DISCOVER MORE</button></a>
                </div>
                <div class="count-col">
                    <div class="stat">
                        <div class="count-sub-col">
                            <div class="milestone-counter">
                                <span style="color:black;" class="stat-count highlight">122</span>
                                <div style="color:black;" class="milestone-details">Happy Customers</div>
                            </div>
                            <!--milestone-counter-->
                        </div>
                        <!--count-sub-col-->
                        <div class="count-sub-col">
                            <div class="milestone-counter">
                                <span style="color:black;" class="stat-count highlight">100</span>
                                <div style="color:black;" class="milestone-details">Ordered Coffee's</div>
                            </div>
                            <!--milestone-counter-->
                        </div>
                        <!--count-sub-col-->
                        <div class="count-sub-col">
                            <div class="milestone-counter">
                                <span style="color:black;" class="stat-count highlight">140</span>
                                <div style="color:black;" class="milestone-details">Awards Win</div>
                            </div>
                            <!--milestone-counter-->
                        </div>
                        <!--count-sub-col-->
                    </div>
                    <!--stat-->
                    <div class="stat-info-par">
                        <div class="stat-info-sub-par">
                            <div  class="stat-info-div">
                                <p style="color:black;">Men and women, committed to better protect you around the world.</p>
                            </div>
                            <!--stat-info-div-->
                        </div>
                        <!--stat-info-sub-par-->
                        <div class="stat-info-sub-par">
                            <div class="stat-info-div">
                                <p style="color:black;">Men and women, committed to better protect you around the world.</p>
                            </div>
                            <!--stat-info-div-->
                        </div>
                        <!--stat-info-sub-par-->
                        <div class="stat-info-sub-par">
                            <div class="stat-info-div">
                                <p style="color:black;">Men and women, committed to better protect you around the world.</p>
                            </div>
                            <!--stat-info-div-->
                        </div>
                        <!--stat-info-sub-par-->
                    </div>
                    <!--stat-info-par-->
                </div>
                <!--count-col-->
                <div class="clear"></div>
            </div>
            <!--container-->
        </section>

        <section id="expand">
            <div class="text-center">
                <h5 style="color:black;" class="common-h5">EXPERINCE</h5>
                <h2 style="color:black;" class="common-h2">Pay for Qualified Traffic</h2>
            </div>
            <!--text-center-->
            <div class="expand-img-col">
                <div class="expand-img">
                    <img src="images/expand-home-img.png" alt="expand" class="img-responsive" />
                    <div class="expand-img-info">
                        <i class="fa fa-mobile-phone"></i>
                        <h2 style="color:white;">Expand Your <br>Digital Presence</h2>
                        <p style="color:white;">Your app is your tool for better communicatio with your followers.</p>
                        <a style="color:white;" href="#">Get In Touch <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!--expand-img-col-->
            <div class="expand-img-info-col">
                <div class="progress-bar-col">
                    <div class="col-sm-4">
                        <div class="progressbar">
                            <div class="second circle" data-percent="77">
                                <strong></strong>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="progressbar">
                            <div class="second circle" data-percent="55">
                                <strong></strong>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="progressbar">
                            <div class="second circle" data-percent="100">
                                <strong></strong>

                            </div>
                        </div>
                    </div>
                </div>
                <!--progress-bar-col-->
                <div class="progress-info-col">
                    <div class="progress-info">
                        <h3 style="color:black;">Creative Approach</h3>
                        <p style="color:black;">Ea pro tibique comprehensam, sed ea verear numquam molestie. Nam te omittam comprehensam.</p>
                    </div>
                    <!--progress-info-->
                    <div class="progress-info">
                        <h3 style="color:black;">Creative Approach</h3>
                        <p style="color:black;">Ea pro tibique comprehensam, sed ea verear numquam molestie. Nam te omittam comprehensam.</p>
                    </div>
                    <!--progress-info-->
                    <div class="progress-info">
                        <h3 style="color:black;">Creative Approach</h3>
                        <p style="color:black;">Ea pro tibique comprehensam, sed ea verear numquam molestie. Nam te omittam comprehensam.</p>
                    </div>
                    <!--progress-info-->
                </div>
                <!--progress-info-col-->
            </div>
            <!--expand-img-info-col-->
            <div class="clear"></div>
            <!--clear-->
        </section>

        <Section id="faq-par">
            <div class="container">
                <div class="faq-que-col">
                    <h5 style="color:black;" class="common-h5">EXPERINCE</h5>
                    <h2 style="color:black;" class="common-h2">Pay for Qualified Traffic</h2>
                    <div id="faq-accordion">


                        <h3 style="color:black;">Why do we use it ?</h3>
                        <p style="color:black;">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>

                        <h3 style="color:black;">Who we use it ?</h3>
                        <p style="color:black;">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>

                        <h3 style="color:black;">can we use it ?</h3>
                        <p style="color:black;">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>

                        <h3 style="color:black;">What Three Solutions are ?</h3>
                        <p style="color:black;">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>

                        <h3 style="color:black;">Do or Not ?</h3>
                        <p style="color:black;">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>

                    </div>
                </div>
                <!--faq-que-col-->
                <div class="faq-bg-col">
                    <div class="faq-img-par">
                        <img src="images/home-faq.png" alt="faq" class="img-responsive" />
                        <div class="faq-img-info">
                            <i class="fa fa-lightbulb-o"></i>
                            <h2 style="color:white;">Have a project in mind? <br>Let’s get to work.</h2>
                            <p style="color:white;">Find out how it works and ask any <br> questions you may have.</p>
                            <a style="color:white;" href="#">Get In Touch <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                        <!--faq-img-info-->
                    </div>
                    <!--faq-img-par-->
                </div>
                <!--faq-bg-col-->
                <div class="clear"></div>
            </div>
            <!--container-->
        </Section>

        <Section id="project">
            <div class="text-center">
                <h5 style="color:black;" class="common-h5">FEATURED PROJECTS</h5>
                <h2 style="color:black;" class="common-h2">Our Case Studies</h2>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/portfolio/portfolio-one.jpg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3 style="color:white;">SEO</h3>
                            <p style="color:white;">Marketing</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/portfolio/portfolio-two.jpg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3 style="color:white;">SEO</h3>
                            <p style="color:white;">Marketing</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/portfolio/portfolio-three.jpg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3 style="color:white;">SEO</h3>
                            <p style="color:white;">Marketing</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/portfolio/portfolio-four.jpg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3 style="color:white;">SEO</h3>
                            <p style="color:white;">Marketing</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/portfolio/portfolio-one.jpg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3 style="color:white;">SEO</h3>
                            <p style="color:white;">Marketing</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/portfolio/portfolio-two.jpg" class="img-responsive" />
                        <div class="owl-img-info">
                            <h3 style="color:white;">SEO</h3>
                            <p style="color:white;">Marketing</p>
                        </div>
                    </div>
                </div>

            </div>
        </Section>

        <section id="price-table">
            <div class="text-center">
                <h5 style="color:black;" class="common-h5">PRICING PLAN</h5>
                <h2 style="color:black;" class="common-h2">The Best Solutions for Our Clients</h2>
            </div>
            <div class="basic-price-col">
                <div class="basic-price-info">
                    <h4 style="color:black;">Basic Plan</h4>
                    <div class="price">
                        <p style="color:black;">$2450</p>
                    </div>
                    <!--price-->
                    <div class="price-list">
                        <ul>
                            <li>SEO Audits</li>
                            <li>SEO Audits</li>
                            <li>SEO Audits</li>
                            <li>SEO Audits</li>
                            <li>SEO Audits</li>
                        </ul>
                    </div>
                    <!--price-list-->
                    <button type="button" class="price-btn">Get Started</button>
                </div>
                <!--basic-price-info-->
            </div>
            <!--basic-price-col-->
            <div class="basic-price-col rec-price">
                <div class="basic-price-info">
                    <h4>Standart Plan</h4>
                    <div class="price">
                        <p>$2450</p>
                    </div>
                    <!--price-->
                    <div class="price-list">
                        <ul>
                            <li>SEO Audits</li>
                            <li>SEO Audits</li>
                            <li>SEO Audits</li>
                            <li>SEO Audits</li>
                            <li>SEO Audits</li>
                        </ul>
                    </div>
                    <!--price-list-->
                    <button type="button" class="price-btn">Get Started</button>
                </div>
                <!--basic-price-info-->
            </div>
            <!--basic-price-col-->
            <div class="basic-price-col">
                <div class="basic-price-info">
                    <h4>Premium Plan</h4>
                    <div class="price">
                        <p>$2450</p>
                    </div>
                    <!--price-->
                    <div class="price-list">
                        <ul>
                            <li>SEO Audits</li>
                            <li>SEO Audits</li>
                            <li>SEO Audits</li>
                            <li>SEO Audits</li>
                            <li>SEO Audits</li>
                        </ul>
                    </div>
                    <!--price-list-->
                    <button type="button" class="price-btn">Get Started</button>
                </div>
                <!--basic-price-info-->
            </div>
            <!--basic-price-col-->
            <div class="clear"></div>
        </section>

        <section id="blog">
            <div class="text-center">
                <h5 style="color:black;" class="common-h5">BLOG</h5>
                <h2 style="color:black;" class="common-h2">Read Our Lates News</h2>
            </div>
            <div class="container">
                <div class="blog-col">
                    <img src="images/blog/blog-1.jpg" alt="blog1" class="img-responsive" />
                    <span style="color:black;">May 16 2020</span>
                    <h3 style="color:black;">How to Increase Your ROI Through scientific SEM?</h3>
                    <a href="#">Read More</a>
                </div>
                <!--blog-col-->
                <div class="blog-col">
                    <img src="images/blog/blog-2.jpg" alt="blog1" class="img-responsive" />
                    <span style="color:black;">May 16 2020</span>
                    <h3 style="color:black;">How to Increase Your ROI Through scientific SEM?</h3>
                    <a href="#">Read More</a>
                </div>
                <!--blog-col-->
                <div class="blog-col">
                    <img src="images/blog/blog-3.jpg" alt="blog1" class="img-responsive" />
                    <span style="color:black;">May 16 2020</span>
                    <h3 style="color:black;">How to Increase Your ROI Through scientific SEM?</h3>
                    <a href="#">Read More</a>
                </div>
                <!--blog-col-->
                <div class="clear"></div>
            </div>
            <!--container-->
        </section>

        <Section id="contact">
            <div class="container">
                <div class="form-par">
                    <h2>Get IN Touch With US !</h2>
                    <form>
                        <input type="text" placeholder="Your Name" class="f-name form-com" />
                        <input type="email" placeholder="Email" class="em-input form-com" />
                        <input type="tel" id="phone" name="phone" class="phone-input form-com" placeholder="Mobile No" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                        <input type="text" placeholder="Website" class="web-input form-com" />
                        <input type="submit" value="submit" class="submit-btn" />
                    </form>
                </div>
            </div>
            <!--container-->
        </Section>

        @endsection
