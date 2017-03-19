  
 <?php $__env->startSection('content'); ?> 
    <h1>Contact Us.</h1> 
    <p>Please contact us by sending a message using the form below:</p> 
    <?php echo e(Form::open(array('url' => 'contact'))); ?> 
    <?php echo e(Form::label('Subject')); ?> 
    <?php echo e(Form::text('subject','Enter your subject')); ?> 
    <br/> 
    <?php echo e(Form::label('Message')); ?> 
    <?php echo e(Form::textarea('message','Enter your message')); ?> 
    <br/> 
    <?php echo e(Form::submit()); ?> 
    <?php echo e(Form::close()); ?> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>