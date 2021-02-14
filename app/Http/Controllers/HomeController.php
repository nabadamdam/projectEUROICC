<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Task;
use App\Models\Project_assigment;
use App\Models\User_task;
use App\Http\Requests\CheckRequest;

class HomeController extends Controller
{
    protected $modelUser;
    protected $modelProject;
    protected $modelTaks;
    protected $modelProjectAssigment;
    protected $modelUserTask;

    public function __construct()
    {
        $this->modelUser = new User();
        $this->modelProject = new Project();
        $this->modelTask = new Task();
        $this->modelProjectAssigment = new Project_assigment();
        $this->modelUserTask = new User_task();
    }
    public function assignmentsPage()
    {
        $allUser = $this->modelUser->getAllUser();
        $allProject = $this->modelProject->getAllProject();
        $data['allUser'] = $allUser;
        $data['allProject'] = $allProject;
        return view('pages/assignments',$data);
    }
    public function insertAssignment(Request $request)
    {
        $userId = $request->get('user');
        $projectId = $request->get('project');
        $check = $this->modelProjectAssigment->insert($userId,$projectId);
        if($check != null){
            $user = $this->modelUser->getOneUser($userId);
            $project = $this->modelProject->getOneProject($projectId);
            $request->session()->put('user',$user);
            $request->session()->put('project',$project);
            $request->session()->put('proAssigmentID',$check);
        }
        return \redirect('/tasks');
    }
    public function tasksPage()
    {
        $tasks = $this->modelTask->getAllTask();
        $data['tasks'] = $tasks;
        return view('pages/tasks',$data);
    }
    public function inserTaskForUser(CheckRequest $request)
    {
        $idAssigment = $request->input('idAssigment');
        $checkboxes = $request->input('tasks');
        foreach($checkboxes as $c)
        {
           $this->modelUserTask->insertOneByOne($idAssigment,$c);
        }
        $request->session()->forget("user");
        $request->session()->flush();
        $request->session()->forget("project");
        $request->session()->flush();
        $request->session()->forget("proAssigmentID");
        $request->session()->flush();
        return \redirect('/home');
    }
    public function homePage()
    {
        $dataForUser['homeData'] = $this->modelTask->getAllForUserTaskProject();

        return view('pages/home',$dataForUser);
    }
}
