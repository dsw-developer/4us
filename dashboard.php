


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Adm 4us</title>

    <!--ICON-->


    <!--BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!--MY CSS-->
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/boardCol.css">

    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f9f9f9;
            color: #333;
        }

        header {
            background: #0078d7;
            padding: 15px 20px;
        }

        header nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        header nav a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s;
        }

        header nav a:hover {
            color: #ffeb3b;
        }

        #home {
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(135deg, #0078d7, #00c6ff);
            color: white;
            clip-path: polygon(0 0, 100% 0, 100% 80%, 0 100%);
        }

        #home h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        #home button {
            background: #ff6f61;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 25px;
            cursor: pointer;
            transition: transform 0.3s, background 0.3s;
        }

        #home button:hover {
            transform: translateY(-5px);
            background: #ff3e30;
        }

        section {
            padding: 40px 20px;
            text-align: center;
        }

        #products .products-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .product-card {
            background: #fff;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .product-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .product-card p {
            margin-bottom: 10px;
            font-size: 0.9rem;
            color: #555;
        }

        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 20px;
        }

        /* Estilo do botão WhatsApp fixo */
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background-color: #25d366;
            border-radius: 50%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            cursor: pointer;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .whatsapp-button:hover {
            transform: scale(1.1);
            background-color: #1da955;
        }

        .whatsapp-button img {
            width: 30px;
            height: 30px;
        }

        .btn-comprar {
            display: inline-block;
            background-color: #25D366; /* Cor característica do WhatsApp */
            color: white;
            padding: 15px 30px; /* Maior espaço interno */
            text-align: center;
            text-decoration: none;
            font-size: 18px; /* Fonte maior */
            font-weight: bold;
            border-radius: 50px; /* Bordas arredondadas */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra para destaque */
            transition: all 0.3s ease-in-out;
        }

        .btn-comprar:hover {
            background-color: #1EBE57; /* Cor mais escura ao passar o mouse */
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2); /* Aumentar a sombra */
            transform: translateY(-3px); /* Elevação ao passar o mouse */
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #0078d7;
            padding: 15px 20px;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            height: 50px; /* Ajuste o tamanho do logotipo conforme necessário */
            margin-right: 20px; /* Espaço entre o logotipo e o menu */
        }

        header nav ul {
            list-style: none;
            display: flex;
            gap: 15px;
        }

        header nav a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s;
        }

        header nav a:hover {
            color: #ffeb3b;
        }

        #products .products-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* Cria 4 colunas */
            gap: 20px;
            margin-top: 20px;
            padding: 0 10px;
            justify-items: center; /* Centraliza os itens horizontalmente */
            align-items: center; /* Centraliza os itens verticalmente */
            text-align: center; /* Centraliza o texto dentro de cada card */
        }

        .product-card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            max-width: 250px; /* Definindo uma largura máxima para os cards */
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
            object-fit: cover;
        }

        .product-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #333;
        }

        .product-card p {
            margin-bottom: 15px;
            font-size: 0.9rem;
            color: #555;
        }

        .product-card .btn-comprar {
            align-self: flex-start;
        }

        .products-container .product-card:nth-child(odd) {
            order: 1;
        }

        .products-container .product-card:nth-child(even) {
            order: 2;
        }

        /* Estilos gerais para o formulário */
        .product-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-form .form-group {
            margin-bottom: 15px;
        }

        .product-form .form-group label {
            font-size: 1rem;
            color: #333;
        }

        .product-form .form-group input,
        .product-form .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border 0.3s ease;
        }

        .product-form .form-group input:focus,
        .product-form .form-group select:focus {
            border-color: #0078d7;
        }

        .product-form button {
            width: 100%;
            padding: 12px;
            font-size: 1.1rem;
            color: white;
            background-color: #0078d7;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .product-form button:hover {
            background-color: #005fa3;
        }

        /* Adiciona algum espaçamento extra nas laterais */
        .container {
            padding-left: 20px;
            padding-right: 20px;
        }

    </style>
