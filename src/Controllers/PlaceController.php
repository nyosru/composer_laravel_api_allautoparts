<?php

namespace Phpcatcom\Permission\Gui\Controllers;
//namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Phpcatcom\Permission\Controllers\PermissionController;
use Phpcatcom\Permission\Models\Permission;
use Phpcatcom\Permission\Models\Role;
use Illuminate\Support\Facades\Artisan;

//class PermissionController extends BigControllers
class PlaceController extends Controller
{


    public function index()
    {
//        $in = PermissionGuiController::$in;
        $e = new PermissionGuiController();
        $in = $e->in;

        $in['data_roles'] = Role::all();
//        $in['places'] = [];
        $in['data'] = Permission::with('roles')->orderBy('name')->get();
        foreach ($in['data'] as $p) {
            $in['data2'][$p->id] = [];
            foreach ($p->roles as $pr) {
                $in['data2'][$p->id][$pr->id] = 1;
            }
        }

        return view('phpcatcom/permission/gui::places', $in);
    }

    public function store()
    {
    }

    public function refresh()
    {
//        $exitCode = Artisan::call('mail:send', [
//            'user' => $user, '--queue' => 'default'
//        ]);
//        $exitCode = Artisan::call('permissions:generate', [
////            'user' => $user, '--queue' => 'default'
//        ]);
        PermissionController::generate();
        return back();
    }

    public static function fresh()
    {
        PermissionGuiController::fresh();
        PermissionController::generate();
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
