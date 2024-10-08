<?php

namespace App\Traits;

use Exception;
use App\Helpers\ImageCompressing;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadTrait
{
    /**
     * delete specified file in storage
     * @param string $file
     * @return void
     */

    public function remove(string $file): void
    {
        if ($this->exist($file)) {
            Storage::disk('public')->delete($file);
        }
    }

    /**
     * check specified file in storage
     * @param string $file
     * @return bool
     */

    public function exist(string $file): bool
    {
        return Storage::disk('public')->exists($file);
    }

    /**
     * Handle upload file to storage
     * @param string $disk
     * @param UploadedFile $file
     * @param bool $originalName
     * @return string
     */

    public function upload(string $disk, UploadedFile $file, bool $originalName = false): string
    {
        if (!$this->exist($disk)) {
            Storage::makeDirectory($disk);
        }

        if ($originalName) {
            return $file->storeAs($disk, $this->originalName($file));
        }

        return Storage::put($disk, $file);
    }

    /**
     * Handle get original name
     * @param UploadedFile $file
     * @return string
     */

    public function originalName(UploadedFile $file): string
    {
        return $file->getClientOriginalName();
    }

    /**
     * Handle get original extension
     *
     * @param UploadedFile $file
     * @return string
     */

    public function originalExtension(UploadedFile $file): string
    {
        return $file->getClientOriginalExtension();
    }

    /**
     * Get the storage path
     *
     * @return void
     */
    public function folderStorage(String $folderNameEnum, String $folderName)
    {
        $destinationPath = $folderName . '/' . $folderNameEnum;
        if (!file_exists(public_path('storage/' . $destinationPath))) {
            mkdir(public_path('storage/' . $destinationPath), 0777, true);
        }
        return $destinationPath;
    }

    /**
     * Image uploader with resize image
     *
     * $imagePath The image path
     * @param string $storePath the store path
     * @param array{name:string, duplicate:bool, quality:int} $options The compress option
     * @see https://image.intervention.io/v3/introduction/index
     * @see https://image.intervention.io/v3/modifying/resizing
     */
    public function compressImage($fileName, $file): mixed
    {
        $imageInfo = getimagesize($file);
        $imageType = $imageInfo[2];

        switch ($imageType) {
            case IMAGETYPE_JPEG:
                $sourceImage = imagecreatefromjpeg($file);
                break;
            case IMAGETYPE_PNG:
                $sourceImage = imagecreatefrompng($file);
                break;
            default:
                throw new Exception('Unsupported image type');
        }

        // Generate temporary file name with specific prefix and .webp extension
        $tempFileName = $fileName . '.webp';
        $tempFilePath = sys_get_temp_dir() . '/' . $tempFileName;

        // Save the compressed image as webp
        imagewebp($sourceImage, $tempFilePath, 80);

        // Clean up resources
        imagedestroy($sourceImage);

        // Create an UploadedFile instance to return
        return new UploadedFile($tempFilePath, $tempFileName, 'image/webp', null, true);
    }
}
