# DrupalExampleModule
Repository to add Drupal example module

To arrive at the solution, I followed a systematic process that involved designing a Drupal module with custom services using PhpStorm as the integrated development environment (IDE). Here's an overview of the steps I took:

Understanding Requirements:
examined the requirements that are provided, which specified creating a Drupal module with two custom services (AdderService and StringFormatterServices) and a controller endpoint. Each service had a specific functionality, and the controller would use these services to display a formatted string.

Drupal Module:
I started by creating a Drupal module skeleton with the necessary files and directory structure. This included the module's .info.yml, .module, and .services.yml files

Service Definitions & Service Implementations:
I defined the two custom services (AdderService and StringFormatterServices) in the .services.yml file, specifying their respective classes, and implemented them. The AdderService class had a method to add two numbers, and the StringFormatterServices class used the Adder service to format a translatable string.

Dependency Injection:
To improve code modularity and follow best practices, I implemented dependency injection in the StringFormatter service. Instead of directly calling \Drupal::service(), I injected the Adder service through the constructor as well as in the controller

Controller Endpoint:
Created a controller class (ServicesDisplayController) with a method (displayServiceOutput) that used the StringFormatterServices service to get the formatted string. This method was associated with a controller route.

Tools:

Environment: LANDO (Docker based application for web development) to develop module
IDE: phpStorm with phpcs integrated


