<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\student;

class studentController extends Controller
{
    public function index()
    {
		$students=student::all();
		return view('studenttable',['students'=>$students]);		
	}
	
    public function add()
    {		
		return view('studentsadd');		
	}
    public function save()
    {	
		request()-validate(
		[
			'name'=>['required','min:3'],
			'surname'=>['required','min:3'],
			'patronymic'=>['required','min:3'],
			'math'=>'required',
			'physics'=>'required',
			'geometry'=>'required',
			'music'=>'required',
			'painting'=>'required',
			'birthdata'=>'required'		
		]);	
		
		$student=new student();
	    $student->name=request('name');
		$student->surname=request('surname');
		$student->patronymic=request('patronymic');
		$student->math=request('math');
		$student->physics=request('physics');
		$student->geometry=request('geometry');
		$student->music=request('music');
		$student->painting=request('painting');
		$student->birthdata=request('birthdata');
		$student->save();
		return redirect('/students');
	}
    public function edit($id)
    {	
		$studentItem=student::findOrFail($id);
		return view('studentsedit',['student'=>$studentItem]);
	}
	public function update($id)
    {		
		$student=student::findOrFail($id);
		request()-validate(
		[
			'name'=>['required','min:3'],
			'surname'=>['required','min:3'],
			'patronymic'=>['required','min:3'],
			'math'=>'required',
			'physics'=>'required',
			'geometry'=>'required',
			'music'=>'required',
			'painting'=>'required',
			'birthdata'=>'required'		
		]);	
		$student->update(request(['name','surname','patronymic','math','physics','geometry','music','painting','birthdata']));
		return redirect('/students');
	}
	
	public function delete($id)
    {		
		student::findOrFail($id)->delete();
		return redirect('/students');
	}
	
	public function find()
    {	
		$val=request('searchdata');	
		$atr=request('fieldname');	
		$findData=student::where($atr, '=', $val)->get();
		return view('studentssearch',['students'=>$findData]);
	}
	
	public function sort()
    {	
		$i=request('indexSort');
		if ($i!==-1)
		{
			if (request()->session()->has('sortItem'))			
				{
					$value = session('sortItem');				
				}
				else
				{
					session(['sortItem' => 'AAAAAAAAA']);
					$value = 'AAAAAAAAA';	
					$sortType='asc';
				}
			if ($value[$i]=='A')
				{
					$value[$i]='B';
					$sortType='asc';
				}
			else
				{
					$value[$i]='A';
					$sortType='desc';
				}				
			session(['sortItem'=>$value]);
			switch ($i) {
				case 0:
					$students = DB::table('students')
					->orderBy('name', $sortType)
					->get();
					break;
				case 1:
					$students = DB::table('students')
					->orderBy('surname', $sortType)
					->get();
					break;
				case 2:
					$students = DB::table('students')
					->orderBy('patronymic', $sortType)
					->get();
					break;
				case 3:
					$students = DB::table('students')
					->orderBy('birthdata', $sortType)
					->get();
					break;
				case 4:
					$students = DB::table('students')
					->orderBy('math', $sortType)
					->get();
					break;
				case 5:
					$students = DB::table('students')
					->orderBy('physics', $sortType)
					->get();
					break;
				case 6:
					$students = DB::table('students')
					->orderBy('geometry', $sortType)
					->get();
					break;
				case 7:
					$students = DB::table('students')
					->orderBy('music', $sortType)
					->get();
					break;
				case 8:
					$students = DB::table('students')
					->orderBy('painting', $sortType)
					->get();
					break;
			}
		}
		request()->merge(['indexSort' => -1]);	
		return view('studenttable',['students'=>$students]);
	}

}
