<?php

namespace Hcode\Template\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index ()
    {
        return 'Hola Mundo...';
    }
}
