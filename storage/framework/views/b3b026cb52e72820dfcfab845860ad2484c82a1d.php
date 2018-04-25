<?php $__env->startSection('content'); ?>
<div id="preloader">
      <div class="d-flex justify-content-center align-items-center" id="status">
        <div class="status-img overflow-fix"><img src="<?php echo e(asset('makson/images/loder.gif')); ?>"></div>
      </div>
    </div>
  
    <!-- menu area-->
  <div class="responsive-menu-area overflow-fix">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-8 d-flex align-items-center">
          <div class="logo-area overflow-fix"><a href=""><img src="<?php echo e(asset('makson/images/hlogo.png')); ?>"></a></div>
        </div>
        <div class="col-sm-8 col-4 ">
          <div id="responsive-menu" class="sidenav">
            <p href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</p>
          <div class="responsive-menu-slinky"> 
            <ul>
                <li><a href="<?php echo e(url('/')); ?>">Home </a></li>
                <li><a href="#">About us</a>
                  <ul>
                  <li><a href="<?php echo e(('at-a-glance')); ?>">Maksons at a Glance</a></li>
                  <li><a href="<?php echo e(('our-business')); ?>">Our Business</a></li>
                  <li><a href="<?php echo e(('annual-reports')); ?>">Annual Reports</a></li>
                  <li><a href="<?php echo e(url('compliance-ctatus')); ?>">Compliance Status</a></li>
                  <li><a href="<?php echo e(url('quarterly-reports')); ?>">Quarterly Reports</a></li>
                  <li><a href="<?php echo e(('recognition')); ?>">Awards and Recognition</a></li>
                  <li><a href="<?php echo e(url('meet-people')); ?>">Meet Our People</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo e(url('group-concern')); ?>">Group Concerns</a></li>
                <li><a href="<?php echo e(url('invastore')); ?>">Investors</a></li>
                <li><a href="<?php echo e(url('strategy-for-responsibility')); ?>">CSR</a></li>
                <li><a href="<?php echo e(url('carrerr')); ?>">Career</a></li>
                <li><a href="<?php echo e(url('contact')); ?>">Contact Us</a></li>
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
            <div class="logo-area overflow-fix"><a href=""><img src="<?php echo e(asset('makson/images/hlogo.png')); ?>"></a></div>
          </div>
          <div class="col-lg-9 d-flex align-items-center justify-content-end">
            <div class="menu-area-list">
              <ul>
                <li><a href="<?php echo e(url('/')); ?>">Home </a></li>
                <li><a href="#">About us</a>
                  <ul>
                  <li><a href="<?php echo e(('at-a-glance')); ?>">Maksons at a Glance</a></li>
                  <li><a href="<?php echo e(('our-business')); ?>">Our Business</a></li>
                  <li><a href="<?php echo e(('annual-reports')); ?>">Annual Reports</a></li>
                  <li><a href="<?php echo e(url('compliance-ctatus')); ?>">Compliance Status</a></li>
                  <li><a href="<?php echo e(url('quarterly-reports')); ?>">Quarterly Reports</a></li>
                  <li><a href="<?php echo e(('recognition')); ?>">Awards and Recognition</a></li>
                  <li><a href="<?php echo e(url('meet-people')); ?>">Meet Our People</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo e(url('group-concern')); ?>">Group Concerns</a></li>
                <li><a href="<?php echo e(url('invastore')); ?>">Investors</a></li>
                <li><a href="<?php echo e(url('strategy-for-responsibility')); ?>">CSR</a></li>
                <li><a href="<?php echo e(url('carrerr')); ?>">Career</a></li>
                <li><a href="<?php echo e(url('contact')); ?>">Contact Us</a></li>
              </ul>
            </div>
          </div>
      
        </div>
      </div>
    </div>
    <!-- menu area end-->
    <!-- home-page-slider-->
    <section class="full-hight-area homepage-banner-slider-area owl-carousel owl-theme overflow-fix">
      <?php if(sizeof($sliders)>0): ?>
      <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="full-hight-table overflow-fix" style="background:url(<?php echo e(asset('/uploads/'. $slider->image)); ?>);">
        <div class="full-hight-tablecell">
          <div class="container-fluid">
            <div class="row justify-content-end">
              <div class="col-lg-8">
                <div class="banner-slider-content">
                  
                  
                  <h2><?php echo $slider->description; ?></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php else: ?>
      <div class="full-hight-table overflow-fix" style="background:url(<?php echo e(asset('makson/images/slider-1.jpg')); ?>);">
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
      <div class="full-hight-table overflow-fix" style="background:url(<?php echo e(asset('makson/images/slider-5.jpg')); ?>);">
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
      <div class="full-hight-table overflow-fix" style="background:url(<?php echo e(asset('makson/images/slider-3.jpg')); ?>);">
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
      <div class="full-hight-table overflow-fix" style="background:url(<?php echo e(asset('makson/images/slider-4.jpg')); ?>);">
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
      <div class="full-hight-table overflow-fix" style="background:url(<?php echo e(asset('makson/images/slider-5.jpg')); ?>);">
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
      <?php endif; ?>
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
                <?php if(sizeof($bulletins)>0): ?>
                <?php $__currentLoopData = $bulletins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bulletin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <a href="#"><p><?php echo e($bulletin->title); ?></p></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <a href="#"><p>Data not found !</p></a>
                <?php endif; ?>
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
            <div class="single-logo header-tilt overflow-fix"><img src="<?php echo e(asset('makson/images/blogo.png')); ?>"></div>
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
                <div class="concerns-slider-single-item-img overflow-fix"><a href="#"><img src="<?php echo e(asset('makson/images/concerns-item-image.png')); ?>" alt=""></a></div>
                <div class="concerns-slider-single-item-title overflow-fix"><a href="#">
                    <h2>Metro Spinning Limited</h2></a></div>
              </div>
              <div class="concerns-slider-single-item overflow-fix">
                <div class="concerns-slider-single-item-img overflow-fix"><a href="#"><img src="<?php echo e(asset('makson/images/concerns-item-image.png')); ?>" alt=""></a></div>
                <div class="concerns-slider-single-item-title overflow-fix"><a href="#">
                    <h2>Maksons Spinning Mills LImited</h2></a></div>
              </div>
              <div class="concerns-slider-single-item overflow-fix">
                <div class="concerns-slider-single-item-img overflow-fix"><a href="#"><img src="<?php echo e(asset('makson/images/concerns-item-image.png')); ?>" alt=""></a></div>
                <div class="concerns-slider-single-item-title overflow-fix"><a href="#">
                    <h2>COEVAL TEXTILES LIMITED</h2></a></div>
              </div>
              <div class="concerns-slider-single-item overflow-fix">
                <div class="concerns-slider-single-item-img overflow-fix"><a href="#"><img src="<?php echo e(asset('makson/images/concerns-item-image.png')); ?>" alt=""></a></div>
                <div class="concerns-slider-single-item-title overflow-fix"><a href="#">
                    <h2>Maksourcing Ltd.</h2></a></div>
              </div>
              <div class="concerns-slider-single-item overflow-fix">
                <div class="concerns-slider-single-item-img overflow-fix"><a href="#"><img src="<?php echo e(asset('makson/images/concerns-item-image.png')); ?>" alt=""></a></div>
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
            <h2 class="animated">Mohd. Mohsin Adnan</h2>
            <h3 class="animated">Executive Director and Company Secretary</h3>
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
            <img src="<?php echo e(asset('makson/images/per.png')); ?>"/>
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
          <?php if(sizeof($concerns)>0): ?>
          <?php $__currentLoopData = $concerns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $concern): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="new-concerns-slider-single overflow-fix">
            <img class="bg-img-concerns" src="<?php echo e(asset('/uploads/'. $concern->image)); ?>"/>
            <div class="new-concerns-slider-content overflow-fix">
              <div class="new-concerns-slider-content-m overflow-fix">
                <img src="<?php echo e(asset('/uploads/'. $concern->logo)); ?>"/>
                <img src="<?php echo e(asset('/uploads/'. $concern->on_hover_logo)); ?>"/>
                <p><?php echo e($concern->name); ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php else: ?>
          <div class="new-concerns-slider-single overflow-fix">
            <img class="bg-img-concerns" src="<?php echo e(asset('makson/images/c2.jpeg')); ?>"/>
            <div class="new-concerns-slider-content overflow-fix">
              <div class="new-concerns-slider-content-m overflow-fix">
                <img src="<?php echo e(asset('makson/images/slogo.png')); ?>"/>
                <img src="<?php echo e(asset('makson/images/wslogo.png')); ?>"/>
                <p>Metro Spinning Limited</p>
              </div>
            </div>
          </div>
          <div class="new-concerns-slider-single overflow-fix">
            <img class="bg-img-concerns" src="<?php echo e(asset('makson/images/c3.jpeg')); ?>"/>
            <div class="new-concerns-slider-content overflow-fix">
              <div class="new-concerns-slider-content-m overflow-fix">
                <img src="<?php echo e(asset('makson/images/slogo.png')); ?>"/>
                <img src="<?php echo e(asset('makson/images/wslogo.png')); ?>"/>
                <p>Maksons Spinning Mills LImited</p>
              </div>
            </div>
          </div>
          <div class="new-concerns-slider-single overflow-fix">
            <img class="bg-img-concerns" src="<?php echo e(asset('makson/images/c4.jpeg')); ?>"/>
            <div class="new-concerns-slider-content overflow-fix">
              <div class="new-concerns-slider-content-m overflow-fix">
                <img src="<?php echo e(asset('makson/images/slogo.png')); ?>"/>
                <img src="<?php echo e(asset('makson/images/wslogo.png')); ?>"/>
                <p>COEVAL TEXTILES LIMITED</p>
              </div>
            </div>
          </div>
          <div class="new-concerns-slider-single overflow-fix">
            <img class="bg-img-concerns" src="<?php echo e(asset('makson/images/c5.jpeg')); ?>"/>
            <div class="new-concerns-slider-content overflow-fix">
              <div class="new-concerns-slider-content-m overflow-fix">
                <img src="<?php echo e(asset('makson/images/slogo.png')); ?>"/>
                <img src="<?php echo e(asset('makson/images/wslogo.png')); ?>"/>
                <p>Maksourcing Ltd.</p>
              </div>
            </div>
          </div>
          <div class="new-concerns-slider-single overflow-fix">
            <img class="bg-img-concerns" src="<?php echo e(asset('makson/images/c6.jpeg')); ?>"/>
            <div class="new-concerns-slider-content overflow-fix">
              <div class="new-concerns-slider-content-m overflow-fix">
                <img src="<?php echo e(asset('makson/images/slogo.png')); ?>"/>
                <img src="<?php echo e(asset('makson/images/wslogo.png')); ?>"/>
                <p>Mutual Capital Limited</p>
              </div>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- concerns area end-->
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
                       <h2 class="d-flex"><img src="<?php echo e(asset('makson/images/round.png')); ?>"><span>OEKO-TEX</span></h2>
                        <p>Hohenstein textile testing institute GMBH has granted Maksons Spinning Mills Limited authorization to use the standard 100 by OEKOTEX, Appendix 6, (product class).</p>
                    </li>
                    <li>
                       <h2 class="d-flex"><img src="<?php echo e(asset('makson/images/round.png')); ?>"><span>ORGANIC-GOTS</span></h2>
                        <p>Maksons Spinning Mills limited has been awarded textile certification of Global Organic Textile Standard (GOTS) by Control Union inspections & certifications.</p>
                    </li>
                    <li>
                       <h2 class="d-flex"><img src="<?php echo e(asset('makson/images/round.png')); ?>"><span>Organic OCS</span></h2>
                        <p>Control Union inspections & certifications, Netherlands has granted Textile Certification of Organic Content Standard (OCS) to Maksons Spinning Mills Limited to produce organic yarns.</p>
                    </li>
                    <li>
                       <h2 class="d-flex"><img src="<?php echo e(asset('makson/images/round.png')); ?>"><span>ISO 9001:2015</span></h2>
                        <p>LA-MUNI Appearels Ltd. attained certificate of registration to certify that quality management system has been assessed and found to conform to the requirements of ISO 9001:2015 for the scope of manufacturer.</p>
                    </li>
                    <li>
                       <h2 class="d-flex"><img src="<?php echo e(asset('makson/images/round.png')); ?>"><span>BSC</span></h2>
                        <p>LA MUNI Appearels Ltd. verified by various audit reports and one of them is BSCI (Business Social Compliance Initiative) by Bureau Veritas.</p>
                    </li>
                    <li>
                       <h2 class="d-flex"><img src="<?php echo e(asset('makson/images/round.png')); ?>"><span>SEDEX</span></h2>
                        <p>A SMETA ( Sedex Members Ethical Trade Audit Report) was Conducted for LAMUNI Appearels Ltd which included some or all of labour standards, health, & safety , environment and business ethics.</p>
                    </li>
                    <li>
                       <h2 class="d-flex"><img src="<?php echo e(asset('makson/images/round.png')); ?>"><span>COTTON USA</span></h2>
                        <p>Maksons Spinning Mills Ltd is a Certified “COTTON USA LICENSEE” of Cotton Council International.</p>
                    </li>
                    <li>
                       <h2 class="d-flex"><img src="<?php echo e(asset('makson/images/round.png')); ?>"><span>LEADS COTTON</span></h2>
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
          <img src="<?php echo e(asset('makson/images/grid-1.jpg')); ?>">
        </div>
                <div class="chronology-mdl-grid-single-item overflow-fix">
          <img src="<?php echo e(asset('makson/images/grid-2.jpg')); ?>">
        </div>
              </div>
              <div class="chronology-mdl-grid overflow-fix">
                <div class="chronology-mdl-grid-single-item overflow-fix">
          <img src="<?php echo e(asset('makson/images/grid-3.jpg')); ?>">
        </div>
                <div class="chronology-mdl-grid-single-item overflow-fix">
          <img src="<?php echo e(asset('makson/images/grid-4.jpg')); ?>">
        </div>
              </div>
              <div class="chronology-mdl-grid overflow-fix">
                <div class="chronology-mdl-grid-single-item overflow-fix">
          <img src="<?php echo e(asset('makson/images/grid-5.jpg')); ?>">
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
          <img src="<?php echo e(asset('makson/images/grid-6.jpg')); ?>">
        </div>
              </div>
              <div class="chronology-right-grid overflow-fix">
                <div class="chronology-right-grid-single-item overflow-fix">
          <img src="<?php echo e(asset('makson/images/grid-7.jpg')); ?>">
        </div>
                <div class="chronology-right-grid-single-item overflow-fix">
          <img src="<?php echo e(asset('makson/images/grid-8.jpg')); ?>">
        </div>
              </div>
              <div class="chronology-right-grid overflow-fix">
                <div class="chronology-right-grid-single-item overflow-fix">
          <img src="<?php echo e(asset('makson/images/grid-9.jpg')); ?>">
        </div>
                <div class="chronology-right-grid-single-item overflow-fix">
          <img src="<?php echo e(asset('makson/images/grid-10.jpg')); ?>">
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
              <h2>Executive Authority</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="authority-left-area overflow-fix">
              <div class="row margin-o">
                <div class="col-lg-4">
                  <div class="authority-left-single-img overflow-fix"><img src="<?php echo e(asset('makson/images/meet-1.jpg')); ?>"></div>
                </div>
                <div class="col-lg-4">
                  <div class="authority-left-single-img overflow-fix"><img src="<?php echo e(asset('makson/images/meet-1.jpg')); ?>"></div>
                </div>
                <div class="col-lg-4">
                  <div class="authority-left-single-img overflow-fix"><img src="<?php echo e(asset('makson/images/meet-1.jpg')); ?>"></div>
                </div>
                <div class="col-lg-4">
                  <div class="authority-left-single-img overflow-fix"><img src="<?php echo e(asset('makson/images/meet-1.jpg')); ?>"></div>
                </div>
                <div class="col-lg-4">
                  <div class="authority-left-single-img overflow-fix"><img src="<?php echo e(asset('makson/images/meet-1.jpg')); ?>"></div>
                </div>
                <div class="col-lg-4">
                  <div class="authority-left-single-img overflow-fix"><img src="<?php echo e(asset('makson/images/meet-1.jpg')); ?>"></div>
                </div>
                
