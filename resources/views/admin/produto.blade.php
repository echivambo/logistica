
@extends('admin.layout')
@section('content')

            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Registo de Produtos</h4> </div>
            </div>
            <!-- /.row -->


            <div class="col-md-offset-2 col-md-8 col-xs-12">
        <div class="white-box">
            @include('admin.mensagens.msg')
            <form class="form-horizontal form-material" method="POST" action="{{ route('produtos.store')}}">
            {{ csrf_field() }}

            <!--User ID-->
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="form-group">
                    <label class="col-md-12">Código do produto</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="CONS-PROJECT-000" name="codigo" class="form-control form-control-line"> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Produto</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="Jeito 24" name="nome" class="form-control form-control-line"> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Descrição do produto</label>
                    <div class="col-md-12">
                        <input type="text" placeholder="Ex: Esta é uma descrição do produto" name="descricao" class="form-control form-control-line">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-success pull-right">Gravar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                 <div class="panel-body">

                <div class="col-md-12">
                        <h3 class="box-title titulo">lista de cursos</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>Descricao</th>
                                    <th>&</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($produtos as $cli)
                                    <tr>
                                        <td>{{$cli->codigo}}</td>
                                        <td>{{$cli->nome}}</td>
                                        <td>{{$cli->descricao}}</td>
                                        <td width="50">
                                            <a href="" class="actions edit text-warning"><i class="fa fa-pencil" aria-hidden="true"> edit</i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--/.main-->

@endsection()