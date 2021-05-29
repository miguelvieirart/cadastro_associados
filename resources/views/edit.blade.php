<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Editar dados do Associado</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 py-4">
                    <p>
                        <a href="{{route('associados.index')}}"> ← Voltar </a>
                    </p>
                    <h1>Editar dados do Associado</h1>
                    <div class="row">
                        <form action="{{route('associados.update',['associado'=> $associado->id ])}}" method="post" class="col-12">
                            @csrf
                            @method('PUT')

                            <div class="form-group"><label for="nome">Nome</label>
                                <input type="text" class="form-control" name="nome" placeholder="Nome" id="nome" value="{{$associado->nome}}" required/>
                            </div>
                            <div class="form-group"><label for="telefone">Telefone</label>
                                <input type="text" class="form-control" name="telefone" placeholder="Telefone" id="telefone" value="{{$associado->telefone}}"/>
                            </div>
                            <div class="form-group"><label for="celular">Celular</label>
                                <input type="text" class="form-control" name="celular" placeholder="Celular" id="celular" value="{{$associado->celular}}"/>
                            </div>
                            <div class="form-group"><label for="profissao">Profissão</label>
                                <input type="text" class="form-control" name="profissao" placeholder="Profissão" id="profissao" value="{{$associado->profissao}}"/>
                            </div>
                            <div class="form-group"><label for="nit">NIT</label>
                                <input type="text" class="form-control" name="nit" placeholder="NIT" id="nit" value="{{$associado->nit}}"/>
                            </div>
                            <div class="form-group"><label for="cognome">Cognome</label>
                                <input type="text" class="form-control" name="cognome" placeholder="Cognome" id="cognome" value="{{$associado->cognome}}"/>
                            </div>
                            <div class="form-group"><label for="pis">PIS</label>
                                <input type="text" class="form-control" name="pis" placeholder="PIS" id="pis" value="{{$associado->pis}}"/>
                            </div>
                            <div class="form-group"><label for="cp">CP</label>
                                <input type="text" class="form-control" name="cp" placeholder="CP" id="cp" value="{{$associado->cp}}"/>
                            </div>
                            <div class="form-group"><label for="conjuge">Cônjuge</label>
                                <input type="text" class="form-control" name="conjuge" placeholder="Cônjuge" id="conjuge" value="{{$associado->conjuge}}"/>
                            </div>
                            <div class="form-group"><label for="nascimento">Data de Nascimento</label>
                                <input type="text" class="form-control" name="nascimento" placeholder="Data de Nascimento" id="nascimento" value="{{$associado->nascimento}}"/>
                            </div>
                            <div class="form-group">
                                <h4>Gênero</h4>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="masc" name="genero" value="m" {{ $associado->genero == 'm' ? 'checked' : '' }}>
                                    <label for="masc">Masculino</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="fem" name="genero" value="f" {{ $associado->genero == 'f' ? 'checked' : '' }}>
                                    <label for="fem">Feminino</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="outro" name="genero" value="o" {{!in_array($associado->genero,['m','f']) ? 'checked' : ''}}>
                                    <label for="outro">Outro</label> 
                                </div>
                            </div>
                            <div class="form-group"><label for="pai">Pai</label>
                                <input type="text" class="form-control" name="pai" placeholder="Pai" id="pai" value="{{$associado->pai}}"/>
                            </div>
                            <div class="form-group"><label for="mae">Mãe</label>
                                <input type="text" class="form-control" name="mae" placeholder="Mãe" id="mae" value="{{$associado->mae}}"/>
                            </div>
                            <div class="form-group"><label for="escolaridade">Escolaridade</label>
                                <input type="text" class="form-control" name="escolaridade" placeholder="Escolaridade" id="escolaridade" value="{{$associado->escolaridade}}"/>
                            </div>
                            <div class="form-group"><label for="rgp">RGP</label>
                                <input type="text" class="form-control" name="rgp" placeholder="RGP" id="rgp" value="{{$associado->rgp}}"/>
                            </div>
                            <div class="form-group"><label for="naturalidade">Naturalidade</label>
                                <input type="text" class="form-control" name="naturalidade" placeholder="Naturalidade" id="naturalidade" value="{{$associado->naturalidade}}"/>
                            </div>
                            <div class="form-group"><label for="nacionalidade">Nacionalidade</label>
                                <input type="text" class="form-control" name="nacionalidade" placeholder="Nacionalidade" id="nacionalidade" value="{{$associado->nacionalidade}}"/>
                            </div>
                            <div class="form-group"><label for="estado_civil">Estado Cívil</label>
                                <select name="estado_civil" id="estado_civil" class="form-control">
                                    <option value="0" {{$associado->estado_civil == 0 ? 'selected' : ''}}>Solteiro(a)</option>
                                    <option value="1" {{$associado->estado_civil == 1 ? 'selected' : ''}}>Casado(a)</option>
                                    <option value="2" {{$associado->estado_civil == 2 ? 'selected' : ''}}>Viúvo(a)</option>
                                    <option value="3" {{ !in_array($associado->estado_civil,[0,1,2]) ? 'selected' : ''}}>Outros</option>
                                </select>
                            </div>
                            <div class="form-group"><label for="identidade">Cédula de Identidade</label>
                                <input type="text" class="form-control" name="identidade" placeholder="Cédula de Identidade" id="identidade" value="{{$associado->identidade}}" required/>
                            </div>
                            <div class="form-group"><label for="expedidor">Orgão Expedidor da Identidade</label>
                                <input type="text" class="form-control" name="expedidor" placeholder="Orgão Expedidor da Identidade" id="expedidor" value="{{$associado->expedidor}}"/>
                            </div>
                            <div class="form-group"><label for="cpf">CPF</label>
                                <input type="text" class="form-control" name="cpf" placeholder="CPF" id="cpf" value="{{$associado->cpf}}"/>
                            </div>
                            <div class="form-group"><label for="titulo_eleitor">Titulo de Eleitor</label>
                                <input type="text" class="form-control" name="titulo_eleitor" placeholder="Titulo de Eleitor" id="titulo_eleitor" value="{{$associado->titulo_eleitor}}"/>
                            </div>
                            <div class="form-group"><label for="zona_eleitor">Zona Eleitoral</label>
                                <input type="text" class="form-control" name="zona_eleitor" placeholder="Zona Eleitoral" id="zona_eleitor" value="{{$associado->zona_eleitor}}"/>
                            </div>
                            <div class="form-group"><label for="secao_eleitor">Seção Eleitoral</label>
                                <input type="text" class="form-control" name="secao_eleitor" placeholder="Seção Eleitoral" id="secao_eleitor" value="{{$associado->secao_eleitor}}"/>
                            </div>
                            <div class="form-group"><label for="categoria_socio">Categoria do Sócio</label>
                                <input type="text" class="form-control" name="categoria_socio" placeholder="Categoria do Sócio" id="categoria_socio" value="{{$associado->categoria_socio}}"/>
                            </div>
                            <div class="form-group"><label for="data_inscricao">Data de Inscrição</label>
                                <input type="text" class="form-control" name="data_inscricao" placeholder="Data de Inscrição" id="data_inscricao" value="{{$associado->data_inscricao}}"/>
                            </div>
                            <div class="form-group"><label for="data_matricula">Data de Matrícula</label>
                                <input type="text" class="form-control" name="data_matricula" placeholder="Data de Matrícula" id="data_matricula" value="{{$associado->data_matricula}}"/>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Enviar</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
