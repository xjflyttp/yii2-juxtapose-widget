<?php

namespace xj\juxtapose;

use yii\web\AssetBundle;

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class JuxtaposeAsset extends AssetBundle
{

    public $sourcePath = '@bower/juxtapose/build';
    public $js = ['js/juxtapose.js'];
    public $css = ['css/juxtapose.css'];

}
