<?php
class ElasticaLoader extends CApplicationComponent
{
    public $libPath;

    //see: http://elastica.io/en#section-include
    public function autoload_elastica ($class)
    {
        $path = str_replace("\\", '.', $class);
        $full_path = $this->libPath.'.'.$path;
        if (is_file(Yii::getPathOfAlias($full_path).'.php')) {
            Yii::import($full_path, true);    
        }
        
    }


    public function init()
    {
       Yii::registerAutoloader(array($this,'autoload_elastica'),true);
    }
}
