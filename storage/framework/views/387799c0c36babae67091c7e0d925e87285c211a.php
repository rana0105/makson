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
    <!-- End logo area-->
    <!-- reg-form-area-->
    <section class="ref-from-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form class="ref-from overflow-fix quiz-from" action="<?php echo e(route('store.quiz.point')); ?>" method="POST">
              <?php echo e(csrf_field()); ?>

              <h2 class="reg-from-title">LET US GET TO KNOW YOU BETTER</h2>
              <div class="single-field-are overflow-fix">
                <p>You have met the person who you finally think is The One. Things hit off pretty well and it’s time that you ask her out on a special date where you will confess your feelings. Your ideal choice for that would be – </p>
                <label class="radio-radious">A fancy dinner at a high end restaurant 
                  <input type="radio" name="quiz_1" value="1"><span class="checkmark"></span>
                </label>
                <label class="radio-radious">Restaurants are cliché. I prefer going to watch a romantic movie instead
                  <input type="radio" name="quiz_1" value="2"><span class="checkmark"></span>
                </label>
                <label class="radio-radious">A long romantic drive on a Friday evening
                  <input type="radio" name="quiz_1" value="3"><span class="checkmark"></span>
                </label>
              </div>
              <div class="single-field-are overflow-fix">
                <p>You’ve taken your significant other to a fancy dinner. A fancy dinner calls for an equally fancy menu. Which of the following items would you choose to go along with? </p>
                <label class="radio-radious">Duck Confit
                  <input type="radio" name="quiz_2" value="1"><span class="checkmark"></span>
                </label>
                <label class="radio-radious">Foie Gras with White Truffle Sauce 
                  <input type="radio" name="quiz_2" value="2"><span class="checkmark"></span>
                </label>
                <label class="radio-radious">An Imported T Bone Steak
                  <input type="radio" name="quiz_2" value="3"><span class="checkmark"></span>
                </label>
              </div>
              <div class="single-field-are overflow-fix">
                <p>When thinking of a destination wedding, which of the following would you choose based on your budget and convenience? </p>
                <label class="radio-radious">A Palace like Hotel in Rajasthan. Marriage is a once in a lifetime deal. The wedding should be as grand as possible
                  <input type="radio" name="quiz_3" value="1"><span class="checkmark"></span>
                </label>
                <label class="radio-radious"> A serene hilltop resort in Sylhet. Why go abroad when there’s so much beauty to be discovered here at home
                  <input type="radio" name="quiz_3" value="2"><span class="checkmark"></span>
                </label>
                <label class="radio-radious"> I would rather save up that money and go abroad on a trip with my significant other
                  <input type="radio" name="quiz_3" value="3"><span class="checkmark"></span>
                </label>
              </div>
              <div class="single-field-are overflow-fix">
                <p>A few years into a relationship, which of the below options would you choose for the perfect anniversary present for your significant other? </p>
                <label class="radio-radious">An expensive Swiss watch. A grand and classy gesture is the way to go
                  <input type="radio" name="quiz_4" value="1"><span class="checkmark"></span>
                </label>
                <label class="radio-radious">An elaborately planned out dinner date at a high end, fancy restaurant followed by a movie 
                  <input type="radio" name="quiz_4" value="2"><span class="checkmark"></span>
                </label>
                <label class="radio-radious">A flower bouquet and a letter documenting our relationship so far. Simplicity has its own charms
                  <input type="radio" name="quiz_4" value="3"><span class="checkmark"></span>
                </label>
              </div>
              <div class="single-field-are overflow-fix">
                <p>Out of the following, where would you want your vacation home to be for a retreat with family and friends? </p>
                <label class="radio-radious"> The French Riviera 
                  <input type="radio" name="quiz_5" value="1"><span class="checkmark"></span>
                </label>
                <label class="radio-radious">An island in Maldives 
                  <input type="radio" name="quiz_5" value="2"><span class="checkmark"></span>
                </label>
                <label class="radio-radious"> Koh Samui
                  <input type="radio" name="quiz_5" value="3"><span class="checkmark"></span>
                </label>
              </div>
              <button type="submit">Go</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End reg-form-area-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>