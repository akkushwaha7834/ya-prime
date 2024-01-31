<?php include_once('./include/header.php') ?>

<style>
    .hero-section {
        background-color: #000;
        background-image: linear-gradient(180deg, #f5f5f5, #ffe38b);
        position: relative;
        z-index: 0;
    }

    .hero-section::before {
        position: absolute;
        content: '';
        inset: 0;
        background-image: linear-gradient(180deg, #f5f5f500, #0006);
        opacity: 0.8;
        z-index: -1;
    }
</style>

<section class="pt-5 hero-section">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-md-6">
                <div id="hero-slider" class="owl-carousel owl-theme">
                    <div class="item">
                        <h2 class="pointer_heading text-md-start">BEST LIQUIDITY SOLUTIONS FOR <span class="text-warning">YOUR FOREX BROKERAGE</span></h2>
                    </div>
                    <div class="item">
                        <h2 class="pointer_heading text-md-start">BEST LIQUIDITY SOLUTIONS FOR <span class="text-warning">YOUR FOREX BROKERAGE</span></h2>
                    </div>
                    <div class="item">
                        <h2 class="pointer_heading text-md-start">BEST LIQUIDITY SOLUTIONS FOR <span class="text-warning">YOUR FOREX BROKERAGE</span></h2>
                    </div>
                </div>
                <p>Are you ready to venture into the dynamic and potentially lucrative world of Forex brokerage?</p>
                <a href="#" class="d-inline-block mt4_anchor">Find out more</a>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4 mx-auto">
                <img src="./images/man-3.png" alt="ACCELERATE THE USER EXPERIENCE" class="img-fluid" />
            </div>
        </div>
    </div>
</section>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR to USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    }
  ],
  "showSymbolLogo": true,
  "isTransparent": false,
  "displayMode": "adaptive",
  "colorTheme": "light",
  "locale": "in"
}
  </script>
</div>
<!-- TradingView Widget END -->
<?php include_once('./include/footer.php') ?>