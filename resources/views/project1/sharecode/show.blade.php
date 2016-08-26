@extends('project1/generalUser/layouts')

@section('title','THE CODE BOOK')

@section('style')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<link rel="stylesheet" href="{{ URL::asset('comment.css') }}" />
<style>
	body{
		margin: 0px;
		padding: 0px;
	}
	.t{
		font: 20px Montserrat, sans-serif;
		line-height: 1.8;
		font-size: 16px;
		color:#777;
	}
	a{
		color:#777;
	}
	a:hover {
      color: #1abc9c !important;
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
	.right{
		float:right;
	}
	/*.btn{
		background: #1abc9c;
		color:#fff;
	}
	.btn:hover{
		background:#148f77;
		color:#fff;
	}*/
	input:focus, input[text]:focus, .uneditable-input:focus{
    	box-shadow: 0 1px 1px #3ee4a8 inset, 0 0 8px #3ee4a8 !important;
	}
	h1 {
    padding: 50px 0;
    font-weight: 400;
    text-align: center;
    color:#1abc9c;
    font-size: 36px;
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
  .line{
  	margin-bottom: 5px
  }
  h2{
  	color:#1abc9c;
  }
  pre{
  	padding:0px;
  }
  .btn-success{
  	background: #1abc9c;
	color:#fff;
	border:0px;
  }
  .btn-success:hover{
		background:#148f77;
		color:#fff;
		border:0px;
	}
	.rating-block + .review-block{
		margin-top:30px;
	}
	.dropbtn {
    background-color: #1abc9c;
    color: white;
    padding: 10px;
    font-size: 10px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
.right {
    float: right;
}
</style>
@endsection

@section('content')
<h1><i class="fa fa-share-alt-square" aria-hidden="true"></i>The Shared Code</h1>
	<div class="border container">
		<div class="row">
			<h2 class="col-md-10">{{$sharedcode->title}}</h2>
			  <div class="dropdown col-md-2">
			    <button class="btn dropdown-toggle right btn-xs" type="button" data-toggle="dropdown">
			    <span class="caret"></span></button>
			    <ul class="dropdown-menu">
			      <li><a href="{{$sharedcode->id}}/edit">Report Post</a></li>
			    </ul>
			  </div>
		</div>
			
			<span class="badge line">{{$sharedcode->type}}</span>
			<blockquote>
				<p>{{$sharedcode->description}}</p>
				    @foreach ($name as $s)
				    <div class="row">
				    	<p class="text-primary col-md-10">{{$sharedcode->created_at->diffForHumans()}} <mark> by: {{$s->name}}</mark> </p>
				    </div>
					
					@endforeach
			</blockquote>
		<pre class="code" ace-mode="ace/mode/{{$sharedcode->theme}}" ace-theme="ace/theme/monokai" ace-gutter="true">{{$sharedcode->content}}</pre>

		<div class="row">
			<div class="col-md-4">
				<div class="rating-block">
                    <h4>Average user rating</h4>
                    <h3 class="bold padding-bottom-7">{{$sharedcode->evaluation}}<small>/ 5</small></h3>
                    {{--*/ $var = 5 /*--}}
                    @for ($i = 0.9; $i < $sharedcode->evaluation; $i++)
                    <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
                     {{--*/$var = $var -1/*--}}
              		@endfor
              		@for($i = 0; $i < $var; $i++)
              		<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </button>
              		@endfor
                </div>
			</div>
			<div class="col-md-8">
				<div class="review-block">
					@foreach ($comments as $com)
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="review-block-name">{{$com->name}}</div>
                            <div class="review-block-date">{{$com->created_at->diffForHumans()}}</div>
                        </div>
                        <div class="col-sm-9">
                            <div class="review-block-rate">
                                {{--*/ $var = 5 /*--}}
			                    @for ($i = 0.9; $i < $com->evaluation; $i++)
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
			              		<div class="dropdown right">
								    <button class="btn dropdown-toggle right btn-xs" type="button" data-toggle="dropdown">
								    <span class="caret"></span></button>
								    <ul class="dropdown-menu">
								      <li><a href="../comment/{{$com->id}}/edit">Report Comment</a></li>
								    </ul>
								</div>
                            </div>

                            <div class="review-block-description">{{$com->content}}</div>
                        </div>
                    </div>
                    <hr>
                    @endforeach 
                </div>
                @if (!Auth::guest())
				<div class="row">
		                    <form accept-charset="UTF-8" action="../comment" method="POST">
		                        <input type="hidden" name="id" id="id" value="{{$sharedcode->id}}"> 
		                        <textarea class="form-control animated" cols="50" id="new-review" name="content" placeholder="Enter your comment here..." rows="5" required="required" ></textarea>
		                     	{!! $errors->first('content', '<p>:message</p>') !!}
		        
		                        <div class="text-right">
		                            <fieldset class="rating">
		                                <input type="radio" id="star5" name="rating" value="5" >
		                                <label class="full" for="star5" title="Awesome - 5 stars"></label>
		                                <input type="radio" id="star4half" name="rating" value="4.5">
		                                <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
		                                <input type="radio" id="star4" name="rating" value="4">
		                                <label class="full" for="star4" title="Pretty good - 4 stars"></label>
		                                <input type="radio" id="star3half" name="rating" value="3.5">
		                                <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
		                                <input type="radio" id="star3" name="rating" value="3">
		                                <label class="full" for="star3" title="Meh - 3 stars"></label>
		                                <input type="radio" id="star2half" name="rating" value="2.5">
		                                <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
		                                <input type="radio" id="star2" name="rating" value="2">
		                                <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
		                                <input type="radio" id="star1half" name="rating" value="1.5">
		                                <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
		                                <input type="radio" id="star1" name="rating" value="1">
		                                <label class="full" for="star1" title="Sucks big time - 1 star"></label>
		                                <input type="radio" id="starhalf" name="rating" value="0.5">
		                                <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
		                            </fieldset>
		                            @foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
		                            <br>
		                            <input class="btn btn-success" id="btn" type="submit" value="Comment" />
		                        </div>
		                    </form>
		                </div>
				@endif
			</div>
		</div>
	</div>
	<script src="{{ URL::asset('src/ace.js') }}"></script>
<!-- load ace static_highlight extension -->
	<script src="{{ URL::asset('src/ext-static_highlight.js') }}"></script>
	<script>
	    var highlight = ace.require("ace/ext/static_highlight")
	    var dom = ace.require("ace/lib/dom")
	    function qsa(sel) {
	        return Array.apply(null, document.querySelectorAll(sel));
	    }

	    qsa(".code").forEach(function (codeEl) {
	        highlight(codeEl, {
	            mode: codeEl.getAttribute("ace-mode"),
	            theme: codeEl.getAttribute("ace-theme"),
	            startLineNumber: 1,
	            showGutter: codeEl.getAttribute("ace-gutter"),
	            trim: true
	        }, function (highlighted) {
	            
	        });
	    });
	</script>
@endsection

