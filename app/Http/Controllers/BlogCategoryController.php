<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategory;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Traits\Notification;

class BlogCategoryController extends Controller
{
    use Notification;
    public function allCategories()
    {
        $categories = BlogCategory::latest()->get();
        return view('admin.blogs.blog_categories', compact('categories'));
    }

    public function addCategory()
    {
        return view('admin.blogs.add_category');
    }

    public function storeCategory(Request $request)
    {
        BlogCategory::create([
            'blog_category' => $request->blog_category
        ]);

        return $this->notification('Category Added Successfully', 'success', 'blog.categories');
    }

    public function editCategory($id)
    {
        $category = BlogCategory::findOrFail($id);

        return view('admin.blogs.edit_blog_category', compact('category'));
    }

    public function updateCategory(StoreCategory $request)
    {
        $catID = $request->category_id;

        $categoryToUpdate = BlogCategory::findOrFail($catID);

        $categoryToUpdate->update([
            'blog_category' => $request->blog_category
        ]);

        return $this->notification('Blog Category Updated Successfully', 'success', 'blog.categories');
    }

    public function deleteCategory($id)
    {
        BlogCategory::findOrFail($id)->delete();
        return $this->notification('Category Deleted !', 'error', 'blog.categories');
    }

}
