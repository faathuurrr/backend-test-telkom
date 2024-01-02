<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


/**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Backend-Test-Telkom"
     * )
     * @OAS\SecurityScheme(
     *     securityScheme="bearerAuth",
     *     type="http",
     *     scheme="bearer",
     *     bearerFormat="JWT"
     * )
     *
     * @OA\Tag(
     *     name="Conversation",
     *     description="API Endpoints Group of Conversation"
     * )
     * @OA\Tag(
     *     name="Send Message",
     *     description="API Endpoints Group of Send Message"
     * )
     *
     * @OA\Schema(
     *     schema="SuccessResult",
     *     title="Schemas for success response",
     * 	   @OA\Property(
     * 		   property="success",
     * 		   type="boolean"
     * 	   ),
     * 	   @OA\Property(
     * 		   property="message",
     * 		   type="string"
     * 	   ),
     * 	   @OA\Property(
     * 		   property="data",
     * 		   type="object"
     * 	   ),
     * )
     * @OA\Schema(
     *     schema="FailedResult",
     *     title="Schemas for failed response",
     * 	   @OA\Property(
     * 		   property="success",
     * 		   type="boolean"
     * 	   ),
     * 	   @OA\Property(
     * 		   property="message",
     * 		   type="string"
     * 	   ),
     * 	   @OA\Property(
     * 		   property="error_code",
     * 		   type="integer"
     * 	   ),
     * 	   @OA\Property(
     * 		   property="data",
     * 		   type="object"
     * 	   ),
     * )
     *
     */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
