<?php

namespace Phpcatcom\Permission\Gui\Controllers;
//namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Phpcatcom\Permission\Models\Permission;
use Phpcatcom\Permission\Models\Role;
use Phpcatcom\Permission\Models\User;

use Phpcatcom\Permission\Gui\Controllers\UserController;

//class PermissionController extends BigControllers
class PermissionGuiController extends Controller
{

    public $in = ['menu' => [
        [
            'route' => 'phpcatcom.permission.index',
            'title' => 'Управление',
            'template' => 'phpcatcom/permission_gui::index'
        ],
        [
            'route' => 'phpcatcom.permission.user.index',
            'title' => 'Пользователи',
            'template' => 'phpcatcom/permission_gui::users'
        ],
        [
            'route' => 'phpcatcom.permission.role.index',
            'title' => 'Роли',
            'template' => 'phpcatcom/permission_gui::roles'
        ],
        [
            'route' => 'phpcatcom.permission.places.index',
            'title' => 'Места (роуты)',
            'template' => 'phpcatcom/permission_gui::places'
        ],
//        [
//            'route' => 'phpcatcom.permission.setter.index',
//            'title' => 'Назначение ролей пользователям',
//            'template' => 'phpcatcom/permission_gui::setter'
//        ],
        [
            'route' => 'phpcatcom.permission.opisanie',
            'title' => 'Описание',
            'template' => 'phpcatcom/permission_gui::opisanie'
        ],
    ]];


    public function __construct()
    {
        $this->in['full_access_count'] = User::whereAccessFull(true)->count();
        $this->in['role_count'] = Role::all()->count();
    }

    public static function l()
    {
        $classes = get_declared_classes();
//                    dd($classes);
//                    $aa = array_search('Phpcatcom',$classes);
//                    dd($aa);
        foreach ($classes as $c) {
            if (strpos($c, 'catcom'))
                echo $c . '<br/>';
        }
//        dd(22);
    }

    public static function fresh()
    {
        Permission::query()->delete();
//        Role::query()->delete();
    }

//    public static $in = ['menu' => [
//        [
//            'route' => 'phpcatcom.permission.index',
//            'title' => 'Управление',
//            'template' => 'phpcatcom/permission-gui::index'
//        ],
//        [
//            'route' => 'phpcatcom.permission.role.index',
//            'title' => 'Роли',
//            'template' => 'phpcatcom/permission-gui::roles'
//        ],
//        [
//            'route' => 'phpcatcom.permission.places',
//            'title' => 'Места',
//            'template' => 'phpcatcom/permission-gui::places'
//        ],
//        [
//            'route' => 'phpcatcom.permission.setter',
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
