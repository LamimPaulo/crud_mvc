<h3>Editar</h3> 


<form method="post">
    Nome:<br>
    <input type="text" name="nome" value="<?php echo $user['nome'];?>"> <br><br>

    Email:<br>
    <input type="email" name="email" value="<?php echo $user['email'] ?>"><br><br>

    <input type="submit" value="Salvar">

</form>