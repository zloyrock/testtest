<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?php
	$res = CIBlockElement::GetList(
		Array(),
		Array(
			'IBLOCK_TYPE' => $arParams['IBLOCK_TYPE'],
			'IBLOCK_ID' => $arParams['IBLOCK_ID'],
			'ACTIVE' => 'Y'
		),
		false,
		false,
		Array(
			'ID',
			'NAME',
			'PROPERTY_CLASS',
			'PROPERTY_TYPE'
		)
	);
	$arResult['ITEMS'] = array();

	while ($ob = $res -> GetNextElement()) {
		$ar = $ob->GetFields();

		$arResult['ITEMS'][] = Array(
			'ID' => $ar['ID'],
			'NAME' => $ar['NAME'],
			'PROPERTY_CLASS_VALUE' => $ar['PROPERTY_CLASS_VALUE'],
			'PROPERTY_TYPE_VALUE' => $ar['PROPERTY_TYPE_VALUE']
		);
	}
	$this->IncludeComponentTemplate();
?>