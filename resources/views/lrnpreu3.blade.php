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
			<td>Assessment:</td>
		</tr>
	</thead>
	<tbody>
	<tr>
		<td>3</td>
		<td>120</td>
		<td>Written assignments</td>
	</tr>
	</tbody>
</table>
<div class="empty-space marg-lg-b25"></div> 
<p>
	LRN Level 3 Diploma In Pre U Foundation Studies is designed to help candidates in developing their understanding and knowledge of the pathway they wish to pursue at Higher Education Level.
</p>
<h4>Who accepts LRN Level 3 Diploma In Pre U Foundation Studies?</h4>
<h5>Some examples are below:</h5>
<ul>
	<li>Middlesex University</li>
	<li>Southampton Solent University</li>
	<li>University of Essex</li>
	<li>Chester University</li>
	<li>University of Sunderland</li>
	<li>Bangor University</li>
	<li>University of South Australia, Business School</li>


</ul>
<div style="margin-top:50px">
	<a href="{{asset('LRN/QUALIFICATION SPECIFICATION-LRN LEVEL 3 CERTIFICATE IN EDUCATION AND TRAINING.pdf')}}" class="btn btn-lg btn-default" style="margin-left: 50px">Specification</a>  
</div>
<div class="empty-space marg-lg-b25"></div> 
<div class="empty-space marg-lg-b90 marg-sm-b50 marg-xs-b30"></div>

</div>

@endsection