@extends('layouts/template')
@section('mainContent')
    <div class="main">
        <a href="{{url('/assignments')}}" id="assignments">Assignments</a>
        <table id="tableUser">
            <?php   
                $name = "";
                $project = "";
            ?>
            <th>Name User</th>
            <th>Email</th>
            <th>Name Project</th>
            <th>Tasks</th>
            @foreach($homeData as $h)
                <?php
                if($h->nameUser != $name){
                ?>
                    <tr>
                    @foreach($h as $s)
                        <td>
                            {{$s}}
                        </td>
                    @endforeach
                <?php
                        $name=$h->nameUser;
                        $project = $h->nameProject;
                    }else{
                        if($h->nameProject != $project){          
                ?>
                    <tr>
                    @foreach($h as $s)
                        <td>
                            {{$s}}
                        </td>
                    @endforeach
                    
                <?php
                        $project = $h->nameProject;
                        }else{
                ?>      <td>
                            {{$h->name}}
                        </td>
                        
                <?php
                        }
                    }
                ?>
            @endforeach
        </table>
    </div>
@endsection