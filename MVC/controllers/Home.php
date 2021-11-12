<?php
class Home extends Controller
{
  public function __construct()
  {
  }

  function Default()
  {
    $Models = $this->model("Models");
    $this->view("master", [
      "Page" => "home",
    ]);
  }

}
