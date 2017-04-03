@extends('layouts.lrnmenu')

@section('body')
<div class="col-md-12 ">
<div class="tt-heding type-2">
    <h2 class="tt-heding-title c-h4 txt-uppercase"><span>{{$title}}</span></h2>
</div>
<div class="empty-space marg-lg-b25"></div>
	<div class="tt-tab-wrapper type-2 clearfix ">
                        <div class="tt-tab-nav-wrapper">
                            <div class="tt-tab-select">
                                <div class="select-arrow"><i class="fa fa-angle-down"></i></div>
                                <select>
                                    <option selected="">A1</option>
                                    <option>A2</option>
                                    <option>B1</option>
                                    
                                </select>                            
                            </div>                            
                            <div  class="tt-nav-tab">
                                <div class="tt-nav-tab-item active">A1</div>
                                <div class="tt-nav-tab-item">A2</div>
                                <div class="tt-nav-tab-item">B1</div>
                                           
                            </div>
                        </div>
                        <div class="tt-tabs-content clearfix">
                            <div class="tt-tab-info active">
                                <div class="simple-text size-4 color-3 style-4">
                                    <table class="table table-responsive">
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
                                    			<td>A1</td>
	                                    		<td>2 candidates and 1 examiner</td>
	                                    		<td>Speaking and Listening</td>
	                                    		<td>12 minutes</td>
                                    		</tr>
                                    	</tbody>
                                    </table>
                                    	<a href="{{asset('LRN/communication/QUALIFICATION OF ENTRY 1 L&S.pdf')}}" class="btn btn-default btn-lg">Specification</a>
                                </div>
                            </div>
                            <div class="tt-tab-info">
                                <div class="simple-text size-4 color-3 style-4">
                                    <table class="table table-responsive">
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
	                                    		<td>A2</td>
	                                    		<td>2 candidates and 1 examiner</td>
	                                    		<td>Speaking and Listening</td>
	                                    		<td>14 minutes</td>
                                    		</tr>
                                    	</tbody>
                                    </table>
                                    <a href="{{asset('LRN/communication/QUALIFICATION OF ENTRY 2 L&S.pdf')}}" class="btn btn-default btn-lg">Specification</a>
                                </div>             
                            </div>
                            <div class="tt-tab-info">
                                <div class="simple-text size-4 color-3 style-4">
                                    <table class="table table-responsive">
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
	                                    		<td>2 candidates and 1 examiner</td>
	                                    		<td>Speaking and Listening</td>
	                                    		<td>16 minutes</td>
                                    		</tr>
                                    	</tbody>
                                    </table>
                                    <a href="{{asset('LRN/communication/QUALIFICATION OF ENTRY 3 L&S.pdf')}}" class="btn btn-default btn-lg">Specification</a>
                                </div>                                                                     
                            </div>
                            
    
                                  

                        </div>
                    </div>              
                </div>

@endsection