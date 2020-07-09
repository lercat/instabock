@extends('layouts.app')

@section('content')
<div class="container">
<!-- ici on est sur la partie présentation-->
    <div class="row mt-4">
        <div class="col-4 text-center">
            <img src="../img/profil1.png" class="rounded-circle w-50" alt="">
        </div>
        <div class="col-8">
            <div class="d-flex align-items-baseline">
                <div class="h4 mr-3 pt-2">Futur pseudo</div>
                <button class="btn btn-sm btn-dark">S'abonner</button>
            </div>
            <div class="d-flex mt-3">
                <div class="mr-5"><strong>25</strong> publications</div>
                <div class="mr-5"><strong>346</strong> abonnés</div>
                <div class="mr-5"><strong>3</strong> abonnements</div>
            </div>
            <div class="mt-3">
                <div class="font-weight-bold">Titre</div>
                <div>Présentation</div>
                <a href="#">Adresse du Site</a>
            </div>
        </div>
    </div>
<!-- fin présentation - nouvelle row pour les posts-->
    <div class="row pt-5">
        <div class="col-4">
            <img src="../img/barbar.png" class="w-100" alt="bière barbar">
        </div>
        <div class="col-4">
            <img src="../img/bernardus.png" class="w-100" alt="bière bernardus">
        </div>
        <div class="col-4">
            <img src="../img/erdinger.png" class="w-100" alt="bière erdinger">
        </div>
    </div>
</div>
@endsection
