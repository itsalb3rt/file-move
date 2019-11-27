# FileMove
A simple class to move file most easy.

## Use
```bash
$ composer require ligne/file-move
```


```php
use Ligne\FileMove;

$file = new FileMove("myfile","files/"); //The final slash is required
$file->save();
```
**Easy!** :tada:

## Other methods

```php
$file->setFileName();
$file->debugData();
$file->getDirToSave();
$file->getExtension();
$file->getExtensionFromName();
$file->getFileName();
$file->getInputFileName();
```
