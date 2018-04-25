<?php $__env->startSection('content'); ?>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="<?php echo e(url('/dashboard')); ?>">Dashboard</a></li>
                            <li class="active">Members</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body table-responsive">
                              <table id="membersTable" class="table  table-bordered " cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                    <th>Auto ID</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Profession</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Martial Status</th>
                                    <th>Vehicle</th>
                                    <th>Quiz</th>
                                    <th>Video</th>
                                    <th>Total Point</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                    <td><?php echo e($member->member_auto_id); ?></td>
                                    <td><?php echo e($member->name); ?></td>
                                    <td><?php echo e($member->age); ?></td>
                                    <td><?php echo e($member->address); ?></td>
                                    <td><?php echo e($member->profession); ?></td>
                                    <td><?php echo e($member->phone); ?></td>
                                    <td><?php echo e($member->email); ?></td>
                                    <td><?php echo e($member->marital_status); ?></td>
                                    <td><?php echo e($member->vehicle); ?></td>
                                    <td><?php echo e($member->quiz_point); ?></td>
                                    <td><?php echo e($member->video_point); ?></td>
                                    <td><?php echo e($member->total_point); ?></td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    $(document).ready(function() {
        $('#membersTable').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'csv', 'excel', 'pdf', 'print'
            ],
            "order": [[ 11, "desc" ]]
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>