<?php
class Model_Contacts extends Model
{
	public function get_data()
	{	
		// Здесь мы просто симулируем реальные данные.
		return array(
			array(
				'Adress' => 'Архангельск, пл. Ленина 1',
				'Phone' => '+7(351)980-42-63',
				'Email' => 'arch@mail.ru'
			),
			array(
				'Adress' => 'Брест, пл. Ленина 2',
				'Phone' => '+7(474)672-90-51',
				'Email' => 'br@mail.ru'
			),
			array(
				'Adress' => 'Воронеж, пл. Ленина 3',
				'Phone' => '+7(802)289-92-66',
				'Email' => 'vr@mail.ru'
			),
			array(
				'Adress' => 'Москва, пл. Ленина 4',
				'Phone' => '+7(496)897-38-85',
				'Email' => 'msk@mail.ru'
			),
			array(
				'Adress' => 'Санкт-Петербург, пл. Ленина 5',
				'Phone' => '+7(975)972-93-41',
				'Email' => 'spb@mail.ru'
			),
		);
	}
}