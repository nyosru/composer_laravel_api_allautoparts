<?php

namespace Phpcatcom\Permission\Gui\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Phpcatcom\Permission\Models\Permission;
use Phpcatcom\Permission\Models\Role;
use Phpcatcom\Permission\Models\User;

use Phpcatcom\Permission\Gui\Controllers\UserController;

class PermissionGuiPageController extends Controller
{

    public $in = [];

    public function __construct()
    {
        $e = new PermissionGuiController();
        $this->in = $e->in;
    }

    // страница управление
    public function showIndex()
    {
        return view('phpcatcom/permission/gui::index', $this->in);
    }

    // страница описание
    public function opisanie()
    {
        return view('phpcatcom/permission/gui::opisanie', $this->in);
    }

}
