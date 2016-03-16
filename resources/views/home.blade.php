@extends('layouts.app')

@section('content')
    @foreach ($student_list as $student)
         {{$student->id}},{{ $student->first_name }} <br>
    @endforeach
    {!! $student_list->links() !!}
@endsection
