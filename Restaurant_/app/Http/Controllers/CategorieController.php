<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CategorieController extends Controller
{
    /**
     * Display All Categories
     */
    public function categories()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }

        $categories = DB::table('categories')->get();
        return view('Admin.all_categories', compact('categories'));
    }

    /**
     * Function to redirect to page to add categorie.
     */
    public function add_categorie()
    {
        return view('Admin.add_categorie');
    }
    /**
     * Function to add a categorie
     */
    public function categorie_add_process(Request $req)
    {

        $data = array();
        $data['category_name'] = $req->input('name');
        $data['category_descr'] = $req->input('description');

        $insert = DB::table('categories')->insert($data);

        session()->flash('success', 'Categorie added successfully !');
        return redirect()->route('/admin/categories');
    }

    /**
     * Function to redirect to edit page of categorie.
     */
    public function categorie_edit($id)
    {
        $categories = DB::table('categories')->where('id', $id)->get();

        return view('Admin.edit_categorie', compact('categories'));
    }

    /**
     * Function to edit Categorie.
     */
    public function categorie_edit_process(Request $req, $id)
    {
        $data = array();
        $data['category_name'] = $req->input('name');
        $data['category_descr'] = $req->input('description');

        $update = DB::table('categories')->where('id', $id)->update($data);
        session()->flash('success', 'Categorie updated successfully!');
        return redirect()->route('/admin/categories');
    }


    /**
     * Function to delete Categorie.
     */
    public function categorie_delete_process($id)
    {
        $usertype = Auth::user()->usertype;
        if ($usertype != 'Sub Admin') {
            $delete = DB::table('categories')->where('id', $id)->delete();
            session()->flash('success', 'Categorie deleted successfully !');
        }
        return back();
    }
}
