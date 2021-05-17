<?php
class Hello {
  public function __construct() {
    add_shortcode( 'hello', array( $this, 'addShortcode' ));
  }

  private function renderForm() {
    Timber::render( 'form.twig' );
  }

  private function renderMessage() {
    $context['hello_name'] = $_POST["hello_name"] ;
    Timber::render( 'message.twig', $context );
  }

  public function addShortcode() {
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
      $this->renderMessage();
    } else {
      $this->renderForm();
    }
  }
}