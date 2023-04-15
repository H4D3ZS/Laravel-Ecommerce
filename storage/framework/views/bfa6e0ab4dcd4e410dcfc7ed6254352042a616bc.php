<img src="<?php echo e($route); ?>"
     alt="https://github.com/igoshev/laravel-captcha"
     style="cursor:pointer;width:<?php echo e($width); ?>px;height:<?php echo e($height); ?>px;"
     title="<?php echo e($title); ?>"
     onclick="this.setAttribute('src','<?php echo e($route); ?>?_='+Math.random());var captcha=document.getElementById('<?php echo e($input_id); ?>');if(captcha){captcha.focus()}"
>
<?php /**PATH /Users/lord-hades/Desktop/ecom/vendor/mehedi/laravel-captcha/src/resources/views/vendor/bone/captcha/image.blade.php ENDPATH**/ ?>