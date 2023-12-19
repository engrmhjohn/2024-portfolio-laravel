@extends('frontend.master')

@section('title')
    Mehedi Hasan John :: Portfolio
@endsection

@section('content')
        <!-- home section start -->
        <section class="home" id="home">
            <div class="container">
                <div class="col-lg-8 col-md-8">
                    <strong> <span class="code_basic_color">class</span> <span class="code_function_color">AboutJOHN</span>
                        { </strong> <br>
                    <strong class="first_block_code"> <span class="code_basic_color">private</span> <span
                            class="color_crimson">name</span>;</strong>
                    <strong class="first_block_code"> <span class="code_basic_color">private</span> <span
                            class="color_crimson">occupation</span>;</strong>
                    <strong class="first_block_code"> <span class="code_basic_color">private</span> <span
                            class="color_crimson">skills</span>;</strong> <br>
    
                    <strong class="first_block_code"> <span class="code_basic_color">public function</span> <span
                            class="color_red">__construct</span> ( <span class="color_crimson">name</span>, <span
                            class="color_crimson">occupation</span>, <span class="color_crimson">skills</span>)
                        {</strong>
                    <strong class="second_block_code"> <span class="color_crimson">this</span>->name = <span
                            class="color_crimson">name</span>;</strong>
                    <strong class="second_block_code"> <span class="color_crimson">this</span>->occupation = <span
                            class="color_crimson">occupation</span>;</strong>
                    <strong class="second_block_code"> <span class="color_crimson">this</span>->skills = <span
                            class="color_crimson">skills</span>;</strong>
                    <strong class="first_block_code"> } </strong> <br>
    
                    <strong class="first_block_code"> <span class="code_basic_color">public function</span> <span
                            class="color_red">introduce</span>() {</strong>
                    <strong class="second_block_code"> <span class="code_basic_color">echo</span> Hello, I'm <span
                            class="color_green typing_name" style="font-size: 20px;"></span> \n;</strong>
                    <strong class="second_block_code"> <span class="code_basic_color">echo</span> I work as a <span
                            class="typing"></span> \n;</strong>
                    <strong class="second_block_code"> <span class="code_basic_color">foreach</span> (<span
                            class="color_crimson">this</span> ->skills <span class="code_basic_color">as</span> <span
                            class="color_crimson">skill</span>) { </strong>
                    <strong class="third_block_code"> <span class="code_basic_color">echo</span> I'm skilled in HTML5,
                        CSS3, Bootstrap5, Laravel, JS, SEO & Digital Marketing. \n;</strong>
                    <strong class="second_block_code">}</strong>
                    <strong class="second_block_code"> <span class="code_basic_color">echo</span> "Talk is cheap, show
                        me code" !\n; </strong>
                    <strong class="first_block_code">}</strong>
                    <strong>}</strong> <br> <br>
    
                    <strong> <span class="color_crimson">john</span> = <span class="code_basic_color">new</span> <span
                            class="color_red">AboutJOHN</span>("Mehedi Hasan John", "Web Designer & Developer", ["PHP",
                        "Laravel", "Digital Marketing"]); </strong> <br>
                    <strong> <span class="color_crimson">john</span>-> <span class="color_red">introduce</span>();</strong>
                </div>
                <div class="col-lg-4 col-md-4">
                    <img class="img-fluid" src="{{ asset('frontAssets') }}/img/profile.png" alt="">
                </div>
            </div>
        </section>
        <!-- section -->
    
        <!-- Main content -->
        <main id="main" class="site-main">
            <div class="section tabbar_menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab_menu">
                                <ul>
                                    <li><a href="https://www.facebook.com/engrmhjohn" target="_blank"><span class="icon"><i
                                                    class="fa fa-facebook"
                                                    aria-hidden="true"></i></span><span>Facebook</span></a></li>
                                    <li><a href="https://instagram.com/m_h_j_o_h_n" target="_blank"><span class="icon"><i
                                                    class="fa fa-instagram"
                                                    aria-hidden="true"></i></span><span>Instagram</span></a></li>
                                    <li><a href="#" target="_blank"><span class="icon"><i class="fa fa-youtube-play"
                                                    aria-hidden="true"></i><span>YouTube</span></a></li>
                                    <li><a href="https://www.linkedin.com/in/engrmhjohn" target="_blank"><span
                                                class="icon"><i class="fa fa-linkedin"
                                                    aria-hidden="true"></i></span><span>Linkedin</span></a></li>
                                    <li><a href="https://github.com/engrmhjohn" target="_blank"><span class="icon"><i
                                                    class="fa fa-github"
                                                    aria-hidden="true"></i></span><span>Github</span></a></li>
                                    <li><a href="mailto:johnsubcse@gmail.com"><span class="icon"><i class="fa fa-envelope"
                                                    aria-hidden="true"></i></span><span>Email</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hello section -->
            <section class="site-section section-hello" id="intro">
                <div class="container">
                    <h2>HELLO & WELCOME</h2>
                    <p class="section-subtitle"><span>EXPLORE ME</span></p>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="main-service text-right">
                                <div class="rectangle">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div><!-- /.rectangle -->
                                <h3>Meet Deadlines</h3>
                                <p>Your deadline is the most important value for us. Our job is to make sure the job is
                                    done perfectly before the deadline.</p>
                            </div><!-- /.main-service -->
                            <div class="main-service text-right">
                                <div class="rectangle">
                                    <i class="fa fa-comments" aria-hidden="true"></i>
                                </div>
                                <h3>Communication Is Key</h3>
                                <p>Our team is available to check on your questions and take in feedback as soon as
                                    possibly.</p>
                            </div><!-- /.main-service -->
                        </div>
                        <div class="col-sm-4">
                            <img class="about_img" src="{{ asset('frontAssets') }}/img/john.jpg" alt="">
                        </div>
                        <div class="col-sm-4">
                            <div class="main-service text-left">
                                <div class="rectangle">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>
                                <h3>Quality Control</h3>
                                <p>We test out everything to make sure that your project is fully functional,
                                    cross–browser compatible and meets your specifications.</p>
                            </div><!-- /.main-service -->
                            <div class="main-service text-left">
                                <div class="rectangle">
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                </div><!-- /.rectangle -->
                                <h3>Pixel Perfect</h3>
                                <p>We develop meaningful digital products and experiences that matter with design
                                    thinking and creative craftsmanship.</p>
                            </div><!-- /.main-service -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.section-hello -->
            <!-- End Hello section -->
    
            <!-- About section -->
            <section class="site-section section-about text-center" id="about">
                <div class="container">
                    <h2>ABOUT WORK</h2>
                    <p class="section-subtitle"><span>Goal is to build products and services</span></p>
                    <div class="row mt-50">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 text-center mt-20">
                            <div class="about_item">
                                <a href="javascript:void(0)" class="about_item_link">
                                    <div class="about_item_bg bg1"></div>
    
                                    <div class="about_item_title">
                                        <h3 class="text-capitalize">Web design</h3>
                                    </div>
                                    <div class="medium-rectangle rectangle">
                                        <i class="fa fa-laptop" aria-hidden="true"></i>
                                    </div>
                                    <div class="about_item_description">
                                        <p class="text-justify">Our approach to website design is to create a website
                                            that strengthens your company’s
                                            brand while ensuring ease of use and simplicity for your audience</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 text-center mt-20">
                            <div class="about_item">
                                <a href="javascript:void(0)" class="about_item_link">
                                    <div class="about_item_bg bg4"></div>
    
                                    <div class="about_item_title">
                                        <h3 class="text-capitalize">Web development</h3>
                                    </div>
                                    <div class="medium-rectangle rectangle">
                                        <i class="fa fa-code" aria-hidden="true"></i>
                                    </div>
                                    <div class="about_item_description">
                                        <p class="text-justify">The web development process involves taking the
                                            graphical elements defined in the
                                            design process and coding them into a custom theme.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 text-center mt-20">
                            <div class="about_item">
                                <a href="javascript:void(0)" class="about_item_link">
                                    <div class="about_item_bg bg5"></div>
    
                                    <div class="about_item_title">
                                        <h3 class="text-capitalize">Digital Marketing</h3>
                                    </div>
                                    <div class="medium-rectangle rectangle">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                    <div class="about_item_description">
                                        <p class="text-justify">Social Media, has become an essential tool of marketing
                                            an online business. It gives you a platform to interact and inform people
                                            about yourself and your brand.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.section-about -->
            <!-- End About section -->
    
            <!-- Skills section -->
            <section class="site-section section-skills">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Introduction</h2>
                            <div class="about_description">
                                <div class="text">Hi I'm <strong class="typing_name_intro text-primary"></strong> <br>
                                    & I'm a <strong class="typing_occupation"></strong> </div>
                                <p class="text-justify">I am a noob programming geek, a lover of freedom, and an enthusiast
                                    of technology. I
                                    studied Computer
                                    Science and Engineering (CSE) at Stamford University Bangladesh. I love to do
                                    research works on
                                    Networking too. Besides web desiging & developing, I write articles. At the time
                                    of my study break,
                                    I try to create different projects which are academic and non-academic. I've also
                                    participated in
                                    different Project Shows, Programming Contests, and International Conferences. At my
                                    leisure, love to
                                    play games and read story books. I love music. I am very keen to do social work.</p>
                                <div class="animation_btn">
                                    <a href="javascript:void(0)">Download CV (PDF)</a>
                                </div>
                                <div class="animation_btn">
                                    <a href="#" data-toggle="modal" data-target="#personal_information"> Personal
                                        Information
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h2>SKILLS I HAVE</h2>
                            <div class="progress-group">
                                <p>Web design</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="90">
                                    </div>
                                </div><!-- /.progress -->
                            </div><!-- /.progress-group -->
    
                            <div class="progress-group">
                                <p>Web development</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="80">
                                    </div>
                                </div><!-- /.progress -->
                            </div><!-- /.progress-group -->
    
                            <div class="progress-group">
                                <p>Social media</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="85">
                                    </div>
                                </div><!-- /.progress -->
                            </div><!-- /.progress-group -->
    
                            <div class="progress-group">
                                <p>SEO optimization</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="90">
                                    </div>
                                </div><!-- /.progress -->
                            </div><!-- /.progress-group -->
    
                            <div class="progress-group">
                                <p>Content Writing</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="95">
                                    </div>
                                </div><!-- /.progress -->
                            </div><!-- /.progress-group -->
    
                            <div class="progress-group">
                                <p>Microsot Office</p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="90">
                                    </div>
                                </div><!-- /.progress -->
                            </div><!-- /.progress-group -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.section-skills -->
            <!-- End Skills section -->
    
            <!-- Counters section -->
            <!-- End Counters section -->
            <section class="counter_section mt-50">
                <div class="container">
                    <div class="do_container">
                        <div class="box arrow-start arrow_bg">
                            <div class="img-box">
                                <i class="fa fa-rocket" aria-hidden="true"></i>
                                <span class="counter-start" data-to="15" data-speed="2000">15</span>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Projects Completed
                                </h5>
                            </div>
                        </div>
                        <div class="box arrow-middle arrow_bg">
                            <div class="img-box">
                                <i class="fa fa-trophy" aria-hidden="true"></i>
                                <span class="counter-start" data-to="5" data-speed="2000">5</span>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Certificates won
                                </h5>
                            </div>
                        </div>
                        <div class="box arrow-middle arrow_bg">
                            <div class="img-box">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <span class="counter-start" data-to="3" data-speed="2000">3</span>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Pending works
                                </h5>
                            </div>
                        </div>
                        <div class="box arrow-middle arrow_bg">
                            <div class="img-box">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <span class="counter-start" data-to="945" data-speed="2000">945</span>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Hours of work
                                </h5>
                            </div>
                        </div>
                        <div class="box arrow-end arrow_bg">
                            <div class="img-box">
                                <i class="fa fa-coffee" aria-hidden="true"></i>
                                <span class="counter-start" data-to="6" data-speed="2000">6</span>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Team Members
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services section -->
            <section class="site-section section-services" id="services">
    
                <div class="container-fluid">
                    <h2>SERVICES I OFFER</h2>
                    <p class="section-subtitle"><span>Exceptional level of service</span></p>
                </div>
    
                <div class="container">
    
                    <div class="carousel slide" id="services-carousel">
    
                        <div class="item-controls text-center">
                            <a href="#services-carousel" class="left btn carousel-control" data-slide="prev"><i
                                    class="fa fa-angle-left" aria-hidden="true"></i>
                            </a>
                            <a href="#services-carousel" class="right btn carousel-control" data-slide="next"><i
                                    class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div><!-- /.item-controls -->
    
                        <div class="carousel-indicators nav-tabs text-center">
                            <a data-target="#services-carousel" href="#" data-slide-to="0" class="active">
                                <div class="col-xs-4 col-sm-fifth">
                                    <div class="service">
                                        <div class="rectangle">
                                            <i class="fa fa-laptop" aria-hidden="true"></i>
                                        </div>
                                        <p class="hidden-xs">Web design</p>
                                    </div>
                                </div>
                            </a><!-- /.item -->
                            <a data-target="#services-carousel" href="#" data-slide-to="1">
                                <div class="col-xs-4 col-sm-fifth">
                                    <div class="service">
                                        <div class="rectangle">
                                            <i class="fa fa-code" aria-hidden="true"></i>
                                        </div>
                                        <p class="hidden-xs">Web development</p>
                                    </div>
                                </div>
                            </a><!-- /.item -->
                            <a data-target="#services-carousel" href="#" data-slide-to="2">
                                <div class="col-xs-4 col-sm-fifth">
                                    <div class="service">
                                        <div class="rectangle">
                                            <i class="fa fa-book" aria-hidden="true"></i>
                                        </div>
                                        <p class="hidden-xs">Microsot Office</p>
                                    </div>
                                </div>
                            </a><!-- /.item -->
                            <a data-target="#services-carousel" href="#" data-slide-to="3">
                                <div class="col-xs-4 col-sm-fifth">
                                    <div class="service">
                                        <div class="rectangle">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </div>
                                        <p class="hidden-xs">SEO</p>
                                    </div>
                                </div>
                            </a><!-- /.item -->
                            <a data-target="#services-carousel" href="#" data-slide-to="4">
                                <div class="col-xs-4 col-sm-fifth">
                                    <div class="service">
                                        <div class="rectangle">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <p class="hidden-xs">Social Media</p>
                                    </div>
                                </div>
                            </a>
                            <!-- /.item -->
                        </div><!-- /.carousel-indicators -->
    
    
                        <div class="carousel-inner">
                            <!-- Item 1 -->
                            <div id="item1" class="item tab-pane active">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="service-info">
                                            <h3 class="service-title">Web Design</h3>
                                            <p class="text-justify">Welcome to my digital realm. I'm John, a dedicated web
                                                designer passionate about translating ideas into visually stunning and
                                                functionally seamless digital experiences. Each project in my portfolio is a
                                                testament to the power of design in creating compelling online narratives. I
                                                specialize in finding the delicate balance between aesthetics and
                                                functionality, ensuring that every website not only looks impressive but
                                                also offers an intuitive user experience. Whether you're a startup with a
                                                bold vision or an established brand seeking a digital upgrade, I bring a
                                                personalized touch to each endeavor. Join me on a journey where pixels meet
                                                creativity, and let's craft a digital presence that resonates and
                                                captivates.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <img src="{{ asset('frontAssets') }}/img/web-design.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div><!-- /.item -->
                            <!-- Item 2 -->
                            <div id="item2" class="item tab-pane">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="service-info">
                                            <h3 class="service-title">Web Development</h3>
                                            <p class="text-justify">Welcome to the world of web development, where I, John,
                                                bring ideas to life through the language of code. As a seasoned web
                                                developer, my focus is on building robust, dynamic, and scalable online
                                                solutions. With a keen eye for detail and a passion for problem-solving, I
                                                thrive in the intricacies of coding to create websites that not only meet
                                                but exceed expectations. From crafting responsive and user-friendly
                                                interfaces to implementing complex functionalities, I specialize in turning
                                                concepts into functional and elegant digital realities. Whether you're in
                                                need of a sleek business website, a powerful e-commerce platform, or a
                                                custom web application, I'm here to navigate the digital landscape and bring
                                                your vision to fruition through the artistry of coding. Join me in the realm
                                                of web development, where innovation meets functionality, and let's code a
                                                future where possibilities are endless. </p>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <img src="{{ asset('frontAssets') }}/img/web-development.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div><!-- /.item -->
                            <!-- Item 3 -->
                            <div id="item3" class="item tab-pane">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="service-info">
                                            <h3 class="service-title">Microsot Office</h3>
                                            <p class="text-justify">Welcome to the dynamic universe of Microsoft Office,
                                                where productivity meets innovation. As an essential suite of applications,
                                                Microsoft Office has become synonymous with efficient work processes and
                                                seamless collaboration. From crafting persuasive documents in Microsoft Word
                                                to organizing and analyzing data with precision in Microsoft Excel, and
                                                delivering impactful presentations with flair using Microsoft PowerPoint,
                                                this suite empowers users to achieve their professional and academic goals
                                                with ease. The integrated nature of Office applications allows for smooth
                                                transitions between tasks, fostering a cohesive digital workspace. Dive into
                                                the versatility of Microsoft Office, where each application serves as a
                                                digital toolkit, equipping individuals and organizations to excel in their
                                                endeavors through the power of effective communication, data management, and
                                                presentation.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <img src="{{ asset('frontAssets') }}/img/ms_office.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div><!-- /.item -->
                            <!-- Item 4 -->
                            <div id="item4" class="item tab-pane">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="service-info">
                                            <h3 class="service-title">SEO</h3>
                                            <p class="text-justify">Welcome to the realm of SEO, where the digital landscape
                                                transforms into a strategic playground for visibility and success. As an
                                                experienced practitioner in Search Engine Optimization, I navigate the
                                                intricate algorithms and dynamic trends that define online discoverability.
                                                SEO is not just about keywords and rankings; it's about crafting a digital
                                                footprint that resonates with both search engines and your target audience.
                                                From meticulous keyword research and on-page optimization to building
                                                authoritative backlinks, the art of SEO involves a holistic approach to
                                                enhance your online presence. Through the lens of analytics and continuous
                                                refinement, I work to ensure that your content not only attracts search
                                                engines but engages and satisfies the curiosity of your visitors. Join me in
                                                the journey of SEO, where every tweak and optimization contributes to
                                                elevating your digital presence in a world driven by search.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <img src="{{ asset('frontAssets') }}/img/seo-optimization.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div><!-- /.item -->
                            <!-- Item 5 -->
                            <div id="item5" class="item tab-pane">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="service-info">
                                            <h3 class="service-title">Social Media</h3>
                                            <p class="text-justify">Welcome to the vibrant and interconnected world of
                                                social media, where I, John, leverage the power of platforms to amplify your
                                                digital presence. Social media isn't just about sharing updates; it's a
                                                dynamic ecosystem that fosters engagement, builds communities, and
                                                transforms brands. As a social media strategist, I understand the nuances of
                                                each platform, tailoring content to captivate audiences and spark meaningful
                                                conversations. From the visual storytelling canvas of Instagram to the
                                                real-time conversations on Twitter and the professional networking on
                                                LinkedIn, my approach is crafted to align with your unique goals. Let's
                                                navigate the ever-evolving landscape of social media together, using
                                                strategic content, analytics, and community building to not just be present
                                                but to make an impact in the digital conversation. Join me in unlocking the
                                                potential of social media, where connections flourish, and brands come to
                                                life in the hearts and minds of their audience.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <img src="{{ asset('frontAssets') }}/img/social-media.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div><!-- /.item -->
                        </div><!-- /.carousel-inner -->
                    </div><!-- /.carousel -->
                </div>
            </section>
            <!-- /.section-services -->
            <!-- End Services section -->
    
            <!-- Team section -->
            <section id="teams">
                <div class="container">
                    <h2>MEET MY TEAM</h2>
                    <p class="section-subtitle mb-20"><span>This is the team that is working with me</span></p>
                    <div class="row client_slick mb-50">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="team_wrapper">
                                <div class="img-area">
                                    <div class="inner-area">
                                        <img src="{{ asset('frontAssets') }}/img/profile-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon arrow"><i class="fa fa-arrow-left"></i></div>
                                <div class="icon dots"><i class="fa fa-ellipsis-v"></i></div>
                                <div class="name">Md Nahid Hasan</div>
                                <div class="about">Junior Software Engineer at Brotecs Technologies Limited</div>
                                <div class="social-icons">
                                    <a href="#" class="fb" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="insta" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="yt" target="_blank"><i class="fa fa-paper-plane"></i></i></a>
                                </div>
                                <div class="buttons">
                                    <a class="useful_btn" href="#" target="_blank">Linkedin</a>
                                    <a class="useful_btn" href="#" target="_blank">Github</a>
                                </div>
                                <div class="social-share">
                                    <div class="row">
                                        <i class="fa fa-heart"></i>
                                        <i class="icon-2 fa fa-heart"></i>
                                        <span>20.4k</span>
                                    </div>
                                    <div class="row">
                                        <i class="fa fa-comment"></i>
                                        <i class="icon-2 fa fa-comment"></i>
                                        <span>14.3k</span>
                                    </div>
                                    <div class="row">
                                        <i class="fa fa-share"></i>
                                        <span>12.8k</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="team_wrapper">
                                <div class="img-area">
                                    <div class="inner-area">
                                        <img src="{{ asset('frontAssets') }}/img/profile-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon arrow"><i class="fa fa-arrow-left"></i></div>
                                <div class="icon dots"><i class="fa fa-ellipsis-v"></i></div>
                                <div class="name">Rakib Hassan</div>
                                <div class="team_about">Marketing Lead at CureTech Bangladesh</div>
                                <div class="social-icons">
                                    <a href="#" class="fb" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="insta" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="yt" target="_blank"><i class="fa fa-paper-plane"></i></i></a>
                                </div>
                                <div class="buttons">
                                    <a class="useful_btn" href="https://www.linkedin.com/in/engmhjohn/"
                                        target="_blank">Linkedin</a>
                                    <a class="useful_btn" href="https://github.com/engrmhjohn" target="_blank">Github</a>
                                    <!-- <button></button>
                                        <button></button> -->
                                </div>
                                <div class="social-share">
                                    <div class="row">
                                        <i class="fa fa-heart"></i>
                                        <i class="icon-2 fa fa-heart"></i>
                                        <span>20.4k</span>
                                    </div>
                                    <div class="row">
                                        <i class="fa fa-comment"></i>
                                        <i class="icon-2 fa fa-comment"></i>
                                        <span>14.3k</span>
                                    </div>
                                    <div class="row">
                                        <i class="fa fa-share"></i>
                                        <span>12.8k</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="team_wrapper">
                                <div class="img-area">
                                    <div class="inner-area">
                                        <img src="{{ asset('frontAssets') }}/img/profile-4.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="icon arrow"><i class="fa fa-arrow-left"></i></div>
                                <div class="icon dots"><i class="fa fa-ellipsis-v"></i></div>
                                <div class="name">Md Tutul Hossain</div>
                                <div class="team_about">Wordpress Developer & Founder of perfumedokan.com</div>
                                <div class="social-icons">
                                    <a href="#" class="fb" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="insta" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="yt" target="_blank"><i class="fa fa-paper-plane"></i></i></a>
                                </div>
                                <div class="buttons">
                                    <a class="useful_btn" href="https://www.linkedin.com/in/engmhjohn/"
                                        target="_blank">Linkedin</a>
                                    <a class="useful_btn" href="https://github.com/engrmhjohn" target="_blank">Github</a>
                                    <!-- <button></button>
                                        <button></button> -->
                                </div>
                                <div class="social-share">
                                    <div class="row">
                                        <i class="fa fa-heart"></i>
                                        <i class="icon-2 fa fa-heart"></i>
                                        <span>20.4k</span>
                                    </div>
                                    <div class="row">
                                        <i class="fa fa-comment"></i>
                                        <i class="icon-2 fa fa-comment"></i>
                                        <span>14.3k</span>
                                    </div>
                                    <div class="row">
                                        <i class="fa fa-share"></i>
                                        <span>12.8k</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="team_wrapper">
                                <div class="img-area">
                                    <div class="inner-area">
                                        <img src="{{ asset('frontAssets') }}/img/profile-5.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="icon arrow"><i class="fa fa-arrow-left"></i></div>
                                <div class="icon dots"><i class="fa fa-ellipsis-v"></i></div>
                                <div class="name">Shaiful Islam</div>
                                <div class="team_about">Junior Software Engineer at Qtec Solution Limited</div>
                                <div class="social-icons">
                                    <a href="#" class="fb" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="insta" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="yt" target="_blank"><i class="fa fa-paper-plane"></i></i></a>
                                </div>
                                <div class="buttons">
                                    <a class="useful_btn" href="https://www.linkedin.com/in/engmhjohn/"
                                        target="_blank">Linkedin</a>
                                    <a class="useful_btn" href="https://github.com/engrmhjohn" target="_blank">Github</a>
                                    <!-- <button></button>
                                        <button></button> -->
                                </div>
                                <div class="social-share">
                                    <div class="row">
                                        <i class="fa fa-heart"></i>
                                        <i class="icon-2 fa fa-heart"></i>
                                        <span>20.4k</span>
                                    </div>
                                    <div class="row">
                                        <i class="fa fa-comment"></i>
                                        <i class="icon-2 fa fa-comment"></i>
                                        <span>14.3k</span>
                                    </div>
                                    <div class="row">
                                        <i class="fa fa-share"></i>
                                        <span>12.8k</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-20">
                            <div class="team_wrapper">
                                <div class="img-area">
                                    <div class="inner-area">
                                        <img src="{{ asset('frontAssets') }}/img/profile-6.jpg" alt="">
                                    </div>
                                </div>
                                <div class="icon arrow"><i class="fa fa-arrow-left"></i></div>
                                <div class="icon dots"><i class="fa fa-ellipsis-v"></i></div>
                                <div class="name">Tamim Wasif</div>
                                <div class="team_about">Junior Software Engineer at Teton Private Ltd</div>
                                <div class="social-icons">
                                    <a href="#" class="fb" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="insta" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="yt" target="_blank"><i class="fa fa-paper-plane"></i></i></a>
                                </div>
                                <div class="buttons">
                                    <a class="useful_btn" href="https://www.linkedin.com/in/engmhjohn/"
                                        target="_blank">Linkedin</a>
                                    <a class="useful_btn" href="https://github.com/engrmhjohn" target="_blank">Github</a>
                                    <!-- <button></button>
                                        <button></button> -->
                                </div>
                                <div class="social-share">
                                    <div class="row">
                                        <i class="fa fa-heart"></i>
                                        <i class="icon-2 fa fa-heart"></i>
                                        <span>20.4k</span>
                                    </div>
                                    <div class="row">
                                        <i class="fa fa-comment"></i>
                                        <i class="icon-2 fa fa-comment"></i>
                                        <span>14.3k</span>
                                    </div>
                                    <div class="row">
                                        <i class="fa fa-share"></i>
                                        <span>12.8k</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Team section -->
    
            <!-- Education History section -->
            <section class="section-history" id="education">
                <div class="container">
                    <div class="text-center section-diff-title">
                        <h2>A Look Back At My Education</h2>
                    </div>
                    <!-- Timeline -->
                    <ul class="timeline">
                        <!-- Timeline badge -->
                        <li class="timeline-start">
                            <div class="rectangle"><span>2013</span></div>
                        </li><!-- /.timeline-start -->
    
                        <!-- Timeline job & description  -->
                        <li>
                            <div class="rectangle timeline-rectangle"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <div class="timeline-date">
                                        <p>09 May</p>
                                    </div><!-- /.timeline-date -->
                                    <div class="timeline-position">
                                        <p>Secondary School Certificate (SSC)</p>
                                    </div><!-- /.timeline-position -->
                                </div><!-- /.timeline-heading -->
                                <div class="timeline-body">
                                    <p class="text-justify">An alumnus of Arkandi High School, where I earned my Secondary
                                        School Certificate (SSC). This school holds a special place in my heart as it laid
                                        the foundation for my educational journey. The supportive community and quality
                                        education at Arkandi High School have been instrumental in shaping my academic path.
                                        Grateful for the memories and lessons, I carry the spirit of Arkandi with me into my
                                        future endeavors.</p>
                                </div><!-- /.timeline-body -->
                            </div><!-- /.timeline-panel -->
                        </li>
    
                        <!-- Timeline badge -->
                        <li class="timeline-start">
                            <div class="rectangle"><span>2015</span></div>
                        </li><!-- /.timeline-start -->
    
                        <!-- Timeline job & description, inverted  -->
                        <li class="timeline-inverted">
                            <div class="rectangle timeline-rectangle"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <div class="timeline-position">
                                        <p>Higher Seconday Certificate (HSC)</p>
                                    </div><!-- /.timeline-position -->
                                    <div class="timeline-date">
                                        <p>09 Auguest</p>
                                    </div><!-- /.timeline-date -->
                                </div><!-- /.timeline-heading -->
                                <div class="timeline-body">
                                    <p class="text-justify">I proudly earned my Higher Secondary Certificate (HSC) from
                                        Govt. Baliakandi College. Grateful for the enriching education and supportive
                                        environment, I carry the lessons learned here into my future pursuits.</p>
                                </div><!-- /.timeline-body -->
                            </div><!-- /.timeline-panel -->
                        </li><!-- /.timeline-inverted -->
    
                        <!-- Timeline job & description  -->
                        <li class="timeline-start">
                            <div class="rectangle"><span>2020</span></div>
                        </li><!-- /.timeline-start -->
                        <li>
                            <div class="rectangle timeline-rectangle"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <div class="timeline-date">
                                        <p>06 December</p>
                                    </div><!-- /.timeline-date -->
                                    <div class="timeline-position">
                                        <p>Bachelor of Science in CSE</p>
                                    </div><!-- /.timeline-position -->
                                </div><!-- /.timeline-heading -->
                                <div class="timeline-body">
                                    <!-- <div class="timeline-body-thumb">
                                        <img src="{{ asset('frontAssets') }}/img/timeline-img.jpg" class="img-res" alt="">
                                    </div> -->
                                    <p class="text-justify">
                                        I'm thrilled to share that I've recently graduated from Stamford University
                                        Bangladesh with a BSc in Computer Science and Engineering. This journey has been an
                                        exciting exploration into the world of algorithms, programming, and software
                                        development. Now equipped with a solid foundation, I'm eager to apply my knowledge
                                        and contribute to the ever-evolving field of technology. Exciting times ahead! 🚀
                                    </p>
                                </div><!-- /.timeline-body -->
                            </div><!-- /.timeline-panel -->
                        </li>
                    </ul><!-- /.timeline -->
                </div>
            </section><!-- /.section-history -->
            <!-- End History section -->
    
            <!-- Portfolio/Works section -->
            <section class="site-section section-works" id="works">
                <div class="container">
                    <h2>RECENT WORKS</h2>
                    <p class="section-subtitle"><span>OUR CLIENTS LOVE US! READ WHAT THEY HAVE TO SAY</span></p>
    
                    <div class="portfolio">
                        <ul class="portfolio-sorting list-inline">
                            <li><a href="#" class=" active" data-group="all">all</a></li>
                            <li><a href="#" class="" data-group="webdesign">Web Design</a></li>
                            <li><a href="#" class="" data-group="webdev">Web Development</a></li>
                            <li><a href="#" class="" data-group="dm">Digital Marketing</a></li>
                        </ul><!-- /.portfolio-sorting  -->
    
                        <div id="grid">
    
                            <!-- Portfolio item -->
                            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                                <div class="portfolio-item">
                                    <div class="portfolio-item-thumb">
                                        <img src="{{ asset('frontAssets') }}/img/eduford.jpg" alt="" class="img-res">
                                        <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem1">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div><!-- /.portfolio-item-thumb  -->
                                    <div class="portfolio-info">
                                        <h3>Eduford</h3>
                                        <p>Web Design</p>
                                    </div><!-- /.portfolio-info  -->
                                </div>
                            </div><!-- /.col-md-3  -->
                            <!-- Portfolio item -->
                            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                                <div class="portfolio-item">
                                    <div class="portfolio-item-thumb">
                                        <img src="{{ asset('frontAssets') }}/img/central.jpg" alt="" class="img-res">
                                        <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem2">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div><!-- /.portfolio-item-thumb  -->
                                    <div class="portfolio-info">
                                        <h3>Central</h3>
                                        <p>Web Design</p>
                                    </div><!-- /.portfolio-info  -->
                                </div>
                            </div><!-- /.col-md-3  -->
                            <!-- Portfolio item -->
                            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdev"]'>
                                <div class="portfolio-item">
                                    <div class="portfolio-item-thumb">
                                        <img src="{{ asset('frontAssets') }}/img/onesky.jpg" alt="" class="img-res">
                                        <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem88">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div><!-- /.portfolio-item-thumb  -->
                                    <div class="portfolio-info">
                                        <h3>One Sky</h3>
                                        <p>Web Development</p>
                                    </div><!-- /.portfolio-info  -->
                                </div>
                            </div><!-- /.col-md-3  -->
                            <!-- Portfolio item -->
                            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["dm"]'>
                                <div class="portfolio-item">
                                    <div class="portfolio-item-thumb">
                                        <img src="{{ asset('frontAssets') }}/img/food.jpg" alt="" class="img-res">
                                        <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem10">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div><!-- /.portfolio-item-thumb  -->
                                    <div class="portfolio-info">
                                        <h3>The food we eat</h3>
                                        <p>Digital Marketing</p>
                                    </div><!-- /.portfolio-info  -->
                                </div>
                            </div><!-- /.col-md-3  -->
                            <!-- Portfolio item -->
                            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                                <div class="portfolio-item">
                                    <div class="portfolio-item-thumb">
                                        <img src="{{ asset('frontAssets') }}/img/topperr.jpg" alt="" class="img-res">
                                        <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem3">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div><!-- /.portfolio-item-thumb  -->
                                    <div class="portfolio-info">
                                        <h3>topperr</h3>
                                        <p>Web Design</p>
                                    </div><!-- /.portfolio-info  -->
                                </div>
                            </div><!-- /.col-md-3  -->
                            <!-- Portfolio item -->
                            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                                <div class="portfolio-item">
                                    <div class="portfolio-item-thumb">
                                        <img src="{{ asset('frontAssets') }}/img/eastland.jpg" alt="" class="img-res">
                                        <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem4">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div><!-- /.portfolio-item-thumb  -->
                                    <div class="portfolio-info">
                                        <h3>Eastland Insurance</h3>
                                        <p>Web Design</p>
                                    </div><!-- /.portfolio-info  -->
                                </div>
                            </div><!-- /.col-md-3  -->
                            <!-- Portfolio item -->
                            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdev"]'>
                                <div class="portfolio-item">
                                    <div class="portfolio-item-thumb">
                                        <img src="{{ asset('frontAssets') }}/img/eastland.jpg" alt="" class="img-res">
                                        <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem5">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div><!-- /.portfolio-item-thumb  -->
                                    <div class="portfolio-info">
                                        <h3>Eastland Insurance</h3>
                                        <p>Web Development</p>
                                    </div><!-- /.portfolio-info  -->
                                </div>
                            </div><!-- /.col-md-3  -->
                            <!-- Portfolio item -->
                            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["dm"]'>
                                <div class="portfolio-item">
                                    <div class="portfolio-item-thumb">
                                        <img src="{{ asset('frontAssets') }}/img/bizzflare.jpg" alt="" class="img-res">
                                        <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem11">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div><!-- /.portfolio-item-thumb  -->
                                    <div class="portfolio-info">
                                        <h3>Bizzflare</h3>
                                        <p>Digital Marketing</p>
                                    </div><!-- /.portfolio-info  -->
                                </div>
                            </div><!-- /.col-md-3  -->
                            <!-- Portfolio item -->
                            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                                <div class="portfolio-item">
                                    <div class="portfolio-item-thumb">
                                        <img src="{{ asset('frontAssets') }}/img/educity.jpg" alt="" class="img-res">
                                        <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem6">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div><!-- /.portfolio-item-thumb  -->
                                    <div class="portfolio-info">
                                        <h3>Educity</h3>
                                        <p>Web Design</p>
                                    </div><!-- /.portfolio-info  -->
                                </div>
                            </div><!-- /.col-md-3  -->
                            <!-- Portfolio item -->
                            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                                <div class="portfolio-item">
                                    <div class="portfolio-item-thumb">
                                        <img src="{{ asset('frontAssets') }}/img/osit.jpg" alt="" class="img-res">
                                        <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem7">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div><!-- /.portfolio-item-thumb  -->
                                    <div class="portfolio-info">
                                        <h3>One Sky IT</h3>
                                        <p>Web Design</p>
                                    </div><!-- /.portfolio-info  -->
                                </div>
                            </div><!-- /.col-md-3  -->
                            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdev"]'>
                                <div class="portfolio-item">
                                    <div class="portfolio-item-thumb">
                                        <img src="{{ asset('frontAssets') }}/img/osit.jpg" alt="" class="img-res">
                                        <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem77">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div><!-- /.portfolio-item-thumb  -->
                                    <div class="portfolio-info">
                                        <h3>One Sky IT</h3>
                                        <p>Web Development</p>
                                    </div><!-- /.portfolio-info  -->
                                </div>
                            </div><!-- /.col-md-3  -->
                            <!-- Portfolio item -->
                            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                                <div class="portfolio-item">
                                    <div class="portfolio-item-thumb">
                                        <img src="{{ asset('frontAssets') }}/img/onesky.jpg" alt="" class="img-res">
                                        <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem8">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div><!-- /.portfolio-item-thumb  -->
                                    <div class="portfolio-info">
                                        <h3>One Sky</h3>
                                        <p>Web Design</p>
                                    </div><!-- /.portfolio-info  -->
                                </div>
                            </div><!-- /.col-md-3  -->
                            <!-- Portfolio item -->
                            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["dm"]'>
                                <div class="portfolio-item">
                                    <div class="portfolio-item-thumb">
                                        <img src="{{ asset('frontAssets') }}/img/guest.jpg" alt="" class="img-res">
                                        <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem9">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div><!-- /.portfolio-item-thumb  -->
                                    <div class="portfolio-info">
                                        <h3>Guest Delivery</h3>
                                        <p>Digital Marketing</p>
                                    </div><!-- /.portfolio-info  -->
                                </div>
                            </div><!-- /.col-md-3  -->
    
                        </div><!-- /#grid -->
                    </div>
                </div>
            </section><!-- /.section-works -->
            <!-- End Works section -->
    
            <!-- Work History section -->
            <section class="section-history" id="history">
                <div class="container">
                    <div class="text-center section-diff-title">
                        <h2>Work History</h2>
                    </div>
                    <!-- Timeline -->
                    <ul class="timeline">
                        <!-- Timeline badge -->
                        <li class="timeline-start">
                            <div class="rectangle"><span>2020-2022</span></div>
                        </li><!-- /.timeline-start -->
    
                        <!-- Timeline job & description  -->
                        <li>
                            <div class="rectangle timeline-rectangle"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <div class="timeline-date">
                                        <p>Executive (Officer IT)</p>
                                    </div><!-- /.timeline-date -->
                                    <div class="timeline-position">
                                        <p>Apical Trade Bangladesh</p>
                                    </div><!-- /.timeline-position -->
                                </div><!-- /.timeline-heading -->
                                <div class="timeline-body">
                                    <p class="text-justify">A trading house for all kind of lab, medical & textile
                                        equipments. They are a trading house, import & supply laboratory research,
                                        textile lab equipments since 1999. They represent several multinational company
                                        in Bangladesh.</p>
                                </div><!-- /.timeline-body -->
                            </div><!-- /.timeline-panel -->
                        </li>
    
                        <!-- Timeline badge -->
                        <li class="timeline-start">
                            <div class="rectangle"><span>2023-2023</span></div>
                        </li><!-- /.timeline-start -->
    
                        <!-- Timeline job & description, inverted  -->
                        <li class="timeline-inverted">
                            <div class="rectangle timeline-rectangle"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <div class="timeline-position">
                                        <p>Wizard Software & Technology BD Ltd</p>
                                    </div><!-- /.timeline-position -->
                                    <div class="timeline-date">
                                        <p>Software Engineer</p>
                                    </div><!-- /.timeline-date -->
                                </div><!-- /.timeline-heading -->
                                <div class="timeline-body">
                                    <p class="text-justify">Wizard Software & Technology Bangladesh Ltd. is a developing
                                        service provider for online-based applications. The Company has been promoted by
                                        professionals who are dedicated to providing total IT resolutions under one
                                        roof.</p>
                                </div><!-- /.timeline-body -->
                            </div><!-- /.timeline-panel -->
                        </li><!-- /.timeline-inverted -->
    
                        <!-- Timeline job & description  -->
                        <li class="timeline-start">
                            <div class="rectangle"><span>2023-Cont.</span></div>
                        </li><!-- /.timeline-start -->
                        <li>
                            <div class="rectangle timeline-rectangle"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <div class="timeline-date">
                                        <p>Web Developer</p>
                                    </div><!-- /.timeline-date -->
                                    <div class="timeline-position">
                                        <p>One Sky Communications Ltd</p>
                                    </div><!-- /.timeline-position -->
                                </div><!-- /.timeline-heading -->
                                <div class="timeline-body">
                                    <p class="text-justify">One Sky Communications Limited is a leading Nationwide
                                        Internet Service Provider. Beyond broadband, it's innovation reaches into
                                        cutting-edge Vehicle and GPS tracking for journey and asset safety. Empowering
                                        digital literacy, our comprehensive IT training equips you with skills to
                                        navigate technology's dynamic landscape.</p>
                                </div><!-- /.timeline-body -->
                            </div><!-- /.timeline-panel -->
                        </li>
                    </ul><!-- /.timeline -->
                </div>
            </section><!-- /.section-history -->
            <!-- End History section -->
    
            <!-- Contacts section -->
          
            <!-- /.section-contact-->
            <!-- End Contacts section -->
            <section class="contact_section" id="contact">
                <div class="contact_container">
                    <div class="form">
                        <div class="contact-form wow fadeInRight">
                            <span class="circle one"></span>
                            <span class="circle two"></span>
                            
                            <form method="POST" action="" id="contactUSForm" autocomplete="off">
    
                                <div class="input-container">
                                    <input type="text" name="name" class="input" required/>
                                    <label for="">Name</label>
                                    <span>Name</span>
                                </div>
                                <div class="input-container">
                                    <input type="email" name="email" class="input" required/>
                                    <label for="">Email</label>
                                    <span>Email</span>
                                </div>
                                <div class="input-container">
                                    <input type="tel" name="phone" class="input" required/>
                                    <label for="">Phone</label>
                                    <span>Phone</span>
                                </div>
                                <div class="input-container">
                                    <input type="text" name="subject" class="input" required/>
                                    <label for="">Subject</label>
                                    <span>Subject</span>
                                </div>
                                <div class="input-container textarea">
                                    <textarea name="query" class="input" required></textarea>
                                    <label for="">Message</label>
                                    <span>Message</span>
                                </div>
                                <a class="contact_btn" href="javascript:void(0)">Send Query</a>
                                <!-- <button class="contact_btn" type="submit" value="Send Query">Send Query</button> -->
                                <!-- <input class="btn btn-outline-info text-white radius5" type="submit" value="Send Query"> -->
                                <i class="fa fa-paper-plane text-white" aria-hidden="true"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
    
            <!-- Social Networks section -->
            <section class="section-networks blue-bg">
                <div class="container">
                    <a target="_blank" href="https://www.facebook.com/engrmhjohn" class="rectangle">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a target="_blank" href="https://instagram.com/m_h_j_o_h_n" class="rectangle">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/in/engrmhjohn" class="rectangle">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a target="_blank" href="#" class="rectangle">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                    <a href="mailto:johnsubcse@gmail.com" class="rectangle">
                        <i class="fa fa-envelope"></i>
                    </a>
                    <a target="_blank" href="https://github.com/engrmhjohn" class="rectangle">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
            </section><!-- /.section-networks-->
            <!-- End Social Networks section -->
    
        </main><!-- /#main -->
        <!-- End Main content -->
@endsection