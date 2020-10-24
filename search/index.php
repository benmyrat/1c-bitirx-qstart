<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?><?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumb", Array(
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
	),
	false
);?>Text here....<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>