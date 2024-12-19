function EnviarWhats() {
  var form = document.getElementById('formContato');
  var camposObrigatorios = form.querySelectorAll('[required]');
  var todosPreenchidos = true;

  // Remove destaque anterior dos campos
  camposObrigatorios.forEach(function(campo) {
      campo.classList.remove('campo-obrigatorio');
  });

  // Verifica se todos os campos obrigatórios estão preenchidos
  camposObrigatorios.forEach(function(campo) {
      if (!campo.value) {
          campo.classList.add('campo-obrigatorio');
          todosPreenchidos = false;
      }
  });

  if (todosPreenchidos) {
      var nome = form.elements['nome'].value;
      var fone = form.elements['tel'].value;
      var email = form.elements['email'].value;
      var mens = form.elements['mens'].value;

      // Número do WhatsApp
      var numWhats = '5511963006221';
      var quebraDeLinha = '%0A';

      // Codifica os valores dos inputs
      nome = window.encodeURIComponent(nome);
      fone = window.encodeURIComponent(fone);
      email = window.encodeURIComponent(email);
      mens = window.encodeURIComponent(mens);

      // Monta a URL com os dados do formulário
      var url = "https://wa.me/" + numWhats + "?text=" + "*Site Ideia Tech 360 - Orçamento*"
          + quebraDeLinha + quebraDeLinha
          + "Nome: " + nome + quebraDeLinha
          + "Telefone: " + fone + quebraDeLinha
          + "Email: " + email + quebraDeLinha
          + "Mensagem: " + mens;

      // Abre o WhatsApp em uma nova aba com os dados preenchidos
      window.open(url, '_blank');
  } else {
      alert("Por favor, preencha todos os campos obrigatórios.");
  }
}

// Adicionando o evento de clique no botão "Enviar WhatsApp"
document.getElementById('btnEnviarWhats').addEventListener('click', EnviarWhats);
