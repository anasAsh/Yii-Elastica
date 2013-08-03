Yii-Elastica
============

a Yii application component, Dataprovider and autoloader, to use Elastica PHP library inside Yii

Main connfigrations

'preload' => array('importelastica'),

'components' => array(
  ...
  'importelastica'=>array(
    'class' => 'application.extensions.ElasticaLoader',
    'libPath' => 'application.lib', //assume you installed Elastica to /lib/
  ),
  'elastica' => array(
    'class' => 'application.components.Elastica',
    'host' => 'localhost',
    'port' => '9200',
    'debug' => true
  ),
  ...
)
