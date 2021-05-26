@extends('admin.layouts.app')
{{-- Titre de la page --}}
@section('title')
Orphélinats
@endsection

@section("subtitle", "Ajoutez un orphélinat ici.")

@section('css')
<link rel="stylesheet" href="{{asset("admin_assets/vendors/toastify/toastify.css")}}">
<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Création d'un orphélinat</h4>
            <small>Tous les champs avec (*) sont obligatoires</small>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="POST" action="{{route("orphanages.store")}}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            @foreach ($fields as $field)
                            <div class="col-md-4 col-lg-2">
                                <label>{{$field["name"]}} {{isset($field["required"]) ? '*' : ""}}</label>
                            </div>
                            <div class="col-md-8 col-lg-10 form-group">
                                <input type="{{$field["type"]}}" id="{{$field["field_name"]}}" class="form-control"
                                    name="{{$field["field_name"]}}" placeholder="{{$field["placeholder"]}}"
                                    {{isset($field["required"]) ? "required" : ""}}>
                            </div>
                            @endforeach


                            <div class="col-md-4 col-lg-2">
                                <label>Mini description</label>
                            </div>
                            <div class="col-md-8 col-lg-10 form-group">
                                <textarea name="description" placeholder="mini description (1 ou 2 lignes)" id=""
                                    cols="30" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="col-md-4 col-lg-2">
                                <label>Images de l'orphélinat</label>
                            </div>
                            <div class="col-md-8 col-lg-10 form-group">
                                <!-- File uploader with multiple files upload -->
                                <input type="file" class="image-preview-filepond" name="files[]" multiple>
                            </div>
                            <div class="col-md-4 col-lg-2">
                                <label>Page publique</label>
                            </div>
                            <div class="col-md-8 col-lg-10 form-group">
                                <textarea name="public_content" placeholder="Ce contenu sera visible sur le site"
                                    id="public_content" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="col-12 col-md-8 offset-md-4 col-lg-10 offset-lg-2 form-group">
                                <div class="form-check">
                                    <div class="checkbox">
                                        <input type="checkbox" id="checkbox1" class="form-check-input" name="status"
                                            checked="">
                                        <label for="checkbox1">L'orphélinat est visible ?</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 d-flex justify-content-end">
                                <a href="{{route("orphanages.index")}}"
                                    class="btn btn-light-secondary me-1 mb-1">Retour</a>
                                <button type="submit" class="btn btn-primary me-1 mb-1">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- filepond validation -->
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

<!-- image editor -->
<script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js">
</script>
<script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-filter/dist/filepond-plugin-image-filter.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>

<!-- toastify -->
<script src="{{asset("admin_assets/vendors/toastify/toastify.js")}}"></script>
<!-- TinyMCE -->
<script src="{{asset("admin_assets/vendors/tinymce/tinymce.min.js")}}"></script>
<script src="{{asset("admin_assets/vendors/tinymce/plugins/code/plugin.min.js")}}"></script>
<!-- filepond -->
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script>
    // EDITEUR DE TEXTE
    tinymce.init({ selector: '#public_content', toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code', plugins: 'code' });

    // Filepond: Multiple Files
    FilePond.create( document.querySelector('.image-preview-filepond'), {
        allowMultiple: true,
        allowFileEncode: false,
        required: false,
        allowImagePreview: true,
    });
</script>
@endsection