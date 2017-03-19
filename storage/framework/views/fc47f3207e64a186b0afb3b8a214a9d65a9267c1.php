 
<?php $__env->startSection('content'); ?> 
    <div class="container">
		<!--<a href="<?php echo e(URL::to('downloadExcel/xls')); ?>"><button class="btn btn-success">Download Excel xls</button></a>
		<a href="<?php echo e(URL::to('downloadExcel/xlsx')); ?>"><button class="btn btn-success">Download Excel xlsx</button></a>
		<a href="<?php echo e(URL::to('downloadExcel/csv')); ?>"><button class="btn btn-success">Download CSV</button></a>-->
        <div class="row">
    		<div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Upload Products
                         </h4>
                </div>
                <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="<?php echo e(URL::to('importExcel')); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <input type="file" name="import_file" />
                    </br>
                    <button class="btn btn-primary">Import File</button>
                </form>
            </div>
        </div>
        <div>
            </br>
            </div>
        <div class="row">
		     <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Products
                        <div class="pull-right">
                            <button id="btn-admin" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Edit</button>
                            <button id="btn-admin" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                        </div>
                    </h3>
                </div>
                
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="col-check"></th>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Camera(MP)</th>
                            <th>Weight (g)</th>
                            <th>Size (GB)</th>
                            <th>Price($)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $prods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="success">
                            <td class="col-check"><input type="checkbox" class="form-check-input"></td>
                            <td><?php echo e($prod->prod_id); ?></td>
                            <td><?php echo e($prod->prod_name); ?></td>
                            <td><?php echo e($prod->prod_desc); ?></td>
                            <td><?php echo e($prod->camera_type); ?></td>
                            <td><?php echo e($prod->weight); ?></td>
                            <td><?php echo e($prod->storage_size); ?></td>
                            <td><?php echo e($prod->price); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </tbody>
                </table>
		    </div>
	    </div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>