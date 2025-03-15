@extends('layouts.bootstrap')
<form action="{{ route('students.update',$student->id) }}" method="POST">
    @csrf
    @method('PUT')
<h1>modifier un etudiant</h1>
  <div class="form-group">
    <label for="email">Email </label>
    <input type="email" class="form-control" id="email" value="{{$student->email}}" placeholder="Enter email" name="email">
  </div>
  <label for="adresse">adresse </label>
    <input type="text" class="form-control" id="adresse" value="{{$student->adresse}}"  placeholder="Enter adresse" name="adresse">
  </div>
  <label for="age">age </label>
    <input type="number" class="form-control" id="age" value="{{$student->age}}" placeholder="Enter age" name="age">
  </div>
  <label for="exampleInputEmail1">name </label>
    <input type="name" class="form-control" id="name" value="{{$student->name}}" placeholder="Enter name" name="name">
  </div>
  <div class="form-group">
                <label for="sexe">sexe:</label>
                <select name="sexe" id="sexe" class="form-control">
                    <option value="woman" @if($student->sexe === 'woman') selected @endif>woman</option>
                    <option value="man" @if($student->sexe === 'man') selected @endif>man</option>
                </select>
            </div>

  <button type="submit" class="btn btn-primary">update</button>
</form>