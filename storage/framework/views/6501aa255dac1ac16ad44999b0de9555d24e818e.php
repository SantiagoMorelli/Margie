<p><?php echo app('translator')->get('strings.emails.contact.email_body_title'); ?></p>

<p><strong><?php echo app('translator')->get('validation.attributes.frontend.name'); ?>:</strong> <?php echo e($request->name); ?></p>
<p><strong><?php echo app('translator')->get('validation.attributes.frontend.email'); ?>:</strong> <?php echo e($request->email); ?></p>
<p><strong><?php echo app('translator')->get('validation.attributes.frontend.phone'); ?>:</strong>  <?php echo e(($request->phone == "") ? "N/A" : $request->phone); ?></p>
<p><strong><?php echo app('translator')->get('validation.attributes.frontend.message'); ?>:</strong> <?php echo e($request->message); ?></p>
<?php /**PATH /home/customer/www/margiesmagicalverbs.com/public_html/resources/views/frontend/mail/contact.blade.php ENDPATH**/ ?>