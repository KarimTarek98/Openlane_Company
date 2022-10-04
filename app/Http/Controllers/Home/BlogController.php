<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlog;
use App\Http\Requests\UpdateBlog;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Traits\Notification;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    use Notification;
    public function allBlogs()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.all_blogs', compact('blogs'));
    }

    public function addBlog()
    {
        $categories = BlogCategory::latest()->get();
        return view('admin.blogs.add_blog', compact('categories'));
    }

    public function storBlog(StoreBlog $request)
    {
        $blogImg = $request->file('blog_image');

        $imgGenerateName = hexdec(uniqid()) . '.' . $blogImg->getClientOriginalExtension();

        Image::make($blogImg)->resize(430, 327)->save('uploads/blog/' . $imgGenerateName);

        $saveUrl = 'uploads/blog/' . $imgGenerateName;

        Blog::create([
            'blog_title' => $request->blog_title,
            'blog_image' => $saveUrl,
            'blog_description' => $request->blog_description,
            'blog_tags' => $request->blog_tags,
            'blog_category_id' => $request->blog_category_id
        ]);

        return $this->notification('Blog Added Successfully', 'success', 'all.blogs');
    }

    public function editBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = BlogCategory::latest()->get();

        return view('admin.blogs.edit_blog', compact('blog', 'categories'));
    }

    public function updateBlog(UpdateBlog $request)
    {
        $blogID = $request->blog_id;

        $blog = Blog::findOrFail($blogID);
        if ($request->file('blog_image'))
        {
            $img = $request->file('blog_image');

            $imgGenerateName = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();

            unlink($blog->blog_image);

            Image::make($img)->resize(430, 327)->save('uploads/blog/' . $imgGenerateName);

            $saveUrl = 'uploads/blog/' . $imgGenerateName;

            $blog->update([
                'blog_title' => $request->blog_title,
                'blog_image' => $saveUrl,
                'blog_description' => $request->blog_description,
                'blog_tags' => $request->blog_tags,
                'blog_category_id' => $request->blog_category_id
            ]);

            return $this->notification('Blog Updated Successfuly', 'sucess', 'all.blogs');
        }
        else
        {
            $blog->update([
                'blog_title' => $request->blog_title,
                'blog_description' => $request->blog_description,
                'blog_tags' => $request->blog_tags,
                'blog_category_id' => $request->blog_category_id
            ]);

            return $this->notification('Blog Updated Successfuly', 'sucess', 'all.blogs');
        }

    }

    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        unlink($blog->blog_image);
        $blog->delete();
        return $this->notification('Blog Deleted !', 'error', 'all.blogs');
    }

    public function blogDetails($id)
    {
        $blog = Blog::findOrFail($id);
        $blogs = Blog::latest()->limit(5)->get();
        $categories = BlogCategory::get();
        return view('app.blogs.blog_details', compact('blog', 'blogs', 'categories'));
    }

    public function categoryBlogs($id)
    {
        $blogs = Blog::where('blog_category_id', '=', $id)->orderBy('id', 'DESC')->get();
        $categories = BlogCategory::get();
        $allBlogs = Blog::latest()->limit(5)->get();

        return view('app.blogs.category_blogs', compact('blogs', 'allBlogs', 'categories'));
    }

    public function blogs()
    {
        $blogs = Blog::latest()->paginate(3);
        $allBlogs = Blog::latest()->limit(5)->get();
        $categories = BlogCategory::get();
        return view('app.blogs.all_blogs', compact('blogs', 'allBlogs', 'categories'));
    }

}
