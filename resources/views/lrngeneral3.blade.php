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
		<td>18</td>
		<td>Face-to-face or online, with teaching presentation</td>
		<td>Written assignments and assessed teaching presentation</td>
	</tr>
	</tbody>
</table>
<div class="empty-space marg-lg-b25"></div> 
<p>
	LRN Level 3 Certificate in Education and Training aims to give those entering the profession a starting point for their studies.  This qualification is also suitable for those who have been practising within the sector but who have not yet obtained a formal qualification.
</p>
<div style="margin-top:50px">
	<a href="{{asset('LRN/QUALIFICATION SPECIFICATION-LRN LEVEL 3 CERTIFICATE IN EDUCATION AND TRAINING (1).pdf')}}" class="btn btn-lg btn-default" style="margin-left: 50px">Specification</a>  
</div>
<div class="empty-space marg-lg-b25"></div> 
<div class="empty-space marg-lg-b90 marg-sm-b50 marg-xs-b30"></div>

</div>

@endsection