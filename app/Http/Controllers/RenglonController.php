<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Renglon;
use App\Planilla;
use App\Http\Requests\RenglonRequest;
use Illuminate\Support\Facades\Auth;

class RenglonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index($planilla_id)
    {
      $renglones=Renglon::where('planilla_id', $planilla_id)->get();
        return view('renglon/lista',compact('renglones'));
    }
  
    public function create($planilla_id)
    {
      $planilla=Planilla::find($planilla_id);
      if(Auth::user()->admin){
          return view('renglon/alta',compact('planilla'));
        }
        return view('auth/alerta');
    }
  
    public function edit($planilla_id,$id)
    {
        if(Auth::user()->admin){
          $renglon=Renglon::findorfail($id);
          return view('renglon/editar',compact('renglon'));
        }
        return view('auth/alerta');
    }
  
    public function destroy($id)
    {
      if(Auth::user()->admin){
        $renglon=Renglon::find($id);
        $renglon->delete();
        return redirect()->route('renglon.index', $planilla);
      }
      return view('auth/alerta');
    }
  
    public function update(RenglonRequest  $data, $planilla_id, $id)
    {
      if(Auth::user()->admin){
        $renglon=$data->all();
        $planilla_id= $data->planilla_id;
        Renglon::find($id)->update($renglon);
        return redirect()->route('renglon.index', $planilla_id);
      }
      return view('auth/alerta');
    }
  
    public function store(RenglonRequest  $data)
    {
      if(Auth::user()->admin){
        $planilla=$data->planilla_id;
        $renglon=$data->all();
        Renglon::create($renglon);
         return redirect()->route('renglon.index', $planilla);
      }
       return view('auth/alerta');
    }
  
}
