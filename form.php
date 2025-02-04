<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta name="theme-color" content="#f4344">
    <link rel="shortcut icon" href="channels4_profile.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<style>
body{margin: auto;align-items: center;justify-content: center;text-align: center;background: linear-gradient(to right,blue,black,blue);}
h1{color: white;text-shadow: 9px;font-size: 30px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;text-decoration: underline;white-space: nowrap;}
h2{color: black;text-shadow: 9px;font-size: 16px;font-family: Arial, Helvetica, sans-serif;font-style: inherit;text-decoration: none;white-space: nowrap;}
p{color: white;text-shadow: 9px;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: oblique;text-decoration: none;}
a{border-radius: 10px 10px;text-decoration: none;text-shadow: 9px;font-size: 16px;font-family: sans-serif;font-style: oblique;}
.footer:hover{transform: scale(1.05);transition: ease s;}
.nav:hover{transform: scale(1.06);transition: ease s;}
.summary:hover{transform: scale(1.03);transition: ease s;}
footer{cursor: grabbing;width: 300px;margin: auto;border-radius: 10px 10px;padding: 30px;align-items: center;justify-content: center;text-align: center;border: 6px solid whitesmoke;box-shadow: 6px 6px 6px black;}
summary{cursor: grabbing;width: 100px;margin: auto;border-radius: 10px 10px;padding: 6px;background-color: red;color: white;border: 3px solid white;box-shadow: 5px 5px 5px black;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: oblique;}
nav{cursor: grabbing;width: 300px;margin: auto;border-radius: 10px 10px;padding: 30px;align-items: center;justify-content: center;text-align: center;border: 6px solid white;box-shadow: 6px 6px 6px black;}
form{margin: auto;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;}
fieldset{cursor: context-menu;width: 300px;margin: auto;border-radius: 10px 10px;padding: 15px;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;background-color: whitesmoke;border: 4px solid black;box-shadow: 5px 5px 5px red;}
label{padding: 19px;text-shadow: 9px;margin: auto;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;color: black;}
.color1{cursor: grabbing;width: 800px;margin: auto;border-radius: 10px 10px;padding: 10px;gap: 6px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;background-color:darkred;border: 5px solid whitesmoke;box-shadow: 6px 6px 6px black;}
.color2{cursor: grabbing;width: 800px;margin: auto;border-radius: 10px 10px;padding: 10px;gap: 6px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;background-color:darkblue;border: 5px solid whitesmoke;box-shadow: 6px 6px 6px black;}
.color3{cursor: grabbing;width: 800px;margin: auto;border-radius: 10px 10px;padding: 10px;gap: 6px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;background-color:darkorange;border: 5px solid whitesmoke;box-shadow: 6px 6px 6px black;}
.color4{cursor: grabbing;width: 800px;margin: auto;border-radius: 10px 10px;padding: 10px;gap: 6px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;background-color:darkgoldenrod;border: 5px solid whitesmoke;box-shadow: 6px 6px 6px black;}
input{margin: auto;text-align: left;padding: 5px;width: 300px;margin: auto;border-radius: 10px 10px;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: oblique;color: black;background-color: azure;border: 4px solid blue;cursor: alias;display: flex;flex-direction: column;}
select{cursor: wait;width: 200px;margin: auto;border-radius: 10px 10px;padding: 5px;background-color: black;color: yellow;border: 4px solid white;box-shadow: 5px 5px 5px black;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;text-shadow: 9px;}
textarea{cursor: text;width: 300px;height: 200px;margin: auto;border-radius: 10px 10px;padding: 13px;background-color: antiquewhite;border: 4px solid black;color: black;text-shadow: 9px;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: oblique;}
button{cursor: progress;width: 280px;margin: auto;border-radius: 10px 10px;padding: 6px;background-color: blue;color: white;border: 4px solid white;box-shadow: 8px 8px 8px black;font-size: 18px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;}
</style>
<body>
    <h1><big>Formulário</big></h1>
    <br>
    <p id="script"></p>
    <br>
    <p id="form"></p>
    <br>
    <p id="text"></p>
    <br>
    <p id="index"></p>
    <br>
    <p id="input"></p>
    <br>
    <p id="select"></p>
    <br>
    <p id="word"></p>
    <br>
    <p id="windows"></p>
    <br>
    <p id="next"></p>
    <br>
    <div id="text"><details><summary style=width:300px;background-color:navy;color:white; >Formulário</summary>
    <br>
    <form action="form.php" method="post">
    <header><h1><big>Cadastro de <b>BRS</b></big></h1></header>
    <br>
    <main>
    <fieldset>
    <label for="Nome">Nome</label>
    <input type="text" name="nome" id="Nome" title="Digite seu Nome" placeholder="Exemplo: Guilherme Barbosa da Silva;" max="30" maxlength="30">
    <label for="Idade">Idade</label>
    <input type="number" name="idade" id="Idade" title="Digite sua Idade" placeholder="Exemplo: 23 ou 39 anos ?;" max="30" maxlength="30">
    <label for="Sexo">Sexo</label>
    <select name="genero" id="Sexo" required style="width:170px;background-color:white;color:red;border:3px solid black;box-shadow:4px 4px 4px black;font-size:14px;">
    <option value="" selected disabled>Selecione</option>
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
    <option value="Agênero">Agênero</option>
    <option value="Bigênero">Bigênero</option>
    <option value="Transgênero">Transgênero</option>
    <option value="Cisgênero">Cisgênero</option>
    </select>
    <br>
    <label for="RG">RG</label>
    <input type="text" name="rg" id="RG" title="Digite seu RG" placeholder="Exemplo: 53.742.867-7;" max="30" maxlength="30">
    <label for="CPF">CPF</label>
    <input type="text" name="cpf" id="CPF" title="Digite seu CPF" placeholder="Exemplo: 503.552.748-41;" max="30" maxlength="30">
    <label for="Data de Nascimento">Data de Nascimento</label>
    <input type="date" name="data_nasc" id="Data de Nascimento" title="Digite sua Data de Nascimento" placeholder="Exemplo: 22/05/2001;" max="30" maxlength="30">
    <label for="Endereço">Endereço</label>
    <input type="text" name="endereco" id="Endereço" title="Digite seu Endereço" placeholder="Exemplo: Av Rio das Pedras Nª4100;" max="30" maxlength="30">
    <label for="Cep">Cep</label>
    <input type="text" name="cep" id="Cep" title="Digite seu Cep" placeholder="Exemplo: 03936-000;" max="30" maxlength="30">
    <label for="Telefone">Telefone</label>
    <input type="text" name="telefone" id="Telefone" title="Digite seu Telefone" placeholder="Exemplo: (11) 98341-7590;" max="30" maxlength="30">
    <label for="Email">Email</label>
    <input type="email" name="email" id="Email" title="Digite seu Email" placeholder="Exemplo: guilherme8876sk@gmail.com;" max="30" maxlength="30">
    <label for="Estado civil">Estado civil</label>
    <select name="estado_civil" id="Estado civil" required style="width:160px;background-color:white;color:black;border:4px solid red;box-shadow:5px 5px 5px black;font-size:15px;">
    <option value="" selected disabled>Selecione</option>
    <option value="Solteiro">Solteiro</option>
    <option value="Casado">Casado</option>
    <option value="Viúvo">Viúvo</option>
    <option value="Divorciado">Divorciado</option>
    <option value="Separado">Separado</option>
    <option value="Compromissado">Compromissado</option>
    <option value="Enrolado">Enrolado</option>
    </select>
    <br>
    <label for="Altura">Altura</label>
    <select name="altura" id="Altura" style="width:150px;background-color:blue;color:white;border:4px solid white;box-shadow:5px 5px 5px black;font-size:16px;">
    <option value="" selected disabled>Selecione</option>
    <option value="1.50 cm">1.50 cm</option>
    <option value="1.60 cm">1.60 cm</option>
    <option value="1.70 cm">1.70 cm</option>
    <option value="1.80 cm">1.80 cm</option>
    <option value="1.90 cm">1.90 cm</option>
    <option value="2.00 cm">2.00 cm</option>
    </select>
    <br>
    <label for="Sua Cor">Sua Cor</label>
    <input type="color" name="cor" id="Sua Cor" title="Digite Sua Cor" placeholder="Exemplo: branco ou negro;" max="30" maxlength="30">
    <label for="Seu Nível">Seu Nível</label>
    <input type="range" name="nivel" id="Seu Nível" title="Digite seu Seu Nível" placeholder="Exemplo: +/-;" max="30" maxlength="30">
    <label for="Data e Hora">Data e Hora</label>
    <input type="datetime-local" name="data_hora" id="Data e Hora" title="Digite sua Data e Hora" placeholder="Exemplo: 22/05 ás 10 AM;" max="30" maxlength="30">
    <br>
    <br>
    <h2><big>Qual o seu nível de conhecimento?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color1">
    <label for="Aprendiz" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Aprendiz</label>
    <input type="radio" name="conhecimento" value="Aprendiz" required>
    <label for="Jûnior" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Jûnior</label>
    <input type="radio" name="conhecimento" value="Jûnior" required>
    <label for="Iniciante" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Iniciante</label>
    <input type="radio" name="conhecimento" value="Iniciante" required>
    <label for="Pleno" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Pleno</label>
    <input type="radio" name="conhecimento" value="Pleno" required>
    <label for="Intermediário" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Intermediário</label>
    <input type="radio" name="conhecimento" value="Intermediário" required>
    <label for="Avançado" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Avançado</label>
    <input type="radio" name="conhecimento" value="Avançado" required>
    <label for="Expert" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Expert</label>
    <input type="radio" name="conhecimento" value="Expert" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de experiencia?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color2">
    <label for="Iniciante" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Iniciante</label>
    <input type="radio" name="experiencia" value="Iniciante" required>
    <label for="Mediano" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Mediano</label>
    <input type="radio" name="experiencia" value="Mediano" required>
    <label for="Pleno" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Pleno</label>
    <input type="radio" name="experiencia" value="Pleno" required>
    <label for="Avançado" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Avançado</label>
    <input type="radio" name="experiencia" value="Avançado" required>
    <label for="Expert" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Expert</label>
    <input type="radio" name="experiencia" value="Expert" required>
    <label for="Excepcional" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Excepcional</label>
    <input type="radio" name="experiencia" value="Excepcional" required>
    <label for="Profissional" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Profissional</label>
    <input type="radio" name="experiencia" value="Profissional" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de conhecimento?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color3">
    <label for="Base" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Base</label>
    <input type="radio" name="nivel_conhecimento" value="Base" required>
    <label for="Iniciante" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Iniciante</label>
    <input type="radio" name="nivel_conhecimento" value="Iniciante" required>
    <label for="Medio" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Medio</label>
    <input type="radio" name="nivel_conhecimento" value="Medio" required>
    <label for="Avançado" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Avançado</label>
    <input type="radio" name="nivel_conhecimento" value="Avançado" required>
    <label for="Expert" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Expert</label>
    <input type="radio" name="nivel_conhecimento" value="Expert" required>
    <label for="Excelente" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Excelente</label>
    <input type="radio" name="nivel_conhecimento" value="Excelente" required>
    <label for="Profissional" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Profissional</label>
    <input type="radio" name="nivel_conhecimento" value="Profissional" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de classe social?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color4">
    <label for="Classe A" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Classe A</label>
    <input type="radio" name="classe_social" value="Classe A" required>
    <label for="Classe B" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Classe B</label>
    <input type="radio" name="classe_social" value="Classe B" required>
    <label for="Classe C" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Classe C</label>
    <input type="radio" name="classe_social" value="Classe C" required>
    <label for="Classe D" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Classe D</label>
    <input type="radio" name="classe_social" value="Classe D" required>
    <label for="Classe E" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Classe E</label>
    <input type="radio" name="classe_social" value="Classe E" required>
    <label for="Classe F" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Classe F</label>
    <input type="radio" name="classe_social" value="Classe F" required>
    <label for="Classe S" style="white-space:nowrap;color:white;text-shadow:9px;font-size:15px;">Classe S</label>
    <input type="radio" name="classe_social" value="Classe S" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu signo?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:black;color:yellow;border:4px solid white;box-shadow:5px 5px 5px black;">QUAL?</summary>
    <br>
    <select name="signo" id="signo" required>
    <option value="" selected disabled>Selecione</option>
    <option value="Áries">Áries</option>
    <option value="Câncer">Câncer</option>
    <option value="Capricôrnio">Capricôrnio</option>
    <option value="Leão">Leão</option>
    <option value="Sagitário">Sagitário</option>
    <option value="Escorpião">Escorpião</option>
    <option value="Gêmeos">Gêmeos</option>
    <option value="Libra">Libra</option>
    <option value="Aquário">Aquário</option>
    <option value="Ofiúco">Ofiúco</option>
    <option value="Capricôrnio">Capricôrnio</option>
    <option value="Peixes">Peixes</option>
    <option value="Virgem">Virgem</option>
    </select>
