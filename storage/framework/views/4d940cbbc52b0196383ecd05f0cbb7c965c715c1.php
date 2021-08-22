<?php $__env->startSection('title','Vendor Report'); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1><?php echo e(__('vendor report')); ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(url('admin/home')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
                <div class="breadcrumb-item"><?php echo e(__('vendor report')); ?></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card p-3">
                    <form action="<?php echo e(url('admin/vendor_report')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-12">
                                <input type="text" name="date_range" class="form-control">
                            </div>
                            <div class="col-md-6 col-lg-6 col-12">
                                <input type="submit" value="<?php echo e(__('apply')); ?>" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><?php echo e(__('vendor report')); ?></h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?php echo e(__('name')); ?></th>
                                    <th><?php echo e(__('email id')); ?></th>
                                    <th><?php echo e(__('total order')); ?></th>
                                    <th><?php echo e(__('earning')); ?></th>
                                    <th><?php echo e(__('complete settlement amount')); ?></th>
                                    <th><?php echo e(__('remaining settlement amount')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($vendor->name); ?></td>
                                        <td><?php echo e($vendor->email_id); ?></td>
                                        <td><?php echo e($vendor->total_order); ?></td>
                                        <td><?php echo e($currency); ?><?php echo e($vendor->vendor_earning); ?></td>
                                        <td><?php echo e($currency); ?><?php echo e($vendor->compelte_settle); ?></td>
                                        <td><?php echo e($currency); ?><?php echo e($vendor->remain_settle); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app',['activePage' => 'vendor_report'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Sites/mealUp/resources/views/admin/report/vendor_report.blade.php ENDPATH**/ ?>