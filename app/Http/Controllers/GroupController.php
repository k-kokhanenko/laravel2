<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();

        return view(
            'groups.index',
            [ 'groups' => $groups]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Проверяем данные запроса
        if ($request->validate([
            'title' => 'required|unique:groups',
            'start_from' => 'date',
            'is_active' => 'boolean',
        ])) {
            // Создаём новую группу
            Group::create($request->all());

            return redirect()->route('groups.index')->with('success', 'Группа успешно создана!');
        } else {
            return back()->withInput()->withErrors(provider: $request->errors());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $group = Group::findOrFail($id);
        $students = Student::all();

        return view(
            'groups.show',
            [ 
                'id' => $id,
                'students' => $students,
                'group' => $group,
            ]
        );
    }

    public function getStudents($groupId)
    {
        //return 'getStudents-'.$groupId;
        return view(
            'groups.create_student',
            [ 'groupId' => $groupId]
        );
    }

    public function getStudent($groupId, $studentId)
    {
        return view(
            'groups.student',
            [ 'groupId' => $groupId, 'student' => Student::findOrFail($studentId) ]
        );
    }


    public function createStudents(Request $request)
    {
          // Проверяем данные запроса
          if ($request->validate([
            'name' => 'required',
            'surname' => 'required',
        ])) {
            // Создаём нового студента
            Student::create(attributes: $request->all());

            return redirect()->route('groups.show', ['group' => $request->group_id]);            
        } else {
            return back()->withInput()->withErrors(provider: $request->errors());
        }          
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
