 <div class="form-body">
     <div class="row">
             <div class="accordion" id="accordionExample">
                 <div class="accordion-item">
                     <h2 class="accordion-header" id="heading1">
                         <button class="accordion-button cust-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                             Identité de l'orphelinat
                             <i class="bi bi-caret-down" style="padding: 2px"></i>
                         </button>
                     </h2>
                     <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                             <div class="container p-20">
                                 @foreach ($data_identity as $field)
                                     <div class="form-group row mb-5">
                                         <div class="col-md-4 col-lg-2">
                                             <label>{{ $field['name'] }} {{ isset($field['required']) ? '*' : '' }}</label>
                                         </div>
                                         <div class="col-md-8 col-lg-10">
                                             <input type="{{ $field['type'] }}" id="{{ $field['field_name'] }}" class="form-control"
                                                    name="{{ $field['field_name'] }}" placeholder="{{ $field['placeholder'] }}"
                                                    value="{{ $field['value'] ?? '' }}" {{ isset($field['required']) ? 'required' : '' }}>
                                         </div>
                                     </div>
                                 @endforeach
                                 <div class="form-group row mb-5">
                                     <div class="col-md-4 col-lg-2">
                                         <label>Images de l'orphelinat</label>
                                     </div>
                                     <div class="col-md-8 col-lg-10">
                                         <input type="file" class="image-preview-filepond-" name="files" multiple>
                                     </div>
                                 </div>
                                 <div class="form-group row mb-5">
                                     <div class="col-md-4 col-lg-2">
                                         <label>Rendre visible ?</label>
                                     </div>
                                     <div class="col-md-8 col-lg-10">
                                         <input type="checkbox" name="status" value="{{ "checked" ? 1 : 0 }}" {{ $orphanage->status != 0 ? "checked" : "" }}>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="accordion-item">
                     <h2 class="accordion-header" id="heading2">
                         <button class="accordion-button cust-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapseOne">
                             Identité du promoteur
                             <i class="bi bi-caret-down" style="padding: 2px"></i>
                         </button>
                     </h2>
                     <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                             <div class="container p-20">
                                 @foreach ($data_identity_promoter as $field)
                                     <div class="form-group row mb-5">
                                         <div class="col-md-4 col-lg-2">
                                             <label>{{ $field['name'] }} {{ isset($field['required']) ? '*' : '' }}</label>
                                         </div>
                                         <div class="col-md-8 col-lg-10">
                                             <input type="{{ $field['type'] }}" id="{{ $field['field_name'] }}" class="form-control"
                                                    name="{{ $field['field_name'] }}" placeholder="{{ $field['placeholder'] }}"
                                                    value="{{ $field['value'] ?? '' }}" {{ isset($field['required']) ? 'required' : '' }}>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="accordion-item">
                     <h2 class="accordion-header" id="heading3">
                         <button class="accordion-button cust-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapseOne">
                             Adresse de l'orphelinat
                             <i class="bi bi-caret-down" style="padding: 2px"></i>
                         </button>
                     </h2>
                     <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                             <div class="container p-20">
                                 <div class="form-group row mb-5">
                                     <div class="col-md-4 col-lg-2">
                                         <label>Ville</label>
                                     </div>
                                     <div class="col-md-8 col-lg-10">
                                         <select name="city" id="city" class="form-control form-select">
                                             @foreach($cities as $city)
                                                 <option value="{{ $city->id }}" {{ $orphanage->city_id ==  $city->id ? "selected" : "" }}>{{ $city->name }}</option>
                                             @endforeach
                                         </select>
                                     </div>
                                 </div>
                                 @foreach ($data_address as $field)
                                     <div class="form-group row mb-5">
                                         <div class="col-md-4 col-lg-2">
                                             <label>{{ $field['name'] }} {{ isset($field['required']) ? '*' : '' }}</label>
                                         </div>
                                         <div class="col-md-8 col-lg-10">
                                             <input type="{{ $field['type'] }}" id="{{ $field['field_name'] }}" class="form-control"
                                                    name="{{ $field['field_name'] }}" placeholder="{{ $field['placeholder'] }}"
                                                    value="{{ $field['value'] ?? '' }}" {{ isset($field['required']) ? 'required' : '' }}>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="accordion-item">
                     <h2 class="accordion-header" id="heading4">
                         <button class="accordion-button cust-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapseOne">
                             Informations financières
                             <i class="bi bi-caret-down" style="padding: 2px"></i>
                         </button>
                     </h2>
                     <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                             <div class="container p-20">
                                 @foreach ($data_financial_infos as $field)
                                     <div class="form-group row mb-5">
                                         <div class="col-md-4 col-lg-2">
                                             <label>{{ $field['name'] }} {{ isset($field['required']) ? '*' : '' }}</label>
                                         </div>
                                         <div class="col-md-8 col-lg-10">
                                             <input type="{{ $field['type'] }}" id="{{ $field['field_name'] }}" class="form-control"
                                                    name="{{ $field['field_name'] }}" placeholder="{{ $field['placeholder'] }}"
                                                    value="{{ $field['value'] ?? '' }}" {{ isset($field['required']) ? 'required' : '' }}>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="accordion-item">
                     <h2 class="accordion-header" id="heading5">
                         <button class="accordion-button cust-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapseOne">
                             Statistiques
                             <i class="bi bi-caret-down" style="padding: 2px"></i>
                         </button>
                     </h2>
                     <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                             <div class="container p-20">
                                 @foreach ($data_stats as $field)
                                     <div class="form-group row mb-5">
                                         <div class="col-md-4 col-lg-2">
                                             <label>{{ $field['name'] }} {{ isset($field['required']) ? '*' : '' }}</label>
                                         </div>
                                         <div class="col-md-8 col-lg-10">
                                             <input type="{{ $field['type'] }}" id="{{ $field['field_name'] }}" class="form-control"
                                                    name="{{ $field['field_name'] }}" placeholder="{{ $field['placeholder'] }}"
                                                    value="{{ $field['value'] ?? '' }}" {{ isset($field['required']) ? 'required' : '' }}>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="accordion-item">
                     <h2 class="accordion-header" id="heading6">
                         <button class="accordion-button cust-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapseOne">
                             Education dans l'orphelinat
                             <i class="bi bi-caret-down" style="padding: 2px"></i>
                         </button>
                     </h2>
                     <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                             <div class="container p-20">
                                 @foreach ($data_education as $field)
                                     <div class="form-group row mb-5">
                                         <div class="col-md-4 col-lg-2">
                                             <label>{{ $field['name'] }} {{ isset($field['required']) ? '*' : '' }}</label>
                                         </div>
                                         <div class="col-md-8 col-lg-10">
                                             <input type="{{ $field['type'] }}" id="{{ $field['field_name'] }}" class="form-control"
                                                    name="{{ $field['field_name'] }}" placeholder="{{ $field['placeholder'] }}"
                                                    value="{{ $field['value'] ?? '' }}" {{ isset($field['required']) ? 'required' : '' }}>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="accordion-item">
                     <h2 class="accordion-header" id="heading7">
                         <button class="accordion-button cust-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapseOne">
                             Besoins de l'orphelinat
                             <i class="bi bi-caret-down" style="padding: 2px"></i>
                         </button>
                     </h2>
                     <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                             <div class="container p-20">
                                 @foreach ($data_needs as $field)
                                     <div class="form-group row mb-5">
                                         <div class="col-md-4 col-lg-2">
                                             <label>{{ $field['name'] }} {{ isset($field['required']) ? '*' : '' }}</label>
                                         </div>
                                         <div class="col-md-8 col-lg-10">
                                             <input type="{{ $field['type'] }}" id="{{ $field['field_name'] }}" class="form-control"
                                                    name="{{ $field['field_name'] }}" placeholder="{{ $field['placeholder'] }}"
                                                    value="{{ $field['value'] ?? '' }}" {{ isset($field['required']) ? 'required' : '' }}>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="accordion-item">
                     <h2 class="accordion-header" id="heading8">
                         <button class="accordion-button cust-accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="true" aria-controls="collapseOne">
                             Projets dans l'orphelinat
                             <i class="bi bi-caret-down" style="padding: 2px"></i>
                         </button>
                     </h2>
                     <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
                         <div class="accordion-body">
                             <div class="container p-20">
                                 @foreach ($data_projects as $field)
                                     <div class="form-group row mb-5">
                                         <div class="col-md-4 col-lg-2">
                                             <label>{{ $field['name'] }} {{ isset($field['required']) ? '*' : '' }}</label>
                                         </div>
                                         <div class="col-md-8 col-lg-10">
                                             <input type="{{ $field['type'] }}" id="{{ $field['field_name'] }}" class="form-control"
                                                    name="{{ $field['field_name'] }}" placeholder="{{ $field['placeholder'] }}"
                                                    value="{{ $field['value'] ?? '' }}" {{ isset($field['required']) ? 'required' : '' }}>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         <div class="col-sm-12 d-flex justify-content-end">
             <a href="{{ route('orphanages.index') }}" class="btn btn-light-secondary me-1 mb-1">Retour</a>
             <button type="submit" class="btn btn-primary me-1 mb-1">Enregistrer</button>
         </div>
     </div>
 </div>

 <style>
     .cust-accordion-btn {
         width: 100%;
         text-align: left;
         font-size: 18px;
         font-weight: 200;
         padding: 16px;
         background: aliceblue;
         outline: none!important;
         border: 1px solid #ccc;
         display: flex;
         justify-content: space-between;
         color: #0313A0;
         font-weight: 700;
     }
 </style>
