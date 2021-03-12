<?php

namespace App\Exception;

use App\Renderable;

class NotFoundException extends HttpException implements Renderable
{
    public function render()
    {

        throw new \Exception('Страница не найдена ошибка 404', 404);
    }
}