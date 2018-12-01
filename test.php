<?php
// 任总！任总！
// 任总！任总！
// 任总！任总！
class Test {
    private $key;
    private $value;

    public function setKey($key) {
        if ($key > 0) {
            $this->key = $key;
        }
    }
  
    public function getKey() {
        return $this->key;
    }
}
