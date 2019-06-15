@extends('adminlte::page')

@section('title', 'Merito Serviços')

@section('body')


 @section('content')

<!-- Aqui é toda a parte que contém as empresas -->

<form role="form" method="POST" action="{{route('servicos.store')}}">

                             @csrf

 <div class="form-group">
                    <label for="name">Nome</label>
                    <input class="form-control" type="text" name="name" placeholder="Nome do Cliente" id="name">
                </div>

<div class="form-group">
                    <label for="fornecedor">Fornecedor</label>
                    <input class="form-control" type="text" name="fornecedor" id="fornecedor">
                </div>

 <div class="form-group">
                    <label for="description">Descrição</label>
                    <input class="form-control" type="tex" name="description" placeholder="Coloque alguma observação" id="description">
                </div>
 <div class="form-group">
                    <label for="destino">Destino</label>
                    <input class="form-control" type="text" name="destino" id="destino">
                </div>

 <div class="form-group">
                    <label for="cheque">Cheque</label>
                    <input class="form-control" type="text" name="cheque" id="cheque">
                </div>

 <div class="form-group">
                    <label for="valor">Valor</label>
                    <input class="form-control" type="text" placeholder="R$" name="valor" id="valor">
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>

@stop



<style>

 .box-footer{

margin-left: -10px;
margin-top: 20px;

 }

 </style>
