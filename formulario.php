<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="interfaceForm.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Recebimento de dados</title>
</head>

<body>
    <form method="POST" action="curriculo.php" enctype="multipart/form-data" id="form">
        <fieldset>
            <legend>Dados para curriculo:</legend>
            <section id="dadosPessoais">
                <!--Dados Pessoais-->
                <h3>Dados pessoais:</h3>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="array1[nome]" id="floatingInputGroup1" placeholder="Nome completo">
                        <label for="floatingInputGroup1">Nome completo</label>
                        </div>

                    <div class="form-floating">
                        <input class="form-control" id="data" name="array1[data]" type="date" required>
                        <label for="data">Data de nascimento</label>
                        </div>

                    <div class="form-floating">
                        <input class="form-control" id="nation" name="array1[nation]" type="text" placeholder="Nacionalidade" required>
                        <label for="nation">Nacionalidade</label>
                        </div>
                    
                        <label for="Estado_Civil">Estado Civil:</label>                     
                <select class="form-select" id="listEstado_Civil" name="array1[estado_civil]">
                    <option value="Solteiro">Solteiro</option>
                    <option value="Uniao Estavel">União Estável</option>
                    <option value="Casado">Casado</option>
                    <option value="Divorciado">Divorciado</option>
                    <option value="Viuvo">Viúvo</option>
                  
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label"></label>
                        <label for="floatingInputGroup1">Foto</label>
                        
                        <input class="form-control" type="file" name="foto" id="formFileMultiple" >
                        </div>
                                    
            </section>

            <section id="endereco" class="container">
                <!-- Endereço -->
                <h3>Endereço:</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="rua" name="array1[rua]" type="text" placeholder=" " required>
                            <label for="rua">Rua</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="num" name="array1[num]" type="number" placeholder=" " required>
                            <label for="num">Número</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="com" name="array1[com]" type="text" placeholder=" ">
                            <label for="com">Complemento (Opcional)</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="bairro" name="array1[bairro]" type="text" placeholder=" " required>
                            <label for="bairro">Bairro</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="muni" name="array1[muni]" type="text" placeholder=" " required>
                            <label for="muni">Município</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <select id="listEndereco" name="array1[estado]" class="form-select">
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BH">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Destrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                            <label for="listEndereco">Estado</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="tel" name="array1[tel]" type="tel" maxlength="11" placeholder=" " required>
                            <label for="tel">Telefone</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" id="email" name="array1[email]" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" type="email" placeholder=" " required>
                            <label for="email">Email</label>
                        </div>
                    </div>
                </div>
            </section>

            <section id="objetivo">
                <!--Objetivo-->
                <h3>Objetivo:</h3>
                <div class="form-floating">
                    <textarea class="form-control" name="array1[objetivo]" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Seus Objetivos:</label>
                </div>
            </section>

            <section id="formacaoEscolar">
                <!--Formação Escolar-->
                <h3>Formação Escolar:</h3>
                <select class="form-select" id="listescola" name="array2[escolaridade]">
                    <option value="Ensino Medio">Ensino Médio</option>
                    <option value="Ensino Fundamental">Ensino Fundamental</option>
                    <option value="Mestrado">Mestrado</option>
                    <option value="Superior">Superior</option>
                    <option value="Outro">Outro...</option>
                </select>
                <label for="curso">Curso:</label>
                <input class="form-control" id="curso" name="array2[curso]" type="text" placeholder="insira seu curso." required></input>

                <label for="instituicao">Instituição De Ensino:</label>
                <input class="form-control" id="instituicao" name="array2[instituicao]" type="text" placeholder="insira a instituição." required></input>

                <label for="conclusao">Ano de Conclusao:</label>
                <input class="form-control" id="conclusao" name="array2[conclusao]" type="number" placeholder="insira seu ano de conclusão." required></input>
            </section>

            <section id="experienciaProfissional">
                <!--Experiencia Profissional-->
                <h3>Experiência Profissional:</h3>
                <label for="entrada">Período de Entrada:</label>
                <input class="form-control" id="entrada" name="array3[entrada]" type="number" placeholder="insira seu período de entrada." required></input>

                <label for="saida">Período de Saída:</label>
                <input class="form-control" id="saida" name="array3[saida]" type="number" placeholder="insira seu período de saida." required></input>

                <label for="funcao">Cargo ou Função:</label>
                <input class="form-control" id="funcao" name="array3[funcao]" type="text" placeholder="insira cargo ou função." required></input>

                <label for="setor">Setor ou Local:</label>
                <input class="form-control" id="setor" name="array3[setor]" type="text" placeholder="insira setor ou cargo." required></input>

                <label for="ativ">Atividade Exercida:</label>
                <input class="form-control" id="ativ" name="array3[ativ]" type="text" placeholder="insira atividade exercida." required></input>
            </section>

            <section id="atividadesExtra">
                <!--Atividades Extracurriculares:-->
                <h3>Atividades Extracurriculares:</h3>
                <label for="ativ2">Atividade:</label>
                <input class="form-control" id="ativ2" name="array4[extra]" type="text" placeholder="insira atividade." required></input>

                <label for="ins">Instituição:</label>
                <input class="form-control" id="ins" name="array4[ins]" type="text" placeholder="insira a instituição." required></input>
            </section>

            <section id="idiomas">
                <!--Idiomas-->
                <h3>Idiomas:</h3>
                
                <label for="campoCurso">Lingua:</label>                     
                <select class="form-select" name="array5[lingua]" id="listCurso">
                    <option value="">Nenhum</option>
                    <option value="Inglês">Inglês</option>
                    <option value="Espanhol">Espanhol</option>
                    <option value="Mandarim">Mandarim</option>
                    <option value="Hindi">Hindi</option>
                    <option value="Árabe">Árabe</option>
                    <option value="Bengali">Bengali</option>
                    <option value="Português">Português</option>
                    <option value="Russo">Russo</option>
                    <option value="Japonês">Japonês</option>
                    <option value="Francês">Francês</option>
                    <option value="Alemão">Alemão</option>
                    <option value="Coreano">Coreano</option>
                    <option value="Turco">Turco</option>
                    <option value="Vietnamita">Vietnamita</option>
                    <option value="Italiano">Italiano</option>
                </select>
                
                <label for="nivel">Nivel:</label>
                <select class="form-select" name="array5[nivel]" id="nivel">
                    <option value="">Nenhum</option>
                    <option value="Basico">Basico</option>
                    <option value="Intermediário">Intermediário</option>
                    <option value="Avançado">Avançado</option>
                    <option value="Fluente">Fluente</option>
                </select>

                <label for="ins2">Instituição:</label>
                <input class="form-control" id="ins2" name="array5[ins2]" type="text" placeholder="insira a instituição."></input>
            </section>

            <!--Botoes para envio e deletar os dados-->
            <div class="wrapper">
                <button id="bt1" class="button" type="submit" name="submitButton"><span>Enviar</span></button>
                <button id="bt2" class="button" type="reset"><span>Limpar</span></button>
            </div>
        </fieldset>
    </form>
    <!--BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>