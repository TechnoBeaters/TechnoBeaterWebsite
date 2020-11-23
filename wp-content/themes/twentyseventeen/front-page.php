<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>
<section class="slider">
        <div class="slider-banner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" width="100%">
			<div class="container">
				<div class="slider-content text-white position-absolute slide-content col-lg-4">
				<h1>
				Partners, Never Vendors
			</h1>
			<p>
				We help our customers like true partners to shape their ideas into reality and a successful business
			</p>
			</div>
			</div>
        </div>
       <div class="slider-banner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" width="100%">
			<div class="container">
				<div class="slider-content text-white position-absolute slide-content col-lg-4">
				<h1>
				Where Technology and Collaboration Collides
			</h1>
			<p>
				We assure in delivering innovation that adds value to our deliverables, and a Guaranteed Success
			</p>
			</div>
			</div>
        </div>
	<div class="slider-banner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" width="100%">
			<div class="container">
				<div class="slider-content text-white position-absolute slide-content col-lg-4">
				<h1>
				Its not just about ideas, Its about making ideas a success
			</h1>
			<p>
				Demystifying Outsourcing(Mobile & Web), Business Process Management, Business on the Cloud
			</p>
			</div>
			</div>
        </div>
	
    </section>
    <section class="about-us-wrapper" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h1 class="main-heading">About Us</h1>
                    <p>Technobeater is a leading software consulting and PDO (product developing outsourcing) partners
                        specializes in providing consulting like partners, implementation, product development and mobile
                        application development services for all types of organizations – corporates and ISVs/SI.</p>
                </div>
                <div class="col-md-8 col-sm-12">
                    <ul class="feature-wrapper">
                        <li class="feature-box">
                            <div class="box-inner-wrapper">
                                <h2 class="sub-heading">OUR HISTORY</h2>
                                <p>Technobeater has an exceptional success rate in developing web and mobile solutions
                                    for last two years for clients(partners).</p>
                            </div>
                        </li>
                        <li class="feature-box">
                            <div class="box-inner-wrapper">
                                <h2 class="sub-heading">OUR Mission</h2>
                                <p>We assure in delivering innovation that adds value to our deliverables, and a Guaranteed Success to our partners.</p>
                            </div>
                        </li>
						 <li class="feature-box">
                            <div class="box-inner-wrapper">
                                <h2 class="sub-heading">OUR Process</h2>
                                <p>Our process is completely agile based, so we are easily able to absorb real time feedback and provide our value addition inputs to produce a winning solution.</p>
                            </div>
                        </li>
						 <li class="feature-box">
                            <div class="box-inner-wrapper">
                                <h2 class="sub-heading">OUR Vision</h2>
                                <p>We believe in providing the best and make our customer's/partner's business a success, on latest technology at present.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--<section class="official-partner-wrapper" id="pdo">
        <div class="container">
            <div class="row">
                <div class="col-md-6 content">
                    <h1 class="main-heading">OFFICIAL PARTNER</h1>
                    <p>Product Developing Outsourcing partners with Salesforce since 2012. We have build great trust on
                        Salesforce AEs and customers by delivering quality products with shortest duration possible.</p>
                </div>
                <div class="col-md-6 logo-section">
                    <div class="row" style="border-bottom: 1px solid #ffffff30;">
                        <div class="col-md-4 partner-logo-wrapper">
                            <div class="partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client2.png">
                            </div>
                        </div>
                        <div class="col-md-4 partner-logo-wrapper">
                            <div class="partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client2.png">
                            </div>
                        </div>
                        <div class="col-md-4 partner-logo-wrapper">
                            <div class="partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client2.png">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4 partner-logo-wrapper">
                            <div class="partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client2.png">
                            </div>
                        </div>
                        <div class="col-md-4 partner-logo-wrapper">
                            <div class="partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client2.png">
                            </div>
                        </div>
                        <div class="col-md-4 partner-logo-wrapper">
                            <div class="partner-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client2.png">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <section class="more-about-us-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="main-heading text-center">
                        More about us
                    </h1>
                   
                </div>
            </div>
            <div class="more-feature-wrapper">
                <div class="row">
                    <div class="col-md-6">
                        <div class="more-feature-box">
                            <h2 class="sub-heading">Customization</h2>
                            <p>Our team of Certified consultants, administrators and developers are expert in app
                                customization and integrations with third party API to built perfect solution for
                                customer needs.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="more-feature-box">
                            <h2 class="sub-heading">Well coded</h2>
                            <p>Our code is always based on best practices of code design, hence increases the performance. We built a solution that is easy to use and fully responsive to all screen sizes.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="more-feature-box">
                            <h2 class="sub-heading">Work-Life Balance</h2>
                            <p>We work five days a week and provides flexible timing for our "Stars" which have Three hours window for In/Out timing. It gives us freedom to manage our clients from abroad easily and efficiently, without posing any burden on our Stars and that reflects in our quality work also. And leads to Happy customers, Happy "Stars".</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="more-feature-box">
                            <h2 class="sub-heading">Fun @ Work</h2>
                            <p>After all this is who we are, we celebrate every moment, we party, we dance, we travel, we play, we love our work, we love what we do, because we play while working and we work while playing. Our code arena is a playground for all "Stars".</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="creative-service-wrapper" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="main-heading text-center">Our Creative Service</h1>
                    <p class="text-center text-white">What we have in our bags to offer you.</p>
                    <ul class="service-slider">
                        <li>
                            <h2 class="sub-heading text-center">
                                SECURITY REVIEW
                            </h2>
                            <p class="text-center">
                                Salesforce AppExchange is a marketplace serving apps for best enterprises in world, to
                                keep up the trust they want your custom app to live upto security standards of
                                Salesforce. We have a dedicated team who have 100% hit ratio of clearing the security
                                reviews in first shot saving time and energy of our customers. Cleared more than 75
                                applications since 2012.
                            </p>
                        </li>
                        <li>
                            <h2 class="sub-heading text-center">
                                RESPONSIVE Design
                            </h2>
                            <p class="text-center">
                                Our USP is gorgeous and responsive Visualforce pages, using HTML5, CSS3, Bootstrap,
                                AngularJS, jQuery and Kendo. We know how to build sophisticated Single Page Apps (SPA)
                                using latest of web tech, and bringing all of that seamlessly to Salesforce, So your
                                customers love to use it.

                            </p>
                        </li>
                        <li>
                            <h2 class="sub-heading text-center">
                                Data Migration

                            </h2>
                            <p class="text-center">
                                Moving from existing System to Salesforce completely and want to bring your all data in?
                                We have expert team to migrate your complete data from your old system to Salesforce
                                without losing a single information and maintaining the data relationship. With the user
                                friendly interface.

                            </p>
                        </li>
                        <li>
                            <h2 class="sub-heading text-center">
                                RESPONSIVE Design
                            </h2>
                            <p class="text-center">
                                Our USP is gorgeous and responsive Visualforce pages, using HTML5, CSS3, Bootstrap,
                                AngularJS, jQuery and Kendo. We know how to build sophisticated Single Page Apps (SPA)
                                using latest of web tech, and bringing all of that seamlessly to Salesforce, So your
                                customers love to use it.

                            </p>
                        </li>
                        <li>
                            <h2 class="sub-heading text-center">
                                Data Migration

                            </h2>
                            <p class="text-center">
                                Moving from existing System to Salesforce completely and want to bring your all data in?
                                We have expert team to migrate your complete data from your old system to Salesforce
                                without losing a single information and maintaining the data relationship. With the user
                                friendly interface.

                            </p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="customer-service-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="main-heading text-center">Customer Stories</h1>
                    <p class="text-center">We have been working with ISVs for their product development at offshore and
                        also organizations desiring customization for streamlining their internal business processes. It
                        has been six years since we launched and all we have is happy client who are interested in
                        continuing with us and build a long lasting relationship.</p>
                    <p class="sub-heading-highlight">Here is what our esteemed customers speak for us:</p>
                    <ul class="slider">
                        <li>
                            <div class="testimonial-wrapper">
                                <div class="avtar">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avtar-01.jpg" />
                                </div>
                                <ul class="content">
                                    <li>
                                      “ You guys are doing very well. Very professional, reliable, very flexible in working around the shifts and the quality of work is very good. ”                               

                                    </li>
                                    <li class="customer-name">
                                        President
                                    </li>
                                    <li>Supply Chain Enterprise</li>
                                </ul>
                            </div>

                        </li>
                        
                        <li>
                            <div class="testimonial-wrapper">
                                <div class="avtar">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/how-dose-work-sec.jpg" />
                                </div>
                                <ul class="content">
                                    <li class="message">
                                       “ Briskminds is our invaluable partner. They are indeed experts at what they do. They have understood the platform very deeply and all our business problems are easily sorted out with their vast knowledge. So far we have excellent feedback from our clients. Thank you Briskminds! ”                            

                                    </li>
                                    <li class="client-name">
                                        Founder & CEO
                                    </li>
                                    <li class="designation">Online Logistics Enterprise</li>
                                </ul>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <section class="skillexpertise-wrapper" >

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="main-heading text-center">Skills & Expertise</h1>
                    <p class="text-white text-center">The hands on experience in diferent fields.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="skill-wrapper">
                        UX Design
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="skill-wrapper">
                        Microsoft .Net
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="skill-wrapper">
                        C#
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="skill-wrapper">
                        MVC
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="skill-wrapper">
                        Node Js
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="skill-wrapper">
                        Angular
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="skill-wrapper">
                        React
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="skill-wrapper">
                        Vue JS
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="skill-wrapper">
                        Kendo UI
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="skill-wrapper">
                        JQuery/Javascript
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="skill-wrapper">
                        Bootstrap
                    </div>
                </div>
				<div class="col-md-3 col-sm-12">
                    <div class="skill-wrapper">
                        UX(Adobe, Figma)
                    </div>
                </div>
				<div class="col-md-3 col-sm-12">
                    <div class="skill-wrapper">
                        APIs
                    </div>
                </div>
				<div class="col-md-3 col-sm-12">
                    <div class="skill-wrapper">
                        AWS
                    </div>
                </div>
				<div class="col-md-3 col-sm-12">
                    <div class="skill-wrapper">
                        Azure
                    </div>
                </div>
				<div class="col-md-3 col-sm-12">
                    <div class="skill-wrapper">
                        Google Cloud
                    </div>
                </div>
				<div class="col-md-3 col-sm-12">
                    <div class="skill-wrapper">
                        Marketing Cloud
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="talent-culture-wrapper" id="talent">
        <h1 class="main-heading text-center">
            Talent & Culture
        </h1>
        <p class="text-center">Pictures explains better than words. </p>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="talent-media-wrapper">
                        <div class="media-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" /></div>
                        <div class="media-caption">
                            We nurture innovation
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="talent-media-wrapper">
                        <div class="media-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" /></div>
                        <div class="media-caption">
                            We enrich client experience.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="talent-media-wrapper">
                        <div class="media-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" /></div>
                        <div class="media-caption">
                            We work with the industry.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="job-openings-wrapper" id="career">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="main-heading">
                        JOB openings
                    </h1>
                    <p class="text-center">We currently have following openings. Apply now to be a part of DREAM TEAM.
                        If you are pasionate enough and have the skills required for the job, we WELCOME YOU to our
                        team.</p>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 mt-3">
                    <div class="job-card-wrapper">
                        <h2 class="sub-heading text-center">.Net Full Stack Developer</h2>
                        <ul class="text-center">
                            <li>
                                <strong>Experience:</strong> 1-3 Years
                            </li>
                            <li>
                                <strong>Location:</strong> Jaipur
                            </li>
                            <li><strong>Requirement:</strong> .Net, C#, Web API, Angular, Good aptitude, Good communication skills, Good hold on requirement gathering</li>

                        </ul>
                        <button class="btn btn-primary">
                            Apply Now
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <div class="job-card-wrapper">
                        <h2 class="sub-heading text-center">Vue JS Full Stack Developer</h2>
                        <ul class="text-center">
                            <li>
                                <strong>Experience:</strong> 1-3 Years
                            </li>
                            <li>
                                <strong>Location:</strong> Jaipur
                            </li>
                            <li><strong>Requirement:</strong> .Net Core, C#, Web API, Vue JS, Good aptitude, Good communication skills, Good hold on requirement gathering</li>

                        </ul>
                        <button class="btn btn-primary">
                            Apply Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us-wrapper" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h1 class="main-heading">Contact With Us</h1>
                    <p>It just takes a moment, fill in your details and connect with us. Please do mention your queries
                        in comment section below.</p>
					<?php echo do_shortcode('[contact-form-7 id="49" title="Contact form 1"]');?>
					
                    
                </div>
                <div class="col-md-6 col-sm-12">
                    <iframe width="100%"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.0706764491924!2d75.76811331499762!3d26.901251983132596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db46fa3d9b975%3A0xfb47787d3f67e079!2sSevayatan%20Hospital!5e0!3m2!1sen!2sin!4v1605090323550!5m2!1sen!2sin"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>           
        </div>
        <div class="contact-detail-wrapper">
           <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li>
                            <h2 class="sub-heading">Location</h2>
                            <p>H-76, B.R Tower, RIICO Industrial Area, Mansarover,Jaipur 302020</p>
                        </li>
                        <li>
                            <h2 class="sub-heading">Location</h2>
                            <p>H-76, B.R Tower, RIICO Industrial Area, Mansarover,Jaipur 302020</p>
                        </li>
                        <li>
                            <h2 class="sub-heading">Location</h2>
                            <p>H-76, B.R Tower, RIICO Industrial Area, Mansarover,Jaipur 302020</p>
                        </li>
                    </ul>
                </div>
            </div>
           </div>
        </div>
    </section>


<?php
get_footer();
