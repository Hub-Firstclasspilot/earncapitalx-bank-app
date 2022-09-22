<div>
    <div class="form-group">
        <label for="">Select User:</label>
        <select class="form-control" id="" name="id" wire:model='user'>
        @forelse ($users as $user)
        <option value="{{ $user->id }}">{{ $user->username }}</option>
        @empty
        <option>You do not have any users yet</option>
        @endforelse
        </select>
    </div>

    <div class="form-group">
        <select name="investment" class="form-control">
            @forelse ($investments as $investment)
                <option value="{{ $investment->id }}">Plan: {{ $investment->plan }}</option>
            @empty
                <option value="">Select a user to continue</option>
            @endforelse
        </select>
    </div>
</div>
