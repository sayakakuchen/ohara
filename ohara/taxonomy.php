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
    <main>
    <section class="l-category">
            <div class="p-category">
                <div class="l-inner">
                    <div class="p-category__unit">
                        <div class="p-category__head">
                            <?php $title = get_queried_object(); ?>
                            <h2 class="p-category__title"><?php echo esc_html($title->name); ?></h2>
                        </div>
                        <?php if (have_posts()): ?>
                        <div class="p-category__columnCards">
                            <?php while (have_posts()) : the_post(); ?>
                            <?php $terms = get_the_terms($post->ID, 'column_category'); ?>
                            <?php $tags = get_the_terms($post->ID, 'column_tags'); ?>
                            <div class="p-category__columnCard">
                                <a href="<?php the_permalink(); ?>" class="c-columnCard">
                                    <div class="c-columnCard__img">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail('large'); ?>
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="アイキャッチ画像">
                                        <?php endif; ?>
                                    </div>
                                    <div class="c-columnCard__box">
                                        <div class="c-columnCard__info">
                                            <time class="c-columnCard__time" datetime="<?php echo get_the_date('Y.m.d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                                            <?php if($terms): ?>
                                            <ul class="c-columnCard__tags">
                                                <?php foreach($terms as $term): ?>
                                                <li class="c-columnCard__tag c-tag"><?php echo esc_html($term->name); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <?php endif; ?>
                                        </div>
                                        <h2 class="c-columnCard__title"><?php the_title(); ?></h2>
                                        <?php if($tags): ?>
                                        <div class="c-columnCard__tags2">
                                            <?php foreach($tags as $tag ): ?>
                                            <span class="c-columnCard__tag2">#<?php echo esc_html($tag->name); ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php else: ?>
                            <p class="c-noneText">投稿がありません。</p>
                        <?php endif; ?>
                        <div class="p-category__btn">
                            <a href="<?php echo esc_html(home_url('/column/')); ?>" class="c-btn --white">back</a>
                        </div>
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
        <?php get_template_part('./template-part/contact'); ?>
    </main>
<?php get_footer(); ?>