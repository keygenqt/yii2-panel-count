<?php

namespace keygenqt\panelCount;

class PanelCount extends \yii\base\Widget
{
    public function run()
    {
        BowerAssets::register($this->getView());
        ActiveAssets::register($this->getView());
                
        $this->getView()->registerJs("

        ");

        return $this->getView()->render('@keygenqt/panelCount/views/view', ['widget' => $this]);
    }
}