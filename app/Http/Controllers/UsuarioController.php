<?php namespace Cinema\Http\Controllers;

use Cinema\Http\Requests;
use Cinema\Http\Requests\UserCreateRequest;
use Cinema\Http\Requests\UserUpdateRequest;
use Cinema\Http\Controllers\Controller;
use Cinema\User;
use Session;
use Redirect;
use Illuminate\Http\Request;
use ValidatesRequests;
use Illuminate\Routing\Route;

class UsuarioController extends Controller{

   /* public function __construct(){
        $this->middleware('auth');
    }*/
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->user=User::find($route->getParameter('usuario'));
    }
    public function index(Request $request)
    {
        $users = User::paginate(2);
        if($request -> ajax()){
            return response()->json(view('usuario.users', compact('users'))->render());
        }
        return view('usuario.index', compact('users'));
    }


    public function create()
    {
        return view('usuario.create');
    }

    public function store(UserCreateRequest $request)
    {
        
    User::create($request->all()); //Para optimizar codigo se puede realizar de esta forma
       /*User::create([
           'name'=> $request['name'],
           'email'=> $request['email'],
           'password'=> $request['password'],

           ]);*/

        Session::flash('message','Usuario Creado Correctamente');
        return Redirect::to('/usuario');
    }

    public function edit($id)
    {
        return view('usuario.edit',['user'=>$this->user]);
    }
    public function update($id, UserUpdateRequest $request)
    {
        $this->user->fill($request->all());
        $this->user->save();
        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuario');
    }

    public function destroy($id)
    {
        $this->user->delete();
        Session::flash('message','Usuario Eliminado Correctamente');
        Session::flash('class','success');
        return Redirect::to('/usuario');
    }
}