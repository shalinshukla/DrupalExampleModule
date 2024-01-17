<?php

namespace Drupal\services_build;

/**
 * Defines the StringFormatter service.
 */
class StringFormatterServices {

  /**
   * The Adder service.
   *
   * @var \Drupal\services_build\AdderService
   */
  protected AdderService $adderService;

  /**
   * Constructs a StringFormatter object.
   *
   * @param \Drupal\services_build\AdderService $adderService
   *   The Adder service.
   */
  public function __construct(AdderService $adderService) {
    $this->adderService = $adderService;
  }

  /**
   * Formats a string using the Adder service.
   *
   * @param int $num1
   *   The first number.
   * @param int $num2
   *   The second number.
   *
   * @return string
   *   The formatted string.
   */
  public function formatString(int $num1, int $num2): string {
    $sumResult = $this->adderService->addNumbers($num1, $num2);
    return t('The product of @num1 and @num2 is @sumResult', [
      '@num1' => $num1,
      '@num2' => $num2,
      '@sumResult' => $sumResult,
    ]);
  }
}
