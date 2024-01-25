<?php

namespace Phpcatcom\Permission\Gui\Controllers;
//namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Phpcatcom\Permission\Models\Permission;
use Phpcatcom\Permission\Models\Role;

//class PermissionController extends BigControllers
class SetterController extends Controller
{


    public function setAccessFull( $role, Request $request)
    {
        $role2 = Role::findOrFail($role);
        $role2->access_full = $request->new_status ? true : false;
        $role2->save();
        return back();
    }

    public function index()
    {
        $in = PermissionGuiController::$in;
//        $in['roles'] = Role::all();
        $in['places'] = [];
        return view('phpcatcom/permission/gui::setter', $in);
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $perm = Permission::find($request->permission_id);
        if ($request->action == 'on') {
            $perm->roles()->attach($request->role_id);
        } // off
        else {
            $perm->roles()->detach($request->role_id);
        }

//            $e = Permission::insert($request->only('permission_id','role_id'));
//    }

//        dd([$perm, $request->all()]);

        if ($request->return == 'back') {
            return back();
        }
    }

    public
    function create()
    {
    }

    public
    function show()
    {
    }

    public
    function update()
    {
    }

    public
    function destroy()
    {
    }

    public
    function edit()
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
