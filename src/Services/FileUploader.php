<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    public function upload($uploadDir, UploadedFile $file, $filename): File
    {
        try {
            return $file->move($uploadDir, $filename);
        } catch (FileException $e){
            throw new FileException('Failed to upload file');
        }
    }
}
