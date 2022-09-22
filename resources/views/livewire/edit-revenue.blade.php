<div>
    <div class="form-group">
        <label for="">Select User:</label>
        <select class="form-control" id="" name="id" wire:model>
            @forelse ($users as $user)
            <option value="{{ $user->id }}">{{ $user->username }}</option>
            @empty
                <option value="">There is no registered user yet</option>
            @endforelse
        </select>
    </div>

    <div class="form-group">
        <label for="">Current Revenue</label>
        <input type="text" name="old_profit" class="form-control" wire:model='old_balance'>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" id="" placeholder="Enter new balance" name="amount" required>
    </div>
</div>
