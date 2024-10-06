 <?php 
						if(have_posts()):

                        while(have_posts()): the_post();
                        ?>
                            <div class="col-md-4 col-sm-6">
							<div class="single-service-item">
								<div class="single-service-icon">
									<i class="flaticon-car-repair"></i>
								</div>
								<?php
								if(has_post_thumbnail()){
									the_post_thumbnail('thumbnail',array('class' => 'picc'));
								}
								else{
									?>
									<div class="picc ">
										<img src="<?php echo get_theme_file_uri('assets/images/featured-cars/fc4.png')?>; " alt="cars">
									</div>
									<?php
								}
								 ?>
								<h2><a href="#"><?php the_title(); ?></a></h2>
								<p>
									<?php the_content(); ?>  
								</p>
								 <a class="welcome-btn new-cars-btn" href="<?php the_permalink(); ?>">view details</a>
							</div>
						</div>
                        <?php
                        endwhile;
						endif;
                        
                        ?>