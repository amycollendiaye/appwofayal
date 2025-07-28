<?php
namespace App\Core\Abstract;

abstract class AbstractEntity {
  abstract static public function toObject(array $data):?static;
  abstract public function toArray();
  public function toJson(){}
}