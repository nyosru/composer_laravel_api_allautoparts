<?php

namespace Phpcatcom\Permission\Gui\Controllers;
//namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Phpcatcom\Permission\Models\Role;
use Phpcatcom\Permission\Models\User;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

//class PermissionController extends BigControllers
class UserController extends Controller
{

    public function setAccessFull(int $id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->access_full = $request->status_new ? true : false;
        $user->save();
        return back();
    }

    public function index()
    {
        $e = new PermissionGuiController();
        $in = $e->in;

        $in['data'] = User::with('role')->get();
        $in['data_roles'] = Role::all();

        return view('phpcatcom/permission/gui::users', $in);

    }

    public function store(Request $request)
    {
//        dd($request->all());
        $this->setAccessFull($request->user_id, $request);
        return back();
    }

    public function create()
    {
    }

    public function show()
    {
    }

    public function update($id, Request $request)
    {
        //        dd([$user,$request->all()]);
//                dd($request->all());
//        $user
//        $user->role_id = $request->role_id;
//        $user->save();

// validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = [
            'role_id' => ['numeric'],
//            'name'       => 'required',
//            'email'      => 'required|email',
//            'shark_level' => 'required|numeric'
        ];
        $validator = Validator::make($request->all(), $rules);
//        $validator = $request->validate( $rules);

        // process the login
        if ($validator->fails()) {
            return back()
//            Redirect::to('sharks/' . $id . '/edit')
                ->withErrors($validator)//                ->withInput(Input::except('password'))
                ;
        } else {
            // store
            $user = User::find($id);
            $user->role_id = $request->role_id;
//            $shark->email      = Input::get('email');
//            $shark->shark_level = Input::get('shark_level');
            $user->save();

            // redirect
//            Session::flash('message', 'Successfully updated shark!');
//            return Redirect::to('sharks');
            return back();
//            return back()->session()->flash('status', 'Изменения сохранены!');
            return redirect()->route('phpcatcom.permission.user.index')->flash('status', 'Изменения сохранены!');
//            return redirect()->route('phpcatcom.permission.user.index',['status' => 'Изменения сохранены!'])
//                ->with('status', 'Изменения сохранены!')
            ;
        }


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