<body>



   <div class="col-sm-6 col-md-3">
  <div class="d-flex flex-column p-4 bg-white shadow-lg rounded-4" style="width: 290px; min-height: 50vh;">
    
    <!-- Cabeçalho -->
    <div class="text-center mb-4">
      <h4 class="fw-bold text-orange">Adm 4US</h4>
      <small class="text-muted">Cadastrar Produtos</small>
    </div>

    <!-- Botões Sexo -->
    <div class="btn-group mb-4" role="group" style="border-radius: 12px; overflow: hidden;">
      <button class="btn btn-outline-primary" onclick="window.location.href='dashboard.php'">
        👨 Homem
      </button>
      <button class="btn btn-outline-danger" onclick="window.location.href='dashboardMP.php'">
        👩 Mulher
      </button>
    </div>

   <!-- Navegação Lateral 4us -->
<ul class="nav flex-column">
  <li class="nav-item mb-2">
    <a href="dashboard.php" class="nav-link sidebar-link d-flex align-items-center">
      <i class="bi bi-droplet-fill me-3 text-primary fs-5"></i>
      <span>Perfumes e Cosméticos</span>
    </a>
  </li>

  <li class="nav-item mb-2">
    <a href="dashboardR.php" class="nav-link sidebar-link d-flex align-items-center">
      <i class="bi bi-shirt me-3 text-success fs-5"></i>
      <span>Vestuários</span>
    </a>
  </li>

  <li class="nav-item mb-2">
    <a href="dashboardT.php" class="nav-link sidebar-link d-flex align-items-center">
      <i class="bi bi-bag-heart-fill me-3 text-warning fs-5"></i>
      <span>Calçados</span>
    </a>
  </li>

  <li class="nav-item mb-2">
    <a href="dashboardA.php" class="nav-link sidebar-link d-flex align-items-center">
      <i class="bi bi-watch me-3 text-danger fs-5"></i>
      <span>Acessórios</span>
    </a>
  </li>
</ul>
<style>
  .sidebar-link {
    padding: 12px 15px;
    border-radius: 12px;
    font-weight: 500;
    color: #333;
    transition: all 0.2s ease-in-out;
  }

  .sidebar-link:hover {
    background-color: #f1f1f1;
    color: #0d6efd;
    transform: translateX(5px);
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
  }

  .nav-link span {
    font-size: 16px;
  }
</style>






                <?php


                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    include('db_connect.php');

                    // Receber dados do formulário
                    $nome = $_POST['nome'];
                    $descricao = $_POST['descricao'];
                    $preco = $_POST['preco'];
                    $video = $_POST['video'];
                    $estoque = $_POST['estoque'];

                    // Processar a imagem
                    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
                        $diretorio_upload = 'perfume/imagem'; // Diretório onde as imagens serão salvas
                        $nome_arquivo = basename($_FILES['imagem']['name']);
                        $caminho_arquivo = $diretorio_upload . $nome_arquivo;

                        // Verificar se o diretório existe, se não, criar
                        if (!is_dir($diretorio_upload)) {
                            mkdir($diretorio_upload, 0777, true);
                        }

                        // Mover o arquivo enviado para o diretório especificado
                        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho_arquivo)) {
                            // Sucesso no upload
                        } else {
                            echo "Erro ao fazer upload da imagem.";
                            exit;
                        }
                    } else {
                        echo "Erro no upload da imagem.";
                        exit;
                    }

                    // Inserir dados no banco de dados
                    $sql = "INSERT INTO produtos (nome, descricao, preco, imagem, video, estoque)
                            VALUES ('$nome', '$descricao', '$preco', '$caminho_arquivo', '$video', '$estoque')";

                    if ($conn->query($sql) === TRUE) {
                        echo "Produto inserido com sucesso!";
                    } else {
                        echo "Erro: " . $sql . "<br>" . $conn->error;
                    }

                    $conn->close();
                }

                ?>





                </div>
                </section>

                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">

                    <li><a class="dropdown-item" href="sair.php">Sair</a></li>
                </ul>
                </div>
            </div><!--END SIDEBAR-->

        </div><!--FIM COLUNA1-->

        <!--COLUNA2-->




    <!--BOOTSTRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</body>

