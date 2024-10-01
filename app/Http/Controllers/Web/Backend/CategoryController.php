<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use Exception;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::query();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('name', function ($data) {
                    return $data->name;
                })
                ->addColumn('action', function ($data) {
                    return '<div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <a href="' . route('category.edit', $data->id) . '" type="button" class="btn btn-primary text-white" title="Edit">
                        <i class="bi bi-pencil"></i>
                        </a>
                        <a href="#" onclick="showDeleteConfirm(' . $data->id . ')" type="button" class="btn btn-danger text-white" title="Delete">
                        <i class="bi bi-trash"></i>
                        </a>
                    </div>';
                })
                ->addColumn('status', function ($data) {
                    $status = ' <div class="form-check form-switch">';
                    $status .= ' <input onclick="showStatusChangeAlert(' . $data->id . ')" type="checkbox" class="form-check-input" id="customSwitch' . $data->id . '" getAreaid="' . $data->id . '" name="status"';
                    if ($data->status == "active") {
                        $status .= "checked";
                    }
                    $status .= '><label for="customSwitch' . $data->id . '" class="form-check-label" for="customSwitch"></label></div>';

                    return $status;
                })
                ->filterColumn('name', function($query, $keyword) {
                    $query->where('name', 'like', "%{$keyword}%");
                })
                ->filterColumn('status', function($query, $keyword) {
                    $query->where('status', 'like', "%{$keyword}%");
                })
                ->rawColumns(['action', 'name', 'status'])
                ->make(true);
        }

        return view('backend.layout.category.index');
    }
    public function create()
    {
        return view('backend.layout.category.create');
    }
     // store CourseCategory
     public function store(Request $request)
     {
           $request->validate([
             'name' => 'required|string|max:255',
         ]);

         // Generate a unique slug if not provided
         $slug = $request->input('slug') ?: generateUniqueSlug($request->input('name'), 'categories');

         // Create and save the new course card
         $category = new Category();
         $category->name = $request->input('name');
         $category->slug = $slug;
         $category->save();
         return redirect()->route('category.index')->with('t-success', 'Data Updated Successfully');
     }

     public function edit($id)
     {
         $data = Category::find($id);
         return view('backend.layout.category.edit', compact('data'));
     }

     public function update(Request $request, $id)
 {
     $request->validate([
         'name' => 'required|string|max:255',
     ]);

     // Find the existing course category
     $courseCategory = Category::findOrFail($id);

     // Generate a unique slug if not provided
     $slug = $request->input('slug') ?: generateUniqueSlug($request->input('name'), 'categories', $id);

     // Update the course category with the new data
     $courseCategory->name = $request->input('name');
     $courseCategory->slug = $slug;
     $courseCategory->save();

     return redirect()->route('category.index')->with('t-success', 'Data Updated Successfully');
 }

     /**
      * Change the status of the specified dynamic page.
      *
      * @param int $id
      * @return JsonResponse
      */
     public function status(int $id): JsonResponse
     {
         $data = Category::findOrFail($id);
         if ($data->status == 'active') {
             $data->status = 'inactive';
             $data->save();

             return response()->json([
                 'success' => false,
                 'message' => 'Unpublished Successfully.',
                 'data'    => $data,
             ]);
         } else {
             $data->status = 'active';
             $data->save();

             return response()->json([
                 'success' => true,
                 'message' => 'Published Successfully.',
                 'data'    => $data,
             ]);
         }
     }

    /**
      * Remove the specified dynamic page from the database.
      *
      * @param int $id
      * @return JsonResponse
      */
     public function destroy(int $id): JsonResponse
     {
         try {
             $data = Category::findOrFail($id);
             $data->delete();

             return response()->json([
                 'success' => true,
                 'message' => 'Data deleted successfully.',
             ]);
         } catch (Exception $e) {
             return response()->json([
                 'success' => false,
                 'message' => 'Failed to delete this.',
             ]);
         }
     }


}
