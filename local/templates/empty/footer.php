<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
<div class="sticky-push"></div>
</div>

<footer>
    <div class="sticky-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <address>
                        <? $APPLICATION->IncludeFile(
                            SITE_DIR . "/include/phone2.php",
                            array(),
                            array(
                                "MODE" => "HTML"
                            )
                        ) ?>

                        <? $APPLICATION->IncludeFile(
                            SITE_DIR . "/include/address.php",
                            array(),
                            array(
                                "MODE" => "HTML"
                            )
                        ) ?>

                    </address>
                </div>

                <div class="col-md-4 col-md-push-4">
                    <div class="copyright">
                        Данный шаблон предоставлен компанией<br/>© <a href="http://www.intervolga.ru">ИНТЕРВОЛГА</a> для
                        Академии 1С-Битрикс
                    </div>
                </div>

                <div class="col-md-4 col-md-pull-4 hidden-print">
                    <ul class="list-inline social-links">
                        <? $APPLICATION->IncludeFile(
                            SITE_DIR . "/include/social-links.php",
                            array(),
                            array(
                                "MODE" => "HTML"
                            )
                        ) ?>

                        <li>
                            <div id="bx-composite-banner"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--ОБЯЗАТЕЛЬНО ПОДКЛЮЧИТЕ ЭТИ СКРИПТЫ И СТИЛИ-->
<?php
//<!--ОБЯЗАТЕЛЬНО ПОДКЛЮЧИТЕ ЭТИ СКРИПТЫ И СТИЛИ-->
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/jquery.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/bootstrap/collapse.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/bootstrap/tooltip.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/plugins.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/jquery.touchSwipe.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/jquery.ba-throttle-debounce.min.js');

///<!--Уникальные JS для данной страницы-->
///<!--ОБЯЗАТЕЛЬНО ПОДКЛЮЧИТЕ ЭТИ СКРИПТЫ И СТИЛИ-->
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/main.js');


//<!--Слайдер -->
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/cookesHelp.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/bootstrap-switch.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/vendor/jquery.carouFredSel-packed.js');
?>
<!--<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/bootstrap/collapse.js"></script>
<script src="js/vendor/bootstrap/tooltip.js"></script>
<script src="js/vendor/plugins.js"></script>
<script src="js/vendor/jquery.touchSwipe.js"></script>
<script src="js/vendor/jquery.ba-throttle-debounce.min.js"></script>-->

<!--Уникальные JS для данной страницы-->

<!--ОБЯЗАТЕЛЬНО ПОДКЛЮЧИТЕ ЭТИ СКРИПТЫ И СТИЛИ-->
<!--<script src="js/main.js"></script>-->

<!--Слайдер -->
<?php /*
<script src="<?= SITE_TEMPLATE_PATH ?>/js/vendor/cookesHelp.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/vendor/bootstrap-switch.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/vendor/jquery.carouFredSel-packed.js"></script>
*/ ?>

</body>
</html>