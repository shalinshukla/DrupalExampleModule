<?php

namespace Drupal\services_build\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\services_build\StringFormatterServices;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller for the custom services example.
 */
class ServicesDisplayController extends ControllerBase {

  /**
   * The StringFormatter service.
   *
   * @var \Drupal\services_build\StringFormatterServices
   */
  protected StringFormatterServices $stringFormatter;

  /**
   * Constructs a CustomServicesExampleController object.
   *
   * @param \Drupal\services_build\StringFormatterServices $string_formatter
   */
  public function __construct(StringFormatterServices $string_formatter) {
    $this->stringFormatter = $string_formatter;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container): CustomServicesExampleController|static {
    return new static(
      $container->get('services_build.string_formatter')
    );
  }

  /**
   * Displays the formatted string.
   *
   * @return array
   *   Render array.
   */
  public function displayServiceOutput(): array {
    $num1 = 18;
    $num2 = 9;
    $formattedString = $this->stringFormatter->formatString($num1, $num2);

    return [
      '#markup' => $formattedString,
    ];
  }

}
