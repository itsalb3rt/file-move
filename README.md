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
/** 
* The mime type of the file, if the browser provided this information. 
* An example would be "image/gif". 
* This mime type is however not checked on the PHP side and therefore don't take its value for granted.
 */
$file->getFileType(); 
$file->debugData();
$file->getDirToSave();
$file->getExtension();
$file->getExtensionFromName();
$file->getFileName();
$file->getInputFileName();
```
