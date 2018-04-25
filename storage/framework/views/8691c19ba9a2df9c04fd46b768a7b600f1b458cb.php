<div class="container">
  <div class="row">
    <div class="col-md-12">
      <header>
        <div class="row">
          <div class="col-md-8 col-sm-12 home">
              <a href="<?php echo e(url('/')); ?>"><h1>Ajax cable tv billing management software</h1></a>
          </div>
          <div class="col-md-4 col-sm-12">
            <ul class="navbar-right">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-user-circle-o" aria-hidden="true"></i> 
                      <strong><?php echo e(str_limit(Auth::user()->email, 5)); ?></strong>
                  </a>
                  <ul class="dropdown-menu">
                      <li>
                          <div class="navbar-login">
                              <div class="row">
                                  <div class="col-lg-4">
                                    <?php if(Auth::user()->image): ?>
                                      <p class="text-center">
                                          <img width="100%" height="80" src="<?php echo e(asset('images/resize_images')); ?>/<?php echo e(Auth::user()->image); ?>">
                                      </p>
                                    <?php else: ?>
                                      <p class="text-center">
                                          <img width="100%" height="80" src="assets/dist/img/rana.jpg">
                                      </p>
                                    <?php endif; ?>
                                  </div>
                                  <div class="col-lg-8">
                                      <p class="text-left"><strong><?php echo e(Auth::user()->name); ?></strong></p>
                                      <p class="text-left small"><?php echo e(Auth::user()->email); ?></p>
                                      <p class="text-left">
                                          <a href="<?php echo e(url('profile')); ?>" class="btn btn-block">view profile</a>
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <div class="logout-item">
                          <div class="row">
                              <div class="col-lg-12">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class="glyphicon glyphicon-log-out"></i> Logout
                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                              </div>
                          </div>
                        </div>
                      </li>
                  </ul>
              </li>
            </ul>
          </div>
        </div>
      </header>
    </div>
  </div>
</div>
<nav class="navbar navbar-toggleable-md">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(url('/dashboard')); ?>">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(url('customer')); ?>">create customer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('billpay')); ?>">Bill payment</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('report')); ?>">Management report</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('expenditure')); ?>">Expenditure</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('financial-statement')); ?>">financial statement</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Setting
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo e(url('setting')); ?>">General Setting</a>
                <a class="dropdown-item" href="<?php echo e(url('users')); ?>">Users</a>
                
              </div>
            </li>
        </ul>
    </div>
  </div>
</nav>