<?php
class File 
{
  private $file;
  private $maxSize;
  private $type;
  private $validType;
  public $fileName;

  public function __construct($key, $max_size, $valid_type) 
  {
    $this->file = $_FILES[$key];
    $this->maxSize = $max_size; 
    $this->validType = $valid_type;
  }

  public function checkFile()
  {
    if ($this->file['error'] == UPLOAD_ERR_NO_FILE) {
      throw new Exception('file_exist'); 
    }
  }

  public function checkSize() 
  {
    if ($this->file['size'] > $this->maxSize) { 
    throw new Exception('file_size'); } 
  }

  public function getType() 
  {
    $this->type = pathinfo($this->file['name'], PATHINFO_EXTENSION);
    $this->type = strtolower($this->type); 
    // debug($this->type);
  }

  public function checkType() 
  {
    if (!in_array($this->type, $this->validType)) {
      throw new Exception('file_type'); 
    }
  }

  public function createNewName() 
  {
    $this->fileName = time() . '.' . $this->type; 
  }

  public function moveFile($dir) 
  {
    $path = $dir . DIRECTORY_SEPARATOR . $this->fileName; 
    move_uploaded_file($this->file['tmp_name'], $path);
  }

  public function upload($dir) 
  {
    $this->checkFile();
    $this->checkSize();
    $this->getType();
    $this->checkType();
    $this->createNewName();
    $this->moveFile($dir);
  }

}

// if ($_FILES['img']['error'] == UPLOAD_ERR_NO_FILE) { 
//    header("location: form_add.php?error=not_file");
//    exit;
// }

// $maxFileSize = 500 * 1024 * 1024;
// if ($_FILES['img']['size'] > $maxFileSize) {
//    header("location: form_add.php?error=size_file");
//    exit;
// }

// $ext = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
// // debug($ext);
// $valid_exts = ['jpg', 'jpeg', 'png'];
// if (!in_array($ext, $valid_exts)) {
//       header("location: form_add.php?error=type_file");
//    exit;
// }
// $new_filename = time() . '.' . $ext;
// // debug($new_filename);
// $tmp_name = $_FILES['img']['tmp_name'];
// $path = '../assets/img/' . $new_filename;
// move_uploaded_file($tmp_name, $path);


