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
            <div class="p-subMv ">
                <div class="p-subMv__inner l-inner">
                    <div class="p-subMv__wrap">
                        <hgroup class="p-subMv__title">
                            <p class="p-subMv__en">MESSAGE</p>
                            <h1 class="p-subMv__ja">メッセージ</h1>
                        </hgroup>
                        <picture class="p-subMv__img">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/subMv_company.webp" type="image/webp" />
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/subMv_company.png" alt="ファーストビュー">
                        </picture>
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
                            <a itemprop="item" href="<?php echo $service; ?>">
                                <span itemprop="name">会社案内</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <span itemprop="name">メッセージ</span>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="l-message l-section">
            <div class="p-message">
                <div class="p-message__inner l-inner">
                    <picture class="p-message__img">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/message.webp" type="image/webp" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/message.jpg" alt="代表者からのご挨拶 ">
                    </picture>
                    <div class="p-message__box">
                        <h3 class="p-message__title">
                            <hgroup class="c-columnTitle">
                                <h3 class="c-columnTitle__main">代表者からのご挨拶 </h3>
                                <p class="c-columnTitle__sub">Message</p>
                            </hgroup>
                        </h3>
                        <div class="p-message__text c-text">
                            <p> 弊社は『快適住空間の創造』をミッションに掲げ、人の快適、地球の快適等それぞれの テーマに取り組み、考え続けています。創業時よりの特徴である「小回りの利く開発」 「自由なコミュニケーション環境」そして「産学を通じての社外との連携」を更に 進化させ、オンリーワン企業を日々目指しています。 </p>
                            <p> 現在は「Sustainable ECO Finish」を中核ブランドに据え、環境に配慮したサステナブルな 製品の拡充に注力しています。エジプトの砂漠緑化プロジェクトへの参加や、2023年より本格始動したPCP/MOFの実用化による瞬間消臭技術での環境快適化プロジェクトも進み、祖業である繊維加工剤や、ストレス軽減に一役を担う水系ポリウレタン接着剤等に加えこれまでの当社にはない新たなビジネスモデルを創出します。 </p>
                            <p> 未来への大原パラヂウム化学の創造力にご期待下さい。 </p>
                        </div>
                        <div class="p-message__name">
                            <span>代表取締役</span> 大原　一浩
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/contact') ?>
    </main>
<?php get_footer(); ?>