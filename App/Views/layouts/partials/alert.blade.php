
@if(isset($_SESSION["msg"]) && isset($_SESSION["type"]))
    <div class="{{'alert alert-'.$_SESSION["type"]}} mb-5" role="alert">
        {{$_SESSION["msg"]}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif