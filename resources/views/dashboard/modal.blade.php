<link rel="stylesheet" href="assets/style.css"/>

    
    <!-- SIGN IN LAPTOP -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <div class="rec">
          <div class="top">
            <p class="pp">SIGN IN</p>
            <p class="close">close x</p>
            <p class="text">Don’t have an account yet? <a href="#" onclick='
              let signup1 = document.getElementById("signupModal"); 
              let modall = document.getElementById("myModal"); 
              signup1.style.display = "block";
              modall.style.display = "none";
            '>Join PropertiesInvestmentProgram</a> </p>
            <p class="text1">Please enter your email and password below.</p>
            <div>
              <form action="./php/auth.php" method="post">
                <div class="form-control" style="margin-top: 35%;">
                  <input type="email" name="email" required />
                  <label>Email</label>
                </div>
                
                <div class="form-control" style="margin-top: 55%;">
                  <input type="password" name="password" required />
                  <label>Password</label>
                </div>
                <button class="login" name="login">SIGN IN</button>
                <a href="#"
                  onclick='
                    let forgot = document.getElementById("forgotPas"); 
                    let modall = document.getElementById("myModal"); 
                    forgot.style.display = "block";
                    modall.style.display = "none";
                  '
                  class="forgot"
                  >Forgot Password</a>
                <div style="background-color: #c5c5c5; margin-top: 4%;">
                  <p class="text2">Questions? Our Investor Relations team is available</p>
                  <p class="text2" style="top: 80%">8AM-6PM PST M-F. +1 (917) 790-5240</p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    
    </div>
    
    <!-- SIGN IN PHONE -->
    <div id="myModal1" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <div class="rec">
          <div class="top" style="padding-right: 3%;">
            <p class="pp">SIGN IN</p>
            <p class="close4">close x</p>
            <p class="text">Don’t have an account yet? <a href="#" onclick='
              let signup1 = document.getElementById("signupModal1"); 
              let modall = document.getElementById("myModal1"); 
              signup1.style.display = "block";
              modall.style.display = "none";
            '>Join PropertiesInvestmentProgram</a> </p>
            <p class="text1">Please enter your email and password below.</p>
            <div>
              <form action="./php/auth.php" method="post">
                <div class="form-control" style="margin-top: 35%;">
                  <input type="email" name="email" required />
                  <label>Email</label>
                </div>
                
                <div class="form-control" style="margin-top: 55%;">
                  <input type="password" name="password" required />
                  <label>Password</label>
                </div>
                <button class="login" name="login" style="margin-top: 6%;">SIGN IN</button>
                <button class="login" style="display: none;" id="myBtn1" name="login">SIGN IN</button>
                <a href="#"
                  style="margin-top: 4%;"
                  onclick='
                    let forgot = document.getElementById("forgotPas"); 
                    let modall = document.getElementById("myModal1"); 
                    forgot.style.display = "block";
                    modall.style.display = "none";
                  '
                  class="forgot"
                  >Forgot Password</a>
                <div style="background-color: #c5c5c5; margin-top: 4%;">
                  <p class="text2">Questions? Our Investor Relations team is available</p>
                  <p class="text2" style="top: 80%">8AM-6PM PST M-F. +1 (917) 790-5240</p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    
    </div>
    
    <!-- FORGOT PASSWORD -->
    <div id="forgotPas" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <div class="forgot-rec">
          <div class="forgot-top">
            <p class="forgot-pp">FORGOT PASSWORD</p>
            <p class="close1">close x</p>
            <p class="text1" style="font-size: 16px;">Enter your email address to receive a code to reset your password.</p>
            <div>
              <form action="./mail/forgot_password.php" method="post">
                <div class="form-control" style="margin-top: 45%;">
                  <input type="email" name="email" required />
                  <label>Email</label>
                </div>
                <button class="forgot-btn" name="forgot" style="margin-top: 15%;">SEND CODE</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SIGN UP PHONE -->
    <div id="signupModal1" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <div class="signup-rec" style="width: 100%;">
          <div class="signup-top" style="height: 4.5%;">
            <p class="signup-pp" style="font-size: 10px; width: 79%; top: 1%">JOIN PROPERTIESINVESTMENTPROGRAM</p>
            <p class="close3">close x</p>

            <div class="side-r" style="left: 8%; width: auto;">
              <form action="./php/auth.php" enctype="multipart/form-data" method="post">
                <div>
                  <div class="form-control sign-form" style="top: -1%;">
                    <input type="text" name="fname" required />
                    <label style="color: #9B9B9B;">First Name&nbsp;<span class="TextInput-label-required">*</span></label>
                  </div>
                  <div class="form-control sign-form" style="top: 6%;">
                    <input type="text" name="lname" required />
                    <label style="color: #9B9B9B;">Last Name&nbsp;<span class="TextInput-label-required">*</span></label>
                  </div>
                  <p class="signup-text1" style="top: 15%;">ARE YOU AN ACCREDITED INVESTOR?</p>
                  <div style="position: absolute; top: 19%;">
                    <div class="Fieldset-items" data-is-radio data-is-radio>
                      <div class="Fieldset-items-item" data-index="1">
                        <div class="RadioInput">
                          <label class="RadioInput-label">
                            <input
                              type="radio"
                              name="are-you-an-accredited-investor"
                              value="yes"
                            />
                            <div class="RadioInput-custom"></div>
                            <span>Yes</span>
                          </label>
                        </div>
                      </div>

                      <div class="Fieldset-items-item" data-index="2">
                        <div class="RadioInput">
                          <label class="RadioInput-label">
                            <input
                              type="radio"
                              name="are-you-an-accredited-investor"
                              value="no"
                            />
                            <div class="RadioInput-custom"></div>
                            <span>No</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-control sign-form" style="top: 22%">
                    <input type="tel" name="tel" required />
                    <label style="color: #9B9B9B;">Phone&nbsp;<span class="TextInput-label-required">*</span></label>
                  </div>

                  <fieldset class="Fieldset" style="position: absolute; top: 30%; width: 90%; color: #7c7c7c;">
                    <div class="Fieldset-header"></div>
                    <div class="Fieldset-items">
                      <div class="Fieldset-items-item" data-index="1">
                        <div class="CheckboxInput">
                          <input
                            class="CheckboxInput-input"
                            type="checkbox"
                            id="optionaliwouldliketoreceivealertsregardingplatform1"
                            value="optional-i-would-like-to-receive-alerts-regarding-platform-offerings-from-realtymogulco-notifications-message-frequency-varies-text-help-to-66485-for-help-text-stop-to-66485-to-stop"
                          />

                          <label
                            style="font-size: 15px; font-weight: 600;"
                            for="optionaliwouldliketoreceivealertsregardingplatform1"
                            class="CheckboxInput-label"
                            >OPTIONAL: I would like to receive alerts regarding
                            platform offerings from PropertiesInvestmentProgram Co-Notifications.
                            Message frequency varies. Text HELP to 66485 for
                            help. Text STOP to 66485 to stop.</label
                          >
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <div>
                    <div class="form-control sign-form" style="top: 43%">
                      <input type="email" name="email" required />
                      <label style="color: #9B9B9B;">Email&nbsp;<span class="TextInput-label-required">*</span></label>
                    </div>
                    <div class="form-control sign-form" style="top: 50%">
                      <input type="password" name="pass" required />
                      <label style="color: #9B9B9B;">Password&nbsp;<span class="TextInput-label-required">*</span></label>
                    </div>

                    <p class="signup-text1" style="top: 58%; width: 90%;">Password should be at least 8 characters, contain an uppercase character, a lowercase character, a number and a symbol.</p>

                    <div class="form-control sign-form" style="top: 63%">
                      <input type="password" name="con-pass" required />
                      <label style="color: #9B9B9B;">Confirm Password&nbsp;<span class="TextInput-label-required">*</span></label>
                    </div>
                    
                    <p class="signup-text1" style="top: 71%; width: 90%;">By clicking "JOIN PROPERTIESINVESTMENTPROGRAM" you are agreeing to our <a href="terms-service.html"> Terms of Service</a> and <a href="privacy-policy.html"> Privacy Policy</a>.</p>

                    <div class="form-control sign-form" style="top: 75%">
                      <label style="color: #9B9B9B;">ID &nbsp;<span class="TextInput-label-required">*</span></label>
                    </div>
                    <div class="form-control sign-form" style="top: 77%"><input type="file" name="identity" accept=".jpg,.png,.jpeg" required /></div>
                    
                    <button class="signup-btn" name="signup" style="top: 88%; width: 100%; left: -4.1%; border-radius: 0px;">SIGN UP</button>
                    
                  </div>
                </div>
                <ul class="side" style="top: 95%; height:36%; left: -9%; right: 0%; width: auto;">
                  <p class="signup-text" style="margin-top: 7%; width: 75%; height: 19%; margin-left: 19%;">Gain access to commercial real estate deals across the country</p>
                  <p class="signup-text" style="width: 75%; height: 19%; margin-left: 19%;">Easily review, compare and invest in deals that meet your criteria</p>
                  <p class="signup-text" style="width: 75%; height: 19%; margin-left: 19%;">Build the real estate portfolio that’s right for you</p>
                  <p class="signup-text" style="width: 75%; height: 19%; margin-left: 19%;">Potential benefits include diversification, growth and passive income</p>
                  <div class="signup-text" style="position: absolute; bottom: 11%; border-bottom: 1px solid #adadad; left: -6%; width: 80%"></div>
                  <p class="signup-text" style="position: absolute; top: 95%; height: 0%; right: 3%;">Have an account? <a href="#" onclick='
                    let signup = document.getElementById("signupModal1"); 
                    let modall = document.getElementById("myModal1"); 
                    signup.style.display = "none";
                    modall.style.display = "block";
                  '>Sign in </a></p>
                </ul>
                
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SIGN UP LAPTOP -->
    <div id="signupModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <div class="signup-rec">
          <div class="signup-top">
            <p class="signup-pp">JOIN PROPERTIESINVESTMENTPROGRAM</p>
            <p class="close2">close x</p>
            <ul class="side">
              <p class="signup-text" style="margin-top: 7%;">Gain access to commercial real estate deals across the country</p>
              <p class="signup-text">Easily review, compare and invest in deals that meet your criteria</p>
              <p class="signup-text">Build the real estate portfolio that’s right for you</p>
              <p class="signup-text">Potential benefits include diversification, growth and passive income</p>
              <div class="signup-text" style="position: absolute; bottom: 6%; border-bottom: 1px solid #adadad; left: -6%; width: 80%"></div>
              <p class="signup-text" style="position: absolute; top: 97%; height: 0%;">Have an account? <a href="#" onclick='
                let signup = document.getElementById("signupModal"); 
                let modall = document.getElementById("myModal"); 
                signup.style.display = "none";
                modall.style.display = "block";
              '>Sign in </a></p>
            </ul>
            <div class="side-r">
              <form action="./php/auth.php" enctype="multipart/form-data" method="post">
                <div style="float: left;">
                  <div class="form-control sign-form">
                    <input type="text" name="fname" required />
                    <label style="color: #9B9B9B;">First Name&nbsp;<span class="TextInput-label-required">*</span></label>
                  </div>
                  <div class="form-control sign-form" style="top: 7%;">
                    <input type="text" name="lname" required />
                    <label style="color: #9B9B9B;">Last Name&nbsp;<span class="TextInput-label-required">*</span></label>
                  </div>
                  <p class="signup-text1">ARE YOU AN ACCREDITED INVESTOR?</p>
                  <div style="position: absolute; top: 20%;">
                    <div class="Fieldset-items" data-is-radio data-is-radio>
                      <div class="Fieldset-items-item" data-index="1">
                        <div class="RadioInput">
                          <label class="RadioInput-label">
                            <input
                              type="radio"
                              name="are-you-an-accredited-investor"
                              value="yes"
                            />
                            <div class="RadioInput-custom"></div>
                            <span>Yes</span>
                          </label>
                        </div>
                      </div>

                      <div class="Fieldset-items-item" data-index="2">
                        <div class="RadioInput">
                          <label class="RadioInput-label">
                            <input
                              type="radio"
                              name="are-you-an-accredited-investor"
                              value="no"
                            />
                            <div class="RadioInput-custom"></div>
                            <span>No</span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-control sign-form" style="top: 22%">
                    <input type="tel" name="tel" required />
                    <label style="color: #9B9B9B;">Phone&nbsp;<span class="TextInput-label-required">*</span></label>
                  </div>

                  <fieldset class="Fieldset" style="position: absolute; top: 33%; width: 90%; color: #7c7c7c;">
                    <div class="Fieldset-header"></div>
                    <div class="Fieldset-items">
                      <div class="Fieldset-items-item" data-index="1">
                        <div class="CheckboxInput">
                          <input
                            class="CheckboxInput-input"
                            type="checkbox"
                            name="optional-checkbox-label"
                            id="optionaliwouldliketoreceivealertsregardingplatform"
                            value="optional-i-would-like-to-receive-alerts-regarding-platform-offerings-from-realtymogulco-notifications-message-frequency-varies-text-help-to-66485-for-help-text-stop-to-66485-to-stop"
                          />

                          <label
                            style="font-size: 15px; font-weight: 600;"
                            for="optionaliwouldliketoreceivealertsregardingplatform"
                            class="CheckboxInput-label"
                            >OPTIONAL: I would like to receive alerts regarding
                            platform offerings from PropertiesInvestmentProgram Co-Notifications.
                            Message frequency varies. Text HELP to 66485 for
                            help. Text STOP to 66485 to stop.</label
                          >
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <div>
                    <div class="form-control sign-form" style="top: 45%">
                      <input type="email" name="email" required />
                      <label style="color: #9B9B9B;">Email&nbsp;<span class="TextInput-label-required">*</span></label>
                    </div>
                    <div class="form-control sign-form" style="top: 53%">
                      <input type="password" name="pass" required />
                      <label style="color: #9B9B9B;">Password&nbsp;<span class="TextInput-label-required">*</span></label>
                    </div>

                    <p class="signup-text1" style="top: 61%; width: 90%;">Password should be at least 8 characters, contain an uppercase character, a lowercase character, a number and a symbol.</p>

                    <div class="form-control sign-form" style="top: 65%">
                      <input type="password" name="con-pass" required />
                      <label style="color: #9B9B9B;">Confirm Password&nbsp;<span class="TextInput-label-required">*</span></label>
                    </div>

                    <div class="form-control sign-form" style="top: 72%">
                      <label style="color: #9B9B9B;">ID &nbsp;<span class="TextInput-label-required">*</span></label>
                    </div>
                    <div class="form-control sign-form" style="top: 75%"><input type="file" name="identity" accept=".jpg,.png,.jpeg" required /></div>
                    
                    
                    <p class="signup-text1" style="top: 85%; width: 90%;">By clicking "JOIN PROPERTIESINVESTMENTPROGRAM" you are agreeing to our <a href="terms-service.html"> Terms of Service</a> and <a href="privacy-policy.html"> Privacy Policy</a>.</p>

                    <button class="signup-btn" name="signup">SIGN UP TO PROPERTIESINVESTMENTPROGRAM</button>
                    
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      const inputs = document.querySelectorAll('.form-control input');
      const labels = document.querySelectorAll('.form-control label');

      labels.forEach(label => {
        label.innerHTML = label.innerText
          .split('')
          .map((letter, idx) => `<span style="
              transition-delay: ${idx * 50}ms
            ">${letter}</span>`)
          .join('');
      });


    </script>
    
    <script src="./assets/modal.js"></script>