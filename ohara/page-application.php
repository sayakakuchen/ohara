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
                            <p class="p-subMv__en">REQUIREMENTS</p>
                            <h1 class="p-subMv__ja">応募要項</h1>
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
                            <span itemprop="name">応募要項</span>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <section class="l-apply">
            <div class="p-apply">
                <div class="p-apply__inner l-inner">
                    <ul class="p-apply__links">
                        <li class="p-apply__link"><a href="#apply1">営業職</a></li>
                        <li class="p-apply__link"><a href="#apply2">製造職</a></li>
                        <li class="p-apply__link"><a href="#apply3">開発職</a></li>
                        <li class="p-apply__link"><a href="#apply4">事務職（工場）</a></li>
                        <li class="p-apply__link"><a href="#apply5">事務職（本社）</a></li>
                        <li class="p-apply__link"><a href="#apply6">配送</a></li>
                    </ul>
                    <div class="p-apply__blocks">
                        <div class="p-apply__block" id="apply1">
                            <div class="p-applyBlock">
                                <dl class="p-applyBlock__info">
                                    <dt>募集職種</dt>
                                    <dd>営業職</dd>
                                    <dt>勤務時間</dt>
                                    <dd>8：30～17:15</dd>
                                    <dt>勤務地</dt>
                                    <dd>本社（京都市上京区主税町1092）</dd>
                                    <dt>給与</dt>
                                    <dd>応相談</dd>
                                    <dt>休日</dt>
                                    <dd>完全週休2日制(土・日)、祝日、夏季休暇・年末年始休暇</dd>
                                    <dt>休暇</dt>
                                    <dd>有給休暇、産前産後休暇、介護休暇、裁判員制度休暇、ほか</dd>
                                    <dt>保険</dt>
                                    <dd>健康保険、厚生年金保険、雇用保険、労災保険</dd>
                                    <dt>諸手当</dt>
                                    <dd>家族手当、住宅手当、通勤手当、精勤手当、役職手当、特殊手当（技能による）</dd>
                                    <dt>試用期間</dt>
                                    <dd>3ヵ月</dd>
                                </dl>
                                <div class="p-applyblock__btn">
                                    <a href="<?php echo $entry; ?>" class="c-btn "> 応募フォーム <div class="c-btn__link">
                                            <div class="c-link "><span></span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="p-apply__block" id="apply2">
                            <div class="p-applyBlock">
                                <dl class="p-applyBlock__info">
                                    <dt>募集職種</dt>
                                    <dd>製造職</dd>
                                    <dt>勤務時間</dt>
                                    <dd>8：30～17:15</dd>
                                    <dt>勤務地</dt>
                                    <dd>吉祥院工場（京都市南区吉祥院前田町32）</dd>
                                    <dt>給与</dt>
                                    <dd>応相談</dd>
                                    <dt>休日</dt>
                                    <dd>完全週休2日制(土・日)、祝日、夏季休暇・年末年始休暇</dd>
                                    <dt>休暇</dt>
                                    <dd>有給休暇、産前産後休暇、介護休暇、裁判員制度休暇、ほか</dd>
                                    <dt>保険</dt>
                                    <dd>健康保険、厚生年金保険、雇用保険、労災保険</dd>
                                    <dt>諸手当</dt>
                                    <dd>家族手当、住宅手当、通勤手当、精勤手当、役職手当、特殊手当（技能による）</dd>
                                    <dt>試用期間</dt>
                                    <dd>3ヵ月</dd>
                                </dl>
                                <div class="p-applyblock__btn">
                                    <a href="<?php echo $entry; ?>" class="c-btn "> 応募フォーム <div class="c-btn__link">
                                            <div class="c-link "><span></span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="p-apply__block" id="apply3">
                            <div class="p-applyBlock">
                                <dl class="p-applyBlock__info">
                                    <dt>募集職種</dt>
                                    <dd>開発職</dd>
                                    <dt>勤務時間</dt>
                                    <dd>8：30～17:15</dd>
                                    <dt>勤務地</dt>
                                    <dd>吉祥院工場（京都市南区吉祥院前田町32）</dd>
                                    <dt>給与</dt>
                                    <dd>応相談</dd>
                                    <dt>休日</dt>
                                    <dd>完全週休2日制(土・日)、祝日、夏季休暇・年末年始休暇</dd>
                                    <dt>休暇</dt>
                                    <dd>有給休暇、産前産後休暇、介護休暇、裁判員制度休暇、ほか</dd>
                                    <dt>保険</dt>
                                    <dd>健康保険、厚生年金保険、雇用保険、労災保険</dd>
                                    <dt>諸手当</dt>
                                    <dd>家族手当、住宅手当、通勤手当、精勤手当、役職手当、特殊手当（技能による）</dd>
                                    <dt>試用期間</dt>
                                    <dd>3ヵ月</dd>
                                </dl>
                                <div class="p-applyblock__btn">
                                    <a href="<?php echo $entry; ?>" class="c-btn "> 応募フォーム <div class="c-btn__link">
                                            <div class="c-link "><span></span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="p-apply__block" id="apply4">
                            <div class="p-applyBlock">
                                <dl class="p-applyBlock__info">
                                    <dt>募集職種</dt>
                                    <dd>事務職（工場）</dd>
                                    <dt>勤務時間</dt>
                                    <dd>8：30～17:15</dd>
                                    <dt>勤務地</dt>
                                    <dd>吉祥院工場（京都市南区吉祥院前田町32）</dd>
                                    <dt>給与</dt>
                                    <dd>応相談</dd>
                                    <dt>休日</dt>
                                    <dd>完全週休2日制(土・日)、祝日、夏季休暇・年末年始休暇</dd>
                                    <dt>休暇</dt>
                                    <dd>有給休暇、産前産後休暇、介護休暇、裁判員制度休暇、ほか</dd>
                                    <dt>保険</dt>
                                    <dd>健康保険、厚生年金保険、雇用保険、労災保険</dd>
                                    <dt>諸手当</dt>
                                    <dd>家族手当、住宅手当、通勤手当、精勤手当、役職手当、特殊手当（技能による）</dd>
                                    <dt>試用期間</dt>
                                    <dd>3ヵ月</dd>
                                </dl>
                                <div class="p-applyblock__btn">
                                    <a href="<?php echo $entry; ?>" class="c-btn "> 応募フォーム <div class="c-btn__link">
                                            <div class="c-link "><span></span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="p-apply__block" id="apply5">
                            <div class="p-applyBlock">
                                <dl class="p-applyBlock__info">
                                    <dt>募集職種</dt>
                                    <dd>事務職（本社）</dd>
                                    <dt>勤務時間</dt>
                                    <dd>8：30～17:15</dd>
                                    <dt>勤務地</dt>
                                    <dd>本社（京都市上京区主税町1092）</dd>
                                    <dt>給与</dt>
                                    <dd>応相談</dd>
                                    <dt>休日</dt>
                                    <dd>完全週休2日制(土・日)、祝日、夏季休暇・年末年始休暇</dd>
                                    <dt>休暇</dt>
                                    <dd>有給休暇、産前産後休暇、介護休暇、裁判員制度休暇、ほか</dd>
                                    <dt>保険</dt>
                                    <dd>健康保険、厚生年金保険、雇用保険、労災保険</dd>
                                    <dt>諸手当</dt>
                                    <dd>家族手当、住宅手当、通勤手当、精勤手当、役職手当、特殊手当（技能による）</dd>
                                    <dt>試用期間</dt>
                                    <dd>3ヵ月</dd>
                                </dl>
                                <div class="p-applyblock__btn">
                                    <a href="<?php echo $entry; ?>" class="c-btn "> 応募フォーム <div class="c-btn__link">
                                            <div class="c-link "><span></span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="p-apply__block" id="apply6">
                            <div class="p-applyBlock">
                                <dl class="p-applyBlock__info">
                                    <dt>募集職種</dt>
                                    <dd>配送</dd>
                                    <dt>勤務時間</dt>
                                    <dd>8：30～17:15</dd>
                                    <dt>勤務地</dt>
                                    <dd>吉祥院工場（京都市南区吉祥院前田町32）</dd>
                                    <dt>主な業務</dt>
                                    <dd> ・京都市内、京阪神方面への配送業務<br> ・2tトラック、4tトラック使用<br> ・20㎏～1000㎏程の液体製品の配送<br> ・工場内の補助業務<br> 丁寧に指導致します。 </dd>
                                    <dt>給与</dt>
                                    <dd>応相談</dd>
                                    <dt>休日</dt>
                                    <dd>完全週休2日制(土・日)、祝日、夏季休暇・年末年始休暇</dd>
                                    <dt>休暇</dt>
                                    <dd>有給休暇、産前産後休暇、介護休暇、裁判員制度休暇、ほか</dd>
                                    <dt>保険</dt>
                                    <dd>健康保険、厚生年金保険、雇用保険、労災保険</dd>
                                    <dt>諸手当</dt>
                                    <dd>家族手当、住宅手当、通勤手当、精勤手当、役職手当、特殊手当（技能による）</dd>
                                    <dt>試用期間</dt>
                                    <dd>3ヵ月</dd>
                                </dl>
                                <div class="p-applyblock__btn">
                                    <a href="<?php echo $entry; ?>" class="c-btn "> 応募フォーム <div class="c-btn__link">
                                            <div class="c-link "><span></span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('./template-part/contact') ?>
    </main>
<?php get_footer(); ?>