@extends('admin.layouts.app')
{{-- Titre de la page --}}
@section('title')
Orphelinats
@endsection

@section("subtitle", "Ajoutez un orphelinat ici.")

@section('css')
<link rel="stylesheet" href="{{asset("admin_assets/vendors/toastify/toastify.css")}}">
<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Création d'un orphelinat</h4>
            <small>Tous les champs avec (*) sont obligatoires</small>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" method="POST" action="{{route("orphanages.store")}}"
                    enctype="multipart/form-data">
                    @csrf
                    @include("admin.orphanages.components.form", ["data_identity" => $data_identity,
                                "data_identity_promoter" =>$data_identity_promoter,
                                "data_address" =>$data_address,
                                "data_financial_infos" =>$data_financial_infos,
                                "data_stats" =>$data_stats,
                                "data_education" =>$data_education,
                                "data_needs" =>$data_needs,
                                "data_projects" =>$data_projects,
                                "orphanage" => $orphanage,
                            ])
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
     tinymce.init({
            selector: '#public_content, #history, #projects, #other_needs, #food_needs, #health_needs, #school_needs, #clothes_needs, #ludic_needs, #description, #withonoh',
            plugins: "image code",
            toolbar: 'undo image redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code',
            a11y_advanced_options: true
        });
    // Filepond: Multiple Files
    FilePond.create( document.querySelector('.image-preview-filepond'), {
        allowMultiple: true,
        allowFileEncode: false,
        required: false,
        allowImagePreview: true,
    });
</script>
@endsection
