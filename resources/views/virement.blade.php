@extends('layouts.app')
@section('content')
    <div class="container border shadow px-5 py-4 mt-3">
        <h3 class="col-4 mx-auto mb-4 py-2 text-center fw-bold" style="border: solid red">Formulaire de virement</h3>
        @livewire('virement')
    </div>
    <SCript>

window.addEventListener('toast', event => {
    Swal.fire({
  icon: 'error',
  title: 'Compte bloqué !',
  text: 'Veuillez vous rendre à la banque',
  showCloseButton: true,
  confirmButtonColor: '#d33',
  confirmButtonText: "Retour",
})

    })

    window.addEventListener('nonValide', event => {
    Swal.fire({
  icon: 'error',
  title: 'Compte NON valider !',
  text: 'Veuillez vous rendre à la banque',
  showCloseButton: true,
  confirmButtonColor: '#d33',
  confirmButtonText: "Retour",
})

    })
    </SCript>
@endsection
