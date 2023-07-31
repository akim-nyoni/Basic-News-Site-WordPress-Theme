<?php get_header(); ?>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div  class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <?php include "sidebar.php"; ?>
        </div>
        <div class="col py-3">
            <div class="row">
                
                    <?php

                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'posts_per_page' => 6,
                    );
                    
                    $newsposts = new WP_Query($args);

                    while($newsposts->have_posts()){
                        $newsposts->the_post(); 

                        ?>
                        <div class="col-md-4 mb-3">
                            <div class="form-control p-3 bg-light">
                                <img width="100%" src="https://cdn.pixabay.com/photo/2015/11/30/23/32/champagner-1071356_1280.jpg">

                                <div class="row">
                                    <div class="col-md-12"><a href="<?php the_permalink(); ?>"><b><?php the_title(); ?></b></a></div>
                        
                                    <div class="col-md-12"><?php the_taxonomies(); ?></div>
                                </div>
                                
                                     
                                <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                               
                                <a href="<?php the_permalink(); ?>">Read more</a>
                            </div>
                        </div>
                    <?php }
                    wp_reset_query();
                    ?>
                
            </div>
             <?php echo paginate_links(); ?>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>