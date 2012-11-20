<?php
class ApplicationPresenter extends http\action\Presenter {
  function index() {
    return new http\Response(200, 'Site up and working!');
  }
}
?>