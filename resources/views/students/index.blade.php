@extends('layouts.bootstrap')
<div class="container">
<h1>Employee List</h1>
<a href="{{route('students.create')}}" class="btn btn-success">ajouter un etudiant</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Email</th>
      <th scope="col">Sexe</th>
      <th scope="col">Adresse</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <td >{{$student->id}}</td>
      <td>{{$student->name}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->sexe}}</td>
      <td>{{$student->adresse}}</td>
      <td><a href="{{ route('students.edit', $student->id) }}"class="btn btn-warning">update</a>
  <form action="{{route('students.destroy',$student->id)}}"method="POST"style="display: inline;">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">supprimer</button>

  </form>

    </td>

    </tr>
@endforeach
</div>
  </tbody>
</table>