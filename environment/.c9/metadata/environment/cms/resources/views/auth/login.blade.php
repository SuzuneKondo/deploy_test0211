{"filter":false,"title":"login.blade.php","tooltip":"/cms/resources/views/auth/login.blade.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":46,"column":17},"end":{"row":47,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":47,"column":0},"end":{"row":48,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":48,"column":0},"end":{"row":61,"column":6},"action":"insert","lines":["<!-- 以下を追加 -->","@if (Route::has('login'))","    <div class=\"hidden fixed top-0 right-0 px-6 py-4 sm:block\">","        @auth","            <a href=\"{{ url('/dashboard') }}\" class=\"text-sm text-gray-700 dark:text-gray-500 underline\">Dashboard</a>","        @else","            <a href=\"{{ route('login') }}\" class=\"text-sm text-gray-700 dark:text-gray-500 underline\">Log in</a>","","            @if (Route::has('register'))","                <a href=\"{{ route('register') }}\" class=\"ml-4 text-sm text-gray-700 dark:text-gray-500 underline\">Register</a>","            @endif","        @endauth","    </div>","@endif"],"id":3}]]},"ace":{"folds":[],"scrolltop":567,"scrollleft":0,"selection":{"start":{"row":43,"column":31},"end":{"row":43,"column":31},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":34,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1676037799909,"hash":"7df704b10980341b909c99c86acafc35b6fbba72"}