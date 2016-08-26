@extends('project1/generalUser/layouts')

@section('title','THE CODE BOOK')

@section('style')
<style>
	@import url('http://fonts.googleapis.com/css?family=Open+Sans:400,600,700');
  @import url('http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css');

  *, *:before, *:after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  html, body {
    height: 100%;
  }

  body {
    font: 14px/1 'Open Sans', sans-serif;
    color: #555;
  }

  h1 {
    padding: 50px 0;
    font-weight: 400;
    text-align: center;
    color:#1abc9c;
    padding-bottom: 10px;
  }

  p {
    margin: 0 0 20px;
    line-height: 1.5;
  }

  main {
    min-width: 320px;
    max-width: 800px;
    padding: 40px;
    margin: 0 auto;
    background: #fff;
  }

  section {
    display: none;
    padding: 20px 0 0;
    border-top: 1px solid #ddd;
  }

  input {
    display: none;
  }

  label {
    display: inline-block;
    margin: 0 0 -1px;
    padding: 15px 25px;
    font-weight: 600;
    text-align: center;
    color: #bbb;
    border: 1px solid transparent;
  }
  form>div>label{
    color: #1abc9c;
  }
  label:before {
    font-family: fontawesome;
    font-weight: normal;
    margin-right: 10px;
  }

  label:hover {
    color: #1abc9c;
    cursor: pointer;
  }

  input:checked + label {
    color: #555;
    border: 1px solid #ddd;
    border-top: 2px solid #1abc9c;
    border-bottom: 1px solid #fff;
  }

  #tab1:checked ~ #content1,
  #tab2:checked ~ #content2,
  #tab3:checked ~ #content3,
  #tab4:checked ~ #content4{
    display: block;
  }

  @media screen and (max-width: 650px) {
    label {
      font-size: 1;
    }
    label:before {
      margin: 0;
      font-size: 18px;
    }
  }

  @media screen and (max-width: 400px) {
    label {
      padding: 15px;
    }
  }
  .table>tbody>tr>td{border-bottom:1px solid #ddd;
    border-top:0px;

  }
  .table>tbody>tr>td>div{
    padding-top:5px;
    padding-bottom:5px;
  }
  .table>tbody>tr>td.no>div{
    padding-top:0px;
    padding-bottom:0px;
  }
  .table>tbody>tr>td>div>div>h2{
    margin: 0px;
  }
  .table>tbody>tr>td>div>a>h3{
    margin: 0px;
  }
  section{
    padding-top:0px;
  }
  .pagination>li>a,
  .pagination>li>span {
    color: #1abc9c;
  }
  .pagination>.active>span:hover,.pagination>li.active>span {
    background: #1abc9c;
    color: #fff;
    border: 1px solid #1abc9c;
  }
  a{
    color:#1abc9c;
  }
  a:hover {
    color: #148f77 !important;
  }
  form>.btn{
    background: #1abc9c;
    color:#fff;
  }
  form>.btn:hover{
    background:#148f77;
    color:#fff;
  }
  .position{
    float:center;
  }
  .p{
    padding-right:400px;
    padding-left: 400px;
  }
</style>
<style type="text/css" media="screen">

  .ace_editor {
    border: 1px solid lightgray;
    height: 500px;
    width: 100%;
  }
  .scrollmargin {
    height: 80px;
        text-align: center;
  }
   form>div>.btn{
    background: #1abc9c;
  color:#fff;
  border:0px;
  }
  form>div>.btn:hover{
    background:#148f77;
    color:#fff;
    border:0px;
  }
  .border{
    color: #555;
    border: 1px solid #ddd;
    border-top: 2px solid #1abc9c;
    border-radius:10px;
    min-width: 320px;
    max-width: 800px;
    padding: 40px;
    margin: 0 auto;
  }
</style>
@endsection

@section('content')
<h1><i class="fa fa-share-alt-square" aria-hidden="true"></i>The Shared Code</h1>

<form method="POST" role="form" class="position container p" action="./search">
      <div class="form-group col-md-8 ">
        <input type="text" class="form-control position" name="search" placeholder="Search" value="{{$word}}">
      </div>
      <div class="col-md-4 ">
        <button type="submit" class="btn position">Search</button>
      </div>
      
</form>
<div class="border container">
<table class="table table-condensed" >
      <tbody>
  @foreach ($sharecodes as $s)
        <tr>
          <td class="col-md-3">
            <div class="review-block-rate">
              {{--*/ $var = 5 /*--}}
              @for ($i = 0.9; $i < $s->evaluation; $i++)
              <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </button>
              {{--*/$var = $var -1/*--}}
              @endfor
              @for($i = 0; $i < $var; $i++)
              <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </button>
              @endfor
            </div>
            <td class="col-md-6">
              <div class="row">
                <a href="sharedcode/{{$s->id}}"><h3>{{$s->title}}</h3></a>
              </div>
              <div class="row">
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  {{$s->type}}
                </button>
              </div>
            </td>
            <td class="col-md-3 no">
              <div class="col-md-6">
                <div class="row">
                  <h2>{{$s->viewcounter}}</h2>
                </div>
                <div class="row">
                  <p>view</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <h2>{{$s->countercomment}}</h2>
                </div>
                <div class="row">
                  <p>comment</p>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="">
        {!! $sharecodes->render() !!}
      </div>
</div>
  @endsection