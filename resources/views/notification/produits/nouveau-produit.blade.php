@component('mail::message')
# Du nouveau sur OpenShop !

## Un nouveau surper produit vient d'etre ajouté sur votre superbe plateforme OpenShop

Vous trouverez ci-dessous les informations sur le nouveau produit.
### Désignation: {{ $produit->designation }}
### Prix: {{ $produit->prix }}
### Catégorie: {{ $produit->category->libelle }}

Pour commander ce produit cliquez juste sur le boutton ci-dessous.
@component('mail::button', ['url' => route("produits.show", $produit)])
Commandez ce produit
@endcomponent

Merci d'avoir choisi OpenShop pour votre shopping,<br><br>
{{ config('app.name') }}
@endcomponent
