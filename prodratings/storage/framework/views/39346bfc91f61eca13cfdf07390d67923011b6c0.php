 
<?php $__env->startSection('content'); ?>

    <div class="container">
		
        <div class="modal fade" id="prodEditModal" tabindex="-1" role="dialog" aria-labelledby="prodEditModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="prodEditModalLabel">Edit Product Informations</h4>
                    </div>
                    <div class="modal-body"> <!-- modal body start -->
                            <?php echo e(Form::open(array('url'=>'/editproduct','class'=>'form-horizontal', 'method'=> 'POST'))); ?>

                                    
                            <!-- Device model listing --> 
                            
                            <div class="control-group">
                                    <label for="productid" class="control-label">Product Id:</label>
                                    <div class="controls">
                                            <!--<?php echo e(Form::text('product_id',  null, array('class'=>'span3', 'placeholder'=>'Product Id'))); ?>-->
                                            <input type="text" id="product_id" name="product_id" class="form-control" placeholder="Product Id" value="" disabled/>
                                    </div>
                            </div>

                            <div class="control-group">
                                    <label for="productname" class="control-label">Product Name:</label>
                                    <div class="controls">
                                            <!--<?php echo e(Form::text('product_name', null, array('class'=>'span3', 'placeholder'=>'Product Name'))); ?>-->
                                            <input type="text" id="product_name"  name="product_name" class="form-control" placeholder="Product Name" value="" disabled/>
                                    </div>
                            </div>


                            <div class="control-group">
                                    <label for="productdesc" class="control-label">Product Description:</label>
                                    <div class="controls">
                                            <!--<?php echo e(Form::textarea('product_desc', null, array('class'=>'span3', 'placeholder'=>'Description'))); ?>-->
                                            <textarea id="product_desc" name="product_desc" class="form-control" placeholder="Description" value=""> </textarea>
                                    </div>
                            </div> <!-- /field -->

                            <div class="control-group">
                                    <label for="camera_type" class="control-label">Camera (MP): </label>
                                    <div class="controls">
                                            <!--<?php echo e(Form::text('cameratype', null, array('class'=>'span3', 'placeholder'=>'Camera type'))); ?>-->
                                            <input type="text" id="cameratype" name="cameratype" class="form-control" placeholder="Camera type" value=""/>
                                    </div>
                            </div> <!-- /field -->
                            
                            <div class="control-group">
                                    <label for="weight" class="control-label">Weight (g): </label>
                                    <div class="controls">
                                            <!--<?php echo e(Form::text('weight_g', null, array('class'=>'span3', 'placeholder'=>'Weight'))); ?>-->
                                            <input type="text" id="weight_g"  name="weight_g" class="form-control"  placeholder="Weight" value=""/>
                                    </div>
                            </div> <!-- /field -->
                            
                            <div class="control-group">
                                    <label for="storagesize" class="control-label">Internal Memroy(GB) </label>
                                    <div class="controls">
                                            <!--<?php echo e(Form::text('storagesize_m', null, array('class'=>'span3', 'placeholder'=>'Internal Memory'))); ?>-->
                                            <input type="text" id="storagesize_m"  name="storagesize_m" class="form-control"  placeholder="Internal Memory" value=""/>
                                    </div>
                            </div> <!-- /field -->

                            <div class="control-group">
                                    <label for="price" class="control-label">Price: </label>
                                    <div class="controls">
                                            <!--<?php echo e(Form::text('price_v', null, array('class'=>'span3', 'placeholder'=>'Price'))); ?>-->
                                            <input type="text" id="price_v" name="price_v" class="form-control"  placeholder="Price" value=""/>
                                    </div>
                            </div> <!-- /field -->

                                                             
                    </div> <!-- Modal body end -->
                    <div class="modal-footer">
                            
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <span class="pull-right">
                                <?php echo e(Form::submit('Save', ['class' => 'btn btn-primary'])); ?>

                                <!--<button type="button" class="btn btn-primary"> Save</button>-->
                        </span>
                    </div>
                    <?php echo e(Form::close()); ?>

                </div>
        </div>
    </div>   

        
        
        <div class="modal fade" id="prodAddModal" tabindex="-1" role="dialog" aria-labelledby="prodModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="prodModalLabel">Add Product</h4>
                    </div>
                    <div class="modal-body"> <!-- modal body start -->
                            <?php echo e(Form::open(array('url'=>'/addproduct','class'=>'form-horizontal', 'method'=> 'POST'))); ?>

                                    
                            <!-- Device model listing --> 
                            
                            <div class="control-group">
                                    <label for="productid" class="control-label">Product Id:</label>
                                    <div class="controls">
                                            <?php echo e(Form::text('productid', null, array('class'=>'span3', 'placeholder'=>'Product Id'))); ?>

                                    </div>
                            </div>

                            <div class="control-group">
                                    <label for="productname" class="control-label">Product Name:</label>
                                    <div class="controls">
                                            <?php echo e(Form::text('productname', null, array('class'=>'span3', 'placeholder'=>'Product Name'))); ?>

                                    </div>
                            </div>


                            <div class="control-group">
                                    <label for="productdesc" class="control-label">Product Description:</label>
                                    <div class="controls">
                                            <?php echo e(Form::textarea('productdesc', null, array('class'=>'span3', 'placeholder'=>'Description'))); ?>

                                    </div>
                            </div> <!-- /field -->

                            <div class="control-group">
                                    <label for="camera_type" class="control-label">Camera (MP): </label>
                                    <div class="controls">
                                            <?php echo e(Form::text('camera_type', null, array('class'=>'span3', 'placeholder'=>'Camera type'))); ?>

                                    </div>
                            </div> <!-- /field -->
                            
                            <div class="control-group">
                                    <label for="weight" class="control-label">Weight (g): </label>
                                    <div class="controls">
                                            <?php echo e(Form::text('weight', null, array('class'=>'span3', 'placeholder'=>'Weight'))); ?>

                                    </div>
                            </div> <!-- /field -->
                            
                            <div class="control-group">
                                    <label for="storagesize" class="control-label">Internal Memroy(GB) </label>
                                    <div class="controls">
                                            <?php echo e(Form::text('storagesize', null, array('class'=>'span3', 'placeholder'=>'Internal Memory'))); ?>

                                    </div>
                            </div> <!-- /field -->

                            <div class="control-group">
                                    <label for="price" class="control-label">Price: </label>
                                    <div class="controls">
                                            <?php echo e(Form::text('price', null, array('class'=>'span3', 'placeholder'=>'Price'))); ?>

                                    </div>
                            </div> <!-- /field -->

                                                             
                    </div> <!-- Modal body end -->
                    <div class="modal-footer">
                            
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <span class="pull-right">
                                <?php echo e(Form::submit('Save', ['class' => 'btn btn-primary'])); ?>

                                <!--<button type="button" class="btn btn-primary"> Save</button>-->
                        </span>
                    </div>
                    <?php echo e(Form::close()); ?>

                </div>
        </div>
    </div>   
        
        
        
        <div class="row">
    		<div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Upload Products
                         </h4>
                </div>
                <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="<?php echo e(URL::to('importExcelFile')); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
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
            <form action="<?php echo e(URL::to('proddelete')); ?>" class="form-horizontal" method="post">
		     <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Products
                        <div class="pull-right">
                          
                                <button type="button" data-toggle="modal"  data-target="#prodAddModal" id="add_prod" class="btn btn-default">
                                    <span class="glyphicon glyphicon-plus"></span>Add
                                </button>
                                <button id="delete_prod" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-trash">
                                    </span> Delete
                                </button>
                            <!--</form>-->
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
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $prods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="success">
                            <td class="col-check"><input  name="checkedprods[]" type="checkbox" id="<?php echo e($prod->cnt_id); ?>" value="<?php echo e($prod->cnt_id); ?>" ></td>
                            <td><?php echo e($prod->prod_id); ?></td>
                            <td><?php echo e($prod->prod_name); ?></td>
                            <td><?php echo e($prod->prod_desc); ?></td>
                            <td><?php echo e($prod->camera_type); ?></td>
                            <td><?php echo e($prod->weight); ?></td>
                            <td><?php echo e($prod->storage_size); ?></td>
                            <td><?php echo e($prod->price); ?></td>
                            <td><button type="button" class="btn btn-primary btn-xs edit-page" data-toggle="modal" data-target="#prodEditModal" id="btProdEditModal" 
                                        data-id="<?php echo e($prod->prod_id); ?>" 
                                        data-name="<?php echo e($prod->prod_name); ?>"
                                        data-desc="<?php echo e($prod->prod_desc); ?>" 
                                        data-camera="<?php echo e($prod->camera_type); ?>"
                                        data-weight="<?php echo e($prod->weight); ?>"
                                        data-size="<?php echo e($prod->storage_size); ?>"
                                        data-price="<?php echo e($prod->price); ?>"
                                        > Edit </button></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </tbody>
                </table>
           
		    </div> <!-- panel primary -->
                 </form>
	    </div> <!-- row -->
	</div> 

<script>
$(document).ready(function(){
    $('button').click(function(){
            console.log(" ::::");
        var id = $(this).data('id');
        var name = $(this).data('name');
        var desc =  $(this).data('desc');
        var camera = $(this).data('camera');
        var weight = $(this).data('weight');
        var size = $(this).data('size');
        var price = $(this).data('price');
        console.log(" ::::" + camera);

        $(".modal-body #product_id").val(id);
        $(".modal-body #product_name").val(name);
        $(".modal-body #product_desc").val(desc);
        $(".modal-body #cameratype").val(camera);
        $(".modal-body #weight_g").val(weight);
        $(".modal-body #storagesize_m").val(size);
        $(".modal-body #price_v").val(price);

    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>