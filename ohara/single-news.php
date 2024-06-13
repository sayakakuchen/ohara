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
$recruit = esc_html(home_url('/recruit/voice/'));
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
        <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
        <?php $terms = get_the_terms($post->ID, 'news_category'); ?>
        <section class="l-single">
            <div class="p-single">
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
                        <a href="<?php echo $news; ?>" class="c-btn "> 一覧に戻る <div class="c-btn__link">
                                <div class="c-link "><span></span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php get_template_part('./template-part/contact'); ?>
    </main>
<?php get_footer(); ?>