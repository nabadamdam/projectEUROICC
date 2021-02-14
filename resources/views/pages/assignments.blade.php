@extends('layouts/template')
@section('mainContent')
    <div class="main">
        <form action="{{url('/projectAssigments')}}"  method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <select name="user">
                @foreach($allUser as $au)
                    <option value="{{$au->id}}">{{$au->nameUser}}</option>
                @endforeach
            </select>
            <select name="project">
                @foreach($allProject as $ap)
                    <option value="{{$ap->id}}">{{$ap->nameProject}}</option>
                @endforeach
            </select>
            <input type="submit" name="sub" id="sub"/>
        </form>
    </div>
 @endsection