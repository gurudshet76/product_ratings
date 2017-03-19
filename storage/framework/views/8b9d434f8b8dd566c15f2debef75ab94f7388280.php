 
<?php $__env->startSection('content'); ?> 

     
		 		<!-- Ratings details -->
				<div class="row">
					<div class="col-sm-3">
						<div class="rating-block">
							<h4>Average user rating</h4>
							<?php if($avgRatings->avgratings <= 0): ?>
								<h2 class="bold padding-bottom-7">0 <small>/ 5</small></h2>
							<?php else: ?>
								<h2 class="bold padding-bottom-7"><?php echo e($avgRatings->avgratings); ?> <small>/ 5</small></h2>
							<?php endif; ?>

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
<?php echo $__env->make('vlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>