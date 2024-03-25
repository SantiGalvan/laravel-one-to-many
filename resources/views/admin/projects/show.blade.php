@extends('layouts.app')

@section('title', 'Project')

@section('content')
    <section id="table-projects">
        <h1 class="text-center my-4">{{$project->title}}</h1>
        <div class="card p-4">
            <div class="row">
                <div class="col-3">
                    <img src="{{asset('storage/'. $project->image)}}" alt="{{$project->title}}" class="img-fluid mb-3">
                    <div><strong>Linguaggio:</strong> {{$project->language}}</div>
                    <div><strong>Framework:</strong> {{$project->framework}}</div>
                    <div class="mt-2"><strong>Creato il:</strong> {{$project->created_at}}</div>
                    <div><strong>Ultima modifica:</strong> {{$project->updated_at}}</div>
                </div>
                <div class="col">
                    <h3>{{$project->title}}</h3>
                    <p class="lead">{{$project->description}}</p>
                </div>
            </div>
            <footer class="d-flex justify-content-between align-items-center">
                <a href="{{route('admin.projects.index')}}" class="btn btn-secondary"><i class="fas fa-arrow-left me-2"></i>Torna indietro</a>
                <div class="d-flex justify-content-between gap-2 mt-4">
                    <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning"><i class="fas fa-pencil me-2"></i>Modifica</a>
                    <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fas fa-trash-can me-2"></i>Elimina</button>
                    </form>
                </div>
            </footer>
        </div>

       
    </section>
@endsection

@section('scripts')
  @vite('resources/js/delete_confirmation.js')
@endsection