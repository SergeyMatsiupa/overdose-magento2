<?php
namespace Overdose\LessonOne\Controller\Index;

use Magento\Framework\Controller\ResultFactory;


class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $storeManager;
    
    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
    ) {
        $this->storeManager = $storeManager;
    }
    
    public function execute()
    {
        // $fp = fopen('msvlogmg_data.txt', 'w'); fwrite($fp, print_r('$fff', true)); fclose($fp);
        // echo 'Hello World';
        // exit;
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        // return $page;
        return $this->storeManager->getStore()->getName();
    }
}