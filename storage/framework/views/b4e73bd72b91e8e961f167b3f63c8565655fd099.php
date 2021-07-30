<div class="container">
    <p class=" text-red-500 text-lg font-bold">Registro de Asignación</p>

    

    <div class="grid grid-cols-4">
        <div class="items-center pt-4">
            <p class="text-gray-700 mt-6">Objetivo Estrategico: </p>
        </div>
            <div class="col-span-3 pt-5">
                <select wire:model="objestrategicos_id" class="w-full form-control mt-4 h-8 text-xs">
                    <option value="" selected>Seleccione un Objetivo Estrategico</option>
            
                    <?php $__currentLoopData = $objestrategicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $objestrategico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($objestrategico->id); ?>"><?php echo e($objestrategico->description); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
    </div>
    

      
      <div class="grid grid-cols-4">
        <div class="items-center pr-4">
            <p class="text-gray-700 mt-6">Objetivo Tactico: </p>
        </div>
            <div class="items-center col-span-3 pt-2">
                <select wire:model="objtacticos_id" class="w-full form-control mt-4 h-8 text-xs">
                    <option value="" selected disabled>Seleccione un Objetivo Tactico</option>
            
                    <?php $__currentLoopData = $tacticos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tactico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($tactico->id); ?>"><?php echo e($tactico->description); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
       

      </div>

      

     
     <div class="grid grid-cols-4">
        <div class="tems-center pt-4">
            <p class="text-gray-700 pr-8">Objetivo Operacional: </p>
        </div>
            <div class="col-span-3 pt-2">
                <select wire:model="objoperacionals_id" class="w-full form-control mt-4 h-8 text-xs">
                    <option value="" selected disabled>Seleccione un Objetivo Operacional</option>
            
                    <?php $__currentLoopData = $operacionals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operacional): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($operacional->id); ?>"><?php echo e($operacional->description); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
     </div>

     <div class="grid grid-cols-4">
        <div class="tems-center pt-4">
         <p class="text-gray-700 pr-8">Conformación de ENT:</p>
        </div>
            <div class="col-span-3 pt-4 w-full">
                <div class="flex justify-items-stretch w-full mr-6">
                    <div>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input.date','data' => ['wire:model' => 'fecha_conformacion_i','id' => 'fecha_conformacion_i','placeholder' => 'MM/DD/YYYY','class' => 'px-6']]); ?>
