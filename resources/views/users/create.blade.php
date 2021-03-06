@extends('layouts.abm')
@section('content')
    <head>
        <title>Clientes TICs</title>
    </head>
    <body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Alta Clientes TICs</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="/users">
                        @csrf
                        <div class="form-row m-b-55">
                            <div class="name">Nombre</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="input--style-5" type="text" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Direccion</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="input--style-5" type="text" name="address">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">E-mail</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="input--style-5" type="text" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Telefono</div>
                            <div class="value">
                                <div class="row row-space">
                                    <input class="input--style-5" type="text" name="phone">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn--radius-2 btn--red" type="submit">Cargar Usuario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection