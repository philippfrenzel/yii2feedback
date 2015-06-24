<?php

 /**
 * This class is used to embed visjs.org JQuery Plugin to my Yii2 Projects
 * @copyright Frenzel GmbH - www.frenzel.net
 * @link http://www.frenzel.net
 * @author Philipp Frenzel <philipp@frenzel.net>
 *
 */

namespace yii2feedback;

use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\Json;
use yii\base\Widget;

class yii2feedback extends Widget
{

    /**
    * @var array options the HTML attributes (name-value pairs) for the field container tag.
    * The values will be HTML-encoded using [[Html::encode()]].
    * If a value is null, the corresponding attribute will not be rendered.
    */
    public $options = [
    ];

    /**
     * @var array clientOptions the HTML attributes for the widget container tag.
     */
    public $clientOptions = [
    ];

    /**
     * internal marker for the name of the plugin
     * @var string
     */
    private $_pluginName = 'feedbackJs';

    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        //checks for the element id
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
         //checks for the element id
        if (!isset($this->clientOptions['endpoint'])) {
            $this->clientOptions['endpoint'] = Url::to(['site']);
        }

        parent::init();
    }

    /**
     * Renders the widget.
     */
    public function run()
    {   
        $this->options['data-plugin-name'] = $this->_pluginName;
        $this->registerPlugin();
    }

    /**
    * Registers the FullCalendar javascript assets and builds the requiered js  for the widget and the related events
    */
    protected function registerPlugin()
    {        
        $id = $this->options['id'];
        $view = $this->getView();

        /** @var \yii\web\AssetBundle $assetClass */
        $assets = CoreAsset::register($view);

        $js = array();

        $cleanOptions = $this->getClientOptions();
        $js[] = "$.feedback($cleanOptions);";

        $view->registerJs(implode("\n", $js),View::POS_READY);
    }

    /**
     * @return array the options for the text field
     */
    protected function getClientOptions()
    {
        return Json::encode($this->clientOptions);
    }

}
