@extends('frontend.layouts.main')
@section('content')
<div id="preloader">
      <div class="d-flex justify-content-center align-items-center" id="status">
        <div class="status-img overflow-fix"><img src="{{ asset('makson/images/loder.gif') }}" alt=""></div>
      </div>
    </div>
  
    <!-- menu area-->
  <div class="responsive-menu-area overflow-fix">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-8 d-flex align-items-center">
        <div class="logo-area overflow-fix"><a href=""><img src="{{ asset('makson/images/logo.gif') }}" alt=""></a></div>
        </div>
        <div class="col-sm-8 col-4 ">
          <div id="responsive-menu" class="sidenav">
            <p href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</p>
          <div class="responsive-menu-slinky"> 
            <ul>
            <li><a href="{{ url('/') }}">Home </a></li>
            <li><a href="#">About us</a>
              <ul>
              <li><a href="{{ url('at-a-glance') }}">Maksons at a Glance</a></li>
              <li><a href="{{ url('history') }}">History</a></li>
              <li><a href="{{ url('mission-vision') }}">Mission & Vision</a></li>
              <!--<li><a href="{{ url('board-of-director') }}">Board Of Director's</a></li>-->
              <li><a href="{{ url('meet-people') }}">Meet Our People</a></li>
              <li><a href="{{ url('recognition') }}">Awards and Recognition</a></li>
              </ul>
            </li>
            <li><a href="#">Group Concerns</a>
              <ul>
                <li><a href="{{ url('maksons-spinning-mills-ltd') }}">Maksons Spinning Mills Ltd</a></li>
                <li><a href="{{ url('metro-spinning-ltd') }}">Metro Spinning Ltd</a></li>
                <li><a href="{{ url('maksons-textile-limited') }}">Maksons Textile Ltd</a></li>
                <li><a href="{{ url('makcot-international') }}">Makcot International</a></li>
                <li><a href="{{ url('lamuni-apparels-ltd') }}">Lamuni Apparels Ltd</a></li>
                <li><a href="{{ url('maksourcing-ltd') }}">Mak Sourcing Limited</a></li>
                <li><a href="{{ url('maksons-properties-development-ltd') }}">Maksons Properties & Development Limited</a></li>
                <li><a href="{{ url('maksons-logistic-ltd') }}">Maksons Logistic Ltd</a></li>
              </ul>
            </li>
            <li><a href="#">Investor</a>
              <ul>
                <li><a href="{{ url('major-share-holding') }}">Major Share holding</a></li>
                <li><a href="{{ url('annual-reports') }}">Annual Reports</a></li>
                <li><a href="{{ url('compliance-status') }}">Compliance Status</a></li>
                <li><a href="{{ url('quarterly-reports') }}">Quarterly Reports</a></li>
                <li><a href="{{ url('director-report') }}">Director Reports</a></li>
              </ul>
            </li>
            <li><a href="{{ url('csr') }}">CSR</a></li>
            <li><a href="{{ url('career') }}">Career </a></li>
            <li><a href="{{ url('contact') }}">Contact Us</a></li>
          </ul>
          </div>
          </div>
          <span class="responsive-bar" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>
        </div>
        
      </div>
    </div>
  </div>
  
    <!-- menu area-->
    <!-- menu area-->
    <div class="main-menu-area overflow-fix">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3">
          <div class="logo-area overflow-fix"><a href=""><img src="{{ asset('makson/images/logo.gif') }}" alt=""></a></div>
          </div>
          <div class="col-lg-9 d-flex align-items-center justify-content-end">
            <div class="menu-area-list">
              <ul>
                <li><a href="{{ url('/') }}">Home </a></li>
                <li><a href="#">About us</a>
                  <ul>
                  <li><a href="{{ url('at-a-glance') }}">Maksons at a Glance</a></li>
                  <li><a href="{{ url('history') }}">History</a></li>
                  <li><a href="{{ url('mission-vision') }}">Mission & Vision</a></li>
                  <!--<li><a href="{{ url('board-of-director') }}">Board Of Director's</a></li>-->
                  <li><a href="{{ url('meet-people') }}">Meet Our People</a></li>
                  <li><a href="{{ url('recognition') }}">Awards and Recognition</a></li>
                  </ul>
                </li>
                <li><a href="#">Group Concerns</a>
                  <ul>
                    <li><a href="{{ url('maksons-spinning-mills-ltd') }}">Maksons Spinning Mills Ltd</a></li>
                    <li><a href="{{ url('metro-spinning-ltd') }}">Metro Spinning Ltd</a></li>
                    <li><a href="{{ url('maksons-textile-limited') }}">Maksons Textile Ltd</a></li>
                    <li><a href="{{ url('makcot-international') }}">Makcot International</a></li>
                    <li><a href="{{ url('lamuni-apparels-ltd') }}">Lamuni Apparels Ltd</a></li>
                    <li><a href="{{ url('maksourcing-ltd') }}">Mak Sourcing Limited</a></li>
                    <li><a href="{{ url('maksons-properties-development-ltd') }}">Maksons Properties & Development Limited</a></li>
                    <li><a href="{{ url('maksons-logistic-ltd') }}">Maksons Logistic Ltd</a></li>
                  </ul>
                </li>
                <li><a href="#">Investor</a>
                  <ul>
                    <li><a href="{{ url('major-share-holding') }}">Major Share holding</a></li>
                    <li><a href="{{ url('annual-reports') }}">Annual Reports</a></li>
                    <li><a href="{{ url('compliance-status') }}">Compliance Status</a></li>
                    <li><a href="{{ url('quarterly-reports') }}">Quarterly Reports</a></li>
                    <li><a href="{{ url('director-report') }}">Director Reports</a></li>
                  </ul>
                </li>
                <li><a href="{{ url('csr') }}">CSR</a></li>
                <li><a href="{{ url('career') }}">Career </a></li>
                <li><a href="{{ url('contact') }}">Contact Us</a></li>
              </ul>
            </div>
          </div>
      
        </div>
      </div>
    </div>
    <!-- menu area end-->
    <!-- home-page-slider-->
    <section class="full-hight-area homepage-banner-slider-area owl-carousel owl-theme overflow-fix">
      @if(sizeof($sliders)>0)
      @foreach($sliders as $slider)
      <div class="full-hight-table overflow-fix" style="background:url({{ asset('/uploads/'. $slider->image) }});">
        <div class="full-hight-tablecell">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="banner-slider-content">
                  {{-- <h2>Specialized in quality<br><span>combed</span>and<span>carded</span><br>knit yarn</h2> --}}
                  {{-- <h2>{!! str_limit(strip_tags($slider->description), 30) !!}</h2> --}}
                  <!--<h2>{!! $slider->description !!}</h2>-->
                  <h2>{{ $slider->title }}</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @else
      <div class="full-hight-table overflow-fix" style="background:url({{ asset('makson/images/slider-1.jpg') }});">
        <div class="full-hight-tablecell">
          <div class="container-fluid">
            <div class="row justify-content-end">
              <div class="col-lg-8">
                <div class="banner-slider-content">
                  <h2>Specialized in quality<br><span>combed</span>and<span>carded</span><br>knit yarn</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="full-hight-table overflow-fix" style="background:url({{ asset('makson/images/slider-5.jpg') }});">
        <div class="full-hight-tablecell">
          <div class="container-fluid">
            <div class="row justify-content-end">
              <div class="col-lg-8">
                <div class="banner-slider-content">
                  <h2>Providing world class<br><span></span><span>quality</span>products</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="full-hight-table overflow-fix" style="background:url({{ asset('makson/images/slider-3.jpg') }});">
        <div class="full-hight-tablecell">
          <div class="container-fluid">
            <div class="row justify-content-end">
              <div class="col-lg-8">
                <div class="banner-slider-content">
                  <h2>Maintain<span>ethical</span><br>business</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="full-hight-table overflow-fix" style="background:url({{ asset('makson/images/slider-4.jpg') }});">
        <div class="full-hight-tablecell">
          <div class="container-fluid">
            <div class="row justify-content-end">
              <div class="col-lg-8">
                <div class="banner-slider-content">
                  <h2>Specialized  in quality<br><span>combed</span>and<span>carded</span><br>knit yarn</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="full-hight-table overflow-fix" style="background:url({{ asset('makson/images/slider-5.jpg') }});">
        <div class="full-hight-tablecell">
          <div class="container-fluid">
            <div class="row justify-content-end">
              <div class="col-lg-8">
                <div class="banner-slider-content">
                  <h2>Specialized  in quality<br><span>combed</span>and<span>carded</span><br>knit yarn</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif
    </section>
    <!-- home-page-slider End-->
    <!-- Ticker-->
    <section class="ticker-container-main overflow-fix">
      <div class="containera overflow-fix">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-3 col-4 display-none-r">
            <div class="ticker-container-title overflow-fix">
              <h2>Bulletin</h2>
            </div>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-8 col-8">
            <div class="ticker-container">
              <div class="ticker-text">
              <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseleave="this.start();">
                @if(sizeof($bulletins)>0)
                @foreach($bulletins as $bulletin)
                  <a href="#"><p>{{ $bulletin->title }}</p></a>
                @endforeach
                @else
                <a href="#"><p>Data not found !</p></a>
                @endif
              </marquee>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Ticker End
    <div class="single-logo-bg-area overflow-fix">
      <div class="header-tilt "></div>
     </div>-->
    <!-- single logo area-->
    <div class="single-logo-area overflow-fix d-flex align-items-center justify-content-end">
      <div class="full-tecturee" id="hoge"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="single-logo header-tilt overflow-fix"><img src="{{ asset('makson/images/blogo.png') }}" alt=""></div>
          </div>
        </div>
      </div>
    </div>
    <!-- menu area end-->
    <!-- concerns area-->
    <section class="concerns-main-area overflow-fix" style="display:none;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title-area overflow-fix">
              <h2>Concerns</h2>
            </div>
            <div class="concerns-slider-area owl-carousel owl-theme overflow-fix">
              <div class="concerns-slider-single-item overflow-fix">
                <div class="concerns-slider-single-item-img overflow-fix"><a href="#"><img src="{{ asset('makson/images/concerns-item-image.png') }}" alt=""></a></div>
                <div class="concerns-slider-single-item-title overflow-fix"><a href="#">
                    <h2>Metro Spinning Limited</h2></a></div>
              </div>
              <div class="concerns-slider-single-item overflow-fix">
                <div class="concerns-slider-single-item-img overflow-fix"><a href="#"><img src="{{ asset('makson/images/concerns-item-image.png') }}" alt=""></a></div>
                <div class="concerns-slider-single-item-title overflow-fix"><a href="#">
                    <h2>Maksons Spinning Mills LImited</h2></a></div>
              </div>
              <div class="concerns-slider-single-item overflow-fix">
                <div class="concerns-slider-single-item-img overflow-fix"><a href="#"><img src="{{ asset('makson/images/concerns-item-image.png') }}" alt=""></a></div>
                <div class="concerns-slider-single-item-title overflow-fix"><a href="#">
                    <h2>COEVAL TEXTILES LIMITED</h2></a></div>
              </div>
              <div class="concerns-slider-single-item overflow-fix">
                <div class="concerns-slider-single-item-img overflow-fix"><a href="#"><img src="{{ asset('makson/images/concerns-item-image.png') }}" alt=""></a></div>
                <div class="concerns-slider-single-item-title overflow-fix"><a href="#">
                    <h2>Maksourcing Ltd.</h2></a></div>
              </div>
              <div class="concerns-slider-single-item overflow-fix">
                <div class="concerns-slider-single-item-img overflow-fix"><a href="#"><img src="{{ asset('makson/images/concerns-item-image.png') }}" alt=""></a></div>
                <div class="concerns-slider-single-item-title overflow-fix"><a href="#">
                    <h2>Mutual Capital Limited</h2></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- concerns area end-->
  <section class="new-person-area overflow-fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-12">
          <div class="new-person-left-area">
            <h2 class="animated">Mohammad Ali Khokon</h2>
            <h3 class="animated">Managing Director</h3>
            <div class="new-person-contyent-area  overflow-fix">
              <p class="animated ">
                It is my great pleasure to introduce maksons group to you. Maksons group involve in textile sector right from fiber to fashion from more than 2 decades, in this journey Maksons Group have crossed many miles and set several milestones on its path. With an aim to increase our presence in the world market especially in emerging markets, we are committed to provide world class products to our valued customers, maintaining high ethical standards. <br><br>
  Our employees drive our business and they are the most important factor in our success story and the board of directors and management understand and value their contribution behind our success. We have an excellent HR policy in place that ensures growth and development of employees. There are constant Training and Development policies and procedures that provide employees with a process to follow and that knowledge can help them confidently approach any difficult situation. Giving employees a sense of shared values and purpose by creating a relationship with them is important, therefore there is excellent relationship between management and employees that exist in our company, which indicates proper, unbiased and welfare oriented human resource policy of the Company that helps in achieving better productivity. <br><br>
  We are unlikely to be affected by the uncertainties in the industry because we will, like always, deliver quality products at competitive prices, fulfilling all legal, social and environmental requirements.<br><br>
  We will continue to focus on expanding our business in order to create more jobs to elevate poverty in our society. We have also adopted effective CSR programs to make positive impacts on our community whilst maximizing business value of our stakeholders and shareholders.
  Wishing and praying for a better tomorrow.
              </p>
            </div>
            
          </div>
        </div>
        <div class="col-lg-4  col-md-5 col-sm-12">
          <div class="new-person-right-area">
            <div class="new-person-right-area-before"></div>
            <img src="{{ asset('makson/images/per.png') }}" alt=""/>
          </div>
        </div>
      

      </div>
    </div>
  </section>
  <!-- New concerns area -->
