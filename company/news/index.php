<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Новости | White Siberia");
$APPLICATION->SetPageProperty("description", "Новости от компании White Siberia. ✅ Актуальный мир новостей об: электробайках, электросамокатов, электровелосипедов и т.д.");
$APPLICATION->SetTitle("Новости");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"news",
	Array(
		"ADD_DETAIL_TO_SLIDER" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_PICT_PROP" => "",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BG_POSITION" => "center",
		"BLOCK_BLOG_NAME" => "",
		"BLOCK_BRANDS_NAME" => "",
		"BLOCK_LANDINGS_NAME" => "",
		"BLOCK_NEWS_NAME" => "",
		"BLOCK_PARTNERS_NAME" => "",
		"BLOCK_PROJECTS_NAME" => "",
		"BLOCK_REVIEWS_NAME" => "",
		"BLOCK_SALE_NAME" => "",
		"BLOCK_SERVICES_NAME" => "",
		"BLOCK_STAFF_NAME" => "",
		"BLOCK_TIZERS_NAME" => "",
		"BLOCK_VACANCY_NAME" => "",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COLOR_NEW" => "3E74E6",
		"COLOR_OLD" => "C0C0C0",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONVERT_CURRENCY" => "N",
		"CURRENCY_ID" => "RUB",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_BLOCKS_ALL_ORDER" => "tizers,desc,docs,char,services,blog,vacancy,news,form_order,goods,projects,reviews,gallery,brands,landings,staff,comments",
		"DETAIL_BLOG_USE" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FB_USE" => "N",
		"DETAIL_FIELD_CODE" => array("PREVIEW_TEXT","DETAIL_TEXT","DETAIL_PICTURE","DATE_ACTIVE_FROM",""),
		"DETAIL_LINKED_GOODS_SLIDER" => "Y",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array("LINK_GOODS","FORM_QUESTION","FORM_ORDER","PERIOD","PHOTOPOS","LINK_SERVICES","PHOTOS","DOCUMENTS",""),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_VK_USE" => "N",
		"DISPLAY_AS_RATING" => "rating",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_LINKED_PAGER" => "Y",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_WISH_BUTTONS" => "Y",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"FILE_404" => "",
		"FILTER_FIELD_CODE" => array("",""),
		"FILTER_NAME" => "arRegionLink",
		"FILTER_PROPERTY_CODE" => array("",""),
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"FORM_ID_ORDER_SERVISE" => "",
		"GALLERY_TYPE" => "small",
		"HIDE_BORDER_ELEMENT" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_CATALOG_ID" => "35",
		"IBLOCK_CATALOG_TYPE" => "-",
		"IBLOCK_ID" => "57",
		"IBLOCK_LINK_BLOG_ID" => "62",
		"IBLOCK_LINK_BRANDS_ID" => "63",
		"IBLOCK_LINK_LANDINGS_ID" => "62",
		"IBLOCK_LINK_NEWS_ID" => "57",
		"IBLOCK_LINK_PARTNERS_ID" => "53",
		"IBLOCK_LINK_PROJECTS_ID" => "60",
		"IBLOCK_LINK_REVIEWS_ID" => "44",
		"IBLOCK_LINK_SALE_ID" => "",
		"IBLOCK_LINK_SERVICES_ID" => "58",
		"IBLOCK_LINK_STAFF_ID" => "64",
		"IBLOCK_LINK_TIZERS_ID" => "45",
		"IBLOCK_LINK_VACANCY_ID" => "36",
		"IBLOCK_TYPE" => "aspro_max_content",
		"IMAGE_CATALOG_POSITION" => "left",
		"IMAGE_POSITION" => "left",
		"IMAGE_WIDE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LINE_ELEMENT_COUNT" => "3",
		"LINE_ELEMENT_COUNT_LIST" => "4",
		"LINKED_ELEMENST_PAGE_COUNT" => "20",
		"LINKED_ELEMENT_TAB_SORT_FIELD" => "sort",
		"LINKED_ELEMENT_TAB_SORT_FIELD2" => "id",
		"LINKED_ELEMENT_TAB_SORT_ORDER" => "asc",
		"LINKED_ELEMENT_TAB_SORT_ORDER2" => "desc",
		"LINKED_PROPERTY_CODE" => array("",""),
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE","DATE_ACTIVE_FROM","DATE_ACTIVE_TO","ACTIVE_TO",""),
		"LIST_PROPERTY_CODE" => array("PERIOD","REDIRECT",""),
		"LIST_VIEW" => "slider",
		"MAX_GALLERY_ITEMS" => "5",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "6",
		"NUM_DAYS" => "30",
		"NUM_NEWS" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "main",
		"PAGER_TITLE" => "Новости",
		"PERIOD_NEW_TAGS" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PRICE_CODE" => array("BASE"),
		"PRICE_VAT_INCLUDE" => "Y",
		"SALE_STIKER" => "-",
		"SECTIONS_TAGS_DEPTH_LEVEL" => "2",
		"SECTION_ELEMENTS_TYPE_VIEW" => "FROM_MODULE",
		"SEF_FOLDER" => "/company/news/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => Array("detail"=>"#ELEMENT_CODE#/","news"=>"","rss"=>"rss/","rss_section"=>"#SECTION_ID#/rss/","section"=>""),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHARE_HANDLERS" => array("delicious","twitter","lj","facebook","vk","mailru"),
		"SHARE_HIDE" => "N",
		"SHARE_SHORTEN_URL_KEY" => "",
		"SHARE_SHORTEN_URL_LOGIN" => "",
		"SHARE_TEMPLATE" => "",
		"SHOW_404" => "Y",
		"SHOW_ASK_BLOCK" => "N",
		"SHOW_BORDER_ELEMENT" => "Y",
		"SHOW_CHILD_SECTIONS" => "N",
		"SHOW_COUNT_ELEMENTS" => "Y",
		"SHOW_DETAIL_LINK" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_DISCOUNT_PERCENT_NUMBER" => "N",
		"SHOW_DISCOUNT_TIME" => "Y",
		"SHOW_FILTER_DATE" => "Y",
		"SHOW_GALLERY_GOODS" => "Y",
		"SHOW_MAX_ELEMENT" => "N",
		"SHOW_MEASURE" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_ONE_CLICK_BUY" => "Y",
		"SHOW_RATING" => "Y",
		"SHOW_SECTIONS_FILTER" => "Y",
		"SHOW_SECTION_DESCRIPTION" => "Y",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SIDE_LEFT_BLOCK" => "LEFT",
		"SIDE_LEFT_BLOCK_DETAIL" => "FROM_MODULE",
		"SIZE_IN_ROW" => "4",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"SORT_REGION_PRICE" => "BASE",
		"STAFF_TYPE_DETAIL" => "list",
		"STIKERS_PROP" => "-",
		"STORES" => array("",""),
		"STRICT_SECTION_CHECK" => "N",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVICE" => "",
		"S_ORDER_SERVISE" => "",
		"TAGS_CLOUD_ELEMENTS" => "150",
		"TAGS_CLOUD_WIDTH" => "100%",
		"TAGS_SECTION_COUNT" => "",
		"TITLE_SHOW_FON" => "N",
		"TYPE_IMG" => "lg",
		"TYPE_LEFT_BLOCK" => "1",
		"TYPE_LEFT_BLOCK_DETAIL" => "FROM_MODULE",
		"T_DOCS" => "",
		"T_GALLERY" => "",
		"T_GOODS" => "Товары",
		"T_MAX_LINK" => "",
		"T_PREV_LINK" => "",
		"T_PROJECTS" => "",
		"T_REVIEWS" => "",
		"T_SERVICES" => "",
		"T_STAFF" => "",
		"T_STUDY" => "",
		"T_VIDEO" => "",
		"USE_BG_IMAGE_ALTERNATE" => "Y",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "Y",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "Y",
		"USE_SUBSCRIBE_IN_TOP" => "N",
		"YANDEX" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>