<?php

class sfServiceDefinitionExtender extends sfServiceDefinition {
  
  protected $wrappedMethods = array();

  public function addWrappedMethod($methodName) {
    $this->wrappedMethods[] = $methodName;
  }

  public function getWrappedMethods() {
    return $this->wrappedMethods;
  }

  public function hasWrappedMethods() {
    return count($this->wrappedMethods)>0;
  }

}


?>
