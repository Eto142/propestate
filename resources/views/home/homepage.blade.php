@include('home.header')



{{-- <div id="reitPopup" class="popup">
  <div class="popup-content">
    <span class="close">&times;</span>
    <h2>How to Invest in REIT</h2>
    <p class="subtitle">Follow these simple steps to get started with real estate investment.</p>
    <ol class="steps-list">
      <li><strong>Step 1:</strong> Create an account on our platform.</li>
      <li><strong>Step 2:</strong> Complete your investor profile.</li>
      <li><strong>Step 3:</strong> Browse through available REIT opportunities.</li>
      <li><strong>Step 4:</strong> Select a REIT and determine your investment amount.</li>
      <li><strong>Step 5:</strong> Review the terms and sign the investment agreement.</li>
      <li><strong>Step 6:</strong> Fund your investment through bank transfer or cryptocurrency.</li>
      <li><strong>Step 7:</strong> Track your returns through your personalized dashboard.</li>
    </ol>
    <div class="btn-container">
      <button id="closePopupBtn" class="btn-close">Got it!</button>
    </div>
  </div>
</div>

<style>

/* General Popup Styles */
.popup {
  display: none;
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.75);
  display: flex;
  justify-content: center;
  align-items: center;
}

.popup-content {
  background-color: #fff;
  border-radius: 15px;
  padding: 40px;
  width: 90%;
  max-width: 550px;
  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
  text-align: center;
  position: relative;
  animation: fadeInUp 0.5s ease-in-out;
  display: flex;
  flex-direction: column;
}

.close {
  position: absolute;
  top: 15px;
  right: 20px;
  font-size: 24px;
  font-weight: bold;
  color: #555;
  cursor: pointer;
  transition: color 0.3s ease;
}

.close:hover {
  color: #000;
}

h2 {
  font-family: 'Poppins', sans-serif;
  font-size: 2rem;
  color: #333;
  margin-bottom: 10px;
}

.subtitle {
  font-family: 'Roboto', sans-serif;
  font-size: 1.1rem;
  color: #666;
  margin-bottom: 25px;
}

.steps-list {
  text-align: left;
  list-style-type: decimal;
  padding-left: 20px;
  line-height: 1.7;
  font-family: 'Roboto', sans-serif;
  font-size: 1rem;
  color: #444;
}

.steps-list li {
  margin-bottom: 12px;
}

/* Button Styling */
.btn-container {
  display: flex;
  justify-content: center;
  margin-top: 30px;
}

.btn-close {
  padding: 12px 24px;
  background-color: #0069d9;
  color: #fff;
  border: none;
  border-radius: 50px;
  font-family: 'Poppins', sans-serif;
  font-size: 1rem;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-close:hover {
  background-color: #0053a6;
}

/* Responsive adjustments */
@media (min-width: 768px) {
  .popup-content {
    padding: 50px;
  }
}

@media (min-width: 1024px) {
  .btn-container {
    margin-top: 40px;
  }
}

/* Animation for popup */
@keyframes fadeInUp {
  from {
    transform: translateY(50px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

</style>

<script>

  // Show popup when the page loads
window.onload = function() {
  document.getElementById('reitPopup').style.display = 'flex';
};

// Close popup on clicking the close button or 'Got it' button
document.querySelector('.close').addEventListener('click', function() {
  document.getElementById('reitPopup').style.display = 'none';
});

document.getElementById('closePopupBtn').addEventListener('click', function() {
  document.getElementById('reitPopup').style.display = 'none';
});

</script>


 --}}




<div class="preloader">
  <div class="loader">
      <div class="loader-icon">
          <!-- Home icon created with CSS -->
          <div class="home-icon">
              <div class="roof"></div>
              <div class="body">
                  <div class="window left"></div>
                  <div class="window right"></div>
                  <div class="door"></div>
              </div>
              <div class="chimney"></div>
          </div>
      </div>
  </div>
</div>

<script>
  // JavaScript to hide the preloader after the page fully loads
  window.addEventListener('load', function () {
      const preloader = document.querySelector('.preloader');
      preloader.style.display = 'none';
  });
</script>

<style>
  /* Preloader Styles */
  .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #f5f5f5; /* Light grey background */
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999; /* High z-index to overlay everything */
  }

  .preloader .loader {
      text-align: center;
  }

  .preloader .loader-icon {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 80px;
      height: 80px;
  }

  .home-icon {
      position: relative;
      width: 60px;
      height: 60px;
      animation: heartbeat 1.5s infinite;
  }

  .home-icon .roof {
      position: absolute;
      top: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 0;
      height: 0;
      border-left: 30px solid transparent;
      border-right: 30px solid transparent;
      border-bottom: 20px solid #3498db; /* Blue roof */
  }

  .home-icon .body {
      position: absolute;
      top: 20px;
      left: 50%;
      transform: translateX(-50%);
      width: 50px;
      height: 35px;
      background-color: #3498db; /* Blue house body */
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
      border-radius: 2px;
  }

  .home-icon .window {
      position: absolute;
      width: 8px;
      height: 10px;
      background-color: #ffffff; /* White windows */
      border: 1px solid #3498db; /* Border color matches roof */
      top: 8px;
  }

  .home-icon .window.left {
      left: 8px;
  }

  .home-icon .window.right {
      right: 8px;
  }

  .home-icon .door {
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 12px;
      height: 16px;
      background-color: #ffffff; /* White door */
      border: 1px solid #3498db; /* Border color matches roof */
  }

  .home-icon .chimney {
      position: absolute;
      top: 2px;
      right: 10px;
      width: 5px;
      height: 10px;
      background-color: #3498db; /* Chimney color matches roof */
      border-radius: 1px;
      box-shadow: -1px -1px 2px rgba(0, 0, 0, 0.1); /* Subtle shadow for chimney */
  }

  @keyframes heartbeat {
      0%, 100% {
          transform: scale(1);
      }
      50% {
          transform: scale(1.1); /* Slightly larger to simulate heartbeat */
      }
  }
</style>


<div class="Page-content">
  <main class="Page-oneColumn" data-modulewell>
    <div
      class="PagePromoModuleB"
      data-module
      data-width="full"
      data-padding="none"
      data-text-align="center"
      data-has-background
    >
      <a
        class="AnchorLink"
        id="invest-in-real-estate"
        name="invest-in-real-estate"
        data-cms-ai="0"
      ></a>

      <div class="PagePromo-media">
        <a
          class="Link"
          aria-label="Invest in real estate"
          href="{{url('investment')}}"
          data-cms-ai="0"
          ><picture>
            <source
              media="(min-width: 768px)"
              type="image/webp"
              width="500"
              height="500"
              srcset="
                build.jpg  1x,
                build.jpg 2x
              "
            />

            <source
              media="(min-width: 768px)"
              width="500"
              height="500"
              srcset="
                build.jpg
              "
            />

            <source
              type="image/webp"
              width="500"
              height="500"
              srcset="
              build.jpg
              "
            />

            <source
              width="500"
              height="500"
              srcset="
              build.jpg
              "
            />

            <img
              class="Image"
              data-image-size="medium-square"
              alt="HP_hero_LA.c3acc026.jpg"
              width="500"
              height="500"
              src="build.jpg"
            />
          </picture>
        </a>
      </div>

          <div class="PagePromoModuleB-content-wrapper">
            <div class="PagePromoModuleB-content">
              <div class="PagePromo-title">Invest in real estate</div>

              <div class="PagePromo-description">BUILD THE FUTURE YOU WANT</div>

              <div class="PagePromoModuleB-extraText">
                Access Institutional Quality Investments
              </div>

              <div class="PagePromo-button">
                <a
                  class="Button"
                  data-size="default"
                  href="{{url('investment')}}"
                  data-cms-ai="0"
                  >View investments</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="PageListStandardM" data-module>
          <a
            class="AnchorLink"
            id="explore-opportunities-beyond-stocks-and-bonds"
            name="explore-opportunities-beyond-stocks-and-bonds"
            data-cms-ai="0"
          ></a>

          <div class="PageListStandardM-column">
            <a
              class="AnchorLink"
              id="explore-opportunities-beyond-stocks-and-bonds"
              name="explore-opportunities-beyond-stocks-and-bonds"
              data-cms-ai="0"
            ></a>

            <div class="PageList-header">
              <div class="PageList-header-title" data-animate="fade">
                Explore opportunities beyond stocks and bonds
              </div>

              <div class="PageList-header-description" data-animate="fade">
                <p>
                  Diversify with commercial real estate with the potential to
                  generate income and grow in value.
                </p>
              </div>
            </div>

            <div class="PageListStandardM-desktopFooter">
              <div class="PageList-footer" data-animate="fade">
                <div class="PageList-cta" data-animate="fade">
                  <a
                    class="Button"
                    href="{{url('investment')}}"
                    data-cms-ai="0"
                    ><p>OPEN INVESTMENTS</p></a
                  >
                </div>
              </div>
            </div>
          </div>

          <div class="PageListStandardM-column">
            <div class="PageList-items">
              <div class="PageList-items-item">
                <div class="PagePromo">
                  <div class="PagePromo-content">
                    <div class="PagePromo-title" data-animate="fade">
                      ACCESS
                    </div>

                    <div class="PagePromo-description" data-animate="fade">
                      Private market offerings
                    </div>

                    <div class="PagePromo-extraText" data-animate="fade">
                      250,000+ investors have joined
                    </div>
                  </div>
                </div>
              </div>

              <div class="PageList-items-item">
                <div class="PagePromo">
                  <div class="PagePromo-content">
                    <div class="PagePromo-title" data-animate="fade">
                      INVEST
                    </div>

                    <div class="PagePromo-description" data-animate="fade">
                      In private placements and Real Estate Investment Trusts
                      (“REITS”)
                    </div>

                    <div class="PagePromo-extraText" data-animate="fade">
                      Over $950 invested on the
                      platform&#x60;
                    </div>
                  </div>
                </div>
              </div>

              <div class="PageList-items-item">
                <div class="PagePromo">
                  <div class="PagePromo-content">
                    <div class="PagePromo-title" data-animate="fade">GAIN</div>

                    <div class="PagePromo-description" data-animate="fade">
                      Exposure to more deals
                    </div>

                    <div class="PagePromo-extraText" data-animate="fade">
                      Over $5.7 in deals posted
                      on the platform.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="PageListStandardM-mobileFooter">
              <div class="PageList-footer" data-animate="fade">
                <div class="PageList-cta" data-animate="fade">
                  <a
                    class="Button"
                    href="{{url('investment')}}"
                    data-cms-ai="0"
                    ><p>OPEN INVESTMENTS</p></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="PageListStandardN"
          data-inverse-colors
          data-image-position="left"
        >
          <a
            class="AnchorLink"
            id="you-deserve-more-than-just-an-investment-platform"
            name="you-deserve-more-than-just-an-investment-platform"
            data-cms-ai="0"
          ></a>

          <div class="PageList-container">
            <div class="PageList-column">
              <div class="PageList-background">
                <picture>
                  <source
                    media="(min-width: 768px)"
                    type="image/webp"
                    width="1440"
                    height="1080"
                    srcset="
                    1.png 2x
                    "
                  />

                  <source
                    media="(min-width: 768px)"
                    width="1440"
                    height="1080"
                    srcset="
                    1.png
                    "
                  />

                  <source
                    type="image/webp"
                    width="500"
                    height="500"
                    srcset="
                      1.png
                      1.png
                    "
                  />

                  <source
                    width="500"
                    height="500"
                    srcset="
                    1.png
                    "
                  />

                  <img
                    class="Image"
                    data-image-size="medium-square"
                    alt="HP_more_boat.3a4e9dee.jpg"
                    width="500"
                    height="500"
                    src="1.png"
                    loading="lazy"
                  />
                </picture>
              </div>

              <a
                class="AnchorLink"
                id="you-deserve-more-than-just-an-investment-platform"
                name="you-deserve-more-than-just-an-investment-platform"
                data-cms-ai="0"
              ></a>

              <div class="PageList-header">
                <div class="PageList-header-title" data-animate="fade">
                  You deserve more than just an investment platform
                </div>

                <div class="PageList-header-description" data-animate="fade">
                  <p>
                    Join PropEstateHoldings and Navigate Through Uncertain Markets.
                  </p>
                </div>
              </div>

              <div class="PageList-footer" data-animate="fade">
                <div class="PageList-cta" data-animate="fade">
                  <a
                    class="Button"
                    href="{{url('investment')}}"
                    data-cms-ai="0"
                    ><p>View Investments</p></a
                  >
                </div>
              </div>
            </div>

            <div class="PageList-column">
              <div class="PageList-items">
                <div class="PageList-items-item">
                  <div class="PagePromo">
                    <div class="PagePromo-content">
                      <div class="PagePromo-title" data-animate="fade">
                        ACCESS &amp; TRANSPARENCY
                      </div>

                      <div class="PagePromo-description" data-animate="fade">
                        Thoughtful, transparent information enables you to make
                        personal decisions in pursuit of your financial goals.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="PageList-items-item">
                  <div class="PagePromo">
                    <div class="PagePromo-content">
                      <div class="PagePromo-title" data-animate="fade">
                        GET THE HELP YOU NEED
                      </div>

                      <div class="PagePromo-description" data-animate="fade">
                        Reach out and connect with a dedicated Investor
                        Relations team member anytime you have questions about
                        the Platform.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <bsp-listcarousel
          class="PageListCarouselF"
          data-has-background
          style="--color-module-background: #f2f2f2"
          data-module
        >
          <a
            class="AnchorLink"
            id="list-110000"
            name="list-110000"
            data-cms-ai="0"
          ></a>

          <a
            class="AnchorLink"
            id="list-110000"
            name="list-110000"
            data-cms-ai="0"
          ></a>

          <div class="PageList-items">
            <div class="PageList-items-item">
              <div class="PagePromoModuleC" data-module data-align-right>
                <div class="PagePromoModuleC-content">
                  <div class="PagePromo-category" data-animate="fade">
                    <span class="Link">Objective: Income</span>
                  </div>

                  <div class="PagePromo-title" data-animate="fade">
                    Members can invest in professionally managed, well-leased
                    properties
                  </div>

                  <div class="PagePromo-description" data-animate="fade">
                    PropEstateHoldings simplifies commercial real estate investing,
                    giving Members access to commercial real estate
                    opportunities with the potential to generate income.
                  </div>

                  <div class="PagePromo-byline" data-animate="fade">
                    <div class="PagePromo-date">June 15, 2022 07:46 AM</div>
                  </div>
                </div>
                <div class="PagePromoModuleC-mediaSection" data-animate="fade">
                  <div class="PagePromoModuleC-customToken-text" style="display: block; color:#176db6;">
                    <span class="pre-symbol">$</span
                    ><span class="PagePromoModuleC-customToken-text"
                      >5.7</span
                    ><span class="post-symbol">BN</span>
                  </div>
                  

                  <div class="PagePromoModuleC-extraText">
                    <span
                      >of Property Value Offered on the PropEstateHoldings platform
                      since inception and as of August 31, 2022
                    </span>
                  </div>
                </div>

                <div class="PagePromoModuleC-mobileButton">
                  <div class="PagePromo-button" data-animate="fade">
                    <a
                      class="Button"
                      data-size="default"
                      href="benefits-of-investing.php#adding-passive-income-to-your-portfolio"
                      data-cms-ai="0"
                      >Learn More</a
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="PageList-items-item">
              <div
                class="PagePromoModuleC"
                data-module
                data-align-right
                data-has-disclosure
              >
                <div class="PagePromoModuleC-content">
                  <div class="PagePromo-category" data-animate="fade">
                    <span class="Link">Objective: Grow Portfolio Value</span>
                  </div>

                  <div class="PagePromo-title" data-animate="fade">
                    Consider real estate as a vehicle for long-term appreciation
                  </div>

                  <div class="PagePromo-description" data-animate="fade">
                    By investing in markets with the potential for growth, and
                    properties with the potential for operational improvement,
                    the PropEstateHoldings platform provides opportunities that may
                    grow wealth over the long-term.
                  </div>

                  <div class="PagePromo-byline" data-animate="fade">
                    <div class="PagePromo-date">June 15, 2022 07:46 AM</div>
                  </div>

                  <div class="PagePromoModuleC-desktopButton">
                    <div class="PagePromo-button" data-animate="fade">
                      <a
                        class="Button"
                        data-size="default"
                        href="benefits-of-investing.php#a-strategy-to-grow-wealth"
                        data-cms-ai="0"
                        >Learn More</a
                      >
                    </div>
                  </div>
                </div>
                <div class="PagePromoModuleC-mediaSection" data-animate="fade">
                  <div class="PagePromo-media">
                    <span class="Link"
                      ><picture>
                        <source
                          type="image/webp"
                          width="1440"
                          height="1316"
                          data-flickity-lazyload-srcset="https://realtymogul.brightspotgocdn.com/dims4/default/7bb6a83/2147483647/strip/true/crop/594x543+0+0/resize/1440x1316!/format/webp/quality/90/?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2F5d%2F3f%2F94109f4f43a9819744fd4646fba2%2Fslide-grow-bar-chart-05-2021.1e44d268.png 1x,https://realtymogul.brightspotgocdn.com/dims4/default/a77b21e/2147483647/strip/true/crop/594x543+0+0/resize/2880x2632!/format/webp/quality/90/?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2F5d%2F3f%2F94109f4f43a9819744fd4646fba2%2Fslide-grow-bar-chart-05-2021.1e44d268.png 2x"
                          data-flickity-lazyload-src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgaGVpZ2h0PSIxMzE2cHgiIHdpZHRoPSIxNDQwcHgiPjwvc3ZnPg=="
                        />

                        <source
                          width="1440"
                          height="1316"
                          data-flickity-lazyload-srcset="https://realtymogul.brightspotgocdn.com/dims4/default/91d42b1/2147483647/strip/true/crop/594x543+0+0/resize/1440x1316!/quality/90/?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2F5d%2F3f%2F94109f4f43a9819744fd4646fba2%2Fslide-grow-bar-chart-05-2021.1e44d268.png"
                          data-flickity-lazyload-src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgaGVpZ2h0PSIxMzE2cHgiIHdpZHRoPSIxNDQwcHgiPjwvc3ZnPg=="
                        />

                        <img
                          class="Image"
                          data-image-size="xl-1440w-notfixed"
                          alt="slide_grow_bar_chart_05_2021.1e44d268.png"
                          width="1440"
                          height="1316"
                          data-flickity-lazyload-srcset="https://realtymogul.brightspotgocdn.com/dims4/default/91d42b1/2147483647/strip/true/crop/594x543+0+0/resize/1440x1316!/quality/90/?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2F5d%2F3f%2F94109f4f43a9819744fd4646fba2%2Fslide-grow-bar-chart-05-2021.1e44d268.png"
                          data-flickity-lazyload-src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgaGVpZ2h0PSIxMzE2cHgiIHdpZHRoPSIxNDQwcHgiPjwvc3ZnPg=="
                        />
                      </picture>
                    </span>
                  </div>

                  <div class="PagePromoModuleC-extraText">
                    <span>Nareit equity REIT index annualized return</span>
                  </div>

                  <div class="PagePromoModuleC-disclosureLink">
                    <bsp-disclosure-link
                      ><a class="disclosureModalLink" data-cms-ai="0"
                        >Disclosure</a
                      ></bsp-disclosure-link
                    >
                  </div>

                  <div class="PagePromoModuleC-disclosureDescription">
                    Average annualized returns (%) as of 12/31/20 NAREIT Equity
                    REIT Index sourced from NCREIF (NCREIF.org). The NAREIT
                    Equity REIT Index contains all publicly listed US Equity
                    REITs not designated as Timber REITs or Infrastructure
                    REITs. The NAREIT Equity REIT Index is illustrative of the
                    potential average annualized returns available to investors
                    in Commercial Real Estate. REITs offered by PropEstateHoldings are
                    not publicly traded, require minimum investments and may
                    have better or worse average annualized return performance
                    compared to this Index.
                  </div>
                </div>

                <div class="PagePromoModuleC-mobileButton">
                  <div class="PagePromo-button" data-animate="fade">
                    <a
                      class="Button"
                      data-size="default"
                      href="benefits-of-investing.php#a-strategy-to-grow-wealth"
                      data-cms-ai="0"
                      >Learn More</a
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="PageList-items-item">
              <div
                class="PagePromoModuleC"
                data-module
                data-align-right
                data-has-disclosure
              >
                <div class="PagePromoModuleC-content">
                  <div class="PagePromo-category" data-animate="fade">
                    <span class="Link">Objective: Diversification</span>
                  </div>

                  <div class="PagePromo-title" data-animate="fade">
                    The strongest portfolios often include alternative
                    investments
                  </div>

                  <div class="PagePromo-description" data-animate="fade">
                    The “efficient frontier” is the highest expected return for
                    a defined level of risk. Including alternative investments
                    like real estate in a portfolio has historically improved
                    returns, while decreasing risk.
                  </div>

                  <div class="PagePromo-byline" data-animate="fade">
                    <div class="PagePromo-date">June 15, 2022 07:46 AM</div>
                  </div>

                  <div class="PagePromoModuleC-desktopButton">
                    <div class="PagePromo-button" data-animate="fade">
                      <a
                        class="Button"
                        data-size="default"
                        href="benefits-of-investing.php#a-strategy-to-grow-wealth"
                        data-cms-ai="0"
                        >Learn More</a
                      >
                    </div>
                  </div>
                </div>
                <div class="PagePromoModuleC-mediaSection" data-animate="fade">
                  <div class="PagePromo-media">
                    <span class="Link"
                      ><picture>
                        <source
                          type="image/webp"
                          width="1440"
                          height="1062"
                          data-flickity-lazyload-srcset="https://realtymogul.brightspotgocdn.com/dims4/default/6945fb5/2147483647/strip/true/crop/610x450+0+0/resize/1440x1062!/format/webp/quality/90/?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2Ff0%2F84%2F255ddd3447f5b6f11b9ce87fa5a7%2Fslide-diversify-efficient-frontier.08eafbe9.png 1x,https://realtymogul.brightspotgocdn.com/dims4/default/4538e63/2147483647/strip/true/crop/610x450+0+0/resize/2880x2124!/format/webp/quality/90/?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2Ff0%2F84%2F255ddd3447f5b6f11b9ce87fa5a7%2Fslide-diversify-efficient-frontier.08eafbe9.png 2x"
                          data-flickity-lazyload-src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgaGVpZ2h0PSIxMDYycHgiIHdpZHRoPSIxNDQwcHgiPjwvc3ZnPg=="
                        />

                        <source
                          width="1440"
                          height="1062"
                          data-flickity-lazyload-srcset="https://realtymogul.brightspotgocdn.com/dims4/default/e768cc9/2147483647/strip/true/crop/610x450+0+0/resize/1440x1062!/quality/90/?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2Ff0%2F84%2F255ddd3447f5b6f11b9ce87fa5a7%2Fslide-diversify-efficient-frontier.08eafbe9.png"
                          data-flickity-lazyload-src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgaGVpZ2h0PSIxMDYycHgiIHdpZHRoPSIxNDQwcHgiPjwvc3ZnPg=="
                        />

                        <img
                          class="Image"
                          data-image-size="xl-1440w-notfixed"
                          alt="slide_diversify_efficient_frontier.08eafbe9.png"
                          width="1440"
                          height="1062"
                          data-flickity-lazyload-srcset="https://realtymogul.brightspotgocdn.com/dims4/default/e768cc9/2147483647/strip/true/crop/610x450+0+0/resize/1440x1062!/quality/90/?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2Ff0%2F84%2F255ddd3447f5b6f11b9ce87fa5a7%2Fslide-diversify-efficient-frontier.08eafbe9.png"
                          data-flickity-lazyload-src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgaGVpZ2h0PSIxMDYycHgiIHdpZHRoPSIxNDQwcHgiPjwvc3ZnPg=="
                        />
                      </picture>
                    </span>
                  </div>

                  <div class="PagePromoModuleC-extraText">
                    <span
                      >Efficient Frontier: traditional investments with &amp;
                      without alternatives</span
                    >
                  </div>

                  <div class="PagePromoModuleC-disclosureLink">
                    <bsp-disclosure-link
                      ><a class="disclosureModalLink" data-cms-ai="0"
                        >Disclosure</a
                      ></bsp-disclosure-link
                    >
                  </div>

                  <div class="PagePromoModuleC-disclosureDescription">
                    Based on the returns of the S&amp;P 500 Index, Barclays U.S.
                    Aggregate Bond Index, and the NCREIF (National Council of
                    Real Estate Investment Fiduciaries) Index, with and without
                    an asset allocation to direct real estate, over an 11-year
                    time period (2006-2016). Each index provides a broad
                    representation of a particular asset class and is not
                    indicative of any investment. Asset allocation does not
                    ensure a profit or protect against a loss. The rates of
                    returns shown do not reflect the deduction of fees and
                    expenses inherent in investing.
                  </div>
                </div>

                <div class="PagePromoModuleC-mobileButton">
                  <div class="PagePromo-button" data-animate="fade">
                    <a
                      class="Button"
                      data-size="default"
                      href="benefits-of-investing.php#a-strategy-to-grow-wealth"
                      data-cms-ai="0"
                      >Learn More</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </bsp-listcarousel>
        <div
          class="StatListB"
          data-module
          data-list-header-position="side"
          data-inverse-colors
          data-has-background
          style="--color-module-background: #202020"
          data-text-align="left"
          data-text-align="left"
        >
          <div class="PageList-header" data-auth-type="Join">
            <a
              class="AnchorLink"
              id="the-future-of-real-estate-investing"
              name="the-future-of-real-estate-investing"
              data-cms-ai="0"
            ></a>

            <div class="PageList-header-title" data-animate="fade">
              The future of real estate investing
            </div>

            <div class="PageList-header-description" data-animate="fade">
              It has always been our mission to give investors access to
              diverse, institutional-quality real estate opportunities, and
              we’re proud of the diversity that has been hosted on the Platform.
            </div>

            <div class="PageList-header-auth" data-animate="fade">
              
                        <bsp-auth-button>
                            <a class="JoinAuthButton AuthButton start" data-cms-ai="0"
                                onclick='
                                    let signup = document.getElementById("signupModal"); 
                                    signup.style.display = "block";
                                '
                            >Get Started</a>
                        </bsp-auth-button>

                        <bsp-auth-button>
                            <a class="JoinAuthButton AuthButton start1" data-cms-ai="0"
                                onclick='
                                    let signup = document.getElementById("signupModal1"); 
                                    signup.style.display = "block";
                                '
                            >Get Started</a>
                        </bsp-auth-button>
                       
            </div>

            <div class="PageList-cta" data-animate="fade">
              <a
                class="Button"
                href="{{url('investment')}}"
                data-cms-ai="0"
                >View Investments</a
              >
            </div>
          </div>

          <div class="StatListB-itemSection">
            <div class="StatListB-items" data-column-count="4">
              <div class="StatListB-items-item" data-animate="fade">
                <div class="StatPromo">
                  <div class="StatPromo-content">
                    <span
                      class="StatPromo-value"
                      data-counter
                      >250K+</span
                    >
                  </div>

                  <span class="StatPromo-description"> Members </span>

                  <div class="StatPromo-divider"></div>
                </div>
              </div>

              <div class="StatListB-items-item" data-animate="fade">
                <div class="StatPromo">
                  <div class="StatPromo-content">
                    <span
                      class="StatPromo-value"
                      data-counter
                      >33,000+</span
                    >
                  </div>

                  <span class="StatPromo-description"> Investments Made </span>

                  <div class="StatPromo-divider"></div>
                </div>
              </div>

              <div class="StatListB-items-item" data-animate="fade">
                <div class="StatPromo">
                  <div class="StatPromo-content">
                    <div class="StatPromo-statSign">$</div>

                    <span
                      class="StatPromo-value"
                      data-counter
                      >950MM+</span
                    >
                  </div>

                  <span class="StatPromo-description"> Capital Invested* </span>

                  <div class="StatPromo-divider"></div>
                </div>
              </div>

              <div class="StatListB-items-item" data-animate="fade">
                <div class="StatPromo">
                  <div class="StatPromo-content">
                    <div class="StatPromo-statSign">&gt;$</div>

                    <span
                      class="StatPromo-value"
                      data-counter
                      >5.7BN</span
                    >
                  </div>

                  <span class="StatPromo-description">
                    In Real Estate Nationwide
                  </span>

                  <div class="StatPromo-divider"></div>
                </div>
              </div>
            </div>

            <div class="StatListB-statDescription">
              *Investor capital deployed by real estate companies and funds into
              real estate projects, as well as material amounts of committed but
              undeployed cash held by real estate companies and funds, since
              inception through 21<sup>th</sup> Nov 2010.
            </div>
          </div>

          <div
            class="PageList-footer"
            data-auth-type="Join"
            data-animate="fade"
          >
            <div class="PageList-footer-auth">
            
                        <bsp-auth-button>
                            <a class="JoinAuthButton AuthButton start" data-cms-ai="0"
                                onclick='
                                    let signup = document.getElementById("signupModal"); 
                                    signup.style.display = "block";
                                '
                            >Get Started</a>
                        </bsp-auth-button>

                        <bsp-auth-button>
                            <a class="JoinAuthButton AuthButton start1" data-cms-ai="0"
                                onclick='
                                    let signup = document.getElementById("signupModal1"); 
                                    signup.style.display = "block";
                                '
                            >Get Started</a>
                        </bsp-auth-button>
                       
            </div>

            <div class="PageList-cta" data-animate="fade">
              <a
                class="Button"
                href="{{url('investment')}}"
                data-cms-ai="0"
                >View Investments</a
              >
            </div>
          </div>
        </div>
        <div class="HtmlModule">
          <a
            class="AnchorLink"
            id="html-embed-000000"
            name="html-embed-000000"
            data-cms-ai="0"
          ></a>

          <react-bsp
            data-component="IOCarousel"
            data-items-to-show="8"
            data-subtitle="CONFIDENT INVESTING IS BUILT ON TRANSPARENCY AND DUE DILIGENCE"
            data-title="Fully Realized Returns"
            data-show-completed="true"
          >
            <div data-description>
              Below are the most recent completed investments from which final
              distributions have been processed. Investments on PropEstateHoldings are
              illiquid and loss of invested capital is possible. Please review
              risk factors for private placements
              <a
                href="#"
                target="_blank"
                data-cms-ai="0"
                >here</a
              >.
            </div>
          </react-bsp>
        </div>


<div class="R-IOCarousel slider-container">
  <div class="R-IOCarousel-container">
    <div class="R-IOCarousel-wrapper">
      <div class="PageList-header">
        <div class="PageList-header-title">Fully Realized Returns</div>
        <div class="PageList-header-subtitle">
          CONFIDENT INVESTING IS BUILT ON TRANSPARENCY AND DUE DILIGENCE
        </div>
        <div class="PageList-header-description"></div>
      </div>
      <div
        class="R-IOCarousel-items flickity-enabled is-draggable"
        tabindex="0"
      >
        <div
          class="flickity-viewport  base_wrapper"
          style="height: 492.188px; touch-action: pan-y"
        >
          <div
            class="flickity-slider base" id="base"
            style="left: 0px; transform: translateX(-204.44%)"
          >
            <div
              class="R-IOCarousel-items-item items"
              style="position: absolute; left: 259.26%"
              aria-hidden="true"
               >
              <div
                class="R-IOPromo img-1"
                data-is-complete="true"
                data-status-label="Completed Equity"
                >
                <div
                  class="R-IOPromo-container"
                  data-is-reit="false"
                  data-io-id="88407"
                >
                  <div class="R-IOPromo-top">
                    <div class="R-IOPromo-statusLabel">
                      <span>Completed Equity</span>
                    </div>
                    <div class="R-IOPromo-image">
                      <img
                        src="https://apprealtymogul.com/sites/default/files/styles/private_placement_gallery_thumbnail/public/Fulton.PNG"
                      />
                    </div>
                  </div>
                  <div class="R-IOPromo-middle" data-is-carousel="true">
                    <div class="R-IOPromo-propertyType">
                      Student Housing
                      <hr />
                    </div>
                    <div class="R-IOPromo-propertyLocation">
                      Multiple Locations
                    </div>
                    <div class="R-IOPromo-investmentName">
                      95% Leased Student Housing
                    </div>
                    <div class="R-IOPromo-types">
                      <span
                        >Value-Add<span class="R-IOPromo-types-divider"
                          >|</span
                        ></span
                      >Equity
                    </div>
                  </div>
                  <div class="R-IOPromo-bottom">
                    <div class="R-IOPromo-actualIrr">
                      <div class="io-large-value">
                        <div>Actual IRR</div>
                        <div>-4.3%</div>
                      </div>
                      <div class="io-small-value">
                        <div>Target*</div>
                        <div>-</div>
                      </div>
                    </div>
                    <div class="R-IOPromo-actualHold">
                      <div class="io-large-value">
                        <div>Actual Hold Period</div>
                        <div class="R-IOPromo-actualHold-value">
                          <div>6.3 Years</div>
                        </div>
                      </div>
                      <div class="io-small-value">
                        <div>Target*</div>
                        <div>5.0 Years</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="R-IOCarousel-items-item"
              style="position: absolute; "
              aria-hidden="true"
                >
              <div
                class="R-IOPromo"
                data-is-complete="true"
                data-status-label="Completed Equity"
              >
                <div
                  class="R-IOPromo-container"
                  data-is-reit="false"
                  data-io-id="534237"
                >
                  <div class="R-IOPromo-top">
                    <div class="R-IOPromo-statusLabel">
                      <span>Completed Equity</span>
                    </div>
                    <div class="R-IOPromo-image">
                      <img
                        src="mont.jpg"
                      />
                    </div>
                  </div>
                  <div class="R-IOPromo-middle" data-is-carousel="true">
                    <div class="R-IOPromo-propertyType">
                      Multifamily
                      <hr />
                    </div>
                    <div class="R-IOPromo-propertyLocation">
                      Multiple Locations
                    </div>
                    <div class="R-IOPromo-investmentName">
                      Montgomery Portfolio - Philadelphia Multifamily
                    </div>
                    <div class="R-IOPromo-types">
                      <span
                        >Value-Add<span class="R-IOPromo-types-divider"
                          >|</span
                        ></span
                      >Equity
                    </div>
                  </div>
                  <div class="R-IOPromo-bottom">
                    <div class="R-IOPromo-actualIrr">
                      <div class="io-large-value">
                        <div>Actual IRR</div>
                        <div>23.4%</div>
                      </div>
                      <div class="io-small-value">
                        <div>Target*</div>
                        <div>-</div>
                      </div>
                    </div>
                    <div class="R-IOPromo-actualHold">
                      <div class="io-large-value">
                        <div>Actual Hold Period</div>
                        <div class="R-IOPromo-actualHold-value">
                          <div>3.8 Years</div>
                        </div>
                      </div>
                      <div class="io-small-value">
                        <div>Target*</div>
                        <div>5.0 Years</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="R-IOCarousel-items-item img-2"
              style="position: absolute; left: 13.8%"
              aria-hidden="true"
              >
              <div
                class="R-IOPromo"
                data-is-complete="true"
                data-status-label="Completed Equity"
              >
                <div
                  class="R-IOPromo-container"
                  data-is-reit="false"
                  data-io-id="440130"
                >
                  <div class="R-IOPromo-top">
                    <div class="R-IOPromo-statusLabel">
                      <span>Completed Equity</span>
                    </div>
                    <div class="R-IOPromo-image">
                      <img
                        src="foxwood.jpg"
                      />
                    </div>
                  </div>
                  <div class="R-IOPromo-middle" data-is-carousel="true">
                    <div class="R-IOPromo-propertyType">
                      Multifamily
                      <hr />
                    </div>
                    <div class="R-IOPromo-propertyLocation">Newark, DE</div>
                    <div class="R-IOPromo-investmentName">
                      Foxwood Apartments
                    </div>
                    <div class="R-IOPromo-types">
                      <span
                        >Value-Add<span class="R-IOPromo-types-divider"
                          >|</span
                        ></span
                      >Equity
                    </div>
                  </div>
                  <div class="R-IOPromo-bottom">
                    <div class="R-IOPromo-actualIrr">
                      <div class="io-large-value">
                        <div>Actual IRR</div>
                        <div>16.0%</div>
                      </div>
                      <div class="io-small-value">
                        <div>Target*</div>
                        <div>-</div>
                      </div>
                    </div>
                    <div class="R-IOPromo-actualHold">
                      <div class="io-large-value">
                        <div>Actual Hold Period</div>
                        <div class="R-IOPromo-actualHold-value">
                          <div>4.2 Years</div>
                        </div>
                      </div>
                      <div class="io-small-value">
                        <div>Target*</div>
                        <div>5.0 Years</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="R-IOCarousel-items-item img-3"
              style="position: absolute; left: 27.6%"
              aria-hidden="true"
              >
              <div
                class="R-IOPromo"
                data-is-complete="true"
                data-status-label="Completed Equity"
              >
                <div
                  class="R-IOPromo-container"
                  data-is-reit="false"
                  data-io-id="220800"
                >
                  <div class="R-IOPromo-top">
                    <div class="R-IOPromo-statusLabel">
                      <span>Completed Equity</span>
                    </div>
                    <div class="R-IOPromo-image">
                      <img
                        src="orlando.jpg"
                      />
                    </div>
                  </div>
                  <div class="R-IOPromo-middle" data-is-carousel="true">
                    <div class="R-IOPromo-propertyType">
                      Industrial
                      <hr />
                    </div>
                    <div class="R-IOPromo-propertyLocation">
                      Multiple Locations
                    </div>
                    <div class="R-IOPromo-investmentName">
                      Orlando Flex Industrial Portfolio
                    </div>
                    <div class="R-IOPromo-types">
                      <span
                        >Value-Add<span class="R-IOPromo-types-divider"
                          >|</span
                        ></span
                      >Equity
                    </div>
                  </div>
                  <div class="R-IOPromo-bottom">
                    <div class="R-IOPromo-actualIrr">
                      <div class="io-large-value">
                        <div>Actual IRR</div>
                        <div>44.6%</div>
                      </div>
                      <div class="io-small-value">
                        <div>Target*</div>
                        <div>-</div>
                      </div>
                    </div>
                    <div class="R-IOPromo-actualHold">
                      <div class="io-large-value">
                        <div>Actual Hold Period</div>
                        <div class="R-IOPromo-actualHold-value">
                          <div>5.4 Years</div>
                        </div>
                      </div>
                      <div class="io-small-value">
                        <div>Target*</div>
                        <div>5.0 Years</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="R-IOCarousel-items-item img-4"
              style="position: absolute; left: 41.48%"
              aria-hidden="true"
              >
              <div
                class="R-IOPromo"
                data-is-complete="true"
                data-status-label="Completed Equity"
              >
                <div
                  class="R-IOPromo-container"
                  data-is-reit="false"
                  data-io-id="1084814"
                >
                  <div class="R-IOPromo-top">
                    <div class="R-IOPromo-statusLabel">
                      <span>Completed Equity</span>
                    </div>
                    <div class="R-IOPromo-image">
                      <img
                        src="https://apprealtymogul.com/sites/default/files/styles/private_placement_gallery_thumbnail/public/montclair3.jpg"
                      />
                    </div>
                  </div>
                  <div class="R-IOPromo-middle" data-is-carousel="true">
                    <div class="R-IOPromo-propertyType">
                      Multifamily
                      <hr />
                    </div>
                    <div class="R-IOPromo-propertyLocation">Garland, TX</div>
                    <div class="R-IOPromo-investmentName">
                      Montclair Estates
                    </div>
                    <div class="R-IOPromo-types">
                      <span
                        >Value-Add<span class="R-IOPromo-types-divider"
                          >|</span
                        ></span
                      >Equity
                    </div>
                  </div>
                  <div class="R-IOPromo-bottom">
                    <div class="R-IOPromo-actualIrr">
                      <div class="io-large-value">
                        <div>Actual IRR</div>
                        <div>29.7%</div>
                      </div>
                      <div class="io-small-value">
                        <div>Target*</div>
                        <div>-</div>
                      </div>
                    </div>
                    <div class="R-IOPromo-actualHold">
                      <div class="io-large-value">
                        <div>Actual Hold Period</div>
                        <div class="R-IOPromo-actualHold-value">
                          <div>2.7 Years</div>
                        </div>
                      </div>
                      <div class="io-small-value">
                        <div>Target*</div>
                        <div>3.0 Years</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="R-IOCarousel-items-item img-5"
              style="position: absolute; left: 55.44%"
              aria-hidden="true"
              >
              <div
                class="R-IOPromo"
                data-is-complete="true"
                data-status-label="Completed Equity"
              >
                <div
                  class="R-IOPromo-container"
                  data-is-reit="false"
                  data-io-id="1551416"
                >
                  <div class="R-IOPromo-top">
                    <div class="R-IOPromo-statusLabel">
                      <span>Completed Equity</span>
                    </div>
                    <div class="R-IOPromo-image">
                      <img
                        src="https://apprealtymogul.com/sites/default/files/styles/private_placement_gallery_thumbnail/public/amberhill_3.4.20_pool-1.jpg?itok=fLjE9_rx"
                      />
                    </div>
                  </div>
                  <div class="R-IOPromo-middle" data-is-carousel="true">
                    <div class="R-IOPromo-propertyType">
                      Multifamily
                      <hr />
                    </div>
                    <div class="R-IOPromo-propertyLocation">
                      San Antonio, TX
                    </div>
                    <div class="R-IOPromo-investmentName">
                      Amber Hill Apartments
                    </div>
                    <div class="R-IOPromo-types">
                      <span
                        >Value-Add<span class="R-IOPromo-types-divider"
                          >|</span
                        ></span
                      >Equity
                    </div>
                  </div>
                  <div class="R-IOPromo-bottom">
                    <div class="R-IOPromo-actualIrr">
                      <div class="io-large-value">
                        <div>Actual IRR</div>
                        <div>51.1%</div>
                      </div>
                      <div class="io-small-value">
                        <div>Target*</div>
                        <div>-</div>
                      </div>
                    </div>
                    <div class="R-IOPromo-actualHold">
                      <div class="io-large-value">
                        <div>Actual Hold Period</div>
                        <div class="R-IOPromo-actualHold-value">
                          <div>1.1 Years</div>
                        </div>
                      </div>
                      <div class="io-small-value">
                        <div>Target*</div>
                        <div>3.0 Years</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="R-IOCarousel-items-item img-6"
              style="position: absolute; left: 69.40%"
              >
              <div
                class="R-IOPromo"
                data-is-complete="true"
                data-status-label="Completed Equity"
              >
                <div
                  class="R-IOPromo-container"
                  data-is-reit="false"
                  data-io-id="1125549"
                >
                  <div class="R-IOPromo-top">
                    <div class="R-IOPromo-statusLabel">
                      <span>Completed Equity</span>
                    </div>
                    <div class="R-IOPromo-image">
                      <img
                        src="https://apprealtymogul.com/sites/default/files/styles/private_placement_gallery_thumbnail/public/apartmentview11.jpg?itok=ZnVFHeTn"
                      />
                    </div>
                  </div>
                  <div class="R-IOPromo-middle" data-is-carousel="true">
                    <div class="R-IOPromo-propertyType">
                      Multifamily
                      <hr />
                    </div>
                    <div class="R-IOPromo-propertyLocation">Portland, OR</div>
                    <div class="R-IOPromo-investmentName">Barberry Village</div>
                    <div class="R-IOPromo-types">
                      <span
                        >Value-Add<span class="R-IOPromo-types-divider"
                          >|</span
                        ></span
                      >Equity
                    </div>
                  </div>
                  <div class="R-IOPromo-bottom">
                    <div class="R-IOPromo-actualIrr">
                      <div class="io-large-value">
                        <div>Actual IRR</div>
                        <div>27.4%</div>
                      </div>
                      <div class="io-small-value">
                        <div>Target*</div>
                        <div>-</div>
                      </div>
                    </div>
                    <div class="R-IOPromo-actualHold">
                      <div class="io-large-value">
                        <div>Actual Hold Period</div>
                        <div class="R-IOPromo-actualHold-value">
                          <div>2.7 Years</div>
                        </div>
                      </div>
                      <div class="io-small-value">
                        <div>Target*</div>
                        <div>3.0 Years</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="R-IOCarousel-items-item img-7"
              style="position: absolute; left: 83.45%"
              aria-hidden="true"
              >
              <div
                class="R-IOPromo"
                data-is-complete="true"
                data-status-label="Completed Equity"
              >
                <div
                  class="R-IOPromo-container"
                  data-is-reit="false"
                  data-io-id="633344"
                >
                  <div class="R-IOPromo-top">
                    <div class="R-IOPromo-statusLabel">
                      <span>Completed Equity</span>
                    </div>
                    <div class="R-IOPromo-image">
                      <img
                        src="https://apprealtymogul.com/sites/default/files/styles/private_placement_gallery_thumbnail/public/avon_hero.jpg?itok=K69Vo2uo"
                      />
                    </div>
                  </div>
                  <div class="R-IOPromo-middle" data-is-carousel="true">
                    <div class="R-IOPromo-propertyType">
                      Multifamily
                      <hr />
                    </div>
                    <div class="R-IOPromo-propertyLocation">Avon, CT</div>
                    <div class="R-IOPromo-investmentName">
                      Avon Place Apartments
                    </div>
                    <div class="R-IOPromo-types">
                      <span
                        >Value-Add<span class="R-IOPromo-types-divider"
                          >|</span
                        ></span
                      >Equity
                    </div>
                  </div>
                  <div class="R-IOPromo-bottom">
                    <div class="R-IOPromo-actualIrr">
                      <div class="io-large-value">
                        <div>Actual IRR</div>
                        <div>14.4%</div>
                      </div>
                      <div class="io-small-value">
                        <div>Target*</div>
                        <div>-</div>
                      </div>
                    </div>
                    <div class="R-IOPromo-actualHold">
                      <div class="io-large-value">
                        <div>Actual Hold Period</div>
                        <div class="R-IOPromo-actualHold-value">
                          <div>3.8 Years</div>
                        </div>
                      </div>
                      <div class="io-small-value">
                        <div>Target*</div>
                        <div>5.0 Years</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <button
          class="flickity-button flickity-prev-next-button previous"
          type="button"
          aria-label="Previous"
        >
          <svg class="flickity-button-icon" viewBox="0 0 100 100">
            <path
              d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"
              class="arrow"
            ></path>
          </svg></button
        ><button
          class="flickity-button flickity-prev-next-button next"
          type="button"
          aria-label="Next"
        >
          <svg class="flickity-button-icon" viewBox="0 0 100 100">
            <path
              d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"
              class="arrow"
              transform="translate(100, 100) rotate(180) "
            ></path>
          </svg>
        </button> -->
      </div>
    </div>
  </div>
</div>

        
        
        <bsp-listcarousel class="QuoteListA" data-module data-has-background>
          <a
            class="AnchorLink"
            id="quote-list-510000"
            name="quote-list-510000"
            data-cms-ai="0"
          ></a>

          <ul class="QuoteListA-items">
            <li class="QuoteListA-items-item">
              <div
                class="Quote"
                data-module
                style="--color-quote-background: #fff"
              >
                <a
                  class="AnchorLink"
                  id="quote-0c0000"
                  name="quote-0c0000"
                  data-cms-ai="0"
                ></a>

                <div class="Quote-content">
                  <div class="Quote-logo">
                    <picture>
                      <source
                        type="image/webp"
                        width="1000"
                        height="563"
                        srcset="
                          https://realtymogul.brightspotgocdn.com/dims4/default/aa5a7c2/2147483647/strip/true/crop/140x79+0+1/resize/1000x563!/format/webp/quality/90/?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2F73%2F54%2F176d625545f3a2b974960274ffd9%2Fpress-logo-wsj.jpg  1x,
                          https://realtymogul.brightspotgocdn.com/dims4/default/529e4a8/2147483647/strip/true/crop/140x79+0+1/resize/2000x1126!/format/webp/quality/90/?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2F73%2F54%2F176d625545f3a2b974960274ffd9%2Fpress-logo-wsj.jpg 2x
                        "
                      />

                      <source
                        width="1000"
                        height="563"
                        srcset="
                          realtymogul.brightspotgocdn.com/dims4/default/5e04924/2147483647/strip/true/crop/140x79%2b0%2b1/resize/1000x563%21/quality/90/indexb908.html?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2F73%2F54%2F176d625545f3a2b974960274ffd9%2Fpress-logo-wsj.jpg
                        "
                      />

                      <img
                        class="Image"
                        data-image-size="large-16x9"
                        alt="The Wall Street Journal logo"
                        width="1000"
                        height="563"
                        srcset="
                          https://realtymogul.brightspotgocdn.com/dims4/default/5e04924/2147483647/strip/true/crop/140x79+0+1/resize/1000x563!/quality/90/?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2F73%2F54%2F176d625545f3a2b974960274ffd9%2Fpress-logo-wsj.jpg  1x,
                          https://realtymogul.brightspotgocdn.com/dims4/default/425adc8/2147483647/strip/true/crop/140x79+0+1/resize/2000x1126!/quality/90/?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2F73%2F54%2F176d625545f3a2b974960274ffd9%2Fpress-logo-wsj.jpg 2x
                        "
                        src="realtymogul.brightspotgocdn.com/dims4/default/5e04924/2147483647/strip/true/crop/140x79%2b0%2b1/resize/1000x563%21/quality/90/indexb908.html?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2F73%2F54%2F176d625545f3a2b974960274ffd9%2Fpress-logo-wsj.jpg"
                        loading="lazy"
                      />
                    </picture>
                  </div>

                  <blockquote>
                    PropEstateHoldings lets investors browse, conduct due diligence,
                    invest and track the performance of their investments
                    through an online dashboard.
                  </blockquote>
                </div>
              </div>
            </li>

            <li class="QuoteListA-items-item">
              <div
                class="Quote"
                data-module
                style="--color-quote-background: #fff"
              >
                <a
                  class="AnchorLink"
                  id="quote-690000"
                  name="quote-690000"
                  data-cms-ai="0"
                ></a>

                <div class="Quote-content">
                  <div class="Quote-logo">
                    <picture>
                      <source
                        type="image/webp"
                        width="1000"
                        height="563"
                        srcset="
                          https://realtymogul.brightspotgocdn.com/dims4/default/77e9595/2147483647/strip/true/crop/140x79+0+1/resize/1000x563!/format/webp/quality/90/?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2F7e%2Fb4%2Fb15d6c0a42e4b67f2a4335d2d7a6%2Ffox-business-rm-quote.jpeg  1x,
                          https://realtymogul.brightspotgocdn.com/dims4/default/b5ca132/2147483647/strip/true/crop/140x79+0+1/resize/2000x1126!/format/webp/quality/90/?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2F7e%2Fb4%2Fb15d6c0a42e4b67f2a4335d2d7a6%2Ffox-business-rm-quote.jpeg 2x
                        "
                      />

                      <source
                        width="1000"
                        height="563"
                        srcset="
                          realtymogul.brightspotgocdn.com/dims4/default/fa69e0f/2147483647/strip/true/crop/140x79%2b0%2b1/resize/1000x563%21/quality/90/index3cf4.html?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2F7e%2Fb4%2Fb15d6c0a42e4b67f2a4335d2d7a6%2Ffox-business-rm-quote.jpeg
                        "
                      />

                      <img
                        class="Image"
                        data-image-size="large-16x9"
                        alt="fox business rm quote.jpeg"
                        width="1000"
                        height="563"
                        srcset="
                          https://realtymogul.brightspotgocdn.com/dims4/default/fa69e0f/2147483647/strip/true/crop/140x79+0+1/resize/1000x563!/quality/90/?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2F7e%2Fb4%2Fb15d6c0a42e4b67f2a4335d2d7a6%2Ffox-business-rm-quote.jpeg  1x,
                          https://realtymogul.brightspotgocdn.com/dims4/default/2593aac/2147483647/strip/true/crop/140x79+0+1/resize/2000x1126!/quality/90/?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2F7e%2Fb4%2Fb15d6c0a42e4b67f2a4335d2d7a6%2Ffox-business-rm-quote.jpeg 2x
                        "
                        src="realtymogul.brightspotgocdn.com/dims4/default/fa69e0f/2147483647/strip/true/crop/140x79%2b0%2b1/resize/1000x563%21/quality/90/index3cf4.html?url=https%3A%2F%2Fbrightspot-go-k1-realtymogul.s3.amazonaws.com%2Fbrightspot%2F7e%2Fb4%2Fb15d6c0a42e4b67f2a4335d2d7a6%2Ffox-business-rm-quote.jpeg"
                        loading="lazy"
                      />
                    </picture>
                  </div>

                  <blockquote>
                    PropEstateHoldings is breaking down barriers by connecting
                    investors with major real estate projects.
                  </blockquote>
                </div>
              </div>
            </li>
          </ul>
        </bsp-listcarousel>
      </main>

      <div class="DisclosureModal">
        <div class="DisclosureModal-overlay"></div>
        <div class="DisclosureModal-content">
          <div class="DisclosureModal-close">
            <svg class="icon-close-rm">
              <use xlink:href="#icon-close-rm"></use>
            </svg>
          </div>
          <div class="DisclosureModal-description"></div>
        </div>
      </div>
      <div class="CompareModal">
        <div class="CompareModal-overlay"></div>
        <div class="CompareModal-contentSection">
          <div class="CompareModal-close">
            <svg class="icon-close-rm">
              <use xlink:href="#icon-close-rm"></use>
            </svg>
          </div>
          <div class="CompareModal-title"></div>
          <div class="CompareModal-image"></div>
        </div>
      </div>
    </div>

 
      <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
      </script>

   @include('home.footer')
