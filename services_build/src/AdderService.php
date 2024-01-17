<?php

namespace Drupal\services_build;

/**
 * Defines the Adder service.
 */
class AdderService {

  /**
   * Adds two numbers.
   *
   * @param int $num1
   *   The first number.
   * @param int $num2
   *   The second number.
   *
   * @return int
   *   The sum of the two numbers.
   */
  public function addNumbers(int $num1, int $num2): int {
    return $num1 + $num2;
  }

}
