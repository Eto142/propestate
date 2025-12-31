@include('home.header')
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


  <div class="Page-content" style="min-height: 100vh">
    <main class="Page-oneColumn" data-modulewell>
      <div class="HtmlModule">

        <a class="AnchorLink" id="html-embed-0c0000" name="html-embed-0c0000" data-cms-ai="0"></a>
        <div class="R-SearchResults">
          <div class="R-SearchResults-container">
            <div class="R-SearchResults-fixed-wrapper" data-mobile-active="false">
              <div class="R-SearchResults-mobile-header">
                <div class="R-SearchResults-mobile-header-opp-count">
                  14 OPPORTUNITIES
                </div>
                <div class="R-SearchResults-mobile-header-buttons">
                  <span role="button">FILTER<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                      </path>
                    </svg></span><span class="R-SearchResults-mobile-header-buttons-end"><span>|</span><span
                      role="button">RESET</span></span>
                </div>
              </div>
              <div class="R-SearchResults-filters" data-mobile-active="false" data-is-loading="false">
                <div>
                  <div class="R-SearchResults-filters-count">
                    14 OPPORTUNITIES
                  </div>
                  <div class="filter-block">
                    <div class="filter-sub-menu">SORT BY</div>
                    <div class="sort-inputs">
                      <label for="recentlyAdded" data-type="radio" data-checked="true"><span
                          class="filter-inputs-input"><input type="radio" id="recentlyAdded" name="sortBy"
                            value="Recently Added" checked=""><span>Recently Added</span></span></label><label for="irr"
                        data-type="radio" data-checked="false"><span class="filter-inputs-input"><input type="radio"
                            id="irr" name="sortBy" value="IRR"><span>IRR</span></span></label><label for="coc"
                        data-type="radio" data-checked="false"><span class="filter-inputs-input"><input type="radio"
                            id="coc" name="sortBy" value="Cash on Cash"><span>Cash on Cash</span></span></label>
                    </div>
                  </div>
                  <div class="all-filters">
                    <div class="filter-sub-menu">
                      <span>FILTER BY</span><span class="filter-reset" role="button">RESET</span>
                    </div>
                    <div class="filter-block" data-expanded="true">
                      <div class="fitler-block-label">
                        <span>Investment Status</span><svg class="expand-icon" role="button"
                          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                          stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                      </div>
                      <div class="filter-inputs">
                        <label for="investmentStatusOpenforinvestment" data-type="checkbox"
                          data-checkbox-checked="false"><span class="filter-inputs-input"><input
                              data-filter-label="investmentStatus" data-filter-name="Open for investment"
                              type="checkbox" id="investmentStatusOpenforinvestment"><span>Open for
                              investment</span></span><span class="filter-count">7</span></label>
                      </div>
                      <div class="filter-inputs">
                        <label for="investmentStatusOpenforpledging" data-type="checkbox"
                          data-checkbox-checked="false"><span class="filter-inputs-input"><input
                              data-filter-label="investmentStatus" data-filter-name="Open for pledging" type="checkbox"
                              id="investmentStatusOpenforpledging"><span>Open for pledging</span></span><span
                            class="filter-count">1</span></label>
                      </div>
                      <div class="filter-inputs">
                        <label for="investmentStatusWaitlist" data-type="checkbox" data-checkbox-checked="false"><span
                            class="filter-inputs-input"><input data-filter-label="investmentStatus"
                              data-filter-name="Waitlist" type="checkbox"
                              id="investmentStatusWaitlist"><span>Waitlist</span></span><span
                            class="filter-count">6</span></label>
                      </div>
                    </div>
                    <div class="filter-block" data-expanded="true">
                      <div class="fitler-block-label">
                        <span>Property Type</span><svg class="expand-icon" role="button"
                          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                          stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                      </div>
                      <div class="filter-inputs">
                        <label for="propertyTypeMultifamily" data-type="checkbox" data-checkbox-checked="false"><span
                            class="filter-inputs-input"><input data-filter-label="propertyType"
                              data-filter-name="Multifamily" type="checkbox"
                              id="propertyTypeMultifamily"><span>Multifamily</span></span><span
                            class="filter-count">7</span></label>
                      </div>
                      <div class="filter-inputs">
                        <label for="propertyTypeOffice" data-type="checkbox" data-checkbox-checked="false"><span
                            class="filter-inputs-input"><input data-filter-label="propertyType"
                              data-filter-name="Office" type="checkbox"
                              id="propertyTypeOffice"><span>Office</span></span><span
                            class="filter-count">1</span></label>
                      </div>
                      <div class="filter-inputs">
                        <label for="propertyTypeResidential" data-type="checkbox" data-checkbox-checked="false"><span
                            class="filter-inputs-input"><input data-filter-label="propertyType"
                              data-filter-name="Residential" type="checkbox"
                              id="propertyTypeResidential"><span>Residential</span></span><span
                            class="filter-count">3</span></label>
                      </div>
                      <div class="filter-inputs">
                        <label for="propertyTypeSelf-storage" data-type="checkbox" data-checkbox-checked="false"><span
                            class="filter-inputs-input"><input data-filter-label="propertyType"
                              data-filter-name="Self-storage" type="checkbox"
                              id="propertyTypeSelf-storage"><span>Self-storage</span></span><span
                            class="filter-count">1</span></label>
                      </div>
                    </div>
                    <div class="filter-block" data-expanded="true">
                      <div class="fitler-block-label">
                        <span>Investment Strategy</span><svg class="expand-icon" role="button"
                          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                          stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                      </div>
                      <div class="filter-inputs">
                        <label for="investmentStrategyDevelopment" data-type="checkbox"
                          data-checkbox-checked="false"><span class="filter-inputs-input"><input
                              data-filter-label="investmentStrategy" data-filter-name="Development" type="checkbox"
                              id="investmentStrategyDevelopment"><span>Development</span></span><span
                            class="filter-count">7</span></label>
                      </div>
                      <div class="filter-inputs">
                        <label for="investmentStrategyREIT" data-type="checkbox" data-checkbox-checked="false"><span
                            class="filter-inputs-input"><input data-filter-label="investmentStrategy"
                              data-filter-name="REIT" type="checkbox"
                              id="investmentStrategyREIT"><span>REIT</span></span><span
                            class="filter-count">2</span></label>
                      </div>
                      <div class="filter-inputs">
                        <label for="investmentStrategyValue-Add" data-type="checkbox"
                          data-checkbox-checked="false"><span class="filter-inputs-input"><input
                              data-filter-label="investmentStrategy" data-filter-name="Value-Add" type="checkbox"
                              id="investmentStrategyValue-Add"><span>Value-Add</span></span><span
                            class="filter-count">5</span></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="R-SearchResults-results" data-is-loading="false">
              <div>
                <div>
                  <div>
                    <div class="R-SearchResults-results-title" data-key="1">
                      Open for investment
                    </div>

                    <div class="R-SearchResults-results-grid">
                          <div class="R-IOPromo" data-is-complete="false" data-status-label="Open for investment"><a href="{{url('2104825')}}">
                            <div class="R-IOPromo-container" data-is-reit="false" data-io-id="2104825">
                              <div class="R-IOPromo-top">
                                <div class="R-IOPromo-statusLabel">
                                  <span>Open for investment</span>
                                </div>
                                <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                  </svg>
                                </div>
  
                                <div class="R-IOPromo-image">
                                  <img src="assets/images/invest/front_elevation_perspective.jpg">
                                </div>
                                    <div class="R-IOPromo-progressbar">
                                        <div class="R-IOPromo-progressbar-bar">
                                          <div class="R-IOPromo-progressbar-bar-amount"  style="right: 26%">
                                          </div>
                                        </div>
                                        <div class="R-IOPromo-progressbar-funded">
                                          <span class="R-IOPromo-progressbar-funded-percentage">74% FUNDED</span>
                                        </div>
                                      </div>
                                      
                              </div>
                              <div class="R-IOPromo-middle">
                                <div class="R-IOPromo-propertyType">
                                Multifamily
                                  <hr>
                                </div>
                                <div class="R-IOPromo-propertyLocation">
                                Montgomery, NY
                                </div>
                                <div class="R-IOPromo-investmentName">
                                Alders at Prosper
                                </div>
                                <div class="R-IOPromo-types">
                                  <span>DEVELOPMENT<span class="R-IOPromo-types-divider">|</span></span>Equity
                                </div>
                              </div>
                              <div class="R-IOPromo-bottom">
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Target IRR*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  23.3
                                  </div>
                                </div>
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Target Return on Cost*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  6.6%
                                  </div>
                                </div>
                                <div class="R-IOPromo-blurb-container">
                                  <div class="R-IOPromo-companyName">
                                  OFFERED BY ALDER DEVELOPMENT GROUP
                                  </div>
                                  <div class="R-IOPromo-blurb">
                                    <div class="R-IOPromo-showMoreBlurb">
                                      <span>>Ground-up development of a Class A                                       Active Adult senior living community in                                       the affluent community of</span><span role="button">... MORE<svg
                                          xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                          fill="currentColor">
                                          <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                        </svg>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                <div class="R-IOPromo-button Button">
                                  View Details
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                          <div class="R-IOPromo" data-is-complete="false" data-status-label="Open for investment"><a href="{{url('2102460')}}">
                            <div class="R-IOPromo-container" data-is-reit="false" data-io-id="2104825">
                              <div class="R-IOPromo-top">
                                <div class="R-IOPromo-statusLabel">
                                  <span>Open for investment</span>
                                </div>
                                <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                  </svg>
                                </div>
  
                                <div class="R-IOPromo-image">
                                  <img src="assets/images/invest/pool_2_1.jpg">
                                </div>
                                    <div class="R-IOPromo-progressbar">
                                        <div class="R-IOPromo-progressbar-bar">
                                          <div class="R-IOPromo-progressbar-bar-amount"  style="right: 33%">
                                          </div>
                                        </div>
                                        <div class="R-IOPromo-progressbar-funded">
                                          <span class="R-IOPromo-progressbar-funded-percentage">67% FUNDED</span>
                                        </div>
                                      </div>
                                      
                              </div>
                              <div class="R-IOPromo-middle">
                                <div class="R-IOPromo-propertyType">
                                Multifamily
                                  <hr>
                                </div>
                                <div class="R-IOPromo-propertyLocation">
                                Trumbull, CT
                                </div>
                                <div class="R-IOPromo-investmentName">
                                The Royce at Trumbull
                                </div>
                                <div class="R-IOPromo-types">
                                  <span>VALUE-ADD<span class="R-IOPromo-types-divider">|</span></span>Equity
                                </div>
                              </div>
                              <div class="R-IOPromo-bottom">
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Target IRR*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  28.2%
                                  </div>
                                </div>
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Target Avg Cash on Cash*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  8.1%
                                  </div>
                                </div>
                                <div class="R-IOPromo-blurb-container">
                                  <div class="R-IOPromo-companyName">
                                  OFFERED BY COLONY HILLS CAPITAL
                                  </div>
                                  <div class="R-IOPromo-blurb">
                                    <div class="R-IOPromo-showMoreBlurb">
                                      <span>The Royce at Trumbull is a value-add,                                       340-unit garden-style property located                                       in affluent Trumbull, C</span><span role="button">... MORE<svg
                                          xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                          fill="currentColor">
                                          <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                        </svg>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                <div class="R-IOPromo-button Button">
                                  View Details
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                         <div class="R-IOPromo" data-is-complete="false" data-status-label="Open for investment"><a href="{{url('214334')}}">
                            <div class="R-IOPromo-container" data-is-reit="false" data-io-id="2104825">
                              <div class="R-IOPromo-top">
                                <div class="R-IOPromo-statusLabel">
                                  <span>Open for investment</span>
                                </div>
                                <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                  </svg>
                                </div>
  
                                <div class="R-IOPromo-image">
                                  <img src="assets/images/invest/big.webp">
                                </div>
                                    <div class="R-IOPromo-progressbar">
                                        <div class="R-IOPromo-progressbar-bar">
                                          <div class="R-IOPromo-progressbar-bar-amount"  style="right: 33%">
                                          </div>
                                        </div>
                                        <div class="R-IOPromo-progressbar-funded">
                                          <span class="R-IOPromo-progressbar-funded-percentage">60% FUNDED</span>
                                        </div>
                                      </div>
                                      
                              </div>
                              <div class="R-IOPromo-middle">
                                <div class="R-IOPromo-propertyType">
                              Apartment, Duplex
                                  <hr>
                                </div>
                                <div class="R-IOPromo-propertyLocation">
