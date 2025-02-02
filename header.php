<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

global $isIndex;
$isIndex = $APPLICATION->GetCurPage(false) === '/';

$isShowTitle = true;
if(CSite::InDir('/application/index.php')){
    $isShowTitle = false;
}
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
	<html itemscope itemtype="https://schema.org/FAQPage"><head>

        <title><?=$APPLICATION->ShowTitle();?></title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="preconnect" href="https://www.googletagmanager.com/" />
	<link rel="preconnect" href="https://www.google-analytics.com/" />
	<link rel="preconnect" href="https://mc.yandex.ru/" />
        <meta name="yandex-verification" content="5120eea68c98abc2"/>
        <meta name="mailru-domain" content="byEeJ3PJlct84JZA"/>
        <meta name="yandex-verification" content="5120eea68c98abc2"/>
        <meta name="google-site-verification" content="bvyabdvTmagukRg1KMxBxHi9lS0Vxj8-pK4b6aRCSJ0"/>
        <meta name="yandex-verification" content="70df0036d92cfc44"/>
        <meta name="wmail-verification" content="e68c86d5188809f9"/>

        <link rel="shortcut icon" href="/favicon.png"/>

        <?
            CJSCore::Init(['jquery2']);
            $asset = \Bitrix\Main\Page\Asset::getInstance();

            // Libs
			//$asset->addCss("https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic-ext");
            $asset->addCss(SITE_TEMPLATE_PATH."/public/libs/jquery.fancybox.min.css");
            $asset->addCss(SITE_TEMPLATE_PATH."/public/libs/slick/slick.css");
            $asset->addCss(SITE_TEMPLATE_PATH."/public/libs/slick/slick-theme.css");
            $asset->addJs(SITE_TEMPLATE_PATH."/public/libs/jquery.fancybox.min.js");
            $asset->addJs(SITE_TEMPLATE_PATH."/public/libs/jquery.maskedinput.min.js");
            $asset->addJs(SITE_TEMPLATE_PATH."/public/libs/slick/slick.min.js");
            $asset->addJs(SITE_TEMPLATE_PATH."/public/libs/jquery.mixitup.min.js");
            $asset->addJs(SITE_TEMPLATE_PATH."/public/libs/select.js");
            $asset->addJs(SITE_TEMPLATE_PATH."/public/libs/headroom.js");
            $asset->addJs(SITE_TEMPLATE_PATH."/public/libs/jquery.validate.min.js");
            $asset->addJs(SITE_TEMPLATE_PATH."/public/libs/jquery.formstyler.min.js");

            $asset->addJs(SITE_TEMPLATE_PATH."/public/libs/lazysizes.min.js");

            $asset->addCss(SITE_TEMPLATE_PATH."/public/css/loader.css");
            $asset->addCss(SITE_TEMPLATE_PATH."/public/css/style.css");
            $asset->addCss(SITE_TEMPLATE_PATH."/public/css/custom.css");

            $asset->addJs(SITE_TEMPLATE_PATH."/public/js/scripts.js");
            $asset->addJs(SITE_TEMPLATE_PATH."/public/js/custom.js");
        ?>
        
		<?
			$APPLICATION->ShowMeta("keywords");
			$APPLICATION->ShowMeta("description");
			$APPLICATION->ShowCSS();
			$APPLICATION->ShowHeadStrings();
			$APPLICATION->ShowHeadScripts();
		?>

       

    </head>
    
    <body>
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>

        <? $APPLICATION->IncludeFile("_template/header.php", array(), array(
            "SHOW_BORDER" => false,
            "MODE" => "php",
        )); ?>

        <div class="wrapper">
            <div class="workarea">
                <div class="right_workarea">

                    <? $APPLICATION->IncludeFile("_template/top_menu.php", array(), array(
                        "SHOW_BORDER" => false,
                        "MODE" => "php",
                    )); ?>

                    <? if(!$isIndex){ ?>
                        <div style="<?$APPLICATION->ShowViewContent('custom_bc_style');?>">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:breadcrumb",
                                "custom",
                                array(
                                    "PATH" => "",
                                    "SITE_ID" => "s1",
                                    "START_FROM" => "0",
                                    "COMPONENT_TEMPLATE" => "custom"
                                ),
                                false
                            );?>
                        </div>
                        <?$APPLICATION->ShowViewContent('custom_bc');?>
                    <? } ?>

                    <? if($isShowTitle){ ?>
                        <h1 class="home_h1">
                            <?=$APPLICATION->ShowTitle(false);?>
                        </h1>
                    <? } ?>

                    <? if($isIndex){ ?>
                        <? $APPLICATION->IncludeFile("_template/home.php", array(), array(
                            "SHOW_BORDER" => false,
                            "MODE" => "php",
                        )); ?>
                    <? }else{ ?>
                        <div class="cont_tip_block">
                    <? } ?>
