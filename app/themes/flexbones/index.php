<?php get_header(); ?>

<div class="fl fl-row fl-wrap">
    <div class="fl fl-100 fl-20-m">
        <?php get_component('sidebar'); ?>
    </div>
    <div class="fl-100 fl-80-m">

        <?php // Loop through the Category Terms ?>
        <?php $terms = get_terms( 'category' ); ?>
        <?php foreach( $terms as $term ) : ?>

            <div class="fl fl-row fl-wrap bg-brand-grey">
                <div class="fl-100 fl-60-m m0">
                    <?php // The Term Title ?>
                    <h1 class="fs4 c-brand-navy px3 pt2 m0 fw-m" id="<?php echo strtolower( str_replace( ' ', '_', $term->name )); ?>"><?php echo $term->name; ?></h1>
                </div>
                <div class="fl-100 fl-40-m bg-brand-navy"></div>
            </div>

           
            <?php
                $args = array(
                    "post_type"      => "documentation",
                    "posts_per_page" => -1,
                    "post_status"    => "publish",
                    "order"          => 'asc',
                    "tax_query" => array(
                        array(
                            "taxonomy" => "category",
                            "field"    => "slug",
                            "terms"    => $term->name
                        )
                    )
                );

                $docs = new WP_Query($args);
            ?>

            <?php if($docs->have_posts()): while($docs->have_posts()): $docs->the_post(); ?>
                    
                <?php // Section Heading ?>
                <div class="fl fl-row fl-wrap bg-brand-grey">
                    <div class="fl-100 fl-60-m p3 m0">
                        <h2 class="fs3 fw-l m0" id="<?php echo strtolower( str_replace( ' ', '_', get_the_title() )); ?>"><span class="c-brand-blue"># </span><?php the_title(); ?></h2>
                        <p class="m0">Source: <a class="c-brand-blue" href="<?php the_field('link_to_code'); ?>"><?php the_field('link_title'); ?></a></p>
                    </div>
                    <div class="fl-100 fl-40-m bg-brand-navy"></div>
                </div>
                
                <?php if( have_rows('code') ):  while ( have_rows('code') ) : the_row(); ?>
                    
                    <div class="fl fl-row fl-wrap">
                        <div class="fl-100 fl-60-m px3 py2 bg-brand-grey">
                            <h4 class=" fs1 tt-upper mt0 c-brand-navy"><?php the_sub_field('code_title'); ?></h4>
                            <?php the_sub_field('code_rendered'); ?>
                        </div>
                        <div class="fl-100 fl-40-m px3 py2 bg-brand-navy">
                            <pre><code class="language-markup"><!--<?php the_sub_field('code_view'); ?>--></code></pre>
                        </div>
                    </div>

                <?php endwhile; endif; ?>

            <?php endwhile; endif; ?>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer(); ?>
