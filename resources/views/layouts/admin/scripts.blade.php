<script src="{{ mix('js/vendor.global.js') }}"></script>
<script src="{{ asset('js/pamindo.js') }}"></script>
{!! Toastr::render() !!}

<script>
    function onElementHeightChange(elm, callback) {
        var lastHeight = elm.clientHeight, newHeight;
        (function run() {
            newHeight = elm.clientHeight;
            if (lastHeight != newHeight)
                callback();
            lastHeight = newHeight;

            if (elm.onElementHeightChangeTimer)
                clearTimeout(elm.onElementHeightChangeTimer);

            elm.onElementHeightChangeTimer = setTimeout(run, 200);
        })();
    };
</script>

@yield('scripts')
@stack('scripts')