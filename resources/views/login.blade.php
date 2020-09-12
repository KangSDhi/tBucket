@extends('template.baseAuth')

@section('title', 'Rumah')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 100px">
            <div class="shadow p-4" style="border-radius: 5px; background-color: white" >
                <form>
                    <div class="form-group">
                        <h3>Masuk</h3>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail">Alamat Email</label>
                        <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Jangan memberitahukan email anda pada orang lain.</small>
                    </div>
                    <div class="form-group">
                        <label for="inputSandi">Kata sandi</label>
                        <input type="password" class="form-control" id="inputSandi">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="check1">
                        <label class="form-check-label" for="check1">Ingat kata sandi</label>
                    </div>
                    <button type="button" class="btn btn-primary ">Masuk</button>
                    <a href="{{route('register')}}" style="font-size: 14px; margin-left: 20px;"> Daftar</a>
                </form>

                </form>


            </div>
        </div>

    </div>