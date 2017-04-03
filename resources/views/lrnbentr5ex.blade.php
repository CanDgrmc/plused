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
		<td>5</td>
		<td>240</td>
		<td>Written assignments</td>
	</tr>
	</tbody>
</table>
<p>LRN Level 5 Extended Diploma in Business and Enterprise qualification aims to give practising or potential managers formal development in this role. The qualification does this by developing management understanding and assisting participants in gaining the knowledge required at this level.</p>
<div class="empty-space marg-lg-b25"></div> 
<h4>Who accepts LRN Level 3 Certificate In Business Management?</h4>
<h5>Some examples are below:</h5>
<ul>
	<li>Most of the UK Universities</li>
	<li>Malta Qualifications Recognition Information Centre (MQRIC)</li>
	<li>University of South Australia</li>
</ul>
<div style="margin-top:50px">
	<a href="{{asset('LRN/LRN Level 5 Business and Enterprise Specification.pdf')}}" class="btn btn-lg btn-default" style="margin-left: 50px">Specification</a>  
</div>
<div class="empty-space marg-lg-b25"></div> 
<div class="empty-space marg-lg-b90 marg-sm-b50 marg-xs-b30"></div>

</div>

@endsection