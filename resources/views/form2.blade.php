
<div>
    <br><br>
</div>

<div>
    <form action="{{Route('produtos.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <input type="text" name="nome" placeholder="Name" value="{{old('Categoria')}}"><br>
            @error('nome')
            {{$message}}
            @enderror
        </div>
        <div>
            <select name="cat">
                <option value="alimentar">Alimentar</option>
                <option value="bebivel">Bebivel</option>
                <option value="ferramenta">Ferramenta</option>
            </select>
            @error('cat')
            {{$message}}
            @enderror
        </div>
        <div>
            <input type="number" name="preco" placeholder="Preço" value="{{old('preco')}}"><br>
            @error('preco')
            {{$message}}
            @enderror
        </div>
        <div>
            <input type="number" name="quant" placeholder="Quantidade" value="{{old('quant')}}"><br>
            @error('quant')
            {{$message}}
            @enderror
        </div>
        <div>
            <label>Data de Fabrico</label><br>
            <input type="date" name="data_fab" placeholder="Data de Fabrico" value="{{old('data_fab')}}"><br>
            @error('data_fab')
            {{$message}}
            @enderror
        </div>
        <div>
            <label>Imagem do Produto</label><br>
            <input type="file" name="imagem"><br>
            @error('imagem')
            {{$message}}
            @enderror
        </div>
        <div>
            <label>Data de Expiração</label><br>
            <input type="date" name="data_exp" placeholder="Data de Expiração" value="{{old('data_exp')}}"><br>
            @error('data_exp')
            {{$message}}
            @enderror
        </div>
        <div>
            <input type="submit" name="id" value="Submit">
        </div>
    </form>
</div>
