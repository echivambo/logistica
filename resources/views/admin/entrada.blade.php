
@extends('admin.layout')
@section('content')

    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Entradas</h4> </div>
    </div>
    <!-- /.row -->


    <div class="col-md-offset-2 col-md-8 col-xs-12">
        <div class="white-box">
            @include('admin.mensagens.msg')
            <form class="form-horizontal form-material" method="POST" action="{{ route('entradas.store')}}">
            {{ csrf_field() }}

            <!--User ID-->
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="form-group">
                    <label class="col-md-12">Franquia</label>
                    <div class="col-md-12">
                        <select name="franquia_id" id="franquia_id" class="form-control form-control-line">

                            <option value="">Seleciona a Franquia...</option>
                        </select>

                     </div>
                </div>

                    <div class="form-group">
                        <label class="col-md-12">Data</label>
                        <div class="col-md-12">
                            <input type="date" placeholder="Data" name="data_entrada" class="form-control form-control-line"> </div>
                    </div>

                    <div class="col-md-12">

                        <table  class="table table-bordered table-hover table-sortable">
                            <thead>
                            <tr id="tHeader2">
                                <th>Produto</th>
                                <th>Quantidade</th>
                                <th>Comentario</th>
                            </tr>
                            </thead>
                            <tbody id="corpo-pro">


                            <tr id="trDistribuicao">
                                <td>
                                    <select id="produto_id" name="produto_id" class="form-control nprodutos" >
                                        <option value="">Carregar Lista Produto...</option>
                                    </select>
                                </td>
                                <td>
                                    <input id="quantidade" name="quantidade" type="number" placeholder="0" class="form-control untqd" disabled>
                                </td>
                                <td>
                                    <input id="comentario" name="comentario" type="text" placeholder="Comentario" class="form-control qd">
                                </td>

                            </tr>




                            </tbody>
                        </table>
                    </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-success pull-right">Gravar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



@endsection()