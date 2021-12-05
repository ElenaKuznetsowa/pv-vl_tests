<?php

class CorporateCest
{
  	public function testMenu(AcceptanceTester $I)
	{
		//Переход на страницу "Заказ готовых обедов"
		$I->amOnPage('/corporate');
		
		//Искомые элементы в нужном порядке
		$items = array (
			"Салаты и холодные закуски",
			"Первые блюда",
			"Вторые блюда",
			"Постные блюда",
			"Мучные блюда",
			"Комплексные обеды",
			"Посуда",
			"Меню");
				
		//Вариант 1
		// Поиск текста в таблице, поиск таблицы по css классу
		//Недостаток - нет уверенности, что каждая строка будет в отдельной ячейке
		/*
		foreach($items as $item)
		{
			$I->see($item, 'table.light_brown_grad_menu_vertical');
		}
		*/
		
		//Вариант 2
		// Поиск по XPath в каждой второй колонке таблицы
		//Недостаток - чувствительность к изменению структур страницы в целом и таблицы меню
		/*
		//Счетчик пунктов тестового списка ($items)
		$i = 1;	
		foreach($items as $item)
		{
			$I->see($item, '//table[3]/tbody/tr/td[' . $i * 2 . ']/a');
			//или ищем таблицу по классу $I->see($item, '//table[@class="light_brown_grad_menu_vertical"]/tbody/tr/td[' . $i * 2 . ']/a');
			$i = $i + 1;
		}
		*/
		$i = 1;	
		foreach($items as $item)
		{
			$I->see($item, '//table[@class="light_brown_grad_menu_vertical"]/tbody/tr/td[' . $i * 2 . ']/a');
			$i = $i + 1;
		}
	}
}