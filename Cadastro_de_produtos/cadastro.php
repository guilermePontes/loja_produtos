
<div class="container">
        <h1>AUTO STAR</h1>
        <form class="row g-3" method="POST" action="_scripts/input.php">
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Nome do produto</label>
                <input type="text" class="form-control" name="nome_produto" required>
            </div>
            <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Preço de Compra</label>
                <input type="decimal" class="form-control" name="preco_compra" required>
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Preço de Venda</label>
                <input type="decimal" class="form-control" name="preco_venda" required>
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Código do produto</label>
                <input type="text" class="form-control" name="codigo_produto" required>
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Nome do fornecedor</label>
                <input type="text" class="form-control" name="nome_fornecedor" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>