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

  label:before {
    font-family: fontawesome;
    font-weight: normal;
    margin-right: 10px;
  }

  label:hover {
    color: #888;
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
  #tab3:checked ~ #content3{
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
</style>
@endsection

@section('content')
<h1><i class="fa fa-share-alt-square" aria-hidden="true"></i>The Shared Code</h1>

<main>
  @if($check==="interesting")
    <input id="tab1" type="radio" name="tabs" onclick="int()" checked>
  @else
    <input id="tab1" type="radio" name="tabs" onclick="int()">
  @endif
    <label for="tab1">Interesting</label>
  @if($check==="featured") 
    <input id="tab2" type="radio" name="tabs" onclick="fea()" checked >
  @else
    <input id="tab2" type="radio" name="tabs" onclick="fea()">
  @endif
    <label for="tab2">Featured</label>
  @if($check==="hot") 
    <input id="tab3" type="radio" name="tabs" onclick="hot()" checked>
  @else
    <input id="tab3" type="radio" name="tabs" onclick="hot()">
  @endif
    <label for="tab3">Hot</label>
  @if($check==='interesting')
  <section id="content1">
  @elseif($check==='featured')
  <section id="content2">
  @else
  <section id="content3">
  @endif
    <table class="table table-condensed" >
      <tbody>
        @foreach ($sharedcode as $s)
        <tr>
          <td class="col-md-3">
            <div class="review-block-rate">
              {{--*/ $var = 5 /*--}}
              @for ($i = 0; $i < $s->evaluation; $i++)
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
                <a href="#"><h3>{{$s->title}}}</h3></a>
              </div>
              <div class="row">
                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                  tag
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
                  <h2>200</h2>
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
        {!! $sharedcode->render() !!}
      </div>
    </section> 
  </main>
  <script>
function int() {
   window.location.href="{{ url('thecodebook/interesting') }}";
}
function fea() {
   window.location.href="{{ url('thecodebook/featured') }}";
}
function hot() {
   window.location.href="{{ url('thecodebook/hot') }}";
}
</script>
  @endsection