<div>
   <div class="form-group">
        <label for="plan">Select Plan to Edit</label>
        <select class="form-control" name="uuid" id="plan" wire:model='plan'>
        <option>Select plan</option>
        @forelse ($plans as $plan)
        <option value="{{ $plan->uuid }}">Type: {{ $plan->plan }} : Profit: {{ $plan->profit }} : Date: {{ date('jS M, Y', strtotime($plan->date_invested )) }}</option>
        @empty
        <option>You have no investments yet</option>
        @endforelse
        </select>
    </div>

    <div class="form-group">
        <label for="percentage">Percentage</label>
        <input type="number" name="percentage" id="percentage" class="form-control" value="" aria-describedby="helpIdPercentage" wire:model='percentage'>
        <small id="helpIdPercentage" class="text-muted">Alter percentage profit of investment plan</small>
    </div>

    <div class="form-group">
        <label for="duration">Duration</label>
        <input type="number" name="duration" id="duration" class="form-control" value="" aria-describedby="helpIdDuration" wire:model='duration'>
        <small id="helpIdDuration" class="text-muted">Alter the duration of the investment plan</small>
    </div>

    <div class="form-group">
      <label for="plan_status">Plan Status</label>
      <select class="form-control" name="status" id="plan_status" wire:model='status'>
        <option>Select the plan status</option>
        <option value="Pending">Pending</option>
        <option value="Progressing">Progressing</option>
      </select>
    </div>
</div>
