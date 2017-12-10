@extends('admin.layout')
@section('content')

<div class="col-xs-12">
    <div class="white-box">
        @include('admin.mensagens.msg')
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </div>
        </form>

        <form class="form-horizontal form-material" method="POST" action="{{ route('contagens.store')}}">
            {{ csrf_field() }}
            <div id="nr-campos">

                <!--User ID-->
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="form-group">
                    <label class="col-md-12">Franquia</label>
                    <div class="col-md-4">
                        <select name="franquia_id" id="franquia_id" class="form-control form-control-line">
                            <option value="">Seleciona a Franquia...</option>
                            @foreach($franquias as $franquia)
                                <option value="{{$franquia->id}}">{{$franquia->nome}}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Mês</label>
                    <div class="col-md-3">
                        <input type="month" name="mes" class="form-control form-control-line">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <table  class="table table-bordered table-hover table-sortable col-md-12">
                    <thead>



                    <tr id="tHeader2">
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Comentario</th>
                        <th>
                            <button class="btn btn-info center-block" id="add"><b>+</b> add</button>
                        </th>
                    </tr>
                    </thead>

                    <tbody id="corpo-pro">

                    <tr id="trDistribuicao">

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

@endsection
