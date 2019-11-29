<?php declare(strict_types=1);

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractFOSRestController
{
    public function index(Request $request): Response
    {
        $server = $request->server;

        $data = [
            'hostname' => $server->get('HOSTNAME'),
            'http_forwarded_for' => $server->get('HTTP_X_FORWARDED_FOR'),
            'server_addr' => $server->get('SERVER_ADDR'),
            'server_version' => $server->get('SERVER_SOFTWARE'),
            'balancer_addr' => $server->get('REMOTE_ADDR'),
        ];

        return $this->handleView(
            $this->view($data)
        );
    }
}