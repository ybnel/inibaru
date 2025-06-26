
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Cineplex')); ?> - Admin</title>

        <!-- Fonts & Scripts -->
    
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="font-sans antialiased">
        <div class="relative flex size-full min-h-screen flex-col bg-[#1e2228] dark group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
            <div class="layout-container flex h-full grow flex-col">
                <div class="gap-1 px-6 flex flex-1 justify-center py-5">
                    
                    
                    <?php echo $__env->make('layouts.partials.admin-sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> 

                    
                    <main class="layout-content-container flex flex-col max-w-[960px] flex-1">
                        
                        <?php echo $__env->yieldContent('content'); ?>
                    </main>

                </div>
            </div>
        </div>
    </body>
</html><?php /**PATH /var/www/html/resources/views/layouts/admin.blade.php ENDPATH**/ ?>