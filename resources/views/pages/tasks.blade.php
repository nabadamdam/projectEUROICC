@extends('layouts/template')
@section('mainContent')
    <div class="main">
        <div id="user">
            <b><p>User</p></b><p>{{session('user')[0]->nameUser}}</p>
        </div>
        <div id="project">
            <b><p class="project">Project</p></b><p class="project">{{session('project')[0]->nameProject}}</p>
        </div>
        <h2 id="title">Tasks</h2>
        <form action="{{url('/user_tasks')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="hidden" name="idAssigment" id="idAssigment" value="{{session('proAssigmentID')}}"/>
            @foreach($tasks as $t)
                <div class="tasks">
                    <label>{{$t->name}}</label><input type="checkbox" name="tasks[]" id="{{$t->name}}" value="{{$t->id}}"/></br>
                </div>
            @endforeach
            <input type="submit" name="taskB" id="taskB"/>
        </form>
        {{ $errors->first('tasks') }}
    </div>
@endsection
