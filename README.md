# FileMove
Pequeña clase para mover archivos enviados al servidor mediante formularios o AJAX

Uso basico;

```php
require 'src/FileMove.php';

$file = new FileMove("myfile","files/");
$file->setName("my_custom_name");
$file->save();
```

Y esto seria todo!
