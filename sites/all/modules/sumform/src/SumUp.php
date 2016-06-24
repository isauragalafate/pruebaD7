<?php
/**
 * Created by PhpStorm.
 * User: igalafate
 * Date: 22/06/16
 * Time: 13:02
 */
namespace Drupal\sumform;

class SumUp {
  private $sum_a, $sum_b;

  /**
   * SumUp constructor.
   * @param $sum_a
   * @param $sum_b
   */
  public function __construct($sum_a, $sum_b) {
    $this->sum_a = $sum_a;
    $this->sum_b = $sum_b;
  }

  /**
   * @return mixed
   */
  public function getSumA() {
    return $this->sum_a;
  }

  /**
   * @param mixed $sum_a
   */
  public function setSumA($sum_a) {
    $this->sum_a = $sum_a;
  }

  /**
   * @return mixed
   */
  public function getSumB() {
    return $this->sum_b;
  }

  /**
   * @param mixed $sum_b
   */
  public function setSumB($sum_b) {
    $this->sum_b = $sum_b;
  }

  /**
   * SumUp the two values of the object
   * @return mixed
   */
  public function sum() {
    return $this->sum_a + $this->sum_b;
  }
}