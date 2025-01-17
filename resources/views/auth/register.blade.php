@extends('layouts.app')

@section('titulo')
    Registrate en devstagram
@endsection
@section('contenido')
    <div class = "md:flex">
        <div class="md:w-1/2">
            <p>Imagen aqui</p>

        </div>
        <div class="md:w-1/2">
            <form>
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
            </form>
        </div>

    </div>
@endsection
