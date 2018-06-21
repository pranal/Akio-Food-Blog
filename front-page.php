<?php  get_header() ?>

<?php

  wp_head();

?>

<h2 class="text-center pt-3 pb-3">Latest Posts</h2>

    <div class="container">
        <div class="row">
            <?php $args=array(
                'posts_per_page' => 3
            ); ?>

            <?php $entries =new WP_Query($args); while($entries->have_posts()): $entries->the_post(); ?>

                <div class="col-lg-4 entry pl-5 pr-5">
                <?php  the_post_thumbnail('entry',array('class'=>'img-fluid') );?>
                    <div class="entry-content">
                        <?php the_title('<h3>', '</h3>'); ?>
                         <p>
                         Published on: <span><?php the_time(get_option('date_format')); ?> </span>
                         </p>
                       </div>

                    <a href="<?php the_permalink()?> " class="btn btn-success"> Read more</a>

                   </div>

            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>

    <!-- <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                This is some text within a card body.

                <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
            </div>

    </div> -->

<div class="container mt-5 bg-light pt-2 pb-2 mb-5">

 <form class="form-inline" >
  <div class="form-group pull-right ml-5 pl-5">
    <label for="email">Enter the email you want to recieve the newsletter for          </label>
    <input type="email" class="form-control ml-5" id="email">
  </div>


  <button type="submit" class="btn btn-default ml-5 bg-success text-light">Submit</button>
</form>
</div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
            <?php $args=array(
                'posts_per_page' => 1
            ); ?>

            <?php $entries =new WP_Query($args); while($entries->have_posts()): $entries->the_post(); ?>
            <div class="big-title">
            <h3 class="text-center pb-3"><?php the_title(); ?></h3>
            </div>
            <?php  the_post_thumbnail('big',array('class'=>'img-fluid') );?>
            </div>


            <div class="col-lg-4">

           Side bar
            </div>

            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>









   <?php  get_footer() ?>
