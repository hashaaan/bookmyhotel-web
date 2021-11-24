<?php

class NewlyAddedControl extends NewlyAdded {
  public function getNewlyAdded() {
     return $this->getAllRecords();
  }
}