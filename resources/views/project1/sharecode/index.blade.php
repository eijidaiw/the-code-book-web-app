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
</style>
@endsection

@section('content')
	<h1><i class="fa fa-share-alt-square" aria-hidden="true"></i>The Shared Code</h1>

<main>
  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1">Interesting</label>
    
  <input id="tab2" type="radio" name="tabs">
  <label for="tab2">Featured</label>
    
  <input id="tab3" type="radio" name="tabs">
  <label for="tab3">Hot</label>
    
  <section id="content1">
  <table class="table table-condensed" >
    <tbody>
      <tr>
        <td class="col-md-3">
          <div class="review-block-rate">
            <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
            <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </button>
        </div>
        <td class="col-md-6">
          <div class="row">
            <a href="#"><h3>Example</h3></a>
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
              <h2>51</h2>
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
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
  </section>
    
  <section id="content2">
  </section>
    
  <section id="content3">
  </section>
    
</main>
@endsection