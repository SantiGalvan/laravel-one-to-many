@if ($project->exists)

    <form action="{{route('admin.projects.update', $project->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
    
@else
    <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
    
@endif

    @csrf
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input value="{{old('title', $project->title)}}" type="text" class="form-control @error('title') is-invalid @elseif(old('title', '')) is-valid @enderror" id="title" name="title">
                @error('title')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Inserisci il titolo del progetto
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-3">
            <div class="mb-3">
                <label for="language" class="form-label">Linguaggio</label>
                <input value="{{old('language', $project->language)}}" type="text" class="form-control @error('language') is-invalid @elseif(old('language', '')) is-valid @enderror" id="language" name="language">
                @error('language')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Inserisci il linguaggio del progetto
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-3">
            <div class="mb-3">
                <label for="framework" class="form-label">Tecnologia Usata</label>
                <input value="{{old('framework', $project->framework)}}" type="text" class="form-control @error('framework') is-invalid @elseif(old('framework', '')) is-valid @enderror" id="framework" name="framework">
                @error('framework')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Inserisci la tecnologia usata nel progetto
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-11">
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input value="{{old('image', $project->image)}}" type="file" class="form-control @error('image') is-invalid @elseif(old('image', '')) is-valid @enderror" id="image" name="image">
                @error('image')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Carica un file immagine
                    </div>
                @enderror
            </div>
        </div>
        <div class="col-1">
            <div class="mb-3">
                <img src="{{old('image', $project->image) ? asset('storage/'. $project->image) : 'https://marcolanci.it/boolean/assets/placeholder.png'}}" alt="immagine del progetto" class="img-fluid" id="preview">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione progetto</label>
                <textarea class="form-control @error('description') is-invalid @elseif(old('description', '')) is-valid @enderror" id="description" name="description" rows="10">{{old('description', $project->description)}}</textarea>
                @error('description')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text">
                        Inserisci una descrizione del progetto
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end align-items-center gap-3">
        <button type="reset" class="btn btn-lg btn-warning"><i class="fas fa-arrows-rotate me-2"></i>Reset</button>
        <button type="submit" class="btn btn-lg btn-success"><i class="fas fa-floppy-disk me-2"></i>Salva</button>
    </div>
</form>