<section class="new-concerns-area overflow-fix">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title-area overflow-fix">
          <h2>Concerns</h2>
        </div>
        <div class="new-concerns-slider  owl-carousel owl-theme overflow-fix">
          @if(sizeof($concerns)>0)
          @foreach($concerns as $concern)
          <div class="new-concerns-slider-single overflow-fix">
            <img class="bg-img-concerns" src="{{ asset('/uploads/'. $concern->image) }}" alt=""/>
            <div class="new-concerns-slider-content overflow-fix">
              <div class="new-concerns-slider-content-m overflow-fix">
                <img src="{{ asset('/uploads/'. $concern->logo) }}" alt=""/>
                <img src="{{ asset('/uploads/'. $concern->on_hover_logo) }}" alt=""/>
                <p>{{ $concern->name }}</p>
              </div>
            </div>
          </div>
          @endforeach
          @else
          <div class="new-concerns-slider-single overflow-fix">
              No file upload yet !
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
<!-- concerns area end-->
<section class="new-person-area overflow-fix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="background:#fff;">
                <div class="section-title-area overflow-fix">
                    <h2>Our Product</h2> </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="single-productlist-area overflow-fix">
                    <h2> Convensational 100% cotton yarn </h2>
                    <ul>
                        <li>
                            <p>Carded cotton yarn</p>
                        </li>
                        <li>
                            <p>Combed cotton yarn</p>
                        </li>
                        <li>
                            <p>Slub cotton yarn</p>
                        </li>
                    </ul>
                </div>
                <div class="single-productlist-area overflow-fix">
                    <h2> Slub Yarn </h2>
                    <ul>
                        <li>
                            <p>Carded cotton yarn</p>
                        </li>
                        <li>
                            <p>Combed cotton yarn</p>
                        </li>
                        <li>
                            <p>Slub cotton yarn</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="single-productlist-area overflow-fix">
                    <h2> Organic cotton yarn (Gots & Ocs Certificate) </h2>
                    <ul>
                        <li>
                            <p>Organic cotton yarn</p>
                        </li>
                        <li>
                            <p>Organic combed yarn</p>
                        </li>
                        <li>
                            <p>Organic carded slub yarn</p>
                        </li>
                        <li>
                            <p>Organic combed slub yarn</p>
                        </li>
                        <li>
                            <p>Organic gray melange yarn</p>
                        </li>
                    </ul>
                </div>
                <div class="single-productlist-area overflow-fix">
                    <h2> Gray melange yarn </h2>
                    <ul>
                        <li>
                            <p>Gray melange yarn 1%-15% Viscose</p>
                        </li>
                        <li>
                            <p>Gray melange slub yarn</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="single-productlist-area overflow-fix">
                    <h2> BCI cotton yarn (BCI Certificate) </h2>
                    <ul>
                        <li>
                            <p>BCI cotton cardrd yarn</p>
                        </li>
                        <li>
                            <p>BCI cotton combed yarn</p>
                        </li>
                        <li>
                            <p>BCI cotton slub yarn</p>
                        </li>
                        <li>
                            <p>BCI gray melange yarn</p>
                        </li>
                    </ul>
                </div>
                <div class="single-productlist-area overflow-fix">
                    <h2> Modal Yarn </h2>
                    <ul>
                        <li>
                            <p>50% cotton 50% modal yarn</p>
                        </li>
                        <li>
                            <p>100% modal yarn</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Chronology area-->
    <section class="chronology-main-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title-area overflow-fix">
              <h2>Chronology</h2>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="chronology-left-area overflow-fix">
              <h2 class="chronology-title">Attainment</h2>
              <div class="chronology-slider overflow-fix">
               <div class="new-sound overflow-fix">
                  <ul class="porund">
                    <li>
                       <h2 class="d-flex"><img src="{{ asset('makson/images/round.png') }}"><span>OEKO-TEX</span></h2>
                        <p>Hohenstein textile testing institute GMBH has granted Maksons Spinning Mills Limited authorization to use the standard 100 by OEKOTEX, Appendix 6, (product class).</p>
                    </li>
                    <li>
                       <h2 class="d-flex"><img src="{{ asset('makson/images/round.png') }}"><span>ORGANIC-GOTS</span></h2>
                        <p>Maksons Spinning Mills limited has been awarded textile certification of Global Organic Textile Standard (GOTS) by Control Union inspections & certifications.</p>
                    </li>
                    <li>
                       <h2 class="d-flex"><img src="{{ asset('makson/images/round.png') }}"><span>Organic OCS</span></h2>
                        <p>Control Union inspections & certifications, Netherlands has granted Textile Certification of Organic Content Standard (OCS) to Maksons Spinning Mills Limited to produce organic yarns.</p>
                    </li>
                    <li>
                       <h2 class="d-flex"><img src="{{ asset('makson/images/round.png') }}"><span>ISO 9001:2015</span></h2>
                        <p>LA-MUNI Appearels Ltd. attained certificate of registration to certify that quality management system has been assessed and found to conform to the requirements of ISO 9001:2015 for the scope of manufacturer.</p>
                    </li>
                    <li>
                       <h2 class="d-flex"><img src="{{ asset('makson/images/round.png') }}"><span>BSC</span></h2>
                        <p>LA MUNI Appearels Ltd. verified by various audit reports and one of them is BSCI (Business Social Compliance Initiative) by Bureau Veritas.</p>
                    </li>
                    <li>
                       <h2 class="d-flex"><img src="{{ asset('makson/images/round.png') }}"><span>SEDEX</span></h2>
                        <p>A SMETA ( Sedex Members Ethical Trade Audit Report) was Conducted for LAMUNI Appearels Ltd which included some or all of labour standards, health, & safety , environment and business ethics.</p>
                    </li>
                    <li>
                       <h2 class="d-flex"><img src="{{ asset('makson/images/round.png') }}"><span>COTTON USA</span></h2>
                        <p>Maksons Spinning Mills Ltd is a Certified “COTTON USA LICENSEE” of Cotton Council International.</p>
                    </li>
                    <li>
                       <h2 class="d-flex"><img src="{{ asset('makson/images/round.png') }}"><span>LEADS COTTON</span></h2>
                        <p>Maksons Spinning Mills Ltd. has been presented with ‘Certificate of Partnership’ by COTTON LEADS in recognition of a commitment to responsible c otton production and support of the cotton LEADS program.</p>
                    </li>
                    
                </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="chronology-mdl-area overflow-fix">
              <h2 class="chronology-title">Capacity</h2>
            </div>
            <div class="chronology-mdl-grid-area overflow-fix">
              <div class="chronology-mdl-grid overflow-fix">
                <div class="chronology-mdl-grid-single-item overflow-fix">
          <img src="{{ asset('makson/images/grid-1.jpg') }}" alt="">
        </div>
                <div class="chronology-mdl-grid-single-item overflow-fix">
          <img src="{{ asset('makson/images/grid-2.jpg') }}" alt="">
        </div>
              </div>
              <div class="chronology-mdl-grid overflow-fix">
                <div class="chronology-mdl-grid-single-item overflow-fix">
          <img src="{{ asset('makson/images/grid-3.jpg') }}" alt="Title">
        </div>
                <div class="chronology-mdl-grid-single-item overflow-fix">
          <img src="{{ asset('makson/images/grid-4.jpg') }}" alt="Title">
        </div>
              </div>
              <div class="chronology-mdl-grid overflow-fix">
                <div class="chronology-mdl-grid-single-item overflow-fix">
          <img src="{{ asset('makson/images/grid-5.jpg') }}" alt="Title">
        </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="chronology-right-area overflow-fix">
              <h2 class="chronology-title">People</h2>
            </div>
            <div class="chronology-right-grid-area overflow-fix">
              <div class="chronology-right-grid overflow-fix">
                <div class="chronology-right-grid-single-item overflow-fix">
          <img src="{{ asset('makson/images/grid-6.jpg') }}" alt="Title">
        </div>
              </div>
              <div class="chronology-right-grid overflow-fix">
                <div class="chronology-right-grid-single-item overflow-fix">
          <img src="{{ asset('makson/images/grid-7.jpg') }}" alt="Title">
        </div>
                <div class="chronology-right-grid-single-item overflow-fix">
          <img src="{{ asset('makson/images/grid-8.jpg') }}" alt="Title">
        </div>
              </div>
              <div class="chronology-right-grid overflow-fix">
                <div class="chronology-right-grid-single-item overflow-fix">
          <img src="{{ asset('makson/images/grid-9.jpg') }}" alt="Title">
        </div>
                <div class="chronology-right-grid-single-item overflow-fix">
          <img src="{{ asset('makson/images/grid-10.jpg') }}" alt="Title">
        </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Chronology area end -->
    <!-- authority area-->
    <section class="authority-main-area overflow-fix">
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-title-area overflow-fix">
                  <h2>Board of Director</h2>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="authority-left-area owl-carousel owl-theme overflow-fix">
                        <div class="row margin-o">
                            <div class="col-lg-4">
                              <div class="authority-left-single-img overflow-fix"><img src="{{ asset('makson/images/Capture.PNG') }}" alt="Title"></div>
                            </div>
                            <div class="col-lg-4">
                              <div class="authority-left-single-img overflow-fix"><img src="{{ asset('makson/images/Capture2.PNG') }}" alt="Title"></div>
                            </div>
                            <div class="col-lg-4">
                              <div class="authority-left-single-img overflow-fix"><img src="{{ asset('makson/images/Capture3.png') }}" alt="Title"></div>
                            </div>
                            <div class="col-lg-4">
                              <div class="authority-left-single-img overflow-fix"><img src="{{ asset('makson/images/Capture4.png') }}" alt="Title"></div>
                            </div>
                            <div class="col-lg-4">
                              <div class="authority-left-single-img overflow-fix"><img src="{{ asset('makson/images/Capture5.png') }}" alt="Title"></div>
                            </div>
                            <div class="col-lg-4">
                              <div class="authority-left-single-img overflow-fix"><img src="{{ asset('makson/images/Capture6.png') }}" alt="Title"></div>
                            </div>
                        </div>
                        <div class="row margin-o">
                            <div class="col-lg-4">
                              <div class="authority-left-single-img overflow-fix"><img src="{{ asset('makson/images/Capture7.png') }}" alt="Title"></div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-lg-6 col-sm-10">
                <div class="authority-right-area overflow-fix">
                    <div class="authority-right-slider owl-carousel owl-theme overflow-fix">
                        <div class="authority-single-profile overflow-fix">
                          <div class="authority-single-profile-content-area overflow-fix">
                            <div class="authority-single-profile-img overflow-fix"><img src="{{ asset('makson/images/Capture.PNG') }}" alt="Title">
                              <svg height="0" width="0">
                                <defs>
                                  <clipPath id="authority-img">
                                    <path fill="#FFFFFF" stroke="#000000" stroke-width="0" stroke-miterlimit="10" d="M89.167,195.255 C64.279,151.574 39.139,108.038 13.748,64.647 C-11.643,21.257 0.801,-0.293 51.081,-0.003 C101.360,0.287 151.640,0.287 201.919,-0.003 C252.199,-0.293 264.643,21.257 239.252,64.647 C213.861,108.038 188.721,151.574 163.833,195.255 C138.944,238.936 114.056,238.936 89.167,195.255 Z"></path>
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <div class="authority-single-profile-header overflow-fix">
                              <h2>Dr. Jamauddin Ahmed </h2>
                              <h6>Chairman & Independent Director </h6>
                            </div>
                            <div class="authority-single-profile-content overflow-fix">
                              <p></p>
                            </div>
                            <div class="authority-single-profile-socail overflow-fix">
                              <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="authority-single-profile overflow-fix">
                          <div class="authority-single-profile-content-area overflow-fix">
                            <div class="authority-single-profile-img overflow-fix"><img src="{{ asset('makson/images/Capture2.PNG') }}" alt="Title">
                              <svg height="0" width="0">
                                <defs>
                                  <clipPath id="authority-img">
                                    <path fill="#FFFFFF" stroke="#000000" stroke-width="0" stroke-miterlimit="10" d="M89.167,195.255 C64.279,151.574 39.139,108.038 13.748,64.647 C-11.643,21.257 0.801,-0.293 51.081,-0.003 C101.360,0.287 151.640,0.287 201.919,-0.003 C252.199,-0.293 264.643,21.257 239.252,64.647 C213.861,108.038 188.721,151.574 163.833,195.255 C138.944,238.936 114.056,238.936 89.167,195.255 Z"></path>
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <div class="authority-single-profile-header overflow-fix">
                              <h2>Mr. Mohammad Ali Khokon </h2>
                              <h6> Managing Director & Director </h6>
                            </div>
                            <div class="authority-single-profile-content overflow-fix">
                              <p></p>
                            </div>
                            <div class="authority-single-profile-socail overflow-fix">
                              <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="authority-single-profile overflow-fix">
                          <div class="authority-single-profile-content-area overflow-fix">
                            <div class="authority-single-profile-img overflow-fix"><img src="{{ asset('makson/images/Capture3.png') }}" alt="Title">
                              <svg height="0" width="0">
                                <defs>
                                  <clipPath id="authority-img">
                                    <path fill="#FFFFFF" stroke="#000000" stroke-width="0" stroke-miterlimit="10" d="M89.167,195.255 C64.279,151.574 39.139,108.038 13.748,64.647 C-11.643,21.257 0.801,-0.293 51.081,-0.003 C101.360,0.287 151.640,0.287 201.919,-0.003 C252.199,-0.293 264.643,21.257 239.252,64.647 C213.861,108.038 188.721,151.574 163.833,195.255 C138.944,238.936 114.056,238.936 89.167,195.255 Z"></path>
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <div class="authority-single-profile-header overflow-fix">
                              <h2>Mr. Mohd. Showkot Ali </h2>
                              <h6>Deputy Managing Director & Director</h6>
                            </div>
                            <div class="authority-single-profile-content overflow-fix">
                              <p></p>
                            </div>
                            <div class="authority-single-profile-socail overflow-fix">
                              <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="authority-single-profile overflow-fix">
                          <div class="authority-single-profile-content-area overflow-fix">
                            <div class="authority-single-profile-img overflow-fix"><img src="{{ asset('makson/images/Capture4.png') }}" alt="Title">
                              <svg height="0" width="0">
                                <defs>
                                  <clipPath id="authority-img">
                                    <path fill="#FFFFFF" stroke="#000000" stroke-width="0" stroke-miterlimit="10" d="M89.167,195.255 C64.279,151.574 39.139,108.038 13.748,64.647 C-11.643,21.257 0.801,-0.293 51.081,-0.003 C101.360,0.287 151.640,0.287 201.919,-0.003 C252.199,-0.293 264.643,21.257 239.252,64.647 C213.861,108.038 188.721,151.574 163.833,195.255 C138.944,238.936 114.056,238.936 89.167,195.255 Z"></path>
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <div class="authority-single-profile-header overflow-fix">
                              <h2>Mr. Mohd. Ferdous Kawser Masud</h2>
                              <h6>Director Finance & Director</h6>
                            </div>
                            <div class="authority-single-profile-content overflow-fix">
                              <p></p>
                            </div>
                            <div class="authority-single-profile-socail overflow-fix">
                              <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="authority-single-profile overflow-fix">
                          <div class="authority-single-profile-content-area overflow-fix">
                            <div class="authority-single-profile-img overflow-fix"><img src="{{ asset('makson/images/Capture5.png') }}" alt="Title">
                              <svg height="0" width="0">
                                <defs>
                                  <clipPath id="authority-img">
                                    <path fill="#FFFFFF" stroke="#000000" stroke-width="0" stroke-miterlimit="10" d="M89.167,195.255 C64.279,151.574 39.139,108.038 13.748,64.647 C-11.643,21.257 0.801,-0.293 51.081,-0.003 C101.360,0.287 151.640,0.287 201.919,-0.003 C252.199,-0.293 264.643,21.257 239.252,64.647 C213.861,108.038 188.721,151.574 163.833,195.255 C138.944,238.936 114.056,238.936 89.167,195.255 Z"></path>
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <div class="authority-single-profile-header overflow-fix">
                              <h2>Mrs. Laila Ali</h2>
                              <h6>Director</h6>
                            </div>
                            <div class="authority-single-profile-content overflow-fix">
                              <p></p>
                            </div>
                            <div class="authority-single-profile-socail overflow-fix">
                              <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="authority-single-profile overflow-fix">
                          <div class="authority-single-profile-content-area overflow-fix">
                            <div class="authority-single-profile-img overflow-fix"><img src="{{ asset('makson/images/Capture6.png') }}" alt="Title">
                              <svg height="0" width="0">
                                <defs>
                                  <clipPath id="authority-img">
                                    <path fill="#FFFFFF" stroke="#000000" stroke-width="0" stroke-miterlimit="10" d="M89.167,195.255 C64.279,151.574 39.139,108.038 13.748,64.647 C-11.643,21.257 0.801,-0.293 51.081,-0.003 C101.360,0.287 151.640,0.287 201.919,-0.003 C252.199,-0.293 264.643,21.257 239.252,64.647 C213.861,108.038 188.721,151.574 163.833,195.255 C138.944,238.936 114.056,238.936 89.167,195.255 Z"></path>
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <div class="authority-single-profile-header overflow-fix">
                              <h2>Mr. Mohd. Amzad Ali Badal</h2>
                              <h6>Director</h6>
                            </div>
                            <div class="authority-single-profile-content overflow-fix">
                              <p></p>
                            </div>
                            <div class="authority-single-profile-socail overflow-fix">
                              <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="authority-single-profile overflow-fix">
                          <div class="authority-single-profile-content-area overflow-fix">
                            <div class="authority-single-profile-img overflow-fix"><img src="{{ asset('makson/images/Capture7.png') }}" alt="Title">
                              <svg height="0" width="0">
                                <defs>
                                  <clipPath id="authority-img">
                                    <path fill="#FFFFFF" stroke="#000000" stroke-width="0" stroke-miterlimit="10" d="M89.167,195.255 C64.279,151.574 39.139,108.038 13.748,64.647 C-11.643,21.257 0.801,-0.293 51.081,-0.003 C101.360,0.287 151.640,0.287 201.919,-0.003 C252.199,-0.293 264.643,21.257 239.252,64.647 C213.861,108.038 188.721,151.574 163.833,195.255 C138.944,238.936 114.056,238.936 89.167,195.255 Z"></path>
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <div class="authority-single-profile-header overflow-fix">
                              <h2>Dr. Mijanur Rahman</h2>
                              <h6>Independent Director</h6>
                            </div>
                            <div class="authority-single-profile-content overflow-fix">
                              <p></p>
                            </div>
                            <div class="authority-single-profile-socail overflow-fix">
                              <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        
        </div>
    </section>
    <!-- Clientele area-->
    <section class="clientele-main-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title-area overflow-fix">
              <h2>Clientele</h2>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="clientele-slider-area overflow-fix">
            @php $ccount = $clients->count() @endphp
            @if( $ccount > 0)
              <div class="clientele-slider owl-carousel owl-theme overflow-fix">
                @foreach($clients as $key => $client)
                  @if($key == 0)
                    <div class="clientele-slider-single-item overflow-fix">
                  @endif
                  <div class="clientele-slider-single-item-img overflow-fix"><img src="{{ asset('/uploads/'. $client->logo) }}" alt="Title"></div>
                  @if($key != 0 && $key % 11 == 0 )
                    </div>
                    <div class="clientele-slider-single-item overflow-fix">
                  @endif
                  @if($key == $ccount-1)</div>@endif
                @endforeach
              </div>
            @else
              <div>No Client upload yet</div>
            @endif
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Clientele area end-->
    <!-- concat box-->
    <section class="concat-main-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-sm-12">
            <div class="concat-left-area overflow-fix">
              <div class="concat-left-single-item overflow-fix d-flex justify-content-start">
                <div class="concat-left-single-icon overflow-fix"><i class="fas fa-map-marker-alt"></i></div>
                <div class="concat-left-single-text overflow-fix">
                  <h6>Location</h6>
                  <p>House # 17, Road # 6, Sector # 1,Uttara Model Town, Dhaka 1230,Bangladesh</p>
                </div>
              </div>
              <div class="concat-left-single-item overflow-fix d-flex justify-content-start">
                <div class="concat-left-single-icon overflow-fix"><i class="fas fa-phone"></i></div>
                <div class="concat-left-single-text overflow-fix">
                  <h6>Phone</h6>
                  <p>+880 2 8933612, 8933613, 8933767, 8933739, 8933740</p>
                </div>
              </div>
              <div class="concat-left-single-item overflow-fix d-flex justify-content-start">
                <div class="concat-left-single-icon overflow-fix"><i class="fas fa-print"></i></div>
                <div class="concat-left-single-text overflow-fix">
                  <h6>Fax</h6>
                  <p>+880 2 8933656</p>
                </div>
              </div>
              <div class="concat-left-single-item overflow-fix d-flex justify-content-start">
                <div class="concat-left-single-icon overflow-fix"><i class="fas fa-envelope"></i></div>
                <div class="concat-left-single-text overflow-fix">
                  <h6>Email</h6>
                  <p>info@maksonsgroup.com.bd</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="concat-right-area overflow-fix">
                <div class="thanjks-u overflow-fix d-flex justify-content-center align-items-center">
                    <h2>Your message have <br> been sent successfully !</h2>
                </div>
              <h2>Send Message</h2>
              <form method="POST" class="form-box-area contact-form overflow-fix">
                {{ csrf_field() }}
                  @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert"">
                      {{ session('error') }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  @endif
                <div class="form-group">
                <input name="name" class="form-control" id="name"  type="text" required="required" placeholder="">
                <label class="form-label">Name</label>
                </div>
                <div class="form-group">
                <input name="email" class="form-control" id="email" required="required" type="email" placeholder="">
                <label class="form-label">Email</label>
                </div>
                 <div class="form-box-single overflow-fix">
                 <textarea name="message" id="message" placeholder="Say Something"></textarea>
                </div>
                 <button class="submit-button" type="submit"><span>Submit</span><i class="fas fa-circle-notch fa-spin"></i><i class="fas fa-check"></i></button>
              </form>
      </div>
          </div>
        </div>
      </div>
    </section>
    <section class="footer-bottom-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="footer-bottom overflow-fix d-flex">
              <h2>Follow us on</h2>
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <div class="footer-copy overflow-fix">
              <p>Maksons Group &copy 2018</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  <a id="return-to-top" href="javascript:" style="display:none;"><i class="fas fa-arrow-up"></i></a>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $(".contact-form").submit(function(e) {
            var self = $(this);
            e.preventDefault();
            if(self[0].checkValidity()){
                $('.submit-button').addClass("loading");
                $.ajax({
                    url:'{{ URL::to('/contactHome') }}',
                    type: "post",
                    data:$(this).serialize(),
                    success: function(data) {
                        if(data){
                            setTimeout(function() {
                              $(".submit-button").addClass("hide-loading");
                              $(".thanjks-u").addClass("thanks-u");
                              // For failed icon just replace ".done" with ".failed"
                              $(".done").addClass("finish");
                            }, 4000);
                            setTimeout(function() {
                              $(".submit-button").removeClass("loading");
                              $(".submit-button").removeClass("hide-loading");
                              $(".thanjks-u").removeClass("thanks-u");
                              $(".done").removeClass("finish");
                              $(".failed").removeClass("finish");
                            }, 8000);
                            self[0].reset();
                        }else{
                        
                        }
                    }
                });
            }
        });
    });
</script>
@endsection