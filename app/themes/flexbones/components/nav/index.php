<?php
    $args = array(
        "post_type"      => "documentation",
        "posts_per_page" => -1,
        "post_status"    => "publish",
        "order"          => 'asc'
    );

    $nav = new WP_Query($args);
    $terms = get_terms( 'category' );
?>

<nav class="sidebar__nav">
    <?php foreach( $terms as $term ) : ?>
        <?php $term_anchor = strtolower( str_replace( ' ', '-', $term->name ) ); ?>
        <h2 id="<?php echo $term_anchor; ?>" class="fs2 c-white m0"><?php echo $term->name; ?></h2>
        <ul class="list">
            <?php if($nav->have_posts()): while($nav->have_posts()): $nav->the_post(); ?>
                <?php $title_anchor = strtolower( str_replace( ' ', '_', get_the_title() ) ); ?>
                <li><a class="c-brand-blue" href="#<?php echo $title_anchor; ?>"><?php the_title(); ?></a></li>
            <?php endwhile; endif; ?>
        </ul>
    <?php endforeach; ?>
</nav>