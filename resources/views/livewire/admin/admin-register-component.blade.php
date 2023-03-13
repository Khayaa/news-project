<div>

    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-4 mx-4">
                        <div class="card-body p-4">
                            <h1>Register</h1>
                            <p class="text-medium-emphasis">Create your account</p>
                            <x-validation-errors class="mb-3 rounded-0" />

                            @if (session('status'))
                                <div class="alert alert-success mb-3 rounded-0" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" wire:submit.prevent='register'>
                                @csrf
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{ asset('assets/core-ui/vendors/@coreui/icons/svg/free.svg#cil-user') }}">
                                            </use>

                                        </svg></span>
                                    <input wire:model='name' class="form-control @error('name') is-invalid @enderror"
                                        name="name" type="text" placeholder="Name">
                                    <x-input-error for="name"></x-input-error>
                                </div>
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{ asset('assets/core-ui/vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}">
                                            </use>
                                        </svg></span>
                                    <input wire:model='email' class="form-control @error('email') is-invalid @enderror"
                                        name="email" type="email" placeholder="Email">
                                    <x-input-error for="email"></x-input-error>
                                </div>
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{ asset('assets/core-ui/vendors/@coreui/icons/svg/flag/cif-ly.svg') }}">
                                            </use>
                                        </svg></span>
                                    <input wire:model='phone_number'
                                        class="form-control @error('email') is-invalid @enderror" name="phone_number"
                                        type="number" placeholder="Phone Number">
                                    <x-input-error for="phone_number"></x-input-error>
                                </div>
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{ asset('assets/core-ui/vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}">
                                            </use>
                                        </svg></span>
                                    <input wire:model='password'
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        type="password" placeholder="Password">
                                    <x-input-error for="password"></x-input-error>
                                </div>
                                <div class="input-group mb-4"><span class="input-group-text">
                                        <svg class="icon">
                                            <use
                                                xlink:href="{{ asset('assets/core-ui/vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}">
                                            </use>
                                        </svg></span>
                                    <input wire:model='password_confirmation'
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation" type="password" placeholder="Repeat password">
                                    <x-input-error for="password_confirmation"></x-input-error>
                                </div>
                                <button class="btn btn-block btn-success" type="submit">Create Account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
