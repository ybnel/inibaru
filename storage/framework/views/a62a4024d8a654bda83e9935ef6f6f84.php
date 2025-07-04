 

<?php $__env->startSection('content'); ?>
    <div class="flex-1 p-8">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-white text-3xl font-bold">Studios</h1>
            <a href="<?php echo e(route('admin.studios.create')); ?>" class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#0c77f2] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                <span class="truncate">Add Studio</span>
            </a>
        </div>

        <div class="mb-6">
            <label for="search-studios" class="sr-only">Search studios</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    
                    <svg class="w-5 h-5 text-[#9caaba]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input
                    type="text"
                    id="search-studios"
                    placeholder="Search studios"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-white focus:outline-0 focus:ring-0 border-none bg-[#283039] focus:border-none h-14 placeholder:text-[#9caaba] p-4 pl-10 text-base font-normal leading-normal"
                />
            </div>
        </div>

        <div class="bg-[#283039] rounded-xl overflow-hidden">
            <table class="min-w-full divide-y divide-[#111418]">
                <thead class="bg-[#111418]">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-[#9caaba] uppercase tracking-wider">Studio Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-[#9caaba] uppercase tracking-wider">Total Seats</th> 
                        
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-[#9caaba] uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#111418]">
                    <?php $__empty_1 = true; $__currentLoopData = $studios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $studio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white"><?php echo e($studio->name); ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-white"><?php echo e($studio->total_seats); ?></td> 
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="<?php echo e(route('admin.studios.edit', $studio->id)); ?>" class="text-[#0c77f2] hover:text-[#0a63d4] mr-2">Edit</a>
                                <form action="<?php echo e(route('admin.studios.destroy', $studio->id)); ?>" method="POST" class="inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="text-red-600 hover:text-red-800 ml-2" onclick="return confirm('Are you sure you want to delete this studio? This action cannot be undone.')">Remove</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="3" class="px-6 py-4 text-center text-sm text-gray-500">No studios found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\Project_WFD\theaterapp\resources\views/admin/studios/index.blade.php ENDPATH**/ ?>