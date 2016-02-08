<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<div class="news-line">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<table id="restable" border="1px">
			<tr>
				<td><span>Модель: <?echo $arItem["NAME"]?></span></td>
				<td><span>Тип кузова: <? echo $arItem["PROPERTY_TYPE_VALUE"]?></span></td>
				<td><span>Класс: <?echo $arItem["PROPERTY_CLASS_VALUE"]?></span></td>
			</tr>
	</table>
	<br>
	<?endforeach;?>
</div>
