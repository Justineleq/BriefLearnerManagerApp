<?php
namespace src\services;

trait Reponse {

  /**
   * The render method is used to display a view. It can take the data to be displayed in the view as a second parameter.
   *
   * @param string $view The name of the view to render
   * The data to be displayed in the view, in associative array format. The expected values are: as a key, the name of the variable you want to use in your view (e.g. film), and as a value, the value! Two keys are expected, section and action, which will be empty by default if you don't provide them. The section lets you know which part of the dashboard should be displayed, and the action lets you know which CRUD action is being requested.
   * @return void
   */
  public function render(string $view, array $data = ['section' => '', 'action' => '']){
    if (!empty($data)) {
      foreach ($data as $key => $value) {
        ${$key} = $value;
      }
    }
    if (!isset($section)) {
      $section = '';
    }
    if (!isset($action)) {
      $action = '';
    }
    include_once __DIR__ . '/../views/'. $view . ".php";
  }

 
}