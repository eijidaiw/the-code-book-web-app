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
</style>
@endsection

@section('content')
<h1><i class="fa fa-share-alt-square" aria-hidden="true"></i>The Shared Code</h1>

<form method="POST" role="form" class="position container p" action="./search">
      <div class="form-group col-md-8 ">
        <input type="text" class="form-control position" name="search" placeholder="Search">
      </div>
      <div class="col-md-4 ">
        <button type="submit" class="btn position">Search</button>
      </div>
      
</form>

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
  @if (!Auth::guest())
  @if($check==="create") 
    <input id="tab4" type="radio" name="tabs" onclick="create()" checked >
  @else
    <input id="tab4" type="radio" name="tabs" onclick="create()" >
  @endif
    <label for="tab4">Share Code</label>
  @endif
  @if($check==='interesting')
  <section id="content1">
  @elseif($check==='featured')
  <section id="content2">
  @elseif($check==='hot')
  <section id="content3">
  @endif
  @if($check==='create')
  <section id="content4">
    <form action="./sharedcode" method="POST" role="form">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" rows="5" id="description" name="description" ></textarea>
      </div>
      <div class="form-group">
      <label for="mode">Language</label>
      <select id="mode" class="form-control" size="1" onchange="report(this.value)" name="theme">
        <option value="java">Java</option>
        <option value="c_cpp">C</option>
        <option value="c_cpp">C and C++</option>
        <option value="csharp">C#</option>
        <option value="python">Python</option>
        <option value="php">PHP</option>
        <option value="javascript">JavaScript</option>
        <option value="html_ruby">HTML (Ruby)</option>
        <option value="perl">Perl</option>
        <option value="vbscript">Visual Basic .NET</option>
        <option value="objectivec">Objective-C</option>
        <option value="swift">Swift</option>
        <option value="r">R</option>
        <option value="groovy">Groovy</option>
        <option value="matlab">MATLAB</option>
        <option value="sql">SQL</option>
        <option value="sqlserver">SQLServer</option>
        <option value="d">D</option>
        <option value="css">CSS</option>
        <option value="html">HTML</option>
        <option value="json">JSON</option>
        <option value="less">LESS</option>
        <option value="xml">XML</option>
        </select>
        </div>
      <div class="form-group">
        <label for="content">Code</label>
        <textarea class="form-control" id="editor2" rows="20"></textarea>
      </div>
      <button type="submit" class="btn right" onclick="myFunction()">Share</button>
      <input type="hidden" name="content" id="content">
      <input type="hidden" name="type" id="type">
    </form>
  </section> 
  @else
    <table class="table table-condensed" >
      <tbody>
        @foreach ($sharedcode as $s)
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
        {!! $sharedcode->render() !!}
      </div>
    </section> 
    @endif
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
function create() {
   window.location.href="{{ url('thecodebook/create') }}";
}
</script>
<script src="{{ URL::asset('src/ace.js') }}"></script>
      <script>
          var editor2 = ace.edit("editor2");
          editor2.setTheme("ace/theme/monokai");
          editor2.session.setMode("ace/mode/java");
          editor2.setAutoScrollEditorIntoView(true);
          editor2.setOption("minLines", 50);
          function myFunction() {
            document.getElementById("content").value = editor2.getValue();
            document.getElementById("type").value = $("#mode option:selected").text();
        }

          function report(period) {
            editor2.session.setMode("ace/mode/"+period);
          }
      </script>

<script src="{{ URL::asset('show_own_source.js') }}"></script>
<script>
  
</script>
  @endsection