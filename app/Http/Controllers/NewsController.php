<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
{
    
    public function index()
    {
        $news = News::latest()->paginate(10); 
    return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        News::create($request->all());
        return redirect()->route('news.index');
    }

    public function show(string $id)
    {
        $news=News::findOrFail($id);
        $comments=$news->comments()->latest()->paginate(5);
        return view('news.show',compact('news','comments'));
    }

    public function edit(string $id)
    {
        $news=News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, string $id)
    {
        $news=News::findOrFail($id);
        $news->update($request->all());
        return redirect()->route('news.index');
    }

    public function destroy(string $id)
    {
        if(auth()->user()->role!=='admin'){	
         abort(403,'Bạn không có quyền xóa tin tức.');	
    }	
    $news=News::findOrFail($id);
    $news->delete();
    return redirect()->route('admin.news.index')->with('success','Đã xóa tin tức thành công');	
    }
}
