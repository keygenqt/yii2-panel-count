<?php
/*
 * Copyright 2020 Vitaliy Zarubin
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace keygenqt\panelCount;

class PanelCount extends \yii\base\Widget
{
    public $type = 'default';
	
    public $id;
    public $icon = '';
    public $count = 10;
    public $title = 'Title';
    public $duration = 500;
    public $format = false;
    public $up;
    public $color;

    public $symbol;
    
    private static $counterPanelCount = 1;

    public function run()
    {
        if (!is_numeric($this->count) && !is_float($this->count)) {
            $this->symbol = preg_replace('/([\d\.]+)/', '', "{$this->count}");
            $this->count = str_replace($this->symbol, '', $this->count);
        }
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