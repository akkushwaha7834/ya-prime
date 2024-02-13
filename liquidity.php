<?php include_once('./include/header.php') ?>

<style>
  .image-box {
    padding: 1rem;
    border: 1px solid var(--bs-warning-bg-subtle);
    border-image-source: linear-gradient(90deg, rgba(34, 34, 34, 0.1) 0%, rgb(255, 193, 7) 50%, rgba(34, 34, 34, 0.1) 100%);
    border-image-slice: 1;
  }

  #navbar-prime .nav-pills .nav-link {
    color: #060606;
  }

  #navbar-prime .nav-pills .nav-link:is(.active, :hover) {
    background-color: #fac213;
  }

  .faq-accordion .accordion-button:not(.collapsed) {
    background-color: #060606;
    color: #fac213;
  }

  .faq-accordion .accordion-button::after {
    background: none;
    content: '-';
    font-size: 1.5rem;
    line-height: 0.8rem;
    text-align: center;
  }

  .faq-accordion .accordion-button:not(.collapsed)::after {
    content: '+';
  }
</style>

<section class="liquidity_banner">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Liquidity</h1>
        <div class="breadcrumb">
          <a href="./">Home</a>
          <span class="fa fa-angle-double-right"></span>
          <span class="current">Liquidity</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container py-3 sticky-top bg-body">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <nav id="navbar-prime" class="navbar justify-content-center">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="#prime-vip">Prime VIP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#prime-vvip">Prime VVIP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#prime-special">Prime Special</a>
            </li>
          </ul>
        </nav>

      </div>
    </div>
  </div>

  <div data-bs-spy="scroll" data-bs-target="#navbar-prime" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
    <div id="prime-vip">
      <section class="forex_liquidity">
        <div class="container">
          <div class="row gy-4">
            <div class="col-md-6 liquidity_left_content">
              <div class="liquidity_content">
                <h4 class="forex_liquidity_h4">
                  Liquidity Solutions
                </h4>
                <h2 class="forex_liquidity_h1">
                  Explore Top-Tier Forex Liquidity
                </h2>
                <p class="forex_liquidity_p">
                  Step onto the ladder of elite FX liquidity with YaPrime. We are one of the leading Forex Liquidity Providers, and with our relentless dedication, we deliver you the highest possible liquidity solution. Select from the broadest selection of integration options available, including APIs and FIX connectivity, to easily integrate your current systems into our liquidity offering.</p>
                <p class="forex_liquidity_p">
                  YaPrime gives you DMA (Direct Market Access) on regulated liquidity pools via our LPs; LPs offer low latency pricing in FX, CFDs, options and other financial products. Get into exceptional Forex trading with us as you explore the Best Forex Liquidity solutions that renovate the industry.
                </p>
              </div>
              <div class="liquidity_counter">
                <div class="row gy-4 liquidity_row_one">
                  <div class="col-md-6">
                    <div class="counter_number">
                      0
                    </div>
                    <div class="counter_content">
                      Spreads form
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="counter_number">
                      1%
                    </div>
                    <div class="counter_content">
                      Margin requirements
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="counter_number">
                      24/5
                    </div>
                    <div class="counter_content">
                      Trading hours
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="counter_number">
                      7
                    </div>
                    <div class="counter_content">
                      Liquidity venues
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="counter_number">
                      24/7
                    </div>
                    <div class="counter_content">
                      Technical support
                    </div>
                  </div>
                  <div class="col-12">
                    <a class="unique_anchor_one" href="request-demo.php">Get Started</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 liquidity_right_content">
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="qoute_wrapper_yellow">
                    <div class="symbol">
                      <img src="images/eur-usd.svg">
                      EUR/USD
                    </div>
                    <div class="rate">
                      1.07424 / 1.07425
                    </div>
                    <div class="spread">
                      Spread<br><span>0.1</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="qoute_wrapper_black">
                    <div class="symbol">
                      <img src="images/usd-jpy.svg">
                      USD/JPY
                    </div>
                    <div class="rate">
                      1.07424 / 1.07425
                    </div>
                    <div class="spread">
                      Spread<br><span>0.1</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="qoute_wrapper_black">
                    <div class="symbol">
                      <img src="images/gbp-usd.svg">
                      GBP/USD
                    </div>
                    <div class="rate">
                      1.07424 / 1.07425
                    </div>
                    <div class="spread">
                      Spread<br><span>0.1</span>
                    </div>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="qoute_wrapper_yellow">
                    <div class="symbol">
                      <img src="images/usd-chf.svg">
                      USD/CHF
                    </div>
                    <div class="rate">
                      1.07424 / 1.07425
                    </div>
                    <div class="spread">
                      Spread<br><span>0.1</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="qoute_wrapper_yellow">
                    <div class="symbol">
                      <img src="images/aud-usd.svg">
                      AUD/USD
                    </div>
                    <div class="rate">
                      1.07424 / 1.07425
                    </div>
                    <div class="spread">
                      Spread<br><span>0.1</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="qoute_wrapper_black">
                    <div class="symbol">
                      <img src="images/usd-cad.svg">
                      USD/CAD
                    </div>
                    <div class="rate">
                      1.07424 / 1.07425
                    </div>
                    <div class="spread">
                      Spread<br><span>0.1</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="qoute_wrapper_black">
                    <div class="symbol">
                      <img src="images/nzd-usd.svg">
                      NZD/USD
                    </div>
                    <div class="rate">
                      1.07424 / 1.07425
                    </div>
                    <div class="spread">
                      Spread<br><span>0.1</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="prime_benefits_section">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 offset-lg-2">
              <h2 class="benefits-heading">
                YaPrime VIP Account Benefits
              </h2>
              <h3 class="benefits_heading">
                Benefits of Using Our Prime VIP Account
              </h3>
              <p class="text-center">
                Our Prime VIP accounts offer exclusive benefits that set it apart from the competition. It provides our clients the opportunity to access an inclusive set of trading accounts for active trading right after the initial deposit.
              </p>
            </div>
          </div>
          <div class="row gy-4 mt-3">
            <div class="col-md-6">
              <div class="image-box">
                <div class="image_content_box mt-0 mb-3">
                  <img src="images/primevipimage.png" class="img-fluid">
                  <h4>
                    Range of Instrument Options
                  </h4>
                </div>
                <p class="mb-0">YaPrime’s VIP Forex Trading Account holders have access to a wide range of trading instruments listed on our website. Moreover, they can request additional instruments suiting their trading portfolio.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="image-box">
                <div class="image_content_box mt-0 mb-3">
                  <img src="images/primevipimage2.png" class="img-fluid">
                  <h4>
                    Tighter Spreads
                  </h4>
                </div>
                <p class="mb-0">Enjoy trading with tighter spreads, zero commission, and the option for swap-free accounts. These favourable conditions contribute to a cost-efficient and flexible trading experience.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="image-box">
                <div class="image_content_box mt-0 mb-3">
                  <img src="images/primevipimage3.png" class="img-fluid">
                  <h4>
                    Higher Leverage and Execution
                  </h4>
                </div>
                <p class="mb-0">Get access to higher leverage options for amplified trading power and better execution, enabling VIP Trading Account holders to grab trading opportunities with precision and efficiency.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="image-box">
                <div class="image_content_box mt-0 mb-3">
                  <img src="images/primevipimage4.png" class="img-fluid">
                  <h4>
                    Designed with Expert Insights
                  </h4>
                </div>
                <p class="mb-0">YaPrime's account packages were carefully designed in collaboration with experienced traders and Forex industry experts. Benefit from their invaluable insights to kickstart your forex brokerage business.
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center mt-4">
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Request Quote</button>
            </div>
          </div>
        </div>
      </section>

      <section class="liquidity-sub-parts">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4>Prime VIP</h4>
              <h2>Kickstart your Forex Brokerage with Our Prime VIP Account</h2>
              <p>Take your Forex Brokerage venture to the next level with our Prime VIP Account. This exclusive Forex VIP Account is designed to accelerate your Forex business growth and give access to a multitude of opportunities.</p>
            </div>
          </div>
          <div class="row liquidity_row_two">
            <div class="col-md-6">
              <div class="vip_image">
                <img src="images/about.jpg" class="img-fluid">
              </div>
            </div>
            <div class="col-md-6">
              <h4>Prime VIP</h4>
              <h2>Kickstart your Forex Brokerage with Our Prime VIP Account</h2>
              <p>Take your Forex Brokerage venture to the next level with our Prime VIP Account. This exclusive Forex VIP Account is designed to accelerate your Forex business growth and give access to a multitude of opportunities.</p>
              <div class="vip_pointers">
                <ul class="unlisted_list">
                  <li><i class="fa-solid fa-angles-right"></i> Pointer One</li>
                  <li><i class="fa-solid fa-angles-right"></i> Pointer One</li>
                  <li><i class="fa-solid fa-angles-right"></i> Pointer One</li>
                  <li><i class="fa-solid fa-angles-right"></i> Pointer One</li>
                  <li><i class="fa-solid fa-angles-right"></i> Pointer One</li>
                  <li><i class="fa-solid fa-angles-right"></i> Pointer One</li>
                  <li><i class="fa-solid fa-angles-right"></i> Pointer One</li>
                  <li><i class="fa-solid fa-angles-right"></i> Pointer One</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div id="prime-vvip"></div>

    <div id="prime-special"></div>
  </div>
