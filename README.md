# HasOffers PHP Client

## Installation

```js
"require": {
    "devit/hasoffers-php-client": "dev-master"
}
```

## Example

```php
$client = new DevIT\Hasoffers\Client('API_KEY', 'NETWORK_ID');

$offers = $client->api('Affiliate\Offer');

try {
    $response = $offers->findAll(['limit' => 5]);

    var_dump($response);
} catch (DevIT\Hasoffers\Exception $e) {
    echo($e->getMessage());
}
```

## Supported
- Affiliate API
- Brand API
