# PHP Genie

## A simple package meant to add addition required features to slim

```php
$app = new Slim\Slim($container);

$container['session'] = function() {
	return new Session();
};

$app->get('/', function($req, $res) {
	echo $this->session->get('name');
});

$app->run();


```