<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Validation\ValidationException;

class FileUpload
{
    public function handleFile($file, $path, $previousFile = null, $is_delete = false)
    {
        try {
            if (is_string($file)) return $file;

            $fileName = $previousFile;
            if ($file) {
                $myRandomString = Str::random(10);
                $fileName = $path . '/' . $myRandomString . time() . '.' . $file->getClientOriginalExtension();
                $file->move($path, $fileName);
            }

            if (($file || $is_delete) && $previousFile) {
                $this->deleteFile($previousFile);
            }

            if ($is_delete) {
                $fileName = null;
            }

            return $fileName;
        } catch (ValidationException) {

            return null;
        }
    }

    public function deleteFile($oldFile)
    {
        if ($oldFile) {
            $oldPath = public_path($oldFile);
            if (file_exists($oldPath)) {
                File::delete($oldPath);
            }
        }
    }

    // note : new data, new attachment filse, file storing path, previous data which is get from database and, field name if it's not attachment
    public function handleMultipleFiles(string $path, array $newData, array $attachments, $oldData = null, string $field = 'attachment'): array|null
    {
        // return 'fdf';
        if ($oldData instanceof Collection) {
            $oldData = $oldData->toArray();
        }
        try {
            $results = [];
            $oldLength = 0;
            foreach ($newData as $key => $data) {

                $is_delete = false;

                if (isset($newData[$key]['is_delete'])) {
                    $is_delete = $newData[$key]['is_delete'];
                }

                if (isset($oldData[$key]['attachment'])) {
                    $data[$field] = $oldData[$key]['attachment'];
                }

                if ((isset($oldData[$key]['attachment']) && ($attachments[$key] != 'null' || $is_delete))) {
                    $this->deleteFile($oldData[$key]['attachment']);
                    $data[$field] = null;
                }

                // as null is passed as string from frontend
                if ($attachments[$key] != 'null') {
                    $attachment = $this->handleFile($attachments[$key], $path);
                    $data[$field] = $attachment;
                }

                $results[$key] = $data;
            }

            return $results;
        } catch (ValidationException) {

            return null;
        }
    }
}
