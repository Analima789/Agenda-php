<?php 
    session_start();

    //nome e se escrever fim --> sessão destruida

    if(isset($_GET['nome'])&& $_GET['nome']!=''){
        
        if($_GET['nome']=='fim'){
            session_destroy();
        }
        else{
            $contato=array();
            $contato['nome'] = $_GET['nome'];
        

           //telefone de contato:

          if(isset($_GET['telefone']))
          {
            $contato['telefone'] = $_GET['telefone'];
          }
          else 
          {
            $contato['telefone']='';
          }

    //e-mail de contato:

    if(isset($_GET['email'])) {
        $contato['email']=$_GET['email'];
    }
    else{
        $contato['email']='';
    }

    //data de nascimento:

    if(isset($_GET['dnascimento'])) {
        $contato['dnascimento']=$_GET['dnascimento'];
    }
    else{
        $contato['dnascimento']='';
    }


    //favorito sim:

    if(isset($_GET['favoritos'])){
        $contato['favoritos']=$_GET['favoritos'];
    }
    else{
        $contato['favoritos']='';
    }


} //fim do if=='fim'
} // fim do if(isset($_GET['nome'])&& $_GET['nome']!='')


    //parte da session:

    $_SESSION['lista_contatos'][]=$contato;

    if(isset($_SESSION['lista_contatos'])) {
        $lista_contatos=$_SESSION['lista_contatos'];
    }

    else{
        $lista_contatos=array();
    }

    include "template.php";