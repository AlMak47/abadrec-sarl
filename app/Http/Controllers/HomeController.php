<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use Illuminate\Support\Str;
use App\Banniere;
use App\Exceptions\Handler;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managePage()
    {
        $page  =  Pages::all();
        return view('admin.page-manage')->with([
          'pages' =>  $page
        ]);
    }

    public function editPage($slug) {
      $editable = Pages::find($slug);
      return view('admin.edit')->withEditable($editable);
    }


    public function manageSlideshow() {
      return view('admin.page-slideshow');
    }

    public function addPage(Request $request) {
      $validation = $request->validate([
        'titre' =>  'required|string',
        'tag' =>  'required|string',
        'contenu' =>  'required|string'
      ]);
      $page = new Pages;
      $page->slug = Str::slug($request->input('titre'),'-');
      $page->titre = $request->input('titre');
      $page->tag = $request->input('tag');
      $page->content  = $request->input('contenu');
      $page->save();
      return redirect('/admin/pages')->withSuccess("Success!");

    }
    //make edit page

    public function makeEditPage(Request $request) {
      $validation= $request->validate([
        'slug'  =>  'required|exists:pages,slug',
        'titre' =>  'required|string',
        'tag' =>  'required|string',
        'contenu' =>  'required|string'
      ]);

      $edit = Pages::find($request->input('slug'));
      $edit->titre = $request->input('titre');
      $edit->content = $request->input("contenu");
      $edit->tag = $request->input("tag");
      $edit->save();
      return redirect('admin/pages')->withSuccess("Success!");

    }

    // add slideshow

    public function addSlideShow(Request $request) {
      $validation = $request->validate([
        'titre' =>  'required|string',
        'image'  =>  'required|image',
        'contenu' =>  'required|string'
      ]);
      try {

        $ban = new Banniere;
        $ban->titre   = $request->input('titre');
        $ban->contenu   = $request->input('contenu');
        $ban->slug = Str::slug($request->input('titre'),'-');

        if($request->hasFile('image')) {
          // le fichier existe
          $extension = $request->file('image')->getClientOriginalExtension();
          $ban->image = Str::random(10).'.'.$extension;
          $chemin = config('slideshow.path');
          if($request->file('image')->move($chemin,$ban->image)) {
            // upload ok
            $ban->save();
            return redirect("/admin/slideshow")->withSuccess("Success!");
          } else {
            throw new Handler("Erreur de telechargement!");
          }
        } else {
          throw new Handler("Aucune image");
        }
      } catch (Handler $e) {
        return back()->with("_errors",$e->getMessage());
      }
    }
}
