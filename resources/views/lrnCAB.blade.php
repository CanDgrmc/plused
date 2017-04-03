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
			<td>CEFR level</td>
			<td>Test format:</td>
			<td>Sub-skills:</td>
			<td>Exam length:</td>
		</tr>
	</thead>
	<tbody>
	<tr>
		<td>B1</td>
		<td>Computer or paper-based</td>
		<td>Writing, Speaking, Reading and Listening</td>
		<td>2 hours 15 minutes (approximately)</td>
	</tr>
	</tbody>
</table>

<a href="{{asset('LRN/QUALIFICATION SPECIFICATION - LRN Entry Level Certificate in ESOL International (Entry 3) (CAB)(CEF B1).pdf')}}" class="btn btn-lg btn-default">Specification</a>
</div>

@endsection