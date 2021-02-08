@extends('layout.backoffice')
@section('title')
    <title> Page BackOffice</title>
@endsection
@section('content')
            <div class="card-deck">
                <div class="card">
                    <div class="card-header">Ajout Article</div>
                    <div class="card-body">
                        <h3 class="card-title">Remplisser votre boutique</h5>
                        <p class="card-text">Ajouter des produit à votre produit grâce à notre Formulaire.</p>

                    </div>
                    <div class="card-footer">Cliquez sur <a href="formulaireAjout.blade.php"> ce lien </a></div>
                </div>
                <div class="card">
                    <div class="card-header">Modifier un article</div>
                    <div class="card-body">
                        <h3 class="card-title">Vous avez fait une erreur ? Pas de souci ! vous pouvez la modifier ! </h5>
                        <p class="card-text">Modifier à tout moment les détails de vos produits.</p>
                    </div>
                    <div class="card-footer">Cliquez sur <a href=""> ce lien </a></div>
                </div>
            </div>
        </div>

@endsection
