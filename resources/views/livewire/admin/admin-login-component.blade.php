<div>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-7 p-4 mb-0">
                            <div class="card-body">
                                <h1>Admin  Login</h1>
                                <p class="text-medium-emphasis">Sign In to your account</p>
                                <x-validation-errors class="mb-3 rounded-0" />

                                @if (session('message'))
                                    <div class="alert alert-success mb-3 rounded-0" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                @if (session('status'))
                                    <div class="alert alert-success mb-3 rounded-0" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger mb-3 rounded-0" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <form wire:submit.prevent='login'>
                                    @csrf
                                <div class="input-group mb-3"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('assets/core-ui/vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                                        </svg></span>
                                    <input wire:model='email' class="form-control @error('email') is-invalid @enderror" name="email" type="text" placeholder="Email">
                                    <x-input-error for="email"></x-input-error>

                                </div>
                                <div class="input-group mb-4"><span class="input-group-text">
                                        <svg class="icon">
                                            <use xlink:href="{{ asset('assets/core-ui/vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}"></use>
                                        </svg></span>
                                    <input wire:model='password' class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                                    <x-input-error for="password"></x-input-error>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-primary px-4" type="submit">Login</button>
                                    </div>
                                    <div class="col-6 text-end">
                                        <button class="btn btn-link px-0" type="button">Forgot password?</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                        <div class="card col-md-5 text-white bg-primary py-5">
                            <div class="card-body text-center">
                                <div>
                                    <h2>Sign up</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                    <a href="{{ route('admin.register') }}"  role="button" class="btn btn-lg btn-outline-light mt-3" type="button">Register
                                        Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
