<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4US</title>
    <link rel="shortcut icon" href="perfume/12.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: #c19a6b !important; /* Bege */
    color: #333;
    overflow-x: hidden;
}

      header {
    position: relative;
    padding: 20px 20px 60px;
    background: #c19a6b !important; /* Bege carregado */
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    overflow: hidden;
}



        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo-container img {
            width: 130px;
            height: 130px;
            object-fit: contain;
        }

        .header-content {
            position: relative;
            z-index: 2;
            text-align: center;
            width: 100%;
        }

        .header-title {
            font-size: 2.5rem; /* Ajustado para telas grandes */
        }

        .header-subtitle {
            font-size: 1.5rem;
        }

        /* Menu Hamburguer - Isometrico 3D */
        .hamburger-menu {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
            z-index: 100;
        }

        .hamburger-menu div {
            width: 30px;
            height: 5px;
            background: linear-gradient(45deg, #0e4429, #1e824c);
            margin: 6px 0;
            border-radius: 3px;
            transition: all 0.3s ease;
        }

        .hamburger-menu.open div:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .hamburger-menu.open div:nth-child(2) {
            opacity: 0;
        }

        .hamburger-menu.open div:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -5px);
        }

        /* Menu Vertical */
        .nav-menu {
            position: fixed;
            top: 0;
            left: -250px;
            width: 250px;
            height: 100%;
            background: #c19a6b !important; /* Bege */
            color: white;
            transition: left 0.3s ease;
            z-index: 90;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .nav-menu.open {
            left: 0;
        }

    .nav-menu a {
    font-size: 2rem;
    color: transparent; /* Torna o texto transparente */
    background: linear-gradient(45deg, #0e4429, #1e824c); /* Gradiente */
    background-clip: text; /* Aplica o gradiente ao texto */
    -webkit-background-clip: text; /* Necessário para compatibilidade com WebKit */
    text-decoration: none;
    margin: 20px 0;
    transition: transform 0.10s ease;
    transform: rotateX(30deg);
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Adiciona sombra ao texto para maior contraste */
}





        .nav-menu a:hover {
            transform: rotateX(10deg);
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .header-title {
                font-size: 2rem;
            }
            .header-subtitle {
                font-size: 1rem;
            }
        }
  /* Configurações Gerais */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #1e3a8a, #0ea5e9);
            color: #333;
            overflow-x: hidden;
        }

        /* Estilo do Header */
        header {
            position: relative;
            padding: 20px 20px 60px;
            background: linear-gradient(135deg, #0f172a, #1e40af);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo-container img {
            width: 150px;
            height: 150px;
            object-fit: contain;
        }

        .header-content {
            position: relative;
            z-index: 2;
            text-align: center;
            width: 100%;
        }

        .header-title {
            font-size: 2.5rem; /* Ajustado para telas grandes */
        }

        .header-subtitle {
            font-size: 1.5rem;
        }

        /* Configuração da Seção de Produtos */
        .products-section {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Responsividade */
            gap: 20px;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .product-card {
            position: relative;
            width: 100%;
            max-width: 250px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            text-align: center;
            transform: rotateX(0deg) rotateY(-30deg);
            transform-style: preserve-3d;
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }

        .product-card:hover {
            transform: rotateX(20deg)translateZ(20px);
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.3);
        }

        .product-img {
            width: 100%;
            height: 330px;
            object-fit: cover;
            border-radius: 15px;
        }

      .product-name {
    font-size: 1rem;
    font-weight: bold;
    color: transparent; /* Torna o texto transparente */
    background: linear-gradient(45deg, #0e4429, #1e824c); /* Gradiente */
    background-clip: text; /* Aplica o gradiente ao texto */
    -webkit-background-clip: text; /* Necessário para navegadores WebKit */
}


        .product-description {
    font-size: 0.875rem;
    color: transparent; /* Torna a cor do texto transparente */
    background: linear-gradient(45deg, #0e4429, #1e824c); /* Gradiente */
    background-clip: text; /* Aplica o gradiente ao texto */
    -webkit-background-clip: text; /* Necessário para compatibilidade com navegadores WebKit */
}


        .product-price {
        font-size: 1.5rem; /* Tamanho maior para destaque */
        font-weight: bold;
        color: #25D366; /* Verde WhatsApp */
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6); /* Sombra escura para contraste */
        background: linear-gradient(45deg, #0e4429, #1e824c); /* Gradiente verde escuro */
        padding: 8px 12px;
        border-radius: 10px; /* Bordas arredondadas */
        display: inline-block;
        margin-top: 10px;
        border: 2px solid #128C7E; /* Borda verde escura do WhatsApp */
    }


.comprar-btn {
    font-size: 1.2rem; /* Tamanho maior para destaque */
        font-weight: bold;
        color: #25D366; /* Verde WhatsApp */
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6); /* Sombra escura para contraste */
        background: linear-gradient(45deg, #0e4429, #1e824c); /* Gradiente verde escuro */
        padding: 8px 12px;
        border-radius: 10px; /* Bordas arredondadas */
        display: inline-block;
        margin-top: 10px;
        border: 2px solid #128C7E; /* Borda verde escura do WhatsApp */
}

.comprar-btn:hover {
    border-color: #1e824c; /* Pode alterar a cor da borda no hover, se necessário */
}



        .no-products {
            grid-column: span 4;
            text-align: center;
            color: #ddd;
            font-size: 1.2rem;
        }

        /* Botão do WhatsApp */
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background-color: #25d366;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            z-index: 1000;
        }

        .whatsapp-button:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.4);
        }

        .whatsapp-button img {
            width: 35px;
            height: 35px;
        }

        /* Header estilizado */
  header {
      position: relative;
      padding: 20px 20px 80px;
      background: linear-gradient(135deg, #0f172a, #1e40af);
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
      overflow: hidden;
  }

  /* Logo */
  .logo-container img {
      width: 100px;
      height: 100px;
      object-fit: contain;
      filter: drop-shadow(3px 3px 10px rgba(255, 255, 255, 0.5)); /* Efeito de brilho */
  }

  /* Conteúdo do Header */
  .header-content {
      text-align: center;
      flex: 1;
  }

  /* Efeito dinâmico no título */
  .header-title {
      font-size: 2.8rem;
      font-weight: bold;
      background: linear-gradient(90deg, #25D366, #0ea5e9, #FFD700);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
      animation: neon-glow 2s infinite alternate;
  }

  /* Efeito de brilho no título */
  @keyframes neon-glow {
      from {
          text-shadow: 0 0 10px rgba(255, 255, 255, 0.8), 0 0 20px #25D366;
      }
      to {
          text-shadow: 0 0 15px rgba(255, 255, 255, 1), 0 0 25px #0ea5e9;
      }
  }

  /* Subtítulo elegante */
  .header-subtitle {
      font-size: 1.2rem;
      font-style: italic;
      color: rgba(255, 255, 255, 0.8);
      margin-top: 5px;
      text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
  }

  /* Responsividade */
  @media (max-width: 768px) {
      .header-title {
          font-size: 2rem;
      }
      .header-subtitle {
          font-size: 1rem;
      }
  }

            .product-card {
                max-width: 90%;
                padding: 12px;
            }

            .product-name {
                font-size: 1rem;
            }

            .product-price {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            .header-title {
                font-size: 1.5rem;
            }

            .header-subtitle {
                font-size: 1rem;
            }

            .product-card {
                max-width: 95%;
                padding: 10px;
            }

            .product-name {
                font-size: 0.9rem;
            }

            .product-price {
                font-size: 0.8rem;
            }
        }
	 /* Submenu */
        .submenu {
            display: none;
            flex-direction: column;
            padding-left: 20px;
        }

        .submenu a {
            font-size: 1.5rem;
            margin: 10px 0;
        }

        .nav-menu a:hover + .submenu, .submenu:hover {
            display: flex;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .header-title {
                font-size: 2rem;
            }
            .header-subtitle {
                font-size: 1rem;
            }
        }

    </style>
</head>
<body>

    <header>
        <!-- Logotipo -->
        <div class="logo-container">
            <img src="perfume/12.png" alt="Logo da Empresa">
        </div>


        <div class="hamburger-menu" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </header>

    <!-- Menu de Navegação -->
    <div class="nav-menu" id="navMenu">
        <a href="#">Homem</a>
        <div class="submenu">
            <a href="index.php">Perfumes e Cosméticos</a>
            <a href="roupas.php">Vestuários</a>
	    <a href="tenis.php">Calçados</a>
	    <a href="acessorio.php">Acessórios</a>
        </div>

        <a href="#">Mulher</a>
        <div class="submenu">
            <a href="indexx.php">Perfumes e Cosméticos</a>
            <a href="roupasM.php">Vestuários</a>
	    <a href="tenisM.php">Calçados</a>
	    <a href="acessorioM.php">Acessórios</a>
        </div>
    </div>

         <main>
        <section id="products" class="products-section">
            <?php
            include('db_connect.php');

            $sql = "SELECT * FROM acessoriom";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Gerar a URL do WhatsApp com a mensagem
                    $whatsapp_message = "Olá, gostaria de comprar o produto: " . htmlspecialchars($row['name']) . "%0A";
                    $whatsapp_message .= "Preço: Kz " . htmlspecialchars($row['preco']) . "%0A";
                    $whatsapp_message .= "Imagem:https://4us.ct.ws/" . urlencode(htmlspecialchars($row['img'])) . "%0A";
                    $whatsapp_message .= "Descrição: " . urlencode(htmlspecialchars($row['descricao'])) . "%0A";
                    $whatsapp_url = "https://wa.me/244937707227?text=" . $whatsapp_message;

                    echo "<div class='product-card'>";
                    echo "<img src='" . htmlspecialchars($row['img']) . "' alt='" . htmlspecialchars($row['name']) . "' class='product-img'>";
                    echo "<h3 class='product-name'>" . htmlspecialchars($row['name']) . "</h3>";
                    echo "<p class='product-description'>" . htmlspecialchars($row['descricao']) . "</p>";
                    echo "<p class='product-price'>Kz " . number_format((float) $row['preco'], 2, ',', '.') . "</p>";
                    echo "<a href='" . $whatsapp_url . "' target='_blank' class='comprar-btn'>Comprar</a>";
                    echo "</div>";
                }
            } else {
                echo "<p class='no-products'>Nenhum produto encontrado.</p>";
            }

            $conn->close();
            ?>
        </section>

    </main>

    <!-- Botão do WhatsApp -->
    <a href="https://wa.me/244937707227" class="whatsapp-button" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </a>
    </main>

     <script>
        // Função para alternar o menu
        function toggleMenu() {
            document.querySelector(".hamburger-menu").classList.toggle("open");
            document.querySelector(".nav-menu").classList.toggle("open");
        }
    </script>

    <script>
        // Função para alternar o menu
        function toggleMenu() {
            document.querySelector(".hamburger-menu").classList.toggle("open");
            document.querySelector(".nav-menu").classList.toggle("open");
        }
    </script>

</body>
</html>
