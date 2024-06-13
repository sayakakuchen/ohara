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

<?php get_header(); ?>
    <main>
        <section class="l-subMv">
            <div class="p-subMv --border">
                <div class="p-subMv__inner l-inner">
                    <div class="p-subMv__wrap">
                        <hgroup class="p-subMv__title">
                            <p class="p-subMv__en">NEWS</p>
                            <h1 class="p-subMv__ja">最新情報</h1>
                        </hgroup>
                    </div>
                </div>
            </div>
        </section>
        <div class="l-breadcrumb">
            <div class="p-breadcrumb">
                <div class="p-breadcrumb__inner l-inner">
                    <ol itemscope itemtype="https://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="<?php echo $home; ?>">
                                <span itemprop="name">トップ</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <span itemprop="name">最新情報</span>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="l-topNews">
            <div class="p-topNews --white">
                <div class="p-topNews__inner l-inner">
                    <?php if (have_posts()): ?>
                    <div class="p-topNews__cards">
                        <?php while (have_posts()) : the_post(); ?>
                        <?php $terms = get_the_terms($post->ID, 'news_category'); ?>
                        <div class="p-topNews__card">
                            <a href="<?php the_permalink(); ?>" class="c-rowCard">
                                <picture class="c-rowCard__img">
                                    <?php if (has_post_thumbnail()): ?>
                                       <?php the_post_thumbnail('large'); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="アイキャッチ画像">
                                    <?php endif; ?>
                                </picture>
                                <div class="c-rowCard__content">
                                    <div class="c-rowCard__info">
                                        <time class="c-rowCard__time" datetime="<?php echo get_the_date('Y.m.d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                                        <?php  ?>
                                        <?php if($terms): ?>
                                        <ul class="c-rowCard__tags">
                                            <?php foreach( $terms as $term ): ?>
                                            <li class="c-rowCard__tag c-tag"><?php echo $term->name; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <?php endif; ?>
                                    </div>
                                    <p class="c-rowCard__title"><?php the_title(); ?></p>
                                    <div class="c-rowCard__text c-text"><?php the_excerpt(); ?></div>
                                </div>
                            </a>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                    <div class="p-topNews__navi">
                        <div class="p-pageNav">
                            <?php the_posts_pagination(
                                array(
                                    'prev_text' => '<img src="'.get_template_directory_uri().'/assets/images/common/arrow_round.svg" alt="前へ"/>',
                                    'next_text' => '<img src="'.get_template_directory_uri().'/assets/images/common/arrow_round.svg" alt="次へ"/>',
                                    'show_all' => false,
                                    'end_size' => 1,
                                    'mid_size' => 1,
                                )
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/contact'); ?>
    </main>
<?php get_footer(); ?>