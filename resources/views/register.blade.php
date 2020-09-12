@extends('template.baseAuth')

@section('title', 'Rumah')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 100px">
        <div class="shadow p-4" style="border-radius: 5px; background-color: white">
            <form>
                <div class="form-group">
                    <h3>Daftar</h3>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputNama1">Nama Depan</label>
                        <input type="text" class="form-control" id="inputNama1">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputNama2">Nama Belakang</label>
                        <input type="text" class="form-control" id="inputNama2">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputUser">Username</label>
                    <input type="text" class="form-control" id="inputUser">
                </div>
                <div class="form-group ">
                    <label for="inputEmail">Alamat Email</label>
                    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputSandi1">Kata Sandi</label>
                        <input type="password" class="form-control" id="inputSandi1">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputSandi2">Konfirmasi</label>
                        <input type="password" class="form-control" id="inputSandi2">
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <a class="form-check-label" data-toggle="modal" data-target="#staticBackdrop"
                        style="cursor: pointer">User agreement</a>
                </div>
                <button type="submit" class="btn btn-primary ">Daftar</button>
                <a href="{{route('login')}}" style="font-size: 14px; margin-left: 20px;"> Masuk</a>
            </form>

            <!-- Button trigger modal -->
            <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
    Launch static backdrop modal
  </button>-->

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
