@extends('layouts.app')

@section('titulo')
    Registrate en devstagram
@endsection
@section('contenido')
    <div class = "md:flex md:justify-center p-5 md:gap-10 md:items-center">
        <div class="md:w-4/12 ">
            <img src="{{ asset('img/register.jpg')}}" alt="Imagen Registro de Usuarios">
        </div>
        <div class="md:w-4/12 bg-white rounded-lg shadow-xl p-6">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Tu nombre"
                        class="border p-3 w-full rounded-lg"
                    />
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Tu nombre de usuario"
                        class="border p-3 w-full rounded-lg"
                    />
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input
                        id="email"
                        name="email"
                        type="text"
                        placeholder="Tu email"
                        class="border p-3 w-full rounded-lg"
                    />
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        password
                    </label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Password"
                        class="border p-3 w-full rounded-lg"
                    />
                </div>
                <div class="mb-5">
                    <label for="password-confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        password
                    </label>
                    <input
                        id="password-confirmation"
                        name="password-confirmation"
                        type="password"
                        placeholder="Password"
                        class="border p-3 w-full rounded-lg"
                    />
                </div>
                <input
                    type="submit"
                    value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors colors-pointer
                    uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>

    </div>
@endsection
