<x-jet-action-section>

   <!-- <x-slot name="title">
        {{ __('Delete Account') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Permanently delete your account.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
        
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Delete Account') }}
            </x-jet-danger-button>
        </div>
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mi perfil</title>
    <link rel="icon" type="image/x-icon" href="img\favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css\style.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="sideNav" style="background-color: black">
        <div style="position: absolute;top:0;left:0;width:100%;height:100%;background: url('assets/images/wallpaper1.jpg');opacity: 0.4;z-index: -1;">
        </div>

        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Mi perfil</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/images/profileOscar.jpg" alt="" /></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Sobre mi</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#likes">Mis gustos</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#recomended_content">Contenido recomendado</a>
                    <a class="btn btn-primary" role="button" href="index.html">Regresar</a>
                </li>

            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- Sobre mi-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    <?//php echo $user->name; ?>
                    <span class="text-primary"><?//php echo $user->nickname; ?> </span>
                </h1>
                <div class="subheading mb-5">
                    Correo de contacto :
                    <a href="mailto:<?//php echo $user->email; ?>"><?//php echo $user->email; ?></a>
                </div>
                <p class="lead mb-5">Correo de contacto :
                </p>
                <div class="social-icons">
                    <a class="social-icon" href="https://twitter.com/home?lang=es" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="social-icon" href="https://www.facebook.com/?ref=tn_tnmn" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
                <div>
                    <button type="button" class="btn btn-outline-success" style="
                  margin-top: 30Px" ;>Actualizar informacion</button>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Mis gustos -->
        <section class="resume-section" id="likes">
            <div class="resume-section-content">
                <h2 class="mb-5">Mis gustos </h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Terror</h3>
                        <div class="subheading mb-3">Film favorito:</div>
                        <p>Aqui debe ir un campo que permita ser editado para agregar la descripcion del gusto</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Aqui debe ir la ultima fecha de edicion del gusto</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Accion</h3>
                        <div class="subheading mb-3">Film favorito: </div>
                        <p>Aqui debe ir un campo que permita ser editado para agregar la descripcion del gusto</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Aqui debe ir la ultima fecha de edicion del gusto</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Comedia</h3>
                        <div class="subheading mb-3">Film favorito: </div>
                        <p>Aqui debe ir un campo que permita ser editado para agregar la descripcion del gusto</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Aqui debe ir la ultima fecha de edicion del gusto</span></div>
                </div>
                <div>
                    <button type="button" class="btn btn-outline-success" style="
                  margin-top: 5Px" ;>Actualizar gustos</button>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Contenido Recomendado -->
        <section class="resume-section" id="recomended_content">
            <div class="resume-section-content">
                <h2 class="mb-5">Contenido recomendado por mi</h2>
                <div class="row">
                    <div class="card col-4">
                        <img class="card-img-top" src="assets/images/Movie1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Consumir api para titulo y caratula</h5>
                            <p class="card-text">consumir api para descripcion</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Consumir api para autor/director</li>
                            <li class="list-group-item">Consumir api para actores principales</li>
                            <li class="list-group-item">consumir api estudio cine</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Este sera un link al detalle de la pelicula</a>
                        </div>
                    </div>
                    <div class="card col-4">
                        <img class="card-img-top" src="assets/images/Movie2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Consumir api para titulo y caratula</h5>
                            <p class="card-text">consumir api para descripcion</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Consumir api para autor/director</li>
                            <li class="list-group-item">Consumir api para actores principales</li>
                            <li class="list-group-item">consumir api estudio cine</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Este sera un link al detalle de la pelicula</a>
                        </div>
                    </div>
                    <div class="card col-4">
                        <img class="card-img-top" src="assets/images/Movie3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Consumir api para titulo y caratula</h5>
                            <p class="card-text">consumir api para descripcion</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Consumir api para autor/director</li>
                            <li class="list-group-item">Consumir api para actores principales</li>
                            <li class="list-group-item">consumir api estudio cine</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Este sera un link al detalle de la pelicula</a>
                        </div>
                    </div>
                </div>
        </section>
        <hr class="m-0" />

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts_profile.js"></script>
</body>

</html>
        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Delete Account') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4" placeholder="{{ __('Password') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Nevermind') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Delete Account') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
    
</x-jet-action-section>
