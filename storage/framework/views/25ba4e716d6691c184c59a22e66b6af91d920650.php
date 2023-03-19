<?php $__env->startPush('after-styles'); ?>
    <style>
        .content img {
            margin: 10px;
        }
        .about-page-section ul{
            padding-left: 20px;
            font-size: 20px;
            color: #333333;
            font-weight: 300;
            margin-bottom: 25px;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>



    <!-- Start of breadcrumb section
        ============================================= -->
    <section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
        <div class="blakish-overlay"></div>
        <div class="container">
           
            <div class="page-breadcrumb-content text-center">
                
                <div class="page-breadcrumb-title">
                    <h2 class="breadcrumb-head black bold"><?php echo e(env('APP_NAME')); ?> <span>title</span></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End of breadcrumb section
        ============================================= -->

    
    ssss

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app'.config('theme_layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/santi/Documents/Intership/testing/resources/views/backend/pages/test.blade.php ENDPATH**/ ?>