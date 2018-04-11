<?php
/**
 * Created by PhpStorm.
 * User: helong
 * Date: 2017/9/10
 * Time: 下午11:51
 */

namespace componentsforyii2\markdown;


use yii\web\AssetBundle;

class FontColorAssets extends MarkdownAssets
{
    public $js = [
        "font-color/jquery.minicolors.js"
    ];
    public $css = [
        "font-color/jquery.minicolors.css"
    ];
}