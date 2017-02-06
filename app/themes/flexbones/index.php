<?php get_header(); ?>

<div class="g  g--no-gutter  g--no-gutter--m  g--no-gutter--l">
    <div class="gi--1-1  gi--2-12--m">
        <?php get_component('sidebar'); ?>
    </div>
    <div class="gi--1-1  gi--10-12--m">

        <?php // Loop through the Category Terms ?>
        <?php $terms = get_terms( 'category' ); ?>
        <?php foreach( $terms as $term ) : ?>
            <?php // The Term Title ?>
            <h1 id="<?php echo str_replace( ' ', '_', $term->name ); ?>" class="fs5 bg-brand-blue c-brand-red p3 m0"><?php echo $term->name; ?></h1>

            <?php
                $args = array(
                    "post_type"      => "documentation",
                    "posts_per_page" => -1,
                    "post_status"    => "publish",
                    "order"          => 'asc'
                );

                $docs = new WP_Query($args);
            ?>

            <?php if($docs->have_posts()): while($docs->have_posts()): $docs->the_post(); ?>
                    
                <?php // Section Heading ?>
                <div class="fl fl-row fl-wrap bd-t bd-grey">
                    <div class="fl-100 fl-50-m bg-white bg-lighten-1 p3 m0">
                        <h2 id="<?php echo str_replace( ' ', '_', get_the_title() ); ?>" class="fs4 fw-l m0"><span class="c-brand-red"># </span><?php the_title(); ?></h2>
                        <p class="m0">Source: <a class="c-brand-red" href="<?php the_field('link_to_code'); ?>"><?php the_field('link_title'); ?></a></p>
                    </div>
                    <div class="fl-100 fl-50-m bg-brand-grey"></div>
                </div>
                
                <?php if( have_rows('code') ):  while ( have_rows('code') ) : the_row(); ?>
                    
                    <div class="fl fl-row fl-wrap ">
                        <div class="fl-100 fl-50-m p4">
                            <?php the_sub_field('code_rendered'); ?>
                        </div>
                        <div class="fl-100 fl-50-m p4 bg-brand-grey">
                            <pre><code class="language-markup"><!--<?php the_sub_field('code_view'); ?>--></code></pre>
                        </div>
                    </div>

                <?php endwhile; endif; ?>

            <?php endwhile; endif; ?>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer(); ?>
