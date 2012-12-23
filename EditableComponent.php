<?php
/**
 * EditableComponent class file.
 * 
 * @author Vitaliy Potapov <noginsk@rambler.ru>
 * @link https://github.com/vitalets/x-editable-yii
 * @copyright Copyright &copy; Vitaliy Potapov 2012
 * @version 0.1.0
*/  
  
class EditableComponent extends CApplicationComponent
{
    const FORM_BOOTSTRAP = 'bootstrap';
    const FORM_JQUERYUI = 'jqueryui';
    const FORM_PLAIN = 'plain';
    
    const POPUP = 'popup';
    const INLINE = 'inline';
    
    /**
    * @var string editable form engine: bootstrap, jqueryui, plain
    */
    public $form = self::FORM_BOOTSTRAP; 
    
    /**
    * @var string editable container type: popup or inline
    */
    public $container = self::POPUP; 
    
    /**
    * @var array defaults for editable configuration
    */
    public $defaults = array();
    
}
