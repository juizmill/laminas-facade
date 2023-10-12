# laminas facade

Project aimed at facilitating the use of common Laminas Framework services

In this package the services were mapped:
- EventManager
- Request
- Response
- ServiceManager

To create your own FACADE you have to inherit from the `LaminasFacade\AbstractFacade` class and return the name of the service in the `getFacadeAccessor` method

### __**This project is experimental.**__

If you want to contribute, feel free to send an issue or Pull Request

## Installation

You can install the package via composer:

```bash
composer require juizmill/laminas-facade
```

Register in file `config/modules.config.php` the module `LaminasFacade`