<style>
    .gradient-submit {
        background: linear-gradient(to right, rgb(73, 107, 217), cyan, rgb(61, 143, 143), rgb(73, 107, 217));
        padding: 4px 12px;
        border-radius: 12px;
        opacity: 0.8;
    }
</style>
<div class="container p-4 my-3 text-lg text-base md:text-lg lg:text-xl  ">
    <div class="row justify-center  ">

        <div class="col-12 col-md-10  col-lg-9 col-xl-5 ">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input required type="text" class="form-control" name="nome" placeholder="digite seu nome">
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone </label>
                <input required type="text" class="form-control" id="email" placeholder="digite seu telefone"
                    name="telefone">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email </label>
                <input required type="email" class="form-control" id="email" placeholder="digite seu email"
                    name="email">
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Envie sua mensagem</label>
                <textarea class="form-control" name="mensagem" rows="auto"></textarea>
            </div>

            <div class=" center mt- ">
                <input required type="submit" value="Enviar"
                    class="  btn btn-info bg-info text-white fw-bold md:text-xl">
            </div>
        </div>

    </div>
</div>
