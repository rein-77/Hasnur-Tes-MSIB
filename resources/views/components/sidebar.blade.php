<!DOCTYPE html>
<html>
<head>
<title>Ardi App</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-content" style="max-width:13000px">

<!-- First Grid: Logo & About -->
<div class="">
  <div class="w3-half w3-black w3-container w3-center" style="height:100vh">
    <div class="w3-padding-64">
      <h1 class="w3-text-white">My Logo</h1>
    </div>
    <div class="w3-padding-64">
      <h3><a href="{{ route('home.home') }}" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16">Home</a></h3>
      <a href="{{ route('kursus.index') }}" class="w3-button w3-black w3-block w3-hover-teal w3-padding-16">Kursus</a>
      <a href="{{ route('materi.index') }}" class="w3-button w3-black w3-block w3-hover-dark-grey w3-padding-16">Materi</a>
    </div>
  </div>

{{$slot}}