</section>

<?php include_once('./include/benefits.php') ?>

<section class="py-5 bg-warning-subtle">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
        <h2 class="benefits-heading">FAQS</h2>
        <h3 class="benefits_heading mb-4">Frequently Asked Questions</h3>

        <div class="accordion faq-accordion" id="accordionExample">
          <div class="accordion-item border-0 mb-2">
            <h2 class="accordion-header">
              <button class="accordion-button shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                What is the one-time setup fee for the Prime VVIP Package?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>The one-time setup fee for our Prime VVIP Package is $6000. </p>
              </div>
            </div>
          </div>
          <div class="accordion-item border-0 mb-2">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                What distinguishes the Prime VVIP Package from the VIP Package?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>The Prime VVIP Package not only includes all the features of the VIP Package but also provides additional benefits such as Web API, Forex CRM, Bonus plugin, Extended dealer, Multi-level IB, and Liquidity manager.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item border-0">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                How can I upgrade to the Prime VVIP Package?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>To upgrade to the Prime VVIP Package, please get in touch with our dedicated support team. They will guide you through the process and help you make the most of this exclusive offering.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-9 mx-auto text-center">
        <h2 class="benefits-heading text-uppercase">Comparison</h2>
        <h3 class="benefits_heading">Compare YaPrime plan packages</h3>
        <p class="">We have solid experience of working with Tier-1 liquidity providers and our effectiveness has stood the test of time, proven by multi-billion dollar turnovers. </p>
      </div>
      <div class="col-12">
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>Features</th>
                <th class="text-center">Prime VIP</th>
                <th class="text-center">Prime VVIP</th>
                <th class="text-center">Prime Special</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Single margin account model</td>
                <td class="text-center">
                  <i class="fa fa-check text-success"></i>
                </td>
                <td class="text-center">
                  <i class="fa fa-check text-success"></i>
                </td>
                <td class="text-center">
                  <i class="fa fa-check text-success"></i>
                </td>
              </tr>
              <tr>
                <td>Simple risk management system</td>
                <td class="text-center">
                  <i class="fa fa-check text-success"></i>
                </td>
                <td class="text-center">
                  <i class="fa fa-check text-success"></i>
                </td>
                <td class="text-center">
                  <i class="fa fa-check text-success"></i>
                </td>
              </tr>
              <tr>
                <td>Multiple types of liquidity</td>
                <td class="text-center">
                  <i class="fa fa-check text-success"></i>
                </td>
                <td class="text-center">
                  <i class="fa fa-check text-success"></i>
                </td>
                <td class="text-center">
                  <i class="fa fa-check text-success"></i>
                </td>
              </tr>
              <tr>
                <td>Multiple types of liquidity</td>
                <td class="text-center">
                  <i class="fa fa-check text-success"></i>
                </td>
                <td class="text-center">
                  <i class="fa fa-times text-danger"></i>
                </td>
                <td class="text-center">
                  <i class="fa fa-times text-danger"></i>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include_once('./include/footer.php') ?>