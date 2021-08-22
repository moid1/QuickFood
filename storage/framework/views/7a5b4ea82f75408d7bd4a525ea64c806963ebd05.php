<?php $__env->startSection('title','Create A Promo Code'); ?>

<?php $__env->startSection('content'); ?>

<section class="section">
    <div class="section-header">
        <h1><?php echo e(__('Create new promo code')); ?></h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?php echo e(url('admin/home')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
            <div class="breadcrumb-item"><a href="<?php echo e(url('admin/promo_code')); ?>"><?php echo e(__('Promo code')); ?></a></div>
            <div class="breadcrumb-item"><?php echo e(__('create a promo code')); ?></div>
        </div>
    </div>

    <div class="section-body">
        <?php if($errors->any()): ?>
        <div class="alert alert-primary alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>×</span>
                </button>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($item); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <?php endif; ?>
        <h2 class="section-title"><?php echo e(__('Promo code Management system')); ?></h2>
        <p class="section-lead"><?php echo e(__('create promo code')); ?></p>
        <div class="card">
            <div class="card-body">
                <form class="container-fuild" action="<?php echo e(url('admin/promo_code')); ?>" method="post"  enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <div class="logoContainer">
                                <img id="image"  src="<?php echo e(url('images/upload/impageplaceholder.png')); ?>" width="180" height="150">
                            </div>
                            <div class="fileContainer sprite">
                                <span><?php echo e(__('Image')); ?></span>
                                <input type="file" name="image" accept=".jpg,.png,.jpeg" value="Choose File" id="previewImage" dataid="add" accept=".png, .jpg, .jpeg, .svg">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <label for="Promo code name"><?php echo e(__('promo code name')); ?><span class="text-danger">&nbsp;*</span></label>
                            <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalide <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('Promo Code Name')); ?>" value="<?php echo e(old('name')); ?>" required="">

                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="custom_error" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6 mb-5">
                            <label for="<?php echo e(__('Promo code')); ?>"><?php echo e(__('Promo Code')); ?><span class="text-danger">&nbsp;*</span></label>
                            <input type="text" name="promo_code" class="form-control <?php $__errorArgs = ['promo_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalide <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="promo_code" placeholder="<?php echo e(__('Promo Code')); ?>" value="<?php echo e(old('promo_code')); ?>" required="">
                            <?php $__errorArgs = ['promo_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="custom_error" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <label for="vendor"><?php echo e(__('Promo code valid for this Vendor')); ?><span class="text-danger">&nbsp;*</span></label>
                            <select name="vendor_id[]" class="select2 form-control" multiple>
                                <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($vendor->id); ?>" selected><?php echo e($vendor->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>

                            <?php $__errorArgs = ['vendor_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="custom_error" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6 mb-5">
                            <label for="vendor"><?php echo e(__('Promo code valid for this Customer')); ?><span class="text-danger">&nbsp;*</span></label>
                            <select name="customer_id[]" class="select2 form-control" multiple>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($user->id); ?>" selected><?php echo e($user->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['customer_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="custom_error" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-5 mt-3">
                            <input type="checkbox" id="customer_app" name="display_customer_app">
                            <label for="customer_app"><?php echo e(__('Show in customer App')); ?></label>
                        </div>

                        <div class="col-md-3 mb-5 mt-3">
                            <input type="checkbox" id="chkbox" name="isFlat">
                            <label for="chkbox"><?php echo e(__('Flat Discount')); ?></label>
                        </div>

                        <div class="col-md-3 mb-5 discountType">
                            <label for="<?php echo e(__('Discount type')); ?>"><?php echo e(__('Discount type')); ?><span class="text-danger">&nbsp;*</span></label>
                            <select name="discountType" id="Discount type" class="form-control">
                                <option value="percentage"><?php echo e(__('percentage')); ?></option>
                                <option value="amount"><?php echo e(__('amount')); ?></option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-5 max_disc_amount">
                            <label for="vendor"><?php echo e(__('Enter Discount')); ?></label>
                            <input type="number" name="discount" min=1 class="form-control" placeholder="<?php echo e(__('Enter Discount')); ?>" value="<?php echo e(old('discount')); ?>">
                        </div>

                        <div class="col-md-6 mb-5 hide flatDiscount">
                            <label for="<?php echo e(__('Flat Discount')); ?>"><?php echo e(__('Flat Discount')); ?></label>
                            <input type="number" min=1 name="flatDiscount" class="form-control <?php $__errorArgs = ['flatDiscount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalide <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="flatDiscount" placeholder="<?php echo e(__('Enter Flat Discount In Amount')); ?>" value="<?php echo e(old('flatDiscount')); ?>"></div>

                        <?php $__errorArgs = ['flatDiscount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="custom_error" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <label for="<?php echo e(__('Maximum Discount amount')); ?>"><?php echo e(__('Maximum Discount Amount')); ?><span class="text-danger">&nbsp;*</span></label>
                            <input type="number" min=1 name="max_disc_amount"
                                class="form-control <?php $__errorArgs = ['max_disc_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalide <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="Maximum Discount amount" placeholder="<?php echo e(__('Maximum Discount Amount')); ?>"
                                value="<?php echo e(old('max_disc_amount')); ?>"></div>

                        <?php $__errorArgs = ['max_disc_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="custom_error" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <label for="<?php echo e(__('Promo Code redeem start/end Period')); ?>"><?php echo e(__('Promo Code Redeem Start/End Period')); ?><span class="text-danger">&nbsp;*</span></label><br>
                            <input type="text" name="start_end_date" class="form-control"/>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="<?php echo e(__('max_count')); ?>"><?php echo e(__('Promo Code Redeem Count')); ?></label>
                            <select class="form-control" name="max_count">
                                <option value="1"><?php echo e(__('1')); ?></option>
                                <option value="2"><?php echo e(__('2')); ?></option>
                                <option value="3"><?php echo e(__('3')); ?></option>
                                <option value="4"><?php echo e(__('4')); ?></option>
                                <option value="5"><?php echo e(__('5')); ?></option>
                                <option value="6"><?php echo e(__('6')); ?></option>
                                <option value="7"><?php echo e(__('7')); ?></option>
                                <option value="8"><?php echo e(__('8')); ?></option>
                                <option value="9"><?php echo e(__('9')); ?></option>
                                <option value="10"><?php echo e(__('10')); ?></option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <label for="<?php echo e(__('min_order_amount')); ?>"><?php echo e(__('Minimum Order Amount')); ?><span class="text-danger">&nbsp;*</span></label>
                            <input type="number" min=1 name="min_order_amount" value="<?php echo e(old('min_order_amount')); ?>"
                                class="form-control <?php $__errorArgs = ['min_order_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalide <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="<?php echo e(__('Minimum Order Amount')); ?>">
                            <?php $__errorArgs = ['min_order_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="custom_error" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="<?php echo e(__('max_user')); ?>"><?php echo e(__('Coupon Valid For First X User')); ?><span class="text-danger">&nbsp;*</span></label>
                            <input type="number" min=1 name="max_user" value="<?php echo e(old('max_user')); ?>"
                                class="form-control <?php $__errorArgs = ['max_user'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is_invalide <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                placeholder="<?php echo e(__('Coupon Valid For First X User')); ?>">
                            <?php $__errorArgs = ['max_user'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="custom_error" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <label for="<?php echo e(__('max_order')); ?>"><?php echo e(__('Promo Code Valid For First X Order')); ?><span class="text-danger">&nbsp;*</span></label>
                            <select class="form-control" name="max_order">
                                <option value="1"><?php echo e(__('1')); ?></option>
                                <option value="2"><?php echo e(__('2')); ?></option>
                                <option value="3"><?php echo e(__('3')); ?></option>
                                <option value="4"><?php echo e(__('4')); ?></option>
                                <option value="5"><?php echo e(__('5')); ?></option>
                            </select>
                            <?php $__errorArgs = ['max_order'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="custom_error" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6 mb-5">
                            <label for="<?php echo e(__('coupen_type')); ?>"><?php echo e(__('Coupon Type')); ?><span class="text-danger">&nbsp;*</span></label>

                            <select class="form-control" name="coupen_type">
                                <option value="both"><?php echo e(__('both')); ?></option>
                                <option value="delivery"><?php echo e(__('delivery')); ?></option>
                                <option value="pickup"><?php echo e(__('pickup')); ?></option>
                            </select>
                            <?php $__errorArgs = ['max_order'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="custom_error" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <label for="<?php echo e(__('max_user')); ?>"><?php echo e(__('Promo Code description')); ?><span class="text-danger">&nbsp;*</span></label>
                            <textarea name="description" class="form-control" placeholder="<?php echo e(__('Promo Code Description')); ?>"><?php echo e(old('description')); ?></textarea>
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="<?php echo e(__('max_user')); ?>"><?php echo e(__('Promo code display text')); ?><span class="text-danger">&nbsp;*</span></label>
                            <textarea name="display_text" class="form-control" placeholder="<?php echo e(__('Promo Code Display Text')); ?>"><?php echo e(old('display_text')); ?></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="<?php echo e(__('max_user')); ?>"><?php echo e(__('Status')); ?></label><br>
                            <label class="switch">
                                <input type="checkbox" name="status">
                                <div class="slider"></div>
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" type="submit"><?php echo e(__('Add Promo code')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app',['activePage' => 'promo_code'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Sites/mealUp/resources/views/admin/promo code/create_promo_code.blade.php ENDPATH**/ ?>