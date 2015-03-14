# Saas Starter Kit

## Packages Installed

* Cashier ~4.0. Requires Stripe API on 2015-02-18 version and later.

## Features

### Cashier

* Package installed
* Service Provider added
* Migration created

### Command Logger

You can log commands run, and add some meta data. This is useful for auditing user actions, or displaying actions users
 have taken on their account.

Wrapped around the Command Bus is the `App\Logger\CommandLogger`, which tests if the command implements the
`App\Logger\Loggable` interface.

If it does implement the interface, the application will log the command and its available data to the `logs` table.

* `App\Logger\CommandLogger` - Created
* `App\Logger\Loggable` - Interface Created
* `App\Logger\Logs` - Eloquent model for logs table

To use it, create a laravel command using `php artisan make:command SomeCommand [--handler] [--queued]`.

Make it implement the interface `Loggable` and define the needed methods.

```php
<?php namespace App\Commands;

use App\Logger\Loggable;

use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;

class SomeCommand extends Command implements SelfHandling, Loggable {

    public function __construct() {}

    public function handle() {}
    
    /**
     * @return \App\User
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getLabel() {
        return 'user.updated';
    }

    /**
     * @return array
     */
    public function getData() {
        return [
            'foo' => 'bar'
        ];
    }
}
```