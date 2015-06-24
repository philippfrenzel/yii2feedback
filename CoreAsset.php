<?php

namespace yii2feedback;

use yii\web\AssetBundle;

/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

class CoreAsset extends AssetBundle
{
    /**
     * [$sourcePath description]
     * @var string
     */
    public $sourcePath = '@yii2feedback/assets';

    /**
     * [$autoGenerate description]
     * @var boolean
     */
    public $autoGenerate = true;
    
    /**
     * [$css description]
     * @var array
     */
    public $css = [
        'css/feedback.css',
    ];

    /**
     * [$js description]
     * @var array
     */
    public $js = [
        'js/feedback.js',
        '//cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js'
    ];
    
    /**
     * [$depends description]
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset'
    ];

}
