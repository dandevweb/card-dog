<?php $v->layout("master") ?>

<div class="row">
    <form class="col-5 mx-auto">
        <div class="alert alert-success alert-dismissible d-none">
            Card salvo com sucesso!
            <button type="button" class="btn-close"></button>
        </div>
        <input type="hidden" id="getImageUrl" data-url="<?= url("/breeds/image/") ?>">
        <div class="mb-3 ">
            <label class="form-label">Raça</label>
            <select class="form-select" id="breed" required>
                <option value="">Selecione uma Raça</option>
                <?php foreach ($breeds as $breed => $subBreed): ?>
                <option value="<?= $breed ?>"><?= ucfirst($breed) ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-3 ">
            <label class="form-label">Nome do Cachorro</label>
            <input type="text" class="form-control" id="name" placeholder="Digite o Nome..." required>
        </div>
        <div class=" mb-4">
            <label class="form-label">Cor</label>
            <select class="form-select" id="color" required>
                <option value="#000">Preto</option>
                <option value="#297F18">Verde</option>
                <option value="#DB4437">Vermelho</option>
                <option value="#F4B400">Amarelo</option>
                <option value="#4285F4">Azul</option>
            </select>
        </div>
        <div class=" mb-4">
            <label class="form-label">Fonte</label>
            <select class="form-select" id="font" required>
                <option value="Roboto">Roboto</option>
                <option value="Opens Sans">Opens Sans</option>
                <option value="Inter">Inter</option>
                <option value="Nanum Gothic">Nanum Gothic</option>
                <option value="Trispace">Trispace</option>
            </select>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary fw-bold" type="submit">Salvar</button>
        </div>

        <div id="date" class="mt-2"></div>
    </form>

    <div class="col-md-7 d-flex align-items-center">
        <div class="card" id="image">
            <img src="" class="card-img-top">
            <div class='card-body'>
                <h4 class='card-text'></h4>
            </div>
        </div>
    </div>
</div>