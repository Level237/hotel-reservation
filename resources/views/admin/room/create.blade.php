@extends("layouts.backoffice.admin.main-admin")

@section('title')
Ajouter un Hotel
@endsection
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/choices/css/choices.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/dropzone/css/dropzone.css') }}">
@section('content')

<main>
	
    <!-- =======================
    Page Banner START -->
    <section class="pt-4 pt-md-5 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto text-center">
                    <h1 class="fs-2 mb-2">Nouvel Hotel</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->
    
    <!-- =======================
    Main content START -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <form class="vstack gap-4" action="{{ route('admin.hotels.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Owner Detail START -->
                        <div class="card shadow">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h5 class="mb-0"> Detail</h5>
                            </div>
    
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row g-3">
                                    <!-- Owner name -->
                                    <div class="col-12">
                                        <label class="form-label">Nom Hotel</label>
                                        <div class="input-group">
                                            <input type="text" required name="nom_hotel" class="form-control" placeholder="Entrer le nom de l'Hotel">
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Localisation</label>
                                        <select name="localisation" class="form-select js-choice">
                                            <option value="Douala">Douala</option>
                                            <option value="Yaoundé">Yaoundé</option>
                                            <option value="Bafoussam">Bafoussam</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nombre d'etoile</label>
                                        <input class="form-control" name="nombres_etoiles" required type="number" placeholder="" max="5" min="1" >
                                    </div>
                                    <!-- Contact number -->
                                    <div class="col-md-6">
                                        <label class="form-label">Contact</label>
                                        <input class="form-control" name="tel" type="text" required placeholder="Enter le numero de telephone">
                                    </div>
    
                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label class="form-label">Adresse email</label>
                                        <input class="form-control" name="email" type="email" required placeholder="Enter l'email">
                                    </div>
    
                                    <!-- Address -->
                                    <div class="col-12">
                                        <label class="form-label">Nom du Gerant</label>
                                        <input type="text" name="name" class="form-control" required placeholder="Entrer le nom du Gerant de l'Hotel">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Mot de passe de l'hotel</label>
                                        <input type="password" name="password" class="form-control" required placeholder="Entrer le mot de passe">
                                    </div>
                        
                                    <!-- City -->
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Owner Detail END -->
    
                        <!-- Cab Detail START -->
                        <div class="card shadow">
                            <!-- Card header -->
                            <div class="card-header border-bottom">
                                <h5 class="mb-0">Media</h5>
                            </div>
    
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row g-3">
                                    <!-- Car name -->
                                 
    
                                  
                                    <!-- Image Gallery -->
                                    <div class="col-12">
                                        <label class="form-label">Image d'hotel *</label>
                                        <div class="dropzone dropzone-custom" data-dropzone='{"maxFiles": 5, "addRemoveLinks": false}'>
                                            <div class="dz-message needsclick">
                                                
                                                
                                            </div>
                                            <input type="file" name="image" required>
                                        </div> 
                                        <p class="small mb-0 mt-2"><b>Note:</b>Uniquement JPG, JPEG et PNG. Les dimensions suggérées sont 600px * 450px. L'image la plus grande sera recadrée au format 4:3 pour s'adapter à nos vignettes/présentations..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cab Detail END -->
    
                        <!-- Driver Detail START -->
                      
                        <!-- Driver Detail END -->
    
                        <!-- Button -->
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary mb-0">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Main content END -->
    
    </main>
    <script src="{{ asset('assets/vendor/choices/js/choices.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/dropzone/js/dropzone.js') }}"></script>
@endsection