</div>
</div>
</div>
<div class="col-lg-6 col-sm-10">
<div class="authority-right-area overflow-fix">
<div class="authority-right-slider owl-carousel owl-theme overflow-fix">
                <div class="authority-single-profile overflow-fix">
                  <div class="authority-single-profile-content-area overflow-fix">
                    <div class="authority-single-profile-img overflow-fix"><img src="<?php echo e(asset('makson/images/meet-1.jpg')); ?>">
                      <svg height="0" width="0">
                        <defs>
                          <clipPath id="authority-img">
                            <path fill="#FFFFFF" stroke="#000000" stroke-width="0" stroke-miterlimit="10" d="M89.167,195.255 C64.279,151.574 39.139,108.038 13.748,64.647 C-11.643,21.257 0.801,-0.293 51.081,-0.003 C101.360,0.287 151.640,0.287 201.919,-0.003 C252.199,-0.293 264.643,21.257 239.252,64.647 C213.861,108.038 188.721,151.574 163.833,195.255 C138.944,238.936 114.056,238.936 89.167,195.255 Z"></path>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="authority-single-profile-header overflow-fix">
                      <h2>Mohammad Ali Khokon</h2>
                      <h6>Managing Director</h6>
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
                    <div class="authority-single-profile-img overflow-fix"><img src="<?php echo e(asset('makson/images/meet-1.jpg')); ?>">
                      <svg height="0" width="0">
                        <defs>
                          <clipPath id="authority-img">
                            <path fill="#FFFFFF" stroke="#000000" stroke-width="0" stroke-miterlimit="10" d="M89.167,195.255 C64.279,151.574 39.139,108.038 13.748,64.647 C-11.643,21.257 0.801,-0.293 51.081,-0.003 C101.360,0.287 151.640,0.287 201.919,-0.003 C252.199,-0.293 264.643,21.257 239.252,64.647 C213.861,108.038 188.721,151.574 163.833,195.255 C138.944,238.936 114.056,238.936 89.167,195.255 Z"></path>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="authority-single-profile-header overflow-fix">
                      <h2>Mohd. Showkot Ali </h2>
                      <h6> Deputy Managing Director </h6>
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
                    <div class="authority-single-profile-img overflow-fix"><img src="<?php echo e(asset('makson/images/meet-1.jpg')); ?>">
                      <svg height="0" width="0">
                        <defs>
                          <clipPath id="authority-img">
                            <path fill="#FFFFFF" stroke="#000000" stroke-width="0" stroke-miterlimit="10" d="M89.167,195.255 C64.279,151.574 39.139,108.038 13.748,64.647 C-11.643,21.257 0.801,-0.293 51.081,-0.003 C101.360,0.287 151.640,0.287 201.919,-0.003 C252.199,-0.293 264.643,21.257 239.252,64.647 C213.861,108.038 188.721,151.574 163.833,195.255 C138.944,238.936 114.056,238.936 89.167,195.255 Z"></path>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="authority-single-profile-header overflow-fix">
                      <h2>Mohd. Ferdous Kawser Masud </h2>
                      <h6>Director Finance</h6>
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
                    <div class="authority-single-profile-img overflow-fix"><img src="<?php echo e(asset('makson/images/meet-1.jpg')); ?>">
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
                    <div class="authority-single-profile-img overflow-fix"><img src="<?php echo e(asset('makson/images/meet-1.jpg')); ?>">
                      <svg height="0" width="0">
                        <defs>
                          <clipPath id="authority-img">
                            <path fill="#FFFFFF" stroke="#000000" stroke-width="0" stroke-miterlimit="10" d="M89.167,195.255 C64.279,151.574 39.139,108.038 13.748,64.647 C-11.643,21.257 0.801,-0.293 51.081,-0.003 C101.360,0.287 151.640,0.287 201.919,-0.003 C252.199,-0.293 264.643,21.257 239.252,64.647 C213.861,108.038 188.721,151.574 163.833,195.255 C138.944,238.936 114.056,238.936 89.167,195.255 Z"></path>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="authority-single-profile-header overflow-fix">
                      <h2>Mohd. Amzad Ali Badal</h2>
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
                    <div class="authority-single-profile-img overflow-fix"><img src="<?php echo e(asset('makson/images/meet-1.jpg')); ?>">
                      <svg height="0" width="0">
                        <defs>
                          <clipPath id="authority-img">
                            <path fill="#FFFFFF" stroke="#000000" stroke-width="0" stroke-miterlimit="10" d="M89.167,195.255 C64.279,151.574 39.139,108.038 13.748,64.647 C-11.643,21.257 0.801,-0.293 51.081,-0.003 C101.360,0.287 151.640,0.287 201.919,-0.003 C252.199,-0.293 264.643,21.257 239.252,64.647 C213.861,108.038 188.721,151.574 163.833,195.255 C138.944,238.936 114.056,238.936 89.167,195.255 Z"></path>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="authority-single-profile-header overflow-fix">
                      <h2>Mohd. Mohsin Adnan</h2>
                      <h6>Executive Director & Company Secretary</h6>
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
                    <div class="authority-single-profile-img overflow-fix"><img src="<?php echo e(asset('makson/images/meet-1.jpg')); ?>">
                      <svg height="0" width="0">
                        <defs>
                          <clipPath id="authority-img">
                            <path fill="#FFFFFF" stroke="#000000" stroke-width="0" stroke-miterlimit="10" d="M89.167,195.255 C64.279,151.574 39.139,108.038 13.748,64.647 C-11.643,21.257 0.801,-0.293 51.081,-0.003 C101.360,0.287 151.640,0.287 201.919,-0.003 C252.199,-0.293 264.643,21.257 239.252,64.647 C213.861,108.038 188.721,151.574 163.833,195.255 C138.944,238.936 114.056,238.936 89.167,195.255 Z"></path>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="authority-single-profile-header overflow-fix">
                      <h2>Sanjid Hasan Amit</h2>
                      <h6>Director Audit & MIS</h6>
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
                    <div class="authority-single-profile-img overflow-fix"><img src="<?php echo e(asset('makson/images/meet-1.jpg')); ?>">
                      <svg height="0" width="0">
                        <defs>
                          <clipPath id="authority-img">
                            <path fill="#FFFFFF" stroke="#000000" stroke-width="0" stroke-miterlimit="10" d="M89.167,195.255 C64.279,151.574 39.139,108.038 13.748,64.647 C-11.643,21.257 0.801,-0.293 51.081,-0.003 C101.360,0.287 151.640,0.287 201.919,-0.003 C252.199,-0.293 264.643,21.257 239.252,64.647 C213.861,108.038 188.721,151.574 163.833,195.255 C138.944,238.936 114.056,238.936 89.167,195.255 Z"></path>
                          </clipPath>
                        </defs>
                      </svg>
                    </div>
                    <div class="authority-single-profile-header overflow-fix">
                      <h2>A. K. M. Wahiduzzaman</h2>
                      <h6>Executive Director –Estate & Admin</h6>
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
            <?php  $ccount = $clients->count()  ?>
            <?php if( $ccount > 0): ?>
              <div class="clientele-slider owl-carousel owl-theme overflow-fix">
                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($key == 0): ?>
                    <div class="clientele-slider-single-item overflow-fix">
                  <?php endif; ?>
                  <div class="clientele-slider-single-item-img overflow-fix"><img src="<?php echo e(asset('/uploads/'. $client->logo)); ?>"></div>
                  <?php if($key != 0 && $key % 11 == 0 ): ?>
                    </div>
                    <div class="clientele-slider-single-item overflow-fix">
                  <?php endif; ?>
                  <?php if($key == $ccount-1): ?></div><?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            <?php else: ?>
              <div>No Client upload yet</div>
            <?php endif; ?>
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
              <?php if(session('success')): ?>
                <div class="thanjks-u overflow-fix d-flex justify-content-center align-items-center">
                  <h2><?php echo e(session('success')); ?></h2>
                </div>
              <?php endif; ?>
              <h2>Send Message</h2>
              <form action="<?php echo e(url('contactHome')); ?>" method="POST" class="form-box-area overflow-fix">
                <?php echo e(csrf_field()); ?>

                 
                  <?php if(session('warning')): ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert"">
                      <?php echo e(session('warning')); ?>

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php endif; ?>
                  <?php if(session('error')): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert"">
                      <?php echo e(session('error')); ?>

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php endif; ?>
                <div class="form-group">
                <input name="name" class="form-control"  type="text" required="required" placeholder="">
                <label class="form-label">Name</label>
                </div>
                <div class="form-group">
                <input name="email" class="form-control" required="required" type="email" placeholder="">
                <label class="form-label">Email</label>
                </div>
                 <div class="form-box-single overflow-fix">
                 <textarea name="message" placeholder="Say Something"></textarea>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
  $(document).ready(function(){
  $('.submit-button').click(function(){
    $.ajax({
      url:'<?php echo e(URL::to('/contactHome')); ?>',
      type: "post",
      data:$(this).serialize(),
      success: function(data) {
        if(data){
          alert('daaa');
        }else{
          
        }
      }
    });
    $(".submit-button").addClass("loading");
          setTimeout(function() {
            $(".submit-button").addClass("hide-loading");
            // For failed icon just replace ".done" with ".failed"
            $(".done").addClass("finish");
          }, 3000);
          setTimeout(function() {
            $(".submit-button").removeClass("loading");
            $(".submit-button").removeClass("hide-loading");
            $(".done").removeClass("finish");
            $(".failed").removeClass("finish");
          }, 5000);
  });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>