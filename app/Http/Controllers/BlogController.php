<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Services\UploadPhoto;

class BlogController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
   */
  public function index()
  {

    $blog = Blog::paginate(6);
    return view('page.blog' . '.index', [
      'title' => '',
      'items' => $blog
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
   */
  public function create(Blog $blog)
  {

    return view('page.blog' . '.create', [
      'title' => '',
      'model' => $blog
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(BlogRequest $request)
  {
    if ($request->file()) {
      $name = array_keys($request->file())[0];
      $file = UploadPhoto::upload($request->{$name});
      $request->request->add(['file_id' => $file->id]);
    }
    Blog::create($request->all());
    return redirect()->route('blog.index')->with('message', 'успешно создана запись - ' . $request->name);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
   */
  public function show(User $user)
  {
    return view('show', compact('user'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
   */
  public function edit(Blog $blog)
  {
    return view('page.blog' . '.update', [
      'title' => '',
      'model' => $blog
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\User  $user
   * @return \Illuminate\Http\RedirectResponse
   */
  public function update(BlogRequest $request, Blog $blog)
  {
    if ($request->file()) {
      $name = array_keys($request->file())[0];
      $file = UploadPhoto::upload($request->{$name});
      $request->request->add(['file_id' => $file->id]);
    }
    $blog->update($request->all());
    return redirect()->route('blog.index')->with('message', 'успешно обновлена запись - ' . $blog->name);;
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Http\RedirectResponse
   */
  public function destroy(Blog $blog)
  {

    $blog->delete();
    return redirect()->route('blog.index')->with('message', 'успешно удалена запись - ' . $blog->name);
  }
}
