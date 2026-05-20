<!DOCTYPE html>
<html class="h-full bg-white">

<head>
  <?php
    $name = "name";
    $email = "email";
    $age = "age";
    $city = "city";
    $observations = "observations";

    $user_name =  test_empty_input($_POST[$name], $name);
    $user_email = test_empty_input($_POST[$email], $email);
    $user_age = test_number_input( test_empty_input($_POST[$age], $age), $age );
    $user_city = test_empty_input($_POST[$city], $city);
    
    $user_observations = empty($_POST[$observations]) ? "Nenhuma Observação" : $_POST[$observations];

    function test_empty_input($dado_input, $nome_campo) {
        $dado_input = trim($dado_input);
        if (empty($dado_input)) {
            return "Campo $nome_campo Inválido";
        }
        return $dado_input;
    }

    function test_number_input($dado_input, $nome_campo) {
        if ( filter_var($dado_input, FILTER_VALIDATE_INT) ) {
            return $dado_input;
        } else {
            "Campo $nome_campo Inválido";  
        }
    }
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscrever-se Agora!</title>
  <!-- Importação do Tailwind via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full">
  <div class="overflow-x-auto my-6 rounded-lg border border-slate-200 shadow-sm">
    <table class="w-full text-left text-sm border-collapse bg-white">
      <thead
        class="bg-slate-50 text-xs font-semibold uppercase tracking-wider text-slate-700 border-b border-slate-200">
        <tr>
          <th scope="col" class="px-6 py-4">Campo</th>
          <th scope="col" class="px-6 py-4">Valor</th>
        </tr>
      </thead>

      <tbody class="divide-y divide-slate-100 text-slate-600">
        <tr class="hover:bg-slate-50 transition-colors">
          <td class="px-6 py-4 font-mono font-medium text-indigo-600">Nome</td>
          <td class="px-6 py-4 text-slate-900">
            <?php echo $user_name; ?>
          </td>
        </tr>

        <tr class="hover:bg-slate-50 transition-colors">
          <td class="px-6 py-4 font-mono font-medium text-indigo-600">E-mail</td>
          <td class="px-6 py-4 text-slate-900">
            <?php echo $user_email; ?>
          </td>
        </tr>

        <tr class="hover:bg-slate-50 transition-colors">
          <td class="px-6 py-4 font-mono font-medium text-indigo-600">Idade</td>
          <td class="px-6 py-4 text-slate-900">
            <?php echo $user_age; ?>
          </td>
        </tr>

        <tr class="hover:bg-slate-50 transition-colors">
          <td class="px-6 py-4 font-mono font-medium text-indigo-600">Cidade</td>
          <td class="px-6 py-4 text-slate-900">
            <?php echo $user_city; ?>
          </td>
        </tr>

        <tr class="hover:bg-slate-50 transition-colors">
          <td class="px-6 py-4 font-mono font-medium text-indigo-600">Observações</td>
          <td class="px-6 py-4 text-slate-900">
            <?php echo $user_observations; ?>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>

</html>