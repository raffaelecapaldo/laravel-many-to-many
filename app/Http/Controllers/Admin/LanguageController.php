<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::latest()->paginate(8);

        return view('admin.languages.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLanguageRequest $request)
    {
        $data = $request->validated();
        $newLang = new Language();
        $newLang->fill($data);
        $newLang->slug = Str::slug($newLang->name, '-');
        $newLang->save();
        return redirect()->route('admin.languages.index')->with('message', "Il linguaggio $newLang->name è stata aggiunta correttamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function show(Language $language)
    {
        $projects = $language->with('projects.category')->paginate(8);
        //dd($projects);
        return view('admin.languages.show', compact('projects', 'language'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit(Language $language)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLanguageRequest $request, Language $language)
    {
        $data = $request->validated();
        $language->update($data);
        return redirect()->route('admin.languages.index')->with('message', "Il linguaggio $language->name è stata aggiornato");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $language)
    {
        $language->delete();
        return redirect()->route('admin.languages.index')->with('message', "Il linguaggio $language->name è stato cancellato correttamente");

    }
}
