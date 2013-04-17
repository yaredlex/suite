<?php
return array(
    'name' => t('Визуальный редактор TinyMCE 3.5.8 RU'),
    'author' => 'Лёха Орин',
	'order' => '1',
	'email' => 'ya.redlex@yandex.ru',
	'site' => 'http://cogear.ru/repo',
	'version' => '2.0',
	'description' => t('<p><strong>Лучший визуальный редактор для Cogear!&nbsp;</strong></p>
<p><span style="color: #ff6600; background-color: #ffffff;"><strong>Для комфортной роботы отключите парсер текста!</strong></span></p>
<p>(Для этого поставте галочку под полем ввода текста на редактируемой странице)</p>'),
	 'required' => array(
        'gears' => array(
		  array('name' => 'Wysiwyg')
		)
	)
 );
