@extends('layouts.main')

@section('container')
<style>
    .styled-div {
        font-family: sans-serif; 
        font-size: 18px; 
        background-color: #ffffff; 
        border-radius: 5px; 
        box-sizing: border-box; 
        color: #000000; 
        height: auto; 
        line-height: 1; 
        max-width: 1100px; 
        overflow: hidden; 
        padding: 30px; 
        text-overflow: ellipsis; 
        margin: 30px auto; 
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .form-check-input {
        margin-right: 10px;
    }

    .styled-button{
        background-color: #6aa84f; 
        border-radius: 50px; 
        padding: 10px; 
        display: inline-block; 
        position: absolute; 
        right: 130px;
        /* background-color: #4CAF50;  */
        color: white; 
        border: none; 
        border-radius: 20x; 
        padding: 10px; 
        text-align: center; 
        text-decoration: none; 
        display: inline-block; 
        font-size: 16px; 
        cursor: pointer;
    }
</style>

<form action="/input" method="POST">
    @csrf
    @php
        $previousElementName = null;
    @endphp

    <div class="styled-div">
        @foreach($mst_questionalls as $mst_questionall)
            @if($mst_questionall->element_name != $previousElementName)
                <h4><b>{{ $mst_questionall->element_name }}</b></h4>
                <hr>
                <p><b>Select the option that best applies to your organization.</b></p>
                @php
                    $previousElementName = $mst_questionall->element_name; 
                @endphp
            @endif
            <div class="form-check">
                <input class="form-check-input" type="radio" name="mst_questionall" id="mst_questionall{{ $mst_questionall->question }}" value="{{ $mst_questionall->question }}">
                <label class="form-check-label" for="mst_questionall{{ $mst_questionall->question }}">
                    {{ $mst_questionall->question }}
                </label>
            </div>
        @endforeach
    </div>
    
    <button class="styled-button" type="submit">Submit</button>
</form>
@endsection
