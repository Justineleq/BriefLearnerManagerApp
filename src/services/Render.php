<?php

namespace src\Services;

trait Render {

  public function render(string $view, array $data = null)
  {
    if (is_array($data) && !empty($data)) {
      extract($data);
    }
  
    include_once __DIR__ . '/../views/'. $view . ".php";
  }
}
