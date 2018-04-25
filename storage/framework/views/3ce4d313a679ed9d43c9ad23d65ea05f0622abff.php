<?php $__env->startSection('content'); ?>
    <section class="our-concern-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="our-editor-content overflow-fix">
              <h2>Build Your Career With Us</h2>
              <p>In MAKSONS GROUP we hire people for their talents, and give them opportunities to shape their own future careers. If you are bold and ready to grasp new challenges, we are ready to help you to fulfill your aspirations.</p><br><br>
              <h3>Your future at MAKSONS GROUP</h3>
              <p>At MAKSONS GROUP we recruit people from different fields.</p><br><br>
              <h3>Passion for people</h3>
              <p>For the betterment of MAKSONS GROUP’s various concerns we are passionate about the people related to our business and partners or employees. We believe that our employees have the talent to constantly develop and challenge the way we work. To stay on top we reward internally employees which help them to take active charge of their own future.</p><br><br>
              <h3>Personal and professional growth</h3>
              <p>We believe that Experience, Disclosure and Learning are the key to employee development. We reward fresh thinking and encourage employees to seek new experiences and challenges within the Group mechanism. In addition, MAKSONS GROUP offers Training Programs for the young and bold, it is a complete place all in all for students learning about and studying in Textile & RMG sector, Capital Market and Bangladesh Corporate mechanism.</p><br><br>
              <h3>Shape your own future</h3>
              <p>We want you to shape your own future in MAKSONS GROUP. If you wish to be a part of our company, please take the time to explore these pages and submit your resume.</p><br><br>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="con-slider-main-area overflow-fix">
      <div class="con-slider-main overflow-fix">
        <div class="con-slider owl-carousel owl-theme overflow-fix">
          <div class="con-slider-single overflow-fix"><img src="<?php echo e(asset('makson/images/kon-1.png')); ?>"></div>
          <div class="con-slider-single overflow-fix"><img src="<?php echo e(asset('makson/images/kon-2.png')); ?>"></div>
          <div class="con-slider-single overflow-fix"><img src="<?php echo e(asset('makson/images/kon-3.png')); ?>"></div>
          <div class="con-slider-single overflow-fix"><img src="<?php echo e(asset('makson/images/kon-1.png')); ?>"></div>
          <div class="con-slider-single overflow-fix"><img src="<?php echo e(asset('makson/images/kon-2.png')); ?>"></div>
        </div>
      </div>
    </section>
    <section class="our-concern-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="our-editor-content overflow-fix">
              <h2>Why Join Us</h2>
              <p>MAKSONS GROUP is a success story in National arena. We are proud of what we have achieved so far and planning to attain in years to come. Would you like to be a part of the innovation process that is taking place in the industry that has given us all our success so far? Surf through our employee database and experience our diverse workforce.</p><br><br>
              <h3>We believe in Cultural Diversity</h3>
              <p>What kind of people do you think works for MAKSONS GROUP? You might just be surprised. The fact that the Group Corporate Office is located in the capital of Bangladesh, but has recruited people coming from different Background. This gives us an extraordinary opportunity to harvest knowledge and pioneer ideas from different cultures along with their work efficiency and efforts. New and successful services and innovations emerge in the work place because of this diversity and existence. This strategy developed initiative has well combined with our exchange of knowledge between the diversified partners and sectors has overall benefitted well for the Group.</p><br><br>
              <h3>Well balanced work-life planning</h3>
              <p>We believe that encouraging an appropriate work-life balance is important to ensure that both men and women excel, learn, develop and share their knowledge at MAKSONS GROUP. By supporting men and women both, in harmonizing work and individual needs, the Group has becomes more attractive as an employer while employee performance increases consistently. We encourage a balanced mix of male and female candidates when recruiting for internal leadership development programs and executive positions.</p><br><br>
              <h3>Diversity to us means inclusion</h3>
              <p>Diversity means we include people regardless of gender, religion, nationality or handicap. MAKSONS GROUP recruitment program is specially designed to meet the needs of competitive partners or employees. The program helps employees or partners to overcome the barriers that often prevent them from participating in the working life. </p><br><br>
              <h3>We at MAKSONS GROUP share our set of values with our Employees or Partners</h3>
              <ul>
                <li> -  Make work Easy</li>
                <li> -  Stay committed </li>
                <li> -  Keep Promises </li>
                <li> -  Be Inspiring to others</li>
                <li> -  Be Respectful of others </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="our-concern-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="our-editor-content overflow-fix">
              <h2>Open Positions</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="job-list-on-carea overflow-fix">
      <div class="job-list-on-carea-ttile overflow-fix">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-4 col-4">
              <p>Job Title</p>
            </div>
            <div class="col-md-2 col-sm-4 col-4">
              <p>Last Date</p>
            </div>
            <div class="col-md-2 col-sm-4 col-4">
              <p>Apply Instruction</p>
            </div>
          </div>
        </div>
      </div>
      <?php if(sizeof($jobposts)>0): ?>
      <?php $__currentLoopData = $jobposts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobpost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="job-list-on-carea-content overflow-fix">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <p><?php echo e($jobpost->title); ?></p>
            </div>
            <div class="col-lg-2">
              <p class="bold"><?php echo e(date('M-d-Y', strtotime($jobpost->created_at))); ?></p>
            </div>
            <div class="col-lg-2">
              <p class="bold"><a href="<?php echo e(url('details', $jobpost->id)); ?>">More Details</a></p>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php else: ?>
      <h4>Data not found!</h4>
      <?php endif; ?>
    </section>
    <footer class="subpage-footer-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="border-full-wdith overflow-fix"></div>
          </div>
          <div class="col-lg-6">
            <div class="subpage-footer-copy overflow-fix">
              <p>Maksons Group &copy 2018</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="subpage-footer overflow-fix d-flex">
              <h2>Follow us on</h2>
              <ul>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>