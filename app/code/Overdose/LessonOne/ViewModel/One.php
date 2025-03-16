<?php

namespace Overdose\LessonOne\ViewModel;

class One implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    public function iAmViewModel()
    {
        return 'I am a ViewModel' . PHP_EOL;
    }
}
