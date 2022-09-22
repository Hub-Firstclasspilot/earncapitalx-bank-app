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
        <label for="">Old Balance</label>
        <input type="text" wire:model='balance' class="form-control"  placeholder="Enter new balance" name="amount" required>
    </div>

    <div class="form-group">
        <label for="">New Balance</label>
        <input type="text" class="form-control" name="new_amount">
    </div>
</div>
