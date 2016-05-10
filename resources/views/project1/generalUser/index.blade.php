@extends('project1/generalUser/layouts')

@section('title','THE CODE BOOK')

@section('style')
<!-- <link rel="stylesheet" href="{{ URL::asset('agency.css') }}" /> -->
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
.team-member {
    text-align: center;
    margin-bottom: 50px;
}
.team-member img {
    margin: 0 auto;
    border: 7px solid white;
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
					<p>The Code Book is a collection of code that are already developed. A beginner programmers can view a sample. The code that we had developed it is JAVA, PYTHON, C# and VB. </p>
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
	<section id="team" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our The Code book Team</h2>
                    <h3 class="section-subheading text-muted">We are ready to take care of you.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="{{ URL::asset('img/kwang.jpg') }}" class="img-responsive img-circle" alt="">
                        <h4 class="h4">Kwanrudee Klebkaew</h4>
                        <p class="text-muted">Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.instagram.com/kwangkuku_k/"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/kwangkuku?fref=ufi"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://github.com/kwangkuku"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="{{ URL::asset('img/eiji.jpg') }}" class="img-responsive img-circle" alt="">
                        <h4 class="h4">Saknarong Pomwong</h4>
                        <p class="text-muted">Developerr</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.instagram.com/eijid/"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/Eiji.daiw"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://github.com/eijidaiw"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="{{ URL::asset('img/pop.jpg') }}" class="img-responsive img-circle" alt="">
                        <h4 class="h4">Napawan Jindamanee</h4>
                        <p class="text-muted">Project Manager</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.instagram.com/april.427/"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/napawan.jindamanee"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://github.com/napawan410"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                   <!--  <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p> -->
                </div>
            </div>
        </div>
    </section>
@endsection

