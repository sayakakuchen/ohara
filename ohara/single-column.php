<?php 

$home = esc_html(home_url());
$news = esc_html(home_url('/news/'));
$company = esc_html(home_url('/company/'));
$message = esc_html(home_url('/company/message/'));
$mission = esc_html(home_url('/company/mission/'));
$about = esc_html(home_url('/company/about/'));
$history = esc_html(home_url('/company/history/'));
$office = esc_html(home_url('/company/office/'));
$service = esc_html(home_url('/service/'));
$textile = esc_html(home_url('/service/textile-processing/'));
$pcp = esc_html(home_url('/service/pcp-mof/'));
$sustainability = esc_html(home_url('/sustainability/'));
$study = esc_html(home_url('/study/'));
$recruit = esc_html(home_url('/recruit/'));
$manufact = esc_html(home_url('/recruit/manufacturing/'));
$technology = esc_html(home_url('/recruit/technology-development/'));
$sales = esc_html(home_url('/recruit/sales/'));
$office_work = esc_html(home_url('/recruit/office-work/'));
$voice = esc_html(home_url('/recruit/voice/'));
$application = esc_html(home_url('/recruit/application/'));
$entry = esc_html(home_url('/recruit/entry/'));
$column = esc_html(home_url('/column/'));
$contact = esc_html(home_url('/contact/'));
$sitemap = esc_html(home_url('/sitemap/'));

?>

<?php get_header('column'); ?>
    <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php $terms = get_the_terms($post->ID, 'column_category'); ?>
    <main>
        <section class="l-single">
            <div class="p-single --column">
                <div class="p-single__inner l-inner">
                    <div class="p-single__info">
                        <time class="p-single__time" datetime="<?php echo get_the_date('Y.m.d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                        <?php if($terms): ?>
                        <ul class="p-single__cats">
                            <?php foreach( $terms as $term ): ?>
                            <li class="p-single__cat c-tag"><?php echo $term->name; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    <h1 class="p-single__title"><?php the_title(); ?></h1>
                    <div class="p-single__thumbnail">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="p-single__content">
                        <?php the_content(); ?>
                    </div>
                    <div class="p-single__btn">
                        <a href="<?php echo $column; ?>" class="c-btn "> 一覧に戻る <div class="c-btn__link">
                                <div class="c-link "><span></span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="l-tagList">
            <div class="p-tagList">
                <div class="p-tagList__inner l-inner">
                    <div class="p-tagList__head">
                        <h2 class="p-tagList__title">タグ一覧</h2>
                    </div>
                    <?php 
                    $terms = get_terms( array(
                        'taxonomy' => 'column_tags',
                        'hide_empty' => false, 
                    ) );
                    if(!empty($terms)):
                    ?>
                    <div class="p-tagList__tags">
                        <?php foreach ( $terms as $term ): ?>
                        <div class="p-tagList__tag">
                            <div class="c-tagList">
                                <a href="<?php echo esc_url( get_term_link( $term )); ?>">#<?php echo esc_html($term->name) ;?></a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/contact') ?>
    </main>
    <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>