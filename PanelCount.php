<?php

namespace keygenqt\panelCount;

class PanelCount extends \yii\base\Widget
{
    public $type = 'default';
	
    public $id;
    public $icon = '';
    public $count = 10;
    public $title = 'Title';
    public $duration = 800;
    public $format = false;
    public $up;
    public $color;
    
    private static $counterPanelCount = 1;

    public function run()
    {
        $this->id = $this->getId();
        FontAwesomeAsset::register($this->getView());
        ActiveAssets::register($this->getView());
                
        if (self::$counterPanelCount == 1 && $this->format) {
            $this->getView()->registerJs('
                function panelCountFormat(number, decimals, dec_point, thousands_sep ) 
                {
                    var i, j, kw, kd, km;
                    if( isNaN(decimals = Math.abs(decimals)) ){
                        decimals = 2;
                    }
                    if( dec_point == undefined ){
                        dec_point = ",";
                    }
                    if( thousands_sep == undefined ){
                        thousands_sep = ".";
                    }
                    i = parseInt(number = (+number || 0).toFixed(decimals)) + "";
                    if( (j = i.length) > 3 ){
                        j = j % 3;
                    } else{
                        j = 0;
                    }
                    km = (j ? i.substr(0, j) + thousands_sep : "");
                    kw = i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands_sep);
                    kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).replace(/-/, 0).slice(2) : "");
                    return km + kw + kd;
                }
            ', \yii\web\View::POS_BEGIN);
        }
        
        self::$counterPanelCount++;

        return $this->getView()->render('@keygenqt/panelCount/views/view', ['widget' => $this]);
    }
}