<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
	if (!CModule::IncludeModule('iblock')) { 
		die('Модуль инфоблоков не подключен');
	}
	$iblockTypes = array();
	$res = CIBlockType::GetList();
	while ($ob = $res->GetNext()) {
		$iblockTypes[$ob['ID']] = $ob['ID'];
	}
	if (!!$arCurrentValues['IBLOCK_TYPE']) {
			$iblocks = array(); 
			$res = CIBlock::GetList(
				Array(),
				Array( 
					'TYPE' => $arCurrentValues['IBLOCK_TYPE'] 
				)
			);
			while ($ob = $res->GetNext()) {
				$iblocks[$ob['ID']] = $ob['NAME'];
			}
	}

	$arComponentParameters = Array(
		'GROUPS' => Array(),
		'PARAMETERS' => Array(
			'IBLOCK_TYPE' => Array(
				'NAME' => 'Тип инфоблока',
				'TYPE' => 'LIST',
				'VALUES' => $iblockTypes,
				'REFRESH' => 'Y'
			),
			'IBLOCK_ID' => Array(
				'NAME' => 'Инфоблок',
				'TYPE' => 'LIST',
				'VALUES' => $iblocks
			)
		)
	);
?>