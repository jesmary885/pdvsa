<header class="bg-white h-full">
    
    <div class="container flex items-center h-26">
        
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.logo','data' => []]); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        
        <div class="flex-1 px-2">
            <h1 class="bg-gradient-to-l from-red-600 text-right rounded-lg text-white px-2">
                 Sistema De Planificación de Confiabilidad Operacional SISCONF
            </h1>
        </div>
        
        <div class="px-6 relative">
            <?php if(auth()->guard()->check()): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown','data' => ['align' => 'right','width' => '48']]); ?>
<?php $component->withName('jet-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['align' => 'right','width' => '48']); ?>
                     <?php $__env->slot('trigger'); ?> 
                        <span class="inline-flex rounded-md">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                <?php echo e(Auth::user()->name); ?>

                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </span>
                     <?php $__env->endSlot(); ?>
                     <?php $__env->slot('content'); ?> 
                        <!-- Account Management -->
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('profile.show')).'']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('profile.show')).'']); ?>
                            <?php echo e(__('Perfil')); ?>

                         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin.home')): ?>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                Gestión Administrativa
                            </a>
                        <?php endif; ?>
                        <div class="border-t border-gray-100"></div>
                        <!-- Authentication -->
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                                this.closest(\'form\').submit();']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                                this.closest(\'form\').submit();']); ?>
                                <?php echo e(__('Cerrar Sesión')); ?>

                             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                        </form>
                     <?php $__env->endSlot(); ?>
                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    <nav id="navigation-menu" class="bg-gray-600 w-full absolute">
        <div class="container h-full">
            <div class="grid grid-cols-4">
                <div class="p-6">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('asignacion.registro_asignacion')): ?>
                        <h2 class="text-red-500 text-lg font-bold">Gestión de Asignación</h2>
                        <ul class="p-2">
                            <li class="navigation-link text-gray-500 hover:bg-TrueGray-200 hover:text-red-500"> <a href="<?php echo e(route('Asignacion.index')); ?>">Cargar Asignación</a> </li>
                            <li class="navigation-link text-gray-500 hover:bg-TrueGray-200 hover:text-red-500"> <a href="#">Consultar Asignación</a> </li>
                        </ul>
                    <?php endif; ?>
                    
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('avances.registro')): ?>
                    <h2 class="text-red-600 text-lg font-bold">Gestión de Avance</h2>
                    <ul class="p-2">
                        <li class="navigation-link text-gray-500 hover:bg-TrueGray-200 hover:text-red-500"> <a href="#">Cargar Avance</a> </li>
                        <li class="navigation-link text-gray-500 hover:bg-TrueGray-200 hover:text-red-500"> <a href="#">Consultar Avances</a> </li>
                    </ul>
                    <?php endif; ?>
                    </div>
                    <div class="col-span-3 py-6 px-0 h-full">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('asignacion.registro_asignacion')): ?>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('gestion-asignacion')->html();
} elseif ($_instance->childHasBeenRendered('voEP2SL')) {
    $componentId = $_instance->getRenderedChildComponentId('voEP2SL');
    $componentTag = $_instance->getRenderedChildComponentTagName('voEP2SL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('voEP2SL');
} else {
    $response = \Livewire\Livewire::mount('gestion-asignacion');
    $html = $response->html();
    $_instance->logRenderedChild('voEP2SL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <?php endif; ?>
                    </div>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH C:\xampp\htdocs\pdvsa\resources\views/livewire/navigation.blade.php ENDPATH**/ ?>