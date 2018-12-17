<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * List category and add page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $cats = Category::where('deleted', 0)->get();

//        die(json_encode($cats));

        return view('admin.pages.list_category', ['cats' => $cats]);
    }

    /**
     * Add new category
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Request $request)
    {
        $name = $request->input('cat-name');
        $cat = new Category();

        if ($name) {
            $cat->name = $name;
            $cat->deleted = 0;
            $cat->created_by = 'System';
            $cat->updated_by = 'System';
            $cat->save();
        }

        return redirect()->route('admin.list_category');
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id = null)
    {
        if ($request->method() == 'POST') {
            $catId = $request->input('cat-id');
            $cat = Category::find($catId);

            if ($cat) {
                $cat->name = $request->input('cat-name');
                $cat->save();
            }

            return redirect()->route('admin.list_category');
        }

        $cats = Category::all();
        $updateCat = Category::find($id);

        return view('admin.pages.update_category', [
            'cats' => $cats,
            'updateCat' => $updateCat
        ]);
    }

    /**
     * Delete category by ID
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $cat = Category::find($id);
        $cat->deleted = 1;
        $cat->save();

        return redirect()->route('admin.list_category');
    }
}