<?php $component->withName('input.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'fecha_conformacion_i','id' => 'fecha_conformacion_i','placeholder' => 'MM/DD/YYYY','class' => 'px-6']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                    <div class="ml-12">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input.date','data' => ['wire:model' => 'fecha_conformacion_f','id' => 'fecha_conformacion_f','placeholder' => 'MM/DD/YYYY','class' => 'px-6']]); ?>
<?php $component->withName('input.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'fecha_conformacion_f','id' => 'fecha_conformacion_f','placeholder' => 'MM/DD/YYYY','class' => 'px-6']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
     </div>

     <div class="grid grid-cols-4">
        <div class="tems-center pt-4">
         <p class="text-gray-700 pr-8">Recopilación de información, Desarrollo y Analisis:</p>
        </div>
            <div class="col-span-3 pt-6 w-full">
                <div class="flex justify-items-stretch w-full mr-6">
                    <div>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input.date','data' => ['wire:model' => 'fecha_recopilacion_i','id' => 'fecha_recopilacion_i','placeholder' => 'MM/DD/YYYY','class' => 'px-6']]); ?>
<?php $component->withName('input.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'fecha_recopilacion_i','id' => 'fecha_recopilacion_i','placeholder' => 'MM/DD/YYYY','class' => 'px-6']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                    <div class="ml-12">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input.date','data' => ['wire:model' => 'fecha_recopilacion_f','id' => 'fecha_recopilacion_f','placeholder' => 'MM/DD/YYYY','class' => 'px-6']]); ?>
<?php $component->withName('input.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'fecha_recopilacion_f','id' => 'fecha_recopilacion_f','placeholder' => 'MM/DD/YYYY','class' => 'px-6']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
     </div>

     <div class="grid grid-cols-4">
        <div class="tems-center pt-6">
         <p class="text-gray-700 pr-8">Información Preliminar:</p>
        </div>
            <div class="col-span-3 pt-6 w-full">
                <div class="flex justify-items-stretch w-full mr-6">
                    <div>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input.date','data' => ['wire:model' => 'fecha_inf_i','id' => 'fecha_inf_i','placeholder' => 'MM/DD/YYYY','class' => 'px-6']]); ?>
<?php $component->withName('input.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'fecha_inf_i','id' => 'fecha_inf_i','placeholder' => 'MM/DD/YYYY','class' => 'px-6']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                    <div class="ml-12">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input.date','data' => ['wire:model' => 'fecha_inf_f','id' => 'fecha_inf_f','placeholder' => 'MM/DD/YYYY','class' => 'px-6']]); ?>
<?php $component->withName('input.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'fecha_inf_f','id' => 'fecha_inf_f','placeholder' => 'MM/DD/YYYY','class' => 'px-6']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
     </div>

     <div class="grid grid-cols-4">
        <div class="tems-center pt-6">
         <p class="text-gray-700 pr-8">Divulgación y Publicación:</p>
        </div>
            <div class="col-span-3 pt-6 w-full">
                <div class="flex justify-items-stretch w-full mr-6">
                    <div>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input.date','data' => ['wire:model' => 'fecha_divulgacion_i','id' => 'fecha_divulgacion_i','placeholder' => 'MM/DD/YYYY','class' => 'px-6']]); ?>
<?php $component->withName('input.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'fecha_divulgacion_i','id' => 'fecha_divulgacion_i','placeholder' => 'MM/DD/YYYY','class' => 'px-6']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                    <div class="ml-12">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input.date','data' => ['wire:model' => 'fecha_divulgacion_f','id' => 'fecha_divulgacion_f','placeholder' => 'MM/DD/YYYY','class' => 'px-6']]); ?>
<?php $component->withName('input.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'fecha_divulgacion_f','id' => 'fecha_divulgacion_f','placeholder' => 'MM/DD/YYYY','class' => 'px-6']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
     </div>

     <div class="grid grid-cols-4">
        <div class="tems-center pt-6">
         <p class="text-gray-700 pr-8">Carga de Recomendaciones:</p>
        </div>
            <div class="col-span-3 pt-6 w-full">
                <div class="flex justify-items-stretch w-full mr-6 pr-4">
                    <div>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input.date','data' => ['wire:model' => 'fecha_carga_i','id' => 'fecha_carga_i','placeholder' => 'MM/DD/YYYY','class' => 'px-6']]); ?>
<?php $component->withName('input.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'fecha_carga_i','id' => 'fecha_carga_i','placeholder' => 'MM/DD/YYYY','class' => 'px-6']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                    <div class="ml-12">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input.date','data' => ['wire:model' => 'fecha_carga_f','id' => 'fecha_carga_f','placeholder' => 'MM/DD/YYYY','class' => 'px-6']]); ?>
<?php $component->withName('input.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'fecha_carga_f','id' => 'fecha_carga_f','placeholder' => 'MM/DD/YYYY','class' => 'px-6']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
     </div>

      

    <div class="grid grid-cols-4">
        <div class="items-center pt-4">
            <p class="text-gray-700 mt-6">Región del Usuario: </p>
        </div>
            <div class="col-span-3 pt-5">
                <select wire:model="region_id" class="w-full form-control mt-4 h-8 text-xs">
                    <option value="" selected>Seleccionar Región</option>
            
                    <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($region->id); ?>"><?php echo e($region->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
    </div>

        
    <div class="grid grid-cols-4">
        <div class="items-center pt-4">
            <p class="text-gray-700 mt-6">División del Usuario: </p>
        </div>
            <div class="col-span-3 pt-5">
                <select wire:model="division_id" class="w-full form-control mt-4 h-8 text-xs">
                    <option value="" selected>Seleccionar División</option>
            
                    <?php $__currentLoopData = $divisions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $division): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($division->id); ?>"><?php echo e($division->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
    </div>

         
         <div class="grid grid-cols-4">
            <div class="items-center pt-4">
                <p class="text-gray-700 mt-6">Negocio del Usuario: </p>
            </div>
                <div class="col-span-3 pt-5">
                    <select wire:model="negocio_id" class="w-full form-control mt-4 h-8 text-xs">
                        <option value="" selected>Seleccionar Negocio</option>
                
                        <?php $__currentLoopData = $negocios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $negocio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($negocio->id); ?>"><?php echo e($negocio->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
        </div>

         
         <div class="grid grid-cols-4">
            <div class="items-center pt-4">
                <p class="text-gray-700 mt-6">Usuario: </p>
            </div>
                <div class="col-span-3 pt-5">
                    <select wire:model="usuario_id" class="w-full form-control mt-4 h-8 text-xs">
                        <option value="" selected>Seleccionar Usuario</option>
                
                        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($usuario->id); ?>"><?php echo e($usuario->name); ?> <?php echo e($usuario->apellido); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
        </div>

        <div>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['wire:click' => 'save']]); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:click' => 'save']); ?>
                Cargar Asignación
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        </div>

   
     

   

 
  

    
    
</div>
<?php /**PATH C:\xampp\htdocs\pdvsa\resources\views/livewire/gestion-asignacion.blade.php ENDPATH**/ ?>