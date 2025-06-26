<?php $__env->startSection('content'); ?>
    
    
    <div class="flex flex-wrap justify-between gap-3 p-4 items-center">
        <h1 class="text-white tracking-light text-2xl md:text-3xl font-bold leading-tight">
            Manage Movies
        </h1>
        <a href="#" class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#283039] text-white text-sm font-medium leading-normal hover:bg-gray-700">
            <span class="truncate">Add Movie</span>
        </a>
    </div>

    
    <div class="px-4 py-3">
        <label class="flex flex-col min-w-40 h-12 w-full">
            <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                <div class="text-[#9caaba] flex border-none bg-[#283039] items-center justify-center pl-4 rounded-l-xl border-r-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256"><path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path></svg>
                </div>
                <input placeholder="Search movies by title..." class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-r-xl text-white focus:outline-none focus:ring-0 border-none bg-[#283039] h-full placeholder:text-[#9caaba] px-4 text-base font-normal leading-normal" value="" />
            </div>
        </label>
    </div>

    
    <div class="px-4 py-3">
        <div class="overflow-x-auto rounded-xl border border-[#3b4754] bg-[#111418]">
            <table class="min-w-full divide-y divide-[#3b4754]">
                <thead class="bg-[#1b2127]">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Title</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Genre</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Duration</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Release Date</th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-[#111418] divide-y divide-[#3b4754]">
                    
                    <?php $__empty_1 = true; $__currentLoopData = $films; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-white"><?php echo e($film->title); ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-400"><?php echo e($film->genre); ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-400"><?php echo e($film->duration_minutes); ?>m</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-400"><?php echo e(\Carbon\Carbon::parse($film->release_date)->format('d M Y')); ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-400 hover:text-indigo-600">Edit</a>
                                <span class="text-gray-500 mx-1">|</span>
                                <a href="#" class="text-red-400 hover:text-red-600">Remove</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" class="px-6 py-4 whitespace-nowrap text-center text-gray-500">
                                No movies found.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/resources/views/dashboard/dashboard_movies.blade.php ENDPATH**/ ?>