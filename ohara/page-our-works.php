<?php
/*
Template Name: 私たちの働き方
*/
?>

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
                            <p class="p-subMv__en">OUR WORKS</p>
                            <h1 class="p-subMv__ja">私たちの働き方</h1>
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
                            <a itemprop="item" href="<?php echo $recruit; ?>">
                                <span itemprop="name">採用情報</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <span itemprop="name">私たちの働き方</span>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="l-jobNav">
            <div class="p-jobNav">
                <div class="p-jobNav__inner l-inner">
                    <?php $current_slug = get_post_field( 'post_name', get_post() ); ?>
                    <ul class="p-jobNav__links">
                        <li class="p-jobNav__link <?php if ( $current_slug === 'manufacturing' ): ?> is-active<?php endif; ?>">
                            <a href="<?php echo $manufact; ?>">
                                <span>01</span>
                                <p>製造職</p>
                            </a>
                        </li>
                        <li class="p-jobNav__link <?php if ( $current_slug === 'technology-development' ): ?> is-active<?php endif; ?>">
                            <a href="<?php echo $technology; ?>">
                                <span>02</span>
                                <p>技術開発職</p>
                            </a>
                        </li>
                        <li class="p-jobNav__link <?php if ( $current_slug === 'sales' ): ?> is-active<?php endif; ?>">
                            <a href="<?php echo $sales; ?>">
                                <span>03</span>
                                <p>営業職</p>
                            </a>
                        </li>
                        <li class="p-jobNav__link <?php if ( $current_slug === 'office-work' ): ?> is-active<?php endif; ?>">
                            <a href="<?php echo $office_work; ?>">
                                <span>04</span>
                                <p>事務職<small>（本社・工場） </small></p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="l-job">
            <div class="p-job">
                <div class="p-job__inner l-inner">
                    <h2 class="p-job__title"><?php the_title(); ?></h2>
                    <div class="p-job__wrap">
                        <div class="p-job__content">
                            <p class="p-job__bigText"><?php the_field('lead'); ?></p>
                            <p class="p-job__text c-text"><?php the_field('text'); ?></p>
                        </div>
                        <picture class="p-job__img">
                            <img src="<?php the_field('img'); ?>" alt="仕事のようす">
                        </picture>
                    </div>
                    <div class="p-job__info">
                        <div class="p-job__list">
                            <div class="p-jobList">
                                <h3 class="p-jobList__title c-iconTitle">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/icon_feature.svg" alt="アイコン"> 特徴
                                </h3>
                                <?php if(have_rows('feature')): ?>
                                <ul class="p-jobList__lists">
                                    <?php while(have_rows('feature')): the_row(); ?>
                                    <li class="p-jobList__list"><?php the_sub_field('feature_text'); ?></li>
                                    <?php endwhile; ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="p-job__list">
                            <div class="p-jobList">
                                <h3 class="p-jobList__title c-iconTitle">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/icon_job.svg" alt="アイコン"> 主な業務内容
                                </h3>
                                <?php if(have_rows('job')): ?>
                                <ul class="p-jobList__lists">
                                    <?php while(have_rows('job')): the_row(); ?>
                                    <li class="p-jobList__list"><?php the_sub_field('job_text'); ?></li>
                                    <?php endwhile; ?>
                                </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="p-job__flow">
                            <div class="p-flow">
                                <h3 class="p-flow__title c-iconTitle --center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruit/icon_flow.svg" alt="アイコン"> 一日の流れ
                                </h3>
                                <ul class="p-flow__lists">
                                    <li class="p-flow__list">
                                        <picture class="p-flow__img">
                                            <img src="<?php echo get_field('flow_1')['img1']; ?>" alt="1日の流れ">
                                        </picture>
                                        <p class="p-flow__text c-text"><?php echo get_field('flow_1')['text1']; ?></p>
                                    </li>
                                    <li class="p-flow__list">
                                        <picture class="p-flow__img">
                                            <img src="<?php echo get_field('flow_2')['img2']; ?>" alt="1日の流れ">
                                        </picture>
                                        <p class="p-flow__text c-text"><?php echo get_field('flow_2')['text2']; ?></p>
                                    </li>
                                    <li class="p-flow__list">
                                        <picture class="p-flow__img">
                                            <img src="<?php echo get_field('flow_3')['img3']; ?>" alt="1日の流れ">
                                        </picture>
                                        <p class="p-flow__text c-text"><?php echo get_field('flow_3')['text3']; ?></p>
                                    </li>
                                    <li class="p-flow__list">
                                        <picture class="p-flow__img">
                                            <img src="<?php echo get_field('flow_4')['img4']; ?>" alt="1日の流れ">
                                        </picture>
                                        <p class="p-flow__text c-text"><?php echo get_field('flow_4')['text4']; ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/cv') ?>
    </main>
<?php get_footer(); ?>