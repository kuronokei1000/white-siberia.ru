<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?global $arTheme;?>
<?$APPLICATION->IncludeComponent(
	"aspro:com.banners.max", 
	"top_big_banners_1_2", 
	array(
		"IBLOCK_TYPE" => "aspro_max_adv",
		"IBLOCK_ID" => "56",
		"TYPE_BANNERS_IBLOCK_ID" => "35",
		"SET_BANNER_TYPE_FROM_THEME" => "N",
		"NEWS_COUNT" => "10",
		"NEWS_COUNT2" => "3",
		"NEWS_COUNT3" => "3",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"PROPERTY_CODE" => array(
			0 => "TEXT_POSITION",
			1 => "TARGETS",
			2 => "TEXTCOLOR",
			3 => "URL_STRING",
			4 => "BUTTON1TEXT",
			5 => "BUTTON1LINK",
			6 => "BUTTON2TEXT",
			7 => "BUTTON2LINK",
			8 => "",
		),
		"CHECK_DATES" => "Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TYPE" => "A",
		"SECTION_ID" => "243",
		"CACHE_TIME" => "36000000",
		"BANNER_TYPE_THEME" => "TOP",
		"BANNER_TYPE_THEME_CHILD" => "TOP_SMALL_BANNER",
	),
	false
);?>