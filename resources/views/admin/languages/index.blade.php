@extends('layouts.admin')
@section('title', 'Lista linguaggi')
@section('content')
    <div class="project-list">
        <div class="container-fluid">
            <h3 class="text-center mb-2">Lista linguaggi</h3>
            <div class="buttons d-flex justify-content-center">
                <button class="btn btn-primary add-button mb-2">Aggiungi linguaggio</button>
            </div>
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
            @if (session('message'))
                <div class="alert alert-success text-center">
                    {{ session('message') }}
                </div>
            @endif
            <div style="max-width:900px" class="table-responsive mt-2 mx-auto">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Linguaggo</th>
                            <th scope="col">Progetto</th>
                            <th scope="col">Azioni</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($languages as $language)
                            <tr class="align-middle">
                                <th scope="row">{{ $language->id }}</th>
                                <td><span style="background-color: {{$language->badge_color}}" class="badge">{{$language->name}}</span></td>                                </td>
                                <td><a href="{{ route('admin.languages.show', $language->slug) }}">Visualizza progetti</a>
                                </td>

                                <td>
                                    <button data-item-type="language" data-item-name="{{$language->name}}" data-item-slug="{{$language->slug}}" class="btn btn-warning edit-button"><i
                                                class="fa-solid fa-pen-to-square"></i></button>
                                    <form class="d-inline" method="POST"
                                        action="{{ route('admin.languages.destroy', $language->slug) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button data-item-titletype="language" data-item-name="{{ $language->name }}"
                                            type="submit" class="btn btn-danger delete-button"><i
                                                class="fa-regular fa-trash-can"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                        @endforelse

                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end gap-2">
                {{ $languages->links() }}
            </div>
        </div>
    </div>

    @include('admin.partials.addlanguagemodal')
    @include('admin.partials.editlanguagemodal')
    @include('admin.partials.deletemodal')
@endsection
