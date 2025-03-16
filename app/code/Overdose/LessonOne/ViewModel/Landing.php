<?php

namespace Overdose\LessonOne\ViewModel;

class Landing implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    public function iAmViewModel()
    {
        return 'I am a ViewModel of landing page' . PHP_EOL;
    }
}
