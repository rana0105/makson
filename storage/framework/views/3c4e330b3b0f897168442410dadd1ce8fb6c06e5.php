<?php $__env->startSection('content'); ?>
<!-- logo area-->
    <header class="main-logo-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-logo overflow-fix"><a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('lameri/image/logo.png')); ?>" alt=""></a></div>
          </div>
        </div>
      </div>
    </header>
    <!-- End logo area-->
    <div class="container">
      <div class="row">
        <div class="col-md-8 com-md-offset-2">
          <?php if(session('success')): ?>
            <div class="alert alert-success">
              <?php echo e(session('success')); ?>

            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <!-- reg-form-area-->
    <section class="ref-from-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ref-from overflow-fix quiz-from video-form">
              <h2 class="reg-from-title">CONTEST PAGE</h2>
              <div class="video-content-page overflow-fix">
                <p>Below are 6 videos containing 6 messages. Each message in the videos are divided into two part. One part describes a human relationship that can be cherished between two individuals and the other part symbolizes that same feeling in the context of a BMW or LE MERIDIEN DHAKA experience. Find out those lines which symbolize the human relationship out of all six of the experiences.</p><br>
                <p>Upon finding out and if placed in the same sequence as which these experiences have been placed, they will add up to a note that you would want to share with your significant other.</p><br>
              </div>
              <form action="<?php echo e(route('store.video.point')); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

                
                <div class="single-field-are overflow-fix">
                  <div class="single-video-area overflow-fix">
                    <div class="video-area overflow-fix">
                      <video class="embed-responsive-item" width="100%" controls>
                         <source src="<?php echo e(asset('lameri/video/episode_1.mov')); ?>" type="video/mp4">
                      </video>
                    </div>
                  </div>
                  <label class="radio-radious">Many a times in life, we can end up taking what’s closest to our hearts for granted. It was time that you take note
                    <input type="radio" name="video_1" value="1">
                    <span class="checkmark"></span>
                  </label>
                  <label class="radio-radious">It was time that you give back something truly deserving. Something, out of the ordinary 
                    <input type="radio" name="video_1" value="2">
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="single-field-are overflow-fix">
                  <div class="single-video-area overflow-fix">
                    <div class="video-area overflow-fix">
                      <video class="embed-responsive-item" width="100%" controls>
                         <source src="<?php echo e(asset('lameri/video/episode_2.mov')); ?>" type="video/mp4">
                      </video>
                    </div>
                  <label class="radio-radious">A relationship truly unique. A bond that is unbreakable. Some bonds are meant to be celebrated
                    <input type="radio" name="video_2" value="1"><span class="checkmark"></span>
                  </label>
                  <label class="radio-radious">Behind the wheel, It’s more than just sheer driving pleasure. It’s an attraction so intense and I never want to be separated from you 
                    <input type="radio" name="video_2" value="2"><span class="checkmark"></span>
                  </label>
                </div>
                <div class="single-field-are overflow-fix">
                  <div class="single-video-area overflow-fix">
                    <div class="video-area overflow-fix">
                      <video class="embed-responsive-item" width="100%" controls>
                         <source src="<?php echo e(asset('lameri/video/episode_3.mov')); ?>" type="video/mp4">
                      </video>
                    </div>
                  </div>
                  <label class="radio-radious">With you, life is more exciting, full of happiness
                    <input type="radio" name="video_3" value="1"><span class="checkmark"></span>
                  </label>
                  <label class="radio-radious"> With you, I am bolder, less afraid, and ready to conquer my next adventure
                    <input type="radio" name="video_3" value="2"><span class="checkmark"></span>
                  </label>
                </div>
                <div class="single-field-are overflow-fix">
                  <div class="single-video-area overflow-fix">
                    <div class="video-area overflow-fix">
                      <video class="embed-responsive-item" width="100%" controls>
                         <source src="<?php echo e(asset('lameri/video/episode_4.mov')); ?>" type="video/mp4">
                      </video>
                    </div>
                  </div>
                  <label class="radio-radious">They say some relationships are so rich that they impart a sense of memory on us every minute of the day
                    <input type="radio" name="video_4" value="1"><span class="checkmark"></span>
                  </label>
                  <label class="radio-radious">It’s truly remarkable to appreciate and be grateful for how you make me feel that way
                    <input type="radio" name="video_4" value="2"><span class="checkmark"></span>
                  </label>
                </div>
                <div class="single-field-are overflow-fix">
                  <div class="single-video-area overflow-fix">
                    <div class="video-area overflow-fix">
                      <video class="embed-responsive-item" width="100%" controls>
                         <source src="<?php echo e(asset('lameri/video/episode_5.mov')); ?>" type="video/mp4">
                      </video>
                    </div>
                  </div>
                  <label class="radio-radious"> Every little details matters and every little details have a story to tell 
                    <input type="radio" name="video_5" value="1"><span class="checkmark"></span>
                  </label>
                  <label class="radio-radious">Every day is a new day to learn something new about you and always be reminded of how amazing you are 
                    <input type="radio" name="video_5" value="2"><span class="checkmark"></span>
                  </label>
                </div>
                <div class="single-field-are overflow-fix">
                  <div class="single-video-area overflow-fix">
                    <div class="video-area overflow-fix">
                      <video class="embed-responsive-item" width="100%" controls>
                         <source src="<?php echo e(asset('lameri/video/episode_6.mov')); ?>" type="video/mp4">
                      </video>
                    </div>
                  </div>
                  <label class="radio-radious"> Because our hospitality is what gives us a cut above the rest and reaches out to someone who yearns to feel truly special. That’s the relationship that LE MERIDIEN DHAKA shares with a guest 
                    <input type="radio" name="video_6" value="1"><span class="checkmark"></span>
                  </label>
                  <label class="radio-radious">A relationship that is meant for each other. That kind of a relationship that brings out the best in each other. A match made in heaven and a match here on Earth. 
                    <input type="radio" name="video_6" value="2"><span class="checkmark"></span>
                  </label>
                </div>
                <button type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End reg-form-area-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
<style>
  .video-area {
      max-width: 550px;
      margin-bottom: 15px;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>