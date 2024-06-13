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

<div class="l-recruitCv">
    <div class="p-recruitCv">
        <div class="p-recruitCv__inner l-inner">
            <ul class="p-recruitCv__links">
                <li class="p-recruitCv__link">
                    <a href="<?php echo $application; ?>">
                        <div class="p-recruitCv__text">
                            <hgroup class="c-singleTitle">
                                <p class="c-singleTitle__sub --white"> 応募要項</p>
                                <h2 class="c-singleTitle__main --white"> REQUIREMENTS</h2>
                            </hgroup>
                        </div>
                        <div class="p-recruitCv__arrow">
                            <div class="c-link "><span></span></div>
                        </div>
                    </a>
                </li>
                <li class="p-recruitCv__link">
                    <a href="<?php echo $entry; ?>">
                        <div class="p-recruitCv__text">
                            <hgroup class="c-singleTitle">
                                <p class="c-singleTitle__sub --white"> エントリー</p>
                                <h2 class="c-singleTitle__main --white">ENTRY</h2>
                            </hgroup>
                        </div>
                        <div class="p-recruitCv__arrow">
                            <div class="c-link "><span></span></div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>