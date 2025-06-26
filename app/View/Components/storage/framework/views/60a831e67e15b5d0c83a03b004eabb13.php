 

<?php $__env->startSection('content'); ?>
<div class="flex-1 p-8">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-white text-3xl font-bold">Manage Bookings</h1>
        
        
    </div>

    <div class="mb-6">
        <label for="search-bookings" class="sr-only">Search bookings</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                
                <svg class="w-5 h-5 text-[#9caaba]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input
                type="text"
                id="search-bookings"
                placeholder="Search bookings by code, user, or movie"
                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-white focus:outline-0 focus:ring-0 border-none bg-[#283039] focus:border-none h-14 placeholder:text-[#9caaba] p-4 pl-10 text-base font-normal leading-normal"
            />
        </div>
    </div>

    <div class="bg-[#283039] rounded-xl overflow-hidden">
        <table class="min-w-full divide-y divide-[#111418]">
            <thead class="bg-[#111418]">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-[#9caaba] uppercase tracking-wider">Booking Code</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-[#9caaba] uppercase tracking-wider">User</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-[#9caaba] uppercase tracking-wider">Movie Title</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-[#9caaba] uppercase tracking-wider">Total Price</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-[#9caaba] uppercase tracking-wider">Status</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-[#9caaba] uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#111418]">
                
                <?php $__empty_1 = true; $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white"><?php echo e($booking->booking_code); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white"><?php echo e($booking->user_name ?? $booking->user->name ?? 'N/A'); ?></td> 
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white"><?php echo e($booking->film_title ?? $booking->schedule->film->title ?? 'N/A'); ?></td> 
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white">$<?php echo e(number_format($booking->total_price, 2)); ?></td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                            <?php if($booking->status == 'confirmed'): ?> bg-green-100 text-green-800
                            <?php elseif($booking->status == 'pending'): ?> bg-yellow-100 text-yellow-800
                            <?php elseif($booking->status == 'cancelled'): ?> bg-red-100 text-red-800
                            <?php else: ?> bg-gray-100 text-gray-800
                            <?php endif; ?>">
                            <?php echo e(ucfirst($booking->status)); ?>

                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="<?php echo e(route('admin.bookings.show', $booking->id)); ?>" class="text-[#0c77f2] hover:text-[#0a63d4] mr-2">View</a>
                        <a href="<?php echo e(route('admin.bookings.edit', $booking->id)); ?>" class="text-[#0c77f2] hover:text-[#0a63d4] mr-2">Edit</a>
                        <form action="<?php echo e(route('admin.bookings.destroy', $booking->id)); ?>" method="POST" class="inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-600 hover:text-red-800 ml-2" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" class="px-6 py-4 text-center text-sm text-gray-500">No bookings found.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\Project_WFD\theaterapp\resources\views/admin/bookings/index.blade.php ENDPATH**/ ?>