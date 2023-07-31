<?php get_header(); ?>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div  class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <?php include "sidebar.php"; ?>
        </div>
        <div class="col py-3">
            <div class="row">
                
                    <?php

                    while(have_posts()){
                        the_post(); 

                        ?>
                        <div class="mb-3">
                            <div class="form-control p-3 bg-light">
                                <div class="row">
                                    <div class="col">
                                        <img width="100%" src="https://cdn.pixabay.com/photo/2015/11/30/23/32/champagner-1071356_1280.jpg">
                                        <div class="row">
                                            <div class="col-md-12"><b><?php the_title(); ?></b></div>
                                
                                            <div class="col-md-12"><?php the_taxonomies(); ?></div>
                                        </div>
                                             
                                        <?php 
                                            the_content();
                                         ?>
                                         <div><b>Comments:</b></div>
                                         <div>
                                             <?php 
                                                $args = array(
                                                    'number' => '5',
                                                    'post_id' => $post->ID
                                                );
                                                $comments = get_comments($args);
                                                foreach($comments as $comment) : ?>
                                                    <div class="mb-3 col-md-12 background-comments">
                                                        <div class="container-profile-template">
                                                            <div class="profile-template"><i class="fa fa-user" aria-hidden="true"></i></div>&nbsp;<b><?php 
                                                            echo $comment->comment_author; ?> </b>
                                                        </div>
                                                            <?php echo $comment->comment_content;
                                                         ?>
                                                    </div>
                                            <?php 
                                                endforeach;
                                            ?>
                                         </div>
                                    </div>
                                    <div class="col-md-3">
                                        <?php comment_form(); ?>
                                    </div>
                               </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                
            </div>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>