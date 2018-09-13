Example:

```php

// example.php

$exports->add = function (...$args) {
    $sum = 0;

    foreach ($args as $num) {
        $sum += $num;
    }

    return $sum;
}

```

```php

// main.php

$add_function = import('example')->add;

echo $add_function(1,2,3);

```

Relative path to the module without extension.