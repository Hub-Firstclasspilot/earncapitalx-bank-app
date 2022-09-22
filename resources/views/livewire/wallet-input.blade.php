<div>
    <form action="{{ $route }}" method="POST" wire:submit.prevent='handleSubmit'>
        @csrf
        <div class="input-group">
            <input type="text" name="{{ $value."_wallet" }}" value="{{ $value }}" class="form-control form-control-sm">
            <div class="input-group-append">
                <button class="btn btn-primary btn-sm " type="submit" name="dash">update</button>
            </div>
        </div>
    </form>
</div>
