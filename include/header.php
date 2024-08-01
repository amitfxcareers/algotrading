<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Create and Execute Simple to Complex Algo Trading Strategies with Ease</title>
      <link rel="shortcut icon" href="./images/favicon.webp" type="image/x-icon">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="stylesheet" href="./assets/font-awesome/css/all.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
   </head>
   <body>
      <header class="header navbar-dark" id="StickyHeader">
         <nav class="navbar navbar-expand-lg p-0">
            <div class="container">
               <a class="navbar-brand" href="index.php">
               <img src="assets/images/algo-logo.png" class="header-logo" alt="Logo" title="nxg Logo">
               </a>
               <button class="mobile-menu-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
               <span class="toggler-icon fa-solid fa-bars text-white"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a href="phoenix.php" class="nav-link" role="button" aria-expanded="false">
                        Phoenix
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="odyssey.php" class="nav-link" role="button" aria-expanded="false">
                        Odyssey
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="enterprise.php" class="nav-link" role="button" aria-expanded="false">
                        Enterprise
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="ecosystem.php" class="nav-link" role="button" aria-expanded="false">
                        Our Ecosystem
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="pricing.php" class="nav-link" role="button" aria-expanded="false">
                        Pricing
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Promos
                           <svg class="ms-1" width="12" height="6" viewBox="0 0 12 6" fill="black" xmlns="http://www.w3.org/2000/svg">
                              <path d="M11 1L5.99999 5L1 1" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                        </a>
                        <div class="dropdown-menu">
                           <div class="container">
                              <button class="border-0 bg-transparent text-white mb-3 d-block d-lg-none">
                              <i class="fa-solid fa-chevron-left"></i>
                              <span>Back</span>
                              </button>
                              <div class="h-vh-80 overflow-y-auto overflow-x-hidden">
                                 <ul class="list-unstyled row gx-5 gy-4">
                                    <div class="col-lg-3">
                                       <div class="h6 text-uppercase mb-4">Our Promotions</div>
                                       <div class="container">
                                          <div class="row">
                                             <div class="col-lg-12 px-0">
                                                <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">
                                                   <li class="col-12 mb-2">
                                                      <a href="refer-and-earn.php">Refer And Earn</a>
                                                   </li>
                                                   <li class="col-12 mb-2">
                                                      <a href="refer-and-shop.php">Refer and Shop</a>
                                                   </li>
                                                </ol>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-3">
                                    </div>
                                    <div class="col-lg-3">
                                    </div>
                                    <div class="col-lg-3">
                                       <div class="h6 text-uppercase mb-4">BOOST YOUR TRADING WITH EXCLUSIVE PROMOTIONS</div>
                                       <div class="container">
                                          <div class="row">
                                             <div class="col-lg-12 px-0">
                                                <p>
                                                   Explore our latest offers and promotions to elevate your trading experience. Enjoy special bonuses, rebates, and much more.
                                                </p>
                                                <a href="https://my.nxgmarkets.com/auth/register" class="btttn-secondary">Start Trading</a><br>
                                                <p>
                                                   <small>Trading involves a high level of risk</small>
                                                </p>
                                                <p>
                                                   <a href="https://my.nxgmarkets.com/auth/register" class="btttn-primary">Try Free Demo</a>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="request-quote">
                  <a href="https://my.nxgmarkets.com/" class="theme-btn theme-btn2">Login</a>
                  <a href="https://my.nxgmarkets.com/auth/register" class="theme-btn theme-btn2">Signup</a>
               </div>
            </div>
         </nav>
         <div class="offcanvas offcanvas-end mobile-menu bg-dark" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header justify-content-end">
               <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
               <div class="mobile-menu-wrap">
                  <ul class="mobile-menu-list">
                     <!-- <li>
                        <a href="" class="menu-link moblie-dropdwon">Trading <i class="fa-solid fa-chevron-down"></i></a>
                        <div class="dropdown-mb-menu">
                           <ul>
                              <li>
                                 <a href="account-type.php">Account Types</a>
                              </li>
                              <li>
                                 <a href="deposit-withdrawal.php">Deposit & Withdrawal</a>
                              </li>
                              <li>
                                 <a href="safety-of-funds.php">Safety of Funds</a>
                              </li>
                              <li>
                                 <a href="forex.php">Forex</a>
                              </li>
                              <li>
                                 <a href="commodities.php">Commodities</a>
                              </li>
                              <li>
                                 <a href="indices.php">Indices</a>
                              </li>
                              <li>
                                 <a href="stocks.php">Shares</a>
                              </li>
                              <li>
                                 <a href="cryptocurrencies.php">Cryptos</a>
                              </li>
                              <li>
                                 <a href="trading-conditions.php">Trading Conditions</a>
                              </li>
                              <li>
                                 <a href="mt5.php">Meta Trader 5</a>
                              </li>
                              <li>
                                 <a href="ctrader.php">cTrader</a>
                              </li>
                              <li>
                                 <a href="copytrading.php">CopyTrading</a>
                              </li>
                           </ul>
                        </div>
                     </li> -->
                     <!-- <li>
                        <a href="" class="menu-link moblie-dropdwon">Tools <i class="fa-solid fa-chevron-down"></i></a>
                        <div class="dropdown-mb-menu">
                           <ul>
                              <li>
                                 <a href="trading-calculator.php">Trading Calculators</a>
                              </li>
                              <li>
                                 <a href="trading-signals.php">Trading Signals</a>
                              </li>
                              <li>
                                 <a href="autochartist.php">Autochartist</a>
                              </li>
                              <li>
                                 <a href="videos.php">Videos</a>
                              </li>
                              <li>
                                 <a href="webinars.php">Webinars</a>
                              </li>
                              <li>
                                 <a href="seminars.php">Seminars</a>
                              </li>
                           </ul>
                        </div>
                     </li> -->
                     <!-- <li>
                        <a href="" class="menu-link moblie-dropdwon">Partners <i class="fa-solid fa-chevron-down"></i></a>
                        <div class="dropdown-mb-menu">
                           <ul>
                              <li>
                                 <a href="nxgmarketsaffiliates.php">Affiliate Program</a>
                              </li>
                              <li>
                                 <a href="nxgmarkets-ibs.php">Introducing Broker (IB)</a>
                              </li>
                              <li>
                                 <a href="advantages.php">Advantages</a>
                              </li>
                              <li>
                                 <a href="marketing-tools.php">Marketing Tools</a>
                              </li>
                              <li>
                                 <a href="commission-structure.php">Commission structure</a>
                              </li>
                           </ul>
                        </div>
                     </li> -->
                     <!-- <li>
                        <a href="" class="menu-link moblie-dropdwon">Promos <i class="fa-solid fa-chevron-down"></i></a>
                        <div class="dropdown-mb-menu">
                           <ul>
                              <li>
                                 <a href="refer-and-earn.php">Refer And Earn</a>
                              </li>
                              <li>
                                 <a href="refer-and-shop.php">Refer and Shop</a>
                              </li>
                           </ul>
                        </div>
                     </li> -->
                     <!-- <li>
                        <a href="" class="menu-link moblie-dropdwon">About <i class="fa-solid fa-chevron-down"></i></a>
                        <div class="dropdown-mb-menu">
                           <ul>
                              <li>
                                 <a href="about.php">About Us</a>
                              </li>
                              <li>
                                 <a href="#">Mission, Vision & Values</a>
                              </li>
                              <li>
                                 <a href="careers.php">Careers</a>
                              </li>
                              <li>
                                 <a href="contact-us.php">Contact Us</a>
                              </li>
                              <li>
                                 <a href="why-trade-forex.php">Why Trade Forex</a>
                              </li>
                              <li>
                                 <a href="regulations-licenses.php">Regulations & Licenses</a>
                              </li>
                           </ul>
                        </div>
                     </li> -->
                     <li>
                        <a href="https://algotrading.nxgtech.io/" class="menu-link">Home</a>
                     </li>
                     <li>
                        <a href="pricing.php" class="menu-link">Pricing</a>
                     </li>
                     <li class="ps-2 mt-4">
                        <a href="https://my.nxgmarkets.com/" class=" bttn-primary">Login</a>
                        <a href="#" class=" bttn-secondary">Signup</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </header>