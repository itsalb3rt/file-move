<?php
/**
 * __construct
 *      $inputName: Nombre del indice del array $_FILES
 *      $dirToSave: Directorio donde se quiere guardar el archivo ej: 'files/', 'images/', 'reports/'
 */
class FileMove{
    private $name;
    private $extension;
    private $dirToSave;
    private $inputFileName;

    function __construct($inputName,$dirToSave){
        $this->name = $_FILES[$inputName]['name'];
        $this->extension = $this->getExtensionFromName();
        $this->inputFileName = $inputName;
        $this->dirToSave = $dirToSave;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param mixed $extension
     */
    public function setExtension($extension): void
    {
        $this->extension = $extension;
    }

    /**
     * @return mixed
     */
    public function getDirToSave()
    {
        return $this->dirToSave;
    }

    /**
     * @param mixed $dirToSave
     */
    public function setDirToSave($dirToSave): void
    {
        $this->dirToSave = $dirToSave;
    }

    /**
     * @return mixed
     */
    public function getInputFileName()
    {
        return $this->inputFileName;
    }

    /**
     * @param mixed $inputFileName
     */
    public function setInputFileName($inputFileName): void
    {
        $this->inputFileName = $inputFileName;
    }

    //Util
    public function getExtensionFromName(){
        $path = $this->name;
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        return $ext;
    }

    public function save(){
        $this->move();
    }

    public function debugData(){
        var_dump('File name: ' . $this->name);
        var_dump('File extension: ' .$this->extension);
        var_dump('Directory to save: ' .$this->dirToSave);
        var_dump('Input name: ' .$this->inputFileName);
    }

    //Private methods

    private function move(){
        $this->createDirIsNotExists();
        move_uploaded_file($_FILES[$this->inputFileName]['tmp_name'],
            $this->dirToSave . $this->name . '.' . $this->extension);
    }

    private function createDirIsNotExists(){
        if ( !file_exists( $this->dirToSave ) ) {
            mkdir( $this->dirToSave , 0777, true );
        }
    }
}
