@extends('layouts.lrnmenu')

@section('body')
<div class="col-md-12">
<div class="tt-heding type-2">
	<h2 class="tt-heding-title c-h4 txt-uppercase"><span>{{$title}}</span></h2>
</div>
<div class="empty-space marg-lg-b25"></div>
<table class="table table-striped" bordercolor="#b1b1b1" border="1px solid #b1b1b1" style="background-color:rgba(34, 173, 212, 0.46)">
	<thead>
		<tr>
			<td>RQFlevel:</td>
			<td>Credit:</td>
			<td>Format:</td>
			<td>Assessment:</td>
		</tr>
	</thead>
	<tbody>
	<tr>
		<td>3</td>
		<td>12</td>
		<td>Face-to-face or online, with teaching presentation</td>
		<td>Written assignments and assessed teaching presentation</td>
	</tr>
	</tbody>
</table>
<div class="empty-space marg-lg-b25"></div> 
<p>
	ELTB is designed for candidates who have very limited or no experience of teaching.  The qualification is an intensive programme of study which will enable candidates to gain a recognised teaching qualification.
</p>
<div style="margin-top:50px">
	<a href="{{asset('LRN/QUALIFICATION SPECIFICATION-LRN LEVEL 3 AWARD IN EDUCATION AND TRAINING (ETAB).pdf')}}" class="btn btn-lg btn-default" style="margin-left: 50px">Specification</a>  
</div>
<div class="empty-space marg-lg-b90 marg-sm-b50 marg-xs-b30"></div>
<iframe src="https://slides.com/candgrmc/deck-2/embed" width="576" height="420" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<div class="empty-space marg-lg-b90 marg-sm-b50 marg-xs-b30"></div>

</div>

@endsection