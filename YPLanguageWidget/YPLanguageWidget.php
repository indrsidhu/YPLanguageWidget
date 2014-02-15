<?php
class YPLanguageWidget extends CWidget
{
	public $languages = array(
		"en_us"=>"English",
		"fr"=>"French",
		"dt"=>"German",
		"es"=>"Spanish",
		"pt"=>"Portuguese",
	);
		
    public function run()
    {
        if (isset($_POST['_lang']))
        {
            Yii::app()->language = $_POST['_lang'];
            Yii::app()->session['_lang'] = Yii::app()->language;
        }
        else if (isset(Yii::app()->session['_lang']))
        {
           Yii::app()->language = Yii::app()->session['_lang'];
        }
		
        $currentLang = Yii::app()->language;
        $languages 	 = $this->languages;
        $this->render('ext.yiiplugins.YPLanguageWidget.view.YPLanguageWidget', 
		array('currentLang' => $currentLang, 'languages'=>$languages));
    }
}