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
		<td>B1 to C2</td>
		<td>Computer or paper-based</td>
		<td>Writing, Speaking, Reading and Listening</td>
		<td>3 hours (approximately)</td>
	</tr>
	</tbody>
</table>
<div class="empty-space marg-lg-b25"></div>    
		<p>
        BELT is a single unit qualification. Candidates are assessed in all four English language skills of reading and writing, listening and writing and speaking.
        </p>

		<p> Candidates taking BELT will need to demonstrate that they can produce clear, well-structured, detailed text on complex subjects, showing controlled use of organisational patterns, connectors and cohesive devices.
		
		</p>
		<div class="empty-space marg-lg-b25"></div> 
		<h4>Why choose BELT?</h4>
		<ul>
			<li>Enhanced confidence in presentations skills</li>
			<li>Better communication skills in meetings and in business correspondence
</li>
<li>Ability to read business oriented articles and proposals
</li>
		</ul>
		<div class="empty-space marg-lg-b25"></div> 
        <h4>Who accepts BELT?        </h4>
        <h5>Some examples are below:</h5>
	<ul>
		<li>Italian Ministry of Education (MIUR)</li>
        <li>Toyota</li>
        <li>DHL </li>
        <li>KPMG</li>
	</ul>

<div style="margin-top:50px">
	<a href="{{asset('LRN/QUALIFICATION SPECIFICATION_BELT.pdf')}}" class="btn btn-lg btn-default" style="margin-left: 50px">Specification</a>  <a href="#" class="btn btn-lg btn-custom" style="margin-left: 50px">Sample Paper</a>
</div>
<div class="empty-space marg-lg-b25"></div> 
<div class="empty-space marg-lg-b90 marg-sm-b50 marg-xs-b30"></div>
</div>

@endsection