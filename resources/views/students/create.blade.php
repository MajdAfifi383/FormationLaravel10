@extends('layouts.bootstrap')
<form action="{{ route('students.store') }}" method="POST">
    @csrf
<h1>ajouter un etudiant</h1>
  <div class="form-group">
    <label for="email">Email </label>
    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email" name="email">
  </div>
  <label for="adresse">adresse </label>
    <input type="text" class="form-control" id="adresse" aria-describedby="adresse" placeholder="Enter adresse" name="adresse">
  </div>
  <label for="age">age </label>
    <input type="number" class="form-control" id="age" aria-describedby="age" placeholder="Enter age" name="age">
  </div>
  <label for="exampleInputEmail1">name </label>
    <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter name" name="name">
  </div>
  <label for="sexe">Sexe:</label>
    <select name="sexe" id="sexe" class="form-control" required>
        <option value="">-- Sélectionnez --</option>
        <option value="man">Homme</option>
        <option value="woman">Femme</option>
    </select>

  <button type="submit" class="btn btn-primary">ajouter</button>
</form>