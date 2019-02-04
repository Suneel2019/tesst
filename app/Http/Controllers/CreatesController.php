<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreatesController extends Controller
{

     public function home(){
      
      return view('home');

    }

    public function dashboard(){
      $articles= Article::all();
      return view('dashboard',['articles'=>$articles]);
    }

   

    public function add(Request $request){

    	$this-> validate($request, [
    	'Title'=>'required|min:6',
    	'Description'=>'required|max:255',
    	]);

    	$articles= new Article;
    	$articles->Title= $request->input('Title');
    	$articles->Description= $request->input('Description');
    	$articles->save();
    	return redirect('/dashboard')->with('info','Article saved successfully!');
    }

public function update($Id){

		$articles= Article::find($Id);
    	return view('update',['articles'=>$articles]);

}


public function edit( Request $request, $Id){

  	$this-> validate($request, [
    	'Title'=>'required|min:6',
    	'Description'=>'required|max:255',
    	]);

  	$data= array(

  		'Title'=>$request->input('Title'),
  		'Description'=> $request->input('Description')
  	);

  	Article::where('Id', $Id)
  	->update($data);
    	return redirect('/dashboard')->with('info','Article updated successfully!');
}


public function read($Id){

$articles= Article::find($Id);
return view('read',['articles' => $articles]);

}


public function delete($Id){

	Article::where('Id', $Id)
  	->delete();
    	return redirect('/dashboard')->with('info','Article deleted successfully!');
}

public function login(){

  return view('login');
}

public function register(){
  return view('register');
}
}
