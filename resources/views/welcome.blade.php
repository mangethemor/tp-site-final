@extends('layouts.app')
@section('content')

<ul id="ligne">
<li><a href="" style="color:red;" target="_blank">Services</a></li> 
<li><a href="{{ asset('tarifs') }}" style="color:red;" target="_self">Tarifs</a></li> 
<li><a href="contact.blade.php" style="color:red;" target="_blank">Contact</a></li>
</ul>

<h2>Etape 1</h2>
<p>promouvoir les solutions de cybersécurité françaises et accroître leur visibilité à l’international ;</p>
<h2>Etape 2</h2>
<p>sensibiliser les utilisateurs et donneurs d’ordre internationaux à l’importance de l’origine française d’une offre de cybersécurité et aux  qualités qui lui sont propres ;</p>
<h2>Etape 3</h2>
<p>attester auprès des utilisateurs et donneurs d’ordre, l’existence et la commercialisation des produits et services ainsi labellisés ;</p>

<center>©3iSystem2022 </center>
@endsection
