      <nav id="Nav" class="relative">
        <!-- Nav bar-->
        <div id="navigation" class="w-screen bg-transparent duration-500 absolute flex items-center justify-between z-50 top-0 left-[50%] translate-x-[-50%] cursor-pointer md:px-12 px-4 py-4">
          <!-- Hamberger parent -->
          <div class="flex-1">
            <!-- Hamberger icon -->
            <div class="block w-9 h-6 icon cursor-pointer z-20" id="hamberger-icon">
              <span class="bar1"></span>
              <span class="bar2"></span>
              <span class="bar3"></span>
            </div>
          </div>
          <!-- Logo -->
          <div class="">
            <img src="./assets/img/jb_logo_slogan.png" alt="It's a logo" class="w-40">
          </div>
          <!-- Location & Internet Banking -->
          <div class="flex flex-1 justify-end items-center gap-8">
            <!-- Loaction Icon -->
            <i class="fa-solid fa-location-dot lg:text-3xl text-2xl cursor-pointer location" id="location-icon"></i>
            <!-- Internet Banking Button -->
            <button class="hidden md:block bg-basecolor text-white text-xs md:text-base font-medium py-2 px-4 rounded-lg hover:bg-white hover:text-basecolor border-2 border-basecolor duration-500">Internet Banking</button>
          </div>
        </div>
        <!-- Menu -->
        <div class="absolute md:top-[4.6rem] top-[4.3rem] left-0 w-full md:w-1/2 h-fit z-50 py-10 px-10 bg-white -translate-x-full duration-150" id="menu">
          <!-- Desktop Menu -->
          <div class="hidden lg:block">
            <!-- Menu Grid for Desktop -->
            <div class="lg:grid grid-cols-3 auto-rows-auto gap-4">
              <!-- Grid First-col & First-Row -->
              <div class="flex flex-col gap-3">
                <div class="flex items-center gap-4 no-select">
                  <h4 class="font-bold text-xl text-basecolor">Accounts</h4>
                  <i class="bi bi-journal-album text-xl text-basecolor"></i>
                </div>
                <a href="#" class="deskLinks font-semibold">Savings</a>
                <a href="#" class="deskLinks font-semibold">Current</a>
                <a href="#" class="deskLinks font-semibold">Deposits</a>
              </div>
              <!-- Grid Second-col & First-Row -->
              <div class="flex flex-col gap-3">
                <div class="flex items-center gap-4 no-select">
                  <h4 class="font-bold text-xl text-basecolor">Cards</h4>
                  <i class="bi bi-credit-card-2-back-fill text-xl text-basecolor"></i>
                </div>
                <a href="#" class="deskLinks font-semibold">Classic Visa Debit Card</a>
                <a href="#" class="deskLinks font-semibold">Gold Visa Debit Card</a>
                <a href="#" class="deskLinks font-semibold">Platinum Visa Debit Card</a>
              </div>
              <!-- Grid Third-col & First-Row -->
              <div class="row-span-4 flex flex-col justify-center items-center border-l-2 px-4">
                <img src="./assets/img/jb_logo_slogan.png" alt="">
              </div>
              <!-- Grid First-col & Second-Row -->
              <div class="h-fit flex flex-col gap-3">
                <div class="flex items-center gap-4 no-select">
                  <h4 class="font-bold text-xl text-basecolor">Loans</h4>
                  <i class="bi bi-cash-stack text-xl text-basecolor"></i>
                </div>
                <a href="#" class="deskLinks font-semibold">Personal Loan</a>
                <a href="#" class="deskLinks font-semibold">Business Loan</a>
              </div>
              <!-- Grid second-col & Second-Row -->
              <div class="h-fit flex flex-col gap-3">
                <div class="flex items-center gap-4 no-select">
                  <h4 class="font-bold text-xl text-basecolor">Guarantees</h4>
                  <i class="bi bi-shield-fill-check text-xl text-basecolor"></i>
                </div>
                <a href="#" class="deskLinks font-semibold">Employee</a>
                <a href="#" class="deskLinks font-semibold">Commercial</a>
              </div>
              <!-- Grid First-col & Third-Row -->
              <div class="h-fit flex flex-col gap-3">
                <div class="flex items-center gap-4 no-select">
                  <h4 class="font-bold text-xl text-basecolor">Services</h4>
                  <i class="bi bi-person-raised-hand text-xl text-basecolor"></i>
                </div>
                <a href="#" class="deskLinks font-semibold">WPS</a>
                <a href="#" class="deskLinks font-semibold">Remittance</a>
              </div>
              <!-- Grid Second-col & Third-Row -->
              <div class="h-fit flex flex-col gap-3">
                <div class="flex items-center gap-4 no-select">
                  <h4 class="font-bold text-xl text-basecolor">About Us</h4>
                  <i class="bi bi-bank2 text-xl text-basecolor"></i>
                </div>
                  <a href="#" class="deskLinks font-semibold">Corporate Governance</a>
                  <a href="#" class="deskLinks font-semibold">Awards</a>
              </div>
            </div>
            <!-- Contact us for Desktop -->
            <div class="flex items-center gap-4">
              <a href="#" class="deskLinks font-bold text-xl text-basecolor">Contact Us</a>
              <i class="bi bi-telephone-outbound-fill text-xl text-basecolor"></i>
            </div>
          </div>
          <!-- Mobile Menu -->
          <div class="lg:hidden flex flex-col justify-center items-start">
            <!-- Account Section Child & Heading and Icon -->
            <div class="w-full">
              <!-- Account section Heading and Icon -->
              <div class="flex justify-between items-center" id="accountSection">
                <a href="#" class="font-bold text-lg text-basecolor">Accounts</a>
                <i class="bi bi-plus-circle-fill text-basecolor font-bold text-xl cursor-pointer"></i>
              </div>
              <!-- Account section child -->
              <div class="max-h-96 flex flex-col gap-3 translate-y-0 duration-300 py-3" id="accountChild">
                <a href="#" class="font-semibold">Savings</a>
                <a href="#" class="font-semibold">Current</a>
                <a href="#" class="font-semibold">Deposits</a>              
              </div>
            </div>
            <!-- Loan Section Child & Heading and Icon -->
            <div class="w-full">
              <!-- Account section Heading and Icon -->
              <div class="flex justify-between items-center" id="loanSection">
                <a href="#" class="font-bold text-lg text-basecolor">Loans</a>
                <i class="bi bi-plus-circle-fill text-basecolor font-bold text-xl cursor-pointer"></i>
              </div>
              <!-- Account section child -->
              <div class="max-h-96 flex flex-col gap-3 translate-y-0 duration-300 py-3 hideSection" id="loanChild">
                <a href="#" class="font-semibold">Personal Loan</a>
                <a href="#" class="font-semibold">Business Loan</a>           
              </div>
            </div>
            <!-- Card Section Child & Heading and Icon -->
            <div class="w-full">
              <!-- Account section Heading and Icon -->
              <div class="flex justify-between items-center" id="cardSection">
                <a href="#" class="font-bold text-lg text-basecolor">Cards</a>
                <i class="bi bi-plus-circle-fill text-basecolor font-bold text-xl cursor-pointer"></i>
              </div>
              <!-- Account section child -->
              <div class="max-h-96 flex flex-col gap-3 translate-y-0 duration-300 py-3 hideSection" id="cardChild">
                <a href="#" class="font-semibold">Classic visa Debit Card</a>
                <a href="#" class="font-semibold">Gold visa Debit Card</a>
                <a href="#" class="font-semibold">Business visa Loan</a>
              </div>
            </div>
            <!-- Guarantee Section Child & Heading and Icon -->
            <div class="w-full">
              <!-- Account section Heading and Icon -->
              <div class="flex justify-between items-center" id="guaranteeSection">
                <a href="#" class="font-bold text-lg text-basecolor">Guarantees</a>
                <i class="bi bi-plus-circle-fill text-basecolor font-bold text-xl cursor-pointer"></i>
              </div>
              <!-- Account section child -->
              <div class="max-h-96 flex flex-col gap-3 translate-y-0 duration-300 py-3 hideSection" id="guaranteeChild">
                <a href="#" class="font-semibold">Employee Guarantee</a>
                <a href="#" class="font-semibold">Commercial Guarantee</a>
              </div>
            </div>
            <!-- Services Section Child & Heading and Icon -->
            <div class="w-full">
              <!-- Account section Heading and Icon -->
              <div class="flex justify-between items-center" id="servicesSection">
                <a href="#" class="font-bold text-lg text-basecolor">Services</a>
                <i class="bi bi-plus-circle-fill text-basecolor font-bold text-xl cursor-pointer"></i>
              </div>
              <!-- Account section child -->
              <div class="max-h-96 flex flex-col gap-3 translate-y-0 duration-300 py-3 hideSection" id="servicesChild">
                <a href="#" class="font-semibold">WPS</a>
                <a href="#" class="font-semibold">Remittance</a>
              </div>
            </div>
            <!-- About us Section Child & Heading and Icon -->
            <div class="w-full">
              <!-- Account section Heading and Icon -->
              <div class="flex justify-between items-center" id="aboutSection">
                <a href="#" class="font-bold text-lg text-basecolor">About Us</a>
                <i class="bi bi-plus-circle-fill text-basecolor font-bold text-xl cursor-pointer"></i>
              </div>
              <!-- Account section child -->
              <div class="max-h-96 flex flex-col gap-3 translate-y-0 duration-300 py-3 hideSection" id="aboutChild">
                <a href="#" class="font-semibold">Corporate Governance</a>
                <a href="#" class="font-semibold">Awards</a>
              </div>
            </div>
            <!-- Contact us Section Child & Heading and Icon -->
            <div class="w-full">
              <!-- Account section Heading and Icon -->
              <div class="flex justify-between items-center" id="aboutSection">
                <a href="#" class="font-bold text-lg text-basecolor">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Branch & ATM Location -->
        <div class="absolute md:top-[4.6rem] top-[4.3rem] right-0 w-full md:w-1/2 h-fit z-50 py-8 px-10 bg-white translate-x-[100%] duration-150" id="locationMenu">
          <!-- Branch & ATM Location for Desktop -->
          <div class="hidden lg:flex flex-col">
            <!-- Branch Location Grid Heading for Desktop -->
            <h4 class="font-bold text-2xl text-basecolor cursor-pointer no-select">Branch Location</h4>
            <!-- Branch Location Grid for Desktop -->
            <div class="hidden lg:grid grid-cols-2 grid-rows-2 items-start border-b-2 gap-2 py-6">
              <!-- Grid First-col & First-Row -->
              <div class="flex flex-col gap-2">
                <h4 class="font-bold text-xl text-basecolor no-select">Abu Dhabi</h4>
                <p class="font-semibold text-sm">Ground Floor, Al Saman Tower, Beside Capital Park, Plot C-7, Sector E-8, Hamdan Street</p>
                <div class="flex items-center gap-x-4">
                  <a href="#" class="map text-basecolor font-semibold">view on map</a>
                  <i class="bi bi-geo-fill text-basecolor"></i>
                </div>
              </div>
              <!-- Grid Second-col & First-Row -->
              <div class="flex flex-col gap-2">
                <h4 class="font-bold text-xl text-basecolor no-select">Dubai</h4>
                <p class="font-semibold text-sm">Ground Floor, Rolex Tower/Deira Twin Tower, Baniyas Road, Deira</p>
                <div class="flex items-center gap-x-4">
                  <a href="#" class="map text-basecolor font-semibold">view on map</a>
                  <i class="bi bi-geo-fill text-basecolor"></i>
                </div>
              </div>
              <!-- Grid First-col & Second-Row -->
              <div class="flex flex-col gap-2">
                <h4 class="font-bold text-xl text-basecolor no-select">Al Ain</h4>
                <p class="font-semibold text-sm">Sk. Khalifa Bin Mohd., Al-Nahyan Building, Main Market Centre, Main Street</p>
                <div class="flex items-center gap-x-4">
                  <a href="#" class="map text-basecolor font-semibold">view on map</a>
                  <i class="bi bi-geo-fill text-basecolor"></i>
                </div>
              </div>
              <!-- Grid Second-col & Second-Row -->
              <div class="flex flex-col gap-2">
                <h4 class="font-bold text-xl text-basecolor no-select">Sharjah</h4>
                <p class="font-semibold text-sm">Sheikha Mahra Building, Al Khaleej Square, Opp.Swissbel(Ex-Rotana) Hotel, Arabian Guld Street, Al Mujarrah</p>
                <div class="flex items-center gap-x-4">
                  <a href="#" class="map text-basecolor font-semibold">view on map</a>
                  <i class="bi bi-geo-fill text-basecolor"></i>
                </div>
              </div>
            </div>
            <!-- ATM Location Grid Heading -->
            <h4 class="font-bold text-2xl text-basecolor cursor-pointer mt-2 no-select">ATM Location</h4>
            <!-- ATM Location Grid for Desktop -->
            <div class="hidden lg:grid grid-cols-2 grid-rows-2 items-start gap-2 py-6">
              <!-- Grid First-col & First-Row -->
              <div class="flex flex-col">
                <h4 class="font-bold text-xl text-slate-500 no-select">Abu Dhabi</h4>
                <div class="flex items-center gap-x-4">
                  <a href="#" class="map text-basecolor font-semibold">view on map</a>
                  <i class="bi bi-geo-fill text-basecolor"></i>
                </div>
              </div>
              <!-- Grid Second-col & First-Row -->
              <div class="flex flex-col">
                <h4 class="font-bold text-xl text-slate-500 no-select">Dubai</h4>
                <div class="flex items-center gap-x-4">
                  <a href="#" class="map text-basecolor font-semibold">view on map</a>
                  <i class="bi bi-geo-fill text-basecolor"></i>
                </div>
              </div>
              <!-- Grid First-col & Second-Row -->
              <div class="flex flex-col">
                <h4 class="font-bold text-xl text-slate-500 no-select">Al Ain</h4>
                <div class="flex items-center gap-x-4">
                  <a href="#" class="map text-basecolor font-semibold">view on map</a>
                  <i class="bi bi-geo-fill text-basecolor"></i>
                </div>
              </div>
              <!-- Grid Second-col & Second-Row -->
              <div class="flex flex-col">
                <h4 class="font-bold text-xl text-slate-500 no-select">Sharjah</h4>
                <div class="flex items-center gap-x-4">
                  <a href="#" class="map text-basecolor font-semibold">view on map</a>
                  <i class="bi bi-geo-fill text-basecolor"></i>
                </div>
              </div>
            </div>
          </div>
          <!-- Branch & ATM Location Heading for Mobile -->
          <div class="lg:hidden flex justify-between items-center gap-4">
            <!-- Branch Location Heading-->
            <h4 class="w-full font-bold lg:text-xl text-lg text-basecolor cursor-pointer border-r-4 border-basecolor" id="branchForMob">Branch Location</h4>
            <!-- Branch Location Heading-->
            <h4 class="w-full font-bold lg:text-xl text-lg text-slate-500 cursor-pointer" id="ATMForMob">ATM Location</h4>
            </div>
            <!-- Branch & ATM List for Mobile -->
            <div class="lg:hidden">
              <!-- Branch List for Mobile -->
              <div class="flex flex-col items-start gap-4 py-6" id="branchMobList">
                <!-- Branch List 1 -->
                <div class="flex flex-col gap-2">
                  <h4 class="font-bold text-basecolor">Abu Dhabi</h4>
                  <p class="font-semibold text-sm">Ground Floor, Al Saman Tower, Beside Capital Park, Plot C-7, Sector E-8, Hamdan Street</p>
                  <div class="flex items-center gap-4">
                    <a href="#" class="map text-basecolor font-semibold text-sm">view on map</a>
                    <i class="bi bi-geo-fill text-basecolor"></i>
                  </div>
                </div>
              <!-- Branch List 2 -->
              <div class="flex flex-col gap-2">
                <h4 class="font-bold text-basecolor">Dubai</h4>
                <p class="font-semibold text-sm">Ground Floor, Rolex Tower/Deira Twin Tower, Baniyas Road, Deira</p>
                <div class="flex items-center gap-4">
                  <a href="#" class="map text-basecolor font-semibold text-sm">view on map</a>
                  <i class="bi bi-geo-fill text-basecolor"></i>
                </div>
              </div>
              <!--  Branch List 3 -->
              <div class="flex flex-col gap-2">
                <h4 class="font-bold text-basecolor">Al Ain</h4>
                <p class="font-semibold text-sm">Sk. Khalifa Bin Mohd., Al-Nahyan Building, Main Market Centre, Main Street</p>
                <div class="flex items-center gap-4">
                  <a href="#" class="map text-basecolor font-semibold text-sm">view on map</a>
                  <i class="bi bi-geo-fill text-basecolor"></i>
                </div>
              </div>
              <!--  Branch List 4 -->
              <div class="flex flex-col gap-2">
                <h4 class="font-bold text-basecolor">Sharjah</h4>
                <p class="font-semibold text-sm">Sheikha Mahra Building, Al Khaleej Square, Opp.Swissbel(Ex-Rotana) Hotel, Arabian Guld Street, Al Mujarrah</p>
                <div class="flex items-center gap-4">
                  <a href="#" class="map text-basecolor font-semibold text-sm">view on map</a>
                  <i class="bi bi-geo-fill text-basecolor"></i>
                </div>
              </div>
            </div>
            <!-- ATM List for Mobile -->
            <div class="hidden flex-col items-start gap-4 py-6" id="ATMMobList">
              <!-- Abu Dhabi ATM Location 1 -->
              <div class="flex flex-col cursor-pointer">
                <h4 class="font-bold text-lg text-slate-500">Abu Dhabi</h4>
                <div class="flex items-center gap-4">
                  <a href="#" class="map text-basecolor font-semibold text-sm">view on map</a>
                  <i class="bi bi-geo-fill text-basecolor"></i>
                </div>
              </div>
              <!-- Dubai ATM Location 2 -->
              <div class="flex flex-col cursor-pointer">
                <h4 class="font-bold text-lg text-slate-500">Dubai</h4>
                <div class="flex items-center gap-4">
                  <a href="#" class="map text-basecolor font-semibold text-sm">view on map</a>
                  <i class="bi bi-geo-fill text-basecolor"></i>
                </div>
              </div>
              <!-- Al Ain ATM Location 3 -->
              <div class="flex flex-col cursor-pointer">
                <h4 class="font-bold text-lg text-slate-500">Al Ain</h4>
                <div class="flex items-center gap-4">
                  <a href="#" class="map text-basecolor font-semibold text-sm">view on map</a>
                  <i class="bi bi-geo-fill text-basecolor"></i>
                </div>
              </div>
              <!-- Sharjah ATM Location 4 -->
              <div class="flex flex-col cursor-pointer">
                <h4 class="font-bold text-lg text-slate-500">Sharjah</h4>
                <div class="flex items-center gap-4">
                  <a href="#" class="map text-basecolor font-semibold text-sm">view on map</a>
                  <i class="bi bi-geo-fill text-basecolor"></i>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </nav>