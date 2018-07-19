<?php

namespace Application\Block\HelloWorld;

use Concrete\Core\Block\BlockController;

class Controller extends BlockController
{

  protected $btTable = "btHelloWorld";


  public function getBlockTypeName()
  {
      return t('Hello World');
  }

  public function getBlockTypeDescription()
  {
      return t('Cat Block!');
  }


};
