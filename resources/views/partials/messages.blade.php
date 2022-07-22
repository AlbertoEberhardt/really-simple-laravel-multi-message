@if(session("messages") !== null)

    @php

        include_once public_path("/php/style_config.php");

    @endphp

    @if(isset($style))

        @switch($style)
            @case("bootstrap")

                {{-- Quando for igual a bootstrap, usar os estilos do bootstrap--}}

                {{-- Call the bootstrap styles --}}

                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

                @php

                    require_once public_path("/php/html_bootstrap_message_tags.php");

                @endphp

                @if($use_dismiss_button)

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

                @endif

            @break

            @case("semantic-ui")

                {{-- Quando for igual a semantic-ui, os os estilos da semantic-ui--}}

                {{-- Call the semantic-ui styles --}}

                <link rel="stylesheet" type="text/css" href="/css/semantic.min.css">

                @if($use_dismiss_button)
                        
                    <script src='/js/semantic_ui_close_buttom.js'></script>

                @endif

                @php

                    require_once public_path("/php/html_semantic_ui_message_tags.php");

                @endphp

            @break

            @default

                {{-- Quando for diferente usar o estilo padrão --}}
                
                {{-- When the value of $style if diferent of the above, use the default --}}

                <link rel='stylesheet' type='text/css' href='/css/default_message_style.css'>

                <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>

                @php

                    require_once public_path("/php/html_default_message_tags.php");

                @endphp

            @break

        @endswitch

    @else

        {{-- Se ocorrer algum erro e não estiver setado o $style, usar o estilo padrão --}}

        {{-- If the $style is not set, use the default style --}}

        <link rel='stylesheet' type='text/css' href='/css/default_message_style.css'>

        <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>

        @php

            $use_dismiss_button = true;

            require_once public_path("/php/html_default_message_tags.php");

        @endphp

    @endif

    @foreach (session("messages") as $msg)

        @if(!empty($msg["success"]))
            
            @php

                echo show_message($msg["success"], "success", $use_dismiss_button);

            @endphp

        @endif

        @if(!empty($msg["error"]))

            @php

                echo show_message($msg["error"],"error", $use_dismiss_button);

            @endphp

        @endif

        @if(!empty($msg["timed"]))

            {{-- Placeholder for now --}}

        @endif

        @if(!empty($msg["warning"]))

            @php

                echo show_message($msg["warning"], "warning", $use_dismiss_button);

            @endphp

        @endif

    @endforeach

    @php

        session() -> forget("messages");

    @endphp

@endif