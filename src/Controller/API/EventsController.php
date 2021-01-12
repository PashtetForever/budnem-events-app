<?php

namespace App\Controller\API;

use App\Services\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path="/api/events")
 */
class EventsController extends AbstractController
{
    /**
     * @Route(path="/create", name="api.events.store", methods={"POST"})
     * @param Request $request
     */
    public function store(Request $request)
    {
        dump($request);
    }

    /**
     * @Route(path="/upload-image", name="api.events.upload_image", methods={"POST"})
     * @param Request $request
     * @param FileUploader $fileUploader
     * @param string $uploadDir
     * @return Response
     */
    public function uploadImage(Request $request, FileUploader $fileUploader, string $uploadDir): Response
    {
        $imagePath = null;
        /**
         * @var UploadedFile $file
         */
        foreach ($request->files as $file) {
            $newFile = $fileUploader->upload($uploadDir, $file, str_random() . '.' . $file->getClientOriginalExtension());
            $imagePath = $newFile->getPathname();
        }

        return new JsonResponse($imagePath, 201);
    }
}
