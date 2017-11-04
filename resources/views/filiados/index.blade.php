@extends('layouts.app')
@section('content')
<!-- INÍCIO DO CONTEÚDO -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

        <div class='col-xs-12'>

            <div class="page-title">
                <!-- TÍTULO PRINCIPAL DA PÁGINA INÍCIO -->
                  <div class="pull-left">
                    <h1 class="title">Filiados</h1>
                    <a href="{{ route('filiados.adicionar') }}" class="btn btn-primary"><i class="fa fa-plus"></i><span> Cadastrar Novo</span></a>
                  </div>
                <!-- TÍTULO PRINCIPAL DA PÁGINA FIM -->

                <!-- BREADCRUMB INÍCIO -->
                <div class="pull-right hidden-xs">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index-2.html"><i class="fa fa-home"></i>Painel</a>
                        </li>
                        <li class="active">
                            <strong>Filiados</strong>
                        </li>
                    </ol>
                </div>
                <!-- BREADCRUMB FIM -->
            </div>
        </div>
        <div class="clearfix"></div>

        <!-- CORPO DA ÁREA PRINCIPAL INÍCIO -->

        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">Lista</h2>
                    <div class="actions panel_actions pull-right">
                        <a class="box_toggle fa fa-chevron-down"></a>
                    </div>
                </header>
                <div class="content-body">    <div class="row">
                        <div class="col-xs-12">
                          <table width="100%" class="table table-striped table-bordered table-hover" id="filiados">
                            <thead>
                              <tr>
                                <th>CPF</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Matrícula</th>
                                <th>Filiação</th>
                                <th>Nascimento</th>
                                <th>RG</th>
                                <th><div style="width: 192px;">Ação</div></th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                    </div>
                </div>
            </section></div>


        <!-- CORPO DA ÁREA PRINCIPAL FIM -->
    </section>
</section>
<!-- FIM DO CONTEÚDO -->
@endsection

@section('scripts')
  @include("dinamicos.js._jsfiliados")
@endsection