Dubai, Deira, Dubai Islands
                                </div>
                                <div class="R-IOPromo-investmentName">
                                Stamn Nautis Residences
                                </div>
                                <div class="R-IOPromo-types">
                                  <span>VALUE-ADD<span class="R-IOPromo-types-divider">|</span></span>Equity
                                </div>
                              </div>
                              <div class="R-IOPromo-bottom">
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Target IRR*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  25.2%
                                  </div>
                                </div>
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Target Avg Cash on Cash*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  8.5%
                                  </div>
                                </div>
                                <div class="R-IOPromo-blurb-container">
                                  <div class="R-IOPromo-companyName">
                                   Stamn Real Estate Development
                                  </div>
                                  <div class="R-IOPromo-blurb">
                                    <div class="R-IOPromo-showMoreBlurb">
                                      <span>Stamn Nautis Residences introduces a transformative living experience on the shores of Dubai Islands. Designed to harmonize island serenity with urban .</span><span role="button">... MORE<svg
                                          xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                          fill="currentColor">
                                          <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                        </svg>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                <div class="R-IOPromo-button Button">
                                  View Details
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                        
                        
                        
                        <div class="R-IOPromo" data-is-complete="false" data-status-label="Open for investment"><a href="{{url('214234')}}">
                            <div class="R-IOPromo-container" data-is-reit="false" data-io-id="2104825">
                              <div class="R-IOPromo-top">
                                <div class="R-IOPromo-statusLabel">
                                  <span>Open for investment </span>
                                </div>
                                <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                  </svg>
                                </div>
  
                                <div class="R-IOPromo-image">
                                  <img src="assets/images/invest/original.webp">
                                </div>
                                    <div class="R-IOPromo-progressbar">
                                        <div class="R-IOPromo-progressbar-bar">
                                          <div class="R-IOPromo-progressbar-bar-amount"  style="right: 33%">
                                          </div>
                                        </div>
                                        <div class="R-IOPromo-progressbar-funded">
                                          <span class="R-IOPromo-progressbar-funded-percentage">65% FUNDED</span>
                                        </div>
                                      </div>
                                      
                              </div>
                              <div class="R-IOPromo-middle">
                                <div class="R-IOPromo-propertyType">
                                Villa
                                  <hr>
                                </div>
                                <div class="R-IOPromo-propertyLocation">
                                
                                Dubai, Dubai Investment Park (DIP)
                                </div>
                                <div class="R-IOPromo-investmentName">
                                Montura at Grand Polo
                                </div>
                                <div class="R-IOPromo-types">
                                  <span>VALUE-ADD<span class="R-IOPromo-types-divider">|</span></span>Equity
                                </div>
                              </div>
                              <div class="R-IOPromo-bottom">
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Target IRR*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  21.2%
                                  </div>
                                </div>
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Target Avg Cash on Cash*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  7.5%
                                  </div>
                                </div>
                                <div class="R-IOPromo-blurb-container">
                                  <div class="R-IOPromo-companyName">
                                   MONTURA AT GRAND POLO
                                  </div>
                                  <div class="R-IOPromo-blurb">
                                    <div class="R-IOPromo-showMoreBlurb">
                                      <span>This landmark development brings together timeless estate elegance, modern design, and equestrian sophistication, offering a serene escape from the city’s fast pace. Designed for discerning homeowners.</span><span role="button">... MORE<svg
                                          xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                          fill="currentColor">
                                          <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                        </svg>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                <div class="R-IOPromo-button Button">
                                  View Details
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                          <div class="R-IOPromo" data-is-complete="false" data-status-label="Open for investment"><a href="{{url('2104823')}}">
                            <div class="R-IOPromo-container" data-is-reit="false" data-io-id="2104825">
                              <div class="R-IOPromo-top">
                                <div class="R-IOPromo-statusLabel">
                                  <span>Open for investment</span>
                                </div>
                                <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                  </svg>
                                </div>
  
                                <div class="R-IOPromo-image">
                                  <img src="assets/images/invest/pool.png">
                                </div>
                                    <div class="R-IOPromo-progressbar">
                                        <div class="R-IOPromo-progressbar-bar">
                                          <div class="R-IOPromo-progressbar-bar-amount"  style="right: 34%">
                                          </div>
                                        </div>
                                        <div class="R-IOPromo-progressbar-funded">
                                          <span class="R-IOPromo-progressbar-funded-percentage">66% FUNDED</span>
                                        </div>
                                      </div>
                                      
                              </div>
                              <div class="R-IOPromo-middle">
                                <div class="R-IOPromo-propertyType">
                                Residential
                                  <hr>
                                </div>
                                <div class="R-IOPromo-propertyLocation">
                                Foley, AL
                                </div>
                                <div class="R-IOPromo-investmentName">
                                Cottages at Foley Farms
                                </div>
                                <div class="R-IOPromo-types">
                                  <span>Development<span class="R-IOPromo-types-divider">|</span></span>Equity
                                </div>
                              </div>
                              <div class="R-IOPromo-bottom">
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Target IRR*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  19.2%
                                  </div>
                                </div>
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Target Avg Cash on Cash*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  8.4%
                                  </div>
                                </div>
                                <div class="R-IOPromo-blurb-container">
                                  <div class="R-IOPromo-companyName">
                                  OFFERED BY RITMO PROPERTIES AND M4 DEVELOPMENT
                                  </div>
                                  <div class="R-IOPromo-blurb">
                                    <div class="R-IOPromo-showMoreBlurb">
                                      <span>Ground-up development of a single-family Build-for-Rent ("BFR") community featuring 321 cottages and</span><span role="button">... MORE<svg
                                          xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                          fill="currentColor">
                                          <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                        </svg>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                <div class="R-IOPromo-button Button">
                                  View Details
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                          <div class="R-IOPromo" data-is-complete="false" data-status-label="Open for investment"><a href="{{url('2043732')}}">
                            <div class="R-IOPromo-container" data-is-reit="false" data-io-id="2104825">
                              <div class="R-IOPromo-top">
                                <div class="R-IOPromo-statusLabel">
                                  <span>Open for investment</span>
                                </div>
                                <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                  </svg>
                                </div>
  
                                <div class="R-IOPromo-image">
                                  <img src="assets/images/invest/mission_matthews_place-22-0214-28.jpg">
                                </div>
                                    <div class="R-IOPromo-progressbar">
                                        <div class="R-IOPromo-progressbar-bar">
                                          <div class="R-IOPromo-progressbar-bar-amount"  style="right: 49%">
                                          </div>
                                        </div>
                                        <div class="R-IOPromo-progressbar-funded">
                                          <span class="R-IOPromo-progressbar-funded-percentage">51% FUNDED</span>
                                        </div>
                                      </div>
                                      
                              </div>
                              <div class="R-IOPromo-middle">
                                <div class="R-IOPromo-propertyType">
                                Multifamily
                                  <hr>
                                </div>
                                <div class="R-IOPromo-propertyLocation">
                                Charlotte MSA, NC
                                </div>
                                <div class="R-IOPromo-investmentName">
                                Mission Matthews Place
                                </div>
                                <div class="R-IOPromo-types">
                                  <span>Value-Add<span class="R-IOPromo-types-divider">|</span></span>Equity
                                </div>
                              </div>
                              <div class="R-IOPromo-bottom">
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Target IRR*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  18.8%
                                  </div>
                                </div>
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Target Avg Cash on Cash*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  7.5%
                                  </div>
                                </div>
                                <div class="R-IOPromo-blurb-container">
                                  <div class="R-IOPromo-companyName">
                                  OFFERED BY GVA REAL ESTATE GROUP
                                  </div>
                                  <div class="R-IOPromo-blurb">
                                    <div class="R-IOPromo-showMoreBlurb">
                                      <span>Mission Matthews Place ("the Property")
                                    is a 392-unit asset with value-add
                                    upside in the highly desi</span><span role="button">... MORE<svg
                                          xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                          fill="currentColor">
                                          <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                        </svg>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                <div class="R-IOPromo-button Button">
                                  View Details
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                          <div class="R-IOPromo" data-is-complete="false" data-status-label="Open for investment"><a href="{{url('2148421')}}">
                            <div class="R-IOPromo-container" data-is-reit="false" data-io-id="2104825">
                              <div class="R-IOPromo-top">
                                <div class="R-IOPromo-statusLabel">
                                  <span>Open for investment</span>
                                </div>
                                <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                  </svg>
                                </div>
  
                                <div class="R-IOPromo-image">
                                  <img src="assets/images/invest/exterior_9.jpg">
                                </div>
                              </div>
                              <div class="R-IOPromo-middle">
                                <div class="R-IOPromo-propertyType">
                                Self-storage
                                  <hr>
                                </div>
                                <div class="R-IOPromo-propertyLocation">
                                Montgomery, NY
                                </div>
                                <div class="R-IOPromo-investmentName">
                                Montgomery Self-Storage
                                </div>
                                <div class="R-IOPromo-types">
                                  <span>DEVELOPMENT<span class="R-IOPromo-types-divider">|</span></span>Equity
                                </div>
                              </div>
                              <div class="R-IOPromo-bottom">
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Target IRR*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  20.2%
                                  </div>
                                </div>
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Target Return on Cost*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  6.8%
                                  </div>
                                </div>
                                <div class="R-IOPromo-blurb-container">
                                  <div class="R-IOPromo-companyName">
                                  OFFERED BY DIVERSIFIED PROPERTIES, LLC
                                  </div>
                                  <div class="R-IOPromo-blurb">
                                    <div class="R-IOPromo-showMoreBlurb">
                                      <span>Diversified Properties, LLC is developing a 7-building storage facility in the town of Montgomery, O</span><span role="button">... MORE<svg
                                          xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                          fill="currentColor">
                                          <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                        </svg>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                <div class="R-IOPromo-button Button">
                                  View Details
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                          <div class="R-IOPromo" data-is-complete="false" data-status-label="Open for investment"><a href="{{url('2148420')}}">
                            <div class="R-IOPromo-container" data-is-reit="false" data-io-id="2104825">
                              <div class="R-IOPromo-top">
                                <div class="R-IOPromo-statusLabel">
                                  <span>Open for investment</span>
                                </div>
                                <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                  </svg>
                                </div>
  
                                <div class="R-IOPromo-image">
                                  <img src="assets/images/invest/201029_birds_eye_post.jpg">
                                </div>
                              </div>
                              <div class="R-IOPromo-middle">
                                <div class="R-IOPromo-propertyType">
                                Industrial
                                  <hr>
                                </div>
                                <div class="R-IOPromo-propertyLocation">
                                Detroit, MI
                                </div>
                                <div class="R-IOPromo-investmentName">
                                Gateway Industrial Center
                                </div>
                                <div class="R-IOPromo-types">
                                  <span>VALUE-ADD<span class="R-IOPromo-types-divider">|</span></span>Equity
                                </div>
                              </div>
                              <div class="R-IOPromo-bottom">
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Target IRR*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  24.1%
                                  </div>
                                </div>
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Target Avg Cash on Cash*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  9.7%
                                  </div>
                                </div>
                                <div class="R-IOPromo-blurb-container">
                                  <div class="R-IOPromo-companyName">
                                  OFFERED BY INNOVO DEVELOPMENT GROUP
                                  </div>
                                  <div class="R-IOPromo-blurb">
                                    <div class="R-IOPromo-showMoreBlurb">
                                      <span>Gateway Industrial Center is a 1,441,834 SF, multi-tenant industrial campus in the heart of Metro De</span><span role="button">... MORE<svg
                                          xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                          fill="currentColor">
                                          <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                        </svg>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                <div class="R-IOPromo-button Button">
                                  View Details
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                          <div class="R-IOPromo" data-is-complete="false" data-status-label="Open for investment"><a href="{{url('the-apartment-growth-reit')}}">
                            <div class="R-IOPromo-container" data-is-reit="false" data-io-id="2104825">
                              <div class="R-IOPromo-top">
                                <div class="R-IOPromo-statusLabel">
                                  <span>Open for investment</span>
                                </div>
                                <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                  </svg>
                                </div>
  
                                <div class="R-IOPromo-image">
                                  <img src="assets/images/invest/mr2_nobackground.44448e71.jpg">
                                </div>
                              </div>
                              <div class="R-IOPromo-middle">
                                <div class="R-IOPromo-propertyType">
                                
                                  <hr>
                                </div>
                                <div class="R-IOPromo-propertyLocation">
                                EquinoxProperties Apartment Growth REIT
                                </div>
                                <div class="R-IOPromo-investmentName">
                                TOTAL ASSET VALUE: $260MM
                                </div>
                                <div class="R-IOPromo-types">
                                  <span>REIT<span class="R-IOPromo-types-divider">|</span></span>Equity
                                </div>
                              </div>
                              <div class="R-IOPromo-bottom">
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Distribution Frequency*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                   Quarterly
                                  </div>
                                </div>
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>LTM Return </div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  15.65%
                                  </div>
                                </div>
                                <div class="R-IOPromo-blurb-container">
                                  <div class="R-IOPromo-companyName">
                                  
                                  </div>
                                  <div class="R-IOPromo-blurb">
                                    <div class="R-IOPromo-showMoreBlurb">
                                      <span>A Real Estate Investment Trust with the objectives to realize capital appreciation in the value of o</span><span role="button">... MORE<svg
                                          xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                          fill="currentColor">
                                          <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                        </svg>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                <div class="R-IOPromo-button Button">
                                  View Details
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                          <div class="R-IOPromo" data-is-complete="false" data-status-label="Open for investment"><a href="{{url('the-income-reit')}}">
                            <div class="R-IOPromo-container" data-is-reit="false" data-io-id="2104825">
                              <div class="R-IOPromo-top">
                                <div class="R-IOPromo-statusLabel">
                                  <span>Open for investment</span>
                                </div>
                                <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                  </svg>
                                </div>
  
                                <div class="R-IOPromo-image">
                                  <img src="assets/images/invest/mr1_nobackground.3df8fa3e.jpg">
                                </div>
                              </div>
                              <div class="R-IOPromo-middle">
                                <div class="R-IOPromo-propertyType">
                                
                                  <hr>
                                </div>
                                <div class="R-IOPromo-propertyLocation">
                                EquinoxProperties Income REIT
                                </div>
                                <div class="R-IOPromo-investmentName">
                                TOTAL ASSET VALUE: $346MM
                                </div>
                                <div class="R-IOPromo-types">
                                  <span>REIT<span class="R-IOPromo-types-divider">|</span></span>Equity
                                </div>
                              </div>
                              <div class="R-IOPromo-bottom">
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>Distribution Frequency*</div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  Monthly
                                  </div>
                                </div>
                                <div class="R-IOPromo-targetReturn io-flex-block">
                                  <div>LTM Return </div>
                                  <div class="R-IOPromo-targetReturn-value io-value">
                                  9.47%
                                  </div>
                                </div>
                                <div class="R-IOPromo-blurb-container">
                                  <div class="R-IOPromo-companyName">
                                  
                                  </div>
                                  <div class="R-IOPromo-blurb">
                                    <div class="R-IOPromo-showMoreBlurb">
                                      <span>A Real Estate Investment Trust with the objectives to pay attractive and consistent cash distributio</span><span role="button">... MORE<svg
                                          xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                          fill="currentColor">
                                          <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                        </svg>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                <div class="R-IOPromo-button Button">
                                  View Details
                                </div>
                              </div>
                            </div>
                          </a>
                        </div></div>                  </div>
                  <!-- <div>
                    <div class="R-SearchResults-results-title" data-key="2">
                      Open for pledging
                    </div>
                    <div class="R-SearchResults-results-grid">
                      <div class="R-IOPromo" data-is-complete="false" data-status-label="Open for pledging">
                        <div class="R-IOPromo-container" data-is-reit="false" data-io-id="2135283">
                          <div class="R-IOPromo-top">
                            <div class="R-IOPromo-statusLabel">
                              <span>Open for pledging</span>
                            </div>
                            <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                              <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                              </svg>
                            </div>
                            <div class="R-IOPromo-image">
                              <img
                                src="https://app.realtymogul.com/sites/default/files/styles/private_placement_gallery_thumbnail/public/buford_3d_renderings.jpg?itok=6n466DY-">
                            </div>
                          </div>
                          <div class="R-IOPromo-middle">
                            <div class="R-IOPromo-propertyType">
                              Multifamily
                              <hr>
                            </div>
                            <div class="R-IOPromo-propertyLocation">
                              Lawrenceville, GA
                            </div>
                            <div class="R-IOPromo-investmentName">
                              Park Place
                            </div>
                            <div class="R-IOPromo-types">
                              <span>Development<span class="R-IOPromo-types-divider">|</span></span>Equity
                            </div>
                          </div>
                          <div class="R-IOPromo-bottom">
                            <div class="R-IOPromo-targetReturn io-flex-block">
                              <div>Target IRR*</div>
                              <div class="R-IOPromo-targetReturn-value io-value">
                                19.8%
                              </div>
                            </div>
                            <div class="R-IOPromo-targetReturn io-flex-block">
                              <div>Target Return on Cost*</div>
                              <div class="R-IOPromo-targetReturn-value io-value">
                                6.2%
                              </div>
                            </div>
                            <div class="R-IOPromo-blurb-container">
                              <div class="R-IOPromo-companyName">
                                Offered by Highlands Residential
                              </div>
                              <div class="R-IOPromo-blurb">
                                <div class="R-IOPromo-showMoreBlurb">
                                  <span>Ground-up development of a 148-unit
                                    multifamily active adult living
                                    community in suburban Atlanta by</span><span role="button">... MORE<svg
                                      xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                      fill="currentColor">
                                      <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                    </svg>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="R-IOPromo-button Button">
                              View Details
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->

                  <div>
                    <div class="R-SearchResults-results-title" data-key="3">
                      Fully Pledged and Waitlist
                    </div>
                    <div class="R-SearchResults-results-grid">
                    </div>
                      <div class="R-SearchResults-results-grid">
                            <div class="R-IOPromo"  data-is-complete="false" data-status-label="Open for investment"><a href="investment-opportunity/1765053.html">
                              <div class="R-IOPromo-container" data-is-reit="false" data-io-id="2104825" style="color: grey;"x>
                                <div class="R-IOPromo-top">
                                  <div class="R-IOPromo-statusLabel">
                                    <span>Open for investment</span>
                                  </div>
                                  <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                      stroke="currentColor" stroke-width="2">
                                      <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                      </path>
                                    </svg>
                                  </div>

                                  <div class="R-IOPromo-image">
                                    <img src="assets/images/invest/2021-12-09_irondale_at_wharton_front_elevation.jpg" style="filter: grayscale(1);">
                                  </div>
                                </div>
                                <div class="R-IOPromo-middle">
                                  <div class="R-IOPromo-propertyType">
                                  Multifamily
                                    <hr>
                                  </div>
                                  <div class="R-IOPromo-propertyLocation">
                                  Morris County MSA, NJ
                                  </div>
                                  <div class="R-IOPromo-investmentName">
                                  Irondale at Wharton
                                  </div>
                                  <div class="R-IOPromo-types">
                                    <span>DEVELOPMENT<span class="R-IOPromo-types-divider">|</span></span>Equity
                                  </div>
                                </div>
                                <div class="R-IOPromo-bottom">
                                  <div class="R-IOPromo-targetReturn io-flex-block">
                                    <div>Target IRR*</div>
                                    <div class="R-IOPromo-targetReturn-value io-value">
                                    20.0%
                                    </div>
                                  </div>
                                  <div class="R-IOPromo-targetReturn io-flex-block">
                                    <div>OFFERED BY DIVERSIFIED PROPERT</div>
                                    <div class="R-IOPromo-targetReturn-value io-value">
                                    %
                                    </div>
                                  </div>
                                  <div class="R-IOPromo-blurb-container">
                                    <div class="R-IOPromo-companyName">
                                    OFFERED BY DIVERSIFIED PROPERTIES, LLC
                                    </div>
                                    <div class="R-IOPromo-blurb">
                                      <div class="R-IOPromo-showMoreBlurb">
                                        <span>Diversified Properties, LLC is developing a 60-unit Class-A multifamily community in Western Morris</span><span role="button">... MORE<svg
                                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                              clip-rule="evenodd"></path>
                                          </svg>
                                        </span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="R-IOPromo-button Button" style="background-color: grey">
                                    View Details
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                            <div class="R-IOPromo"  data-is-complete="false" data-status-label="Open for investment"><a href="investment-opportunity/2029120.html">
                              <div class="R-IOPromo-container" data-is-reit="false" data-io-id="2104825" style="color: grey;"x>
                                <div class="R-IOPromo-top">
                                  <div class="R-IOPromo-statusLabel">
                                    <span>Open for investment</span>
                                  </div>
                                  <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                      stroke="currentColor" stroke-width="2">
                                      <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                      </path>
                                    </svg>
                                  </div>

                                  <div class="R-IOPromo-image">
                                    <img src="assets/images/invest/2300_9th_st_-_rendering_01_revised_-_final_0.jpg" style="filter: grayscale(1);">
                                  </div>
                                </div>
                                <div class="R-IOPromo-middle">
                                  <div class="R-IOPromo-propertyType">
                                  Office
                                    <hr>
                                  </div>
                                  <div class="R-IOPromo-propertyLocation">
                                  Arlington, VA
                                  </div>
                                  <div class="R-IOPromo-investmentName">
                                  2300 9th Street
                                  </div>
                                  <div class="R-IOPromo-types">
                                    <span>VALUE-ADD<span class="R-IOPromo-types-divider">|</span></span>Equity
                                  </div>
                                </div>
                                <div class="R-IOPromo-bottom">
                                  <div class="R-IOPromo-targetReturn io-flex-block">
                                    <div>Target IRR*</div>
                                    <div class="R-IOPromo-targetReturn-value io-value">
                                    23.2%
                                    </div>
                                  </div>
                                  <div class="R-IOPromo-targetReturn io-flex-block">
                                    <div>Target Return on Cost*</div>
                                    <div class="R-IOPromo-targetReturn-value io-value">
                                    6.9%
                                    </div>
                                  </div>
                                  <div class="R-IOPromo-blurb-container">
                                    <div class="R-IOPromo-companyName">
                                    OFFERED BY PEARLMARK AND BOUNDTRAIN
                                    </div>
                                    <div class="R-IOPromo-blurb">
                                      <div class="R-IOPromo-showMoreBlurb">
                                        <span>2300 Ninth Street South is a to-be-renovated, boutique office asset located in the desirable Columbi</span><span role="button">... MORE<svg
                                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                              clip-rule="evenodd"></path>
                                          </svg>
                                        </span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="R-IOPromo-button Button" style="background-color: grey">
                                    View Details
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                            <div class="R-IOPromo"  data-is-complete="false" data-status-label="Open for investment"><a href="investment-opportunity/1992128.html">
                              <div class="R-IOPromo-container" data-is-reit="false" data-io-id="2104825" style="color: grey;"x>
                                <div class="R-IOPromo-top">
                                  <div class="R-IOPromo-statusLabel">
                                    <span>Open for investment</span>
                                  </div>
                                  <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                      stroke="currentColor" stroke-width="2">
                                      <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                      </path>
                                    </svg>
                                  </div>

                                  <div class="R-IOPromo-image">
                                    <img src="assets/images/invest/cwa_mesa_arizona_w_copyright.jpg" style="filter: grayscale(1);">
                                  </div>
                                </div>
                                <div class="R-IOPromo-middle">
                                  <div class="R-IOPromo-propertyType">
                                  Multifamily
                                    <hr>
                                  </div>
                                  <div class="R-IOPromo-propertyLocation">
                                  Mesa, AZ
                                  </div>
                                  <div class="R-IOPromo-investmentName">
                                  Dobson Station
                                  </div>
                                  <div class="R-IOPromo-types">
                                    <span>DEVELOPMENT<span class="R-IOPromo-types-divider">|</span></span>Equity
                                  </div>
                                </div>
                                <div class="R-IOPromo-bottom">
                                  <div class="R-IOPromo-targetReturn io-flex-block">
                                    <div>Target IRR*</div>
                                    <div class="R-IOPromo-targetReturn-value io-value">
                                    15.2%
                                    </div>
                                  </div>
                                  <div class="R-IOPromo-targetReturn io-flex-block">
                                    <div>Target Return on Cost*</div>
                                    <div class="R-IOPromo-targetReturn-value io-value">
                                    6.7%
                                    </div>
                                  </div>
                                  <div class="R-IOPromo-blurb-container">
                                    <div class="R-IOPromo-companyName">
                                    OFFERED BY STARPOINT PROPERTIES
                                    </div>
                                    <div class="R-IOPromo-blurb">
                                      <div class="R-IOPromo-showMoreBlurb">
                                        <span>StarPoint Properties and its affiliates are currently accepting equity commitments for Dobson Statio</span><span role="button">... MORE<svg
                                            xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                              clip-rule="evenodd"></path>
                                          </svg>
                                        </span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="R-IOPromo-button Button" style="background-color: grey">
                                    View Details
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div></div>                    
                    
                      <!-- <div class="R-IOPromo" data-is-complete="false" data-status-label="Waitlist">
                        <div class="R-IOPromo-container" data-is-reit="false" data-io-id="2112769">
                          <div class="R-IOPromo-top">
                            <div class="R-IOPromo-statusLabel">
                              <span>Waitlist</span>
                            </div>
                            <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                              <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                              </svg>
                            </div>
                            <div class="R-IOPromo-image">
                              <img
                                src="https://app.realtymogul.com/sites/default/files/styles/private_placement_gallery_thumbnail/public/2_22.jpg?itok=d_OsO0nb">
                            </div>
                          </div>
                          <div class="R-IOPromo-middle">
                            <div class="R-IOPromo-propertyType">
                              Multifamily
                              <hr>
                            </div>
                            <div class="R-IOPromo-propertyLocation">
                              Phoenix, AZ
                            </div>
                            <div class="R-IOPromo-investmentName">
                              Flats at 2030
                            </div>
                            <div class="R-IOPromo-types">
                              <span>Value-Add<span class="R-IOPromo-types-divider">|</span></span>Equity
                            </div>
                          </div>
                          <div class="R-IOPromo-bottom">
                            <div class="R-IOPromo-targetReturn io-flex-block">
                              <div>Target IRR*</div>
                              <div class="R-IOPromo-targetReturn-value io-value">
                                18.1%
                              </div>
                            </div>
                            <div class="R-IOPromo-estimatedCashOnCashLow io-flex-block">
                              <div>Target Avg Cash on Cash*</div>
                              <div class="R-IOPromo-estimatedCashOnCashLow-value io-value">
                                6.0%
                              </div>
                            </div>
                            <div class="R-IOPromo-blurb-container">
                              <div class="R-IOPromo-companyName">
                                Offered by Prism Multi Family Group
                              </div>
                              <div class="R-IOPromo-blurb">
                                <div class="R-IOPromo-showMoreBlurb">
                                  <span>Flats at 2030 is a value-add property
                                    totaling 237 units located in the West
                                    submarket of Phoenix.</span><span role="button">... MORE<svg
                                      xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                      fill="currentColor">
                                      <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                    </svg>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="R-IOPromo-button Button">
                              View Details
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="R-IOPromo" data-is-complete="false" data-status-label="Waitlist">
                        <div class="R-IOPromo-container" data-is-reit="false" data-io-id="1908319">
                          <div class="R-IOPromo-top">
                            <div class="R-IOPromo-statusLabel">
                              <span>Waitlist</span>
                            </div>
                            <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                              <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                              </svg>
                            </div>
                            <div class="R-IOPromo-image">
                              <img
                                src="https://app.realtymogul.com/sites/default/files/styles/private_placement_gallery_thumbnail/public/2._ranch_at_shadow_lake_pool.png?itok=w-e65H3W">
                            </div>
                          </div>
                          <div class="R-IOPromo-middle">
                            <div class="R-IOPromo-propertyType">
                              Residential
                              <hr>
                            </div>
                            <div class="R-IOPromo-propertyLocation">
                              Multiple Locations
                            </div>
                            <div class="R-IOPromo-investmentName">
                              Palladius Real Estate Fund I, LP
                            </div>
                            <div class="R-IOPromo-types">
                              <span>Value-Add<span class="R-IOPromo-types-divider">|</span></span>Equity
                            </div>
                          </div>
                          <div class="R-IOPromo-bottom">
                            <div class="R-IOPromo-targetReturn io-flex-block">
                              <div>Target IRR*</div>
                              <div class="R-IOPromo-targetReturn-value io-value">
                                17.5%
                              </div>
                            </div>
                            <div class="R-IOPromo-estimatedCashOnCashLow io-flex-block">
                              <div>Target Avg Cash on Cash*</div>
                              <div class="R-IOPromo-estimatedCashOnCashLow-value io-value">
                                7.0%
                              </div>
                            </div>
                            <div class="R-IOPromo-blurb-container">
                              <div class="R-IOPromo-companyName">
                                Offered by Palladius Capital Management, LLC
                              </div>
                              <div class="R-IOPromo-blurb">
                                <div class="R-IOPromo-showMoreBlurb">
                                  <span>Palladius Real Estate Fund I, LP "PREF
                                    I" is a private real estate investment
                                    fund focused on produc</span><span role="button">... MORE<svg
                                      xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                      fill="currentColor">
                                      <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                    </svg>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="R-IOPromo-button Button">
                              View Details
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="R-IOPromo" data-is-complete="false" data-status-label="Waitlist">
                        <div class="R-IOPromo-container" data-is-reit="false" data-io-id="2113063">
                          <div class="R-IOPromo-top">
                            <div class="R-IOPromo-statusLabel">
                              <span>Waitlist</span>
                            </div>
                            <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                              <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                              </svg>
                            </div>
                            <div class="R-IOPromo-image">
                              <img
                                src="https://app.realtymogul.com/sites/default/files/styles/private_placement_gallery_thumbnail/public/site_photo_with_merge_-_august_2021_cropped.jpg?itok=diy0B1gP">
                            </div>
                          </div>
                          <div class="R-IOPromo-middle">
                            <div class="R-IOPromo-propertyType">
                              Residential
                              <hr>
                            </div>
                            <div class="R-IOPromo-propertyLocation">
                              Los Angeles, CA
                            </div>
                            <div class="R-IOPromo-investmentName">
                              Valley Villas
                            </div>
                            <div class="R-IOPromo-types">
                              <span>Development<span class="R-IOPromo-types-divider">|</span></span>Equity
                            </div>
                          </div>
                          <div class="R-IOPromo-bottom">
                            <div class="R-IOPromo-targetReturn io-flex-block">
                              <div>Target IRR*</div>
                              <div class="R-IOPromo-targetReturn-value io-value">
                                26.7%
                              </div>
                            </div>
                            <div class="R-IOPromo-blurb-container">
                              <div class="R-IOPromo-companyName">
                                Offered by Williams Homes
                              </div>
                              <div class="R-IOPromo-blurb">
                                <div class="R-IOPromo-showMoreBlurb">
                                  <span>Williams Homes Valley Villas will
                                    include the installation of horizontal
                                    land improvement and constr</span><span role="button">... MORE<svg
                                      xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                      fill="currentColor">
                                      <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                    </svg>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="R-IOPromo-button Button">
                              View Details
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="R-IOPromo" data-is-complete="false" data-status-label="Waitlist">
                        <div class="R-IOPromo-container" data-is-reit="false" data-io-id="1992128">
                          <div class="R-IOPromo-top">
                            <div class="R-IOPromo-statusLabel">
                              <span>Waitlist</span>
                            </div>
                            <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                              <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                              </svg>
                            </div>
                            <div class="R-IOPromo-image">
                              <img
                                src="https://app.realtymogul.com/sites/default/files/styles/private_placement_gallery_thumbnail/public/cwa_mesa_arizona_w_copyright.jpg?itok=e5LVnGvi">
                            </div>
                          </div>
                          <div class="R-IOPromo-middle">
                            <div class="R-IOPromo-propertyType">
                              Multifamily
                              <hr>
                            </div>
                            <div class="R-IOPromo-propertyLocation">
                              Mesa, AZ
                            </div>
                            <div class="R-IOPromo-investmentName">
                              Dobson Station
                            </div>
                            <div class="R-IOPromo-types">
                              <span>Development<span class="R-IOPromo-types-divider">|</span></span>Equity
                            </div>
                          </div>
                          <div class="R-IOPromo-bottom">
                            <div class="R-IOPromo-targetReturn io-flex-block">
                              <div>Target IRR*</div>
                              <div class="R-IOPromo-targetReturn-value io-value">
                                23.2%
                              </div>
                            </div>
                            <div class="R-IOPromo-targetReturn io-flex-block">
                              <div>Target Return on Cost*</div>
                              <div class="R-IOPromo-targetReturn-value io-value">
                                6.7%
                              </div>
                            </div>
                            <div class="R-IOPromo-blurb-container">
                              <div class="R-IOPromo-companyName">
                                Offered by StarPoint Properties
                              </div>
                              <div class="R-IOPromo-blurb">
                                <div class="R-IOPromo-showMoreBlurb">
                                  <span>StarPoint Properties and its affiliates
                                    are currently accepting equity
                                    commitments for Dobson Statio</span><span role="button">... MORE<svg
                                      xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                      fill="currentColor">
                                      <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                    </svg>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="R-IOPromo-button Button">
                              View Details
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="R-IOPromo" data-is-complete="false" data-status-label="Waitlist">
                        <div class="R-IOPromo-container" data-is-reit="false" data-io-id="2029120">
                          <div class="R-IOPromo-top">
                            <div class="R-IOPromo-statusLabel">
                              <span>Waitlist</span>
                            </div>
                            <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                              <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                              </svg>
                            </div>
                            <div class="R-IOPromo-image">
                              <img
                                src="https://app.realtymogul.com/sites/default/files/styles/private_placement_gallery_thumbnail/public/2300_9th_st_-_rendering_01_revised_-_final_0.jpg?itok=oICbT5E5">
                            </div>
                          </div>
                          <div class="R-IOPromo-middle">
                            <div class="R-IOPromo-propertyType">
                              Office
                              <hr>
                            </div>
                            <div class="R-IOPromo-propertyLocation">
                              Arlington, VA
                            </div>
                            <div class="R-IOPromo-investmentName">
                              2300 9th Street
                            </div>
                            <div class="R-IOPromo-types">
                              <span>Value-Add<span class="R-IOPromo-types-divider">|</span></span>Equity
                            </div>
                          </div>
                          <div class="R-IOPromo-bottom">
                            <div class="R-IOPromo-targetReturn io-flex-block">
                              <div>Target IRR*</div>
                              <div class="R-IOPromo-targetReturn-value io-value">
                                15.2%
                              </div>
                            </div>
                            <div class="R-IOPromo-targetReturn io-flex-block">
                              <div>Target Return on Cost*</div>
                              <div class="R-IOPromo-targetReturn-value io-value">
                                6.9%
                              </div>
                            </div>
                            <div class="R-IOPromo-blurb-container">
                              <div class="R-IOPromo-companyName">
                                Offered by Pearlmark and BoundTrain
                              </div>
                              <div class="R-IOPromo-blurb">
                                <div class="R-IOPromo-showMoreBlurb">
                                  <span>2300 Ninth Street South is a
                                    to-be-renovated, boutique office asset
                                    located in the desirable Columbi</span><span role="button">... MORE<svg
                                      xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                      fill="currentColor">
                                      <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                    </svg>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="R-IOPromo-button Button">
                              View Details
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="R-IOPromo" data-is-complete="false" data-status-label="Waitlist">
                        <div class="R-IOPromo-container" data-is-reit="false" data-io-id="1765053">
                          <div class="R-IOPromo-top">
                            <div class="R-IOPromo-statusLabel">
                              <span>Waitlist</span>
                            </div>
                            <div class="R-IOPromo-liked" data-liked="false" data-loading="false">
                              <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                              </svg>
                            </div>
                            <div class="R-IOPromo-image">
                              <img
                                src="https://app.realtymogul.com/sites/default/files/styles/private_placement_gallery_thumbnail/public/2021-12-09_irondale_at_wharton_front_elevation.jpg?itok=JQxtgind">
                            </div>
                          </div>
                          <div class="R-IOPromo-middle">
                            <div class="R-IOPromo-propertyType">
                              Multifamily
                              <hr>
                            </div>
                            <div class="R-IOPromo-propertyLocation">
                              Morris County MSA, NJ
                            </div>
                            <div class="R-IOPromo-investmentName">
                              Irondale at Wharton
                            </div>
                            <div class="R-IOPromo-types">
                              <span>Development<span class="R-IOPromo-types-divider">|</span></span>Equity
                            </div>
                          </div>
                          <div class="R-IOPromo-bottom">
                            <div class="R-IOPromo-targetReturn io-flex-block">
                              <div>Target IRR*</div>
                              <div class="R-IOPromo-targetReturn-value io-value">
                                20.0%
                              </div>
                            </div>
                            <div class="R-IOPromo-blurb-container">
                              <div class="R-IOPromo-companyName">
                                Offered by Diversified Properties, LLC
                              </div>
                              <div class="R-IOPromo-blurb">
                                <div class="R-IOPromo-showMoreBlurb">
                                  <span>Diversified Properties, LLC is
                                    developing a 60-unit Class-A multifamily
                                    community in Western Morris </span><span role="button">... MORE<svg
                                      xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                      fill="currentColor">
                                      <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                    </svg>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="R-IOPromo-button Button">
                              View Details
                            </div>
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                  <!-- <div class="R-SearchResults-pastInvestmentsBtn">
                              <a class="Button" href="/past-investments">VIEW PAST INVESTMENTS</a>
                            </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>


    <div class="DisclosureModal">
      <div class="DisclosureModal-overlay">

      </div>
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
      <div class="CompareModal-overlay">

      </div>
      <div class="CompareModal-contentSection">
        <div class="CompareModal-close">
          <svg class="icon-close-rm">
            <use xlink:href="#icon-close-rm"></use>
          </svg>
        </div>
        <div class="CompareModal-title">

        </div>
        <div class="CompareModal-image"></div>
      </div>
    </div>
  </div>

  @include('home.footer')