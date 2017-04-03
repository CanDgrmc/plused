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
		<td>2</td>
		<td>10</td>
		<td>Face-to-face or online, with teaching presentation</td>
		<td>Multiple-choice tests and assessed teaching presentation</td>
	</tr>
	</tbody>
</table>
<p>The ELTAA is designed for candidates who have no experience of teaching English language to adults. The qualification is an intensive programme of study which will enable candidates to gain a recognised teaching qualification, with a focus for those wishing to specialise in teaching English to children or adult speakers of other languages.</p>
<div class="empty-space marg-lg-b25"></div>
<div>
	<a href="{{asset('LRN/QUALIFICATION SPECIFICATION - LRN LEVEL 2 AWARD IN TEACHING ENGLISH TO SPEAKERS OF OTHER LANGUAGES (ELTAA).pdf')}}" class="btn btn-lg btn-default">Specification</a>
</div>
<div class="empty-space marg-lg-b90 marg-sm-b50 marg-xs-b30"></div>
</div>

@endsection