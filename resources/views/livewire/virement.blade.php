<div class="col-md-11 mx-auto">
    <style>
        label{
            font-weight: bold;
        }
    </style>
    <form>
        <div class="row mb-3">
          <label for="montant" class="col-sm-2 col-form-label">Montant</label>
          <div class="col-sm-10">
            <input type="number" wire:model.blur='montant' class="form-control @error('montant') is-invalid @enderror" id="montant" value="{{ old('montant') }}"  autocomplete="montant" autofocus  placeholder="Montant" >
          </div>
            @error('montant')
                <span class="text-danger text-center" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        {{-- Nom prenom --}}
        <div class="row g-5">
            <div class="d-flex col-md-6">
                    <label for="nom" class="col-sm-3 col-form-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model.live='nom' class="form-control @error('nom') is-invalid @enderror" id="nom" value="{{ old('nom') }}"  autocomplete="nom"   placeholder="Nom" >
                    </div>

            </div>
            <div class="d-flex col-md-6 mb-3">
                <label for="prenom" class="col-sm-3 col-form-label">Prenom</label>
                <div class="col-sm-10">
                    <input type="text" wire:model.live='prenom' class="form-control  @error('prenom') is-invalid @enderror" id="prenom" value="{{ old('prenom') }}"  autocomplete="prenom"   placeholder="Prenom" >
                </div>
            </div>
        </div>
            @error('nom')
                    <span class="text-danger    " role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
            @error('prenom')
                <div class="text-end">
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                </div>
            @enderror
            {{-- pays ville --}}
        <div class="row mb-3 g-5">
            <div class="d-flex col-md-6">
                    <label for="country" class="col-sm-3 col-form-label">Pays</label>
                    <div class="col-sm-10">
                        <input type="password" wire:model.blur='country' class="form-control  @error('country') is-invalid @enderror" id="country" value="{{ old('country') }}"  autocomplete="country"   placeholder="Country" >
                    </div>
            </div>
            <div class="d-flex col-md-6">
                <label for="city" class="col-sm-3 col-form-label">Ville</label>
                <div class="col-sm-10">
                    <input type="text" wire:model.blur='city' class="form-control @error('city') is-invalid @enderror" id="city" value="{{ old('city') }}"  autocomplete="city"   placeholder="Ville" >
                </div>

            </div>
        </div>
            @error('country')
                <span class="text-danger text-center" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            @error('city')
                <div class="text-end">
                    <span class="text-danger text-center" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                </div>
            @enderror
            {{-- bank name --}}
            <div class="row mb-3 g-5">
                <div class="d-flex col-md-6">
                        <label for="banque-name" class="col-sm-3 col-form-label">Nom de la banque</label>
                        <div class="col-sm-10">
                            <input type="text" wire:model.blur='banque_name' class="form-control @error('banque_name') is-invalid @enderror" id="banque-name" value="{{ old('banque_name') }}"  autocomplete="banque_name"   placeholder="Nom de la banque" >
                        </div>
                </div>
                <div class="d-flex col-md-6">
                    <label for="swift" class="col-sm-3 col-form-label">SWIFT / BIC</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model.blur='swift' class="form-control @error('swift') is-invalid @enderror" id="swift" value="{{ old('swift') }}"  autocomplete="swift"   placeholder="Code SWIFT ou BIC" number>
                    </div>

                </div>
            </div>
                @error('banque_name')
                    <span class="text-danger text-center" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                @error('swift')
                    <div class="text-end">
                        <span class="text-danger text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
            {{-- Bank number --}}
            <div class="row mb-3 g-5">
                <div class="d-flex col-md-6">
                        <label for="banque-number" class="col-sm-3 col-form-label">Banque Numero</label>
                        <div class="col-sm-10">
                            <input type="number" wire:model.blur='banque_number' class="form-control @error('banque_number') is-invalid @enderror" id="banque-number" value="{{ old('banque_number') }}"  autocomplete="banque_number"   placeholder="Numero de la banque" >
                        </div>
                </div>
                <div class="d-flex col-md-6">
                    <label for="iban" class="col-sm-2 col-form-label">IBAN</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model.blur='iban' class="form-control @error('iban') is-invalid @enderror" id="iban" value="{{ old('iban') }}"  autocomplete="iban"   placeholder="Iban" >
                    </div>
                </div>
            </div>
                @error('banque_number')
                    <span class="text-danger text-center" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
                @enderror
                @error('iban')
                    <div class="text-end">
                        <span class="text-danger text-center" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror

                <div class="mx-auto text-center">
                    <button class="btn btn-success" wire:click.prevent="{{Auth::user()->identifiant?'submit':'nonValider'}}">Envoyer</button>
                </div>
                {{-- {{$s?"saa":"eee"}} --}}

      </form>
</div>
