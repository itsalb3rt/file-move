<?php

namespace Ligne;
/**
 * __construct
 *      $inputName: Index of $_FILES array
 *      $dirToSave: Dir to save file Example: 'files/', 'images/', 'reports/' (THE FINAL SLASH IS REQUIRED)
 */
class FileMove{
    private $fileName;
    private $extension;
    private $dirToSave;
    private $inputFileName;

    function __construct(String $inputName,String $dirToSave){
        $this->fileName = $_FILES[$inputName]['name'];
        $this->extension = $this->getExtensionFromName();
        $this->inputFileName = $inputName;
        $this->dirToSave = $dirToSave;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName): void
    {
        $this->fileName = $fileName;
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


    public function getExtensionFromName(){
        $path = $this->fileName;
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        return $ext;
    }

    /**
     * Move file to specific dir
     */
    public function save():void{
        $this->move();
    }

    public function debugData(){
        var_dump('File name: ' . $this->fileName);
        var_dump('File extension: ' .$this->extension);
        var_dump('Directory to save: ' .$this->dirToSave);
        var_dump('Input name: ' .$this->inputFileName);
    }

    /**
     * Move the file to specific dir
     */
    private function move():void{
        $this->createDirIsNotExists();
        move_uploaded_file($_FILES[$this->inputFileName]['tmp_name'],
            $this->dirToSave . $this->fileName . '.' . $this->extension);
    }

    /**
     * If the specific dir not exists, this method created this dir
     */
    private function createDirIsNotExists():void{
        if ( !file_exists( $this->dirToSave ) ) {
            mkdir( $this->dirToSave , 0777, true );
        }
    }
}
