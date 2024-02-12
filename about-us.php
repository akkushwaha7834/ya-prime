<?php include_once('./include/header.php') ?>

<style>
    .card-icon {
        width: 80px;
        height: 80px;
        display: grid;
        place-content: center;
        background: #fff;
        border: 2px solid transparent;
        border-radius: 50%;
        position: absolute;
        right: 50%;
        transform: translate(50%, -30px);
        box-shadow: 0 0px 20px #0004;
    }

    .card-hover * {
        transition: all .3s ease-in-out;
    }

    .card-hover {
        transition: all .3s ease-in-out;
        background-color: #060606;
        color: #fff;
    }

    .card-hover:hover {
        background-color: #fff;
        color: #060606;
    }

    .card-hover:hover .card-icon {
        box-shadow: none;
        border-color: #ffc107;
        background-color: #fff8e1;
    }

    .card-hover .card-title {
        color: #ffc107;
        font-weight: 600;
    }

    .card-hover:hover .card-title {
        color: #060606;
    }
</style>

<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>About Us</h1>
                <div class="breadcrumb">
                    <a href="./">Home</a>
                    <span class="fa fa-angle-double-right me-1"></span>
                    <span class="current">About us</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_section">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-md-6 col-lg-5">
                <img src="images/about.jpg" class="img-fluid" />
            </div>
            <div class="col-md-6 offset-lg-1">
                <h2 class="mb-3">YaPrime: Your Top Tier Forex Liquidity&nbsp;Provider</h2>
                <p class="mb-0">At YaPrime, our core belief is to inspire and empower aspiring Forex brokers with our premium liquidity, brokerage, and trading technology solutions. We are dedicated to shaping the future of Forex trading through innovation and excellence.</p>
                <!-- <p class="para mb-2">
                    YaPrime believes in setting the industry standard for liquidity and market access solutions. We recognize that our global customer base has varied requirements and priorities, and our solutions are designed around this understanding.
                </p>
                <p class="para mb-0">
                    We offer direct access to Liquidity from Institutional Liquidity pools – through our partnership with a regulated Liquidity Provider, and use our Data Feeds to enjoy the low latency price streams for more than 300 instruments.
                </p> -->
            </div>
            <div class="col-md-6">
                <h2 class="mb-3">Our Mission</h2>
                <p class="mb-0">Our Mission is to dominate the Forex Industry by giving our broker partners best-in-class liquidity solutions, state-of-the-art technology, and endless support, all geared toward their ongoing prosperity in a continually evolving market. We are the <strong>Top Tier Liquidity Providers</strong> aiming to raise the bar higher. We consistently advance our technology and tools to supply the best solutions possible for the most successful FX brokerages.</p>
            </div>
            <div class="col-md-6 offset-lg-1 col-lg-5">
                <img src="images/about.jpg" class="img-fluid" />
            </div>
            <div class="col-md-6 col-lg-5">
                <img src="images/about.jpg" class="img-fluid" />
            </div>
            <div class="col-md-6 offset-lg-1">
                <h2 class="mb-3">Our Unique Approach</h2>
                <p class="mb-0">We understand that every client is unique, so we offer customised solutions catering to their needs. When you partner with YaPrime, you receive more than just liquidity services. Our team of experts works closely with our clients to offer innovative ideas, tools for easier operations, risk management solutions, dealing desk strategies, marketing leads, and much more. We constantly innovate and improve our services to stay ahead of the curve and deliver solutions that help our clients succeed in the ever-changing financial landscape. </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-10 offset-lg-1">
                <div class="shadow bg-white p-3 rounded text-center">
                    <h2 class="mb-3">Strong Regulatory Framework</h2>
                    <p class="mb-2">YaPrime is regulated under the Mauritius Financial Services Authority(MFSA). We adhere to strict regulatory guidelines, ensuring our operations' transparency, security, and professionalism. Our commitment to compliance is a core pillar of our business, and we continuously work to maintain the highest in every aspect of our services.</p>
                    <p>Our regulation under the MFSA guarantees that we operate within a well-established and secure legal framework. This gives our clients the confidence and trust to partner with us for their liquidity solutions. We prioritise the security of our client's data and assets, implementing robust internal controls and procedures to safeguard sensitive information and client funds.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2>Your Bridge to Forex Success</h2>
                <p class="mb-5">Discover how our solutions empower your journey</p>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card border-0 shadow position-relative text-center h-100 card-hover">
                    <div class="card-icon">
                        <img src="https://www.yaprime.com/old/public/web/images/growth.png" alt="Grow Your Forex Business" class="img-fluid" />
                    </div>
                    <div class="card-body mt-5">
                        <h5 class="card-title">Grow Your Forex Business</h5>
                        <p class="card-text">We're dedicated to boosting your forex business by delivering efficiencies that benefit both you and your clients.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card border-0 shadow position-relative text-center h-100 card-hover">
                    <div class="card-icon">
                        <img src="https://www.yaprime.com/old/public/web/images/scaling.png" alt="Access Global Liquidity Pools" class="img-fluid" />
                    </div>
                    <div class="card-body mt-5">
                        <h5 class="card-title">Access Global Liquidity&nbsp;Pools</h5>
                        <p class="card-text">Our custom liquidity solutions leverage fast, robust technology and institutional risk management and execution, giving you access to global liquidity pools.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card border-0 shadow position-relative text-center h-100 card-hover">
                    <div class="card-icon">
                        <img src="https://www.yaprime.com/old/public/web/images/simplifying.png" alt="Scale Your Trading Offering" class="img-fluid" />
                    </div>
                    <div class="card-body mt-5">
                        <h5 class="card-title">Scale Your Trading Offering</h5>
                        <p class="card-text">With the ability to distribute and source deals globally across five continents, we enable you to scale your trading offering and expand your reach.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card border-0 shadow position-relative text-center h-100 card-hover">
                    <div class="card-icon">
                        <img src="https://www.yaprime.com/old/public/web/images/global.png" alt="Simplify Cost and Complexity" class="img-fluid" />
                    </div>
                    <div class="card-body mt-5">
                        <h5 class="card-title">Simplify Cost and Complexity</h5>
                        <p class="card-text">Reduce cost and complexity by leveraging our third-party integrations and trading infrastructure. This allows you to focus on delivering your core value.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card border-0 shadow position-relative text-center h-100 card-hover">
                    <div class="card-icon">
                        <img src="https://www.yaprime.com/old/public/web/images/customise-and-personalize.png" alt="Customise and Personalize" class="img-fluid" />
                    </div>
                    <div class="card-body mt-5">
                        <h5 class="card-title">Customise and Personalize</h5>
                        <p class="card-text">Build apps and personalise your services with ease. Access our API solutions to create fully integrated experiences, capture client data, or brand our frontends according to your preferences.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card border-0 shadow position-relative text-center h-100 card-hover">
                    <div class="card-icon">
                        <img src="https://www.yaprime.com/old/public/web/images/expertise-in-global-expansion.png" alt="Expertise in Global Expansion" class="img-fluid" />
                    </div>
                    <div class="card-body mt-5">
                        <h5 class="card-title">Expertise in Global Expansion</h5>
                        <p class="card-text">We provide the expertise you need to scale your business across global markets, ensuring you have the support required for your brokerage success.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card border-0 shadow position-relative text-center h-100 card-hover">
                    <div class="card-icon">
                        <img src="https://www.yaprime.com/old/public/web/images/trading-technology.png" alt="Top-Tier Trading Technology" class="img-fluid" />
                    </div>
                    <div class="card-body mt-5">
                        <h5 class="card-title">Top-Tier Trading Technology</h5>
                        <p class="card-text">Explore our best-in-class trading technology solutions, including customisable trading platforms and APIs. These solutions are designed to stay at the forefront of industry innovation.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card border-0 shadow position-relative text-center h-100 card-hover">
                    <div class="card-icon">
                        <img src="https://www.yaprime.com/old/public/web/images/access-to-global-markets.png" alt="Access to Global Markets" class="img-fluid" />
                    </div>
                    <div class="card-body mt-5">
                        <h5 class="card-title">Access to Global Markets</h5>
                        <p class="card-text">Our platform opens doors to global markets through our proprietary liquidity pool, aggregating pricing from multiple top-tier liquidity banks and ECNs. Enjoy deep liquidity and competitive pricing across a diverse range of financial instruments.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="bg-black py-0">
    <div class="container-fluid px-0">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-5 g-0">
            <div class="position-relative overflow-hidden">
                <div class="card-box wow fadeInUp" data-wow-delay="100ms">
                    <figure class="mb-0">
                        <img src="images/trading-platform.jpeg" alt="Duration" class="img-fluid">
                    </figure>
                    <div class="pos">
                        <h5><span class="services_heading_hover">Platform Setup and Configuration</span></h5>
                        <p class="mb-0 text-white">Ensure a smooth start to your trading journey with our expert Metatrader 4/5 platform setup and configuration services. We'll guide you through the process, ensuring all settings are optimized for your specific trading strategy.</p>
                    </div>
                </div>
            </div>
            <div class="position-relative overflow-hidden">
                <div class="card-box wow fadeInUp" data-wow-delay="200ms">
                    <figure class="mb-0">
                        <img src="images/server-maintenance.jpeg" alt="Entry Requirements" class="img-fluid">
                    </figure>
                    <div class="pos">

                        <h5><span class="services_heading_hover">Server Maintenance and Monitoring</span></h5>
                        <p class="mb-0 text-white">Trust our team to handle the technical aspects of server maintenance and monitoring. We ensure the Metatrader main and backup servers are running at peak performance, minimizing downtime and disruptions to your trading activities.</p>
                    </div>
                </div>
            </div>
            <div class="position-relative overflow-hidden">
                <div class="card-box wow fadeInUp" data-wow-delay="300ms">
                    <figure class="mb-0">
                        <img src="images/security-enhancements.webp" alt="Review Platforms" class="img-fluid">
                    </figure>
                    <div class="pos">

                        <h5><span class="services_heading_hover">Security Enhancements</span></h5>
                        <p class="mb-0 text-white">Protect your assets and sensitive information with our comprehensive security enhancements. From encryption protocols to secure server configurations, we prioritize the safety of your trading environment.</p>
                    </div>
                </div>
            </div>
            <div class="position-relative overflow-hidden">
                <div class="card-box wow fadeInUp" data-wow-delay="400ms">
                    <figure class="mb-0">
                        <img src="images/user-support.jpeg" alt="Submission Verification" class="img-fluid">
                    </figure>
                    <div class="pos">

                        <h5><span class="services_heading_hover"> User Support and Training</span></h5>
                        <p class="mb-0 text-white">Our dedicated support team is available around the clock to assist with any user-related issues or inquiries. Additionally, we provide training resources to help users make the most of the Metatrader platform's advanced features.</p>
                    </div>
                </div>
            </div>
            <div class="position-relative overflow-hidden">
                <div class="card-box wow fadeInUp" data-wow-delay="500ms">
                    <figure class="mb-0">
                        <img src="images/custom-scripting-and-automation.jpeg" alt="Scoring" class="img-fluid">
                    </figure>
                    <div class="pos">

                        <h5><span class="services_heading_hover">Custom Scripting and Automation</span></h5>
                        <p class="mb-0 text-white">Tailor the Metatrader platform to your specific needs with our custom scripting and automation services. Enhance your trading strategies by automating repetitive tasks and executing complex trading algorithms.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<?php include_once('./include/footer.php') ?>