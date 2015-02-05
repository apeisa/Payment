<?php

class PaymentProduct extends WireData {
  public function __construct($title, $amount, $quantity = 1) {
    $this->title = $title;
    $this->amount = $amount;
    $this->quantity = $quantity;
    $this->total = $amount * $quantity;
  }
}