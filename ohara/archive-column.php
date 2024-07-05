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
        <section class="l-pickup">
            <div class="p-pickup">
                <div class="p-pickup__inner l-inner">
                    <?php
                     $args = array(
                        'post_type' => 'column',
                        'meta_query' => array(
                            array(
                                'key' => 'pickup',
                                'value' => '1',
                                'compare' => '=='
                            )
                        )
                      );
                    $the_query = new WP_Query($args); if($the_query->have_posts()):
                    ?>
                    <div class="p-pickup__cards js-pickup-slider">
                        <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                        <?php $terms = get_the_terms($post->ID, 'column_category'); ?>
                        <?php $tags = get_the_terms($post->ID, 'column_tags'); ?>
                        <div class="p-pickup__card">
                            <div class="c-pickupCard">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="c-pickupCard__img">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail('large'); ?>
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="アイキャッチ画像">
                                        <?php endif; ?>
                                    </div>
                                    <div class="c-pickupCard__box">
                                        <div class="c-pickupCard__info">
                                            <time class="c-pickupCard__time" datetime="<?php echo get_the_date('Y.m.d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                                            <?php if($terms): ?>
                                            <ul class="c-pickupCard__tags">
                                                <?php foreach($terms as $term): ?>
                                                <li class="c-pickupCard__tag c-tag c-tag--black"><?php echo esc_html($term->name); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <?php endif; ?>
                                        </div>
                                        <h2 class="c-pickupCard__title"><?php the_title(); ?></h2>
                                        <div class="c-pickupCard__text u-desktop"><?php the_excerpt(); ?></div>
                                        <?php if($tags): ?>
                                        <div class="c-pickupCard__tags2">
                                            <?php foreach($tags as $tag): ?>
                                            <span class="c-pickupCard__tag2">#<?php echo esc_html($tag->name); ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <?php else: ?>
                        <p class="c-nontText">該当の投稿がありません。</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="l-category">
            <div class="p-category">
                <div class="l-inner">
                    <div class="p-category__company" id="company">
                        <div class="p-category__head">
                            <h2 class="p-category__title">company</h2>
                        </div>
                        <?php
                            $args = array(
                                'post_type' => 'column', 
                                'posts_per_page' => 3,
                                'tax_query' => array(
                                array(
                                    'taxonomy' => 'column_category', 
                                    'field' => 'slug',
                                    'terms' => 'company', 
                                )
                                )
                            );
                            $the_query = new WP_Query($args); if($the_query->have_posts()):
                        ?>
                        <div class="p-category__columnCards">
                            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
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
                                                <ul class="c-columnCard__cats">
                                                    <?php foreach( $terms as $term ): ?>
                                                    <li class="c-columnCard__cat c-tag"><?php echo $term->name; ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </div>
                                        <h2 class="c-columnCard__title"><?php the_title(); ?></h2>
                                        <?php if($tags): ?>
                                        <div class="c-columnCard__tags2">
                                            <?php foreach( $tags as $tag ): ?>
                                            <span class="c-columnCard__tag2">#<?php echo esc_html($tag->name); ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                        <?php else: ?>
                            <p class="c-noneText">記事がありません。</p>
                        <?php endif; ?>
                        <div class="p-category__btn">
                            <a href="<?php echo esc_html(home_url('/column_category/company/')) ?>" class="c-btn --white">more</a>
                        </div>
                    </div>
                    <div class="p-category__chemistry" id="chemistry">
                        <div class="p-category__head">
                            <h2 class="p-category__title">chemistry</h2>
                        </div>
                        <?php
                            $args = array(
                                'post_type' => 'column', 
                                'posts_per_page' => 3,
                                'tax_query' => array(
                                array(
                                    'taxonomy' => 'column_category', 
                                    'field' => 'slug',
                                    'terms' => 'chemistry', 
                                )
                                )
                            );
                            $the_query = new WP_Query($args); if($the_query->have_posts()):
                        ?>
                        <div class="p-category__columnCards">
                            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
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
                                                <ul class="c-columnCard__cats">
                                                    <?php foreach( $terms as $term ): ?>
                                                    <li class="c-columnCard__cat c-tag"><?php echo $term->name; ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </div>
                                        <h2 class="c-columnCard__title"><?php the_title(); ?></h2>
                                        <?php if($tags): ?>
                                        <div class="c-columnCard__tags2">
                                            <?php foreach( $tags as $tag ): ?>
                                            <span class="c-columnCard__tag2">#<?php echo esc_html($tag->name); ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                        <?php else: ?>
                            <p class="c-noneText">記事がありません。</p>
                        <?php endif; ?>
                        <div class="p-category__btn">
                            <a href="<?php echo esc_html(home_url('/column_category/chemistry/')) ?>" class="c-btn --white">more</a>
                        </div>
                    </div>
                    <div class="p-category__fashion" id="fashion">
                        <div class="p-category__head">
                            <h2 class="p-category__title">fashion</h2>
                        </div>
                        <?php
                            $args = array(
                                'post_type' => 'column', 
                                'posts_per_page' => 3,
                                'tax_query' => array(
                                array(
                                    'taxonomy' => 'column_category', 
                                    'field' => 'slug',
                                    'terms' => 'fashion', 
                                )
                                )
                            );
                            $the_query = new WP_Query($args); if($the_query->have_posts()):
                        ?>
                        <div class="p-category__columnCards">
                            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
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
                                                <ul class="c-columnCard__cats">
                                                    <?php foreach( $terms as $term ): ?>
                                                    <li class="c-columnCard__cat c-tag"><?php echo $term->name; ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </div>
                                        <h2 class="c-columnCard__title"><?php the_title(); ?></h2>
                                        <?php if($tags): ?>
                                        <div class="c-columnCard__tags2">
                                            <?php foreach( $tags as $tag ): ?>
                                            <span class="c-columnCard__tag2">#<?php echo esc_html($tag->name); ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                        <?php else: ?>
                            <p class="c-noneText">記事がありません。</p>
                        <?php endif; ?>
                        <div class="p-category__btn">
                            <a href="<?php echo esc_html(home_url('/column_category/fashion/')) ?>" class="c-btn --white">more</a>
                        </div>
                    </div>
                    <div class="p-category__developmentStory" id="development-story">
                        <div class="p-category__head">
                            <h2 class="p-category__title">development story</h2>
                        </div>
                        <?php
                            $args = array(
                                'post_type' => 'column', 
                                'posts_per_page' => 3,
                                'tax_query' => array(
                                array(
                                    'taxonomy' => 'column_category', 
                                    'field' => 'slug',
                                    'terms' => 'development-story', 
                                )
                                )
                            );
                            $the_query = new WP_Query($args); if($the_query->have_posts()):
                        ?>
                        <div class="p-category__columnCards">
                            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
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
                                                <ul class="c-columnCard__cats">
                                                    <?php foreach( $terms as $term ): ?>
                                                    <li class="c-columnCard__cat c-tag"><?php echo $term->name; ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </div>
                                        <h2 class="c-columnCard__title"><?php the_title(); ?></h2>
                                        <?php if($tags): ?>
                                        <div class="c-columnCard__tags2">
                                            <?php foreach( $tags as $tag ): ?>
                                            <span class="c-columnCard__tag2">#<?php echo esc_html($tag->name); ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                        <?php else: ?>
                            <p class="c-noneText">記事がありません。</p>
                        <?php endif; ?>
                        <div class="p-category__btn">
                            <a href="<?php echo esc_html(home_url('/column_category/development-story/')) ?>" class="c-btn --white">more</a>
                        </div>
                    </div>
                    <div class="p-category__sustainable" id="sustainable">
                        <div class="p-category__head">
                            <h2 class="p-category__title">sustainable</h2>
                        </div>
                        <?php
                            $args = array(
                                'post_type' => 'column', 
                                'posts_per_page' => 3,
                                'tax_query' => array(
                                array(
                                    'taxonomy' => 'column_category', 
                                    'field' => 'slug',
                                    'terms' => 'sustainable', 
                                )
                                )
                            );
                            $the_query = new WP_Query($args); if($the_query->have_posts()):
                        ?>
                        <div class="p-category__columnCards">
                            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
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
                                                <ul class="c-columnCard__cats">
                                                    <?php foreach( $terms as $term ): ?>
                                                    <li class="c-columnCard__cat c-tag"><?php echo $term->name; ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </div>
                                        <h2 class="c-columnCard__title"><?php the_title(); ?></h2>
                                        <?php if($tags): ?>
                                        <div class="c-columnCard__tags2">
                                            <?php foreach( $tags as $tag ): ?>
                                            <span class="c-columnCard__tag2">#<?php echo esc_html($tag->name); ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                        <?php else: ?>
                            <p class="c-noneText">記事がありません。</p>
                        <?php endif; ?>
                        <div class="p-category__btn">
                            <a href="<?php echo esc_html(home_url('/column_category/sustainable/')) ?>" class="c-btn --white">more</a>
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
        <?php get_template_part('./template-part/contact') ?>
        <div class="l-column-modal">
            <div class="p-column-modal">
                <div class="p-column-modal__content">
                    <button class="p-column-modal__close js-column-modal-close">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/column/close.png" alt="閉じる">
                    </button>
                    <div class="p-column-modal__logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/column/kaiteki.svg" alt="kaiteki">
                    </div>
                    <p class="p-column-modal__text"> 「世の中の不快を少しでも快適にしたい」と奮闘する企業の製品や<br class="u-mobile"> 取組のこと、そしてそこで働く社員のこと。​<br> そして、化学業界、アパレル業界、最新のサステナ情報など。​<br class="u-mobile"> KAITEKIな生活を送るためのちょっとした「情報」をみなさんに。​ </p>
                </div>
                <div class="p-column-modal__bg js-column-modal-close"></div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>