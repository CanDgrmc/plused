@extends('layouts.lrnmenu')

@section('body')
<div class="col-md-12">
 <div class="tt-heding type-2">
	<h2 class="tt-heding-title c-h4 txt-uppercase"><span>{{$title}}</span></h2>
</div>
<div class="empty-space marg-lg-b25"></div>
<table class="table table-striped" bordercolor="#b1b1b1" border="1px solid #b1b1b1" style="background-color:rgba(34, 173, 212, 0.46)">
	<thead>
		<tr >
			<td >RQFlevel:</td>
			<td>Credit:</td>
			<td>Format:</td>
			<td>Assessment:</td>
		</tr>
	</thead>
	<tbody>
	<tr  height="100" >
		<td>3</td>
		<td>13</td>
		<td>Face-to-face or online, with work experience</td>
		<td>Assignments</td>
	</tr>
	</tbody>
</table>
<p>
	The LRN Level 3 Award in European Community Development is designed to equip learners with the knowledge and skills to understand the key aspects of Community Development work and to be able to analyse how these are applied in practice.  Course assignments require candidates to reflect upon how the concepts covered within the classroom-based element of the course are put into practice in their job, work experience or volunteering role.
</p>
<div class="empty-space marg-lg-b25"></div> 
<h4>Recognition</h4>
<h5>Some examples are below:</h5>

<div style="margin-top:50px">
	<a href="{{asset('LRN/LRN Level 3 Award in European Community Development_Qualification_Specification.pdf')}}" class="btn btn-lg btn-default" style="margin-left: 50px">Specification</a>  
</div>
<div class="empty-space marg-lg-b25"></div> 
<div class="empty-space marg-lg-b90 marg-sm-b50 marg-xs-b30"></div>

</div>

@endsection