</html>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Responsivo</title>

    <!-- Link para o Bootstrap (opcional para um layout mais rápido) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Resetando margens e preenchimentos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilo base do corpo */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Cabeçalho */
        header {
            background-color: #0078d7;
            color: white;
            text-align: center;
            padding: 20px;
        }

        /* Estilo da navegação */
        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        /* Conteúdo principal */
        .main-content {
            padding: 30px;
            text-align: center;
        }

        .main-content h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .main-content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        /* Media query para telas maiores (desktops) */
        @media (min-width: 768px) {
            .main-content {
                text-align: left;
                margin-left: 50px;
                margin-right: 50px;
            }

            nav ul {
                justify-content: flex-start;
            }
        }

        /* Media query para telas pequenas (móveis) */
        @media (max-width: 767px) {
            header {
                text-align: center;
                padding: 15px;
            }

            nav ul {
                flex-direction: column;
                padding: 10px;
                align-items: center;
            }

            .main-content {
                margin-top: 20px;
            }

            .main-content h1 {
                font-size: 1.8rem;
            }

            .main-content p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>


  <form method="POST" action="add_product.php" enctype="multipart/form-data" class="product-form">
    <div class="form-group">
        <label for="nome">Nome do Perfume & Cosméticos</label>
        <input type="text" name="nome" id="nome" placeholder="Perfume & Cosméticos " required>
    </div>

    <div class="form-group">
        <label for="descricao">Descrição do Perfume & Cosméticos</label>
        <textarea name="descricao" id="descricao" placeholder="Descrição dos Perfume & Cosméticos" rows="4" required></textarea>
    </div>

    <div class="form-group">
        <label for="preco">Preço (Kz)</label>
        <input type="number" name="preco" id="preco" placeholder="kz" required step="0.01" min="0">
    </div>

    <div class="form-group">
        <label for="imagem">Imagem do Produto</label>
        <input type="file" name="imagem" id="imagem" accept="image/*" required>
        <small>Selecione uma imagem com boa qualidade (JPG, PNG, etc.)</small>
    </div>

    <button type="submit" class="btn-submit">Adicionar Produto de Homem</button>
</form>

<!-- CSS opcional para melhorar o visual -->
<style>
    .product-form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 4px;
        border: 1px solid #ddd;
    }

    .form-group input[type="file"] {
        padding: 5px;
    }

    .form-group textarea {
        resize: vertical;
    }

    .form-group small {
        font-size: 12px;
        color: #888;
    }

    .btn-submit {
        display: inline-block;
        padding: 12px 25px;
        font-size: 16px;
        color: white;
        background-color: #0078d7;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        text-align: center;
    }

    .btn-submit:hover {
        background-color: #005fa3;
    }

    /* Media queries para telas pequenas */
    @media (max-width: 600px) {
        .product-form {
            padding: 15px;
        }

        .btn-submit {
            font-size: 18px;
        }
    }

    .product-card img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    margin-bottom: 15px;
}

</style>


<section id="products">
  <h2>Nossos Produtos</h2>
  <div class="container">
      <div class="row">
          <?php
          include('db_connect.php'); // Certifique-se de que o arquivo db_connect.php está configurado corretamente.
          $sql = "SELECT * FROM produtos";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo "<div class='col-12 col-sm-6 col-md-3 product-card'>";
                  echo "<img src='" . htmlspecialchars($row['imagem']) . "' alt='" . htmlspecialchars($row['nome']) . "' class='img-fluid'>";
                  echo "<h3>" . htmlspecialchars($row['nome']) . "</h3>";
                  echo "<p>" . htmlspecialchars($row['descricao']) . "</p>";
                  echo "<p>Kz " . htmlspecialchars($row['preco']) . "</p>";
                  // Botão de Eliminar
                  echo "<form method='POST' action='delete_product.php' style='display: inline;'>";
                  echo "<input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>";
                  echo "<button type='submit' class='btn-comprar' style='background: red; color: white;'>Eliminar</button>";
                  echo "</form>";
                  echo "</div>";
              }
          } else {
              echo "<p>Nenhum produto encontrado.</p>";
          }
          $conn->close();
          ?>
      </div>
  </div>
</section>



</body>
</html>



