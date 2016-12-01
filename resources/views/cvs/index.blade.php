@extends('layouts/app')

@section('title', 'CVs')

@section('styles', '<link rel="stylesheet" href="/css/font-awesome.min.css">')

@section('scripts')
<script src="/js/jquery.min.js"></script>
<script src="/js/cv/index.js"></script>
@endsection

@section('content')
<input type="hidden" value="{{{ csrf_token() }}}" id="_token" />
<table>
    <tr>
        <th>Name</th>
        <th>Mobile</th>
        <th>Status</th>
        <th>Application Date</th>
        <th>Application</th>
    </tr>
    @foreach ($cvs as $cv)
    <tr>
        <td>{{ $cv->firstname }} {{ $cv->lastname }}</td>
        <td>{{ $cv->mobile }}</td>
        <td>{{ $statuses[$cv->status] }}</td>
        <td>{{ $cv->created_at }}</td>
        <td>
            <a href="#" data-id="{{ $cv->id }}" class="screener">
                <i class="fa fa-file-pdf-o" style="font-size:26px;color:#3790AD"></i>
                <i class="fa fa-file-word-o" style="font-size:26px;color:#3790AD"></i>
            </a>
        </td>
    </tr>
    @endforeach
</table>
<div id="cv_screen" class="modal">
    <div class="modal-content">
        <span class="close">x</span>
        <div class="docbox float-left">
            <iframe src="https://drive.google.com/file/d/0B7k6o4hxNHfUX2o3aEI0aVhLSmM/preview"></iframe>
        </div>
        <div class="docmeta">
            <div class="text-center">
                <div>
                    <button id="btn_src_approve" class="button">Approve</button>
                    <button id="btn_src_reject" class="button" style="margin-left: 20px;">Reject</button>
                </div>
                <div>
                    <u>APPLICATION</u><br>
                    First Name: <span id="firstname"></span><br>
                    Last Name: <span id="lastname"></span><br>
                    Mobile: <span id="mobile"></span><br>
                </div>
                <hr>
                <span id="flash" style="color: #ba2222"></span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection