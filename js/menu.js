


    document.getElementById('tipo_residencia').addEventListener('change', function () {
        var tipoResidencia = this.value;
        var camposResidencia = document.getElementById('campos_residencia');
        camposResidencia.innerHTML = '';

        if (tipoResidencia === 'casa') {
          camposResidencia.innerHTML = `
            <label for="quadra">Quadra:</label>
            <input type="text" id="quadra" name="quadra">

            <br><br>

            <label for="lote">Lote:</label>
            <input type="text" id="lote" name="lote">
          `;
        } else if (tipoResidencia === 'condominio') {
          camposResidencia.innerHTML = `
            <label for="bloco">Bloco:</label>
            <input type="text" id="bloco" name="bloco">

            <br><br>

            <label for="casa_condominio">Casa:</label>
            <input type="text" id="casa_condominio" name="casa_condominio">
          `;
        } else if (tipoResidencia === 'apartamento') {
          camposResidencia.innerHTML = `
            <label for="bloco_apto">Bloco:</label>
            <input type="text" id="bloco_apto" name="bloco_apto">

            <br><br>

            <label for="apto">Apartamento:</label>
            <input type="text" id="apto" name="apto">
          `;
        }
      });

      document.getElementById('cadastrar_usuario').addEventListener('click', function () {
        var campoUsuario = document.getElementById('campo_usuario');
        campoUsuario.innerHTML = `
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome">

          <br><br>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email">

          <br><br>

          <label for="telefone">Telefone:</label>
          <input type="text" id="telefone" name="telefone">
        `;
      });

      function abrirAlerta() {
          swal({
            title: "Obrigado!",
            text: "Seu pedido será pronto em breve",
            icon: "success",
          });
              }


