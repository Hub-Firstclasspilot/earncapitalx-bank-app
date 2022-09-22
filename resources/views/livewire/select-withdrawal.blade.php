<div>
    <div class="form-group">
        <label for="">Select user: </label>
        <select name="id" id="" class="form-control" wire:model='user'>
            @forelse ($users as $user)
            <option value="{{ $user->id }}">{{ $user->username }}</option>
            @empty
            <option value="">You have no users yet</option>
            @endforelse
        </select>
    </div>

    <div class="form-group">
        <label for="withdrawal">Select Cashout</label>
        <select name="withdrawal" id="withdrawal" class="form-control">
            @forelse ($withdrawals as $withdrawal)
            <option value="{{ $withdrawal->id }}">Type: {{ $withdrawal->type }}; Amount: {{ $withdrawal->amount }}; Date: {{ date('jS M, Y', strtotime($withdrawal->date_requested)) }}</option>
            @empty
            <option value="">This user has not made any cashouts</option>
            @endforelse
        </select>
    </div>
</div>
