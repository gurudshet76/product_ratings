 
<?php $__env->startSection('content'); ?> 

     <div class="container">

			 <div class="modal fade" id="ratingsModal" tabindex="-1" role="dialog" aria-labelledby="ratingsModalLabel">
					<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title" id="ratingsModalLabel">Add ratings</h4>
								</div>
								<div class="modal-body"> <!-- modal body start -->
										<?php echo e(Form::open(array('url'=>'/addratings','class'=>'form-horizontal', 'method'=> 'POST'))); ?>

												
												<!-- Device model listing --> 
												
												<div class="control-group">
														<label for="productname" class="control-label">Product Name:</label>
														<div class="controls">
																<select name="productname" >
																	<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																			<option value="<?php echo e($prod->prod_name); ?>"><?php echo e($prod->prod_name); ?></option>
																	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
																</select>

														</div>
												</div>


												<div class="control-group">
														<label for="customername" class="control-label">Customer Name:</label>
														<div class="controls">
																<?php echo e(Form::text('customer_name', null, array('class'=>'span3', 'placeholder'=>'Name'))); ?>

														</div>
												</div> <!-- /field -->

												<div class="control-group">
														<label for="comments" class="control-label">Comments: </label>
														<div class="controls">
																<?php echo e(Form::textarea('comments', null, array('class'=>'span3', 'placeholder'=>'Comments'))); ?>

														</div>
												</div> <!-- /field -->

												<div class="control-group">
														<label for="ratings" class="control-label">Ratings:</label>
														<div class="controls">
																<div class="rate">
																		<input type="radio" id="star5" name="ratings" value="5" /><label for="star5" title="text">5 stars</label>
																		<input type="radio" id="star4" name="ratings" value="4" /><label for="star4" title="text">4 stars</label>
																		<input type="radio" id="star3" name="ratings" value="3" /><label for="star3" title="text">3 stars</label>
																		<input type="radio" id="star2" name="ratings" value="2" /><label for="star2" title="text">2 stars</label>
																		<input type="radio" id="star1" name="ratings" value="1" /><label for="star1" title="text">1 star</label>
																</div>    
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
                    <h4>Upload ratings
               
												 <div class="pull-right">
                            <form action="<?php echo e(URL::to('addratings')); ?>" class="form-horizontal" method="post">
                                <button type="button" data-toggle="modal"  data-target="#ratingsModal" 
										id="btn-admin" class="btn btn-default">
										<span class="glyphicon glyphicon-plus"></span>Add</button>
                            </form>
                        </div>
										</h4>	
                </div>
                <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="<?php echo e(URL::to('importJsonFile')); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <input type="file" name="import_file" />
                    </br>
                    <button class="btn btn-primary">Import File</button>
                </form>
            </div>
        </div>

		 		<!-- Ratings details -->
				<div class="row">
					<div class="col-sm-3">
						<div class="rating-block">
							<h4>Average user rating</h4>
							<h2 class="bold padding-bottom-7"><?php echo e($avgRatings->avgratings); ?> <small>/ 5</small></h2>
							<?php if($avgRatings->avgratings >= 1): ?>
								<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							<?php else: ?>
								<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							<?php endif; ?>
							<?php if($avgRatings->avgratings >= 2): ?>
								<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							<?php else: ?>
								<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							<?php endif; ?>
							<?php if($avgRatings->avgratings >= 3): ?>
								<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							<?php else: ?>
								<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							<?php endif; ?>
							<?php if($avgRatings->avgratings >= 4): ?>
								<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							<?php else: ?>
								<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							<?php endif; ?>
							<?php if($avgRatings->avgratings >= 5): ?>
								<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							<?php else: ?>
								<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-sm-3">
						<h4>Rating breakdown</h4>
						<div class="pull-left">
							<div class="pull-left" style="width:35px; line-height:1;">
								<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
							</div>
							<div class="pull-left" style="width:180px;">
								<div class="progress" style="height:9px; margin:8px 0;">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo e($rating5->percentage); ?>%">
									<span class="sr-only">80% Complete (danger)</span>
									</div>
								</div>
							</div>
							<div class="pull-right" style="margin-left:10px;"><?php echo e($rating5->ratings); ?></div>
						</div>
						<div class="pull-left">
							<div class="pull-left" style="width:35px; line-height:1;">
								<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
							</div>
							<div class="pull-left" style="width:180px;">
								<div class="progress" style="height:9px; margin:8px 0;">
									<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo e($rating4->percentage); ?>%">
									<span class="sr-only">80% Complete (danger)</span>
									</div>
								</div>
							</div>
							<div class="pull-right" style="margin-left:10px;"><?php echo e($rating4->ratings); ?></div>
						</div>
						<div class="pull-left">
							<div class="pull-left" style="width:35px; line-height:1;">
								<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
							</div>
							<div class="pull-left" style="width:180px;">
								<div class="progress" style="height:9px; margin:8px 0;">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo e($rating3->percentage); ?>%">
									<span class="sr-only">80% Complete (danger)</span>
									</div>
								</div>
							</div>
							<div class="pull-right" style="margin-left:10px;"><?php echo e($rating3->ratings); ?></div>
						</div>
						<div class="pull-left">
							<div class="pull-left" style="width:35px; line-height:1;">
								<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
							</div>
							<div class="pull-left" style="width:180px;">
								<div class="progress" style="height:9px; margin:8px 0;">
									<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo e($rating2->percentage); ?>%">
									<span class="sr-only">80% Complete (danger)</span>
									</div>
								</div>
							</div>
							<div class="pull-right" style="margin-left:10px;"><?php echo e($rating2->ratings); ?></div>
						</div>
						<div class="pull-left">
							<div class="pull-left" style="width:35px; line-height:1;">
								<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
							</div>
							<div class="pull-left" style="width:180px;">
								<div class="progress" style="height:9px; margin:8px 0;">
									<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo e($rating1->percentage); ?>%">
									<span class="sr-only">80% Complete (danger)</span>
									</div>
								</div>
							</div>
							<div class="pull-right" style="margin-left:10px;"><?php echo e($rating1->ratings); ?></div>
						</div>
					</div>			
				</div>			
				
				<div class="row">
					<div class="col-sm-12">
						<hr/>
						<div class="review-block">
							<?php $__currentLoopData = $ratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="row">
									<div class="col-sm-3">
										<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
										<div class="review-block-name"><a href="#"><?php echo e($rating->user_name); ?></a></div>
										<!--<div class="review-block-date">January 29, 2016<br/>1 day ago</div>-->
									</div>
									<div class="col-sm-9">
										<div class="review-block-rate">
											<?php if($rating->user_ratings >= 1): ?>
												<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
													<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												</button>
											<?php else: ?>
												<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
													<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												</button>
											<?php endif; ?>		
											<?php if($rating->user_ratings >= 2): ?>
												<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
													<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												</button>
											<?php else: ?>
												<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
													<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												</button>
											<?php endif; ?>
											<?php if($rating->user_ratings >= 3): ?>	
												<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
													<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												</button>
											<?php else: ?>
												<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
													<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												</button>
											<?php endif; ?>	
											<?php if($rating->user_ratings >= 4): ?>
												<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
													<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												</button>	
											<?php else: ?>
												<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
													<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												</button>
											<?php endif; ?>
											<?php if($rating->user_ratings >= 5): ?>		
												<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
													<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												</button>	
											<?php else: ?>
												<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
													<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
												</button>
											<?php endif; ?>
										</div>
										<div class="review-block-title"><?php echo e($rating->prod_name); ?></div>
										<div class="review-block-description"><?php echo e($rating->ratings_desc); ?></div>
									</div>
								</div>
								<hr/>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						
						</div>
					</div>
								</div> <!-- col-sm-6 -->

							
				</div>
		
    </div> <!-- /container -->
<?php $__env->stopSection(); ?>    
<?php echo $__env->make('slayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>