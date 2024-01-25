<?php

namespace Phpcatcom\Permission\Gui\Controllers;
//namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;
use Phpcatcom\Permission\Models\Role;

//class PermissionController extends BigControllers
class RoleController extends Controller
{

    public function index()
    {
//        $in = PermissionGuiController::$in;
        $e = new PermissionGuiController();
        $in = $e->in;

        $in['data'] = Role::with('users')->get();
        return view('phpcatcom/permission/gui::roles', $in);
    }

    public function store( Request $request)
    {

        Role::insert($request->only('name','description'));
//        dd($request->all());

        return back();
    }

    public function create()
    {
    }

    public function show()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }

    public function edit()
    {
    }

//    public static $in = ['menu' => [
//        [
//            'route' => 'index',
//            'title' => 'Управление',
//            'template' => 'phpcatcom/permission-gui::index'
//        ],
//        [
//            'route' => 'roles',
//            'title' => 'Роли',
//            'template' => 'phpcatcom/permission-gui::roles'
//        ],
//        [
//            'route' => 'places',
//            'title' => 'Места',
//            'template' => 'phpcatcom/permission-gui::places'
//        ],
//        [
//            'route' => 'setter',
//            'title' => 'Назначение ролей пользователям',
//            'template' => 'phpcatcom/permission-gui::setter'
//        ],
//    ]];
//
//
//    public function showIndex()
//    {
//        return view('phpcatcom/permission-gui::index', self::$in);
//    }
//
//    public function showRoles()
//    {
//        return view('phpcatcom/permission-gui::roles', self::$in);
//    }
//
//    public function showSetter()
//    {
//        return view('phpcatcom/permission-gui::setter', self::$in);
//    }
//
//    public function showPlaces()
//    {
//
//        self::$in['places'] = \PhpCatCom\Models\Permission::all();
//
//        return view('phpcatcom/permission-gui::places', self::$in);
//    }

}
