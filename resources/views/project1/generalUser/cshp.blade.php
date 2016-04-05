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
	img.grayscale{ 
    filter: grayscale(100%);
    -webkit-filter: grayscale(100%);  /* For Webkit browsers */
    filter: gray;  /* For IE 6 - 9 */
    -webkit-transition: all .6s ease;  /* Transition for Webkit browsers */
	}

	img.grayscale:hover{ 
    filter: grayscale(0%);
    -webkit-filter: grayscale(0%);
    filter: none;
	}
</style>
@endsection

@section('content')
java
	
@endsection

