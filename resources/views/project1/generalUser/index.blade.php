@extends('project1/generalUser/layouts')

@section('title','THE CODE BOOK')

@section('style')
<style>
	.box{
		padding: 4px;
	}
	.con{
		padding-left: 10%;
		padding-right: 10%;
	}
	img.grayscale:hover{ 
    filter: grayscale(100%);
    -webkit-filter:  saturate(2); /* For Webkit browsers */
    filter: gray;  /* For IE 6 - 9 */
    -webkit-transition: all .6s ease;  /* Transition for Webkit browsers */
	}

	img.grayscale{ 
    filter: grayscale(0%);
    -webkit-filter: grayscale(0%);
    filter: none;
	}
	.tcb{
		font: 20px Montserrat, sans-serif;
		line-height: 1.8;
		font-size: 28px;
		color:#777;
	}
	.t{
		font: 20px Montserrat, sans-serif;
		line-height: 1.8;
		font-size: 12px;
		color:#777;
	}
</style>
@endsection

@section('content')
<div class="container con">
	<div class="col-md-3 col-sm-3 hidden-xs box ">
		<a href="thecodebook/java"><img src="{{ URL::asset('img/C1.jpg') }}" alt="java" class="img-responsive grayscale"></a>
	</div>
	<div class="col-md-3 col-sm-3 hidden-xs box ">
		<a href="thecodebook/python"><img src="{{ URL::asset('img/C2.jpg') }}" alt="python" class="img-responsive grayscale"></a>	
		
	</div>
	<div class="col-md-3 col-sm-3 hidden-xs box ">
		<a href="thecodebook/c-sharp"><img src="{{ URL::asset('img/C3.jpg') }}" alt="cshrp" class="img-responsive grayscale"></a>	
		
	</div>
	<div class="col-md-3 col-sm-3 hidden-xs box ">
		<a href="thecodebook/vb"><img src="{{ URL::asset('img/C4.jpg') }}" alt="vb" class="img-responsive grayscale"></a>	
		
	</div>
	<div class="col-xs-12 hidden-sm hidden-md hidden-lg">
		<img src="{{ URL::asset('img/C5.jpg') }}" alt="vb" class="img-responsive">
	</div>
</div>

<br><br>
<div class="con">
	<table class="table table-condensed">
		<thead>
			<tr>
				<th class="tcb">The Code Book</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="col-md-5 col-sm-5 hidden-xs">
					
				</td>
				<td class="col-md-2 col-sm-2 hidden-xs">
					
				</td>
				<td class="col-md-5 col-sm-5 t">
					<br>
					<p>The Code Book is a collection of code that are already developed. A beginner programmers can view a sample. The code that we had developed it is java, prthon, c# and vb. </p>
				</td>
			</tr>
		</tbody>
	</table>
	<table class="table table-condensed">
		<thead>
			<tr>
				<th class="tcb">Shared Code</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="col-md-5 col-sm-5 hidden-xs">
					
				</td>
				<td class="col-md-2 col-sm-2 hidden-xs">
					
				</td>
				<td class="col-md-5 col-sm-5 t">
					<br>
					<p>You can ask questions To find out about the code you have a problem. We have developers who are ready to help you all that trouble.<a href="#">ask!</a></p>
				</td>
			</tr>
		</tbody>
	</table>
</div>
	
@endsection

