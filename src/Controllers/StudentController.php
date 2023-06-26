<?php
    
    namespace App\Controllers;

    use App\Models\Student;

    use Symfony\Component\HttpFoundation\Request;

    
    class StudentController

    {   

        public function index() 

        {   
            $students = Student::get();

            return view('index.php', ['students' => $students]);
        }

        public function create()

        {

          return view('create.php');

        }

        public function store(Request $request)

        {

          $student = Student::create($request->request->all());

          if ($student) {

            return redirect("/students/edit?id={$student->id}");

          }

        }
        
        public function edit($id)

        {

            $student = Student::find($id);

            if ($student) {

                return view('edit.php', ['student' => $student]);
            }
        }

        public function show($id)

        {

            $student = Student::find($id);

            if ($student) {

                return view('show.php', ['student' => $student]);

            }
        }

        public function update(Request $request)

        {

            $result = Student::where('id', $request->request->get('id'))
            ->update($request->request->all());

            if ($result) {

                return redirect("/students");

            }
        }

        public function destroy($id) 

        {   

            $result = Student::destroy($id);

            if ($result) {

                return redirect('/students');

            }

        }

    }
?>