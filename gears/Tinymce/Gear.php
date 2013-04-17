<?php

/**
 * Шестеренка визуального редактора TinyMCE 3.5.8 RU
 * 
 * @author		Лёха Орин<ya@redlex.pp.ua>
 * @copyright		Copyright (c) 2013 Лёха Орин
 * @license		http://cogear.ru/license.html
 * @link		http://cogear.ru/repo
 */
class Tinymce_Gear extends Gear {
	/**
     * Конструктор
     */
    public function __construct($config) {
        parent::__construct($config);
        Wysiwyg_Gear::$editors['tinymce'] = 'Tinymce_Editor';
    }
	/**
     * Пропускаем автозагрузку скриптов и стилей
     */
    public function loadAssets() {
//        parent::loadAssets();
/** 
*Предыдущий способ подключения редактора. 
*сохранен для примера. как память кривым рукам :(
*	js($this->folder. '/tiny_mce/tiny_mce.js', 'content');
* js($this->folder. '/tiny_mce/tinymce.config.js', 'content'); // тут храним настройки редактора
   */
    }
	  /**
     * Активация шестерёнки
     * @return type
     */
    public function enable(){
        $this->set('wysiwyg.editor','tinymce');
        return parent::enable();
    }
}
class Tinymce_Editor extends Wysiwyg_Abstract {
 public function load() {
//        parent::load();
	js($this->folder. '/gears/Tinymce/tiny_mce/tiny_mce.js', 'content'); 
    js($this->folder. '/gears/Tinymce/tiny_mce/tinymce.config.js', 'content'); // файл настройки редактора
  }
}