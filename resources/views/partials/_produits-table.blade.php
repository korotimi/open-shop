<table class="table">
    <thead>
        <tr>
            <th>Désignation</th>
            <th>Prix</th>
            <th>quantite</th>
            <th>description</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($listProduits as $produit)
            <tr>
                <td scope="row">{{ $produit->designation }}</td>
                <td>{{ $produit->prix }}</td>
                <td>{{ $produit->quantite }}</td>
                <td>{{ $produit->description }}</td>

            </tr>
        @endforeach

    </tbody>
</table>