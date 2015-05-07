<?php

namespace App\Controller;

use Kwak\Framework\Controller\BaseController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class FrontController
 *
 * @package App\Controller
 */
class FrontController extends BaseController
{
    /**
     * @param Request $request
     * @param string  $name
     *
     * @return Response
     */
    public function test(Request $request, $name, $_format)
    {
        if ($_format == 'json') {
            return new JsonResponse($name);
        } else {
            return new Response($name);
        }
    }
}
