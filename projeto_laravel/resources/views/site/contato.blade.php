@extends('site.layouts.basic')

@section('titulo', 'Contato')

@section('conteudo')

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Entre em contato conosco</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">
                    @component('site.layouts._components.form_contato', ['classe' => 'borda-preta'])
                        <p>Nossa equipe irá analisar sua mensagem e retornará o mais breve possível.</p>
                        <p>O prazo de SLA é de 48 horas.</p>
                    @endcomponent
                </div>
            </div>
        </div>

        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="{{ asset('img/social.png') }}">
                <img src="{{ asset('img/linkedin.png') }}">
                <img src="{{ asset('img/youtube.png') }}">
            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="{{ asset('img/map.png') }}">
            </div>
        </div>
    </body>
</html>

</html>
@endsection