</details></div></div>
    <br>
    <br>
    <h2><big>Me fale sobre a sua experiencia</big></h2>
    <br>
    <textarea name="experience_text" id="experiencia" rows="9" required></textarea>
    <br>
    <br>
    <button value="experience_text">Cadastre</button>
    <br>
    </fieldset>
    <br>
    <div class="nav">
    <nav style="background-color:darkblue;">
    <p style="color:white;">Retorne para minha <a href="index.html" target="_black" rel="noopener" style="background-color:blue;color:white;border:3px solid white;box-shadow:4px 4px 4px black;text-decoration:none;text-shadow:9px;font-size:14px;border-radius:10px 10px;cursor:auto;">1ªPágina</a></p>
    </nav>
    </div>
    <br>
    <div class="footer">
    <footer style="background-color:darkred;">
    <p style="color:white;">@GuilhermeBarbosaDaSilva,todos os direitos autorais.</p>
    </footer>
    </div>
    </main>
    </form>
</details></div>
    <script>
    alert('Olá');
    alert('Seja');
    alert('Bem');
    alert('Vindo');
    alert(1000*30303);
    alert(3999-333);
    alert(111+3333);
    alert('Ao');
    alert('Formulário');
    document.getElementById('script').innerHTML='Acompanhe';
    document.getElementById('form').innerHTML='Logo a Baixo';
    document.getElementById('text').innerHTML='A criação';
    document.getElementById('index').innerHTML='do meu Form';
    document.getElementById('input').innerHTML='Feito';
    document.getElementById('select').innerHTML='cuidadosamente';
    document.getElementById('word').innerHTML='com';
    document.getElementById('windows').innerHTML='cuidado';
    document.getElementById('next').innerHTML='e cautela';
    document.write('Ola');
    document.write('seja');
    document.write('bem');
    document.write('vindo');
    document.write('ao');
    document.write('meu');
    document.write('form');
    document.write('acesse');
    console.log('ola');
    console.log('mundo');
    console.log('hello');
    console.log('word');
    console.log('script');
    console.log('index');
    console.log('input');
    console.log('select');
    </script>
    <?php
    $host='127.0.0.1';
    $username='sickomode233';
    $dbname='travisscottjacqueswebster';
    $password='';
    $conn=mysqli_connect($host,$username,$password,$dbname);
    $nome=$_POST['nome']??null;
    $idade=$_POST['idade']??null;
    $genero=$_POST['genero']??null;
    $rg=$_POST['rg']??null;
    $cpf=$_POST['cpf']??null;
    $data_nasc=$_POST['data_nasc']??null;
    $endereco=$_POST['endereco']??null;
    $cep=$_POST['cep']??null;
    $telefone=$_POST['telefone']??null;
    $email=$_POST['email']??null;
    $estado_civil=$_POST['estado_civil']??null;
    $altura=$_POST['altura']??null;
    $cor=$_POST['cor']??null; 
    $nivel=$_POST['nivel']??null;
    $data_hora=$_POST['data_hora']??null;
    $conhecimento=$_POST['conhecimento']??null;
    $experiencia=$_POST['experiencia']??null;
    $nivel_conhecimento=$_POST['nivel_conhecimento']??null;
    $classe_social=$_POST['classe_social']??null;
    $signo=$_POST['signo']??null;
    $experience_text=$_POST['experience_text']??null;
    $sql = "INSERT INTO sickomode233 (nome, idade, genero, rg, cpf, data_nasc, endereco, cep, telefone, email, estado_civil, altura, cor, nivel, data_hora, conhecimento, experiencia, nivel_conhecimento, classe_social, signo, experience_text)
    VALUES ('$nome','$idade','$genero','$rg','$cpf','$data_nasc','$endereco','$cep','$telefone','$email','$estado_civil','$altura','$cor','$nivel','$data_hora','$conhecimento','$experiencia','$nivel_conhecimento','$classe_social','$signo','$experience_text')";
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }
    
    // Fechando a conexão
    $conn->close();
    ?>
</body>
</html>