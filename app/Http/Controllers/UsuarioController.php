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
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->user=User::find($route->getParameter('usuario'));
    }
    public function index()
    {
        $users = User::paginate(3);
        //Session::flash('message3','Hola');
       // Session::flash('class', 'success');
        return view('usuario.index', compact('users'));
    }


    public function create()
    {
        return view('usuario.create');
    }

    public function store(UserCreateRequest $request)
    {
        User::create([
            'name'     => $request['name'],
            'email'    => $request['email'],
            'password' => bcrypt($request['plainPassword_first'])]);

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