<?php include __DIR__ . '/../inicio-html.php'; ?>

              <form action="/salvar-curso<?= isset($curso) ? '?id= ' . $curso->getId() : ''; ?>" method="post">
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" 
                      id="descricao" 
                      name="descricao" 
                      class="form-control" 
                      value="<?= isset($curso) ? $curso->getDescricao(): ''; ?>">
                </div>
                
                <div>
                  <button class="btn btn-primary"><a href="/listar-cursos" class="text-light">Voltar</a></button>
                  <button class="btn btn-primary">Salvar</button>
                </div>

              </form>

<?php include __DIR__ . '/../fim-html.php'; ?>