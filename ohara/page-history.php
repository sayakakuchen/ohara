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
                            <p class="p-subMv__en">HISTORY</p>
                            <h1 class="p-subMv__ja">歴史</h1>
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
                            <a itemprop="item" href="<?php echo $company; ?>">
                                <span itemprop="name">会社案内</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <span itemprop="name">歴史</span>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="l-history l-section">
            <div class="p-history">
                <div class="p-history__inner l-inner">
                    <dl class="p-history__info">
                        <dt><em>1926</em> <span>8月</span></dt>
                        <dd><span>8月</span>初代大原米蔵により大原パラヂウム化学研究所を創業</dd>
                        <dt><em>1931</em> <span>2月</span></dt>
                        <dd><span>2月</span>京都市上京区千本丸太町に工場建設</dd>
                        <dt><em>1936</em> <span>3月</span></dt>
                        <dd><span>3月</span>代表者が大原健蔵となる</dd>
                        <dt><em>1946</em> <span>7月</span></dt>
                        <dd><span>7月</span>京都市南区上鳥羽に工場建設　合成樹脂の乳化重合を始める</dd>
                        <dt><em>1962</em> <span>11月</span></dt>
                        <dd><span>11月</span>京都市南区吉祥院に工場新設　千丸工場・上鳥羽工場を統合</dd>
                        <dt><em>1963</em></dt>
                        <dd><span></span>特許5件成立</dd>
                        <dt><em>1965</em> <span>4月</span></dt>
                        <dd><span>4月</span>法人組織に改組、大原パラヂウム化学（株）を設立する</dd>
                        <dt><em>1968</em> <span></span></dt>
                        <dd><span></span>特許２件成立</dd>
                        <dt><em>1970</em> <span></span></dt>
                        <dd><span></span>発明功労賞受賞</dd>
                        <dt><em>1973</em> <span></span></dt>
                        <dd><span></span>特許２件成立</dd>
                        <dt><em>1975</em> <span></span></dt>
                        <dd><span></span>創立５０周年を迎える</dd>
                        <dt class="--none"><em>1975</em> <span>9月</span></dt>
                        <dd><span>9月</span>吉祥院工場内に化学研究所を建設</dd>
                        <dt><em>1976</em> <span></span></dt>
                        <dd><span></span>特許１件成立</dd>
                        <dt><em>1977</em> <span>1月</span></dt>
                        <dd><span>1月</span>京都市南区上鳥羽に倉庫を建設</dd>
                        <dt><em>1979</em> <span>5月</span></dt>
                        <dd><span>5月</span>京都市上京区千本丸太町に新社屋建設</dd>
                        <dt><em>1984</em> <span>1月</span></dt>
                        <dd><span>1月</span>大原八十八社長就任</dd>
                        <dt class="--none"><em>1984</em> <span>12月</span></dt>
                        <dd><span>12月</span>京都市南区上鳥羽に工場新設</dd>
                        <dt><em>1987</em> <span>4月</span></dt>
                        <dd><span>4月</span>米国特許2件成立</dd>
                        <dt><em>1990</em> <span>4月</span></dt>
                        <dd><span>4月</span>上鳥羽工場内に立体自動倉庫を建設</dd>
                        <dt><em>1992</em> <span>4月</span></dt>
                        <dd><span>4月</span>関東駐在所を開設</dd>
                        <dt><em>1996</em> <span>3月</span></dt>
                        <dd><span>3月</span>中国山東省・青島に青島大原化学有限公司を独資で設立</dd>
                        <dt><em>2000</em> <span>4月</span></dt>
                        <dd><span>4月</span>京都市南区に上鳥羽第2工場を建設</dd>
                        <dt><em>2011</em> <span>6月</span></dt>
                        <dd><span>6月</span>大原一浩社長就任。</dd>
                        <dt><em>2012</em> <span></span></dt>
                        <dd><span></span>特許1件成立/商標1件登録</dd>
                        <dt><em>2014</em> <span></span></dt>
                        <dd><span></span>商標1件登録</dd>
                        <dt><em>2015</em> <span>7月</span></dt>
                        <dd><span>7月</span>京都大学PCp/MOFの検討開始</dd>
                        <dt><em>2016</em> <span></span></dt>
                        <dd><span></span>特許1件成立</dd>
                        <dt><em>2020</em> <span></span></dt>
                        <dd><span></span>特許1件成立</dd>
                        <dt class="--none"><em>2020</em> <span>4月</span></dt>
                        <dd><span>4月</span>戦略的基盤技術高度化支援事業(サポイン事業)にてPCP/MOF製剤化の研究開発開始</dd>
                        <dt><em>2021</em> <span></span></dt>
                        <dd><span></span>特許1件成立/商標5件登録</dd>
                        <dt><em>2023</em> <span></span></dt>
                        <dd><span></span>特許4件成立</dd>
                        <dt class="--none"><em>2023</em> <span>4月</span></dt>
                        <dd><span>4月</span>ブランド名b.caveとして事業化(特許取得)</dd>
                    </dl>
                    <picture class="p-history__img1">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/history_01.webp" type="image/webp" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/history_01.png" alt="イラスト1">
                    </picture>
                    <picture class="p-history__img2">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/history_02.webp" type="image/webp" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/history_02.png" alt="イラスト2">
                    </picture>
                    <picture class="p-history__img3">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/history_03.webp" type="image/webp" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/history_03.png" alt="イラスト3">
                    </picture>
                    <picture class="p-history__img4">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/company/history_04.webp" type="image/webp" />
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/history_04.png" alt="イラスト4">
                    </picture>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/contact'); ?>
    </main>
<?php get_footer(); ?>