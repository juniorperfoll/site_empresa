<div class="row">
  <div class="col-md-12">
      <?php
        include_once 'conectar.php';
        $sqlConsulta = "SELECT * FROM produtos ORDER BY nome";
        $stmt = $conn->prepare($sqlConsulta);
        $stmt->execute();
        //pegar o resultado da consulta e gerar um array
        $resultadoConsulta = $stmt->fetchAll();
        echo "<div class='row'>";
          foreach ($resultadoConsulta as $dados) {
            $nome = $dados["nome"];
            $nome = $dados["nome"];
            $foto = $dados["foto"];
            $preco = number_format($dados["preco_venda"],2,",",".");
            $modelo = $dados["modelo"];
            echo "<div class='col-md-4'>";
                echo "<h2 class='text-center'>$nome</h2>";
                echo "<img src='../sistema_empresa/fotos/$foto' class='img-thumbnail'>";
                echo "<h1 class='text-center'>R$ $preco</h1>";
                echo "<p class='text-center'>Modelo: $modelo</p>";
            echo "</div>";
          }
        echo "</div>";
      ?>
  </div>
</div>
