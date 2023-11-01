<x-guest-layout>
    

        <x-slot name="logo">
        </x-slot>

        <x-validation-errors class="mb-4" />

        <h4 class="login-title">Registro de Usuario</h4>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name" value="{{ __('Name') }}">Nombre de Usuario</label>
                <input type="text" name="name" :value="old('name')" id="name" class="form-control" placeholder="Nombre y Apellido">
            </div>

            <div class="form-group">
                <label for="email" value ="{{ __('Email') }}">Email</label>
                <input type="email" name="email" :value="old('email')" id="email" class="form-control" placeholder="email@example.com">
            </div>
           
            <div class="form-group mb-4">
             <label for="password" value="{{ __('Password') }}">Password</label>
             <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su contraseña">
            </div>

            <div class="form-group mb-4">
             <label for="password_confirmation" value="{{ __('Confirm Password') }}">Password</label>
             <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirme su contraseña">
            </div>
           
            <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Registrarse">     
    
        </form>
    
    
</x-guest-layout>
