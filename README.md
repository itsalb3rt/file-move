# FileMove
Pequeña clase para mover archivos enviados al servidor mediante formularios o AJAX

Uso basico;

El constructor recibe 2 parámetros iniciales
1 – nombre del índice donde se encuentra el archivo dentro de **$_FILES**
2 – Directorio donde se desea guardar el archivo


```php
require 'src/FileMove.php';

$file = new FileMove("myfile","files/");
$file->setName("my_custom_name");
$file->save();
```

Y esto seria todo!
