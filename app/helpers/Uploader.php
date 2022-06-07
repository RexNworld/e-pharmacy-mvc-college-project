<?php
class Uploader{
 
    const UPLOAD_DIR = PATH_ROOT . '/uploads/' /* This is an absolute path */;
    const UPLOAD_DIR_ACCESS_MODE = 0777;
    const UPLOAD_MAX_FILE_SIZE = 10485760;
    const UPLOAD_ALLOWED_MIME_TYPES = [
        'image/jpeg',
        'image/jpg',
        'image/png',
        'image/gif',
    ];
    
    
    public function __construct(){
        
    }
    /**
     * Upload the files list.
     *
     * @param array $files (optional) Files list - as received from $_FILES variable.
     * @return bool|string[] TRUE on success, or a list of errors on failure.
     */

     public function upload(array $files = [],$username,$posttype){
         $normalizeFiles = $this->normalizeFiles($files);
         $uploadResult = [
             'message' => '',
             'error' => FALSE,
         ];
        //  foreach ($normalizeFiles as $normalizeFile){
            //  var_dump($normalizeFile);
             $uploadResult = $this->uploadFile($normalizeFiles,$username,$posttype);

                if($uploadResult[1] !== 1){
                    return $uploadResult;
                }
                else{
                    return $uploadResult;
                }
        //  }
            $result = empty($errors) ? $uploadResult : $errors;
            
         return ($result);
     }

     /**
     * Normalize the files list.
     *
     * @link https://www.php-fig.org/psr/psr-7/#16-uploaded-files PSR-7: 1.6 Uploaded files.
     *
     * @param array $files (optional) Files list - as received from $_FILES variable.
     * @return array Normalized files list.
     */

     private function normalizeFilesArray(array $files = []){
         $normalizedFiles = [];
         foreach ($files as $filesKey => $filesItem) {
            foreach ($filesItem as $itemKey => $itemValue) {
                $normalizedFiles[$itemKey][$filesKey] = $itemValue;
            }
        }

        return $normalizedFiles;
     }

     private function normalizeFiles(array $files = []){
        $normalizedFiles = [];
        foreach ($files as $filesKey => $filesItem) {
               $normalizedFiles[$filesKey] = $filesItem;
       }

       return $normalizedFiles;
    }
    /**
     * Upload a file.
     *
     * @param array $file A normalized file item - as received from $_FILES variable.
     * @return bool|string TRUE on success, or an error string on failure.
     */

     private function uploadFile(array $file = [],$username,$posttype){
        $name = $file['name'];
        $type = $file['type'];
        $tmpName = $file['tmp_name'];
        $nameenc = hash('sha1',$file['name']);
        $extn = pathinfo($name, PATHINFO_EXTENSION);
        $error = $file['error'];
        $size = $file['size'];
        
        switch($error){
            case UPLOAD_ERR_OK:
                if ($size > self::UPLOAD_MAX_FILE_SIZE) {
                    return [sprintf('The size of the file "%s" exceeds the maximal allowed size (%s Byte).'
                        , $name
                        , self::UPLOAD_MAX_FILE_SIZE
                    ),0];
                }
                
                if (!in_array($type, self::UPLOAD_ALLOWED_MIME_TYPES)) {
                    return [sprintf('The file "%s" is not of a valid MIME type. Allowed MIME types: %s.'
                            , $name
                            , implode(', ', self::UPLOAD_ALLOWED_MIME_TYPES)
                    ),0];
                }

                $uploadDirPath = rtrim(self::UPLOAD_DIR, '/');
                $uploadDirPath = $uploadDirPath .'/'.$posttype.'/'.$username;

                $uploadPath = $uploadDirPath . '/' . $nameenc.'.'.$extn;
                $this->createDirectory($uploadDirPath);

                if (!move_uploaded_file($tmpName, $uploadPath)) {
                    return [sprintf('The file "%s" could not be moved to the specified location.'
                            , $name
                    ),0];
                }
                return [($nameenc.'.'.$extn),1];
                break;
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                return [sprintf('The provided file "%s" exceeds the allowed file size.'
                        , $name
                ),0];
                break;
            case UPLOAD_ERR_PARTIAL:
                return [sprintf('The provided file "%s" was only partially uploaded.'
                        , $name
                ),0];
                break;

            case UPLOAD_ERR_NO_FILE:
                return 'No file provided. Please select at least one file.';
                break;

            default:
                return 'There was a problem with the upload. Please try again.';
                break;
        }
        return TRUE;
     }
 /**
     * Create a directory at the specified path.
     *
     * @param string $path Directory path.
     * @return $this
     */
    private function createDirectory(string $path) {
        try {
            if (file_exists($path) && !is_dir($path)) {
                throw new UnexpectedValueException(
                'The upload directory can not be created because '
                . 'a file having the same name already exists!'
                );
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            exit();
        }

        if (!is_dir($path)) {
            mkdir($path, self::UPLOAD_DIR_ACCESS_MODE, TRUE);
        }

        return $this;
    }

}