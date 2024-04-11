@php use Illuminate\Support\Facades\Storage; @endphp
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>
<div>
    <header>
        <h1>Produtos</h1>
    </header>
    <section>
        <a href="{{Route('produtos.show')}}">New Product</a>
    </section>
    <section class="body">
        <table>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Categoria</th>
            <th>Imagem</th>
            <th>Data Fabrico</th>
            <th>Data Expiração</th>
            @foreach($produtos as $produto)
                <tr>
                    <td>{{$produto->id}}</td>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->preco}}</td>
                    <td>{{$produto->quant}}</td>
                    <td>{{$produto->cat}}</td>
                    <td>{{$produto->imagem}}</td>
                    <td>{{$produto->data_fab}}</td>
                    <td>{{$produto->data_exp}}</td>
                    <td>{{Storage::disk('public')->url($produto->imagem)}}</td>
                    <td>

                        <img src="{{ Storage::disk('public')->url($produto->imagem) }}" width="50px">
                    </td>
                </tr>
            @endforeach
        </table>

    </section>
</div>
</body>
</html>
