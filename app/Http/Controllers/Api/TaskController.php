<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\NgvTask;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function FindOne($id)
    {

        $task = NgvTask::find($id);
        if (!$task) {
            return null;
        }
        return $task;
    }

    public function Create(Request $request)
    {
        $task = new NgvTask([
            'title' => $request->get('title'),
            'package' => $request->get('package'),
            'work' => $request->get('work'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'addressName' => $request->get('addressName'),
            'lat' => $request->get('lat'),
            'lng ' => $request->get('lng'),
            'startAt' => $request->get('startAt'),
            'endAt' => $request->get('endAt'),
            'hour' => $request->get('hour'),
            'tools' => $request->get('tools'),
        ]);
        if ($task->save()) {
            return [
                'success' => true,
                'data' => $task
            ];
        } else {
            return [
                'success' => false,
                'errorCode' => 1,
                'message' => 'Task create fail'
            ];
        }
    }

    public function Update(Request $request, $id)
    {
        if ($this::FindOne($id)) {
            $task = $this::FindOne($id);
            $task->title = $request->get('title');
            $task->package = $request->get('package');
            $task->work = $request->get('work');
            $task->description = $request->get('description');
            $task->price = $request->get('price');
            $task->addressName = $request->get('addressName');
            $task->lat = $request->get('lat');
            $task->lng = $request->get('lng');
            $task->startAt = $request->get('startAt');
            $task->endAt = $request->get('endAt');
            $task->hour = $request->get('hour');
            $task->tools = $request->get('tools');
            $task->save();
        } else {
            return [
                'success' => false,
                'errorCode' => 2,
                'message' => 'Task not found'
            ];
        }
    }

    public function Delete(Request $request, $id)
    {
        if ($this::FindOne($id)) {
            $task = $this::FindOne($id);
            if ($task->delete()) {
                return [
                    'success' => true,
                    'data' => $task
                ];
            } else {
                return [
                    'success' => false,
                    'errorCode' => 4,
                    'message' => 'Task delete fail'
                ];
            }
        } else {
            return [
                'success' => false,
                'errorCode' => 2,
                'message' => 'Task not found'
            ];
        }
    }

}