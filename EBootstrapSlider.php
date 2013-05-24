<?php
/*
 * Widget created by Darko Lukic
 * Based on http://www.eyecon.ro/bootstrap-slider/
 * 21. 5. 2013.
 */

class EBootstrapSlider extends CWidget 
{ 
    public $class = 'span12';
    
    public $touchSupport = true;
    
    //slider properties
    public $min = 0;
    public $max = 100;
    public $step = 1;
    public $value = 50;
    public $orientation = 'horizontal';
    public $tooltip = 'show';
    
    //events
    public $slideStart;
    public $slideStop;
    public $slide;
    
    
    
    private function registerClientScripts()
    {
        $baseUrl = Yii::app()->assetManager->publish(__DIR__.'/assets');
        Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/bootstrap-slider.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerCssFile($baseUrl.'/css/slider.css');
        
        if ($this->touchSupport)
            Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/modernizr.js');
    }
    
    private function genEventsCode() 
    {
        $return = '';
        
        if (isset($this->slideStop))
            $return .= ".on('slideStop', function(object) {".$this->slideStop."})";
        if (isset($this->slideStart))
            $return .= ".on('slideStart', function(object) {".$this->slideStart."})";
        if (isset($this->slide))
            $return .= ".on('slide', function(object) {".$this->slide."})";
        
        return $return;
    }
    
    public function run()
    {
        $this->registerClientScripts();

        Yii::app()->clientScript->registerScript($this->id, '$("#'.$this->id.'").slider()'.$this->genEventsCode().';', CClientScript::POS_READY);
        
        echo '<input type="text" style="visibility:hidden" class="'.$this->class.'" value="" id="'.$this->id.'" 
            data-slider-min="'.$this->min.'" data-slider-max="'.$this->max.'" data-slider-step="'.$this->step.'" 
            data-slider-value="'.$this->value.'" data-slider-orientation="'.$this->orientation.'" 
            data-slider-tooltip="'.$this->tooltip.'" data-slider-selection="before" />';
    }
}